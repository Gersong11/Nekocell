<?php

namespace APP\Models;
use CodeIgniter\Model;


class ConfiguracionModel extends Model{

     /* Nombre de la tabla de la base de datos con la Pk */
     protected $table      = 'configuracion';
     protected $primaryKey = 'id';
 
     /* Formato de como resibir los datos de la base de datos  */
 
     protected $returnType     = 'array';
     protected $useSoftDeletes = false;

 
     /* Resivo los campos de la tabla marcas */
 
 
     protected $allowedFields = ['nombre','valor'];
 
     /*  Opciones de fecha de creacion, modificar y eliminar */
 
     protected $useTimestamps = true;
     protected $createdField  = null;
     protected $updatedField  = null;
     protected $deletedField  = 'deleted_at';
 
     protected $validationRules    = [];
     protected $validationMessages = [];
     protected $skipValidation     = false;
}


?>