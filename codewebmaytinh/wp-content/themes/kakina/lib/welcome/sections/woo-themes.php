<?php
/**
 * Woo Themes Template
 */
?>
<div id="woo_themes" class="kakina-tab-pane">

	<?php
		$current_theme = wp_get_theme();
	?>

	<div class="kakina-tab-pane-center">

		<h1><?php esc_html_e( 'Get a whole new look for your site', 'kakina' ); ?></h1>

		<p><?php esc_html_e( 'Below you will find a selection of our free WooCommerce themes that will totally transform the look of your site.', 'kakina' ); ?></p>

	</div>


	<div class="kakina-tab-pane-half kakina-tab-pane-first-half">

		<!-- Alpha Store -->
		<div class="kakina-child-theme-container">
			<div class="kakina-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/lib/welcome/img/alpha-store.jpg' ); ?>" alt="<?php printf( esc_html__( '%s Theme', 'kakina' ), 'Alpha Store'); ?>" />
			</div>
			<div class="kakina-child-theme-details">
				<?php if ( 'Alpha Store' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Alpha Store</span>
						<a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-theme&theme=kakina' ), 'install-theme_kakina' ) ); ?>" class="button button-primary install right"><?php printf( __( 'Install %s now', 'kakina' ), '<span class="screen-reader-text">Alpha Store</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="<?php echo esc_url('http://preview.themes4wp.com/?theme=Alpha%20Store'); ?>"><?php esc_html_e( 'Live Preview','kakina'); ?></a>
						<div class="kakina-clear"></div>
					</div>
				<?php } else { ?>
					<div class="theme-details active">
						<span class="theme-name"><?php printf( 'Alpha Store - %s', esc_html__( 'Current theme','kakina') ); ?></span>
						<a class="button button-secondary customize right" target="_blank" href="<?php echo wp_customize_url(); ?>"><?php esc_html_e( 'Customize','kakina'); ?></a>
						<div class="kakina-clear"></div>
					</div>
				<?php } ?>
			</div>
		</div>
		
		<!-- MaxStore -->
		<div class="kakina-child-theme-container">
			<div class="kakina-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/lib/welcome/img/maxstore.jpg' ); ?>" alt="<?php printf( esc_html__( '%s Theme', 'kakina' ), 'MaxStore'); ?>" />
			</div>
			<div class="kakina-child-theme-details">
				<?php if ( 'MaxStore' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">MaxStore</span>
						<a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-theme&theme=maxstore' ), 'install-theme_maxstore' ) ); ?>" class="button button-primary install right"><?php printf( __( 'Install %s now', 'kakina' ), '<span class="screen-reader-text">MaxStore</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="<?php echo esc_url('http://preview.themes4wp.com/?theme=MaxStore'); ?>"><?php esc_html_e( 'Live Preview','kakina'); ?></a>
						<div class="kakina-clear"></div>
					</div>
				<?php } else { ?>
					<div class="theme-details active">
						<span class="theme-name"><?php printf( 'MaxStore - %s', esc_html__( 'Current theme','kakina') ); ?></span>
						<a class="button button-secondary customize right" target="_blank" href="<?php echo wp_customize_url(); ?>"><?php esc_html_e( 'Customize','kakina'); ?></a>
						<div class="kakina-clear"></div>
					</div>
				<?php } ?>
			</div>
		</div>


	</div>

	<div class="kakina-tab-pane-half">
		
		<!-- Giga Store -->
		<div class="kakina-child-theme-container">
			<div class="kakina-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/lib/welcome/img/giga-store.jpg'); ?>" alt="<?php printf( esc_html__( '%s Theme', 'kakina' ), 'Giga Store'); ?>" />
			</div>
			<div class="kakina-child-theme-details">
				<?php if ( 'Giga Store' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Giga Store</span>
						<a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-theme&theme=giga-store' ), 'install-theme_giga-store' ) ); ?>"class="button button-primary install right"><?php printf( __( 'Install %s now', 'kakina' ), '<span class="screen-reader-text">Giga Store</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="<?php echo esc_url('http://demo.themes4wp.com/giga-store/'); ?>"><?php esc_html_e( 'Live Preview','kakina'); ?></a>
						<div class="kakina-clear"></div>
					</div>
				<?php } else { ?>
					<div class="theme-details active">
						<span class="theme-name"><?php printf( 'Giga Store - %s', esc_html__( 'Current theme','kakina') ); ?></span>
						<a class="button button-secondary customize right" target="_blank" href="<?php echo wp_customize_url(); ?>"><?php esc_html_e( 'Customize','kakina'); ?></a>
						<div class="kakina-clear"></div>
					</div>
				<?php } ?>
			</div>
		</div>
		
		<!-- Kakina -->
		<div class="kakina-child-theme-container">
			<div class="kakina-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/lib/welcome/img/kakina.jpg' ); ?>" alt="<?php printf( esc_html__( '%s Theme', 'kakina' ), 'Kakina'); ?>" />
			</div>
			<div class="kakina-child-theme-details">
				<?php if ( 'Kakina' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Kakina</span>
						<a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-theme&theme=kakina' ), 'install-theme_kakina' ) ); ?>" class="button button-primary install right"><?php printf( __( 'Install %s now', 'kakina' ), '<span class="screen-reader-text">Kakina</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="<?php echo esc_url('http://preview.themes4wp.com/?theme=Kakina'); ?>"><?php esc_html_e( 'Live Preview','kakina'); ?></a>
						<div class="kakina-clear"></div>
					</div>
				<?php } else { ?>
					<div class="theme-details active">
						<span class="theme-name"><?php printf( 'Kakina - %s', esc_html__( 'Current theme','kakina') ); ?></span>
						<a class="button button-secondary customize right" target="_blank" href="<?php echo wp_customize_url(); ?>"><?php esc_html_e( 'Customize','kakina'); ?></a>
						<div class="kakina-clear"></div>
					</div>
				<?php } ?>
			</div>
		</div>

	</div>

</div>
