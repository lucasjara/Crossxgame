<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_productos;

class Adminlp extends BaseController
{

    public function index()
    {
          $session = \Config\Services::session();
          $Rol = $session->get('Rol');
        if($Rol == 'admin'){   
            $request = \Config\Services::request();
            $nombre = $request->getPostGet('nombre');
             if($nombre !="" && $nombre !=null){
                    $Model_productos = new Model_productos($db);
                    $productos = $Model_productos->BuscarProducto($nombre);
                    $datos['arrayDepto'] = $Model_productos->ObtenerDepto();
                    $datos['productos']= $productos;
                    $productos = array('productos'=>$productos); 
                    return $this->vistaarray('adminlp/vista',$datos);
             }else{
                    $Model_productos = new Model_productos($db);
                    $productos = $Model_productos->obtenerProducto();
                    $datos['arrayDepto'] = $Model_productos->ObtenerDepto();
                    $datos['productos'] = $productos;
                    $productos = array('productos'=>$productos);  
                    return $this->vistaarray('adminlp/vista',$datos);
             }
        }else{
            return redirect()->to('prueba');
        }
    }
	

    public function eliminarProducto()
    {
      $request = \Config\Services::request();

    $Model_productos = new Model_productos($db);

 	  $data = array('id'=>$request->getPostGet('id'));


    $Model_productos->delete($data);;
    }
}