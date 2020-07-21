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
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Rut</th>
                  <th>Email</th>
                  <th>Comuna</th>
                  <th>Dirreción</th>
                  <th>Fecha de nacimiento</th>
                  <th>Contraseña</th>
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
         echo "<td>".$cl->email."</td>";
        echo "<td>".$cl->rut."</td>";
        echo "<td>".$cl->comuna_nombre."</td>";   
        echo "<td>".$cl->direccion."</td>";
        echo "<td>".$cl->f_nacimiento."</td>"; 
        echo "<td>".$cl->contrasenia."</td>";    
        echo "<td> <button type='button' data-toggle='modal' data-target='#exampleModalCenter' class='btn btn-danger'  id='btnEliminar'>Eliminar</button></td>";


        echo "<div class='modal fade' id='exampleModalCenter' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-centered' role='document'>
        <div class='modal-content'>
        <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLongTitle'>¿Desea eliminar el producto?</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        ...
      </div>
      <div class='modal-footer'>
        <button type='button' id='btnConfirmar'  value=".$cl->id." class='btn btn-primary'>Confirmar</button>
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
