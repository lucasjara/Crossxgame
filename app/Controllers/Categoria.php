<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_productos;

class Categoria extends BaseController
{



    public function index()
    {

    	$request = \Config\Services::request();
    	$id_depto = $request->getPostGet('id_depto');

    	$Model_productos = new Model_productos($db);
    	
    	$productos = $Model_productos->BuscarDepto($id_depto);
		if ($productos !="" && $productos !=null) {
			
			$datos['productos']= $productos;

			$productos = array('productos'=>$productos);	
			//var_dump($datos);
        	 return $this->vista2('Categoria/vista',$datos);
        	
		}else{
			
            return redirect()->to('error');
		
        }	
		
       
    }
}