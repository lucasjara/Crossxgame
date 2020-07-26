<?php namespace App\Controllers;

class Contacto extends BaseController
{
    public function index()
    {
    	$datos['datos']= "";
        return $this->vista2('Contacto/vista', $datos);
    }
}