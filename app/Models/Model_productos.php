<?php namespace App\Models;

use CodeIgniter\Model;

class Model_productos extends Model
{
    protected $table      = 'producto';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre', 'precio', 'stock', 'descripcion', 'id_depto','img'];

 

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}