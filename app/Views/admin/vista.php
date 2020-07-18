

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
     
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
              </div>      
            </div>
          </div>

        <form  class="contact-form" id="myForm">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h2>Registro</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputname">Nombre</label>
                                <input id="txtnombre" name="nombre" type="text" class="form-control" placeholder="Ingrese Nombre del juego...">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputname">Stock</label>
                                <input id="txtstock" name="stock" type="text" class="form-control" placeholder="Ingrese Stock...">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputname">Precio</label>
                                <input id="txtprecio" name="precio" type="text" class="form-control" placeholder="Ingrese precio...">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputname">Descripcion</label>
                                <input id="txtdescripcion" name="descripcion" type="textarea" class="form-control" placeholder="Ingrese Descripcion...">
                            </div>
                        </div>       
                        <div class="form-row">               
                          <div class="form-group col-md-6">
                                <label for="inputAddress">Departamento</label>
                                <select id="selectDepto" class="form-control" style="border-radius: 1em">
                                <option selected="">Seleccione Departamento...</option>
                              <?php
                                foreach ($arrayDepto as $i => $descripcion)

                                  echo '<option value="',$i,'">',$descripcion,'</option>';
                                
                                ?>
                            </select>
                           </div>
                          <div class="form-group col-md-6">
                            <label for="inputAddress">imagen</label>
                            <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input"  id="inputGroupFile01"
                                      aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Seleccione Un archivo</label>
                                  </div>
                            </div>
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
            <table class="table table-striped table-sm" id="tabla-producto">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Stock</th>
                  <th>Precio</th>
                  <th>Departamento</th>
                   <th>Nombre Imagen</th>
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
      echo "<td>".$producto['img']."</td>";
      echo "</tr>";}
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

    //function limpiarFormulario() {
    //document.getElementById("myForm").reset();
   // document.getElementById("tabla-producto").reset();
  //}


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

    //   limpiarFormulario();

        request.done(function (data){
            console.log(data);

        });
        
    });

    
</script>
