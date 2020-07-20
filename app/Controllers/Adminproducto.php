<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_productos;

class Adminproducto extends BaseController
{
	public function index()
	{	
		
	return $this->vista_administracion('adminproducto/vista');
	}

	

}
