<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_depto;

class Adminpd extends BaseController
{

    public function index()
    {
      $session = \Config\Services::session();
      $Rol = $session->get('Rol');
      if($Rol == 'admin'){    
		    $Model_depto = new Model_depto($db);
		    $datos = $Model_depto->findAll();
		    $datos = array('departamento'=>$datos);	
 		    return $this->vistaarray('adminpd/vista',$datos);	
      }else{
        return redirect()->to('prueba');
      } 
    }
	
	public function guardarDepto()
    {
    	$request = \Config\Services::request();

    	$Model_depto = new Model_depto($db);

   $data = array('descripcion_depto'=>$request->getPostGet('descripcion_depto')
   				 );

    	$Model_depto->insert($data);
      $this->response->setContentType('Content-Type: application/json');
        echo (json_encode('1'));  
    }


    public function updateDepto()
    {
      $request = \Config\Services::request();

      $Model_depto = new Model_depto($db);
    
    $data = array(
    'descripcion_depto'=>$request->getPostGet('descripcion_depto'));
   
      $Model_depto->update($request->getPostGet('id_depto'),$data);

      $this->response->setContentType('Content-Type: application/json');
        echo (json_encode('1'));  
    }

}