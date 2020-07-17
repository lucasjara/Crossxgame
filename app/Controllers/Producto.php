<?php namespace App\Controllers;



class Producto extends BaseController
{
    public function index()
    {
        return $this->vista('producto/vista');
        
    }
    
}