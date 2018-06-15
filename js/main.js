


$(document).ready(function(){
   
	/////////////////////////////////RUTAS/////////////////////////////////////////////////

	//abre galería en la pagina de rutas
	$("#galeria").click(function(){

		$( "#fila-galeria" ).fadeIn('slow')
	});
	
	$("#cerrar").click(function(){

		$( "#fila-galeria" ).fadeOut( )
	});

	$(".burger").click(function(){

		$( ".rutas" ).toggle('slow')
	});


/********************************************* DATOS RUTAS***/

	var x = 1;
	var procesarResultado = function(respuesta)
		{
			var datos = JSON.parse(respuesta);
			$("#titulo").text(datos['rutas']["nombre"]);
			$("#descripcion").text(datos['rutas']["descripcion"]);
			$("#foto").attr('src', '../img/' + (datos['rutas']["foto"])); 
			$("#index").text('Ruta' + datos['rutas']["id"]);
			$("#precio").text(datos['rutas']["precio"] + '€');
			$("#fotogaleria1").attr('src', '../img/' + (datos['galerias']['foto1']));
			$("#fotogaleria2").attr('src', '../img/' + (datos['galerias']['foto2']));
			$("#fotogaleria3").attr('src', '../img/' + (datos['galerias']['foto3']));
			$("#fotogaleria4").attr('src', '../img/' + (datos['galerias']['foto4']));
			$("#fotogaleria5").attr('src', '../img/' + (datos['galerias']['foto5']));
			$("#fotogaleria6").attr('src', '../img/' + (datos['galerias']['foto6']));
			$("#enlace-carrito").attr('href', 'carrito.php?id=' + (datos['rutas']['id'])); 
		};
	$.ajax({
		  method: "POST",
		  url: "getdatosrutas.php",
		  data: { numeroid : x }
		}).done(procesarResultado);

	$("#arriba").click(function(){
    	x++;
	    $.ajax({
		  method: "POST",
		  url: "getdatosrutas.php",
		  data: { numeroid : x }
		}).done(procesarResultado)
  	});

  	$("#abajo").click(function(){
    	x--;
    	if(x == 0)x++ ;
	    $.ajax({
		  method: "POST",
		  url: "getdatosrutas.php",
		  data: { numeroid : x }
		}).done(procesarResultado)
 
	});

	/******************calculo precio final****************/

	$("#calculo").click(function (){
		var numeropersonas = ($("#numeropersonas").val());
		var preciopp = ($('#preciopp').html()); 
		var preciofinal =  (preciopp * numeropersonas);
		$("#preciofinal").append(numeropersonas + " " + "personas" + " " + "X" + " " +  preciopp + "€" + " " + "=" + " " + preciofinal + '€');
	});


  /***********************************carrito*******************************/


   
	  $("#datepicker").datepicker();
	  


	$("#compra").validate({
		rules :{
			nombre:{ minlength: 2, required:true}
		,	apellidos:{ minlength: 5, required:true}
		,	email:{ minlength: 5, required:true}
		,	remail: { minlength: 5, required:true} 
		,	telefono: { minlength: 9, required:false}
		,	datepicker: {required:true}
		,	numeropersonas : {required:true}
		,	observaciones : {required: false}

		},
		messages : {
			nombre:"Incluye un nombre, porfa"
		,	apellidos:"Incluye por lo menos un apellido, porfa"
		,	email:"Incluye un email, porfa"
		,	remail: "Confima tu email, porfa please" 
		,	datepicker:"Cuándo quieres ir?"
		,	numeropersonas : "Cuántos vais?"
		},
	});


	


});



	



