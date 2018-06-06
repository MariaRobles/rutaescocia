$(document).ready(function(){

    ///////////////////ANIMACIONES//////////

    $(".content1").mouseenter(function(){
        $(".title").animate({'right': '0px'}, 300);
        $(".r").animate({'margin-left': '0px'}, 400);
        $(".u").animate({'margin-left': '0px'}, 600);
        $(".t").animate({'margin-left': '0px'}, 800);
        $(".a").animate({'margin-left': '0px'}, 1000);
        $(".e").animate({'margin-left': '0px'}, 1200);
        $(".s").animate({'margin-left': '0px'}, 1400);
        $(".c").animate({'margin-left': '0px'}, 1600);
        $(".o").animate({'margin-left': '0px'}, 1800);
        $(".c").animate({'margin-left': '0px'}, 2000);
        $(".i").animate({'margin-left': '0px'}, 2600);
        $(".a").animate({'margin-left': '0px'}, 2800);
    });

    $(".content2").mouseenter(
        function(){
        $(this).find(".contacta-nosotros").fadeIn(1500,'linear')
    });

    $(".content3").mouseenter(
        function(){
        $(this).find(".ver-rutas").fadeIn(1500,'linear')
    });

    ////////////////////////////////////////SCROLL HORIZONTAL///////////////////////////////////////
    
	function showSlide(n) {
        // n es la posición el slide
      
        // para que no haga un retriggering
        $body.unbind("mousewheel");
      
        // incrementa el numero de slide por n 
        currSlide = Math.min(Math.max(0, currSlide + n), $slide.length-1);
        
        var displacment = window.innerWidth*currSlide;
        $slides.css('transform', 'translateX(-' + displacment + 'px)');
        // set time out antes del bind para evitar retriggering
        setTimeout(bind, 100);
        
    }
  
    function bind() {
         $body.bind('mousewheel', mouseEvent);
      }
  
    function mouseEvent(e, delta) {
        //en scrool down muestra el siguiente slide sino el siguiente
        showSlide(delta >= 0 ? -1 : 1);
        e.preventDefault();
    }
    $(window).resize(function(){
      //dejame el último slide a la izquierda
      var displacment = window.innerWidth*currSlide;
      $slides.css('transform', 'translateX(-'+displacment+'px)');
    });
    
    // cache
    var $body = $('body');
    var currSlide = 0;
    var $slides = $('.slides');
    var $slide = $('.slide');
  

    //añadir evento al mousescroll
    $body.bind('mousewheel', mouseEvent);

 //////////////////MENU FIJO TOGGLE/////////

    $('.fijo').click(function(){
        $('.menu').toggle(200, 'linear')
    });

    $('.ver-rutas').click(function(){
            $('.menu').toggle(200, 'linear')
    });


  ////////////PARALLAX//////////
  
    var scene = document.getElementById('scene');
    var parallaxInstance = new Parallax(scene);

    var scene2 = document.getElementById('scene2');
    var parallaxInstance = new Parallax(scene2);




});