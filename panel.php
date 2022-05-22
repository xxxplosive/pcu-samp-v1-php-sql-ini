<?php
session_start();
require_once 'config.php';
if (!isset ($_SESSION['user_id'])){
    // Redirecciona a la página que deseas
}
?>

<script src="/cdn-cgi/apps/head/c9tEh4G7R9EE5BPPFVgc9tXx3Y4.js"></script><script>
  window.addEventListener("hashchange", function () {
      window.scrollTo(window.scrollX, window.scrollY - 100);
  });

      // Cuando el usuario se desplaza hacia abajo 20 px.
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
      } else {
        document.getElementById("myBtn").style.display = "none";
      }
    }

    function topFunction() {
      document.body.scrollTop = 0; // Safari
      document.documentElement.scrollTop = 0; // Chrome, firefox, etc.
    }
  </script>
<style>

        .row {
            margin-top: 10px;
            padding: 0 10px;
        }


        .oaerror p {
            margin: 0;
        }

        .error-notice {
            margin: 5px 5px; /* Making sure to keep some distance from all side */
        }

        .oaerror {
            width: 100%; /* Configure it fit in your design  */
            margin: 0 auto; /* Centering Stuff */
            background-color: #FFFFFF; /* Default background */
            padding: 20px;
            border: 1px solid #eee;
            border-left-width: 5px;
            border-radius: 3px;
            margin: 0 auto;
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
        }

        .oaerror h5{
            font-size: 14px;
            font-weight: bold;
        }

        .danger hr {
            background: #d9534f;
        }

        .danger {
            border-left-color: #d9534f; /* Left side border color */
        }


        .warning hr {
            background:#f0ad4e;
        }
        .warning {
            border-left-color: #f0ad4e;
        }

        .info hr{
            background: #5bc0de;
        }
        .info {
            border-left-color: #5bc0de;
        }

        .success hr{
            background: #2b542c;
        }
        .success {
            border-left-color: #2b542c;
        }

		.agustinprs hr{
            background: #FF9900;
        }
        .agustinprs {
            border-left-color: #FF9900;
        }

        .sort hr{
            background: #000000;
        }
        .sort {
            border-left-color: #000000;
        }

        .gult hr{
            background: #FFD700;
        }
        .gult {
            border-left-color: #FFD700;
        }

        .lightgreen hr{
            background: #ADFF2F;
        }
        .lightgreen {
            border-left-color: #ADFF2F;
        }

        .brown hr{
            background: #8B4513;
        }
        .brown {
            border-left-color: #8B4513;
        }

        .pink hr{
            background: #FF66FF;
        }
        .pink {
            border-left-color: #FF66FF;
        }

        .orange hr{
            background: #c97a57;
        }
        .orange {
            border-left-color: #c97a57;
        }

        .grey hr{
            background: #737373;
        }
        .grey {
            border-left-color: #737373;
        }

        .greenb hr{
            background: #00a3aa;
        }

        .greenb {
            border-left-color: #00a3aa;
        }

    .topbox{
          padding: 15px;
          padding-bottom: 15px;
          background-color: #2C2F33;
          border-radius: 10px;
        }
    .topboxagustinprs{
              margin: 4px;
              padding: 4px;
              background-color: orange;
              border-radius: 10px;
              width: 15%;
              display: inline;
              padding-bottom: -10px;
            }
    .topboxdanger{
              margin: 4px;
              padding: 4px;
              background-color: #d9534f;
              border-radius: 10px;
              width: 15%;
              display: inline;
              padding-bottom: -10px;
                }
    .topboxinfo{
              margin: 4px;
              padding: 4px;
              background-color: #5bc0de;
              border-radius: 10px;
              width: 15%;
              display: inline;
              padding-bottom: -10px;
        }
  .topboxwarning{
              margin: 4px;
              padding: 4px;
              background-color: #f0ad4e;
              border-radius: 10px;
              width: 15%;
              display: inline;
              padding-bottom: -10px;
        }
  .topboxsuccess{
              margin: 4px;
              padding: 4px;
              background-color: #2b542c;
              border-radius: 10px;
              width: 15%;
              display: inline;
              padding-bottom: -10px;
        }
  .topboxsort{
              margin: 4px;
              padding: 4px;
              background-color: #000;
              border-radius: 10px;
              width: 15%;
              display: inline;
              padding-bottom: -10px;
        }
  .topboxgult{
              margin: 4px;
              padding: 4px;
              background-color: #FFD700;
              border-radius: 10px;
              width: 15%;
              display: inline;
              padding-bottom: -10px;
        }
  .topboxlightgreen{
              margin: 4px;
              padding: 4px;
              background-color: #ADFF2F;
              border-radius: 10px;
              width: 15%;
              display: inline;
              padding-bottom: -10px;
        }
  .topboxbrown{
              margin: 4px;
              padding: 4px;
              background-color: #8B4513;
              border-radius: 10px;
              width: 15%;
              display: inline;
              padding-bottom: -10px;
        }
  .topboxpink{
              margin: 4px;
              padding: 4px;
              background-color: #FF66FF;
              border-radius: 10px;
              width: 15%;
              display: inline;
              padding-bottom: -10px;
        }
  .topboxorange{
              margin: 4px;
              padding: 4px;
              background-color: #c97a57;
              border-radius: 10px;
              width: 15%;
              display: inline;
              padding-bottom: -10px;
        }
  .topboxgrey{
              margin: 4px;
              padding: 4px;
              background-color: #737373;
              border-radius: 10px;
              width: 15%;
              display: inline;
              padding-bottom: -10px;
        }
  .topboxgreenb{
              margin: 4px;
              padding: 4px;
              background-color: #00a3aa;
              border-radius: 10px;
              width: 15%;
              display: inline;
              padding-bottom: -10px;
        }

    .topbox p{
      padding-top: 10px;
      text-transform: uppercase;
      font-weight: bold;
    }
    .topbox a:link, .topbox a:visited, .topbox a:hover, .topbox a:active{
      font-size: 13px;
      font-family: "Segoe UI";
      color: white !important;
      text-transform: uppercase;
      text-decoration: none;
      font-weight: bold;
    }

      #myBtn {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 20px; /* Place the button at the bottom of the page */
    right: 30px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    background-color: #2C2F33; /* Set a background color */
    color: white; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hover */
    padding: 15px; /* Some padding */
    border-radius: 10px; /* Rounded corners */
    font-size: 15px; /* Increase font size */
    text-transform: uppercase;
    font-weight: bold;
    font-family: 'Segoe UI';
  }

  #myBtn:hover {
    background-color: #555; /* Add a dark-grey background on hover */
  }

    </style>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es-ES">

<!--[REQUIERE EL IDIOMA EN ENGLISH]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- INICIO
   ================================================== -->
    <meta charset="utf-8">
	<title>ADMIN | US:RP.ES</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="robots" content="noindex,nofollow" />
	<meta name="description" content="">
	<meta name="author" content="">

 <!-- SISTEMA NAVEGADOR MOVIL
================================================== -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
   ================================================== -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="wXynlILkf54IMGBJKEatn77WfthBJTVpO92zrKCS">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">
   <link rel="stylesheet" href="css/estilo.css">         
  

<!-- script
   ================================================== -->
<script src="js/modernizr.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119390166-1"></script>
<script>
  	window.dataLayer = window.dataLayer || [];
  	function gtag(){dataLayer.push(arguments);}
  	gtag('js', new Date());
  	gtag('config', 'UA-119390166-1');
  	</script>
</head>
<body id="top">

        <!-- header 
       ================================================== -->
       <header>
    
           <div class="row">
    
               <div class="logo">
              <img src="images/logo.png"  width="150" height="30"></a>
              </div>
    
               <nav id="main-nav-wrap">
                    <ul class="main-navigation">     
					<li class="current"><a class="smoothscroll"  href="#" title="">BD: REGISTROS</a></li>
                    <li class="highlight with-sep"><a href="index.php" title="">INICIO</a></li>
                    <li class="highlight with-sep"><a href="login.php" title="">SALIR</a></li>
                    <li class="highlight with-sep"><a href="https://www.foro-unitedstatesroleplay.es" title="">FORO</a></li>
            
                    
                    </ul>
                </nav>
    
                <a class="menu-toggle" href="#"><span>Menu</span></a>
               
           </div>   	
            <!-- PARTE BAJA -->
       </header>
  
           <!-- Para versión móvil y navegadores
           ========================================================= -->
    
          <div id="video-popup" class="popup-modal mfp-hide">
    
               <div class="fluid-video-wrapper">
                <iframe src="#" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
             </div>		     
    
             <a class="close-popup">Cerrar</a>         
    
           </div>  	 	
    
       </section> 

       <section class="section another-section" id=bdstaff style=text-align:left>
        <div class=container>
        <div class="row relative">
        <div class=col-md-6>
        <h1>Staff US:RP | Base de datos general</h1>
        <p><h3>Se encuentra visualizando: <a href="#" class="btn btn-sm btn-info">VER REGISTROS</a></h3>
        <p>
                            <img src="images/icons2/icons8-info-64.png" width="13" height="13" /> Tendrás varias opciones de consulta de datos administrativas.
                            </p>
                            <p>
                                <img src="images/icons2/icons8-error-64.png" width="13" height="13" /> El uso de la información que exponemos es confidencial.
                            </p>
        <p>
        <p><img src="images/icons2/icons8-info-popup-48.png"  width="13" height="13"> Accede sobre un registro para poder visualizar.
        <p><a href="tbaneados.php" class="btn btn-primary btn-success">VER BANEADOS</a>
        <a href="tbloquearIP.php" class="btn btn-primary btn-success">VER BLOQUEAR IP</a>
        <a href="tcheats.php" class="btn btn-primary btn-success">VER LOG CHEATS</a>
        <a href="traspasos-transferencias.php" class="btn btn-primary btn-success">VER LOGS TRASPASOS BANCO</a>
        <a href="traspasos-banco.php" class="btn btn-primary btn-success">VER LOGS DEPOSITOS BANCO</a>
        <a href="traspasos-retiradas.php" class="btn btn-primary btn-success">VER LOGS RETIRADAS BANCO</a>
        <a href="traspasos-dinero.php" class="btn btn-primary btn-success">VER LOGS DINERO ENTRE CUENTAS</a>

        <p><a href="tcederarmas.php" class="btn btn-primary btn-danger">VER CEDER ARMAS</a>
        <a href="tpuntosderol.php" class="btn btn-primary btn-danger">VER DAR PUNTOS DE ROL</a>
        <a href="tlogcasas.php" class="btn btn-primary btn-danger">VER LOGS CASAS</a>
        <a href="tlognegocios.php" class="btn btn-primary btn-danger">VER LOGS NEGOCIOS</a>
        <a href="tlogmaleteros.php" class="btn btn-primary btn-danger">VER LOGS MALETEROS</a>

        <p><a href="jugadores.php" class="btn btn-lg btn-warning">VER JUGADORES</a> 
        <a href="casas.php" class="btn btn-lg btn-warning">VER CASAS</a> 
        <a href="negocios.php" class="btn btn-lg btn-warning">VER NEGOCIOS</a> 
        <a href="garages.php" class="btn btn-lg btn-warning">VER GARAGES</a>
        <a href="empresas.php" class="btn btn-lg btn-warning">VER EMPRESAS</a>
        <a href="vehiculos.php" class="btn btn-lg btn-warning">VER VEHICULOS</a>
        <a href="registros.php" class="btn btn-lg btn-warning">VER REGISTROS (LOGS)</a>      
        </ol>
        </div>
        </div>
        </div>
        </section>
    
    

</div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/app.js"></script>
<script src="js/lwd.js"></script>
<script>
    $(document).on('click', '.panel-heading span.clickable', function(e){
        var $this = $(this);
        if(!$this.hasClass('panel-collapsed')) {
            $this.parents('.panel').find('.panel-body').slideUp();
            $this.addClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
        } else {
            $this.parents('.panel').find('.panel-body').slideDown();
            $this.removeClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
        }
    })


    $("#success-alert").fadeTo(4000, 1000).slideUp(1000, function(){
        $("#success-alert").slideUp(1000);
    });
</script>


 
 
</body>
</body>
</html>

</div>
</div>             
                    
</li>

</ul> 

</div>         

</div> 

</section>


<div class="footer-bottom">

    <div class="row">

    <div class="col-twelve">
      <div class="">
         <p>© Copyright United States Roleplay España, comunidad propietaria de FoCo Gaming RPG Spanish 2022. Nuestros servicios no se encuentran afiliados a Two Takers Inc ni Rockstar Games.</p>


               <hr><!--Botones final-->
               
            <br />
         <br />
        <h5> Programado y diseñado con  <img src="images/icons/cmblockamor.png"   width="13" height="13">
                                                    <h4> by CMBlock.</h4>
                                                    <img src="images/logo.png"   width="80" height="40">
         <br />
         
         <a href="certificadosweb.html" class="btn btn-primary btn-warning">CERTIFICADOS</a>
               <a href="politica.html" class="btn btn-primary btn-warning">POLITICA</a>
        </div>

       </div>

    </div> <!-- /footer -->

</div>

</footer>

<div id="preloader">
<div id="loader"></div>
</div>
<audio src="link.mp3" autoplay="true" loop="true"></audio>
<!-- Java Script
================================================== -->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

</body>
