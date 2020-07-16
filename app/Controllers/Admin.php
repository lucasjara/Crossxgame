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

    public function guardar(){
 	
		$request = \Config\Servicies::request();

		$data=array(
		'nombre'=>$request->getPostGet('nombre'),
		'precio'=>$request->getPostGet('precio'),
		'stock'=>$request->getPostGet('stock'),
		'Descripcion'=>$request->getPostGet('descripcion'),
		'id_depto'=>$request->getPostGet('id_depto')
		//,'img'=>$request->getPostGet('img')
		);
		if($Model_productos->insert($data)===false){

		}
		return $this->vistaarray('admin/vista',$productos);
 	 	 
	}
		
}

   