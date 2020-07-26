
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
     
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
        </div>      
      </div>
    </div>

    <form  class="contact-form" id="myForm"  enctype="multipart/form-data" >
      <input class="form-control mr-sm-2" type="search"     placeholder="Search" id="txtbuscar" aria-label="Search">
      
    </form>
    <h2>Productos</h2>
    <div class="table-responsive">
      <table class="table table-striped table-sm" id="tabla-producto">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Stock</th>
            <th>Precio</th>
            <th>Departamento</th>
            <th>Nombre Imagen</th>
            <th>Opciones</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          foreach ($productos as $producto ) {
            echo "<tr>";
            echo "<td>".$producto->id."</td>";
            echo "<td>".$producto->nombre."</td>";
            echo "<td>".$producto->stock."</td>";
            echo "<td>".$producto->precio."</td>";
            echo "<td>".$producto->descripcion_depto."</td>";
            echo "<td>".$producto->img."</td>";
            echo "<td> <button type='button' data-toggle='modal' data-target='#exampleModalCenter".$producto->id."' class='btn btn-success'  id='btnEliminar'>Actualizar</button></td>";


            echo "<div class='modal fade' id='exampleModalCenter".$producto->id."' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-centered' role='document'>
            <div class='modal-content'>
            <div class='modal-header'>
            <h5 class='modal-title' id='exampleModalLongTitle'>Actualizar datos</h5>
            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            </div>
            <div class='modal-body'>
            
            <form  class='contact-form' id='myForm'  enctype='multipart/form-data'>
            <div class='card'>
            <div class='card-body'>
            <div class='form-row'>
            <div class='form-group col-md-6'>
            <label for=inputname'>Nombre</label>
            <input id='txtnombre".$producto->id."' value='".$producto->nombre."' name='nombre' type='text' class='form-control' placeholder='Ingrese Nombre del juego...'>
            </div>
            <div class='form-group col-md-6'>
            <label for='inputname'>Stock</label>
            <input id='txtstock".$producto->id."' name='stock' value='".$producto->stock."' type='text' class='form-control' placeholder='Ingrese Stock...''>
            </div>
            </div>
            <div class='form-row'>
            <div class='form-group col-md-6'>
            <label for='inputname'>Precio</label>
            <input id='txtprecio".$producto->id."' name='precio' type='text' value='".$producto->precio."' class='form-control' placeholder='Ingrese precio...''>
            </div>
            <div class='form-group col-md-6'>
            <label for='inputname'>Descripcion</label>
            <input id='txtdescripcion".$producto->id."' name='descripcion' type='textarea' value='".$producto->descripcion."' class='form-control' placeholder='Ingrese Descripcion...'>
            </div>
            </div>       
            <div class='form-row'>               
            <div class='form-group col-md-6'>
            <label for='inputAddress'>Departamento</label>
            <select id='selectDepto".$producto->id."' class='form-control' style='border-radius: 1em'>
            <option selected=''>Seleccione Departamento...</option>
            ";
            foreach ($arrayDepto as $i => $des){
              echo '<option value="',$i,'">',$des,'</option>';    
            }
            echo "
            </select>
            </div>
            <div class='form-group col-md-6'>
            <label for='inputAddress'>imagen</label>
            
            <div class='custom-file'>
            <input type='file' class='custom-file-input'  id='customFileLang' lang='es'>
            <label class='custom-file-label' for='customFileLang'>Seleccionar Archivo</label>
            </div>
            </div>
            </div>
            <div class='card-footer'>
            
            </div>
            </div>
            </form>
            
            </div>
            <div class='modal-footer'>
            <button type='button' id='btnConfirmar' onclick='ActualizarDatos(".$producto->id.")' class='btn btn-primary'>Confirmar</button>
            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancelar</button>
            
            </div>
            </div>
            </div>
            </div>";
            echo "</tr>";
          }?>  
        </tbody>
      </table> 
    </div>
  </main>
  </div>
  </div>
  </body>
      <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        
        <!-- Icons -->
        <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
        <script>
          feather.replace()
        </script>
        <script type="text/javascript">
          function envia_ajax_servidor(url, data) {
            var variable = $.ajax({
              url: url,
              method: 'POST',
              data: data,
              'dataSrc': 'data',
              dataType: 'json'
            });
            return variable;
          }
          $("#btnRegistrar").on("click",function(){
            var array = {
              nombre: $("#txtnombre").val(),
              stock: $("#txtstock").val(),
              precio: $("#txtprecio").val(),
              descripcion: $("#txtdescripcion").val(),  
              id_depto: $("#selectDepto").val(),  
              img: $("#inputGroupFile01").val()
            };
            var request = envia_ajax_servidor('/Crossxgame/public/Admin/guardarProducto', array);
            request.done(function (data){
            });
          });
          function eliminar($iddata) { 
            var array2 = 
            {
              id: $iddata
            };
            var request = envia_ajax_servidor('/Crossxgame/public/Adminlp/eliminarProducto', array2);
            request.done(function (data){ 
             console.log(data);
           });
          }
          $("#txtbuscar").on("keyup",function(){

            Buscador();

          });
          function ActualizarDatos($data) {    
            var array2 = {     
              id: $data , 
              nombre: $("#txtnombre"+$data).val(),
              stock: $("#txtstock"+$data).val(),
              precio: $("#txtprecio"+$data).val(),
              descripcion: $("#txtdescripcion"+$data).val(),  
              id_depto: $("#selectDepto"+$data).val(),  
              img: $("#inputGroupFile01"+$data).val() 
            };
            var request = envia_ajax_servidor('/Crossxgame/public/Admin/updateProducto', array2);
            request.done(function (data){
              console.log(data);
            });
          }

        </script>