<?php

/**
 * Welcome Screen Class
 */
class kakina_Welcome {

	/**
	 * Constructor for the welcome screen
	 */
	public function __construct() {
		/* create dashbord page */
		add_action( 'admin_menu', array( $this, 'kakina_welcome_register_menu' ) );
		/* activation notice */
		add_action( 'admin_enqueue_scripts', array( $this, 'kakina_welcome_style_and_scripts' ) );

		/* load welcome screen */
		add_action( 'kakina_welcome', array( $this, 'kakina_welcome_getting_started' ), 10 );
		add_action( 'kakina_welcome', array( $this, 'kakina_welcome_actions_required' ), 20 );
		add_action( 'kakina_welcome', array( $this, 'kakina_welcome_contribute' ), 30 );
		add_action( 'kakina_welcome', array( $this, 'kakina_welcome_support' ), 40 );
		add_action( 'kakina_welcome', array( $this, 'kakina_welcome_free_pro' ), 50 );
		add_action( 'kakina_welcome', array( $this, 'kakina_welcome_woo_themes' ), 60 );

		/* activation notice */
		add_action( 'load-themes.php', array( $this, 'kakina_activation_admin_notice' ) );
	}

	/**
	 * Adds an admin notice upon successful activation.
	 */
	public function kakina_activation_admin_notice() {
		global $pagenow;

		if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET[ 'activated' ] ) ) {
			add_action( 'admin_notices', array( $this, 'kakina_welcome_admin_notice' ), 99 );
		}
	}

	/**
	 * Display an admin notice linking to the welcome screen
	 */
	public function kakina_welcome_admin_notice() {
		?>
		<div class="updated notice is-dismissible">
			<p><?php printf( esc_html( 'Welcome! Thank you for choosing %1s! To fully take advantage of the best our theme can offer please make sure you visit our %2s.', 'kakina' ), 'Kakina', '<a href="' . esc_url( admin_url( 'themes.php?page=kakina-welcome' ) ) . '">' . esc_html( 'welcome page', 'kakina' ) . '</a>' ); ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=kakina-welcome' ) ); ?>" class="button" style="text-decoration: none;"><?php printf( esc_html( 'Get started with %1s', 'kakina' ), 'Kakina' ); ?></a></p>
		</div>
		<?php
	}

	/**
	 * Creates the dashboard page
	 * @see  add_theme_page()
	 */
	public function kakina_welcome_register_menu() {
		add_theme_page( 'About Kakina', __( 'About Kakina', 'kakina' ), 'activate_plugins', 'kakina-welcome', array( $this, 'kakina_welcome_screen' ) );
	}

	/**
	 * Load welcome screen css and javascript
	 */
	public function kakina_welcome_style_and_scripts( $hook_suffix ) {
		if ( 'appearance_page_kakina-welcome' == $hook_suffix ) {
			wp_enqueue_style( 'kakina-welcome-screen-css', get_template_directory_uri() . '/lib/welcome/css/welcome.css' );
			wp_enqueue_script( 'kakina-welcome-screen-js', get_template_directory_uri() . '/lib/welcome/js/welcome.js', array( 'jquery' ) );
		}
	}

	/**
	 * Welcome screen content
	 */
	public function kakina_welcome_screen( $counter ) {
		require_once( ABSPATH . 'wp-load.php' );
		require_once( ABSPATH . 'wp-admin/admin.php' );
		require_once( ABSPATH . 'wp-admin/admin-header.php' );
		global $counter;
		?>

		<ul class="kakina-nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#getting_started" aria-controls="getting_started" role="tab" data-toggle="tab"><?php esc_html_e( 'Getting started', 'kakina' ); ?></a></li>
			<li role="presentation" class="kakina-tab kakina-w-red-tab"><a href="#actions_required" aria-controls="actions_required" role="tab" data-toggle="tab"><?php esc_html_e( 'Actions recommended', 'kakina' ); ?></a></li>
			<li role="presentation"><a href="#contribute" aria-controls="contribute" role="tab" data-toggle="tab"><?php esc_html_e( 'Contribute', 'kakina' ); ?></a></li>
			<li role="presentation"><a href="#support" aria-controls="support" role="tab" data-toggle="tab"><?php esc_html_e( 'Support', 'kakina' ); ?></a></li>
			<li role="presentation"><a href="#free_pro" aria-controls="free_pro" role="tab" data-toggle="tab"><?php esc_html_e( 'Free VS PRO', 'kakina' ); ?></a></li>
			<li role="presentation"><a href="#woo_themes" aria-controls="woo_themes" role="tab" data-toggle="tab"><?php esc_html_e( 'Woo Themes', 'kakina' ); ?></a></li>
		</ul>

		<div class="kakina-tab-content">

			<?php do_action( 'kakina_welcome' ); ?>

		</div>
		<?php
	}

	/**
	 * Getting started
	 */
	public function kakina_welcome_getting_started() {
		require_once( get_template_directory() . '/lib/welcome/sections/getting-started.php' );
	}

	/**
	 * Actions required
	 */
	public function kakina_welcome_actions_required() {
		require_once( get_template_directory() . '/lib/welcome/sections/actions-required.php' );
	}

	/**
	 * Contribute
	 */
	public function kakina_welcome_contribute() {
		require_once( get_template_directory() . '/lib/welcome/sections/contribute.php' );
	}

	/**
	 * Support
	 */
	public function kakina_welcome_support() {
		require_once( get_template_directory() . '/lib/welcome/sections/support.php' );
	}

	/**
	 * Free vs PRO
	 */
	public function kakina_welcome_free_pro() {
		require_once( get_template_directory() . '/lib/welcome/sections/free_pro.php' );
	}
	/**
  	 * Woo themes
  	 */
	public function kakina_welcome_woo_themes() {
		require_once( get_template_directory() . '/lib/welcome/sections/woo-themes.php' );
	}

}

$GLOBALS[ 'kakina_Welcome' ] = new kakina_Welcome();
