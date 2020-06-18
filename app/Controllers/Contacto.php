<?php namespace App\Controllers;

class Contacto extends BaseController
{
    public function index()
    {
        return $this->vista('Contacto/vista');
    }
}