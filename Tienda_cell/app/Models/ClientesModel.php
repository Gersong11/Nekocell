<?php

namespace APP\Models;
use CodeIgniter\Model;


class ClientesModel extends Model{

     /* Nombre de la tabla de la base de datos con la Pk */
     protected $table      = 'clientes';
     protected $primaryKey = 'id';
 
     /* Formato de como resibir los datos de la base de datos  */

     protected $returnType     = 'array';
     protected $useSoftDeletes = false;
 
     /* Resivo los campos de la tabla marcas */

     protected $allowedFields = ['nombre', 'cedula', 'direccion', 'telefono', 'email', 'mayorista', 'activo', 'fecha_alta', 'fecha_edit'];
 
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