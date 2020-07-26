<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_productos;



class Producto extends BaseController
{
    public function index(){

        $datos['datos']= "";

        return $this->vista2('producto/vista', $data);
        
    }
    function traerId(){
      $request = \Config\Services::request();
      if($request->getPostGet('id')){
        $modelo = new Model_productos($db);

        $respuesta = $modelo->IDProducto($request->getPostGet('id'));
        // foreach ($respuesta as $row) {
        //     $producto=array(
        //         'Id'=>$row->id,
        //         'Nproducto'=>$row->nombre
        //     );
        //     echo ($producto);
        // }


        // $this->response->setContentType('Content-Type: application/json');
        // echo (json_encode($mensaje));
      }
    }
    
}