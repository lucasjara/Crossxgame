<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_reserva;

class AdminOrdenes extends BaseController
{
  public function index()
  { 
      $session = \Config\Services::session();
      $Rol = $session->get('Rol');
    if($Rol == 'admin'){
      $request = \Config\Services::request();
      $rut = $request->getPostGet('rut');

      if($rut !="" && $rut !=null){
      $Model_reserva = new Model_reserva($db);
      $reserva = $Model_reserva->BuscarReservaCliente($rut);
      $datos['reserva'] = $reserva;
      $reserva = array('reserva'=>$reserva); 
      return $this->vistaarray('adminordenes/vista',$datos);
    }else{
      $Model_reserva = new Model_reserva($db);
      $reserva = $Model_reserva->obtenerReserva();
      $datos['reserva'] = $reserva;
      $reserva = array('reserva'=>$reserva);  
      return $this->vistaarray('adminordenes/vista',$datos);
    }
    }else{
      return redirect()->to('prueba');
    }
  }

    public function ActualizarEstado()
    {
      $request = \Config\Services::request();

      $Model_reserva = new Model_reserva($db);
    
   	  $data = array('reserva_estado'=>$request->getPostGet('reserva_estado'));

      $Model_reserva->update($request->getPostGet('reserva_id'),$data);

     $this->response->setContentType('Content-Type: application/json');
    echo (json_encode('1'));  

    }


}
