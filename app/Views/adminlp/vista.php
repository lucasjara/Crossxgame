
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
     
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
              </div>      
            </div>
          </div>

        <form  class="contact-form" id="myForm"  enctype="multipart/form-data" >
               
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
        echo "<td>".$producto->descripcion."</td>";
        echo "<td>".$producto->img."</td>";
        echo "<td> <button type='button' data-toggle='modal' data-target='#exampleModalCenter' class='btn btn-default'  id='btnEliminar'>Ver</button></td>";


        echo "<div class='modal fade' id='exampleModalCenter' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-centered' role='document'>
        <div class='modal-content'>
        <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLongTitle'>Datos del producto</h5>

        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
      <img class='card-img-top' src='public/crossxgame/img/product/".$producto->img."' alt='Card image cap'>
      </div>
      <div class='modal-footer'>

        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Volver</button>
        
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

    //   limpiarFormulario();

        request.done(function (data){
            console.log(data);
        });
        
    });


 $("#btnConfirmar").on("click",function(){
 
  var array2 = 
          {
      
        id: $("#btnConfirmar").val()
        

          };

        var request = envia_ajax_servidor('/Crossxgame/public/Admin/eliminarProducto', array2);

        request.done(function (data){
            console.log(data);
        });
      
    });
 
</script>