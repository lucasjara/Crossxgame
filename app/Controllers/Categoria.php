<?php namespace App\Controllers;

class Categoria extends BaseController
{
    public function index()
    {
        return $this->vista('Categoria/vista');
    }
}