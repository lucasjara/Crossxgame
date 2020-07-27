<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_productos;

class Resultado extends BaseController
{
    public function index()
    {
    	$Model_productos = new Model_productos($db);
		
    	$request = \Config\Services::request();
    	$nombre = $request->getPostGet('nombre');

    	$productos = $Model_productos->BuscarProducto($nombre);
		if ($productos !="" && $productos !=null) {
			
			$datos['productos']= $productos;

			$productos = array('productos'=>$productos);	
			//var_dump($productos);
        	return $this->vista2('resultado/vista',$datos);
        	
		}else{
			echo "murio";
		}
		
    }
}