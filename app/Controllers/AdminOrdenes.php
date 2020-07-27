<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_reserva;

class AdminOrdenes extends BaseController
{
  public function index()
  { 

  $Model_reserva = new Model_reserva($db);

    $reserva = $Model_reserva->obtenerReserva();

    $datos['reserva'] = $reserva;

    $reserva = array('reserva'=>$reserva);  

  return $this->vistaarray('adminordenes/vista',$datos);
  }


}
