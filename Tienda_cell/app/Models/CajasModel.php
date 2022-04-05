<?php

namespace APP\Models;
use CodeIgniter\Model;


class CajasModel extends Model{

     /* Nombre de la tabla de la base de datos con la Pk */
     protected $table      = 'cajas';
     protected $primaryKey = 'id';
 
     /* Formato de como resibir los datos de la base de datos  */
 
     protected $returnType     = 'array';
     protected $useSoftDeletes = false;
 
     /* Resivo los campos de la tabla marcas */
 	
     protected $allowedFields = ['numero_caja', 'nombre_caja', 'folio', 'activo'];
 
     /*  Opciones de fecha de creacion, modificar y eliminar */
 
     protected $useTimestamps = true;
     protected $createdField  = 'fecha_alta';
     protected $updatedField  = 'fecha_edit';
     protected $deletedField  = 'deleted_at';
 
     protected $validationRules    = [];
     protected $validationMessages = [];
     protected $skipValidation     = false;
}


?>