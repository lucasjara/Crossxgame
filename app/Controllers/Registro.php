<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_registro;

class Registro extends BaseController
{
   
    public function index()
    {
        $request = \Config\Services::request();
        $rol = $request->getPostGet('rol'); 
        $modelo = new Model_registro($db);

        $datos['arrProfesiones'] = $modelo->ObtenerRegiones();
        $datos['rol'] = $rol;
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
            'contrasenia'=>password_hash($request->getPostGet('contrasenia'), PASSWORD_DEFAULT, array("cost"=>12)),
            'estado'=>'1',
            'rol'=> $request->getPostGet('rol') 
                   );
 
      $Model_registro->insert($data); 
      $this->response->setContentType('Content-Type: application/json');
        echo (json_encode('1'));
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