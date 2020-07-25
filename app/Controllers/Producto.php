<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_productos;



class Producto extends BaseController
{
    public function index(){

        return $this->vista('producto/vista');
        
    }
    function traerId(){
      $request = \Config\Services::request();
      if($request->getPostGet('id')){
        $modelo = new Model_productos($db);
         
        $mensaje = $modelo->IDProducto($request->getPostGet('nombre'));
        $this->response->setContentType('Content-Type: application/json');
      }
    }
    
}