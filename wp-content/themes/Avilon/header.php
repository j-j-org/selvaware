<!DOCTYPE html>
<html lang="en" style="margin-top: 0 !important;">
<head>
    <meta charset="utf-8">
    <title>Selvaware</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <!-- <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- Bootstrap CSS File and Libraries CSS Files -->
    <?php 
        wp_enqueue_style( 'boots-style', get_stylesheet_directory_uri()."/lib/bootstrap/css/bootstrap.min.css" ); 
        wp_enqueue_style( 'animate-style', get_stylesheet_directory_uri()."/lib/animate/animate.min.css" ); 
        wp_enqueue_style( 'font-awe-style', get_stylesheet_directory_uri()."/lib/font-awesome/css/font-awesome.min.css" ); 
        wp_enqueue_style( 'ionic-style', get_stylesheet_directory_uri() . "/lib/ionicons/css/ionicons.min.css" ); 
        wp_enqueue_style( 'magnif-style', get_stylesheet_directory_uri() . "/lib/magnific-popup/magnific-popup.css" ); 
    ?>

    <!-- Main Stylesheet File -->
    <?php wp_enqueue_style( 'main-style', get_stylesheet_uri() ); ?>




    <?php 
        
        wp_enqueue_script( 'jquery-min-script', get_stylesheet_directory_uri() .'/lib/jquery/jquery.min.js' );
        wp_enqueue_script( 'jquery-migrate-script', get_stylesheet_directory_uri() .'/lib/jquery/jquery-migrate.min.js' );
        wp_enqueue_script( 'boots-min-script', get_stylesheet_directory_uri() .'/lib/bootstrap/js/bootstrap.bundle.min.js' );
        wp_enqueue_script( 'easing-script', get_stylesheet_directory_uri() .'/lib/easing/easing.min.js' );
        wp_enqueue_script( 'wow-min-script', get_stylesheet_directory_uri() .'/lib/wow/wow.min.js' );
        wp_enqueue_script( 'hover-intent-script', get_stylesheet_directory_uri() .'/lib/superfish/hoverIntent.js' );
        wp_enqueue_script( 'superfish-min-script', get_stylesheet_directory_uri() .'/lib/superfish/superfish.min.js' );
        wp_enqueue_script( 'magnific-script', get_stylesheet_directory_uri() .'/lib/magnific-popup/magnific-popup.min.js' );

        
        //wp_enqueue_script( 'contact-form--script', get_stylesheet_directory_uri() .'/contactform/contactform.js' );
        wp_enqueue_script( 'main-min-script', get_stylesheet_directory_uri() .'/js/main.js' );
        ?>
        

    <style>
        #intro {
            background: linear-gradient(45deg, rgba(29, 224, 153, 0.8), rgba(29, 200, 205, 0.8)), url("<?php echo get_stylesheet_directory_uri() ?>/img/intro-bg.jpg") center top no-repeat;
        }
        #call-to-action {
            background: linear-gradient(rgba(29, 200, 205, 0.65), rgba(29, 205, 89, 0.2)), url("<?php echo get_stylesheet_directory_uri() ?>/img/call-to-action-bg.jpg") fixed center center;
        }
        .header-fixed .main-logo-img{
            display: none;
        }
        .main-logo-img-fixed {
            display: none;
        }
        .header-fixed .main-logo-img-fixed {
            display: block !important;
        }
    </style>


    <?php wp_head(); ?>
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
          <a href="/"><img style="margin-top: -14px;" class="main-logo-img" src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-original.svg" />
          <img style="margin-top: -14px;" class="main-logo-img main-logo-img-fixed" src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-white.png" /></a>
        <!-- <h1><a href="#intro" class="scrollto">Selva </a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title=""></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Inicio</a></li>
          <li><a href="#about">Nosotros</a></li>
          <li><a href="#features">Servicios</a></li>
          <li><a href="#pricing">Precios</a></li>
          <!-- <li><a href="#team">Team</a></li> -->
          <!-- <li><a href="#gallery">Gallery</a></li> -->
          <li><a href="#contact">Contacto</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->