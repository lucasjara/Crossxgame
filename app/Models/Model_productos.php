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



     public function ObtenerDepto(){
        // armamos la consulta
        $query = $this->db->query('SELECT id_depto, descripcion FROM bd_local.departamento');
        $results = $query->getResult();
        // si hay resultados
        if (count($results) > 0) {
          
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
    public function obtenerUltimoProducto(){
        // armamos la consulta
        $query = $this->db->query('SELECT a.id,a.nombre,a.precio,a.stock,a.descripcion,b.descripcion, a.img from bd_local.producto a , bd_local.departamento b WHERE a.id_depto=b.id_depto ORDER BY a.id DESC LIMIT 2' );
       
        $results = $query->getResult();
        // si hay resultados
      

       return $results;
    }
         public function obtenerProducto(){
        // armamos la consulta
        $query = $this->db->query('SELECT a.id,a.nombre,a.precio,a.stock,a.descripcion,b.descripcion, a.img from bd_local.producto a , bd_local.departamento b WHERE a.id_depto=b.id_depto' );
       
        $results = $query->getResult();
        // si hay resultados
      

       return $results;
    }
}