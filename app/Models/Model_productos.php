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
    public function obtenerUltimoProducto(){
        // armamos la consulta
        $query = $this->db->query('SELECT a.id,a.nombre,a.precio,a.stock,a.descripcion,b.descripcion_depto, a.img from bd_local.producto a , bd_local.departamento b WHERE a.id_depto=b.id_depto ORDER BY a.id DESC LIMIT 2' );
       
        $results = $query->getResult();
        // si hay resultados
      

       return $results;
    }
         public function obtenerProducto(){
        // armamos la consulta
        $query = $this->db->query('SELECT a.id,a.nombre,a.precio,a.stock,a.descripcion,b.descripcion_depto, a.img from bd_local.producto a , bd_local.departamento b WHERE a.id_depto=b.id_depto' );
       
        $results = $query->getResult();
        // si hay resultados
      

       return $results;
    }

        //bloque carga datos pagina principal 
         public function NuevosPs4(){
        // armamos la consulta
        $query = $this->db->query('SELECT * FROM bd_local.producto WHERE id_depto="1" AND stock>0 ORDER BY id DESC LIMIT 5' );
       
        $results = $query->getResult();
        // si hay resultados
      

       return $results;
    }
         public function Nuevosxbox(){
        // armamos la consulta
        $query = $this->db->query('SELECT * FROM bd_local.producto WHERE id_depto="7" AND stock>0 ORDER BY id DESC LIMIT 5' );
       
        $results = $query->getResult();
        // si hay resultados
      

       return $results;
    }

     public function NuevosSwitch(){
        // armamos la consulta
        $query = $this->db->query('SELECT * FROM bd_local.producto WHERE id_depto="5"  AND stock>0 ORDER BY id DESC LIMIT 5' );
       
        $results = $query->getResult();
        // si hay resultados
      

       return $results;
    }
         public function NuevosAccesorios(){
        // armamos la consulta
        $query = $this->db->query('SELECT * FROM bd_local.producto WHERE id_depto in ("28","30","32") AND stock>0  ORDER BY id DESC LIMIT 5' );
       
        $results = $query->getResult();
        // si hay resultados
      

       return $results;
    }
          public function NuevosFiguras(){
        // armamos la consulta
        $query = $this->db->query('SELECT * FROM bd_local.producto WHERE id_depto in ("21","34") AND stock>0 ORDER BY id DESC LIMIT 5' );
        $results = $query->getResult();
        // si hay resultado 

       return $results;
    }

     public function IDProducto($id){
        // armamos la consulta
        $query = $this->db->query("SELECT a.id,a.nombre,a.precio,a.stock,a.descripcion,b.descripcion_depto, a.img from bd_local.producto a , bd_local.departamento b WHERE a.id_depto=b.id_depto AND a.id='".$id."'");
        $results = $query->getResult();
        
       return $results;
    }

}