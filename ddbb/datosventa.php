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

(mysqli_query($conexion, $sql));

include("../templates/imprimir.php");

?>

