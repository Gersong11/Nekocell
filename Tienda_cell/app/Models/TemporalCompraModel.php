<?php

namespace APP\Models;
use CodeIgniter\Model;


class TemporalCompraModel extends Model{

     /* Nombre de la tabla de la base de datos con la Pk */
     protected $table      = 'temporal_compra';
     protected $primaryKey = 'id';
 
     /* Formato de como resibir los datos de la base de datos  */
 
     protected $returnType     = 'array';
     protected $useSoftDeletes = false;
 
     /* Resivo los campos de la tabla marcas */
 
	
 
     protected $allowedFields = ['folio', 'id_producto', 'codigo', 'nombre','cantidad', 'precio','subtotal'];
 
     /*  Opciones de fecha de creacion, modificar y eliminar */
 
     protected $useTimestamps = false;
     protected $createdField  = '';
     protected $updatedField  = '';
     protected $deletedField  = '';
 
     protected $validationRules    = [];
     protected $validationMessages = [];
     protected $skipValidation     = false;

     public function porIdProductoCompra($id_producto, $folio){
          $this->select('*');
          $this->where('folio',$folio);
          $this->where('id_producto',$id_producto);
          $datos = $this->get()->getRow();
          return $datos;
     }

     public function porCompra($folio){
          $this->select('*');
          $this->where('folio', $folio);
          $datos = $this->findAll();
          return $datos;
     }

     public function actualizarProductoCompra($id_producto, $folio, $cantidad, $subtotal){
          $this->set('cantidad', $cantidad);
          $this->set('subtotal', $subtotal);
          $this->where('id_producto', $id_producto);
          $this->where('folio', $folio);
          $this->update();
     }


     public function eliminaProductoCompra($id_producto, $folio){
          $this->where('id_producto', $id_producto);
          $this->where('folio', $folio);
          $this->delete();
     }

     public function eliminarCompra($folio){
          $this->where('folio', $folio);
          $this->delete();
     }
}


?>