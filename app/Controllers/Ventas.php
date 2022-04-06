<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VentasModel;
use App\Models\TemporalCompraModel;
use App\Models\DetalleVentaModel;
use App\Models\ProductosModel;
use App\Models\ConfiguracionModel;
use PDF;

class Ventas extends BaseController
{

    protected $ventas, $temporal_compra, $detalle_venta, $productos, $configuracion;


    public function __construct()
    {
        $this->ventas = new VentasModel();
        $this->detalle_venta = new DetalleVentaModel();
        $this->configuracion = new ConfiguracionModel();
        helper(['form']);
        
    }
   
    public function ventas()
    {
        echo view('header');
        echo view('ventas/caja');
        echo view('footer');
    }

    public function guarda()
    {
        $id_venta = $this->request->getPost('id_venta');
        $total = preg_replace('/[\$,]/', '',$this->request->getPost('total'));
        $forma_pago = $this->request->getPost('forma_pago');
        $id_cliente = $this->request->getPost('id_cliente');

        $session = session();

        //se insertan las ventas con la sesion de lo usuario que este en el sistema
        $resultadoId = $this->ventas->insertaVenta($id_venta, $total, $session->id_usuario,$session->id_caja, $id_cliente, $forma_pago);

        $this->temporal_compra = new TemporalCompraModel();

        if($resultadoId){

            //se traen los registros que corresponde a la transaccion de compras que esta en la tabla temporal_compra 

            $resultadoCompra = $this->temporal_compra->porCompra($id_venta);

            foreach ($resultadoCompra as $row){
                $this->detalle_venta->save([
                    'id_venta' => $resultadoId,
                    'id_producto' => $row['id_producto'],
                    'nombre' => $row['nombre'],
                    'cantidad' => $row['cantidad'],
                    'precio' => $row['precio']
                ]);

                $this->productos= new ProductosModel();
                $this->productos->actualizarStock($row['id_producto'], $row['cantidad'], '-');
            }

            $this->temporal_compra->eliminarCompra($id_venta);
        }

        return redirect()->to(base_url()."/ventas/muestraTicket/".$resultadoId);
  
    } 

    function muestraTicket($id_venta){
        $data['id_venta']= $id_venta;
        echo view('header');
        echo view('ventas/ver_ticket',$data);
        echo view('footer');
    }


    function generaTicket($id_venta){
        $datosVenta = $this->ventas->where('id', $id_venta)->first();

        $detalleVenta = $this->detalle_venta->select('*')->where('id_venta', $id_venta)->findAll();

        $nombreTienda = $this->configuracion->select('valor')->where('nombre', 'tienda_nombre')->get()->getRow()->valor;
        $direccionTienda = $this->configuracion->select('valor')->where('nombre', 'tienda_direccion')->get()->getRow()->valor;
        $leyendaTicket = $this->configuracion->select('valor')->where('nombre', 'ticket_descripcion')->get()->getRow()->valor;


        $pdf = new \FPDF('P', 'mm', array(100, 200));
        $pdf->AddPage();
        $pdf->SetMargins(5, 5, 5);
        $pdf->SetTitle("Venta");
        $pdf->SetFont('Arial', 'B', 9);

        $pdf->Cell(70, 5, utf8_decode($nombreTienda), 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 9);

        $pdf->Image(base_url(). '/img/garantia.jpg', 70, 0, 30, 20, 'JPG');

        $pdf->SetFont('Arial', '',9);
        $pdf->Cell(70, 5, $direccionTienda, 0, 1,'C');

        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(25, 5, utf8_decode('Fecha y hora: '), 0, 0,'L');

        $pdf->SetFont('Arial', '',9);
        $pdf->Cell(50, 5, $datosVenta['fecha_alta'], 0, 1, 'L');

        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(25, 5, utf8_decode('Ticket: '), 0, 0,'L');
        $pdf->SetFont('Arial', '',9);
        $pdf->Cell(50, 5, $datosVenta['folio'], 0, 1, 'L');

        $pdf->Ln();

        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(8, 5, 'cant.', 1, 0, 'L');
        $pdf->Cell(38, 5, 'Nombre', 1, 0, 'L');
        $pdf->Cell(20, 5, 'Precio', 1, 0, 'L');
        $pdf->Cell(20, 5, 'Importe', 1, 1, 'L');

        $pdf->SetFont('Arial', '', 8);

        $contador = 1;
        
        foreach($detalleVenta as $row){
            $pdf->Cell(8, 5, $row['cantidad'], 0, 0, 'L');
            $pdf->Cell(38, 5, $row['nombre'], 0, 0, 'L');
            $pdf->Cell(20, 5, $row['precio'], 0, 0, 'L');
            $importe = number_format($row['precio'] * $row['cantidad'], 2, '.', ',');
            $pdf->Cell(20, 5, '$'. $importe, 0, 1, 'R');
            $contador++;

        }

        $pdf->Ln();

        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(80, 5, 'Total $ '. number_format($datosVenta['total'], 2, '.', ','), 0, 1, 'R');

        $pdf->Ln();
        $pdf->MultiCell(80, 4,utf8_decode($leyendaTicket), 0, 'C', 0);

        $this->response->setHeader('Content-Type', 'application/pdf');
        $pdf->Output("ticket.pdf.pdf", "I");
    }

}
