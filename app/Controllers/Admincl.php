<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_registro;

class Admincl extends BaseController
{
	public function index()
	{	
		$session = \Config\Services::session();
    	$Rol = $session->get('Rol');
    	if($Rol == 'admin'){	
			return $this->vista_administracion('admincl/vista');
		}else{
			return redirect()->to('prueba');
		}
	}
}
?>