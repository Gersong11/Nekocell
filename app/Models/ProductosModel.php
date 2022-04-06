<?php

namespace APP\Models;
use CodeIgniter\Model;


class ProductosModel extends Model{

     /* Nombre de la tabla de la base de datos con la Pk */
     protected $table      = 'productos';
     protected $primaryKey = 'id';
 
     /* Formato de como resibir los datos de la base de datos  */
 
     protected $returnType     = 'array';
     protected $useSoftDeletes = false;
 
     /* Resivo los campos de la tabla marcas */

     protected $allowedFields = ['codigo', 'nombre','precio_venta', 'precio_compra','existencias','total_productos','inventariable','id_marcas','id_proveedores','tipo_producto','activo' ];
 
     /*  Opciones de fecha de creacion, modificar y eliminar */
 
     protected $useTimestamps = true;
     protected $createdField  = 'fecha_alta';
     protected $updatedField  = '';
     protected $deletedField  = 'deleted_at';
 
     protected $validationRules    = [];
     protected $validationMessages = [];
     protected $skipValidation     = false; 

     public function actualizarStock($id_producto, $cantidad, $operador = '+'){
          $this->set('total_productos', "total_productos $operador $cantidad", FALSE);
          $this->where('id', $id_producto);
          $this->update();
     }
}


?>