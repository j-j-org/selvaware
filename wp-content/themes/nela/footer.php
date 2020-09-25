		<div id= "ttr_footer">
			<?php wp_footer(); ?>
			<?php
                    
					$defaults = array(
						'theme_location' => 'footer-menu',
						'menu_class'      => 'footer-menu-container',
					);
			?>
			<footer> 
				<div class='footer-menu-custom'>
					<div class='footer-contact'>
						<a class='footer__media-icons' href=#><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/whatsapp.png" alt="whatsapp" height=20px; width=20px;></a>
						<a class='footer__media-icons' href=#><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.webp" alt="facebook" height=20px; width=20px;></a>
						<a class='footer__media-icons' href=#><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram.webp" alt="instagram" height=20px; width=20px;></a>
					</div>
					<div class='footer-info-custom'>
						<p>&copy; 2020 NelaTienda</p>| <p>Todos los derechos reservados</p>|<p><?php echo wp_nav_menu( $defaults ); ?></p>
					</div>
				</div>
			</footer>
			<script>
				var onMobileMenuClick = function() {
					
					var menuElement = document.getElementById('my-nav');
					var className = 'collapse';
					
					if(menuElement.classList.contains(className)) {
						console.log(className);
						menuElement.classList.remove(className);
						console.log(menuElement.classList);
					} else {
						menuElement.classList.add(className);
					}
					
				}
			</script>		
		</div>
	</body>
</html>