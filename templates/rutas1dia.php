<!DOCTYPE html>
<html>
<?php include("../start.php");?>
<?php include("head.php");?>
	
	
	
  <body>

	<div class="container-fluid contenedor row">


			<div class="col-xs-12 col-sm-12 col-lg-7 left">
				<div class="top-menus row d-flex justify-content-between">
					<div class="logo-chico">
                    <a href="<?php echo $root?>index.php"><img src="<?php echo $carpeta_fotos?>logo.svg" alt="logo">MENÚ</a></div>
					<div class="burger d-none d-lg-block" ><a id="show" href="#">RUTAS<i class="fas fa-align-right"></i></a></div>
				</div>
				<section class="rutas">
		          <ul>
		            <li><a href="rutas1dia.php">Ruta 1 día</a></li>
		            <li><a href="#">Ruta 2 días</a></li>
		            <li><a href="#">Ruta 3 días</a></li>
		            <li><a href="#">Ruta 4 días</a></li>
		            <li><a href="#">Larga duración</a></li>
		            <li><a href="#">Personalizada</a></li>
		          </ul>
		        </section>
				<div class="ruta1">
					<div class="d-flex flex-row">
						<div id="index" class="p-2"><p>Ruta </p></div>
						<div class="p-2 linea"><span></span></div>
						<div class="p-2"><p>1 día</p></div>
					</div>
					<div class="descrip">
						<h1 id="titulo"></h1>
						<p id="descripcion"></p>
					</div>
					<div class="controles d-flex flex-row">
					<div id="arriba" class="arriba p-2"><a href="#"><i class="far fa-arrow-alt-circle-up"></i></a></div>
					<div id="abajo" class="abajo p-2 "><a href="#"><i class="far fa-arrow-alt-circle-down"></i></a></div>
				</div>
					
				</div>

			</div>


			<div class="col-xs-12 col-sm-12 col-lg-5 right">
				
				<div id="fila-galeria" >
					<ul >
						<li><img id="fotogaleria1" src="" alt=""></li>
						<li><img id="fotogaleria2" src="" alt=""></li>
						<li><img id="fotogaleria3" src="" alt=""></li>
					</ul>
					<ul>
						<li><img id="fotogaleria4" src="" alt=""></li>
						<li><img id="fotogaleria5" src="" alt=""></li>
						<li><img id="fotogaleria6" src="" alt=""></li>
					</ul>
					<div id="cerrar"><i class="far fa-window-close"></i></div>
				</div>
				
				<div class="foto-dch d-none d-lg-block"><img id="foto" src="" alt="Dunnottar Castle"></div>

				<div class="galeria-fotos d-none d-lg-block">
					<a id="galeria" href="#">Galería fotos</a>
				</div>

				<div class="compra d-flex justify-content-end">
					<div class="precio">
						<p>Precio:</p>
						<p id="precio"></p>
					</div>
					<div id="carrito">
						<a id="enlace-carrito" href=""><img src="<?php echo $carpeta_fotos?>carrito.png" alt="carrito compra"></a>
					</div>
				</div>
			</div>

			

	</div> <!--contenedor-->

<?php include("footer.php");?>
   
 </body>
</html>

