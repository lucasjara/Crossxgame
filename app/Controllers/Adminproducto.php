<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_productos;

class Adminproducto extends BaseController
{
	public function index()
	{	
	  	$session = \Config\Services::session();
      	$Rol = $session->get('Rol');
       if($Rol == 'admin'){	
		return $this->vista_administracion('adminproducto/vista');
	   }else{
	   	return redirect()->to('prueba');
	   }
	}
}
