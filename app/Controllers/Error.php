<?php namespace App\Controllers;

class Error extends BaseController
{
    public function index()
    {
    	$datos['datos']= "";
        return $this->vista2('error/vista', $datos);
    }
}




