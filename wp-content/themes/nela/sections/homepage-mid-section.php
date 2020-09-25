<?php
add_shortcode( 'homepage_upper_section', 'homepage_upper_section' );
function homepage_upper_section( $atts, $content = null ) {
    //$homePageVidpage = get_page_by_path( "homepage-video", OBJECT, array( 'page' ) );
    $homePageVidpage = get_page_by_title('Home Video'); 
    $content = apply_filters('the_content', $homePageVidpage->post_content);
    echo $content;
?> 
        <h2>----</h2> <?php var_dump($homePageVidpage); ?> <h3>----</h3> 
        <?php
}
