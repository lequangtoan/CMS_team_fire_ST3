<?php

/*** Child Theme Function  ***/

function hrm_child_theme_enqueue_scripts() {
	// wp_enqueue_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css'  );
}
add_action('wp_enqueue_scripts', 'hrm_child_theme_enqueue_scripts', 11);

add_image_size( 'blog-thumbnail', 350, 250, true );

require_once get_stylesheet_directory() . '/inc/recent-posts.php';
require_once get_stylesheet_directory() . '/inc/meta-boxes.php';
include get_stylesheet_directory() . '/woocommerce/custom-product.php';


add_action( 'widgets_init', 'hrm_register_widgets' );
function hrm_register_widgets(){
    register_widget( 'HRM_Widget_Recent_Posts' );
}

function remove_some_widgets(){
    unregister_sidebar( 'kakina-footer-area' );
}
add_action( 'widgets_init', 'remove_some_widgets', 11 );

register_nav_menus(
    array(
        'footer' => __( 'Footer Menu', 'kakina' ),
        )
    );

add_action( 'widgets_init', 'hrm_register_sidebar', 13 );
function hrm_register_sidebar() {
    global $hrm_options;
    $before_widget =  '<div id="%1$s" class="widget %2$s">';
    $after_widget  =  '</div>';
    $before_title  =  '<div class="widget-top"><h3 class="widget-title">';
    $after_title   =  '</h3></div>';

    //Sidebars default

    $sidebars = array(
        'footer-address'    => __( 'Footer Address', 'hrm' ),
        'coppyright'    => __( 'Coppyright', 'hrm' ),
        );

    foreach ( $sidebars as $id => $name )
    {
        register_sidebar( array(
            'name'          => $name,
            'id'            => $id,
            'before_widget' => $before_widget ,
            'after_widget'  => $after_widget ,
            'before_title'  => $before_title ,
            'after_title'   => $after_title ,
            ) );
    }

    //footer sidebar
    $layout_footer = 3;
    for ($i=1; $i<= $layout_footer ; $i++) {
        register_sidebar( array(
            'name'          => sprintf( __( 'Footer Sidebar %d', 'hrm' ), $i ),
            'id'            => 'footer-' . $i,
            'before_widget' => $before_widget,
            'after_widget'  => $after_widget,
            'before_title'  => $before_title,
            'after_title'   => $after_title,
            )
        );
    }

}
