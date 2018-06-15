
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


<?php include("footer.php");?>
<script type="text/javascript" src="<?php echo $root?>js/imprimir.js"></script>

</body>
</html>