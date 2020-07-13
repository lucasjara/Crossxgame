<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_productos; 

class Admin extends BaseController
{
    public function index()
    {
    	$Model_productos = new Model_productos($db);
		$producto = $Model_productos->find('756');
	    return $this->vista_administracion('admin/vista',$producto);
    }
}