<?php namespace App\Models;

use CodeIgniter\Model;

class Model_depto extends Model
{
    protected $table      = 'departamento';
    protected $primaryKey = 'id_depto';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [ 'descripcion_depto'];

 	protected $createdField = 'created_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;



     public function ObtenerDepto(){
        // armamos la consulta
        $query = $this->db->query('SELECT id_depto, descripcion_depto FROM bd_local.departamento');
        $results = $query->getResult();
        // si hay resultados
        if (count($results) > 0) {
          
            foreach($results as $row){
                $arrDatos[htmlspecialchars($row->id_depto, ENT_QUOTES)] = htmlspecialchars($row->descripcion_depto, ENT_QUOTES);
            }

            return $arrDatos;
        }else{
            return $arrDatos["datos"] = "sin datos";
        }
    }
         public function obtenerProducto(){
        // armamos la consulta
        $query = $this->db->query('SELECT a.id,a.nombre,a.precio,a.stock,a.descripcion,b.descripcion_depto, a.img from bd_local.producto a , bd_local.departamento b WHERE a.id_depto=b.id_depto' );
       
        $results = $query->getResult();
        // si hay resultados
      

       return $results;
    }


       public function ContadorDepto(){
        // armamos la consulta
        $query = $this->db->query('SELECT * FROM bd_local.departamento');
        $results = $query->getResult();
        // si hay resultados
       return $results;
    }
 


}