        <?php namespace App\Controllers;

        use CodeIgniter\Controller;
        use App\Models\Model_productos;



        class Producto extends BaseController
        {
            public function index(){
               $request = \Config\Services::request();
               $idP="";
               //$idP=base64_decode($request->getPostGet('id'));
               if($idP !=""){
                $modelo = new Model_productos($db);
                $respuesta = $modelo->IDProducto($idP);
                foreach ($respuesta as $row) {
                  $datos['nombre']=>$row->nombre;
              }
              $datos['producto']= $respuesta;

          }else{
            echo "murio";
            }
         }
        }

        // return $this->vista2('producto/vista', $datos); 

        // }
        //     // function traerId(){
        //     //   $request = \Config\Services::request();
        //     //   if($request->getPostGet('id')){
        //     //     $modelo = new Model_productos($db);

        //     //     $respuesta = $modelo->IDProducto($request->getPostGet('id'));
        //     //   }
        //     // }  
        // }