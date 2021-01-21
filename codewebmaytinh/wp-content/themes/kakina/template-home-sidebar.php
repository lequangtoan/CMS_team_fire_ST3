<?php
/**
 *
 * Template name: Homepage with sidebar
 * The template for displaying homepage.
 *
 * @package kakina
 */
get_header();
?>

<?php get_template_part( 'template-part', 'head' ); ?>

<!-- start content container -->
<div class="row rsrc-content"> 
	<?php
	$section_on	 = get_post_meta( get_the_ID(), 'kakina_slider_on', true );
	$columns	 = ( 12 - absint( get_theme_mod( 'left-sidebar-size', 3 ) ) );
	?>        
	<?php if ( $section_on == 'on' && class_exists( 'WooCommerce' ) ) { ?>
		<?php get_template_part( 'template-part', 'home-cats' ); ?>
	<?php } ?>
	<?php get_sidebar( 'home' ); ?>   
	<div class="col-md-<?php echo $columns; ?> rsrc-main">        
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>                           
				<div <?php post_class( 'rsrc-post-content' ); ?>>                                                      
					<div class="entry-content">                           
						<?php the_content(); ?>                            
					</div>                                                       
				</div>        
			<?php endwhile; ?>        
		<?php else: ?>            
			<?php get_template_part( 'content', 'none' ); ?>        
		<?php endif; ?>    
	</div>
</div>
<!-- end content container -->
<?php get_footer(); ?>