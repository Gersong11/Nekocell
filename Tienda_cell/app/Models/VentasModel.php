<?php

namespace APP\Models;
use CodeIgniter\Model;


class VentasModel extends Model{

     /* Nombre de la tabla de la base de datos con la Pk */
     protected $table      = 'ventas';
     protected $primaryKey = 'id';
 
     /* Formato de como resibir los datos de la base de datos  */
 
     protected $returnType     = 'array';
     protected $useSoftDeletes = false;
 
     /* Resivo los campos de la tabla marcas */
 

      		
     protected $allowedFields = ['folio', 'total', 'id_usuario', 'id_caja', 'id_cliente', 'forma_pago', 	'activo' ];
 
     /*  Opciones de fecha de creacion, modificar y eliminar */
 
     protected $useTimestamps = true;
     protected $createdField  = 'fecha_alta';
     protected $updatedField  = '';
     protected $deletedField  = '';
 
     protected $validationRules    = [];
     protected $validationMessages = [];
     protected $skipValidation     = false;


     public function insertaVenta($id_venta, $total, $id_usuario, $id_caja, $id_cliente, $forma_pago){
          $this->insert([
               'folio' => $id_venta,
               'total' => $total,
               'id_usuario' => $id_usuario,
               'id_caja' => $id_caja,
               'id_cliente' => $id_cliente,
               'forma_pago' => $forma_pago
          ]);

          return $this->insertID();
     }
}


?>