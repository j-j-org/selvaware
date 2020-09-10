<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--- TODO check what is https://use.fontawesome.com/releases/v5.7.2/css/all.css --->
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" /> -->
        
        <!--- Custom styles --->
        <?php
            wp_enqueue_style( 'bootstrap-custom-style', get_stylesheet_directory_uri() . "/css/bootstrap.min.css" );
        ?>

        <!---Custom JS TODO DOWNLOAD THIS GUYS FROM their original PLACE --->
        <?php
            wp_enqueue_script( 'jquery-1.12-min-script', get_stylesheet_directory_uri() .'/js/jquery-1.12.0.min.js' );
            wp_enqueue_script( 'bootstrap-min-script', get_stylesheet_directory_uri() .'/js/bootstrap.min.js' );
            wp_enqueue_script( 'owl-carousel-min-script', get_stylesheet_directory_uri() .'/js/owl.carousel.min.js' );
            wp_enqueue_script( 'jquery-yu2fvl-script', get_stylesheet_directory_uri() .'/js/jquery.yu2fvl.js' );
            //wp_enqueue_script( 'main-script', get_stylesheet_directory_uri() .'/js/main.js' );
        ?>

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
	<?php
		wp_body_open();
		?>
    <div id="header" >
        <?php include 'sections/header-section.php';?>
        