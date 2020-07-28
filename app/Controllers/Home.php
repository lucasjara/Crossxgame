<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_productos;

class Home extends BaseController
{
	public function index()
	{	
		
		$productos = "";
		if($productos != ""){
			return view('welcome_message',$productos);
			}else{
			return redirect()->to('error');

			}
	}
}
