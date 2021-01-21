<?php if ( is_active_sidebar( 'kakina-footer-area' ) ) { ?>
	<div id="content-footer-section" class="row clearfix">
		<?php dynamic_sidebar( 'kakina-footer-area' ) ?>
	</div>
<?php } ?>    
<footer id="colophon" class="rsrc-footer" role="contentinfo">                
	<div class="row rsrc-author-credits">                    
		<p>                      
		<div class="text-center">
			<?php printf( __( 'Proudly powered by %s', 'kakina' ), '<a href="' . esc_url( "https://wordpress.org/" ) . '">WordPress</a>' ); ?>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s', 'kakina' ), '<a href="' . esc_url( "http://themes4wp.com/" ) . '" title="Free WooCommerce Theme">Kakina</a>', 'Themes4WP' ); ?>
		</div>                    
		</p>                
	</div>    
</footer>
<div id="back-top">
	<a href="#top"><span></span></a>
</div>
</div>
<!-- end main container -->
<?php wp_footer(); ?>
</body>
</html>