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
    	$session = \Config\Services::session($config);
    	//$session = \Config\Services::session();
    	
    	$Model_registro = new Model_registro($db); 
    	$datos = $Model_registro->Login();
		$datos = array('cliente'=>$datos);	
		//$valor = $Model_registro->Login();

		//var_dump($valor);
		if($datos != null){
			echo "paso";
			var_dump($datos);
			//$session->set($correo, $contraseña);
			//var_dump($correo, $contraseña);
			// redirect('/prueba/vista', 'refresh');
		}else{
			echo "cago de nuevo por la puta";
		}
    }
    public function login(){
    	$request = \Config\Services::request();

    	$Model_registro = new Model_registro($db); 
    	$correo = $request->getPostGet('emailLogin') ;
    	$contraseña = $request->getPostGet('contraseñaLogin');
		$Model_registro->Login($correo, $contraseña); 
    }

}
