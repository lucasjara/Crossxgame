<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_registro;

class Login extends BaseController
{  

    public function index()
    {
    	$request = \Config\Services::request();

    	$Model_registro = new Model_registro($db); 
    	$correo = $request->getPostGet('emailLogin') ;
    	$password = $request->getPostGet('contraseñaLogin');
		//$Model_registro->Login($correo, $password);
		$resultado= $Model_registro->Login($correo, $password);
		//echo $resultado;
		if($resultado!='N'){
			$this->response->setContentType('Content-Type: application/json');
        	echo (json_encode($resultado));
    	}else{
    		
    	}

    }
  //  public function login(){

//	}

}
