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


							<div class="row marketing" style="justify-content: center;" >
								<div class="col-lg-4">
									<h4>Rut:</h4>
									<p><?php echo $rut?></p>

									<h4>Nombre:</h4>
									<p><?php echo $nombre?></p>

									<h4>Apellido:</h4>
									<p><?php echo $apellido?></p>

									<h4>ciudad: </h4>
									<p><?php echo $comuna_nombre?></p>
								</div>
								<div class="col-lg-4">
									<h4>Direccion: </h4>
									<p><?php echo $direccion?></p>

									<h4>correo:</h4>
									<p><?php echo $email ?></p>

									<h4>Fecha de Nacimiento:</h4>
									<p><?php echo $f_nacimiento?></p>

									<h4><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modalmodificación">Editar Datos</button></h4>
									<p></p>
									<h4><button type="button" class="btn btn-danger" onclick="bajaCuenta(<?php echo $id?>)">Dar de baja cuenta</button></h4>
								</div>
							</div>
						</br>


						<div class="cf-title"><h3 style="color: white;">Mis Reservas</h3></div>
						<div class="table-responsive">
							<table class="table table-striped table-sm">
								<thead>
									<tr>
										<th>
											N° Reserva
										</th>
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
										echo"<td> #".$r->reserva_id."</td>";
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
											<div class='modal-body'>";
												echo"codigo Reserva: #".$r->reserva_id."</br>";
												echo "producto: ".$r->nombreprod."</br>";
												echo "cantidad: ".$r->cantidad."</br>" ;

										echo "precio total: ".(int)$r->cantidad*(int)$r->precio."</br>
												una vez cancelado el pedido No podra reactivarlo.</br>";
										echo "¿Desea cancelarlo?
											</div>
											<div class='modal-footer'>
											<button type='button' onclick='estado1(".$r->reserva_id.")' class='btn btn-primary'>Confirmar</button>
											<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancelar</button>
											</div>
											</div>
											</div>
											</div>";

										}else{

											echo" <button type='button' data-toggle='modal' class='btn btn-primary' disabled='true' >Cancelar</button> </td>";  

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



	  function estado1($data) {  

	    var array2 = {

	     reserva_id: $data,  
	     reserva_estado: 'Cancelado'    
	    };

	    var request = envia_ajax_servidor('/Crossxgame/public/AdminOrdenes/ActualizarEstado', array2);
	    request.done(function (data){
	    	alert("Reserva Cancelada.");
	    location.reload(true);
	      
	    });
	     
	  }	    

	  function bajaCuenta($data){
	  	var	array2={
	  		id: $data,
	  		estado:'0'
	  	};
	  	var request = envia_ajax_servidor('/Crossxgame/public/Admincls/cambiarEstado', array2);
	  	request.done(function (data){
	    	alert("Cliente dado de baja.");
	    location.reload(true);
	      
	    });
	  }
	</script>