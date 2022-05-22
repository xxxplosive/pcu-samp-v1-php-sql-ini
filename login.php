<?php

include('config.php');
session_start();

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $connection->prepare("SELECT * FROM users WHERE USERNAME=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        echo '<p class="error">Usuario o contraseña no válidos.</p>';
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user_id'] = $result['password'];
            echo '<p class="success">Has ingresado correctamente.</p>';
            header("HTTP/1.1 302 Moved Temporarily"); 
            header("Location: index.php"); 
        } else {
            echo '<p class="error">Usuario o contraseña no válidos.</p>';
        }
    }
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es-ES">

<!--[REQUIERE EL IDIOMA EN ENGLISH]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- INICIO
   ================================================== -->
    <meta charset="utf-8">
	<title>Panel Usuario | GS:RP.ES</title>
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
              <img src="images/logo.png"  width="270" height="60"></a>
              </div>
    
               <nav id="main-nav-wrap">
                    <ul class="main-navigation">     

                    <li class="highlight with-sep"><a href="https://gs-rp.es/" title="Salir del Panel">SALIR</a></li>
                    <li class="highlight with-sep"><a href="https://discord.gg/pKGyD7vbnz" title="Acceder al Discord">DISCORD</a></li>
                                        <li class="highlight with-sep"><a href="/normativas.html" title="Ver Normas">NORMAS</a></li>
                                        <li class="highlight with-sep"><a href="https://gs-rp.es/foro" title="Ir foro SA:MP">FORO (SA:MP)</a></li>
                                        <li class="highlight with-sep"><a href="https://gs-rp.es/fiveforo" title="Ir foro GTA V">FORO (GTA V)</a></li>
                                        <li class="highlight with-sep"><a href="https://gs-rp.es/plataformas.html" title="Ver Infraestructura">PLATAFORMAS</a></li>
                                        <li class="highlight with-sep"><a href="https://gs-rp.es/paquetespremium.html" title="Acceder a la tienda">TIENDA</a></li>
                    
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
       
       <!--Inicio del Login -->

   <section class="section another-section" id=loginpanel style=text-align:left>
      <div class=container>
      <div class="row relative">
      <div class=phones>
      <img alt="accesoserver" src=images/png.png class="fadeInUp wow img-responsive right-mob-front" data-wow-delay=0s data-wow-duration=1s data-wow-offset=50>
      </div>
      <div class=col-md-6>
      <h4>Panel de Control Servidor San Andreas Multiplayer de Gangsters Roleplay
      </h4>
      <p class=space40>
      <ol class=special type=1>

      <img src="images/icons2/icons8-administrator-male-16.png"  width="14" height="14"> Accede con tu cuenta al Panel de Control.


<div id="Contenedor">
                  
                                    <div class="ContentForm">
                                        <form action="" method="post" name="FormEntrar">
                                            <div class="input-group input-group-lg">
                                        <p><img src="images/icons8/icons8-administrator-male-16.png"  width="13" height="13">Usuario:
                                        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
                                    </div>
                                    <div class="form-element">
                                        <p><img src="images/icons8/icons8-password-48.png"  width="13" height="13">Contraseña:
                                        <input type="password" name="password" required />
                                            </div>
                                            <br />
                                            <input type="submit" name="login" value="Conectarse" a href="index.php" class="btn btn-sm btn-info"></a>
                                            <input type="submit" name="login" value="Registrarse" a href="#" class="btn btn-sm btn-warning"></a>

                                        </form>
                                    </div>
                                </div>
                                </form>

      </ol>
      </div>
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



   <!--final pag gsrp-->
   <footer class="footer">
      <div class="container bottom_border">
      <div class="row">
      <div class=" col-sm-4 col-md col-sm-4  col-12 col">
      <!--copy1  + navega-->
      <p class="mb10">Gangsters - Juego de Rol, comunidad propietaria de FoCo Gaming RPG | ESPAÑA 2022.</p>
      <p class="mb10">Nuestros servicios no se encuentran afiliados a Two Takers Inc, Rockstar Games o Grand Theft Auto.</p>
      
      
      </div>
      </div>
      </div>
      
      
      <div class="container">
      <ul class="foote_bottom_ul_amrc">
      <li><a href="/foro">Foro (SA:MP)</a></li>
      <li><a href="/fiveforo">Foro (GTA V)</a></li>
      <li><a href="/normativas.html">Normas</a></li>
      <li><a href="/plataformas.html">Plataformas</a></li>
      <li><a href="/certificadosweb.html">Certificados</a></li>
      <li><a href="/politica.html">Politica</a></li>
      <li><a href="/paquetespremium.html">Tienda</a></li>
      </ul>
      <!--copy2 general + rrss-->
      <p class="text-center">Copyright @2022 Gangsters - Juego de Rol | Programado y diseñado con  <img src="images/icons/cmblockamor.png"   width="13" height="13"> <a href="#">By Courier</a></p>
   
      
      <ul class="social_footer_ul">
      <li><a href="errorpage.html"><img src="images/icons2/icons8-youtube-48.png" alt="YouTube" style="width:42px;height:42px;"></a></li>
      <li><a href="https://discord.gg/pKGyD7vbnz"><img src="images/icons2/icons8-discord-64.png" alt="Discord" style="width:42px;height:42px;"></a></li>
   
      </ul>
      <img src="images/site_logo.png"   width="360" height="80"></li>
      <!--final de footer y carga de imagen-->
      </div>
   
      <div id="preloader">
         <div id="loader"></div>
     </div>
     <!-- Java Script -->
     <script src="js/jquery-1.11.3.min.js"></script>
     <script src="js/jquery-migrate-1.2.1.min.js"></script>
     <script src="js/plugins.js"></script>
     <script src="js/main.js"></script>
   
   
   </body>
   
   
   </footer>
   
    


</footer>



