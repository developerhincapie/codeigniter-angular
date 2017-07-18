<!DOCTYPE doctype html>
<html lang="en">
<head>
     <meta charset="utf-8" />
     <meta content="Responsive Bootstrap Landing Page Template" name="description" />
     <meta content="Bootstrap, Landing page, Template, Registration, Landing" name="keywords" />
     <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport" />
     <meta content="Grayrids" name="author" />
     <title>
          Registrar Barberia
     </title>
     <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css" rel="stylesheet"> -->
      <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet"/>
      <!-- Font Awesome CSS -->
      <link href="<?php echo base_url('assets/fonts/font-awesome.min.css'); ?>" media="screen" rel="stylesheet" type="text/css"/>
      <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
      <link href="<?php echo base_url('assets/css/material.min.css'); ?>" rel="stylesheet"/>
      <link href="<?php echo base_url('assets/css/ripples.min.css'); ?>" rel="stylesheet"/>
      <link href="<?php echo base_url('assets/css/main.css'); ?>" rel="stylesheet"/>
      <link href="<?php echo base_url('assets/css/responsive.css'); ?>" rel="stylesheet"/>
      <link href="<?php echo base_url('assets/css/animate.min.css'); ?>" rel="stylesheet"/>
      <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet"/>
      <script> var URL="<?=base_url()?>" </script>
   
</html>
<body>
  <div class ="navbar navbar-invers menu-wrap navega">
      <div class="navbar-header text-center">
      </div>
      <img alt=""  src="<?php echo base_url('assets/img/Logo-03.png'); ?>" style="height:50px; display:block; margin: 0 auto;"/>

      <ul class="nav navbar-nav main-navigation">
         <li class="active"> <a href="#home">Inicio</a> </li>

         <li> <a href="#features">Features </a> </li>

         <li> <a href="#why">Acerca de Nosotros </a> </li>

         <li> <a href="#inpulsa">Inpulsa tu negocio</a> </li>

         <li> <a href="#testimonial">Testimonial </a> </li>

         <li> <a href="#counter">CONTÁCTANOS </a> </li>
    </ul>

    <button class="close-button" id="close-button">
         Close Menu
    </button>

  </div>
    <div class="content-wrap">
          <header class="hero-area" id="home">
               <div class="container">
                    <div class="col-md-12">
                         <div class="navbar navbar-inverse sticky-navigation navbar-fixed-top" data-offset-top="200" data-spy="affix" role="navigation">
                              <div class="container">
                                   <div class="navbar-header">
                                        <a class="logo-left " href="index.html">

                                             Barber's Cloud
                                        </a>
                                   </div>
                                   <div class="navbar-right">
                                        <button class="menu-icon" id="open-button">
                                             <i class="mdi-navigation-menu">
                                             </i>
                                        </button>
                                   </div>
                              </div>
                         </div>
                    </div>

                   <!-- <div class="img-logo">
                         <img alt="" class="logo" src="../img/Logo-03.png">
                         </img>
                    </div>
                    <div class="contents text-right" style="padding-bottom: 100px;">
                         <h1 class="wow fadeInRight " data-wow-delay="300ms" data-wow-duration="1000ms">
                              UNA APP PARA RENOVARTE
                         </h1>
                         <p class="wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1000ms">
                              Donde podrás agendar tu cita y escoger tu barbero en la barbería mas cercana.
                         </p>
                         <a class="btn btn-lg btn-primary wow fadeInUp" target="_blank" href="https://docs.google.com/forms/d/1CarkSt2lJyNZsAs-qFerf0pus5VVuT_TnNUm02akIQA" data-wow-delay="400ms" data-wow-duration="1000ms">
                              Llena la Encuesta!
                         </a>
                         <a class="btn btn-lg btn-border wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms" href="login.php">
                              Iniciar Sesión
                         </a>
                    </div>-->
               </div>
          </header>
          </div>
  <section class="section" id="counter">
     <div class="container">
          <div class="row">
               <div class="section-header">
                    <h1 class="section-title wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1000ms">
                         ¿Eres una barberia, peluqueria o spa?
                    </h1>
                    <h2 class="section-subtitle wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1000ms">
                         ¡Llegaste al lugar indicado!
                    </h2>
                    <p>
                         Haz parte de la comunidad que esta revolucionando el mundo de las barberías y spas
                                  y accede a estos grandes beneficios:
                    </p>
               </div>
               <div class="row">
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                         <div class="features-content">
                              <div class="icon hi-icon-effect-3b">
                                   <i class="mdi-action-grade">
                                        <!--   mdi-action-settings -->
                                   </i>
                              </div>
                              <h3>
                                   Mas Clientes
                              </h3>
                              <p>
                                   Podrás llegar a mas personas.
                                   <!--  PODRÁS LLEGAR A MÁS PERSONAS -->
                              </p>
                         </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
                         <div class="features-content">
                              <div class="icon">
                                   <i class="mdi-action-lock-outline">
                                   </i>
                              </div>
                              <h3>
                                   Seguridad
                              </h3>
                              <p>
                                   Tener una base de datos segura evitando que se pierda la información.
                              </p>
                         </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1000ms">
                         <div class="features-content">
                              <div class="icon">
                                   <i class="mdi-file-cloud-queue">
                                   </i>
                              </div>
                              <h3>
                                   Cloud
                              </h3>
                              <p>
                                   Tener una base de datos en la nube de sus clientes.
                              </p>
                         </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1000ms" data-wow-duration="1000ms">
                         <div class="features-content">
                              <div class="icon">
                                   <i class="mdi-social-person-outline">
                                   </i>
                              </div>
                              <h3>
                                   Estadisticas
                              </h3>
                              <p>
                                   Mirar en tiempo real un balance de sus ventas.
                              </p>
                         </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1200ms" data-wow-duration="1000ms">
                         <div class="features-content">
                              <div class="icon">
                                   <i class="mdi-content-flag">
                                   </i>
                              </div>
                              <h3>
                                   Clientes informados
                              </h3>
                              <p>
                                   Tener a tus clientes informado de todas las promociones.
                              </p>
                         </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1400ms" data-wow-duration="1000ms">
                         <div class="features-content">
                              <div class="icon">
                                   <i class="mdi-content-flag">
                                   </i>
                              </div>
                              <h3>
                                    Publicidad
                              </h3>
                              <p>
                                   Publicidad para hacer crecer sus ventas y ganar mas clientes.
                              </p>
                         </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1600ms" data-wow-duration="1000ms">
                         <div class="features-content">
                              <div class="icon">
                                   <i class="mdi-communication-messenger">
                                   </i>
                              </div>
                              <h3>
                                   Soporte
                              </h3>
                              <p>
                                  Soporte para cualquier problema que se le presente con barber's cloud.
                              </p>
                         </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1800ms" data-wow-duration="1000ms">
                         <div class="features-content">
                              <div class="icon">
                                   <i class="mdi-action-settings-power">
                                   </i>
                              </div>
                              <h3>
                                   Tiempo Real
                              </h3>
                              <p>
                                  Toda tu informacion y todos tus clientes en una misma plataforma.</p>
                         </div>
                    </div>
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                    <div class="counter-item">
                         <div class="icon">
                              <i class="mdi-action-face-unlock">
                              </i>
                         </div>
                         <h3 class="timer">
                              39000
                         </h3>
                         <hr>
                              <h5>
                                   Mas clientes
                              </h5>
                         </hr>
                    </div>
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1000ms">
                    <div class="counter-item">
                         <div class="icon">
                              <i class="mdi-action-lock-outline">
                              </i>
                         </div>
                         <h3 class="timer">
                              1046
                         </h3>
                         <hr>
                              <h5>
                                   Seguridad para sus clientes
                              </h5>
                         </hr>
                    </div>
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="700ms" data-wow-duration="1000ms">
                    <div class="counter-item">
                         <div class="icon">
                              <i class="mdi-action-grade">
                              </i>
                         </div>
                         <h3 class="timer">
                              6345
                         </h3>
                         <hr>
                              <h5>
                                   Servicio en la nube
                              </h5>
                         </hr>
                    </div>
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="900ms" data-wow-duration="1000ms">
                    <div class="counter-item">
                         <div class="icon">
                              <i class="mdi-action-trending-up">
                              </i>
                         </div>
                         <h3 class="timer">
                              18325
                         </h3>
                         <hr>
                              <h5>
                                   Estadisticas en Tiempo Real
                              </h5>
                         </hr>
                    </div>
               </div>
          </div>

     </div>

</section>


<section class="section" id="inpulsa">
     <div class="container">
          <div class="row">
               <div class="col-md-4 col-sm-4 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                    <img alt="" class="img-responsive" src="<?php echo base_url('assets/img/Logo-02.png'); ?>">
               </div>
               <div class="col-md-8 col-sm-8 wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1000ms">
                    <div class="feature-item">

                         <h1 class="title-small titulo">
                              <i class="fa fa-camera-retro"></i> Nueva Barberia | <?=$controller?>
                         </h1>

                         <form  role="form" action="<?=base_url($controller.'/guardar')?>" method="POST">
                              <div class="form-group">
                                <label for="txtNombre">Nombre Barberia</label>
                                <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre" >
                              </div>

                              <div class="form-group">
                                <label for="txtDireccion">Dirección Barberia</label>
                                <input type="text" class="form-control" onblur="geoFindMe()" name="txtDireccion" id="txtDireccion" placeholder="Dirección"  >
                              </div>

                              <div class="form-group">
                                <label for="txtTelefono">Telefono Barberia</label>
                                <input type="number" class="form-control" name="txtTelefono" id="txtTelefono" placeholder="Telefono"  >
                              </div>

                              <div class="form-group">
                                <label for="txtEmail">Email Barberia</label>
                                <input type="email" class="form-control" name="txtEmail"  id="txtEmail" placeholder="Email"   >
                              </div>
                              <div class="form-group">
                                <label for="txtPassword">Contraseña Barberia</label>
                                <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="Password"  >
                              </div>
                           
                              <div id="out"></div>
                               <div id="map"></div>
                             


                              <button type="submit" name="" id="" class="btn btn-danger">Registrar</button> 

                         </form>
                    </div>
               </div>
          </div>
     </div>
</section>

<section id="footer">
     <div class="container">
          <div class="container">
               <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                         <h3>
                              SÍGUENOS
                         </h3>
                          <a class="social" href="https://www.facebook.com/Barbers-Cloud-604176093120826/?fref=ts" target="_blank">
                              <i class="fa fa-facebook">
                              </i>
                         </a>
                         <a class="social" href="https://twitter.com/Barberscloud" target="_blank">
                              <i class="fa fa-twitter">
                              </i>
                         </a>
                           <a class="social" href="https://www.instagram.com/barberscloud/" target="_blank">
                              <i class="fa fa-instagram">
                              </i>
                         </a>
                    </div>
               </div>
          </div>
     </div>
     <!-- Go to Top Link -->
     <a class="btn btn-primary back-to-top btnfo" href="#home">
            <i class=" mdi-hardware-keyboard-arrow-up"></i>
        </a>
</section>
<section id="copyright">
     <div class="container">
          <div class="row">
               <div class="col-md-12">
                     <p class="copyright-text">
                         © Barber's Cloud 2016 - 2017 todos los derechos reservados.
                       <!--  <a href="">
                              KJY
                         </a>-->
                    </p>
               </div>
          </div>
     </div>
</section>


    <script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>">
    </script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>">
    </script>
    <script src="<?php echo base_url('assets/js/ripples.min.js'); ?>">
    </script>
    <script src="<?php echo base_url('assets/js/material.min.js'); ?>">
    </script>
    <script src="<?php echo base_url('assets/js/wow.js'); ?>">
    </script>
    <script src="<?php echo base_url('assets/js/jquery.mmenu.min.all.js'); ?>">
    </script>
    <script src="<?php echo base_url('assets/js/count-to.js'); ?>">
    </script>
    <script src="<?php echo base_url('assets/js/jquery.inview.min.js'); ?>">
    </script>
    <script src="<?php echo base_url('assets/js/classie.js'); ?>">
    </script>
    <script src="<?php echo base_url('assets/js/jquery.nav.js'); ?>">
    </script>
    <script src="<?php echo base_url('assets/js/smooth-on-scroll.js'); ?>">
    </script>
    <script src="<?php echo base_url('assets/js/smooth-scroll.js'); ?>">
    </script>
    <!-- <script src="<?php echo base_url('assets/js/main.js'); ?>">
    </script> -->
     <script src="<?php echo base_url('assets/js/'.$controller.'.js'); ?>">
    </script>


<!--           <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript">
          </script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js">
          </script> -->
<script>
     $(document).ready(function() {
            // This command is used to initialize some elements and make them work properly
            $.material.init();
        });
</script>


</body>
