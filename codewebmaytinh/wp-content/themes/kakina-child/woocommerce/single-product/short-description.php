<?php
/**
 * Single product short description
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $post, $product;
$pr_code          = $product->get_sku();
if ( !$pr_code  ) {
 $pr_code = rwmb_meta( 'pr_code' );
}
$pr_nha_sx     = rwmb_meta( 'pr_nha_sx' );
$pr_thuoc_tinh = rwmb_meta( 'pr_thuoc_tinh' );
$pr_bao_hanh   = rwmb_meta( 'pr_bao_hanh' );
$pr_tinh_trang = rwmb_meta( 'pr_tinh_trang' );  ?>

<div class="extras-meta">
    <?php if ( $pr_code ) { ?>
    <div class="extra-meta sku">
        <label>Mã sản phẩm:</label><span><?php echo $pr_code; ?></span>
    </div>
    <?php } if ( $pr_nha_sx ) { ?>
    <div class="extra-meta pr_nha_sx">
        <label>Nhà sản xuất:</label><span><?php echo $pr_nha_sx; ?></span>
    </div>
    <?php }  if ( $pr_thuoc_tinh ) { ?>
    <div class="extra-meta pr_thuoc_tinh">
        <label>Thuộc tính:</label><span><?php echo $pr_thuoc_tinh; ?></span>
    </div>
    <?php }
    $term_list = wp_get_post_terms( get_the_id() , 'product_cat', array("fields" => "all"));
    if ( count( $term_list ) > 0 ) {
        $term_list_text = '';
        foreach ($term_list as $ter) {
            $term_list_text .= '<a href="'.get_term_link( $ter->term_id, 'product_cat' ).'" title="'.$ter->name.'">'.$ter->name.'</a>, ';
        }
        ?>
        <div class="extra-meta pr_cat">
            <label>Danh mục:</label><span><?php echo $term_list_text ?></span>
        </div>
        <?php }
        $tag_list = wp_get_post_terms( get_the_id() , 'product_tag', array("fields" => "all"));
        if ( count( $tag_list ) > 0 ) {
            $tag_list_text = '';
            foreach ($tag_list as $ter) {
                $tag_list_text .= '<a href="'.get_term_link( $ter->term_id, 'product_cat' ).'" title="'.$ter->name.'">'.$ter->name.'</a>, ';
            }
            ?>
            <div class="extra-meta pr_cat">
                <label>Từ khoá:</label><span><?php echo $tag_list_text ?></span>
            </div>
            <?php }

            if ( $pr_tinh_trang ) { ?>
            <div class="extra-meta pr_tinh_trang">
                <label>Tình trạng:</label><span><?php echo $pr_tinh_trang; ?></span>
            </div>
            <?php } if ( $pr_bao_hanh ) { ?>
            <div class="extra-meta pr_bao_hanh">
                <label>Bảo hành:</label><span><?php echo $pr_bao_hanh; ?></span>
            </div>
            <?php } ?>
        </div>


        <?php if ( $post->post_excerpt ) { ?>
        <div itemprop="description">
            <?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
        </div>
        <?php } ?>

        <div class="contact-buy">
            <?php echo do_shortcode(  get_theme_mod( 'product_contact') ); ?>
        </div>