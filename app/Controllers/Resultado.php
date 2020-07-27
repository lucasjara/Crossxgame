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
			
        	return $this->vista2('resultado/vista',$datos);
		}else{
			echo "murio";
		}
		// foreach ($productos as $row) {
		// 		$producto['id']= $row->id;
		// 		$producto['nombre']=$row->nombre;
		// 		$producto['precio']=$row->precio;
		// 		$producto['stock']=$row->stock;
		// 		$producto['descripcion']=$row->descripcion;
		// 		$producto['id_depto']=$row->id_depto;
		// 		$producto['img']=$row->img;
		// }
		
		//$productos = $Model_productos->findAll();
		
    }
}