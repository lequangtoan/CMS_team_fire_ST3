<?php
if ( get_option( 'show_on_front' ) == 'page' ) { // Display static front page if is set.
	include( get_page_template() );
} elseif ( class_exists( 'WooCommerce' ) && get_theme_mod( 'demo_front_page', 1 ) == 1 ) { // Display demo homepage only if WooCommerce plugin is activated and demo enabled via customizer.
	get_header();

	get_template_part( 'template-part', 'head' );

	$repeater_value = get_theme_mod( 'repeater_slider', array(
		array(
			'kakina_image_id'	 => get_template_directory_uri() . '/img/demo/slider1.jpg',
			'kakina_url'	 => '#',
		),
		array(
			'kakina_image_id'	 => get_template_directory_uri() . '/img/demo/slider2.jpg',
			'kakina_url'	 => '#',
		),
	) );
?>
	<!-- start content container --> 	
	<div class="row rsrc-content">
		<?php if ( $repeater_value ) { ?>
			<div class="top-area row">       
				<div id="slider" class="flexslider homepage-slider col-md-push-3">
					<ul class="slides">
						<?php
						foreach ( (array) $repeater_value as $row ) {
							$image_id = $button_url = '';
							if ( isset( $row[ 'kakina_url' ] ) )
								$button_url	 = $row[ 'kakina_url' ];
							if ( isset( $row[ 'kakina_image_id' ] ) ) {
								$image_id = wp_get_attachment_image( $row[ 'kakina_image_id' ], 'kakina-slider' );
							}
							?>
							<li class="homepage-slider col-md-9"> 
								<?php if ( $button_url ) { ?>
									<a href="<?php echo esc_url( $button_url ); ?>">
										<?php if ( $image_id ) {
											echo $image_id;
										} else {
											echo '<img src="' . esc_url( $row[ 'kakina_image_id' ] ) . '" alt="">';
										} ?>
									</a> 
								<?php } else { ?>
									<?php if ( $image_id ) {
										echo $image_id;
									} else {
										echo '<img src="' . esc_url( $row[ 'kakina_image_id' ] ) . '" alt="">';
									} ?>
								<?php } ?> 
							</li> 
						<?php } ?> 
					</ul>
				</div>   
			</div>
		<?php } ?>
			<aside id="sidebar-secondary" class="col-md-3 rsrc-left" role="complementary" itemscope itemtype="http://schema.org/WPSideBar">
				<?php ! dynamic_sidebar( 'kakina-home-sidebar' ); ?>
					<?php
					the_widget( 'WC_Widget_Product_Search', 'title=Search', 'before_title=<h3 class="widget-title">&after_title=</h3>' );
					the_widget( 'WC_Widget_Product_Categories', 'title=Categories', 'before_title=<h3 class="widget-title">&after_title=</h3>' );
					?>
			</aside>
		<div class="col-md-9 rsrc-main">                                   
			<div <?php post_class( 'rsrc-post-content' ); ?>>                                                      
				<div class="entry-content">
					<?php
					$loop = new WP_Query( array(
						'post_type' => 'product',
					) );
					if ( $loop->have_posts() ) :
						if ( get_theme_mod( 'front_page_demo_style', 'style-one' ) == 'style-one' ) {
							get_template_part( 'template-parts/demo-layout', 'one' );
						} else {
							get_template_part( 'template-parts/demo-layout', 'two' );
						}
					else :
						?>
						<p class="text-center">	
							<?php esc_html_e( 'No products found', 'kakina' ); ?>
						</p>
					<?php endif; ?>
				</div>                                                       
			</div>        
		</div>
	</div>
	<!-- end content container -->
	<?php get_footer(); ?>

	<?php
} else { // Display blog posts.
	include( get_home_template() );
}
