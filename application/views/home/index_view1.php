<!DOCTYPE doctype html>
<html lang="en">
<head>
     <meta charset="utf-8" />
     <meta content="Responsive Bootstrap Landing Page Template" name="description" />
     <meta content="Bootstrap, Landing page, Template, Registration, Landing" name="keywords" />
     <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport" />
     <meta content="Grayrids" name="author" />
     <title>Barber's Cloud</title>
     <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css" rel="stylesheet"> -->
     <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" />
     <!-- Font Awesome CSS -->
     <link href="<?php echo base_url('assets/fonts/font-awesome.min.css'); ?>" media="screen" rel="stylesheet" type="text/css" />
     <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
     <link href="<?php echo base_url('assets/css/material.min.css'); ?>" rel="stylesheet" />
     <link href="<?php echo base_url('assets/css/ripples.min.css'); ?>" rel="stylesheet" />
     <link href="<?php echo base_url('assets/css/main.css'); ?>" rel="stylesheet" />
     <link href="<?php echo base_url('assets/css/responsive.css'); ?>" rel="stylesheet" />
     <link href="<?php echo base_url('assets/css/animate.min.css'); ?>" rel="stylesheet" />
     <link href="<?php echo base_url('assets/css/style.cs'); ?>" rel="stylesheet" />     
</head>
<body>

<div class ="navbar navbar-invers menu-wrap">
    <div class="navbar-header text-center">
    </div>
    <img alt="" src="<?php echo base_url('assets/img/Logo-03.png'); ?>" style="height:50px; display:block; margin: 0 auto;"/>
  
    <ul class="nav navbar-nav main-navigation">
         
        <li class="active"><a href="#home">Inicio</a></li>

        <li><a href="#features">Features </a></li>

        <li><a href="#why">Acerca de Nosotros </a></li>

        <li><a href="#inpulsa">Inpulsa tu negocio</a></li>
         
        <li><a href="#testimonial">Testimonial </a></li>

        <li><a href="#counter">CONTÁCTANOS </a></li>
    </ul>

    <button class="close-button" id="close-button">Close Menu</button>

</div>

<div class="content-wrap">
    <header class="hero-area" id="home">
        <div class="container">
            <div class="col-md-12">
                <div class="navbar navbar-inverse sticky-navigation navbar-fixed-top" data-offset-top="200" data-spy="affix" role="navigation">
                    <div class="container">

                        <div class="navbar-header">
                            <a class="logo-left " href="index.html">Barber's Cloud</a>
                        </div>

                        <div class="navbar-right">
                            <button class="menu-icon" id="open-button">
                                <i class="mdi-navigation-menu"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
              
            <div class="img-logo">
                 <img alt="" class="logo" src="<?php echo base_url('assets/img/Logo-03.png'); ?>">
            </div>

            <div class="contents text-right" style="padding-bottom: 100px;">
                <h1 class="wow fadeInRight " data-wow-delay="300ms" data-wow-duration="1000ms">
                  UNA APP PARA RENOVARTE
                </h1>
                <p class="wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1000ms">
                  Donde podrás agendar tu cita y escoger tu barbero en la barbería mas cercana.
                </p>
                <a class="btn btn-lg btn-primary wow fadeInUp" target="_blank" href="https://docs.google.com/forms/d/1CarkSt2lJyNZsAs-qFerf0pus5VVuT_TnNUm02akIQA" data-wow-delay="400ms" data-wow-duration="1000ms" href="#why">
                    Llena la Encuesta!
                </a>
                <a class="btn btn-lg btn-border wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms" href="login.php">
                  Iniciar Sesión
                </a>
            </div>
        </div>
    </header>

    <section class="section" id="features">
        <div class="container">
            <div class="section-header">
                <h1 class="section-title wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                    Descubre
                </h1>
                  <h2 class="section-subtitle wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1000ms">
                    Como reservar en tu barberia favorita:
                </h2>
            </div>
            
            <div class="row">
                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1000ms">
                    <div class="features">
                        <div class="icon">
                              <i class="mdi-action-room"></i>
                        </div>
                        <div class="features-text">
                            <h4>Busca</h4>
                            <p>
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-delay="450ms" data-wow-duration="1000ms">
                    <div class="features">
                        <div class="icon">
                            <i class="mdi-action-done-all"></i>
                        </div>
                        <div class="features-text">
                            <h4>Reserva</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-delay="550ms" data-wow-duration="1000ms">
                    <div class="features">
                        <div class="icon">
                            <i class="mdi-action-stars"></i>
                        </div>
                        <div class="features-text">                             
                            <h4>Guarda</h4>
                            <p>
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                            </p>
                        </div>
                    </div>
                </div>
                   
            </div>
        </div>
    </section>

    <section class="section" id="why">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1000ms">
                    <img class="img-responsive" src="<?php echo base_url('assets/img/features/img1.png'); ?>">                              
                </div>

                <div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                    <div class="pull-left content ">
                        <h2 class="para">Barber's Cloud</h2>
                        <p>
                            Es una WebMobile en donde podrás agendar tu cita y escoger tu barbero en la barbería mas cercana.
                        </p>
                        <ul class="list-item">
                            <li><i class="mdi-action-done"></i>Barberias Cercanas</li>
                            <li><i class="mdi-action-done"></i>Adiós Tiempos de Esperas</li>
                            <li><i class="mdi-action-done"></i>Escoge Tu barbero Preferido</li>
                            <li><i class="mdi-action-done"></i>Encuentra tu Barberia Preferida</li>
                            <li><i class="mdi-action-done"></i>Rapida y Sencilla</li>
                        </ul>

                        <a class="btn btn-lg btn-primary btnbar" href="javascript:void(0)">
                            Descarga gratis nuestra aplicación!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section main-feature-gray" id="main-features">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 wow fadeInRight barberia" data-wow-delay="300ms" data-wow-duration="1000ms">
                    <div class="card">                                                                   
                        <figure>
                            <img class="img-responsive" src="<?php echo base_url('assets/img/barber1.png'); ?>">

                            <figcaption>
                                <span class="titulo-barberia">Barberia Majestic</span>
                                <span class="titulo-desc-barberia">Dirección</span>
                                <p class="desc-barberia">
                                  En pleno centro de Barcelona, ubicado en el barrio Dreta de l' Eixample, podrás encontrar...
                                </p>

                                <a class="boton boton-link-barberia">Ver Barberia</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 wow fadeInRight barberia" data-wow-delay="300ms" data-wow-duration="1000ms">
                    <div class="card">                                                                   
                        <figure>
                            <img class="img-responsive" src="<?php echo base_url('assets/img/barber2.png'); ?>">

                            <figcaption>
                                <span class="titulo-barberia">Barberia Barberpud</span>
                                <span class="titulo-desc-barberia">Dirección</span>
                                <p class="desc-barberia">
                                    En pleno centro de Barcelona, ubicado en el barrio Dreta de l' Eixample, podrás encontrar...
                                </p>

                                <a class="boton boton-link-barberia">Ver Barberia</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 wow fadeInRight barberia" data-wow-delay="300ms" data-wow-duration="1000ms">
                    <div class="card">                                                                   

                        <figure>
                            <img class="img-responsive" src="<?php echo base_url('assets/img/barber3.png'); ?>">

                            <figcaption>
                                <span class="titulo-barberia">Barberia Underground</span>
                                <span class="titulo-desc-barberia">Dirección</span>
                                <p class="desc-barberia">
                                    En pleno centro de Barcelona, ubicado en el barrio Dreta de l' Eixample, podrás encontrar...
                                </p>

                                <a class="boton boton-link-barberia">Ver Barberia</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>





<section class="section" id="inpulsa">
    <div class="container">
        <div class="row">
            
            <div class="col-md-4 col-sm-4 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                <img alt="" class="img-responsive" src="<?php echo base_url('assets/img/Logo-02.png'); ?>">
            </div>
            
            <div class="col-md-8 col-sm-8 wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1000ms">
                <div class="feature-item">
                    <h1 class="title-small titulo">IMPULSA TU NEGOCIO</h1>
                     
                    <p>
                        Ahora con Barber'cloud tenes un socio estratégico que te ayudará a incrementar tus ventas, optimizar tu tiempo, estar disponible para tus clientes las 24 horas todos los dias de la semana! Además te ayudaremos a mejorar tu presencia en el mundo digital.
                    </p>

                    <p>
                        La receta es sencilla, Tu talento + Barber'cloud y tus clientes estarán contentos. Súmate a la comunidad Estetica más grande de Latinoamérica!
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="cta">
    <div class="container">
        <div class="row text-center">
            <h3 class="title-small wow bounce" data-wow-delay="300ms" data-wow-duration="1000ms">
                Únase a nosotros hoy y haga crecer su negocio .
            </h3>
            <a class="btn btn-lg btn-border" href="barberia/registrar.php">
                Registrarse como negocio
            </a>
        </div>
    </div>
</section>

<section class="section" id="testimonial">
    <div class="container">
        <div class="section-header text-center wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1000ms">
            <h1 class="section-title">What People Says</h1>
             <h2 class="section-subtitle">
                  Material UI Bootstrap APP and Business Template
             </h2>
        </div>

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                <div class="carousel slide" data-ride="carousel" id="testimonial-carousel">
                         
                    <ol class="carousel-indicators">
                        <li class="active" data-slide-to="0" data-target="#testimonial-carousel"></li>
                        <li data-slide-to="1" data-target="#testimonial-carousel"></li>
                        <li data-slide-to="2" data-target="#testimonial-carousel"></li>
                    </ol>

                    <div class="carousel-inner">

                        <div class="item active text-center">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            </p>
                            <div class="meta">
                                <p>
                                    Web excutive
                                    <span>
                                        <a href="http://wingthemes.com/">WingThemes</a>
                                    </span>
                                </p>
                            </div>
                        </div>

                        <div class="item text-center">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            </p>
                            <div class="meta">
                                <p>
                                    Web excutive
                                    <span>
                                        <a href="http://graygrids.com/">GrayGrids</a>
                                    </span>
                                </p>
                            </div>
                        </div>

                        <div class="item text-center">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            </p>
                            <div class="meta">
                                <p>
                                    Web excutive
                                    <span>
                                        <a href="http://landingbow.com/">LandinBow</a>
                                    </span>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                            <i class="mdi-action-grade"></i>
                        </div>
                        <h3>Mas Clientes</h3>
                        <p>Podrás llegar a mas personas.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
                    <div class="features-content">
                        <div class="icon">
                             <i class="mdi-action-lock-outline"></i>
                        </div>
                        <h3>Seguridad</h3>
                        <p>
                            Tener una base de datos segura evitando que se pierda la información.
                        </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1000ms">
                    <div class="features-content">
                        <div class="icon">
                             <i class="mdi-file-cloud-queue"></i>
                        </div>
                        <h3>Cloud</h3>
                        <p>
                            Tener una base de datos en la nube de sus clientes.
                        </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1000ms" data-wow-duration="1000ms">
                    <div class="features-content">
                        <div class="icon">
                             <i class="mdi-social-person-outline"></i>
                        </div>
                        <h3>Estadisticas</h3>
                        <p>
                             Mirar en tiempo real un balance de sus ventas.
                        </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1200ms" data-wow-duration="1000ms">
                    <div class="features-content">
                        <div class="icon">
                            <i class="mdi-content-flag"></i>
                        </div>
                        <h3>Clientes informados</h3>
                        <p>
                            Tener a tus clientes informado de todas las promociones.
                        </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1400ms" data-wow-duration="1000ms">
                    <div class="features-content">
                        <div class="icon">
                            <i class="mdi-content-flag"></i>
                        </div>
                        <h3>Network</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                        </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1600ms" data-wow-duration="1000ms">
                    <div class="features-content">
                        <div class="icon">
                            <i class="mdi-communication-messenger"></i>
                        </div>
                        <h3>Support</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                        </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1800ms" data-wow-duration="1000ms">
                    <div class="features-content">
                        <div class="icon">
                            <i class="mdi-action-settings-power"></i>
                        </div>
                        <h3>Easy</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                <div class="counter-item">
                    <div class="icon">
                        <i class="mdi-action-face-unlock"></i>
                    </div>
                    <h3 class="timer">39000</h3>
                    <hr>
                    <h5>Mas clientes</h5>                
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1000ms">
                <div class="counter-item">
                    <div class="icon">
                        <i class="mdi-action-lock-outline"></i>
                    </div>
                    <h3 class="timer">1046</h3>
                    <hr>
                    <h5>Seguridad para sus clientes</h5>                    
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="700ms" data-wow-duration="1000ms">
                
                <div class="counter-item">
                    <div class="icon">
                        <i class="mdi-action-grade"></i>
                    </div>
                    <h3 class="timer">6345</h3>
                    <hr>
                    <h5>Servicio en la nube</h5>                    
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="900ms" data-wow-duration="1000ms">
                
                <div class="counter-item">                    
                    <div class="icon">
                        <i class="mdi-action-trending-up"></i>
                    </div>
                    <h3 class="timer">18325</h3>
                    <hr>
                    <h5>Estadisticas en Tiempo Real</h5>                    
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                <h2 class="section-title">Contactenos</h2>
                <div class="row">

                    <div class="col-md-6 col-sm-6">
                        <div class="info">
                            <div class="icon">
                                <i class="mdi-content-mail"></i>
                            </div>
                            <h4>Email</h4>
                            <p>barberscloud@gmail.com</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="info">
                            <div class="icon">
                                <i class="mdi-action-settings-phone"></i>
                            </div>
                            <h4>Telefonos:</h4>
                            <p>+57 320 6236928 - +57 301 2763385</p>
                        </div>
                    </div>

                    <div class="clear"></div>

                    <div class="col-md-6 col-sm-6">
                        <div class="info">
                            <div class="icon">
                                <i class="mdi-action-thumb-up"></i>
                            </div>
                            <h4>Redes Sociales</h4>
                            <p>@barberscloud</p>
                        </div>
                    </div>
                         
                </div>
            </div>

            <div class="col-md-6 wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1000ms">
                <h2 class="section-title" style="text-align: center;">Love to Hear From You</h2>

                <div class="text-center">
                    
                    <h3>
                        <a href="https://graygrids.com/item/pluto-material-design-free-bootstrap-template/">
                            You are Using Free Version, Purchase Full Version to Get All Elements/Pages
                        </a>
                    </h3>

                    <a class="btn btn-larg btn-primary" href="https://graygrids.com/item/pluto-material-design-free-bootstrap-template/">
                        Purchase Now
                    </a>
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
                    <h3>Products</h3>

                    <ul>
                        <li><a href="http://wingthemes.com/">WingThemes</a></li>
                        
                        <li><a href="http://graygrids.com/">Graygrids</a></li>
                        
                        <li><a href="http://wpbean.com/">WPBean</a></li>
                        
                        <li><a href="http://landingbow.com/">Landingbow</a></li>
                        
                        <li><a href="http://freebiescircle.com/">FreebiesCicle</a></li>
                    </ul>
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-12">
                      <h3>FAQs</h3>

                      <ul>
                          <li><a href="#">Why choose us?</a></li>

                          <li><a href="#">Where we are?</a></li>

                          <li><a href="#">Fees</a></li>

                          <li><a href="#">Guarantee</a></li>

                          <li><a href="#">Discount</a></li>
                      </ul>
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-12">
                      <h3>About</h3>

                    <ul>
                        <li><a href="#">Career</a></li>

                        <li><a href="#">Partners</a></li>

                        <li><a href="#">Team</a></li>

                        <li><a href="#">Clients</a></li>

                        <li><a href="#">Contact </a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <h3> Find us on </h3>
                   
                    <a class="social" href="#" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a class="social" href="#" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>

                    <a class="social" href="#" target="_blank">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Go to Top Link -->
    <a class="btn btn-primary back-to-top" href="#home">
        <i class=" mdi-hardware-keyboard-arrow-up"></i>
    </a>
</section>

<section id="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="copyright-text">
                    © Pluto 2015 All right reserved. Designed and Developed by
                    <a href="http://graygrids.com/"> GrayGrids </a>
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
<script src="<?php echo base_url('assets/js/main.js'); ?>">
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


</html>