<?php

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating' , 5 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' , 10 );

// Remove tabs
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
function woo_remove_product_tabs( $tabs ) {

    // unset( $tabs['description'] );
    unset( $tabs['reviews'] );
    // unset( $tabs['additional_information'] );

    return $tabs;

}
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {

    $tabs['description']['title'] = __( 'Thông tin sản phẩm' );
    // $tabs['reviews']['title'] = __( 'Ratings' );
    $tabs['additional_information']['title'] = __( 'Thông số kỹ thuật' );

    return $tabs;

}
// add_filter( 'woocommerce_product_tabs', 'woo_color_product_tab' );
// function woo_color_product_tab( $tabs ) {

//     $tabs['test_tab'] = array(
//         'title'     => __( 'Màu sắc', 'woocommerce' ),
//         'priority'  => 50,
//         'callback'  => 'woo_color_product_tab_content'
//     );

//     return $tabs;

// }
// function woo_color_product_tab_content() {
//     echo rwmb_meta( 'pr_color',array(), get_the_id() );
// }