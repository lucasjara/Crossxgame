<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_productos;

class Admincliente extends BaseController
{
	public function index()
	{	
		
	return $this->vista_administracion('admincliente/vista');
	}

	

}