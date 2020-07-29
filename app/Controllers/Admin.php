<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_productos; 

class Admin extends BaseController
{ 
  public function index()
  {
    $session = \Config\Services::session();
    $Rol = $session->get('Rol');
    if($Rol == 'admin'){
        $Model_productos = new Model_productos($db);
		    $productos = $Model_productos->obtenerUltimoProducto();
        $datos['arrayDepto'] = $Model_productos->ObtenerDepto();
        $datos['productos'] = $productos;
        $productos = array('productos'=>$productos);  
        return $this->vistaarray('admin/vista',$datos);
    }else{
      return redirect()->to('prueba');
    }
  }

  public function guardarProducto()
  {
   $request = \Config\Services::request();

   $Model_productos = new Model_productos($db);

   $data = array('nombre'=>$request->getPostGet('nombre'),
     'stock'=>$request->getPostGet('stock'),
     'precio'=>$request->getPostGet('precio'),
     'descripcion'=>$request->getPostGet('descripcion'),
     'id_depto'=>$request->getPostGet('id_depto'),
     'img'=>"nn.jpg");

   $Model_productos->insert($data);
   $this->response->setContentType('Content-Type: application/json');
        echo (json_encode('1'));  
 }
 public function eliminarProducto()
 {
  $request = \Config\Services::request();

  $Model_productos = new Model_productos($db);

  $data = array('id'=>$request->getPostGet('id'));

  $Model_productos->delete($data);
}

public function updateProducto()
{
  $request = \Config\Services::request();


  $Model_productos = new Model_productos($db);

  $data = array('nombre'=>$request->getPostGet('nombre'),
   'stock'=>$request->getPostGet('stock'),
   'precio'=>$request->getPostGet('precio'),
   'descripcion'=>$request->getPostGet('descripcion'),
   'id_depto'=>$request->getPostGet('id_depto'),
   'img'=>"nn.jpg");

  $Model_productos->update($request->getPostGet('id'),$data);
  $this->response->setContentType('Content-Type: application/json');
        echo (json_encode('1'));  
  }
}

