<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_productos;

class Categoria extends BaseController
{
    public function index()
    {
    	$Model_productos = new Model_productos($db);
		$productos = $Model_productos->findAll();
		$productos = array('productos'=>$productos);	
		
        return $this->vista2('Categoria/vista',$productos);
    }
}