 <?php 
$conexion= mysqli_connect("localhost", "root", "", "rutaescocia");

$id=$_POST["id"];
$precio=$_POST["precio"];
$nombreruta=$_POST["nombreruta"];
$nombre_cliente = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];  //esto va por el name=""
$fecha_ruta = $_POST["datepicker"];
$numero_personas = $_POST["numeropersonas"];
$observaciones = $_POST["observaciones"];


 
$sql = "INSERT INTO clientes_compras (nombre_cliente
							, apellidos
							, email
							, fecha_ruta
							, fecha_compra
							, numero_personas
							, telefono
							, observaciones)"
		. "VALUES  (  '$nombre_cliente'
					, '$apellidos'
					, '$email'
					, '$fecha_ruta'
					, NOW()
					, $numero_personas
					, $telefono
					, '$observaciones')";

//echo $sql;

(mysqli_query($conexion, $sql))
	

?>



<!DOCTYPE html>
<html>
<?php include("../start.php");?>
    <?php include("head.php");?>
<body>

<div class="continer" id="imprimir" style="width: 50%; margin: 0 auto;">
<h1 id="nombre-imprime" style="padding-top: 10%"><?php echo $nombreruta?></h1>
<p><strong>Nombre:</strong> <?php echo $nombre_cliente?> <?php echo $apellidos ?>.</p>
<p><strong>Fecha de la ruta:</strong> <?php echo $fecha_ruta ?></p>
<p><strong>Numero de persona:</strong> <?php echo $numero_personas ?></p>
<p><strong>Precio:</strong> <?php echo $precio?>€ por persona. </p>
<p style="font-size: 16px">Para contactar con nosotros puedes llamar a 0044 15478854 o mandar un correo a info@rutaescocia.com.</p>

</div>

<button type="button" class="btn btn-primary" id='imprime' href='javascript:;' onclick="imprSelec('imprimir')">
									<i class="fa fa-print" aria-hidden="true"></i> Imprimir</button> 
<a id='volver' href='<?php echo $root ?>index.php'>Volver a rutas</a>

<script>
	//imprimir///////////////////////////////
	function imprSelec(nombre) {
		var ficha = document.getElementById(nombre);
		var ventimp = window.open(' ', 'popimpr');
		ventimp.document.write(ficha.innerHTML);
		ventimp.document.close();
		ventimp.print();
		ventimp.close();
	}
</script>
<?php include("footer.php");?>

</body>
</html>