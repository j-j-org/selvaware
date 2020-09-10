		<div id= "ttr_footer">
			<?php wp_footer(); ?>
			<h1>FOOTER</h1>
		</div>

<!--- TODO DOWNLOAD THIS GUYS FROM their original PLACE --->
	<?php
		wp_enqueue_script( 'jquery-1.12-min-script', get_stylesheet_directory_uri() .'/js/jquery-1.12.0.min.js' );
		wp_enqueue_script( 'bootstrap-min-script', get_stylesheet_directory_uri() .'/js/bootstrap.min.js' );
		wp_enqueue_script( 'owl-carousel-min-script', get_stylesheet_directory_uri() .'/js/owl.carousel.min.js' );
		wp_enqueue_script( 'jquery-yu2fvl-script', get_stylesheet_directory_uri() .'/js/jquery.yu2fvl.js' );
		wp_enqueue_script( 'main-script', get_stylesheet_directory_uri() .'/js/main.js' );
	?>


	</div> <!--- container in header --->
	</body>
</html>