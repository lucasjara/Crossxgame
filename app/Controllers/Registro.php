<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_registro;

class Registro extends BaseController
{
   
    public function index()
    {
       
        $modelo = new Model_registro($db);
        $datos['arrProfesiones'] = $modelo->ObtenerRegiones();
        //$datos['arrComuna'] = $modelo->ObtenerComuna();
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
            'email'=>$request->getPostGet('email'),
            'comuna_id'=>$request->getPostGet('comuna'),
            'direccion'=>$request->getPostGet('direccion'),
            'f_nacimiento'=>$request->getPostGet('fnacimiento'),
            'contrasenia'=>$request->getPostGet('contrasenia')
        );
     //echo ($data);
      $Model_registro->insert($data); 
    }
    function ObtenerComuna(){
      $request = \Config\Services::request();
      if($request->getPostGet('combo')){
        $modelo = new Model_registro($db);
         
        $mensaje = $modelo->ObtenerComuna($request->getPostGet('combo'));
        $this->response->setContentType('Content-Type: application/json');
        echo (json_encode($mensaje));

      }
    }
}