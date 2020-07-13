<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<TABLE>
<?php 
foreach ($productos as $producto ) {
	echo "<tr>";
	echo "<td>".$producto['id']."</td>";
		echo "<td>".$producto['nombre']."</td>";
			echo "<td>".$producto['stock']."</td>";
				echo "<td>".$producto['precio']."</td>";
					echo "<td>".$producto['id_depto']."</td>";
	echo "</tr>";

}

?>
</TABLE>
</body>
</html> 