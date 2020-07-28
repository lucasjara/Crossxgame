<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_productos;

class Resultado extends BaseController
{
    public function index()
    {
    	$request = \Config\Services::request();
    	$nombre = $request->getPostGet('nombre');

    	$Model_productos = new Model_productos($db);
    	
    	$productos = $Model_productos->BuscarProducto($nombre);
		if ($productos !="" && $productos !=null) {
			
			$datos['productos']= $productos;

			$productos = array('productos'=>$productos);	
			//var_dump($datos);
        	return $this->vista2('resultado/vista',$datos);
        	
		}else{
			
            return redirect()->to('error');
		
        }
		
    }
}