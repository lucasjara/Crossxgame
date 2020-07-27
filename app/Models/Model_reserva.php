<?php namespace App\Models;

use CodeIgniter\Model;

class Model_reserva extends Model
{
	protected $table      = 'reserva';
	protected $primaryKey = 'reserva_id';

	protected $returnType     = 'array';
	protected $useSoftDeletes = false;

	protected $allowedFields = [ 'fecha_reserva','id_prod','cantidad','id_cli','fecha_limite','reserva_estado'];

	protected $createdField = 'created_at';

	protected $validationRules    = [];
	protected $validationMessages = [];
	protected $skipValidation     = false;


}