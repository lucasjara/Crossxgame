     <?php ?>

     <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">

        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
          </div>      
        </div>
      </div>

      <form  class="contact-form" id="myForm"  enctype="multipart/form-data" >

      </form>
      <h2>Clientes</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm" id="tabla-producto">
          <thead>
            <tr>
              <th>ID</th>
              <th>Fecha Reserva</th>
              <th>Producto</th>
              <th>Cantidad</th>
              <th>Rut Cliente</th>
              <th>Cliente</th>
              <th>Fecha Limite</th>
              <th>Estado reserva</th>
              <th>Opciones</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            foreach ($reserva as $rs ) {
              echo "<tr>";
              echo "<td>".$rs->reserva_id."</td>";
              echo "<td>".$rs->fecha_reserva."</td>";
              echo "<td>".$rs->id_prod." - ".$rs->nombreprod." </td>";
              echo "<td>".$rs->cantidad."</td>";
              echo "<td>".$rs->rut."</td>";
              echo "<td>".$rs->id_cli." - ".$rs->nombre."</td>";
              echo "<td>".$rs->fecha_limite."</td>";   
              echo "<td>".$rs->reserva_estado."</td>";  
              echo "<td>";
              echo "<button type='button' data-toggle='modal' data-target='#exampleModalCenter".$rs->reserva_id."' class='btn btn-success'  id='btnEliminar'>Cambiar Estado</button>";

              echo "<div class='modal fade' id='exampleModalCenter".$rs->reserva_id."' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
              <div class='modal-dialog modal-dialog-centered' role='document'>
              <div class='modal-content'>
              <div class='modal-header'>
              <h5 class='modal-title' id='exampleModalLongTitle'>Actualizar Estado</h5>
              <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
              </button>
              </div>
              <div class='modal-body'>";
          
              if ($rs->reserva_estado=="Cancelado") {
                

                echo "Este Pedido fue Cancelado ";

              }else if($rs->reserva_estado=="Reservado"){


                echo "<center><button type='button' id='btnConfirmar' onclick='estado2(".$rs->reserva_id.")' 
                class='btn btn-primary'>Finalizado</button > ";

                echo "  <button type='button' id='btnConfirmar' onclick='estado1(".$rs->reserva_id.")' 
                class='btn btn-danger'>Cancelar</button></center> ";

              }else if($rs->reserva_estado=="Finalizado"){
                echo " Ya se entrego El la Reserva  ";
              }

              echo " </div>
              <div class='modal-footer'>
              <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancelar</button>
              </div>
              </div>
              </div>
              </div>";
              echo "</td>";  
            }
            ?>
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

  function estado1($data) {  

    var array2 = {

      reserva_id: $data,  
     reserva_estado: 'Cancelado'    
    };

    var request = envia_ajax_servidor('/Crossxgame/public/AdminOrdenes/ActualizarEstado', array2);
    request.done(function (data){
    location.reload(true);
      
    });
     
  }
  function estado2($data) {  

    var array2 = {

      reserva_id: $data,  
     reserva_estado: 'Finalizado'    
    };


    var request = envia_ajax_servidor('/Crossxgame/public/AdminOrdenes/ActualizarEstado', array2);
    request.done(function (data){
    location.reload(true);
    });
 
  }
</script>