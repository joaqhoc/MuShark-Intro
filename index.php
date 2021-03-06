﻿<?php
include ('configuracion.php');
?>
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Meta datos
   ================================================== -->
   <meta charset="utf-8">
	<title><?php echo "$Titulo"; ?></title>
	<meta name="description" content="Mu Online Season 4">
	<meta name="author" content="Soporte">

   <!-- Meta datos Movil
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
	<link rel="shortcut icon" href="images/favicon.ico" >

</head>

<body>

	<div id="preloader">      
      <div id="status">
         <img src="images/preloader.gif" height="64" width="64" alt="">
      </div>
   </div>

   <!-- Seccion Intro
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
                 <li class="current"><a class="smoothscroll" href="#">Descargar</a></li>
                 <li class="current"><a class="smoothscroll" href="<?php echo "$UrlGrupoServer"; ?>">Grupo Facebook</a></li>
		      </ul> <!-- end #nav -->

		   </nav> <!-- end #nav-wrap --> 	        

   	</header> <!-- Final Cabecera -->   	

   	<div  id="main" class="row">

	   	<div class="twelve columns">
	   			
	   		<h1><?php echo "$NombreServer"; ?> | <?php echo "$ServerVer"; ?></h1>

	   		<p><?php echo "$AnuncioServer"; ?>
                <br>
                Administradores:
                <br>
                [<a href="#"><?php echo "$AdminServer1"; ?></a> | <a href="#"><?php echo "$AdminServer2"; ?></a>]<br></p>

	   		<h5>Información del Servidor</h5>
            Experiencia: <?php echo "$ServerExp"; ?><br>
            Drop: <?php echo "$ServerDrop"; ?><br>
            Level Reset: <?php echo "$ResetLvlServer"; ?><br>
            Bug Bless: <?php echo "$BugBlessServer"; ?><br>
            Max Stats: <?php echo "$ServerMaxStat"; ?><br>
	    <br>
            				

	         <div id="mc_embed_signup">
			<div id="fb-root"></div>
<?PHP

if ($check=@fsockopen($IPSERVER,$PORTSERVER,$ERROR_NO,$ERROR_STR,(float)0.5)) 
   { 
   fclose($check); 
   echo '<font size=3 color=#c9c9c9>GameServer:</font> <img src="images/on.png" alt="Online">'; 
   }
else 
   { 
   echo '<font size=3 color=#c9c9c9>GameServer:</font> <img src="images/off.png" alt="Offline">'; 
   } 
?>
<br>
<?PHP
if ($check=@fsockopen($IPCSERVER,$PORTCSERVER,$ERROR_NO,$ERROR_STR,(float)0.5)) 
   { 
   fclose($check); 
   echo '<font size=3 color=#c9c9c9>GameServer CS:</font> <img src="images/on.png" alt="Online">'; 
   }
else 
   { 
   echo '<font size=3 color=#c9c9c9>GameServer CS:</font> <img src="images/off.png" alt="Offline">'; 
   } 
?>
            </div>
<br />
	         <ul class="social">
			<a href="web/index.php"><img src="images/entrar.png" alt="Online"></img></a></p><br>


            </ul>

         </div> 

      </div> <!-- Fin Menu -->    	

   </section> <!-- Fin sección Intro -->

   <!-- Pie de pagina
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">            

            <ul class="copyright">
               <li><?php echo "$CopyRight"; ?></li>
               <li>Design by <a title="SkarY" href="https://www.facebook.com/joaquincentu">Soporte</a></li>          
            </ul>

         </div>          

      </div>

      <div id="go-top"><a class="smoothscroll" title="Ir Arriba" href="#intro"><i class="icon-up-open"></i></a></div>

   </footer> <!-- Fin Pie de pagina-->   

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