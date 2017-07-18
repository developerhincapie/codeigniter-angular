<!DOCTYPE doctype html>
<html lang="es">
  <head>
      <meta charset="utf-8"/>
      <meta content="Barber's cloud una nueva forma de asistir a tu barberia" name="description"/>
      <meta content="barberias, spa, servicios, salones de belleza" name="keywords"/>
      <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"/>
      <meta content="Barber'cloud" name=""/>
      <title>Barber's Cloud</title>
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
  </head>

<body>
    <div class="navbar navbar-invers menu-wrap navega">
        <div class="navbar-header text-center"></div>
        <img alt="" src="<?php echo base_url('assets/img/Logo-03.png'); ?>" style="height:50px; display:block; margin: 0 auto;"/>
        <ul class="nav navbar-nav main-navigation ">
            <li class="active"><a href="#home">Inicio</a></li>
            <li><a href="#features">Descubre</a></li>
            <li><a href="#why">Acerca de Nosotros</a></li>
            <li><a href="#barberias">Barberias</a></li>
            <li><a href="#inpulsa">Impulsa tu negocio</a></li>
            <li><a href="#testimonial">Testimonios</a></li>
            <li><a href="#contact">CONTÁCTANOS</a></li>
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
                    <a class="btn btn-lg btn-primary btnbar btnbar wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms" href="https://docs.google.com/forms/d/1CarkSt2lJyNZsAs-qFerf0pus5VVuT_TnNUm02akIQA" target="_blank">
                        Llena la Encuesta!
                    </a>
                    <a class="btn btn-lg btn-border wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms" href="<?php echo base_url('home/login'); ?>">
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
                                <p>Encuentra la barberia que deseas ir.</p>
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
                                <p>Reserva día y hora fácilmente.</p>
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
                                <p>Guarda tus cortes favoritos para tus próximas reservas.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <a class="btn btn-lg centrar" href="#barberias">Barberias Recomendadas</a>
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
                            <p>Es una WebMobile en donde podrás agendar tu cita y escoger tu barbero en la barbería mas cercana.</p>
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

        <section class="section main-feature-gray" id="barberias">
            <div class="container">
                <h1 class="section-title wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms" style="text-align: center;">
                    Barberias recomendadas
                </h1>
            
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
                                    <span class="titulo-barberia">Barberia Barberpub</span>
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
                            La receta es sencilla, Tu talento + Barber'cloud y tus clientes estarán contentos. Súmate a la comunidad barberias más grande de Latinoamérica!
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
                <a class="btn btn-lg btn-border"  href="<?php echo base_url('home/registrar'); ?>">Registrarse como negocio</a>
            </div>
        </div>
    </section>

    <section class="section" id="testimonial">
        <div class="container">
            <div class="section-header text-center wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1000ms">
                <h1 class="section-title">Lo que dice la gente de las barberias</h1>
                <h2 class="section-subtitle">Tu como personanos importas.</h2>
            </div>

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                    <div class="carousel slide" data-ride="carousel" id="testimonial-carousel">
                         <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li class="active" data-slide-to="0" data-target="#testimonial-carousel"></li>
                            <li data-slide-to="1" data-target="#testimonial-carousel"></li>
                            <li data-slide-to="2" data-target="#testimonial-carousel"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            <div class="item active text-center">
                                <p>
                                    Normal, creo que ha ido mejorando pero aun le falta mucho en el proceso de facilitarle mucho mas las cosas a los clientes.
                                </p>
                                   
                            </div>

                            <div class="item text-center">
                                <p>
                                    Normal, lo único que ni me gusta es que pierde uno mucho tiempo cuando va a motilarse, tiene uno que esperar y se demora a veces mucho.
                                </p>                                 
                            </div>

                            <div class="item text-center">
                                <p>
                                    Ps es muy atrasada porque si alguna persona tiene una delijencia y tiene que irse rápido esa espera ps digamos que es demorativa.
                                </p>                                 
                            </div>
                         </div>
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
                                <p>+57 3206236928 - +57 3012763385</p>
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

                        <div class="col-md-6 col-sm-6">
                            <div class="info">
                                <div class="icon">
                                    <i class="mdi-action-shop"></i>
                                 </div>
                                <h4>Play store</h4>
                                <p>Descargala Ya!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1000ms">
                    <h2 class="section-title" style="text-align: center;">
                        Sabemos lo importante que eres para nosotros
                    </h2>
                    <div class="text-center">
                        <h3>
                            <a href="https://graygrids.com/item/pluto-material-design-free-bootstrap-template/">
                                Descarga nuestra App, y disfruta al maximo de la facilidad que te da barber's cloud
                            </a>
                        </h3>
                        
                        <a class="btn btn-larg btn-primary btnbar" href="https://graygrids.com/item/pluto-material-design-free-bootstrap-template/">
                            Descargar
                        </a>
                        
                        <div class="badges">
                            <a class="badge-link" href="#">
                                <img alt="" src="<?php echo base_url('assets/img/google-play-badge.svg'); ?>"/>
                            </a>
                            <a class="badge-link" href="#">
                                <img alt="" src="<?php echo base_url('assets/img/app-store-badge.svg'); ?>"/>
                            </a>
                         </div>
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
                        <h3>SÍGUENOS</h3>
                        <a class="social" href="https://www.facebook.com/Barbers-Cloud-604176093120826/?fref=ts" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a class="social" href="https://twitter.com/Barberscloud" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>

                        <a class="social" href="https://www.instagram.com/barberscloud/" target="_blank">
                            <i class="fa fa-instagram"></i>
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
                    <p class="copyright-text">© Barber's Cloud 2016-2017 todos los derechos reservados.</p>
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