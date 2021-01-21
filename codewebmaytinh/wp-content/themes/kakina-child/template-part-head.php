<div class="container rsrc-container" role="main">
	<?php
	if ( is_front_page() || is_home() || is_404() ) {
		$heading = 'h1';
		$desc	 = 'h2';
	} else {
		$heading = 'h2';
		$desc	 = 'h3';
	}
	?>
	<div class="top-section row">
		<div class="top-infobox text-left col-xs-4">
			<?php if ( get_theme_mod( 'infobox-text-left', '' ) != '' ) {
				echo wp_kses_post( get_theme_mod( 'infobox-text-left' ) );
			} ?>
		</div>
		<div class="top-infobox text-center col-xs-4">
			<?php if ( get_theme_mod( 'infobox-text-center', '' ) != '' ) {
				echo wp_kses_post( get_theme_mod( 'infobox-text-center' ) );
			} ?>
		</div>
		<div class="header-login text-right col-xs-4">
			<?php if ( class_exists( 'WooCommerce' ) && get_theme_mod( 'my-account-check', 1 ) != 0 ) { // Login Register ?>
				<?php if ( is_user_logged_in() ) { ?>
					<a href="<?php echo get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ); ?>" title="<?php _e( 'My Account', 'kakina' ); ?>"><?php _e( 'My Account', 'kakina' ); ?></a>
				<?php } else { ?>
					<a href="<?php echo get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ); ?>" title="<?php _e( 'Login / Register', 'kakina' ); ?>"><?php _e( 'Login / Register', 'kakina' ); ?></a>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
	<div class="header-section row" >
		<?php // Site title/logo ?>
		<header id="site-header" class="site-logo hidden-xs rsrc-header text-center" role="banner">
			<?php if ( get_theme_mod( 'header-logo', '' ) != '' ) : ?>
	            <div class="rsrc-header-img">
	                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_mod( 'header-logo' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a>
	            </div>
			<?php else : ?>
	            <div class="rsrc-header-text">
	                <<?php echo $heading ?> class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a></<?php echo $heading ?>>
	                <<?php echo $desc ?> class="site-desc"><?php esc_attr( bloginfo( 'description' ) ); ?></<?php echo $desc ?>>
	            </div>
			<?php endif; ?>
		</header>


		<?php // if ( has_nav_menu( 'main_menu' ) ) : ?>
			<div class="rsrc-top-menu col-md-7 col-sm-12" >
				<nav id="site-navigation" class="navbar navbar-inverse" role="navigation">

	                <div class="navbar-header row">
	                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-1-collapse">
	                        <span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'kakina' ); ?></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                    </button>
						<header class="visible-xs-inline-block col-xs-5 responsive-title">
							<?php if ( get_theme_mod( 'header-logo', '' ) != '' ) : ?>
		                        <div class="rsrc-header-img menu-img text-left">
		                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_mod( 'header-logo' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a>
		                        </div>
							<?php else : ?>
		                        <div class="rsrc-header-text menu-text">
		                            <<?php echo $heading ?> class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a></<?php echo $heading ?>>
		                        </div>
							<?php endif; ?>
						</header>
						<div class="visible-xs-inline-block text-right col-xs-5 no-gutter responsive-cart">
							<?php if ( function_exists( 'kakina_header_cart' ) ) { kakina_header_cart();} ?>
						</div>
	                </div>
					<?php
					wp_nav_menu( array(
						'theme_location'	 => 'main_menu',
						'depth'				 => 3,
						'container'			 => 'div',
						'container_class'	 => 'collapse navbar-collapse navbar-1-collapse',
						'menu_class'		 => 'nav navbar-nav',
						'fallback_cb'		 => 'wp_bootstrap_navwalker::fallback',
						'walker'			 => new kakina_wp_bootstrap_navwalker() )
					);
					?>
				</nav>
				<div class="site-description clear clearfix "><?php bloginfo( 'description' ); ?></div>
			</div>
		<?php // endif; ?>
		<?php // Shopping Cart  ?>
		<div class="hidden-xs float-right head-cat-outter col-md-2 col-sm-6 ">
			<?php if ( function_exists( 'kakina_header_cart' ) ) {
				kakina_header_cart();
			} ?>
		</div>
	</div>
	<?php if ( get_theme_mod( 'search-bar-check', 1 ) == 1 && class_exists( 'WooCommerce' ) ) : ?>
		<?php get_template_part( 'template-part', 'searchbar' ); ?>
	<?php endif; ?>

