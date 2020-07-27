<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Model_reserva;
use App\Models\Model_productos;

class Producto extends BaseController
{
  public function index()
  {
    $request = \Config\Services::request();
    $idP = base64_decode($request->getPostGet('id'));
    if ($idP != "") {
      $modelo = new Model_productos($db);
      $respuesta = $modelo->IDProducto($idP);
      foreach ($respuesta as $row) {
        $datos['id'] = $row->id;
        $datos['nombre'] = $row->nombre;
        $datos['precio'] = $row->precio;
        $datos['stock'] = $row->stock; 
        $datos['descripcion'] = $row->descripcion; 
        $datos['descripcion_depto'] = $row->descripcion_depto; 
        $datos['img'] = $row->img;  
      }
      $datos['producto'] = $respuesta;
      return $this->vista2('producto/vista', $datos);
    }else{
      location.replace("/Crossxgame/public/resultado");
    }
  }
  public function ReservarProducto()
  {
    $request = \Config\Services::request();
    $Model_productos= new Model_productos($db);
    $Model_reserva = new Model_reserva($db);

    $data = array('fecha_reserva'=>$request->getPostGet('fecha_reserva'),
     'id_prod'=>$request->getPostGet('id_prod'),
     'cantidad'=>$request->getPostGet('cantidad'),
     'id_cli'=>$request->getPostGet('id_cli'),
     'fecha_limite'=>$request->getPostGet('fecha_limite'),
     'reserva_estado'=>"Reservado");
    
    $data2 = array('stock'=>$request->getPostGet('stock'));

    $Model_reserva->insert($data);

    $id=$request->getPostGet('id_prod');

    $Model_productos->update($id,$data2);

  }

}
?>