<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--- TODO check what is https://use.fontawesome.com/releases/v5.7.2/css/all.css --->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

        
        <!--- Custom styles --->
        <?php
            wp_enqueue_style( 'bootstrap-custom-style', get_stylesheet_directory_uri() . "/css/bootstrap.min.css" );
            
        ?>
        
        

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <div id="header" class="jumbotron">

        <div class="header-navigation-wrapper">
            <?php if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) { ?>

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
            
                <?php } ?>
					

        </div><!-- .header-navigation-wrapper -->

<div class="container">