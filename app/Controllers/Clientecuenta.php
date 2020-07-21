<?php namespace App\Controllers;

class Clientecuenta extends BaseController
{
    public function index()
    {
        return $this->vista('Clientecuenta/vista');
    }
}