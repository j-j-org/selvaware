<?php
    
    get_header(); 
?>

    </header> <!--- header section --->
</div> <!--- header --->

<div id="index_main_wrapper" class="row">

    <div style="max-width: 1200px;margin: auto;margin-left: auto !important; margin-right: auto !important;" class="container-fluid video-player">
        <div class="container">
            <div class="screen embed-responsive Here i am">
                <? echo do_shortcode ('[homepage_upper_section]'); ?>
            </div>

            <div class="play-list">
                <div class="owl-carousel owl-carousel4 owl-theme">
                    <div>
                        <div class="card"> <img class="card-img link-img"
                                data-link="https://www.youtube.com/embed/R971LKLP-zc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/play1.png"
                                alt="">
                        </div>
                    </div>
                    <div>
                        <div class="card"> <img class="card-img link-img"
                                data-link="https://www.youtube.com/embed/R971LKLP-zc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/play2.png"
                                alt="">

                        </div>
                    </div>
                    <div>
                        <div class="card"> <img class="card-img link-img"
                                data-link="https://www.youtube.com/embed/R971LKLP-zc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/play3.png"
                                alt="">

                        </div>
                    </div>
                    <div>
                        <div class="card"> <img class="card-img link-img"
                                data-link="https://www.youtube.com/embed/R971LKLP-zc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/play4.png"
                                alt="">

                        </div>
                    </div>
                    <div>
                        <div class="card"> <img class="card-img link-img"
                                data-link="https://www.youtube.com/embed/R971LKLP-zc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/play5.png"
                                alt="">

                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row vr-gallery">
                <div class="col-md-8 mb-4">
                    <div class="row">
                        <div class="col-md-12 col-lg-7 pr-0 pd-md">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gallery-img1.png" alt="">
                        </div>
                        <div class="col-md-12 col-lg-5 light-bg cus-pd cus-arrow-left">
                            <p><small>march 27, 2020</small></p>
                            <h3>Trendy Summer
                                Fashion</h3>
                            <p>
                                To take a trivial example, which of us ever undertakes laborious physical exercise,
                                except to obtain some advantage from it? But who has any right to find fault with a man
                                who chooses...
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 pl-4 mb-4">
                    <div class="card">
                        <img class="card-img h-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/video-cover1.jpg" alt="">
                        <div class="card-img-overlay opacity text-center">
                            <a class="play-1" href="https://www.youtube.com/watch?v=vpO8sZDxOGI"><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/play-icon.png" alt=""></a>
                            <h5 class="card-title">Weekend In Boston</h5>

                        </div>
                    </div>
                </div>

                <div class="col-md-8 mb-4 pr-0 pd-md">
                    <div class="card">
                        <img class="card-img h-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/gallery-img2.jpg" alt="">
                        <div class="card-img-overlay">
                            <div class="contact-box">
                                <p><small>march 27, 2020</small></p>
                                <h3>Trendy Summer
                                    Fashion</h3>
                                <p>To take a trivial example, which of us ever undertakes laborious physical exercise,
                                    some advantage from it? fault with a man who chooses...</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 pl-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/gallery-img3.jpg" alt="">
                        <div class="card-body bg-gray cus-pd2 cus-arrow-up">
                            <p><small>march 27, 2020</small></p>
                            <h3>Trendy Summer
                                Fashion</h3>
                            <p>To take a trivial example, which of us ever undertakes laborious physical exercise, some
                                advantage from it? fault with a man who chooses...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 mb-4">
                    <div class="row">
                        <div class="col-md-12 col-lg-7 pr-0 pd-md">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gallery-img4.jpg" alt="">
                        </div>
                        <div class="col-md-12 col-lg-5 light-bg cus-pd cus-arrow-left">
                            <p><small>march 27, 2020</small></p>
                            <h3>Trendy Summer
                                Fashion</h3>
                            <p>
                                To take a trivial example, which of us ever undertakes laborious physical exercise,
                                except to obtain some advantage from it? But who has any right to find fault with a man
                                who chooses...
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 pl-4 mb-4">
                    <div class="card">
                        <img class="card-img h-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/video-cover2.jpg" alt="">
                        <div class="card-img-overlay opacity text-center">
                            <a class="play-1" href="https://www.youtube.com/watch?v=vpO8sZDxOGI"><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/play-icon.png" alt=""></a>
                            <h5 class="card-title">Weekend In Boston</h5>

                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-center">
                    <a href="#" class="btn">LOAD MORE</a>

                </div>
            </div>

        </div>
    </div>

</div>
<?php get_footer(); ?>
