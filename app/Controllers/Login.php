<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_registro;

class Login extends BaseController
{

    public function index()
    {
        $session = \Config\Services::session();
        $id_session = $session->get('Codigo');
        
        if ($id_session != "" && $id_session != null ) {
            echo "Conectados";
        } else {
            echo "Desconectados";
        }
        // $this->index();
    }
    public function LoginSistema()
    {
        $session = \Config\Services::session();
        $request = \Config\Services::request();

        $Model_registro = new Model_registro($db);
        $correo = $request->getPostGet('emailLogin');
        $password = $request->getPostGet('contraseñaLogin');
        $resultado = $Model_registro->Login($correo, $password);
        if ($resultado != 'N') {
            foreach ($resultado as $row) {
                $clientes = array(
                    'Codigo' => $row->id,
                    'Nombre' => $row->nombre,
                    'Email' => $row->email,
                    'Estado'=> $row->estado,
                    'Rol' => $row->rol
                );
                $session->set($clientes);
            }
        } else {
            $clientes = array(
                'Codigo' => "",
                'Estado' => ""
            );
            $session->set($clientes);
        }
        $this->response->setContentType('Content-Type: application/json');
        echo (json_encode($clientes));
    }
     public function CerrarSistema(){
        session()->set('Codigo', '');
        $this->response->setContentType('Content-Type: application/json');
        echo (json_encode(session()->get('Codigo')));  
     }
}
