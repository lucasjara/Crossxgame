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
                                <input id="txtContraseñaModal" name="contraseñaLogin" type="password" class="form-control" placeholder="Contraseña">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword4">Apellido</label>
                                <input id="txtContraseñaModal" name="contraseñaLogin" type="password" class="form-control" placeholder="Contraseña">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail4">Rut</label>
                                <input id="txtEmailModal" name="emailLogin" type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                            <label for="inputAddress" >Region</label>
                            <select id="selectRegion" onchange="ShowSelected();" class="form-control" style="border-radius: 1em">
                                <option value="0" selected>Seleccione Region...</option>
                                <?php
                                //print_r($arrProfesiones);
                                //foreach ($arrProfesiones as $i => $region_nombre)
                                  //  echo '<option values="',$i,'">',$region_nombre,'</option>';
                                // ?>
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
                                <input id="txtEmailModal" name="emailLogin" type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                                <label for="inputEmail4">Email</label>
                                <input id="txtEmailModal" name="emailLogin" type="email" class="form-control" placeholder="Email">
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" id="btnModificar" name="btnModificar" class="btn btn-primary">Modificar</button>
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
											echo"<td>".$r->fecha_limite."</td>";
											echo"<td>".$r->reserva_estado."</td>";
											echo"<td> <input type='buton'></td>";
										echo"</tr>";
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