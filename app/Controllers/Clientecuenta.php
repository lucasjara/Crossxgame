<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Model_registro;
use App\Models\Model_reserva;
class Clientecuenta extends BaseController
{
    public function index()
    {
    $session = \Config\Services::session();
    $Model_registro = new Model_registro($db);
    $Model_reserva = new Model_reserva($db);
    $id_session = $session->get('Codigo');
      if($id_session != "" && $id_session!= null){
    	   $session = \Config\Services::session();
    	   $Model_registro = new Model_registro($db);
    	   $Model_reserva = new Model_reserva($db);
         $respuesta = $Model_registro->obtenerClienteIngresado($id_session);
       foreach ($respuesta as $row) {
       	    $datos['rut'] = $row->rut;
            $datos['nombre'] = $row->nombre;
            $datos['apellido'] = $row->apellido;
            $datos['email'] = $row->email;
            $datos['comuna_nombre'] = $row->comuna_nombre; 
            $datos['direccion'] = $row->direccion; 
            $datos['f_nacimiento'] = $row->f_nacimiento; 
        //$datos['contrasenia'] = $row->contrasenia;  
       }

          $datos['cliente'] = $respuesta;
          $datos['arrProfesiones'] = $Model_registro->ObtenerRegiones();
          $datos['reserva'] = $Model_reserva->obtenerReservacliente($id_session);


          return $this->vista2('Clientecuenta/vista', $datos);
      }
  		  return redirect()->to('prueba');
    }
    public function updateCliente()
    {
      $request = \Config\Services::request();
      $Model_productos = new Model_productos($db);

        $data = array('nombre'=>$request->getPostGet('nombre'),
              'stock'=>$request->getPostGet('stock'),
              'precio'=>$request->getPostGet('precio'),
              'descripcion'=>$request->getPostGet('descripcion'),
              'id_depto'=>$request->getPostGet('id_depto'),
              'img'=>"nn.jpg");

        $Model_productos->update($request->getPostGet('id'),$data);
        $this->response->setContentType('Content-Type: application/json');
        echo (json_encode('1'));  
  }
}