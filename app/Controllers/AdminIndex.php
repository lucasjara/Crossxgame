<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Model_productos;
use App\Models\Model_reserva;
use App\Models\Model_registro;
use App\Models\Model_depto;
class AdminIndex extends BaseController

{
    public function index()
    {
	    $session = \Config\Services::session();
	    $Rol = $session->get('Rol');
	    if($Rol == 'admin'){

	$Model_registro = new Model_registro($db);
	 $Model_reserva = new Model_reserva($db);
	$Model_productos = new Model_productos($db);
	$Model_depto = new Model_depto($db);


      $cliente = $Model_registro->ContadorCliente();
      $reserva= $Model_reserva->ContadorReserva();
       $producto= $Model_productos->ContadorProducto();
      $depto= $Model_depto->ContadorDepto();


      $datos['cliente'] = $cliente;

      $datos['reserva'] =$reserva;
      $datos['producto'] =$producto;
      $datos['departamento'] =$depto;
     



	
	        return $this->vistaarray('adminindex/vista', $datos);
	    }else{
	    	return redirect()->to('prueba');
	    }
	} 
}