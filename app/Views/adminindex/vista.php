
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	* {
		box-sizing: border-box;
	}
	/* Float four columns side by side */
	.column {
		float: left;
		width: 25%;
		padding: 0 5px;
	}

	.row {margin: 0 -5px;}

	/* Clear floats after the columns */
	.row:after {
		content: "";
		display: table;
		clear: both;
	}

	/* Responsive columns */
	@media screen and (max-width: 600px) {
		.column {
			width: 100%;
			display: block;
			margin-bottom: 10px;
		}
	}

	/* Style the counter cards */
	.card {
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		padding: 16px;
		text-align: center;

		color: white;
	}

	.fa {font-size:50px;}
</style>
<body>
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
		<div class="container">


			<h1>Inicio</h1>

		</div>
		<div class="container">
			<body>

				<h4>Resumen</h4>

				<div class="row">
					<div class="column">
						<div class="card">
							<p><i class="fa fa-user"></i></p>
							<h3><?php  
							echo count($cliente);
							?></h3>
							<p>Clientes</p>
						</div>
					</div>

					<div class="column">
						<div class="card">
							<p><i class="fa fa-check"></i></p>
							<h3><?php  
							echo count($reserva);
							?></h3>
							<p>Ordenes Activas</p>
						</div>
					</div>

					<div class="column">
						<div class="card">
							<p><i class="fa fa-barcode"></i></p>
							<h3><?php  
							echo count($producto);
							?></h3>
							<p>Productos</p>
						</div>
					</div>

					<div class="column">
						<div class="card">
							<p><i class="fa fa-tags"></i></p>
							<h3><?php  
							echo count($departamento);
							?></h3>
							<p>Departamentos</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</br>	</br>	</br>	</br>	</br>	</br>	</br>	</br>
</br>
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
