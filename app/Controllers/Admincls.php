<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_registro;

class Admincls extends BaseController
{
	public function index()
	{	
	$Model_registro = new Model_registro($db);
	 		//insertar datos automaticos
 		//$data=['nombre'=>"rssdasdd",'stock'=>"0",'precio'=>"28911",'Descripcion'=>"asldjhasidaslkas",'id_depto'=>"1"];
 		//	$Model_productos->insert($data);
 		//eliminar datos por id
    $cliente = $Model_registro->obtenerCliente();



    $datos['cliente'] = $cliente;

    $cliente = array('cliente'=>$cliente);  


 		return $this->vistaarray('Admincls/vista',$datos);	
	}

	
 public function cambiarEstado()
    {
      $request = \Config\Services::request();

      
	$Model_registro = new Model_registro($db);
    
      $data = array('estado'=>$request->getPostGet('estado'));
          
     $Model_registro->update($request->getPostGet('id'),$data);
      
    }
}
