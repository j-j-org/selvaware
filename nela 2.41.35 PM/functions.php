<?php

function customtheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );



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




add_shortcode( 'products_by_category_slug', 'products_by_category_slug' );
function products_by_category_slug( $atts, $content = null ) {
        extract( shortcode_atts( array(
        'product_cat' => '',
        'orderby' => 'rand',
        ), $atts));
    ?>
        <!--- while starts here -->
    <?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' =>$product_cat, 'orderby' => $orderby);
        $loop = new WP_Query( $args );
        
        while ( $loop->have_posts() ) : $loop->the_post(); 
        global $product; 
        $imgUrl = wp_get_attachment_url($product->image_id);
    ?>
    <div class='col-md-6 pr-0'>
        <div class='cards'>
            <img class="card-img" src="<?php echo $imgUrl; ?>" alt="">
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


