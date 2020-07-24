<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_registro;

class Login extends BaseController
{  

    public function index()
    {
    	$session = \Config\Services::session();
    	$request = \Config\Services::request();

    	$Model_registro = new Model_registro($db); 
    	$correo = $request->getPostGet('emailLogin') ;
    	$password = $request->getPostGet('contraseñaLogin');
		//$Model_registro->Login($correo, $password);
		$resultado= $Model_registro->Login($correo, $password);
		//echo $resultado;
		if($resultado!='N'){
			foreach ($resultado as $row) {
                $clientes = array(
                'Codigo' => $row->id,
                'Nombre' => $row->nombre,
                'logged_in' => TRUE
               );
            
            $session->set($clientes);
			//var_dump($clientes);
			//$this->$session->set();
			//var_dump($session);
            //echo $this->session->get("id_usuario");
			$this->response->setContentType('Content-Type: application/json');
            echo (json_encode($session->get('Nombre')));

        }
        //return $this->vista2('master/head',$session);
        echo "aqui";
        //$this->vista2('master/head',$session);
        return TRUE;
    	}else{
            echo "cago";
        return false;
        
    	}

    }
    
}
