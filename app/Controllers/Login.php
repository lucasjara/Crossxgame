<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_registro;

class Login extends BaseController
{  

	public function __constructor(){

		parent::__construct();
		
	}
    public function index()
    {
    	//$session = \Config\Services::session($config);
    	$request = \Config\Services::request();
    	$session = \Config\Services::session();
    	
    	$Model_registro = new Model_registro($db); 

    	$correo = $request->getPostGet('emailLogin') ;
    	$contraseña = $request->getPostGet('contraseñaLogin');
		$Model_registro->Login($correo, $contraseña); 

		

		$valor = $Model_registro->Login($correo, $contraseña);
		if($valor != null){
			echo "paso";
			// $session->set($valor);
			// redirect('/prueba/vista', 'refresh');
		}else{
			echo "cago";
		}


    }
}
