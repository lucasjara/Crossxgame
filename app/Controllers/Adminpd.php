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

   $data = array('descripcion'=>$request->getPostGet('descripcion')
   				 );

    	$Model_depto->insert($data);
    }

    public function eliminarProducto()
    {
      $request = \Config\Services::request();

      $Model_depto = new Model_depto($db);

 	  $data = array('id_depto'=>$request->getPostGet('id_depto'));



      $Model_depto->delete($data);
    }

}