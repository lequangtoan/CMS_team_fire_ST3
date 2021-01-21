
</div><!-- /.container --><!-- end main container -->

<div class="box_footer">
	<div class="container">
		<div class="row">
			<div class="menu-footer clearfix">
				<div class="col-xs-12">
					<nav class="menuBottom">
						<?php wp_nav_menu( array( 'theme_location' => 'footer' )  ); ?>
					</nav>
				</div>
			</div>
			<div class="footer-widget-outter clearfix">
				<div class="box_address">
					<div class="footer-widget-section clearfix">
						<?php for ( $i = 1; $i <= 3; $i ++ ) { ?>
						<div id="footer-sidebar-<?php echo $i ?>" class="footer-sidebar col-md-4 space">
							<?php
							if ( ! dynamic_sidebar( "footer-$i" ) )
								printf( __( 'This is the Footer Sidebar %s (widget area). Please go to <a href="%s">Appearance &rarr; Widgets</a> to add widgets to this area', 'hrm' ), $i, admin_url( 'widgets.php' ) );
							?>
						</div>
						<?php } ?>


					</div>
				</div>
			</div>
			<div class="footer-coppyright col-xs-12">
				<div class="design">

					<div class="headquarter">
						<?php dynamic_sidebar( "footer-address" ) ?>
					</div>
					<div class="coppyright">
						<div class="designer">
							<?php dynamic_sidebar( "coppyright" ) ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="back-top">
	<a href="#top"><span></span></a>
</div>

<?php wp_footer(); ?>
</body>
</html>