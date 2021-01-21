<?php
/**
 * Getting started template
 */

?>

<div id="getting_started" class="kakina-tab-pane active">

	<div class="kakina-tab-pane-center">

		<h1 class="kakina-welcome-title"><?php printf( esc_html__( 'Welcome to %s!', 'kakina' ), 'Kakina PRO' ); ?></h1>

		<p><?php esc_html_e( 'Our elegant and professional WooCommerce theme, which turns your Wordpress to awesome eCommerce site.','kakina'); ?></p>
		<p><?php printf( esc_html__( 'We want to make sure you have the best experience using %1s and that is why we gathered here all the necessary informations for you. We hope you will enjoy using %2s, as much as we enjoy creating great products.', 'kakina' ), 'Kakina', 'Kakina' ); ?>

	</div>

	<hr />

	<div class="kakina-tab-pane-center">

		<h1><?php esc_html_e( 'Getting started', 'kakina' ); ?></h1>

		<h4><?php esc_html_e( 'Customize everything in a single place.' ,'kakina' ); ?></h4>
		<p><?php esc_html_e( 'Using the WordPress Customizer you can easily customize every aspect of the theme.', 'kakina' ); ?></p>
    <p><?php esc_html_e( 'This theme uses Kirki toolkit plugin to customize theme. This plugin adds advanced features to the WordPress customizer. Install the plugin before you go to the customizer.', 'kakina' ); ?></p>
		<p>
      <?php if ( is_plugin_active( 'kirki/kirki.php' ) ) { ?>
				<span class="kakina-w-activated button"><?php esc_html_e( 'Kirki is already activated', 'kakina' ); ?></span>
			<?php	} else { ?>
				<a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=kirki' ), 'install-plugin_kirki' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Install Kirki Toolkit', 'kakina' ); ?></a>
		  <?php	} ?>
      <a href="<?php echo wp_customize_url(); ?>" class="button button-primary"><?php esc_html_e( 'Go to Customizer', 'kakina' ); ?></a>
    </p>

	</div>

	<hr />

	<div class="kakina-tab-pane-center">

		<h1><?php esc_html_e( 'FAQ', 'kakina' ); ?></h1>

	</div>
  <div class="kakina-video-tutorial">
    <div class="kakina-tab-pane-half kakina-tab-pane-first-half">
  		<h4><?php esc_html_e( 'Theme Setup - step by step', 'kakina' ); ?></h4>
      <p><?php esc_html_e( 'You can check our video tutorial how to setup the theme. This may help you to understand how the theme works and check if you miss something when you create your website.', 'kakina' ); ?></p>
  	  <p><a href="<?php echo esc_url( 'http://demo.themes4wp.com/documentation/homepage-setup-kakina/' ); ?>" class="button"><?php esc_html_e( 'View how to do this', 'kakina' ); ?></a></p>
    </div>
    <div class="kakina-tab-pane-half video">
      <p class="youtube">
  			<iframe width="360" height="180" src="<?php echo esc_url( 'https://www.youtube.com/embed/prEeeenBhxc' ); ?>" frameborder="0" allowfullscreen></iframe>
  		</p>
    </div>
  </div>
  
	<div class="kakina-tab-pane-half kakina-tab-pane-first-half">

		<h4><?php esc_html_e( 'Create unique homepage', 'kakina' ); ?></h4>
		<p><?php esc_html_e( 'In the below documentation you will find an easy way to build an unique homepage design.', 'kakina' ); ?></p>
		<p><a href="<?php echo esc_url( 'http://demo.themes4wp.com/documentation/homepage-setup-kakina/#homepage-content' ); ?>" class="button"><?php esc_html_e( 'View how to do this', 'kakina' ); ?></a></p>

		<hr />
		
		<h4><?php esc_html_e( 'Dummy products', 'kakina' ); ?></h4>
		<p><?php esc_html_e( 'When the theme is first installed, you dont have any products probably. You can easily import dummy products with only few clicks.', 'kakina' ); ?></p>
		<p><a href="<?php echo esc_url( 'https://docs.woocommerce.com/document/importing-woocommerce-dummy-data/' ); ?>" class="button"><?php esc_html_e( 'View how to do this', 'kakina' ); ?></a></p>
    
	</div>

	<div class="kakina-tab-pane-half">

		<h4><?php esc_html_e( 'Using Shortcodes', 'kakina' ); ?></h4>
		<p><?php esc_html_e( 'Shortcodes allow you to create Buy Now buttons, insert products into pages, display related products or featured products, and more.', 'kakina' ); ?></p>
		<p><a href="<?php echo esc_url( 'http://demo.themes4wp.com/documentation/using-shortcodes/' ); ?>" class="button"><?php esc_html_e( 'View how to do this', 'kakina' ); ?></a></p>

		<hr />
    
    <h4><?php esc_html_e( 'Create a child theme', 'kakina' ); ?></h4>
		<p><?php esc_html_e( 'If you want to make changes to the theme\'s files, those changes are likely to be overwritten when you next update the theme. In order to prevent that from happening, you need to create a child theme. For this, please follow the documentation below.', 'kakina' ); ?></p>
		<p><a href="<?php echo esc_url( 'http://demo.themes4wp.com/documentation/how-to-create-a-child-theme/' ); ?>" class="button"><?php esc_html_e( 'View how to do this', 'kakina' ); ?></a></p>
		
	</div>

	<div class="kakina-clear"></div>

	<hr />

	<div class="kakina-tab-pane-center">

		<h1><?php esc_html_e( 'View full documentation', 'kakina' ); ?></h1>
		<p><?php printf( esc_html__( 'Need more details? Please check our full documentation for detailed information on how to use %s.', 'kakina' ), 'Kakina' ); ?></p>
		<p><a href="<?php echo esc_url( 'http://demo.themes4wp.com/documentation/category/kakina/' ); ?>" class="button button-primary"><?php esc_html_e( 'Read full documentation', 'kakina' ); ?></a></p>

	</div>

	<hr />

	<div class="kakina-tab-pane-center">
		<h1><?php esc_html_e( 'Recommended plugins', 'kakina' ); ?></h1>
	</div>

	<div class="kakina-tab-pane-half kakina-tab-pane-first-half">
		<!-- Kirki Toolkit -->
		<h4><?php esc_html_e( 'Kirki Toolkit', 'kakina' ); ?></h4>
		<p><?php esc_html_e( 'This theme uses Kirki toolkit plugin to customize theme. This plugin adds advanced features to the WordPress customizer. Install the plugin before you go to the customizer.', 'kakina' ); ?></p>
		<?php if ( is_plugin_active( 'kirki/kirki.php' ) ) { ?>
			<p><span class="kakina-w-activated button"><?php esc_html_e( 'Already activated', 'kakina' ); ?></span></p>
		<?php }	else { ?>
			<p><a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=kirki' ), 'install-plugin_kirki' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Install Kirki Toolkit', 'kakina' ); ?></a></p>
		<?php }	?>
    
		<hr />
    
		<!-- WooCommerce -->
		<h4><?php esc_html_e( 'WooCommerce', 'kakina' ); ?></h4>
		<p><?php esc_html_e( 'WooCommerce is a free eCommerce plugin that allows you to sell anything, beautifully. ', 'kakina' ); ?></p>
		<?php if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) { ?>
			<p><span class="kakina-w-activated button"><?php esc_html_e( 'Already activated', 'kakina' ); ?></span></p>
		<?php }	else { ?>
			<p><a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=woocommerce' ), 'install-plugin_woocommerce' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Install WooCommerce', 'kakina' ); ?></a></p>
		<?php } ?>
    
		<hr />
    
    <!-- CMB2 -->
		<h4><?php esc_html_e( 'CMB2', 'kakina' ); ?></h4>
		<p><?php esc_html_e( 'Homepage template options.', 'kakina' ); ?></p>
		<?php if ( is_plugin_active( 'cmb2/init.php' ) ) { ?>
			<p><span class="kakina-w-activated button"><?php esc_html_e( 'Already activated', 'kakina' ); ?></span></p>
		<?php }	else { ?>
			<p><a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=cmb2' ), 'install-plugin_cmb2' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Install CMB2', 'kakina' ); ?></a></p>
		<?php } ?>
    
		<hr />
    
		<!-- YITH WooCommerce Wishlist -->
		<h4><?php esc_html_e( 'YITH WooCommerce Wishlist', 'kakina' ); ?></h4>
		<p><?php esc_html_e( 'Offer to your visitors a chance to add the products of your woocommerce store to a wishlist page', 'kakina' ); ?></p>
		<?php if ( is_plugin_active( 'yith-woocommerce-wishlist/init.php' ) ) { ?>
				<p><span class="kakina-w-activated button"><?php esc_html_e( 'Already activated', 'kakina' ); ?></span></p>
		<?php } else { ?>
      <p><a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=yith-woocommerce-wishlist' ), 'install-plugin_yith-woocommerce-wishlist' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Install YITH WooCommerce Wishlist', 'kakina' ); ?></a></p>
  	<?php } ?>
    
		<hr />
    
	</div>

	<div class="kakina-tab-pane-half">
  
		<!-- YITH WooCommerce Compare -->
		<h4><?php esc_html_e( 'YITH WooCommerce Compare', 'kakina' ); ?></h4>
		<p><?php esc_html_e( 'YITH WooCommerce Compare plugin is an extension of WooCommerce plugin that allow your users to compare some products of your shop.', 'kakina' ); ?></p>
 		<?php if ( is_plugin_active( 'yith-woocommerce-compare/init.php' ) ) { ?>
 			<p><span class="kakina-w-activated button"><?php esc_html_e( 'Already activated', 'kakina' ); ?></span></p>
    <?php } else { ?> 
 			<p><a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=yith-woocommerce-compare' ), 'install-plugin_yith-woocommerce-compare' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Install YITH WooCommerce Compare', 'kakina' ); ?></a></p>
 		<?php }	?>
    
		<hr />
    
		<!-- YITH WooCommerce Quick View -->
		<h4><?php esc_html_e( 'YITH WooCommerce Quick View', 'kakina' ); ?></h4>
		<p><?php esc_html_e( 'This plugin adds the possibility to have a quick preview of the products right from product list.', 'kakina' ); ?></p>
		<?php if ( is_plugin_active( 'yith-woocommerce-quick-view/init.php' ) ) { ?>
			<p><span class="kakina-w-activated button"><?php esc_html_e( 'Already activated', 'kakina' ); ?></span></p>
		<?php	}	else { ?>
			<p><a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=yith-woocommerce-quick-view' ), 'install-plugin_yith-woocommerce-quick-view' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Install YITH WooCommerce Quick View', 'kakina' ); ?></a></p>
		<?php	} ?>
    
		<hr />
    
		<!-- WooCommerce Shortcodes -->
		<h4><?php esc_html_e( 'WooCommerce Shortcodes', 'kakina' ); ?></h4>
		<p><?php esc_html_e( 'This plugin provides a TinyMCE dropdown button for you use all WooCommerce shortcodes.', 'kakina' ); ?></p>
		<?php if ( is_plugin_active( 'woocommerce-shortcodes/woocommerce-shortcodes.php' ) ) { ?>
			<p><span class="kakina-w-activated button"><?php esc_html_e( 'Already activated', 'kakina' ); ?></span></p>
		<?php	}	else { ?>
			<p><a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=woocommerce-shortcodes' ), 'install-plugin_woocommerce-shortcodes' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Install WooCommerce Shortcodes', 'kakina' ); ?></a></p>
		<?php	} ?>
    
		<hr />

	</div>

	<div class="kakina-clear"></div>

</div>
