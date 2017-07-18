 <!DOCTYPE doctype html>
<html lang="en">
<head>
     <meta charset="utf-8" />
     <meta content="Responsive Bootstrap Landing Page Template" name="description" />
     <meta content="Bootstrap, Landing page, Template, Registration, Landing" name="keywords" />
     <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport" />
     <meta content="Grayrids" name="author" />
     <title>
          Ingresar
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

<section class="section" id="inpulsa">
     <div class="container">
          <div class="row">
               <div class="col-md-4 col-sm-4 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                    <img alt="" class="img-responsive" src="<?php echo base_url('assets/img/Logo-02.png'); ?>">
               </div>
               <div class="col-md-8 col-sm-8 wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1000ms">
                    <div class="feature-item">

                         <h1 class="title-small titulo">
                              Iniciar Sesión
                         </h1>

                         <form action="" method="POST">
                              <div class="form-group">
                                <label for="txtEmail">Email Barberia</label>
                                <input type="email" class="form-control" name="txtEmail" placeholder="Email" required>
                              </div>

                              <div class="form-group">
                                <label for="txtPassword">Contraseña Barberia</label>
                                <input type="password" class="form-control" name="txtPassword" placeholder="Password" required>
                              </div>

                              <input type="submit" name="btnLogin" class="btn btn-danger" value="Login" />
                         </form>
                    </div>
               </div>
          </div>
     </div>
</section>


 <!-- Go to Top Link -->
    <!--  <a class="btn btn-primary back-to-top btnfo" href="#home">
            <i class=" mdi-hardware-keyboard-arrow-up"></i>
        </a> -->
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
