 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
     
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
              </div>      
            </div>
          </div>

        <form  class="contact-form" id="myForm"  enctype="multipart/form-data" >
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h2>Registro Departamento</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputname">Nombre Departamento</label>
                                <input id="txtdeptonombre" name="nombre" type="text" class="form-control" placeholder="Consola Ps4 ...">
                            </div>
                         
                        </div>
                       
                      
                    <div class="card-footer">
                        <div class="float-right">
                            <button type="button" class="btn btn-primary" id="btnRegistrar">Registrar</button>
                            <button type="reset" class="btn btn-success"  id="btnLimpiar">Limpiar</button>
                        </div>
                    </div>
                </div>
                </div>

            </form>
          <h2>Productos</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm" id="tabla-producto">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre Departamentos</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
                
                <?php 

      foreach ($departamento as $depto ) {
    
          echo "<tr>";
          echo "<td>".$depto['id_depto']."</td>";
          echo "<td>".$depto['descripcion_depto']."</td>";
          echo "<td>  <button type='button' data-toggle='modal' data-target='#exampleModalCenter".$depto['id_depto']."' class='btn btn-success'  id='btnEliminar'>Actualizar</button> </td>";  

       echo "<div class='modal fade' id='exampleModalCenter".$depto['id_depto']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-centered' role='document'>
        <div class='modal-content'>
        <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLongTitle'>Actualizar Datos</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
           <form  class='contact-form'   enctype='multipart/form-data' >
                <div class='card'>
                   
                    <div class='card-body'>
                        <div class='form-row'>
                            <div class='form-group col-md-6'>
                                <label for='inputname'>Nombre Departamento</label>
                                <input id='txtnewdepto".$depto['id_depto']."'  type='text' class='form-control' value='".$depto['descripcion_depto']."'>
                            </div>
                        </div>  
                    </div>
                </div>
            </form>
      </div>
      <div class='modal-footer'>
        <button type='button' onclick='ActualizarDatos(".$depto['id_depto'].")' class='btn btn-primary'>Confirmar</button>
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
            descripcion_depto: $("#txtdeptonombre").val()           
        };
        var request = envia_ajax_servidor('/Crossxgame/public/Adminpd/guardarDepto', array);
        request.done(function (data){
              location.reload(true);
        });       
    });
function Eliminardatos($data) {   
var array2 = {     
        id_depto: $data       
           };
        var request = envia_ajax_servidor('/Crossxgame/public/Adminpd/eliminarDepto', array2);
        request.done(function (data){
           location.reload(true);
        });   
    }
function ActualizarDatos($data) {    
var array2 = {     
        id_depto: $data ,  
       descripcion_depto: $('#txtnewdepto'+$data).val()    
           };
        var request = envia_ajax_servidor('/Crossxgame/public/Adminpd/updateDepto', array2);
            request.done(function (data){
           location.reload(true);
        });
    }
</script>