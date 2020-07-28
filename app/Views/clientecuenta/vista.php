<!-----------------------------------------Modal--------------------------------------------------->
<form class="contact-form" id="miFormActualizacion">
    <div class="modal fade" id="Modalmodificación" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modificación de datos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form>
                            <div class="form-group">
                                <label for="inputPassword4">Nombre</label>
                                <input id="txtNombreModificar" name="nombreModificar" type="text" class="form-control" placeholder="Nombre" value="<?php echo $nombre?>">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword4">Apellido</label>
                                <input id="txtApellidoModificar" name="apellidoModificar" type="text" class="form-control" placeholder="Apellido" value="<?php echo $apellido?>">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail4">Rut</label>
                                <input id="txtRutModificar" name="rutModificar" type="text" class="form-control" placeholder="Rut" value="<?php echo $rut?>">
                            </div>
                            <div class="form-group">
                            <label for="inputAddress" >Region</label>
                            <select id="selectRegion" onchange="ShowSelected();" class="form-control" style="border-radius: 1em">
                                <option value="0" selected="">Seleccione Region...</option>
                                <?php
                                print_r($arrProfesiones);
                                foreach ($arrProfesiones as $i => $region_nombre)
                                    echo '<option values="',$i,'">',$region_nombre,'</option>';
                                 ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Comuna</label>
                            <select id="selectComuna" class="form-control" style="border-radius: 1em">
                                <option selected="">Seleccione Comuna...</option>
                            </select>
                        </div>
                        <div class="form-group">
                                <label for="inputEmail4">Dirección</label>
                                <input id="txtDireccionModificar" name="direccionModificar" type="text" class="form-control" placeholder="Direccion" value="<?php echo $direccion?>">
                        </div>
                        <div class="form-group">
                                <label for="inputEmail4">Email</label>
                                <input id="txtEmailModificar" name="emailModificar" type="email" class="form-control" placeholder="Email" value="<?php echo $email ?>">
                        </div>
                        <div class="form-group">
                                <label for="inputEmail4">Password</label>
                                <input id="txtContraseñaMod" name="contraseñaMod" type="Password" class="form-control" placeholder="Modificar Contraseña" value="">
                        </div>
                        <div class="form-group">
                                <label for="inputEmail4">Confirmar Password</label>
                                <input id="txtContraseñaConf" name="contraseñaConf" type="Password" class="form-control" placeholder="Repetir Nueva Contraseña" value="">
                        </div>
                        </form>
                    </div>
                  
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" id="btnModificar" name="btnModificar" onclick="ActualizarDatos(<?php echo $id?>)" class="btn btn-primary">Modificar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-----------------------------------------Modal Final--------------------------------------------->
<!-- checkout section  -->
<br>
<br>
<section class="container">
	<div class="container">
		<div class="row">

			<div class="col-lg-12 ">
				<form class="checkout-form">
					<div class="cf-title"><h2 style="color: white;">Mi cuenta</h2></div>						
					<div class="row col-md-7">
						<div class="col-md-12">
							<li>Rut: <label><?php echo $rut?></label></li>
							<li>Nombre: <label><?php echo $nombre?></label></li>
							<li>Apellido: <label><?php echo $apellido?></label></li>
							<li>ciudad: <label><?php echo $comuna_nombre?></label></li>
							<li>Direccion: <label><?php echo $direccion?></label></li>
							<li>correo: <label><?php echo $email ?></label></li>
							<li>Fecha de Nacimiento: <label><?php echo $f_nacimiento?></label></li>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modalmodificación">Primary</button>			
						</div>
					</div>
					<div class="cf-title">Mis Pedidos</div>
					<div class="table-responsive">
						<table class="table table-striped table-sm">
							<thead>
								<tr>
									<th>
										Fecha de Reserva
									</th>
									<th>
										Nombre de Producto
									</th>
									<th>
										Cantidad
									</th>
									<th>
										Precio Unitario
									</th>		
									<th>
										Precio total
									</th>	
									<th>
										Fecha Limite
									</th>
									<th>
										Estado
									</th>
									<th>
										Opciones
									</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								foreach ($reserva as $r) {
									echo"<tr>";
									echo"<td>".$r->fecha_reserva."</td>";
									echo"<td>".$r->nombreprod."</td>";
									echo"<td>".$r->cantidad."</td>";
									echo"<td> $ ".$r->precio."</td>";
									echo "<td>$ ";
									echo (int)$r->cantidad*(int)$r->precio;
									echo "</td>";
									echo"<td>".$r->fecha_limite."</td>";
									echo"<td>".$r->reserva_estado."</td>";
									echo"<td>";	 

									if($r->reserva_estado=="Reservado"){

										echo" <button type='button' data-toggle='modal' data-target='#exampleModalCenter' class='btn btn-danger'  id='btnEliminar'>Cancelar</button> </td>";  


										echo "<div class='modal fade' id='exampleModalCenter' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
										<div class='modal-dialog modal-dialog-centered' role='document'>
										<div class='modal-content'>
										<div class='modal-header'>
										<h5 class='modal-title' id='exampleModalLongTitle'>¿Cancelar Pedido?</h5>
										<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
										<span aria-hidden='true'>&times;</span>
										</button>
										</div>
										<div class='modal-body'>
											una vez cancelado el pedido No podra reactivarlo.
											¿Desea cancelarlo?".$r->reserva_id."
										</div>
										<div class='modal-footer'>
										<button type='button' onclick='ActualizarDatos(".$r->reserva_id.")' class='btn btn-primary'>Confirmar</button>
										<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancelar</button>
										</div>
										</div>
										</div>
										</div>";

									}else{

										echo" <button type='button' data-toggle='modal' class='btn btn-primary'  disable>Hola</button> </td>";  

									}




									echo "</tr>";
								}
								?>
							</tbody>
						</table>

					</div>

					
					<div class="cf-title">Archivos Descargables</div>
					<div class="col-6">
						<h4>Usted no tiene ningun Archivo descargable.</h4>
					</div>
				</form>
				<br>
				<br>
			</div>
			
		</div>
	</div>
</section>
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
		function ActualizarDatos($data) {    
            var array2 = {     
              id: $data, 
              nombre: $("#txtNombreModificar").val(),
              apellido: $("#txtApellidoModificar").val(),
              rut: $("#txtRutModificar").val(),
              comuna: $("#selectComuna").val(),  
              direccion: $("#txtDireccionModificar").val(),  
              email: $("#txtEmailModificar").val() 
            };
            var request = envia_ajax_servidor('/Crossxgame/public/Clientecuenta/updateCliente', array2);
            request.done(function (data){
               alert("Datos Actualizados con exito");
              location.reload(true);
            });
            //location.reload();
          }
	</script>
	<script type="text/javascript">
	function ShowSelected(){
          var combo = document.getElementById("selectRegion").selectedIndex; 
          if(combo != ''){
              $.ajax({
                  url:"/Crossxgame/public/Registro/ObtenerComuna",
                  method:"POST",
                  data:{combo:combo},
                  success:function(data){  
                      var comunas = "<option value='0'>Seleccionar comuna</option>";
                     for (var i = 0; i < data.length; i++) {
                          var id = data[i].comuna_id;
                          var nombre = data[i].comuna_nombre;
                          comunas = comunas.concat("<option value='"+id+"'>"+nombre+"</option>");
                     }
                     $('#selectComuna').html(comunas);
                  }               
              });
          }else{
              $('#selectComuna').html('<option value="">Select State</option>');
          }    
       }
      </script>