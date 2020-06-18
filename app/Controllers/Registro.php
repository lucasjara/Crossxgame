<?php namespace App\Controllers;

class Registro extends BaseController
{
    public function index()
    {
        return $this->vista('registro/vista');
    }
}