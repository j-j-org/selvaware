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

      




        <div class="header-navigation-wrapper">

					<?php
					if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
						?>

							<nav class="primary-menu-wrapper" role="navigation">

								<ul class="primary-menu reset-list-style">

								<?php
								if ( has_nav_menu( 'primary' ) ) {

									wp_nav_menu(
										array(
											'container'  => '',
											'items_wrap' => '%3$s',
											'theme_location' => 'primary',
										)
									);

								} elseif ( ! has_nav_menu( 'expanded' ) ) {

									wp_list_pages(
										array(
											'match_menu_classes' => true,
											'show_sub_menu_icons' => true,
											'title_li' => false,
											
										)
									);

								}
								?>

								</ul>

							</nav><!-- .primary-menu-wrapper -->

						<?php
					}

					if ( true === $enable_header_search || has_nav_menu( 'expanded' ) ) {
						?>

						<div class="header-toggles hide-no-js">

						<?php
						if ( has_nav_menu( 'expanded' ) ) {
							?>

							<div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">

								<button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
									<span class="toggle-inner">
										<span class="toggle-text"></span>
										<span class="toggle-icon">
											
										</span>
									</span>
								</button><!-- .nav-toggle -->

							</div><!-- .nav-toggle-wrapper -->

							<?php
						}

						if ( true === $enable_header_search ) {
							?>

							<div class="toggle-wrapper search-toggle-wrapper">

								<button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
									<span class="toggle-inner">
										
										<span class="toggle-text"></span>
									</span>
								</button><!-- .search-toggle -->

							</div>

							<?php
						}
						?>

						</div><!-- .header-toggles -->
						<?php
					}
					?>

				</div><!-- .header-navigation-wrapper -->





      
    </div>
  </header><!-- #header -->