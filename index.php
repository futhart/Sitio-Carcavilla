<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agencia Carcavilla | La creatividad no muerde</title>
        <link rel="shortcut icon" href="favicon.ico">
        
	        
	        <!-- stylesheets -->
			<!-- <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'> -->
			<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
			<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
			<link rel="stylesheet" type="text/css" href="css/style.css" />
			<link rel="stylesheet" type="text/css" href="css/flexslider.css" />
			<link href="css/screen.css" media="screen, projection" rel="stylesheet" type="text/css">
			
	        <!-- javascript -->
	        <script type="text/javascript" src="js/jquery.min.js"></script> 
	        <script type="text/javascript" src="js/bootstrap.js"></script> 
	        <script type="text/javascript" src="js/modernizr-2.5.3.min.js"></script> 
	        
	        <!-- flexslider -->
			<script type="text/javascript" charset="utf-8">
			  $(window).load(function() {
			    $('.flexslider').flexslider({
			        animation: 'slide',
			       	keyboard: true,
			       	startAt: 0,
			       	slideshow: false,   
			       	multipleKeyboard: true, 
			    });
			  });
			</script>
	        <script type="text/javascript" src="js/jquery.flexslider.js"></script>
	        <!-- end flexslider -->
	        
	        <script src="js/jquery.smooth-scroll.js"></script>
	        <script src="js/jquery.ba-bbq.js"></script>
			  <script>
			  <!-- Mostrar carcavillanos Historia -->
			  function showHistory(){
			  	$('#h22').fadeIn();
			  	$('#h12').fadeOut();
			    
			  }
			  function showCarcavilla(){
			  	$('#h22').fadeOut();
			    $('#h12').fadeIn();
			  }
			  <!-- End Mostrar carcavillanos Historia -->

			  <!-- Smooth scroll -->
			    $(document).ready(function() {
			
			      $('a[href*="#"]').live('click', function() {
			        if ( this.hash ) {
			          $.bbq.pushState( '#/' + this.hash.slice(1) );
			          return false;
			        }
			      });

			
			      $(window).bind('hashchange', function(event) {
			        var tgt = location.hash.replace(/^#\/?/,'');
			        if ( document.getElementById(tgt) ) {
			          $.smoothScroll({scrollTarget: '#' + tgt});
			        }
			      });
			
			      $(window).trigger('hashchange');
			    });
			    <!-- End Smooth scroll -->
			  </script>

			  <!-- Sticky Menu -->
			  <script src="js/jquery.sticky.js"></script>
			  <script>
				  $(document).ready(function(){
				    $("#navbar").sticky({topSpacing:0});
				  });
			  </script>
			  <!-- End Sticky Menu -->
			  <!-- Google Maps -->
			  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
			  <script type="text/javascript" src="js/googlemaps.js"></script>
	          <script type="text/javascript" src="js/gmap3.min.js"></script> 
	          <!-- End Google Maps -->
			  <!--scrollspy-->
			  <script type="text/javascript">
				$('[data-spy="scroll"]').each(function () {
					var $spy = $(this).scrollspy('refresh')
				});
			  </script>
			  <!--Fin scrollspy-->
    </head>
    
<body data-spy="scroll" data-target="#nav">

<div class="container-fluid">	
	
<!-- SECCION INICIO -->
	<div class="section" id="inicio">
		<div id="logotipo"><img src="img/logo_carcavilla.png" alt="Carcavilla Boutique" /></div>
		<div id="texto-inicio"><h2>La Creatividad no muerde</h2></div>
		<div id="flecha-bajar"><a href="#que-hacemos"><img src="img/flecha_abajo.png"  width="30px" height="22px" alt="Comenzar" /></a></div>
	</div>
</div>

<!-- SECCION NAVBAR -->
<div id="navbar" class="hidden-phone">
	<div id="brand"><a href="#inicio"><img src="img/brand_carcavilla.jpg"  width="173px" height="32px" alt="" /></a></div>
	<ul id="nav">
		<li><a href="#inicio">Inicio</a></li>
		<li><a href="#que-hacemos">Qué Hacemos</a></li>
		<li><a href="#oficinas">Oficinas</a></li>
		<li><a href="#carcavillanos">Carcavillanos</a></li>
		<li><a href="#clientes">Clientes</a></li>
		<li><a href="#contacto">Contacto</a></li>
	</ul>
</div>

<div class="container-fluid">
<!-- SECCION QUE HACEMOS -->
	<div class="section" id="que-hacemos">
		<div class="row-fluid texto-queahacemos">
			<h2>No somos agencia, hacemos publicidad.</h2>
			<P>Revisa algunos de nuestros proyectos en distintas áreas.</P>
		</div>
		<div class="row-fluid" id="portfolio">
		<div class="ch-grid" id="projects">
	        <div class="ch-item ch-img-1">
	            <div class="ch-info">
	                <h3 class="menosespacio">Cine, Radio & TV</h3>
	                <p>Ideas y estrategias para películas.<a href="#cine">Ver Proyectos</a></p>
	            </div>
	        </div>
	
	        <div class="ch-item ch-img-2">
	            <div class="ch-info">
	                <h3>Editorial</h3>
	                <p>Diseño que habla por sí mismo.<a href="#editorial">Ver Proyectos</a></p>
	            </div>
	        </div>
	
	        <div class="ch-item ch-img-3">
	            <div class="ch-info">
	                <h3>Branding</h3>
	                <p>La estrategia para dar personalidad a tu marca.<a href="#branding">Ver Proyectos</a></p>
	            </div>
	        </div>
	    
	        <div class="ch-item ch-img-4">
	            <div class="ch-info">
	                <h3>Masivo</h3>
	                <p>Ideas que invaden todos los formatos.<a href="#masivo">Ver Proyectos</a></p>
	            </div>
	        </div>
	    
	    
	        <div class="ch-item ch-img-6">
	            <div class="ch-info">
	                 <h3 class="menosespacio">Mkt. Directo</h3>
	                <p>Grandes ideas en pequeños formatos.<a href="#mktdirecto">Ver Proyectos</a></p>
	            </div>
	        </div>
	    
	   </div>
		</div>
	</div>

<!-- SECCION OFICINAS -->
	<div class="section" id="oficinas">
		<div class="flex-container">
		  <div class="flexslider">
		    <ul class="slides">
		      <li><img src="img/slide1.jpg" /></li>
		      <li><img src="img/slide2.jpg" /></li>
		      <li><img src="img/slide3.jpg" /></li>
		      <li><img src="img/slide4.jpg" /></li>
		      <li><img src="img/slide5.jpg" /></li>
		      <li><img src="img/slide6.jpg" /></li>
		    </ul>
		  </div>
		</div>
	</div>

<!-- SECCION EQUIPO -->
	<div class="section" id="carcavillanos"> 
		<div class="botonescarcavillanos ">
		<a href="javascript::return false;" onclick="showHistory();"><img src="img/boton-historia.jpg"	alt="Historia" /></a>
		<a href="javascript::return false;" onclick="showCarcavilla();"><img src="img/boton-carcavillanos.jpg"	alt="carcavillanos" /></a>	
		</div>   
		<div id="h12">
			<ul class="ch-grid">
			    <li>
			        <div class="ch-item ch-img-1">
			            <div class="ch-info">
			                <h3>Angel Carcavilla</h3>
			                <p>Director General Creativo</p>
			            </div>
			        </div>
			    </li>
			    <li>
			        <div class="ch-item ch-img-2">
			            <div class="ch-info">
			                <h3>Nicolas Garay</h3>
			                <p>Director de cuenta</p>
			            </div>
			        </div>
			    </li>
			    
			    <li>
			        <div class="ch-item ch-img-3">
			            <div class="ch-info">
			                <h3>Mª José Cerda</h3>
			                <p>Director de cuenta</p>
			            </div>
			        </div>
			    </li>
			    <li>
			        <div class="ch-item ch-img-4">
			            <div class="ch-info">
			                <h3>Gabriel Barahona</h3>
			                <p>Ejecutivos de cuenta</p>
			            </div>
			        </div>
			    </li>
			    <li>
			        <div class="ch-item ch-img-5">
			            <div class="ch-info">
			                <h3>Gissel Gallo</h3>
			                <p>Ejecutivos de cuenta</p>
			            </div>
			        </div>
			    </li>
			    <li>
			        <div class="ch-item ch-img-3">
			            <div class="ch-info">
			                <h3>Cristobal Cabezas</h3>
			                <p>Director de arte</p
			            </div>
			        </div>
			    </li>
			    <li>
			        <div class="ch-item ch-img-2">
			            <div class="ch-info">
			                <h3>Nicolas Bastias</h3>
			                <p>Director de arte</p
			            </div>
			        </div>
			    </li>
			    <li>
			        <div class="ch-item ch-img-3">
			            <div class="ch-info">
			                <h3>Tamara León</h3>
			                <p>Redactor</p>
			            </div>
			        </div>
			    </li>
			    <li>
			        <div class="ch-item ch-img-4">
			            <div class="ch-info">
			                <h3>Matias Irarrazabal</h3>
			                <p>Redactor</p>
			            </div>
			        </div>
			    </li>
			    <li>
			        <div class="ch-item ch-img-5">
			            <div class="ch-info">
			                <h3>Daniela Gutiérrez</h3>
			                <p>Diseñadora gráfica</p>
			            </div>
			        </div>
			    </li>
		   </ul>
	   </div>
	   <div id="h22">
		<div class="texto-historia"><p>Carcavilla Boutique Creativa fue fundada  en 1996 por Marco Antonio Carcavilla ex director creativo de JW Thompson, Grey Chile/Madrid y Lowe Porta. La idea inicial era  romper  lo que hasta ese momento era el modelo tradicional  de las agencias de publicidad donde el gran negocio era hacer gastar al cliente en medios tradicionales, delegando cualquier forma de innovación a  un segundo plano. Boutique creativa Carcavilla  irrumpe en el mercado  entregando  un servicio con fuerte énfasis en la creatividad estratégica,   apostando por nuevos formatos y maneras de anunciar.</p>
		<p>El año 2006 se integra Angel Carcavilla, de formación periodista  con una amplia experiencia en la creación de guiones de series y en la  dirección de programas de televisión emblemáticos como Plan Z  y  Gato Por Liebre.</p>
		<p>La dupla creativa rápidamente comienza a meter ruido en el mercado, haciendo la publicidad de importantes medios de comunicación, de películas locales, campañas sociales, políticas y gubernamentales. El éxito también se ve reflejado en  los concursos de Publicidad, instalando a Boutique Creativa Carcavilla como una referencia entre sus pares.</p>
		 <p>El año 2010 Angel Carcavilla asume la Dirección General Creativa y continúa hasta la fecha fiel a la máxima que revela todo el poder y  espíritu de esta agencia ¨</p>
		 <h2>“La creatividad no muerde”</h2>
		</div>
		</div>
	</div>

<!-- SECCION CLIENTES -->
	<div class="section" id="clientes">
		<img src="img/logos-clientes.jpg"	alt="Nuestros Clientes" />
	</div>
	
<!-- SECCION CONTACTO -->
	<div class="section-footer" id="contacto">
		<div id="informacion">
			<h3>DIRECCIÓN</h3>
			Double Almeyda 1458, Ñuñoa, Santiago, Chile
			<h3>TELÉFONO</h3>
			+562 3431415
			<h3>EMAIL</h3>
			<a href="mailto:hola@carcavilla.cl">hola@carcavilla.cl</a>
		</div>
	    <div id="googleMap"></div>
	</div>
</div>

</div>
	<div class="footer">
		<div class="span4 footer-left"><img src="img/footer-carcavilla.png"	alt="Carcavilla Boutique" />© 2013 Carcavilla Boutique</div>
		<div class="span4 footer-center"><a href="#inicio"><img src="img/flecha_up.png"	alt="Subir" /></a></div>
		<div class="span4 footer-right"><a href="http://www.brium.cl"><img src="img/footer-brium.png"	alt="Brium | Branding Digital" /></a></div>
	</div>

<!-- Comienzo de Categorias -->
	<div id="portfolio-window" class="portfolio-window">
    <div id="portfolio-content" class="portfolio-content">
      <div id="portfolio-showcase" class="portfolio-showcase">
        <ul class="slides">
          <!-- Cine -->
          <?php include "proyectos/cine/cine.html"; ?>
          <!-- Editorial -->
          <?php include "proyectos/editorial/editorial.html"; ?>
          <!-- Branding -->
          <?php include "proyectos/branding/brand.html"; ?>
          <!-- Masivo -->
          <?php include "proyectos/masivo/masivo.html"; ?>
          <!-- Mkt Directo -->
          <?php include "proyectos/mktdirecto/mkt.html"; ?>
        </ul>
      </div>
    </div>
  </div>
	<script src="js/plugins.js"></script> 
	<script src="js/script.js"></script>
<!-- Fin Seccion Categorias -->
</body>
</html>
