<?php
namespace App\Controllers;
use CodeIgniter\Controller;
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
        $datos['nombre'] = $row->nombre;
      }
      $datos['producto'] = $respuesta;
      return $this->vista2('producto/vista', $datos);
    } else {
      echo "murio";
    }

  }
}
