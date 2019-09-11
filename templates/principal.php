<!DOCTYPE HTML>
<html>
<link rel="icon" href="img/favicon.png">

<body>
    <div class="fijo">
        <div class="boton-menu">
            <a href="#">
                <p>R</p><br>
                <p>U</p><br>
                <p>T</p><br>
                <p>A</p><br>
                <p>S</p><br>
            </a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="templates/rutas1dia.php">Rutas 1 día</a></li>
                <li><a href="#">Rutas 2 días</a></li>
                <li><a href="#">Rutas 3 días</a></li>
                <li><a href="#">Rutas 4 días</a></li>
                <li><a href="#">Rutas 5 días</a></li>
                <li><a href="#">Personalizadas</a></li>
            </ul>
        </div>
    </div> 
   
    <div class="slides">
        <div class="slide" id="1">
            <div class="content content1">
                 
                <div class="row">
                    <div class="presentation col-xs-12 col-sm-12 col-md-8">
                        <h3> <img src="img/logo.png" alt="logo ruta escocia"><strong>RUTA ESCOCIA</strong></h3>
                        <p>Ruta Escocia organiza tours privados en español con itinerarios adaptados a sus necesidades. Somos la primera empresa local de habla hispana centrada principalmente en viajes privados y exclusivos, con la garantía de que usted elige a sus compañeros de viaje en su excursión por Escocia.</p>
                        <p>Desde familias a viajes de empresa, amigos o lunas de miel, hemos diseñado nuestras rutas para que cualquier persona que busque un viaje de calidad 
                                perfectamente organizado pueda disfrutar de ellas. Y para que las pueda personalizar a su gusto: usted nos explica sus preferencias y nosotros elaboramos 
                                toda la programación del viaje, desde las excursiones al alojamiento.</p>
                    </div>
                    <div class="foto-slide1 col-md-4 d-none d-lg-block"></div>
                </div>
                <div class="title d-none d-lg-block">
                    <span class="r">R</span>
                    <span class="u">U</span>
                    <span class="t">T</span>
                    <span class="a">A</span>
                    <span class="e">E</span>
                    <span class="s">S</span>
                    <span class="c">C</span>
                    <span class="o">O</span>
                    <span class="c">C</span>
                    <span class="i">I</span>
                    <span class="a">A</>
                </div>
            </div>
        </div>
        <div class="slide dos slide2 d-none d-lg-block" id="2">
            <div class="content content2">
                <div class="parallax">
                    <ul id="scene">
                        <li class="layer " data-depth="0.80">
                                <div class="pajaro pajaro1"></div>
                            </li>
                        <li class="layer" data-depth="0.20">
                            <div class="pajaro pajaro2"></div>
                        </li>
                        <li class="layer" data-depth="0.30">
                            <div class="pajaro pajaro3"></div>
                        </li>
                        <li class="layer" data-depth="0.50">
                            <div class="pajaro pajaro4"></div>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="foto-slide2 col-4"></div>
                    <div class="texto col-8">
                        <p class="slide2titulo">Personaliza tu ruta</p>
                        <div class="linea-index"></div>
                        <p class="slide2texto">Puedes contarnos tus gustos, tus ideas y tus planes y nosotros nos encargamos de 
                            hacer tus deseos realidad. Podemos desde cambiar una de nuestras rutas hasta hacer una
                            de cero acomodándonos a tus necesidades y tus gustos. No te tienes que preocupar de nada, planeamos
                            desde la recogida al aeropuerto, transporte, acomodación, guias y actividades.</p>
                        <p class="contacta-nosotros"><a href="#cuatro"><strong>Contacta con nosotros</strong></a></p>
                    </div>
                </div>
              
            </div>
        </div>
        <div class="slide d-none d-lg-block" id="3">
            <div class="content content3">
                <div class="parallax">
                    <ul id="scene2">
                        <li class="layer-slide3 " data-depth="0.80">
                                <div class="hoja hoja1"></div>
                            </li>
                        <li class="layer-slide3" data-depth="0.50">
                            <div class="hoja hoja2"></div>
                        </li>
                        <li class="layer-slide3" data-depth="0.30">
                            <div class="hoja hoja3"></div>
                        </li>
                        <li class="layer-slide3" data-depth="0.15">
                            <div class="hoja hoja4"></div>
                        </li>
                        <li class="layer-slide3" data-depth="0.15">
                                <div class="hoja hoja5"></div>
                        </li>
                    </ul>
                </div> 
                <div class="row">
                    <div class="col-8 texto-slide3">
                        <p class="rutas-titulo">Rutas prediseñadas</p>
                        <div class="linea-index"></div>
                        <p>
                            Además de las rutas personalizadas puedes elegir entre más de 21 rutas predefinidas. <br>
                            En todo momento le acompañarán nuestros experimentados guías españoles, residentes en Escocia, 
                            conocedores de los bellos paisajes del país y con una auténtica pasión por la historia, 
                            conseguirán que su viaje por Escocia sea inolvidable. <br>
                        </p>
                        <div class="ver-rutas"><a href="#"><strong>Ver rutas</strong></a></div>
                    </div>
                    <div class="col-5 foto-slide3"></div>
                </div>
            </div>
        </div>
        <div class="slide" id="4">
            <div class="content content4" id="cuatro">
                <h2>Contacta con nosotros si tienes alguna duda, propuesta o simplemente saludar.</h2>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-10">
                        <div class="formulario">
                            <form id="contacto" action="<?php echo $root ?>templates/confirmacionenvio.php">
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="telephone">Teléfono</label>
                                    <input type="text" class="form-control" id="telephone">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <textarea class="form-control" id="textarea" rows="10" placeholder="Tu mensaje aquí:"></textarea>
                                <button class="enviar" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal">Enviar</button>
                    
                            </form>
                        </div>
                    </div>
                    <div class="col-2 aside d-none d-lg-block">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-square"></i>Facebook</a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i>Instagram</a></li>
                            <li><a href="#"><i class="fab fa-tripadvisor"></i>TripAdvisor</a></li>
                        </ul>
                        <div class="address">
                            <p><strong>Dirección:</strong></p>
                            <p>3b 15, London Road</p>
                            <p>EH7 5TT</p>
                            <p>Edimburgo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>




</body>   

</html>
