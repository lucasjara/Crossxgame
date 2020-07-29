<?php namespace App\Controllers;
use CodeIgniter\Controller;
class AdminIndex extends BaseController
{
    public function index()
    {
	    	$session = \Config\Services::session();
	    	$Rol = $session->get('Rol');
	    if($Rol == 'admin'){

	    	$datos['datos']= " ";
	        return $this->vistaarray('adminindex/vista', $datos);
	    }else{
	    	return redirect()->to('prueba');
	    }
	}
	public function store()
   {  

    $file = $this->request->getFile('imagen1');

    $data = [
    	'nombre' =>$file->getClientName()
    ];
    $ruta= "/xampp/htdocs/Crossxgame/public/public/crossxgame/img/".$data['nombre'];
    move_uploaded_file($file, $ruta);

    

   }
}