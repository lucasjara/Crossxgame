<?php
namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;

class BaseController extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];
	protected $array= [];
	protected $arraydepto= [];
	/**
	 * Constructor.
	 */

	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();
	}

     public function vista($valor){
         return view('master/head').view($valor).view('master/footer');
     }

    public function vista2($valor,$array){
		$session = \Config\Services::session();
        $id_session = $session->get('Codigo');
        if($id_session != "" && $id_session != null ){
            $array['id']=$session->get('Codigo');
            
        }else{
            $array['id']=null;
        }
        return view('master/head',$array).view($valor,$array).view('master/footer');   
    }

    public function vistaArray($valor,$array){
       	$session = \Config\Services::session();
        $id_session = $session->get('Codigo');
        if($id_session != "" && $id_session != null){
            $array['id']=$session->get('Codigo');
        }else{
            $array['id']=null;
        }
        return view('master/head_administracion',$array).view($valor,$array).view('master/footer_administracion');
    }
    
    public function vista_administracion($valor){
        return view('master/head_administracion').view($valor).view('master/footer_administracion');
    }


}
