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

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
	<?php
		wp_body_open();
		?>
    <div id="header" >
		<?php include 'sections/header-section.php';?>
	</div>