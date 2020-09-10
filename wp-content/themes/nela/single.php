<?php
  
get_header(); ?>
  </header>
</div>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			the_content();
		}
	}

	?>

</main><!-- #site-content -->

<?php get_footer(); ?>
