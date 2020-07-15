<?php namespace App\Models;

use CodeIgniter\Model;

class Model_registro extends Model
{
	protected $table      = 'cliente';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre', 'apellido', 'rut', 'email'];

 	protected $createdField = 'created_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}