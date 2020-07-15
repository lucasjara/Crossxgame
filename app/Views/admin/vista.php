

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
     
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
              </div>      
            </div>
          </div>

        <form style="" class="contact-form">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h2>Registro</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputname">Nombre</label>
                                <input id="txtNombre" type="text" class="form-control" placeholder="Ingrese Nombre del juego...">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputname">Stock</label>
                                <input id="txtNombre" type="text" class="form-control" placeholder="Ingrese Stock...">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputname">Precio</label>
                                <input id="txtNombre" type="text" class="form-control" placeholder="Ingrese precio...">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputname">Descripcion</label>
                                <input id="txtNombre" type="textarea" class="form-control" placeholder="Ingrese Descripcion...">
                            </div>
                        </div>       
                        <div class="form-row">               
                          <div class="form-group col-md-6">
                                <label for="inputAddress">Departamento</label>
                                <select id="selectDepto" class="form-control" style="border-radius: 1em">
                                <option selected="">Seleccione Departamento...</option>
                                <option>...</option>
                            </select>
                           </div>
                          <div class="form-group col-md-6">
                            <label for="inputAddress">imagen</label>
                              <input type="file" id="myFile" class="form-control" name="filename">
                          </div>
                      </div>
                    <div class="card-footer">
                        <div class="float-right">
                            <button type="submit" class="btn btn-primary" id="btnRegistrar">Registrar</button>
                            <button type="reset" class="btn btn-success" id="btnLimpiar">Limpiar</button>
                        </div>
                    </div>
                </div>
            </form>

          <h2>Productos</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Stock</th>
                  <th>Precio</th>
                  <th>Departamento</th>
                </tr>
              </thead>
              <tbody>
                     <?php 
      foreach ($productos as $producto ) {
      echo "<tr>";
      echo "<td>".$producto['id']."</td>";
      echo "<td>".$producto['nombre']."</td>";
      echo "<td>".$producto['stock']."</td>";
      echo "<td>".$producto['precio']."</td>";
      echo "<td>".$producto['id_depto']."</td>";
      echo "</tr>";
    }?>  
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>