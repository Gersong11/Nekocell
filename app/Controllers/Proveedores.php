<?php

namespace App\Controllers;
 
use App\Controllers\BaseController;
use App\Models\ProveedoresModel;

class Proveedores extends BaseController{

    protected $proveedores;

    public function __construct(){
        $this->proveedores = new ProveedoresModel();

    }

    public function index($activo = 1){
        //realizo la consulta a la base de datos y traigo el dato activo. 
        $proveedores = $this->proveedores->where('activo',$activo)->findAll(); 
        $data = ['titulo' => 'Proveedores', 'datos'=>$proveedores];

        echo view('header');
        echo view('proveedores/proveedores', $data); 
        echo view('footer');
    }

    public function eliminados($activo = 0){
        //realizo la consulta a la base de datos y traigo el dato activo. 
        $proveedores = $this->proveedores->where('activo',$activo)->findAll(); 
        $data = ['titulo' => 'Proveedores eliminadas', 'datos'=>$proveedores];

        echo view('header');
        echo view('proveedores/eliminados', $data); 
        echo view('footer');
    }

    public function nuevo(){
        $data =['titulo' => 'Agregar proveedor'];

        echo view('header');
        echo view('proveedores/nuevo', $data); 
        echo view('footer');

    }

    public function insertar (){
        $this->proveedores->save(['nombre' => $this->request->getPost('nombre'),'telefono' => 
        $this->request->getPost('telefono'),'descripcion' => $this->request->getPost('descripcion'),'direccion' => $this->request->getPost('direccion')]);
        return redirect()->to(base_url().'/proveedores');
    }

    public function editar($id){
        $marca = $this->proveedores->where('id',$id)->first(); 
        $data =['titulo' => 'Editar proveedores', 'datos' => $marca];

        echo view('header');
        echo view('proveedores/editar', $data); 
        echo view('footer');

    }

    public function actualizar (){
        $this->proveedores->update($this->request->getPost('id'),['nombre' => $this->request->getPost('nombre'),'telefono' => 
        $this->request->getPost('telefono'),'descripcion' => $this->request->getPost('descripcion'),'direccion' => $this->request->getPost('direccion')]);
        return redirect()->to(base_url().'/proveedores');
    }

    
    public function eliminar ($id){
        $this->proveedores->update($id, ['activo' => 0]);
        return redirect()->to(base_url().'/proveedores');
    }

    public function reingresar ($id){
        $this->proveedores->update($id, ['activo' => 1]);
        return redirect()->to(base_url().'/proveedores');
    }
}
