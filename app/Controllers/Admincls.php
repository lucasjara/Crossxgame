<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_registro;

class Admincls extends BaseController
{
	public function index()
	{	
      $session = \Config\Services::session();
      $Rol = $session->get('Rol');
    if($Rol == 'admin'){
      $request = \Config\Services::request();
      $rut = $request->getPostGet('rut');
      if($rut !="" && $rut !=null){
        $Model_registro = new Model_registro($db);
        $cliente = $Model_registro->BuscarCliente($rut);
        $datos['cliente'] = $cliente;
        $cliente = array('cliente'=>$cliente);
        return $this->vistaarray('Admincls/vista',$datos); 
      }else{
        
      $Model_registro = new Model_registro($db);

      $cliente = $Model_registro->obtenerCliente();

      $datos['cliente'] = $cliente;

      $cliente = array('cliente'=>$cliente);  
  	  return $this->vistaarray('Admincls/vista',$datos);
      }	
    }else{
      return redirect()->to('prueba');
    } 
	}
	
   public function cambiarEstado()
    {
      $request = \Config\Services::request();
      
    	$Model_registro = new Model_registro($db);
    
      $data = array('estado'=>$request->getPostGet('estado'));
          
      $Model_registro->update($request->getPostGet('id'),$data);
      
      $this->response->setContentType('Content-Type: application/json');
        echo (json_encode('1'));  
      
    }
}
