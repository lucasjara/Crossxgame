<?php namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return $this->vista_administracion('admin/vista');
    }
}