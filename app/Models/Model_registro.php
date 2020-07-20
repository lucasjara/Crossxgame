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

    public function ObtenerRegiones()
    {
        // armamos la consulta
        $query = $this->db->query('SELECT region_id, region_nombre FROM bd_local.region ORDER by region_id ASC');
        $results = $query->getResult();
        // si hay resultados
        if (count($results) > 0) {
            //var_dump($results);
            foreach($results as $row){
                $arrDatos[htmlspecialchars($row->region_id, ENT_QUOTES)] = htmlspecialchars($row->region_nombre, ENT_QUOTES);
            }
            return $arrDatos;
        }else{
            return $arrDatos["datos"] = "sin datos";
        }
    }
        public function ObtenerComuna($combo)
    {
        $query = $this->db->query("SELECT comuna_id, comuna_nombre FROM bd_local.comuna where region_id ='".$combo."'");
        $results = $query->getResult();
        return $results;
    }
}