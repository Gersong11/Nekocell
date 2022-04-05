<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ConfiguracionModel;

class Configuracion extends BaseController
{

    protected $configuracion;
    protected $reglas;

    public function __construct()
    {
        $this->configuracion = new ConfiguracionModel();
        helper(['form']);
        $this->reglas = [
            'tienda_nombre' => [

                'rules' => 'required',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio'
                ]
            ],
            'tienda_Id' => [

                'rules' => 'required',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio'
                ]
            ],
        ];
    }

    public function index($activo = 1)
    {
        //realizo la consulta a la base de datos y traigo el dato activo. 
        $nombre = $this->configuracion->where('nombre', 'tienda_nombre')->first();
        $tienda_Id = $this->configuracion->where('nombre', 'tienda_Id')->first();
        $tienda_telefono = $this->configuracion->where('nombre', 'tienda_telefono')->first();
        $tienda_direccion = $this->configuracion->where('nombre', 'tienda_direccion')->first();
        $ticket_descripcion = $this->configuracion->where('nombre', 'ticket_descripcion')->first();
        $data = ['titulo' => 'Configuracion', 'nombre' => $nombre,'tienda_Id' => $tienda_Id,'tienda_telefono' => $tienda_telefono,'tienda_direccion' => $tienda_direccion, 'ticket_descripcion' => $ticket_descripcion ];

        echo view('header');
        echo view('configuracion/configuracion',$data);
        echo view('footer');
    }

    public function actualizar()
    {
        if ($this->request->getMethod() == "post" && $this->validate($this->reglas)){

            $this->configuracion->whereIn('nombre',['tienda_nombre'])->set(['valor' => $this->request->getPost('tienda_nombre')])->update();

            $this->configuracion->whereIn('nombre',['tienda_Id'])->set(['valor' => $this->request->getPost('tienda_Id')])->update();

            $this->configuracion->whereIn('nombre',['tienda_telefono'])->set(['valor' => $this->request->getPost('tienda_telefono')])->update();

            $this->configuracion->whereIn('nombre',['tienda_direccion'])->set(['valor' => $this->request->getPost('tienda_direccion')])->update();

            $this->configuracion->whereIn('nombre',['ticket_descripcion'])->set(['valor' => $this->request->getPost('ticket_descripcion')])->update();

            return redirect()->to(base_url(). '/configuracion');
        } else {
           // return $this->editar($this->request->getPost('id'), $this->validator);
        }
    }
}
