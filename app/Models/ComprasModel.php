<?php

namespace APP\Models;
use CodeIgniter\Model;


class ComprasModel extends Model{

     /* Nombre de la tabla de la base de datos con la Pk */
     protected $table      = 'compras';
     protected $primaryKey = 'id';
 
     /* Formato de como resibir los datos de la base de datos  */
 
     protected $returnType     = 'array';
     protected $useSoftDeletes = false;
 
     /* Resivo los campos de la tabla marcas */
 

 
     protected $allowedFields = ['folio', 'total','id_usuario','activo'];
 
     /*  Opciones de fecha de creacion, modificar y eliminar */
 
     protected $useTimestamps = true;
     protected $createdField  = 'fecha_alta';
     protected $updatedField  = '';
     protected $deletedField  = '';
 
     protected $validationRules    = [];
     protected $validationMessages = [];
     protected $skipValidation     = false;


     public function insertarCompra($id_compra, $total, $id_usuario){
          $this->insert([
               'folio' => $id_compra,
               'total' => $total,
               'id_usuario' => $id_usuario,
          ]);

          return $this->insertID();
     }
}


?>