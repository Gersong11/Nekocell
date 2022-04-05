<?php

namespace APP\Models;
use CodeIgniter\Model;


class DetalleCompraModel extends Model{

     /* Nombre de la tabla de la base de datos con la Pk */
     protected $table      = 'detalle_compra';
     protected $primaryKey = 'id';
 
     /* Formato de como resibir los datos de la base de datos  */
 
     protected $returnType     = 'array';
     protected $useSoftDeletes = false;
 
     /* Resivo los campos de la tabla marcas */
 
		 	 	
 
     protected $allowedFields = ['id_compra', 'id_producto', 'nombre', 'cantidad', 'precio'];
 
     /*  Opciones de fecha de creacion, modificar y eliminar */
 
     protected $useTimestamps = true;
     protected $createdField  = 'fecha_alta';
     protected $updatedField  = '';
     protected $deletedField  = '';
 
     protected $validationRules    = [];
     protected $validationMessages = [];
     protected $skipValidation     = false;

}


?>