<?php
global $post;
$slider_on		 = get_post_meta( get_the_ID(), 'kakina_slider_on', true );
$repeater_value	 = get_theme_mod( 'repeater_slider', array(
	array(
		'kakina_image_id'	 => get_template_directory_uri() . '/img/demo/slider1.jpg',
		'kakina_url'		 => '#',
	),
	array(
		'kakina_image_id'	 => get_template_directory_uri() . '/img/demo/slider2.jpg',
		'kakina_url'		 => '#',
	),
) );
if ( $slider_on == 'on' && get_theme_mod( 'shop-by-cat-menu', '' ) != '' || is_front_page() && get_theme_mod( 'demo_front_page', 1 ) == 1 && get_option( 'show_on_front' ) != 'page' && $repeater_value ) {
	$collapsed	 = 'true';
	$in			 = 'opened mobile-display in';
} else {
	$collapsed	 = 'false';
	$in			 = '';
}
?>
<div class="header-line-search row">
	<div class="header-categories col-md-3">
		<div  id="accordion" role="tablist" aria-multiselectable="true">
			<div role="tab" id="headingOne">
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="<?php echo $collapsed; ?>" aria-controls="collapseOne">
					<h4 class="panel-title"><?php _e( 'Shop by category', 'kakina' ); ?></h4>
				</a>
			</div>
			<div id="collapseOne" class="panel-collapse collapse <?php echo $in; ?> col-md-3" role="tabpanel" aria-labelledby="headingOne"> 
				<?php
				$args = array(
					'menu'			 => get_theme_mod( 'shop-by-cat-menu' ),
					'depth'			 => 3,
					'container'		 => false,
					'menu_class'	 => 'widget-menu',
					'fallback_cb'	 => '',
					'items_wrap'	 => '<div id="%1$s" class="widget-menu">%3$s</div>',
					'walker'		 => new kakina_wp_bootstrap_navwalker()
				);
				wp_nav_menu( $args );
				?>
			</div>
		</div>
	</div>
	<?php
	if ( get_theme_mod( 'kakina_socials', 0 ) == 1 ) {
		$row = '5';
	} else {
		$row = '9';
	}
	?>
    <div class="header-search-form col-md-<?php echo $row; ?>">
		<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<select class="col-xs-4" name="product_cat">
				<option value=""><?php echo esc_attr( __( 'All', 'kakina' ) ); ?></option> 
				<?php
				$categories = get_categories( 'taxonomy=product_cat' );
				foreach ( $categories as $category ) {
					$option = '<option value="' . $category->category_nicename . '">';
					$option .= $category->cat_name;
					$option .= ' (' . $category->category_count . ')';
					$option .= '</option>';
					echo $option;
				}
				?>
			</select>
			<input type="hidden" name="post_type" value="product" />
			<input class="col-xs-8" name="s" type="text" placeholder="<?php esc_attr_e( 'Search for products', 'kakina' ); ?>"/>
			<button type="submit"><?php esc_html_e( 'Go', 'kakina' ); ?></button>
		</form>
    </div>
	<?php if ( get_theme_mod( 'kakina_socials', 0 ) == 1 ) : ?>
		<div class="social-section col-md-4">
			<span class="social-section-title hidden-md">
				<?php
				if ( get_theme_mod( 'kakina_socials_text', 'Follow Us' ) != '' ) {
					echo esc_html( get_theme_mod( 'kakina_socials_text', __( 'Follow Us', 'kakina' ) ) );
				}
				?>
			</span>
			<?php kakina_social_links(); ?>              
		</div>
	<?php endif; ?> 
</div>
