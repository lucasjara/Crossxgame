<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_productos; 

class Prueba extends BaseController
{
    public function index(){

    	$Model_productos = new Model_productos($db);
		
		 $productos = $Model_productos->NuevosPs4();

		 $datos['prodswitch']=$Model_productos->NuevosSwitch();


		 $datos['prodxbox']=$Model_productos->Nuevosxbox();

		 $datos['prodAcc']=$Model_productos->NuevosAccesorios();

		 $datos['prodfiguras']=$Model_productos->NuevosFiguras();

  		 $datos['prodps4'] = $productos;

		$productos = array('prodps4'=>$productos);	 

 		return $this->vista2('prueba/vista',$datos);
    }
}