<?php 

    $conexion= mysqli_connect("localhost", "root", "", "rutaescocia");
	$id = $_GET['id'];

	if($conexion === false){
		die("ERROR TREMENDO".mysqli_connect_error());
	}

	if (!$conexion->set_charset("utf8")) {
	  printf("Error cargando el conjunto de caracteres utf8: %s\n", $conexion->error);
	  exit();
	} else {

	}
	
	/*echo "Conexión realizada con éxito. Host: " . mysqli_get_host_info($conexion);*/	

	$consulta_precio = "SELECT precio, nombre, id FROM rutas WHERE id=" . $id;
	$resultado_precio = mysqli_query($conexion, $consulta_precio);

	 $row_precio = mysqli_fetch_assoc($resultado_precio);

?>