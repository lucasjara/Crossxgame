<?php
$idP=base64_decode($_GET["id"]);
?>

 <script type="text/javascript">
    function buscarid( data) {
    var variable = $.ajax({
        url: "/Crossxgame/public/producto/traerId",
        method: 'POST',
        data: data,
        'dataSrc': 'data',
        dataType: 'json'
    })
    console.log(variable);
    return variable;
    }
$("#body").on("onload",function(){
        var array = { idP: $idP};
        var request = buscarid(array);
        request.done(function (data){
        });
    });
</script>

<body id="body">
<section   class="product-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="product-pic-zoom">
						<img class='product-big-img' src='public/crossxgame/img/product/nn.jpg'>
					</div>
					<div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
					</div>
				</div>
				<div class="col-lg-6 product-details">
					<h1 class="p-title"><?php echo "nombre id=".$idP; ?></h1>
					<h2 class="p-price"><?php echo "precio"; ?></h2>
					<h4 class="p-stock">Disponibilidad: <span>Sin Stock</span></h4>

				 
				
					<div class="quantity">
						<p>Cantidad</p>
						<div class='pro-qty'> <input type='text' value='0'></div>
                    </div>

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
						        La reserva del producto estara habilitada por 24 hrs a partir desde ahora, Reserva Disponible hasta el día<a id="demo" class="modal-body"></a>Para mas Informacion valla al apartado "Detalles de reserva".
						      </div>
						      <div class="modal-footer">
						       <button type="button" class="btn btn-primary">Reservar Producto</button>
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					
						      </div>
						    </div>
						  </div>
						</div>
			<!--end Modal-->
					<a href="#"  data-toggle="modal" data-target="#exampleModal" class="site-btn">Reservar</a>

					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Informacion</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
								<?php echo "esto es una descripcion"; ?>
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
					</div>
				</div>
			</div>
		</div>
	</section>
	</body>

<script>

 var f = new Date();
  document.getElementById("demo").innerHTML = (f.getDate()+1)+ "/" + (f.getMonth() +1) + "/" + f.getFullYear()+" a las "+f.getHours()+"hrs,";

</script>