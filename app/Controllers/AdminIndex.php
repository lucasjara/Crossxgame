<?php namespace App\Controllers;

class AdminIndex extends BaseController
{
    public function index()
    {
    	$datos['datos']= " ";
        return $this->vistaarray('adminindex/vista', $datos);
    }
}