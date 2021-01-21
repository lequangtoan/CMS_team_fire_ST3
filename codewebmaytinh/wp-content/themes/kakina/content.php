<article class="archive-article col-md-6"> 
	<div <?php post_class(); ?>>                            
		<?php if ( has_post_thumbnail() ) : ?>                               
			<div class="featured-thumbnail"><?php the_post_thumbnail( 'kakina-single' ); ?></div>                                                                                 
		<?php endif; ?>
		<header>
			<h2 class="page-header">                                
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'kakina' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
					<?php the_title(); ?>
				</a>                            
			</h2>
			<?php get_template_part( 'template-part', 'postmeta' ); ?>
		</header>  
		<div class="home-header text-center">                                                      
			<div class="entry-summary">
				<?php the_excerpt(); ?> 
			</div><!-- .entry-summary -->                                                                                                                       
			<div class="clear"></div>                                  
			<p>                                      
				<a class="btn btn-primary btn-md outline" href="<?php the_permalink(); ?>">
					<?php _e( 'Read more', 'kakina' ); ?> 
				</a>                                  
			</p>                            
		</div>                      
	</div>
	<div class="clear"></div>
</article>