<?php namespace App\Models;

use CodeIgniter\Model;

class Model_productos extends Model
{
    protected $table      = 'producto';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre', 'precio', 'stock', 'descripcion', 'id_depto','img'];

 	protected $createdField = 'created_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;



     public function ObtenerDepto()
    {
        // armamos la consulta
        $query = $this->db->query('SELECT id_depto, descripcion FROM bd_local.departamento');
        $results = $query->getResult();
        // si hay resultados
        if (count($results) > 0) {
            //var_dump($results);
            foreach($results as $row){
                $arrDatos[htmlspecialchars($row->id_depto, ENT_QUOTES)] = htmlspecialchars($row->descripcion, ENT_QUOTES);
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