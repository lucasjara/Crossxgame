      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">

          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            </div>      
          </div>
        </div>

        <form  class="contact-form" id="myForm"  enctype="multipart/form-data" >

        </form>
        <h2>Ordenes</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm" id="tabla-producto">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Rut</th>
                <th>Email</th>
                <th>Comuna</th>
                <th>Dirreción</th>
                <th>Fecha de nacimiento</th>
                <th>Estado</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              foreach ($cliente as $cl ) {
                echo "<tr>";
                echo "<td>".$cl->id."</td>";
                echo "<td>".$cl->nombre."</td>";
                echo "<td>".$cl->apellido."</td>";
                echo "<td>".$cl->rut."</td>";
                echo "<td>".$cl->email."</td>";
                echo "<td>".$cl->comuna_nombre."</td>";   
                echo "<td>".$cl->direccion."</td>";
                echo "<td>".$cl->f_nacimiento."</td>";  
                echo "<td>";
                if($cl->estado=='1'){ 
                  echo"Habilitada " ;
                }elseif($cl->estado=='0'){ echo "Deshabilitada";
              }               
              echo "</td>";

              if($cl->estado=='1'){     
                echo"<td> <button type='button' data-toggle='modal' data-target='#exampleModalCenter".$cl->id."' class='btn btn-danger' id='btnEliminar'>Deshabilitada</button></td>";
              
              }elseif($cl->estado=='0'){
                echo"<td> <button type='button' data-toggle='modal' data-target='#exampleModalCenter".$cl->id."' class='btn btn-danger' id='btnEliminar'>Habilitada</button></td>";
            
              }
              echo "<div class='modal fade' id='exampleModalCenter".$cl->id."' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
              <div class='modal-dialog modal-dialog-centered' role='document'>
              <div class='modal-content'>
              <div class='modal-header'>
              <h5 class='modal-title' id='exampleModalLongTitle'>¿Desea";
              if($cl->estado=='1'){
                $ac='0';
                echo " Deshabilitar ";
              }
              elseif($cl->estado=='0'){
                $ac='1';
                echo   " Habilitar " ;
              } 
              echo  "Esta cuenta?</h5>
              <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
              </button>
              </div>
              <div class='modal-body'>
               Nombre:".$cl->nombre." ".$cl->apellido."<br>
               Rut:".$cl->rut."<br>
               Correo:".$cl->nombre."<br>
              </div>
              <div class='modal-footer'>";

              echo " <button type='button' id='btnConfirmar' onclick='actualizarEstado(".$cl->id.",".$ac.")' class='btn btn-primary'>Confirmar</button>
              <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancelar</button>  
              </div>
              </div>
              </div>
              </div>";
            echo  "</tr>";
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
        function actualizarEstado($data,$r) {
          var array2 = {     
          id: $data , 
          estado: $r
        };
        var request = envia_ajax_servidor('/Crossxgame/public/Admincls/cambiarEstado', array2);
        request.done(function (data){
         location.reload(true);
        });

        
      }
    </script>