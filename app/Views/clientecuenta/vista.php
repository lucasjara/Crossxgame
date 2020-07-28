
	<!-- Page Preloder

	<div id="preloder">
		<div class="loader"></div>
	</div>

 -->



	<!-- checkout section  -->
	<section class="container-section spad">
		<div class="container">
			<div class="row">
					
				<div class="col-lg-12 order- order-lg-1">
					<form class="checkout-form">
						<div class="cf-title"><h2 style="color: white;">Mi cuenta</h2></div>

						
						<div class="row col-md-7">
							<div class="col-md-12 payment-list">
								<li>Rut: <label><?php echo $rut?></label></li>
								<li>Nombre: <label><?php echo $nombre?></label></li>
								<li>Apellido: <label><?php echo $apellido?></label></li>
								<li>ciudad: <label><?php echo $comuna_nombre?></label></li>
								<li>Direccion: <label><?php echo $direccion?></label></li>
								<li>correo: <label><?php echo $email ?></label></li>
								<li>Fecha de Nacimiento: <label><?php echo $f_nacimiento?></label></li>
													
							</div>
						</div>
						<div class="cf-title">Mis Pedidos</div>
						<div class="">
							<div >
								<table>
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
											echo"<td></td>";
										echo"</tr>";
										}
										?>
									</tbody>
								</table>
								
							</div>
							
						</div>
						<div class="cf-title">Archivos Descargables</div>
						<div class="col-6">
								<h4>Usted no tiene ningun Archivo descargable.</h4>
							</div>
					</form>
				</div>
			
			</div>
		</div>
	</section>