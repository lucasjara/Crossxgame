<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_productos; 

class Admin extends BaseController
{ 


  public function index()
  {

    $Model_productos = new Model_productos($db);
<<<<<<< HEAD
 		//insertar datos automaticos
 		//$data=['nombre'=>"rssdasdd",'stock'=>"0",'precio'=>"28911",'Descripcion'=>"asldjhasidaslkas",'id_depto'=>"1"];
 		//	$Model_productos->insert($data);
 		//eliminar datos por id
		//$Model_productos->delete([762,763,764]);
    $productos = $Model_productos->obtenerUltimoProducto();
=======
 		
		$productos = $Model_productos->obtenerUltimoProducto();
>>>>>>> 56a70bec2540fbcc1f8478a470d1ec47d8106b5b

    $datos['arrayDepto'] = $Model_productos->ObtenerDepto();

    $datos['productos'] = $productos;

    $productos = array('productos'=>$productos);  
    
    return $this->vistaarray('admin/vista',$datos);

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
  }
}

