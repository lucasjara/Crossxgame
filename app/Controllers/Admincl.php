<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_registro;

class Admincl extends BaseController
{
	public function index()
	{	


	
	return $this->vista_administracion('admincl/vista');
	}



	

}
