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
                echo "<td>".$rs->id_prod." ".$rs->nombreprod." </td>";
                echo "<td>".$rs->rut."</td>";
                echo "<td>".$rs->id_cli." ".$rs->nombre."</td>";
                echo "<td>".$rs->fecha_limite."</td>";   
                echo "<td>".$rs->reserva_estado."</td>";  
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