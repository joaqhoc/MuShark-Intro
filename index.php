<?php
require('web/config.php');
require('web/engine/core.php');
require('web/engine/global_config.php');
require('web/engine/custom_variables.php');
require('web/engine/global_cms.php');
require('web/engine/global_functions.php');
?>
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Mu Shark | Season 4</title>
	<meta name="description" content="Mu Online Season 4">
	<meta name="author" content="Soporte">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   	<link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">
   	<link rel="stylesheet" href="css/media-queries.css">    
	<link rel="stylesheet" href="css/style-neon.css">


   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/npm.js"></script>
	<script src="js/style-neon.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" >

</head>

<body>

	<div id="preloader">      
      <div id="status">
         <img src="images/preloader.gif" height="64" width="64" alt="">
      </div>
   </div>

   <!-- Intro Section
   ================================================== -->
   <section id="intro">

   	<header class="row">	 

			<div id="logo" >
				<a href="#" >                
              </a>					
			</div>

		   <nav id="nav-wrap">

		      <a class="menu-btn" href="#nav-wrap" title="Mostrar Menu">Mostrar Menu</a>
			   <a class="menu-btn" href="#" title="Esconder Menu">Esconder Menu</a>

		      <ul id="nav" class="nav">
		         <li class="current"><a class="smoothscroll" href="#home">Inicio</a></li>
                 <li class="current"><a class="smoothscroll" href="http://muexpertus.muservidor.com/web/index.php?page_id=descarga">Descargar</a></li>
                 <li class="current"><a class="smoothscroll" href="#home">Grupo Facebook</a></li>
		      </ul> <!-- end #nav -->

		   </nav> <!-- end #nav-wrap --> 	        

   	</header> <!-- Header End -->   	

   	<div  id="main" class="row">

	   	<div class="twelve columns">
	   			
	   		<h1>Mu Shark | <font color="red">S</font>eason 4</h1>

	   		<p>Sean bienvenidos a nuestro servidor Fast!
                <br>
                Administradores:
                <br>
                [<a href="#">KANON</a> | <a href="#">Soporte</a>]<br></p>

	   		<h5>Información del Servidor</h5>
            Experiencia: x9999<br>
            Drop: %80<br>
            CastleSiege: 17/09/2016<br>
            				

	         <div id="mc_embed_signup">
			<div id="fb-root"></div>
<?PHP
if (eregi("web/status/servidor.php", $_SERVER['SCRIPT_NAME'])) { die ("Access Denied"); }
require 'web/engine/global_config.php';

$onlineoffline = "127.0.0.1";
if ($check=@fsockopen($onlineoffline,55919,$ERROR_NO,$ERROR_STR,(float)0.5)) 
   { 
   fclose($check); 
   echo '<font size=3 color=#c9c9c9>Castle Siege:</font> <img src="images/on.png" alt="Online">'; 
   }
else 
   { 
   echo '<font size=3 color=#c9c9c9>Castle Siege:</font> <img src="images/off.png" alt="Offline">'; 
   } 
?>
<br>
<?PHP
$onlineoffline2 = "127.0.0.1";
if ($check=@fsockopen($onlineoffline,55901,$ERROR_NO,$ERROR_STR,(float)0.5)) 
   { 
   fclose($check); 
   echo '<font size=3 color=#c9c9c9>Server:</font> <img src="images/on.png" alt="Online">'; 
   }
else 
   { 
   echo '<font size=3 color=#c9c9c9>Server:</font> <img src="images/off.png" alt="Offline">'; 
   } 
?>
            </div>

	         <ul class="social">
			<a href="web/index.php">Entrar al Servidor!</a></p><br>


            </ul>

         </div> 

      </div> <!-- main end -->    	

   </section> <!-- end intro section -->

   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">            

            <ul class="copyright">
               <li>&copy; Copyright 2016 Soporte</li>
               <li>Design by <a title="SkarY" href="https://www.facebook.com/joaquincentu">Soporte</a></li>          
            </ul>

         </div>          

      </div>

      <div id="go-top"><a class="smoothscroll" title="Ir Arriba" href="#intro"><i class="icon-up-open"></i></a></div>

   </footer> <!-- Footer End-->   

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/waypoints.js"></script>
   <script src="js/jquery.countdown.js"></script>
   <script src="js/jquery.placeholder.js"></script>
   <script src="js/backstretch.js"></script>  
   <script src="js/init.js"></script>

</body>

</html>