<?php include("getdatoscarrito.php");?>


<!DOCTYPE html>
<html>
	<?php include("../start.php");?>
	<?php include("head.php");?>
<body class="fondo">

	<div class="container-fluid row container-carrito">
		<h1>Ya estás un pasito más cerca de Escocia...</h1>
		<div class="carrito col-xs-10 col-sm-10 col-md-10 col-lg-8">

			<form id="compra" method="POST" action="imprimir.php" autocomplete="off">
				
				<h3 id="nombre-ruta-carrito"><?php echo $row_precio['nombre'] ?></h3>
				<!--//////////////////////estos campos están hidden para recoger datos /////////-->
				<div class="form-group" >
						<input type="hidden"  autocomplete="off" class="form-control" id="nombreruta" name="nombreruta" value="<?php echo $row_precio['nombre'] ?>">
				</div>
				<div class="form-group" >
						<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row_precio['id'] ?>">
				</div>
				<div class="form-group" >
						<input type="hidden" class="form-control" id="precio" name="precio" value="<?php echo $row_precio['precio'] ?>">
				</div>
				<!--//////////////////////////////////////////////////////////////////////////////////-->
				<div class="form-group">
						<input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder:"Nombre" placeholder="Nombre">
				</div>
				<div class="form-group">
						<input type="apellidos" name="apellidos" class="form-control" id="apellidos" placeholder="Apellidos">
				</div>
				<div class="form-group">
						<input type="email" name="email" class="form-control" id="email" placeholder="Email">
				</div>
				<div class="form-group">
						<input type="remail" name="remail" class="form-control" id="remail" placeholder="Confimar email">
				</div>
				<div class="form-group">
						<input type="telefono" name="telefono" class="form-control" id="telefono" placeholder="Teléfono">
				</div>
				<div class="form-group">
						<input type="text" name="datepicker" id="datepicker" placeholder="Fecha"/>
				</div>
				<div class="form-group">
						<input type="number" name="numeropersonas" class="form-control" id="numeropersonas" placeholder="Número de personas" min="1" max="12">
				</div>
				<div class="form-group">
						<textarea class="form-control" id="observaciones" name="observaciones" placeholder="Observaciones"></textarea>
				</div>
					
				<button type="button" id="calculo" class="btn btn-primary">Calcular precio</button>
			
				<form action="imprimir.php" method="POST">
					<script
						src="https://checkout.stripe.com/checkout.js" class="stripe-button"
						data-key="pk_test_Q2xQmnov8GZBzooOe935pDIy"
						data-name="Ruta Escocia"
						data-locale="auto"
						data-currency="eur">
					</script>
				</form>
					
			</form>
		</div>
	
		<!--aside -->
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-4 preciocarrito">
			<p>Precio por persona:</p>
			<div><?php $preciofinal=$row_precio['precio'];?></div>
			<div id="preciopp"><?php echo ($preciofinal);?></div>
			<p class="euro">€</p>
			<div id ="preciofinal"></div>
		</div>
	</div>



	

<?php include("footer.php");?>

  		
</body>
</html>



