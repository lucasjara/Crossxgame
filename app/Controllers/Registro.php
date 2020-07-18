<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_registro;

class Registro extends BaseController
{
    public function index()
    {
        $modelo = new Model_registro($db);

        $datos['arrProfesiones'] = $modelo->ObtenerRegiones();
        return $this->vista2('registro/vista',$datos);
    }
    public function guardar()
    {
      $request = \Config\Services::request();
      //echo $request->getPostGet('email');
       $Model_registro = new Model_registro($db);
      

        $data = array(
            'nombre'=>$request->getPostGet('nombre'),
            'apellido'=>$request->getPostGet('apellido'),
            'rut'=>$request->getPostGet('rut'),
            'email'=>$request->getPostGet('email')
        );
     //echo ($data);
      $Model_registro->insert($data);
     
    }
}