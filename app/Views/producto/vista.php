<?php
$idp=base64_decode($_GET["id"]);
?>

<script type="text/javascript">

</script>

<body id="body">
	<section   class="product-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="product-pic-zoom">
						<img class='product-big-img' src=<?php echo "public/crossxgame/img/product/".$img;?> >
					</div>
					<div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
					</div>
				</div>
				<div class="col-lg-6 product-details">
					<?php echo "<h1 class='p-title'  >".$nombre; ?></h1>
					<h2 class="p-price"><?php echo "$".$precio; ?> CLP</h2>
					<h2 class="p-title"><?php echo "".$descripcion_depto; ?></h2>	
					<h2 class="p-stock">Disponibilidad: <span class="p-title" > <?php echo $stock; ?></span></h2>


					<div class="quantity">
						<p>Cantidad</p>
						
						<?php echo "<div class='pro-qty'> <input type='number' id='cantidad' value='0' disabled  max='".$stock."' > </div>"; 
						?>
					</div>
					<?php
					if($stock!=0){
						echo "<a href='#''  data-toggle='modal' data-target='#exampleModal' id='txtdatos' class='site-btn'>Reservar</a>";
					}else{

						echo  "<a   data-toggle='modal' data-target='' class='site-btn'>NO Stock</a>";


					}
					?>		
					</br>		
						</br>	
<div class="p-stock">NOTA: Stock desfasado en 20 minutos.</div>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">¿Desea reservar el producto?</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									La reserva del producto estara habilitada por 24 hrs a partir desde ahora, Reserva Disponible hasta el día<a id="demo1" class="modal-body"></a>a las<a id="hora" class="modal-body"></a>Para mas Informacion valla al apartado "Detalles de reserva".
								</div>
								<div class="modal-footer">
									<button type="button" id="btnReserva" class="btn btn-primary">Reservar Producto</button>
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

								</div>
							</div>
						</div>
					</div>
					<!--end Modal-->
					
					<div id="accordion" class="accordion-area">

						<div class="panel">

							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Informacion</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<?php echo "".$descripcion; ?>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingTwo">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Detalles de reserva </button>
							</div>
							<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="panel-body">
									
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
								</div>
							</div>
						</div>

					</div>
					<div class="social-sharing">
						<a href=""><i class="fa fa-google-plus"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-youtube"></i></a>
						<?php	echo "<input type=text id='code' value='".$idp."'";?>  
						<?php echo "style='visibility:hidden'>";?>	
						<?php	echo "<input type=text id='stock' value='".$stock."'";?>  
						<?php echo "style='visibility:hidden'>";?>	

					</div>
				</div>
			</div>
		</div>
	</section>
</body>
<script>
	var f = new Date();
	//document.getElementById("demo1").innerHTML = (f.getDate()+1)+ "-" + (f.getMonth() +1) + "-" + f.getFullYear();
document.getElementById("demo1").innerHTML =(f.getDate()+2)+ "-" + (f.getMonth() +1) + "-" + f.getFullYear();
</script>
<script>
	var d = new Date();
	var n = d.getHours();
	document.getElementById("hora").innerHTML = n+"hrs";

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
	$cliente=<?php echo session()->get('Codigo');?>;
	$fecha = ( f.getFullYear()+ "-" +(f.getMonth() )+ "-" + (f.getDate()) );
	$fechal = ( f.getFullYear()+ "-" +(f.getMonth() )+ "-" + (f.getDate()+2) );
	$("#btnReserva").on("click",function(){
		
		if(parseInt($("#cantidad").val())==0){

		alert("No puede Reservar 0 Productos.");

		}else if(parseInt($("#cantidad").val())>parseInt(($("#stock").val()))){

			alert("No puede Reservar más de "+parseInt($("#stock").val())+" Productos.");

		}else{	
			var array = {
				fecha_reserva: $fecha,
				id_prod: $("#code").val(),
				cantidad: $("#cantidad").val(),
				id_cli: $cliente,
				fecha_limite:$fechal,
				reserva_estado:$("#txtdatos").val(),
				stock:parseInt($("#stock").val()-$("#cantidad").val())
			};
			var request = envia_ajax_servidor('/Crossxgame/public/producto/ReservarProducto', array);
			alert("Usted a reservado  "+$("#cantidad").val()+" Productos.");
  		  request.done(function (data){
    	 location.reload(true);	
    });  		 
}
});
</script>