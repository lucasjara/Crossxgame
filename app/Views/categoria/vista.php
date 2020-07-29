	<!-- Category section -->
	<section class="category-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<?php 
						foreach ($productos as $producto ) {
							echo '<div class="col-lg-3 col-sm-4">';
							echo'<div class="product-item">';
							echo'<div class="pi-pic">';		
							echo'<a href=producto?id='. base64_encode($producto->id).'><img src="public/crossxgame/img/product/'.$producto->img.'"> </a>';
							echo'<div class="pi-links">';
							echo'</div>';
							echo'	</div>';
							echo'<div class="pi-text">';
							echo"<h6>$".$producto->precio."</h6>";
							echo "<p>".$producto->nombre."</p>";
							echo'	</div>';
							echo'	</div>';
							echo'</div>';
							};
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Category section end -->