<?php

function nela_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'nela_add_woocommerce_support' );


/**
* Edit my account menu order
*/
function my_account_menu_order() {
    $menuOrder = array(
       'dashboard' => __( 'Dashboard', 'woocommerce' ),
       'orders' => __( 'Orders', 'woocommerce' ),
       'downloads' => __( 'Download', 'woocommerce' ),
       'edit-address' => __( 'Addresses', 'woocommerce' ),
       'edit-account' => __( 'Account Details', 'woocommerce' ),
       'customer-logout' => __( 'Logout', 'woocommerce' ),
  );
 return $menuOrder;
}
add_filter ( 'woocommerce_account_menu_items', 'my_account_menu_order' );



function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

function wpb_custom_new_logoff_menu() {
    register_nav_menu('logoff-menu',__( 'Logoff Menu' ));
}
add_action( 'init', 'wpb_custom_new_logoff_menu' );

function wpb_footer_menu() {
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'wpb_footer_menu' );

add_shortcode( 'products_by_category_slug', 'products_by_category_slug' );
function products_by_category_slug( $atts, $content = null ) {
        extract( shortcode_atts( array(
        'product_cat' => '',
        'orderby' => 'rand',
        ), $atts));
    ?>
        <!--- while starts here -->
    <?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => 2, 'product_cat' =>$product_cat, 'orderby' => $orderby);
        $loop = new WP_Query( $args );
        
        while ( $loop->have_posts() ) : $loop->the_post(); 
        global $product; 
        $imgUrl = wp_get_attachment_url($product->image_id);
    ?>
    <div class='col-md-6 card-wrapper' style="overflow: hidden; padding: 0;">
        <div class='cards big-card' style="background-image:url('<?php echo $imgUrl; ?>')">
            <div class="card-img-overlay d-flex align-items-center justify-content-center flex-column">
                <p><?php echo $product->short_description; ?></p>
                <hr />
                <h2><?php echo $product->name; ?></h2>
                <a href="/index.php/product/<?php echo $product->slug; ?>" class="btn">Ver mas</a>
            </div>
            </div> <!--- class='cards' --->
            </div>
        <?php endwhile; ?>
        <!--- while ends here -->
    <?php 
    
    wp_reset_query(); 
    ?>

    <?php
}


add_shortcode( 'products_by_category_slug_smallbox', 'products_by_category_slug_smallbox' );
function products_by_category_slug_smallbox( $atts, $content = null ) {
        extract( shortcode_atts( array(
        'product_cat' => '',
        'orderby' => 'rand',
        ), $atts));
    ?>
        <!--- while starts here -->
    <?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => 4, 'product_cat' =>$product_cat, 'orderby' => $orderby);
        $loop = new WP_Query( $args );
        
        while ( $loop->have_posts() ) : $loop->the_post(); 
        global $product; 
        $imgUrl = wp_get_attachment_url($product->image_id);
    ?>
    <div class='col-md-3 card-wrapper' style="overflow: hidden; padding: 0;">
        <div class='cards small-card' style="background-image:url('<?php echo $imgUrl; ?>')">
            <div class="card-img-overlay">
                <h5><a href="/index.php/product/<?php echo $product->slug; ?>" class="btn"><?php echo $product->name; ?></a></h5>
            </div>
        </div> <!--- class='cards' --->
    </div>
        <?php endwhile; ?>
        <!--- while ends here -->
    <?php 
    
    wp_reset_query(); 
    ?>

    <?php
}


function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

function get_videos_per_user_shortcode( $atts ) {
    global $wpdb;
    $user = wp_get_current_user();

    if ( ! function_exists( 'wp_get_current_user' ) ) {
        //return 0;
    }
    $results = $wpdb->get_results("SELECT post_content FROM wp_posts WHERE post_content LIKE '%customvideo url%' 
    AND id in (SELECT product_id FROM wp_wc_order_product_lookup 
    WHERE customer_id = (SELECT customer_id FROM wp_wc_customer_lookup WHERE user_id = ".$user->ID.  "))", OBJECT );
    //var_dump($results);

    $viewToRender = '<ul>';
    $linearray = array();
    foreach ($results as $value){

        $linearray = get_string_between($value->post_content, "[customvideo url=", "]");
        

        $viewToRender .= '<li><a href=' . $linearray . '>Click Vid</a></li>';
    }
    $viewToRender .= '</ul>';
    
    return $viewToRender;
 }
 add_shortcode( 'get_videos_user', 'get_videos_per_user_shortcode' );


 function customvideo_shortcode( $atts ) {
    
 }
 add_shortcode( 'customvideo', 'customvideo_shortcode' );

 