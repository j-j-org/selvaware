
    <?php get_header(); ?>
        <!--==========================
            Intro Section
        ============================-->
        <section id="intro">

            <div class="intro-text">
                <h2>Bienvenido a Selvaware</h2>
                <p>Tu negocio al alcance de un click</p>
                <a href="#about" class="btn-get-started scrollto">Ver mas</a>
            </div>

            <div class="product-screens">

            <div class="product-screen-1 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/product-screen-1.png" alt="">
            </div>

            <div class="product-screen-2 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/product-screen-2.png" alt="">
            </div>

            <div class="product-screen-3 wow fadeInUp" data-wow-duration="0.6s">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/product-screen-3.png" alt="">
            </div>

            </div>

        </section><!-- #intro -->

        <main id="main">

            <!--==========================
            About Us Section
            ============================-->


            <?php

	if ( have_posts() ) {

		$i = 0;

		while ( have_posts() ) {
			$i++;
			if ( $i > 1 ) {
				echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
			}
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		}
	} elseif ( is_search() ) {
		?>

		<div class="no-search-results-form section-inner thin">

			<?php
			get_search_form(
				array(
					'label' => __( 'search again', 'twentytwenty' ),
				)
			);
			?>

		</div><!-- .no-search-results -->

		<?php
	}
	?>    



            <section id="about" class="section-bg">
            <div class="container-fluid">
                <div class="section-header">
                <h3 class="section-title">Tu negocio en internet</h3>
                <span class="section-divider"></span>
                <p class="section-description">
                    Ayudamos a que tu emprendimiento, proyecto o negocio, se optimice, creando soluciones exitosas.
                </p>
                </div>

                <div class="row">
                <div class="col-lg-6 about-img wow fadeInLeft">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/about-img.jpg" alt="">
                </div>

                <div class="col-lg-6 content wow fadeInRight">
                    <h2>Servicios y Soluciones</h2>
                    <h3>Creamos páginas web acorde a la necesidad de nuestros clientes, desde Tiendas en Línea, Blog, Páginas web informativas, hasta desarrollo web escalable, apps y más. Adicionalmente brindamos el soporte técnico necesario para que su página web se mantenga en línea.</h3>
                    <p>
                        Háblenos de su necesidad, y permítanos ser parte de su proyecto. Demostraremos capacidad y profesionalismo  en la  ejecución de su página. 
                    </p>

                    <ul>
                    <li><i class="ion-android-checkmark-circle"></i> Tienda en Línea</li>
                    <li><i class="ion-android-checkmark-circle"></i> Página Web escalables</li>
                    <li><i class="ion-android-checkmark-circle"></i> Página Web Autoadministrables</li>
                    <li><i class="ion-android-checkmark-circle"></i> Apps</li>
                    </ul>

                    <p class="about-us-p">
                        Páginas web con énfasis en <b>e-commerce</b>, que permiten la colocación de productos o servicios para vender de forma virtual.
                        Ideal para atraer a potenciales clientes.
                        <br/>
                        Creación de <b>páginas web</b>, que requieren mayor escalabilidad, con el uso de diferentes lenguajes de programación. Crea sitios 
                        totalmente personalizados.
                        <br/>
                        Páginas web de cualquier índole, que una vez elaborada, podrán ser <b>administradas</b> por el cliente.
                        <br/>
                        Apps que te permiten interactuar <b>con el cliente a través del aplicativo</b> en el celular.
                    </p>
                </div>
                </div>

            </div>
            </section><!-- #about -->

            <!--==========================
            Product Featuress Section
            ============================-->
            <section id="features">
            <div class="container">

                <div class="row">

                <div class="col-lg-8 offset-lg-4">
                    <div class="section-header wow fadeIn" data-wow-duration="1s">
                    <h3 class="section-title">Página Web Incluye</h3>
                    <span class="section-divider"></span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 features-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/product-features.png" alt="" class="wow fadeInLeft">
                </div>

                <div class="col-lg-8 col-md-7 ">

                    <div class="row">

                    <div class="col-lg-6 col-md-6 box wow fadeInRight">
                        <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                        <h4 class="title"><a href="">Hosting + Dominio + SSL</a></h4>
                        <p class="description">(ssl: certificado de seguridad) por 1 año o 6 meses, además de correos electrónicos.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.1s">
                        <div class="icon"><i class="ion-ios-flask-outline"></i></div>
                        <h4 class="title"><a href="">Diseño y Desarrollo Web</a></h4>
                        <p class="description">Asesoría en la escogencia del diseño adecuado a su necesidad. Diseño responsivo (ajustable  al tamaño de la pantalla). </p>
                    </div>
                    <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.2s">
                        <div class="icon"><i class="ion-social-buffer-outline"></i></div>
                        <h4 class="title"><a href="">Creacion de contenido</a></h4>
                        <p class="description">Te ayudamos a crear el contenido de tu futuro portal de negocios.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
                        <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                        <h4 class="title"><a href="">Autoadministrable (CMS)</a></h4>
                        <p class="description">Totalmente autoadministrable, además te brindamos la capacitación para que aprenda a administrar el contenido de su página web.</p>
                    </div>
                    </div>

                </div>

                </div>

            </div>

            </section><!-- #features -->

            <?php include 'pasos.php';?>

            <!--==========================
            Call To Action Section
            ============================-->
            <section id="call-to-action">
            <div class="container">
                <div class="row">
                <div class="col-lg-9 text-center text-lg-left">
                    <h3 class="cta-title">CONTACTAR AHORA</h3>
                    <p class="cta-text"> En sencillos pasos, podrás obtener tu página web.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" target="_blank" href="https://wa.link/s18dbm">Contactar</a>
                </div>
                </div>

            </div>
            </section><!-- #call-to-action -->

            <!--==========================
            More Features Section
            ============================-->
            <section id="more-features" class="section-bg">
            <div class="container">

                <div class="section-header">
                    <h3 class="section-title">Nosotros</h3>
                    <span class="section-divider"></span>
                    <p class="section-description"></p>
                </div>

                <div class="row">

                <div class="col-lg-6">
                    <div class="box wow fadeInLeft">
                    <div class="icon"><i class="ion-ios-stopwatch-outline"></i></div>
                    <h4 class="title"><a href="">Rápidos</a></h4>
                    <p class="description">Usamos tecnologías ágiles y de uso masivo, dando seguridad y resultados siempre.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInRight">
                    <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
                    <h4 class="title"><a href="">Administrado</a></h4>
                    <p class="description">Te damos soporte en la parte administrativa, el contenido de tu página también necesita trabajo y nosotros te ayudamos.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInLeft">
                    <div class="icon"><i class="ion-ios-construct-outline"></i></div>
                    <h4 class="title"><a href="">Soporte Técnico</a></h4>
                    <p class="description">Siempre que contrates uno de nuestros servicios, te daremos seguimiento personalizado.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInRight">
                    <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                    <h4 class="title"><a href="">Asesoría en el diseño </a></h4>
                    <p class="description">Te guíamos en el proceso de escogencia de "cómo se verá" tu página.</p>
                    </div>
                </div>

                </div>
            </div>
            </section><!-- #more-features -->

            <!--==========================
            Clients
            ============================-->
            <section id="clients">
            <div class="container">

                <div class="row wow fadeInUp">

                <div class="col-md-2">
                    <img style="background-color: #23282d;width: 120px" src="https://s.w.org/style/images/wporg-logo.svg" alt="">
                </div>

                <div class="col-md-2">
                    <img style="background-color: #0769ad;width: 120px" src="https://jquery.com/jquery-wp-content/themes/jquery/images/logo-jquery@2x.png" alt="">
                </div>

                <div class="col-md-2">
                    <img style="background-color: #fff;width: 120px" src="https://woocommerce.com/wp-content/themes/woo/images/logo-woocommerce.svg" alt="">
                </div>

                <div class="col-md-2">
                    <img style="background-color: #fff;width: 50px"  src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii0xMS41IC0xMC4yMzE3NCAyMyAyMC40NjM0OCI+CiAgPHRpdGxlPlJlYWN0IExvZ288L3RpdGxlPgogIDxjaXJjbGUgY3g9IjAiIGN5PSIwIiByPSIyLjA1IiBmaWxsPSIjNjFkYWZiIi8+CiAgPGcgc3Ryb2tlPSIjNjFkYWZiIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiPgogICAgPGVsbGlwc2Ugcng9IjExIiByeT0iNC4yIi8+CiAgICA8ZWxsaXBzZSByeD0iMTEiIHJ5PSI0LjIiIHRyYW5zZm9ybT0icm90YXRlKDYwKSIvPgogICAgPGVsbGlwc2Ugcng9IjExIiByeT0iNC4yIiB0cmFuc2Zvcm09InJvdGF0ZSgxMjApIi8+CiAgPC9nPgo8L3N2Zz4K" alt="">
                </div>

                <div class="col-md-2">
                    <img style="background-color: #fff;width: 120px" src="https://angular.io/assets/images/logos/angular/logo-nav@2x.png" alt="">
                </div>

                <div class="col-md-2">
                    <img style="background-color: #fff;width: 120px" src="https://www.oracle.com/a/ocom/img/rc30v1-java-se.png" alt="">
                </div>

                </div>
            </div>
            </section><!-- #more-features -->

            <!--==========================
            Pricing Section
            ============================-->
            <section id="pricing" class="section-bg">
            <div class="container">

                <div class="section-header">
                <h3 class="section-title">Precios</h3>
                <span class="section-divider"></span>
                <p class="section-description">Presupuesto y calidad, pueden ir de la mano</p>
                </div>

                <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="box wow fadeInLeft">
                    <h3>Selva Básico</h3>
                    <h4><sup>C</sup>250<span> MIL</span></h4>
                    <ul>
                        <li><i class="ion-android-checkmark-circle"></i> Diseño y Desarrollo Web </li>
                        <li><i class="ion-android-checkmark-circle"></i> Hasta 5 páginas</li>
                        <li><i class="ion-android-checkmark-circle"></i> Correo electrónico</li>
                        <li><i class="ion-android-checkmark-circle"></i> Formulario de contacto</li>
                        <li><i class="ion-android-checkmark-circle"></i> Integración a Redes Sociales</li>
                        <li><i class="ion-android-checkmark-circle"></i> Hosting + Dominio + SSL (certificado de seguridad) x 1 año</li>
                        <li><i class="ion-android-checkmark-circle"></i> Diseño responsivo (ajustable  a la pantalla)</li>
                        <li><i class="ion-android-checkmark-circle"></i> Totalmente autoadministrable (CMS)</li>
                        <li><i class="ion-android-checkmark-circle"></i> Capacitación para que aprenda a administrar el contenido de su página web</li>
                        <li><i class="ion-android-checkmark-circle"></i> Asesoría en la escogencia del diseño</li>
                        <li><i class="ion-android-checkmark-circle"></i> Asesoría en posicionamiento SEO</li>
                        <li><i class="ion-android-checkmark-circle"></i> 6 meses de mantenimiento y soporte </li>
                        <li><i class="ion-android-checkmark-circle"></i> 12 meses de soporte para Hosting</li>
                        <li><i class="ion-android-checkmark-circle"></i> Entrega en 8-15 días</li>
            
                    </ul>
                    <a href="https://bit.ly/3kEu3f0" target="_blank" class="get-started-btn">CONTACTAR</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="box featured wow fadeInUp">
                    <h3>Selva Negocios</h3>
                    <h4><sup>C</sup>300<span> MIL</span></h4>
                    <ul>
                    <li><i class="ion-android-checkmark-circle"></i> Diseño y Desarrollo Web </li>
                        <li><i class="ion-android-checkmark-circle"></i> Hasta 10 páginas</li>
                        <li><i class="ion-android-checkmark-circle"></i> Correos electrónicos</li>
                        <li><i class="ion-android-checkmark-circle"></i> Formulario de contacto</li>
                        <li><i class="ion-android-checkmark-circle"></i> Sección de Blog</li>
                        <li><i class="ion-android-checkmark-circle"></i> Integración a Redes Sociales</li>
                        <li><i class="ion-android-checkmark-circle"></i> Hosting + Dominio + SSL (certificado de seguridad) x 1 año</li>
                        <li><i class="ion-android-checkmark-circle"></i> Diseño responsivo (ajustable  a la pantalla)</li>
                        <li><i class="ion-android-checkmark-circle"></i> Totalmente autoadministrable (CMS)</li>
                        <li><i class="ion-android-checkmark-circle"></i> Capacitación para que aprenda a administrar el contenido de su página web</li>
                        <li><i class="ion-android-checkmark-circle"></i> Asesoría en la escogencia del diseño</li>
                        <li><i class="ion-android-checkmark-circle"></i> Asesoría en posicionamiento SEO</li>
                        <li><i class="ion-android-checkmark-circle"></i> 6 meses de mantenimiento y soporte </li>
                        <li><i class="ion-android-checkmark-circle"></i> 12 meses de soporte para Hosting</li>
                        <li><i class="ion-android-checkmark-circle"></i> Entrega en 8-15 días</li>
                    </ul>
                    <a href="https://bit.ly/3kEu3f0" target="_blank" class="get-started-btn">CONTACTAR</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box featured wow fadeInUp">
                    <h3>Selva Tienda en Línea/ E-commerce</h3>
                    <h4><sup>C</sup>300<span> MIL</span></h4>
                    <ul>
                    <li><i class="ion-android-checkmark-circle"></i> Diseño y Desarrollo Web </li>
                        <li><i class="ion-android-checkmark-circle"></i> Hasta 10 páginas</li>
                        <li><i class="ion-android-checkmark-circle"></i> Correos electrónicos</li>
                        <li><i class="ion-android-checkmark-circle"></i> Formulario de contacto</li>
                        <li><i class="ion-android-checkmark-circle"></i> Sección Tienda</li>
                        <li><i class="ion-android-checkmark-circle"></i> Sección Carrito de compras</li>
                        <li><i class="ion-android-checkmark-circle"></i> Integración a Redes Sociales</li>
                        <li><i class="ion-android-checkmark-circle"></i> Hosting + Dominio + SSL (certificado de seguridad) x 1 año</li>
                        <li><i class="ion-android-checkmark-circle"></i> Diseño responsivo (ajustable  a la pantalla)</li>
                        <li><i class="ion-android-checkmark-circle"></i> Totalmente autoadministrable (CMS)</li>
                        <li><i class="ion-android-checkmark-circle"></i> Capacitación para que aprenda a administrar el contenido de su página web</li>
                        <li><i class="ion-android-checkmark-circle"></i> Asesoría en la escogencia del diseño</li>
                        <li><i class="ion-android-checkmark-circle"></i> Asesoría en posicionamiento SEO</li>
                        <li><i class="ion-android-checkmark-circle"></i> 6 meses de mantenimiento y soporte </li>
                        <li><i class="ion-android-checkmark-circle"></i> 12 meses de soporte para Hosting</li>
                        <li><i class="ion-android-checkmark-circle"></i> Entrega en 8-15 días</li>
                    </ul>
                    <a href="https://bit.ly/3kEu3f0" target="_blank" class="get-started-btn">CONTACTAR</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box featured wow fadeInUp">
                    <h3>Selva Conveniente</h3>
                    <h4><sup>C</sup>40<span> MIL mensuales</span></h4>
                    <ul>
                    <li><i class="ion-android-checkmark-circle"></i> Diseño y Desarrollo Web </li>
                        <li><i class="ion-android-checkmark-circle"></i> Hasta 10 páginas</li>
                        <li><i class="ion-android-checkmark-circle"></i> Correos electrónicos</li>
                        <li><i class="ion-android-checkmark-circle"></i> Formulario de contacto</li>
                        <li><i class="ion-android-checkmark-circle"></i> Sección Tienda</li>
                        <li><i class="ion-android-checkmark-circle"></i> Sección Carrito de compras</li>
                        <li><i class="ion-android-checkmark-circle"></i> Integración a Redes Sociales</li>
                        <li><i class="ion-android-checkmark-circle"></i> Hosting + Dominio + SSL (certificado de seguridad) x 1 año</li>
                        <li><i class="ion-android-checkmark-circle"></i> Diseño responsivo (ajustable  a la pantalla)</li>
                        <li><i class="ion-android-checkmark-circle"></i> Totalmente autoadministrable (CMS)</li>
                        <li><i class="ion-android-checkmark-circle"></i> Capacitación para que aprenda a administrar el contenido de su página web</li>
                        <li><i class="ion-android-checkmark-circle"></i> Asesoría en la escogencia del diseño</li>
                        <li><i class="ion-android-checkmark-circle"></i> Asesoría en posicionamiento SEO</li>
                        <li><i class="ion-android-checkmark-circle"></i> 6 meses de mantenimiento y soporte </li>
                        <li><i class="ion-android-checkmark-circle"></i> 12 meses de soporte para Hosting</li>
                        <li><i class="ion-android-checkmark-circle"></i> Entrega en 8-15 días</li>
                    </ul>
                    <a href="https://bit.ly/3kEu3f0" target="_blank" class="get-started-btn">CONTACTAR</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="box wow fadeInRight">
                    <h3>Desarrollo</h3>
                    <h4><sup>Personalizado</sup></h4>
                    <ul>
                        <li><i class="ion-android-checkmark-circle"></i> Diseño y desarrollo web para cualquier negocio</li>
                        <li><i class="ion-android-checkmark-circle"></i> Páginas a definir acorde al objetivo del sitio web</li>
                        <li><i class="ion-android-checkmark-circle"></i> Soluciones escalables</li>
                        <li><i class="ion-android-checkmark-circle"></i> Tiempo de entrega, depende del proyecto</li>
                    </ul>
                    <a href="https://bit.ly/3kEu3f0" target="_blank" class="get-started-btn">CONTACTAR</a>
                    </div>
                </div>

                </div>
            </div>
            </section><!-- #pricing -->


            <!--==========================
            Frequently Asked Questions Section
            ============================-->
            <!---section id="faq">
            <div class="container">

                <div class="section-header">
                <h3 class="section-title">Frequently Asked Questions</h3>
                <span class="section-divider"></span>
                <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                </div>

                <ul id="faq-list" class="wow fadeInUp">
                <li>
                    <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="ion-android-remove"></i></a>
                    <div id="faq1" class="collapse" data-parent="#faq-list">
                    <p>
                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="ion-android-remove"></i></a>
                    <div id="faq2" class="collapse" data-parent="#faq-list">
                    <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="ion-android-remove"></i></a>
                    <div id="faq3" class="collapse" data-parent="#faq-list">
                    <p>
                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="ion-android-remove"></i></a>
                    <div id="faq4" class="collapse" data-parent="#faq-list">
                    <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="ion-android-remove"></i></a>
                    <div id="faq5" class="collapse" data-parent="#faq-list">
                    <p>
                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                    </p>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="ion-android-remove"></i></a>
                    <div id="faq6" class="collapse" data-parent="#faq-list">
                    <p>
                        Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                    </p>
                    </div>
                </li>

                </ul>

            </div>
            </section> #faq -->

            <!--==========================
            Our Team Section
            ============================
            <section id="team" class="section-bg">
            <div class="container">
                <div class="section-header">
                <h3 class="section-title">Our Team</h3>
                <span class="section-divider"></span>
                <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                </div>
                <div class="row wow fadeInUp">
                <div class="col-lg-3 col-md-6">
                    <div class="member">
                    <div class="pic"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/team/team-1.jpg" alt=""></div>
                    <h4>Walter White</h4>
                    <span>Chief Executive Officer</span>
                    <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                    <div class="pic"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/team/team-2.jpg" alt=""></div>
                    <h4>Sarah Jhinson</h4>
                    <span>Product Manager</span>
                    <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                    <div class="pic"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/team/team-3.jpg" alt=""></div>
                    <h4>William Anderson</h4>
                    <span>CTO</span>
                    <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                    <div class="pic"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/team/team-4.jpg" alt=""></div>
                    <h4>Amanda Jepson</h4>
                    <span>Accountant</span>
                    <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                    </div>
                </div>
                </div>

            </div>
            </section> #team -->

            <!--==========================
            Portafolio
            ============================-->
            <section id="gallery">
            <div class="container-fluid">
                <div class="section-header">
                <h3 class="section-title">Portafolio</h3>
                <span class="section-divider"></span>
                </div>

                <div class="row no-gutters">

                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item wow fadeInUp">
                    <a href="<?php echo get_stylesheet_directory_uri() ?>/img/gallery/yogapranaimg.jpg" class="gallery-popup">
                        <a href="https://yogaprana.selvaware.com/" target="_blank"> <img src="<?php echo get_stylesheet_directory_uri() ?>/img/gallery/yogapranaimg.jpg" alt=""></a>
                    </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item wow fadeInUp">
                    <a href="<?php echo get_stylesheet_directory_uri() ?>/img/gallery/mushoimg1.jpg" class="gallery-popup">
                        <a href="https://musho.selvaware.com/" target="_blank"> <img src="<?php echo get_stylesheet_directory_uri() ?>/img/gallery/mushoimg1.jpg" alt=""></a>
                    </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item wow fadeInUp">
                    <a href="<?php echo get_stylesheet_directory_uri() ?>/img/gallery/auri3.jpg" class="gallery-popup">
                        <a href="https://terapia.selvaware.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/gallery/auri3.jpg" alt=""></a>
                    </a>
                    </div>
                </div>

                <!-- <div class="col-lg-4 col-md-6"> -->
                    <!-- <div class="gallery-item wow fadeInUp"> -->
                    <!-- <a href="<?php echo get_stylesheet_directory_uri() ?>/img/gallery/gallery-4.jpg" class="gallery-popup"> -->
                        <!-- <img src="<?php echo get_stylesheet_directory_uri() ?>/img/gallery/gallery-4.jpg" alt=""> -->
                    <!-- </a> -->
                    <!-- </div> -->
                <!-- </div> -->

                <!-- <div class="col-lg-4 col-md-6"> -->
                    <!-- <div class="gallery-item wow fadeInUp"> -->
                    <!-- <a href="<?php echo get_stylesheet_directory_uri() ?>/img/gallery/gallery-5.jpg" class="gallery-popup"> -->
                        <!-- <img src="<?php echo get_stylesheet_directory_uri() ?>/img/gallery/gallery-5.jpg" alt=""> -->
                    <!-- </a> -->
                    <!-- </div> -->
                <!-- </div> -->

                <!-- <div class="col-lg-4 col-md-6"> -->
                    <!-- <div class="gallery-item wow fadeInUp"> -->
                    <!-- <a href="<?php echo get_stylesheet_directory_uri() ?>/img/gallery/gallery-6.jpg" class="gallery-popup"> -->
                        <!-- <img src="<?php echo get_stylesheet_directory_uri() ?>/img/gallery/gallery-6.jpg" alt=""> -->
                    <!-- </a> -->
                    <!-- </div> -->
                <!-- </div> -->

                </div>

            </div>
            </section><!-- #portafolio -->

            <!--==========================
           Contacto
            ============================-->
        <section id="contact">
            <div class="container">
                <div class="row wow fadeInUp">
                <div class="col-lg-4 col-md-4">
                    <div class="contact-about">
                    <h3><img class="footer-logo-img" src="<?php echo get_stylesheet_directory_uri() ?>/img/verde-hor.png" /></h3>
                    <p>Muchas formas de ponernos en contacto</p>
                   <div class="social-links">
                        
                        <a href="https://www.facebook.com/selvaware/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/webselvaware/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="https://wa.link/s18dbm" target="_blank" class="whatsapp"><i class="fa fa-whatsapp"></i></a>
                        
                        
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="info">
                    <div>
                        <i class="ion-ios-location-outline"></i>
                        <p>Cartago, <br>Costa Rica.</p>
                    </div>

                    <div>
                        <i class="ion-ios-email-outline"></i>
                        <p>info@selvaware.com</p>
                    </div>

                    <div>
                        <i class="ion-ios-telephone-outline"></i>
                        <p>(+506) 8992 06 14 / 8354 55 19</p>
        
                    </div>

                    </div>
                </div>

                <div class="col-lg-5 col-md-8">
                    <div class="form">
                    <div id="sendmessage">Gracias por contactarnos!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-row">
                        <div class="form-group col-lg-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Correo electrónico" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validation"></div>
                        </div>
                        <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                        <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit" title="Send Message">ENVIAR</button></div>
                    </form>
                    </div>
                </div>

                </div>

            </div>
            </section><!-- #contact -->

        </main>

        <!--==========================
            Footer
        ============================-->
        <footer id="footer">
            <div class="container">
            <div class="row">
                <div class="col-lg-6 text-lg-left text-center">
                <div class="copyright">
                    &copy; <strong>Selvaware</strong>. Todos los Derechos Reservados. 
                </div>
                <div class="credits"> 
                    <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Avilon
                    -->
                    <!-- Develop in this site by Selvaware and designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
                </div>
                </div>
                <div class="col-lg-6">
                <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                    <a href="#intro" class="scrollto">Inicio</a>
                    <a href="#about" class="scrollto">Negocio</a>
                    <a href="#">Política de privacidad</a>

                </nav>
                </div>
            </div>
            </div>
        </footer><!-- #footer -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <script>
            jQuery(document).ready(function($) {
                "use strict";
            
                //Contact
                $('form.contactForm').submit(function() {
                var f = $(this).find('.form-group'),
                    ferror = false,
                    emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;
            
                f.children('input').each(function() { // run all inputs
            
                    var i = $(this); // current input
                    var rule = i.attr('data-rule');
            
                    if (rule !== undefined) {
                    var ierror = false; // error flag for current input
                    var pos = rule.indexOf(':', 0);
                    if (pos >= 0) {
                        var exp = rule.substr(pos + 1, rule.length);
                        rule = rule.substr(0, pos);
                    } else {
                        rule = rule.substr(pos + 1, rule.length);
                    }
            
                    switch (rule) {
                        case 'required':
                        if (i.val() === '') {
                            ferror = ierror = true;
                        }
                        break;
            
                        case 'minlen':
                        if (i.val().length < parseInt(exp)) {
                            ferror = ierror = true;
                        }
                        break;
            
                        case 'email':
                        if (!emailExp.test(i.val())) {
                            ferror = ierror = true;
                        }
                        break;
            
                        case 'checked':
                        if (! i.is(':checked')) {
                            ferror = ierror = true;
                        }
                        break;
            
                        case 'regexp':
                        exp = new RegExp(exp);
                        if (!exp.test(i.val())) {
                            ferror = ierror = true;
                        }
                        break;
                    }
                    i.next('.validation').html((ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
                    }
                });
                f.children('textarea').each(function() { // run all inputs
            
                    var i = $(this); // current input
                    var rule = i.attr('data-rule');
            
                    if (rule !== undefined) {
                    var ierror = false; // error flag for current input
                    var pos = rule.indexOf(':', 0);
                    if (pos >= 0) {
                        var exp = rule.substr(pos + 1, rule.length);
                        rule = rule.substr(0, pos);
                    } else {
                        rule = rule.substr(pos + 1, rule.length);
                    }
            
                    switch (rule) {
                        case 'required':
                        if (i.val() === '') {
                            ferror = ierror = true;
                        }
                        break;
            
                        case 'minlen':
                        if (i.val().length < parseInt(exp)) {
                            ferror = ierror = true;
                        }
                        break;
                    }
                    i.next('.validation').html((ierror ? (i.attr('data-msg') != undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
                    }
                });
                if (ferror) return false;
                else var str = $(this).serialize();
                var action = $(this).attr('action');
                
                action = '<?php echo get_stylesheet_directory_uri(); ?>/contactform/contactus.php';
                
                $.ajax({
                    type: "POST",
                    url: action,
                    data: str,
                    success: function(msg) {
                    // alert(msg);
                    if (msg == 'OK') {
                        $("#sendmessage").addClass("show");
                        $("#errormessage").removeClass("show");
                        $('.contactForm').find("input, textarea").val("");
                    } else {
                        $("#sendmessage").removeClass("show");
                        $("#errormessage").addClass("show");
                        $('#errormessage').html(msg);
                    }
            
                    }
                });
                return false;
                });
          });
          
        </script>
    </body>
</html>

