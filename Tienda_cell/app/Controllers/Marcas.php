<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MarcasModel;

class Marcas extends BaseController
{

    protected $marcas;
    protected $reglas;

    public function __construct()
    {
        $this->marcas = new MarcasModel();
        helper(['form']);
        $this->reglas = [
            'nombre' => [

                'rules' => 'required',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio'
                ]
            ],
            'descripcion' => [

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
        $marcas = $this->marcas->where('activo', $activo)->findAll();
        $data = ['titulo' => 'Marcas', 'datos' => $marcas];

        echo view('header');
        echo view('marcas/marcas', $data);
        echo view('footer');
    }

    public function eliminados($activo = 0)
    {
        //realizo la consulta a la base de datos y traigo el dato activo. 
        $marcas = $this->marcas->where('activo', $activo)->findAll();
        $data = ['titulo' => 'Marcas eliminadas', 'datos' => $marcas];

        echo view('header');
        echo view('marcas/eliminados', $data);
        echo view('footer');
    }

    public function nuevo()
    {
        $data = ['titulo' => 'Agregar marca'];

        echo view('header');
        echo view('marcas/nuevo', $data);
        echo view('footer');
    }

    public function insertar()
    {

        if ($this->request->getMethod() == "post" && $this->validate($this->reglas)) {

            $this->marcas->save(['nombre' => $this->request->getPost('nombre'), 'descripcion' => $this->request->getPost('descripcion')]);
            return redirect()->to(base_url() . '/marcas');
        } else {
            $data = ['titulo' => 'Agregar marca', 'validation' => $this->validator];

            echo view('header');
            echo view('marcas/nuevo', $data);
            echo view('footer');
        }
    }

    public function editar($id, $valid=null)
    {
        $marca = $this->marcas->where('id', $id)->first();

        if($valid != null){
            $data = ['titulo' => 'Editar marca', 'datos' => $marca, 'validation' => $valid];
        }else {
            $data = ['titulo' => 'Editar marca', 'datos' => $marca];
        }
       
        echo view('header');
        echo view('marcas/editar', $data);
        echo view('footer');
    }

    public function actualizar()
    {
        if ($this->request->getMethod() == "post" && $this->validate($this->reglas)){
        $this->marcas->update($this->request->getPost('id'), ['nombre' => $this->request->getPost('nombre'), 'descripcion' => $this->request->getPost('descripcion')]);
        return redirect()->to(base_url() . '/marcas');
        } else {
            return $this->editar($this->request->getPost('id'), $this->validator);
        }
    }


    public function eliminar($id)
    {
        $this->marcas->update($id, ['activo' => 0]);
        return redirect()->to(base_url() . '/marcas');
    }

    public function reingresar($id)
    {
        $this->marcas->update($id, ['activo' => 1]);
        return redirect()->to(base_url() . '/marcas');
    }
}
