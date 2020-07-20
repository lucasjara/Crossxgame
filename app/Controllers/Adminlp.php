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
	
	public function guardarDepto()
    {
    	$request = \Config\Services::request();

    	$Model_depto = new Model_depto($db);

   $data = array('descripcion'=>$request->getPostGet('descripcion')
   				 );

    	$Model_depto->insert($data);
    }

    public function eliminarProducto()
    {
      $request = \Config\Services::request();

      $Model_depto = new Model_depto($db);

 	  $data = array('id_depto'=>$request->getPostGet('id_depto'));



      $Model_depto->delete($data);
    }

}