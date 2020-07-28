<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_productos;

class Admincliente extends BaseController
{
	public function index()
	{	
			$session = \Config\Services::session();
      		$Rol = $session->get('Rol');
    	if($Rol == 'admin'){
			return $this->vista_administracion('admincliente/vista');
		}else{	
			return redirect()->to('prueba');
		}
	}
}