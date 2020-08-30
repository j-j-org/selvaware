
        
<header>
    <div style="max-width: 1200px;margin: auto;margin-left: auto !important; margin-right: auto !important;" class="bg-cover clearfix pt-3">
        <h2 class="logo">Shahala</h2>
        <nav class="nav nav-fill mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="https://facebook.com/fh5co" target="_blank"><i
                        class="fab fa-facebook-f"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://twitter.com/fh5co" target="_blank"><i
                        class="fab fa-twitter"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fab fa-google-plus-g"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-rss"></i></a>
            </li>
        </nav>

        <input type="text" id="nav-search" class="nav-search mx-auto" name="" class="form-control">
        <div class="ml-0 mr-0 pb-1">
            <nav class="navbar navbar-expand-md">

                <button class="navbar-toggler ml-auto" data-target="#my-nav" data-toggle="collapse"
                    aria-controls="my-nav" aria-expanded="false" onclick="myFunction(this)"
                    aria-label="Toggle navigation">
                    <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span>
                </button>
                
                <?php
                    if (is_user_logged_in()){
                        $defaults = array(
                            'theme_location' => 'my-custom-menu',
                            'menu_class'      => 'main-menu-container',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        );    
                    } else {
                        $defaults = array(
                            'theme_location' => 'logoff-menu',
                            'menu_class'      => 'logoff-menu-container',
                            
                        );
                    }

                    wp_nav_menu( $defaults );
                ?>
            </nav>
        </div>
    </div>
</header>