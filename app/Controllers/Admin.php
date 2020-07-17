<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_productos; 

class Admin extends BaseController
{ 
  public function _constructor(){
	helper('form');
}

    public function index()
    {
    	$Model_productos = new Model_productos($db);
 		//insertar datos automaticos
 		//$data=['nombre'=>"rssdasdd",'stock'=>"0",'precio'=>"28911",'Descripcion'=>"asldjhasidaslkas",'id_depto'=>"1"];
 		//	$Model_productos->insert($data);
 		//eliminar datos por id
		//$Model_productos->delete([762,763,764]);
		$productos = $Model_productos->findAll();
		$productos = array('productos'=>$productos);	
	


 		return $this->vistaarray('admin/vista',$productos);
 		
    }
    public function guardarProducto()
    {
    	$request = \Config\Services::request();

    	$Model_productos = new Model_productos($db);

    	$data = array('nombre'=>$request->getPostGet('nombre') );
    	$Model_productos->insert($data);
    }

}

   