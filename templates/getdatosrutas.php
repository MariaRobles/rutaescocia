<?php 
	$conexion= mysqli_connect("localhost", "root", "", "rutaescocia");
	$numeroid = isset($_POST["numeroid"])? $_POST["numeroid"] : 1;
	if($conexion === false){
		die("ERROR TREMENDO".mysqli_connect_error());
	}

	if (!$conexion->set_charset("utf8")) {
	  printf("Error cargando el conjunto de caracteres utf8: %s\n", $conexion->error);
	  exit();
	} else {

	}
	
	/*echo "Conexión realizada con éxito. Host: " . mysqli_get_host_info($conexion);*/

	$consulta_rutas = "SELECT * FROM rutas WHERE id=" . $numeroid;
	$consulta_galerias = "SELECT * FROM galerias WHERE idgalerias=" . $numeroid;
	$resultado_rutas = mysqli_query($conexion, $consulta_rutas);
	$resultado_galerias = mysqli_query($conexion, $consulta_galerias);

	$row = array();
	

		
	 $row_rutas = mysqli_fetch_assoc($resultado_rutas);
	 $row['rutas']=$row_rutas;
	 $row_galerias = mysqli_fetch_assoc($resultado_galerias);
	 $row['galerias']=$row_galerias;

	 if($numeroid > 1)
	 	{echo  json_encode($row);}
	 	else if($numeroid <= 1) 
	 		{echo  json_encode($row);}
        
 ?>
 