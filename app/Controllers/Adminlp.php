<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_productos;

class Adminlp extends BaseController
{

    public function index()
    {
 		    
    $Model_productos = new Model_productos($db);
    //insertar datos automaticos
    //$data=['nombre'=>"rssdasdd",'stock'=>"0",'precio'=>"28911",'Descripcion'=>"asldjhasidaslkas",'id_depto'=>"1"];
    //  $Model_productos->insert($data);
    //eliminar datos por id
    //$Model_productos->delete([762,763,764]);
    $productos = $Model_productos->obtenerProducto();



    $datos['productos'] = $productos;

    $productos = array('productos'=>$productos);  
    
    return $this->vistaarray('adminlp/vista',$datos);
       
    }
	

    public function eliminarProducto()
    {
      $request = \Config\Services::request();

    $Model_productos = new Model_productos($db);

 	  $data = array('id'=>$request->getPostGet('id'));


    $Model_productos->delete($data);;
    }

    public function BuscarProducto()    {
    $request = \Config\Services::request();
 
      if($request->getPostGet('producto')){

        $Model_productos = new Model_productos($db);

        $mensaje = $Model_productos->buscadorP($request->getPostGet('producto'));
        $this->response->setContentType('Content-Type: application/json');
        var_dump($mensaje);     
      }
    }

}