<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_depto;

class Adminpd extends BaseController
{

    public function index()
    {
 		//insertar datos automaticos
 		//$data=['nombre'=>"rssdasdd",'stock'=>"0",'precio'=>"28911",'Descripcion'=>"asldjhasidaslkas",'id_depto'=>"1"];
 		//	$Model_productos->insert($data);
 		//eliminar datos por id
		$Model_depto = new Model_depto($db);
		$datos = $Model_depto->findAll();
		$datos = array('departamento'=>$datos);	
    
 		return $this->vistaarray('adminpd/vista',$datos);	
       
    }
	
	public function guardarDepto()
    {
    	$request = \Config\Services::request();

    	$Model_depto = new Model_depto($db);

   $data = array('descripcion_depto'=>$request->getPostGet('descripcion_depto')
   				 );

    	$Model_depto->insert($data);
    }


    public function updateDepto()
    {
      $request = \Config\Services::request();

      $Model_depto = new Model_depto($db);
    
    $data = array(
    'descripcion_depto'=>$request->getPostGet('descripcion_depto'));
   
      $Model_depto->update($request->getPostGet('id_depto'),$data);
    }

}