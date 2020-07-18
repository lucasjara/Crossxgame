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
        $query = $this->db->query('SELECT region_id, region_nombre FROM bd_local.regiones');
        $results = $query->getResult();
        // si hay resultados
        if (count($results) > 0) {
            //var_dump($results);
            foreach($results as $row){
                $arrDatos[htmlspecialchars($row->region_id, ENT_QUOTES)] = htmlspecialchars($row->region_nombre, ENT_QUOTES);
            }
            // almacenamos en una matriz bidimensional
            /*
            foreach($query->result() as $row)
                $arrDatos[htmlspecialchars($row->region_id, ENT_QUOTES)] =
                    htmlspecialchars($row->region_nombre, ENT_QUOTES);

            $query->free_result();
            */
            return $arrDatos;
        }else{
            return $arrDatos["datos"] = "sin datos";
        }
    }
}