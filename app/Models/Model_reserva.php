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


    public function obtenerReserva()
    {

        $query = $this->db->query('SELECT a.reserva_id, a.fecha_reserva,a.id_prod, b.nombre as nombreprod ,  a.cantidad,a.id_cli,c.rut,c.nombre , a.fecha_limite,a.reserva_estado FROM bd_local.reserva a, bd_local.producto b, bd_local.cliente c WHERE a.id_cli=c.id and a.id_prod=b.id ORDER BY a.reserva_id DESC');

        $results = $query->getResult();
        // si hay resultados
        return $results;
    }
    public function obtenerReservacliente($id_session)
    {

        $query = $this->db->query("SELECT a.reserva_id, a.fecha_reserva,a.id_prod, b.nombre as nombreprod , b.precio, a.cantidad,a.id_cli,c.rut,c.nombre , a.fecha_limite,a.reserva_estado FROM bd_local.reserva a, bd_local.producto b, bd_local.cliente c WHERE a.id_cli=c.id and a.reserva_estado in ('Reservado','Finalizado')  and a.id_prod=b.id and  a.id_cli='".$id_session."'ORDER BY a.reserva_id DESC ");

        $results = $query->getResult();
        // si hay resultados
        return $results;
    }
      public function  ContadorReserva()
    {

        $query = $this->db->query("SELECT * FROM bd_local.reserva WHERE reserva_estado='Reservado'");

        $results = $query->getResult();
        // si hay resultados
        return $results;
    }
   
    public function BuscarReservaCliente($rut){
       $query = $this->db->query("SELECT a.reserva_id, a.fecha_reserva,a.id_prod, b.nombre as nombreprod , b.precio, a.cantidad,a.id_cli,c.rut,c.nombre , a.fecha_limite,a.reserva_estado FROM bd_local.reserva a, bd_local.producto b, bd_local.cliente c WHERE a.id_cli=c.id and a.reserva_estado in ('Reservado','Finalizado')  and a.id_prod=b.id and  c.rut='".$rut."'ORDER BY a.reserva_id DESC ");
       $results = $query->getResult();
       //var_dump($results);
       return $results;
     }

}