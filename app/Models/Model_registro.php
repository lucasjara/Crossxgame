<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_registro extends Model
{
    protected $table = 'cliente';

    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre', 'apellido', 'rut', 'email', 'comuna_id', 'direccion', 'f_nacimiento', 'contrasenia', 'estado', 'rol'];

    protected $createdField = 'created_at';

    protected $validationRules    = [];

    protected $validationMessages = [];

    protected $skipValidation = false;

    public function ObtenerRegiones()
    {
        // armamos la consulta
        $query   = $this->db->query('SELECT region_id, region_nombre FROM bd_local.region ORDER by region_id ASC');
        $results = $query->getResult();
        // si hay resultados
        if (count($results) > 0) {
            //var_dump($results);
            foreach ($results as $row) {
                $arrDatos[htmlspecialchars($row->region_id, ENT_QUOTES)] = htmlspecialchars($row->region_nombre, ENT_QUOTES);
            }
            return $arrDatos;
        } else {
            return $arrDatos["datos"] = "sin datos";
        }
    }

    public function ObtenerComuna($combo)
    {
        $query   = $this->db->query("SELECT comuna_id, comuna_nombre FROM bd_local.comuna where region_id ='" . $combo . "'");
        $results = $query->getResult();
        return $results;
    }

    public function obtenerCliente()
    {
        // armamos la consulta
        $query = $this->db->query('SELECT a.id, a.nombre, a.apellido, a.rut, a.email, b.comuna_nombre, a.direccion, a.f_nacimiento, a.contrasenia, a.estado FROM  bd_local.cliente a, bd_local.comuna b WHERE a.comuna_id=b.comuna_id');

        $results = $query->getResult();
        // si hay resultados
        return $results;
    }
    public function Login($correo, $password)
    {
        $query   = $this->db->query("SELECT * FROM bd_local.cliente where email ='" . $correo . "'");
        $results = $query->getResult();
        $arrDatos="";
        if (count($results) > 0) {
            foreach ($results as $row) {
                $arrDatos = $row->contrasenia;
            }

            if (password_verify($password, $arrDatos)) {
                
            } else {
                $results = "No verifico";
            }
        } else {

            $results = "N";
        }
        return $results;
    }
    public function obtenerClienteIngresado($id_session)
    {
        // armamos la consulta
        $query = $this->db->query("SELECT a.id, a.nombre, a.apellido, a.rut, a.email, b.comuna_nombre, a.direccion, a.f_nacimiento, a.contrasenia, a.estado FROM  bd_local.cliente a, bd_local.comuna b WHERE a.comuna_id=b.comuna_id and a.id='".$id_session."'");

        $results = $query->getResult();
        // si hay resultados
        return $results;
    }
    public function ContadorCliente(){
             $query = $this->db->query('SELECT a.id, a.nombre, a.apellido, a.rut, a.email, b.comuna_nombre, a.direccion, a.f_nacimiento, a.contrasenia, a.estado FROM  bd_local.cliente a, bd_local.comuna b WHERE a.comuna_id=b.comuna_id and a.rol="cliente"');

        $results = $query->getResult();
        // si hay resultados
        return $results;


    }
}
