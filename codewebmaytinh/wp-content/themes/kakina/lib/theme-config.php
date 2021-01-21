<?php

/**
 * Kirki Advanced Customizer
 * 
 * @package kakina
 */
// Early exit if Kirki is not installed
if ( !class_exists( 'Kirki' ) ) {
	return;
}

// Load language for the theme options
load_theme_textdomain( 'kakina', get_template_directory() . '/languages' );

/* Register Kirki config */
Kirki::add_config( 'kakina_settings', array(
	'capability'	 => 'edit_theme_options',
	'option_type'	 => 'theme_mod',
) );

/**
 * Add sections
 */
if ( class_exists( 'WooCommerce' ) && get_option( 'show_on_front' ) != 'page' ) {
	Kirki::add_section( 'kakina_woo_demo_section', array(
		'title'		 => __( 'WooCommerce Homepage Demo', 'kakina' ),
		'priority'	 => 10,
	) );
}
Kirki::add_section( 'sidebar_section', array(
	'title'			 => __( 'Sidebars', 'kakina' ),
	'priority'		 => 10,
	'description'	 => __( 'Sidebar layouts.', 'kakina' ),
) );

Kirki::add_section( 'layout_section', array(
	'title'			 => __( 'Main styling', 'kakina' ),
	'priority'		 => 10,
	'description'	 => __( 'Define theme layout', 'kakina' ),
) );

Kirki::add_section( 'top_bar_section', array(
	'title'			 => __( 'Top Bar', 'kakina' ),
	'priority'		 => 10,
	'description'	 => __( 'Top bar text', 'kakina' ),
) );

Kirki::add_section( 'search_bar_section', array(
	'title'			 => __( 'Search Bar & Social', 'kakina' ),
	'priority'		 => 10,
	'description'	 => __( 'Search and social icons', 'kakina' ),
) );

Kirki::add_section( 'site_bg_section', array(
	'title'		 => __( 'Site Background', 'kakina' ),
	'priority'	 => 10,
) );

if ( class_exists( 'WooCommerce' ) ) {
	Kirki::add_section( 'woo_section', array(
		'title'		 => __( 'WooCommerce', 'kakina' ),
		'priority'	 => 10,
	) );
}
Kirki::add_section( 'links_section', array(
	'title'		 => __( 'Theme Important Links', 'kakina' ),
	'priority'	 => 190,
) );

Kirki::add_field( 'kakina_settings', array(
	'type'			 => 'switch',
	'settings'		 => 'demo_front_page',
	'label'			 => __( 'Enable Demo Homepage?', 'kakina' ),
	'description'	 => sprintf( __( 'When the theme is first installed and WooCommerce plugin activated, the demo mode would be turned on. This will display some sample/example content to show you how the website can be possibly set up. When you are comfortable with the theme options, you should turn this off. You can create your own unique homepage - Check the %s page for more informations.', 'kakina' ), '<a href="' . esc_url( admin_url( 'themes.php?page=kakina-welcome' ) ) . '"><strong>' . __( 'Theme info', 'kakina' ) . '</strong></a>' ),
	'section'		 => 'kakina_woo_demo_section',
	'default'		 => 1,
	'priority'		 => 10,
) );
Kirki::add_field( 'kakina_settings', array(
	'type'				 => 'radio-buttonset',
	'settings'			 => 'front_page_demo_style',
	'label'				 => esc_html__( 'Homepage Demo Styles', 'kakina' ),
	'description'		 => sprintf( __( 'The demo homepage is enabled. You can choose from some predefined layouts or make your own %s.', 'kakina' ), '<a href="' . esc_url( admin_url( 'themes.php?page=kakina-welcome' ) ) . '"><strong>' . __( 'custom homepage template', 'kakina' ) . '</strong></a>' ),
	'section'			 => 'kakina_woo_demo_section',
	'default'			 => 'style-one',
	'priority'			 => 10,
	'choices'			 => array(
		'style-one'	 => __( 'Layout one', 'kakina' ),
		'style-two'	 => __( 'Layout two', 'kakina' ),
	),
	'active_callback'	 => array(
		array(
			'setting'	 => 'demo_front_page',
			'operator'	 => '==',
			'value'		 => 1,
		),
	),
) );
Kirki::add_field( 'kakina_settings', array(
	'type'				 => 'repeater',
	'label'				 => __( 'Slider', 'kakina' ),
	'section'			 => 'kakina_woo_demo_section',
	'priority'			 => 10,
	'settings'			 => 'repeater_slider',
	'default'			 => array(
		array(
			'kakina_image_id'	 => get_template_directory_uri() . '/img/demo/slider1.jpg',
			'kakina_url'		 => '#',
		),
		array(
			'kakina_image_id'	 => get_template_directory_uri() . '/img/demo/slider2.jpg',
			'kakina_url'		 => '#',
		),
	),
	'fields'			 => array(
		'kakina_image_id'	 => array(
			'type'		 => 'image',
			'label'		 => __( 'Image', 'kakina' ),
			'default'	 => '',
		),
		'kakina_url'		 => array(
			'type'		 => 'text',
			'label'		 => __( 'URL', 'kakina' ),
			'default'	 => '',
		),
	),
	'active_callback'	 => array(
		array(
			'setting'	 => 'demo_front_page',
			'operator'	 => '==',
			'value'		 => 1,
		),
	),
) );
Kirki::add_field( 'kakina_settings', array(
	'type'				 => 'custom',
	'settings'			 => 'demo_page_intro_widgets',
	'label'				 => __( 'Homepage Widgets', 'kakina' ),
	'section'			 => 'kakina_woo_demo_section',
	'description'		 => esc_html__( 'You can set your own widgets. Go to Appearance - Widgets and drag and drop your widgets to "Homepage Sidebar" area.', 'kakina' ),
	'priority'			 => 10,
	'active_callback'	 => array(
		array(
			'setting'	 => 'demo_front_page',
			'operator'	 => '==',
			'value'		 => 1,
		),
	),
) );
Kirki::add_field( 'kakina_settings', array(
	'type'				 => 'custom',
	'settings'			 => 'demo_page_intro',
	'label'				 => __( 'Products', 'kakina' ),
	'section'			 => 'kakina_woo_demo_section',
	'description'		 => esc_html__( 'If you dont see any products or categories on your homepage, you dont have any products probably. Create some products and categories first.', 'kakina' ),
	'priority'			 => 10,
	'active_callback'	 => array(
		array(
			'setting'	 => 'demo_front_page',
			'operator'	 => '==',
			'value'		 => 1,
		),
	),
) );
Kirki::add_field( 'kakina_settings', array(
	'type'			 => 'custom',
	'settings'		 => 'demo_dummy_content',
	'label'			 => __( 'Need Dummy Products?', 'kakina' ),
	'section'		 => 'kakina_woo_demo_section',
	'description'	 => sprintf( esc_html__( 'When the theme is first installed, you dont have any products probably. You can easily import dummy products with only few clicks. Check %s tutorial.', 'kakina' ), '<a href="' . esc_url( 'https://docs.woocommerce.com/document/importing-woocommerce-dummy-data/' ) . '" target="_blank"><strong>' . __( 'THIS', 'kakina' ) . '</strong></a>' ),
	'priority'		 => 10,
) );
Kirki::add_field( 'kakina_settings', array(
	'type'			 => 'custom',
	'settings'		 => 'demo_pro_features',
	'label'			 => __( 'Need More Features?', 'kakina' ),
	'section'		 => 'kakina_woo_demo_section',
	'description'	 => '<a href="' . esc_url( 'http://themes4wp.com/product/kakina-pro/' ) . '" target="_blank" class="button button-primary">' . sprintf( esc_html__( 'Learn more about %s PRO', 'kakina' ), 'Kakina' ) . '</a>',
	'priority'		 => 10,
) );

Kirki::add_field( 'kakina_settings', array(
	'type'			 => 'switch',
	'settings'		 => 'rigth-sidebar-check',
	'label'			 => __( 'Right Sidebar', 'kakina' ),
	'description'	 => __( 'Enable the Right Sidebar', 'kakina' ),
	'section'		 => 'sidebar_section',
	'default'		 => 1,
	'priority'		 => 10,
) );

Kirki::add_field( 'kakina_settings', array(
	'type'		 => 'radio-buttonset',
	'settings'	 => 'right-sidebar-size',
	'label'		 => __( 'Right Sidebar Size', 'kakina' ),
	'section'	 => 'sidebar_section',
	'default'	 => '3',
	'priority'	 => 10,
	'choices'	 => array(
		'1'	 => '1',
		'2'	 => '2',
		'3'	 => '3',
		'4'	 => '4',
	),
) );

Kirki::add_field( 'kakina_settings', array(
	'type'			 => 'switch',
	'settings'		 => 'left-sidebar-check',
	'label'			 => __( 'Left Sidebar', 'kakina' ),
	'description'	 => __( 'Enable the Left Sidebar', 'kakina' ),
	'section'		 => 'sidebar_section',
	'default'		 => 0,
	'priority'		 => 10,
) );

Kirki::add_field( 'kakina_settings', array(
	'type'		 => 'radio-buttonset',
	'settings'	 => 'left-sidebar-size',
	'label'		 => __( 'Left Sidebar Size', 'kakina' ),
	'section'	 => 'sidebar_section',
	'default'	 => '3',
	'priority'	 => 10,
	'choices'	 => array(
		'1'	 => '1',
		'2'	 => '2',
		'3'	 => '3',
		'4'	 => '4',
	),
) );

Kirki::add_field( 'kakina_settings', array(
	'type'		 => 'radio-buttonset',
	'settings'	 => 'footer-sidebar-size',
	'label'		 => __( 'Footer Widget Area Columns', 'kakina' ),
	'section'	 => 'sidebar_section',
	'default'	 => '3',
	'priority'	 => 10,
	'choices'	 => array(
		'12' => '1',
		'6'	 => '2',
		'4'	 => '3',
		'3'	 => '4',
	),
) );


Kirki::add_field( 'kakina_settings', array(
	'type'			 => 'image',
	'settings'		 => 'header-logo',
	'label'			 => __( 'Logo', 'kakina' ),
	'description'	 => __( 'Upload your logo', 'kakina' ),
	'section'		 => 'layout_section',
	'default'		 => '',
	'priority'		 => 10,
) );


Kirki::add_field( 'kakina_settings', array(
	'type'				 => 'textarea',
	'settings'			 => 'infobox-text-left',
	'label'				 => __( 'Top bar left', 'kakina' ),
	'description'		 => __( 'Top bar left text area', 'kakina' ),
	'help'				 => __( 'You can add custom text. Only text allowed!', 'kakina' ),
	'section'			 => 'top_bar_section',
	'sanitize_callback'	 => 'wp_kses_post',
	'default'			 => '',
	'priority'			 => 10,
) );
Kirki::add_field( 'kakina_settings', array(
	'type'				 => 'textarea',
	'settings'			 => 'infobox-text-center',
	'label'				 => __( 'Top bar center', 'kakina' ),
	'description'		 => __( 'Top bar center text area', 'kakina' ),
	'help'				 => __( 'You can add custom text. Only text allowed!', 'kakina' ),
	'section'			 => 'top_bar_section',
	'sanitize_callback'	 => 'wp_kses_post',
	'default'			 => '',
	'priority'			 => 10,
) );

Kirki::add_field( 'kakina_settings', array(
	'type'			 => 'switch',
	'settings'		 => 'search-bar-check',
	'label'			 => __( 'Search bar', 'kakina' ),
	'description'	 => __( 'Enable search bar with social icons', 'kakina' ),
	'section'		 => 'search_bar_section',
	'default'		 => 1,
	'priority'		 => 10,
) );
Kirki::add_field( 'kakina_settings', array(
	'type'				 => 'select',
	'settings'			 => 'shop-by-cat-menu',
	'label'				 => __( 'Shop By Category Menu', 'kakina' ),
	'section'			 => 'search_bar_section',
	'default'			 => '',
	'priority'			 => 10,
	'choices'			 => kakina_menu_list(),
	'active_callback'	 => array(
		array(
			'setting'	 => 'search-bar-check',
			'operator'	 => '==',
			'value'		 => 1,
		),
	)
) );
Kirki::add_field( 'kakina_settings', array(
	'type'				 => 'switch',
	'settings'			 => 'kakina_socials',
	'label'				 => __( 'Social Icons', 'kakina' ),
	'description'		 => __( 'Enable or Disable the social icons. Use max 6 icons.', 'kakina' ),
	'section'			 => 'search_bar_section',
	'default'			 => 0,
	'priority'			 => 10,
	'active_callback'	 => array(
		array(
			'setting'	 => 'search-bar-check',
			'operator'	 => '==',
			'value'		 => 1,
		),
	)
) );
Kirki::add_field( 'kakina_settings', array(
	'type'				 => 'text',
	'settings'			 => 'kakina_socials_text',
	'label'				 => __( 'Follow Us Text', 'kakina' ),
	'description'		 => __( 'Insert your text before social icons.', 'kakina' ),
	'help'				 => __( 'Leave blank to hide text.', 'kakina' ),
	'section'			 => 'search_bar_section',
	'default'			 => 'Follow Us',
	'priority'			 => 10,
	'active_callback'	 => array(
		array(
			'setting'	 => 'kakina_socials',
			'operator'	 => '==',
			'value'		 => 1,
		),
	)
) );
$s_social_links = array(
	'twp_social_facebook'	 => __( 'Facebook', 'kakina' ),
	'twp_social_twitter'	 => __( 'Twitter', 'kakina' ),
	'twp_social_google'		 => __( 'Google-Plus', 'kakina' ),
	'twp_social_instagram'	 => __( 'Instagram', 'kakina' ),
	'twp_social_pin'		 => __( 'Pinterest', 'kakina' ),
	'twp_social_youtube'	 => __( 'YouTube', 'kakina' ),
	'twp_social_reddit'		 => __( 'Reddit', 'kakina' ),
	'twp_social_linkedin'	 => __( 'LinkedIn', 'kakina' ),
	'twp_social_skype'		 => __( 'Skype', 'kakina' ),
	'twp_social_vimeo'		 => __( 'Vimeo', 'kakina' ),
	'twp_social_flickr'		 => __( 'Flickr', 'kakina' ),
	'twp_social_dribble'	 => __( 'Dribbble', 'kakina' ),
	'twp_social_envelope-o'	 => __( 'Email', 'kakina' ),
	'twp_social_rss'		 => __( 'Rss', 'kakina' ),
);

foreach ( $s_social_links as $keys => $values ) {
	Kirki::add_field( 'kakina_settings', array(
		'type'				 => 'text',
		'settings'			 => $keys,
		'label'				 => $values,
		'description'		 => sprintf( __( 'Insert your custom link to show the %s icon.', 'kakina' ), $values ),
		'help'				 => __( 'Leave blank to hide icon.', 'kakina' ),
		'section'			 => 'search_bar_section',
		'default'			 => '',
		'priority'			 => 10,
		'active_callback'	 => array(
			array(
				'setting'	 => 'search-bar-check',
				'operator'	 => '==',
				'value'		 => 1,
			),
		)
	) );
}

if ( function_exists( 'YITH_WCWL' ) ) {
	Kirki::add_field( 'kakina_settings', array(
		'type'			 => 'toggle',
		'settings'		 => 'wishlist-top-icon',
		'label'			 => __( 'Header Wishlist icon', 'kakina' ),
		'description'	 => __( 'Enable or disable heart icon with counter in header', 'kakina' ),
		'section'		 => 'woo_section',
		'default'		 => 0,
		'priority'		 => 10,
	) );
}
Kirki::add_field( 'kakina_settings', array(
	'type'			 => 'toggle',
	'settings'		 => 'my-account-check',
	'label'			 => __( 'My Account/Login link', 'kakina' ),
	'description'	 => __( 'Enable or disable header My Account/Login/Register link', 'kakina' ),
	'section'		 => 'woo_section',
	'default'		 => 1,
	'priority'		 => 10,
) );
Kirki::add_field( 'kakina_settings', array(
	'type'			 => 'toggle',
	'settings'		 => 'cart-top-icon',
	'label'			 => __( 'Header Cart', 'kakina' ),
	'description'	 => __( 'Enable or disable header cart', 'kakina' ),
	'section'		 => 'woo_section',
	'default'		 => 1,
	'priority'		 => 10,
) );
Kirki::add_field( 'kakina_settings', array(
	'type'			 => 'toggle',
	'settings'		 => 'woo-breadcrumbs',
	'label'			 => __( 'Breadcrumbs', 'kakina' ),
	'description'	 => __( 'Enable or disable breadcrumbs on WooCommerce pages', 'kakina' ),
	'section'		 => 'woo_section',
	'default'		 => 0,
	'priority'		 => 10,
) );
Kirki::add_field( 'kakina_settings', array(
	'type'		 => 'toggle',
	'settings'	 => 'woo_gallery_zoom',
	'label'		 => esc_attr__( 'Gallery zoom', 'kakina' ),
	'section'	 => 'woo_section',
	'default'	 => 0,
	'priority'	 => 10,
) );
Kirki::add_field( 'kakina_settings', array(
	'type'		 => 'toggle',
	'settings'	 => 'woo_gallery_lightbox',
	'label'		 => esc_attr__( 'Gallery lightbox', 'kakina' ),
	'section'	 => 'woo_section',
	'default'	 => 1,
	'priority'	 => 10,
) );
Kirki::add_field( 'kakina_settings', array(
	'type'		 => 'toggle',
	'settings'	 => 'woo_gallery_slider',
	'label'		 => esc_attr__( 'Gallery slider', 'kakina' ),
	'section'	 => 'woo_section',
	'default'	 => 0,
	'priority'	 => 10,
) );
Kirki::add_field( 'kakina_settings', array(
	'type'			 => 'slider',
	'settings'		 => 'archive_number_products',
	'label'			 => __( 'Number of products', 'kakina' ),
	'description'	 => __( 'Change number of products displayed per page in archive(shop) page.', 'kakina' ),
	'section'		 => 'woo_section',
	'default'		 => 24,
	'priority'		 => 10,
	'choices'		 => array(
		'min'	 => 2,
		'max'	 => 60,
		'step'	 => 1
	),
) );
Kirki::add_field( 'kakina_settings', array(
	'type'			 => 'slider',
	'settings'		 => 'archive_number_columns',
	'label'			 => __( 'Number of products per row', 'kakina' ),
	'description'	 => __( 'Change the number of product columns per row in archive(shop) page.', 'kakina' ),
	'section'		 => 'woo_section',
	'default'		 => 4,
	'priority'		 => 10,
	'choices'		 => array(
		'min'	 => 2,
		'max'	 => 5,
		'step'	 => 1
	),
) );

Kirki::add_field( 'kakina_settings', array(
	'type'		 => 'background',
	'settings'	 => 'background_site',
	'label'		 => __( 'Background', 'kakina' ),
	'section'	 => 'site_bg_section',
	'default'	 => array(
		'color'		 => '#fff',
		'image'		 => '',
		'repeat'	 => 'no-repeat',
		'size'		 => 'cover',
		'attach'	 => 'fixed',
		'position'	 => 'center-top',
		'opacity'	 => 100,
	),
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element'	 => 'body',
		),
	),
) );
$theme_links = array(
	'documentation'	 => array(
		'link'		 => esc_url( 'http://demo.themes4wp.com/documentation/category/kakina/' ),
		'text'		 => __( 'Documentation', 'kakina' ),
		'settings'	 => 'theme-docs',
	),
	'support'		 => array(
		'link'		 => esc_url( 'http://support.themes4wp.com/' ),
		'text'		 => __( 'Support', 'kakina' ),
		'settings'	 => 'theme-support',
	),
	'demo'			 => array(
		'link'		 => esc_url( 'http://demo.themes4wp.com/kakina/' ),
		'text'		 => __( 'View Demo', 'kakina' ),
		'settings'	 => 'theme-demo',
	),
	'rating'		 => array(
		'link'		 => esc_url( 'https://wordpress.org/support/view/theme-reviews/kakina?filter=5' ),
		'text'		 => __( 'Rate This Theme', 'kakina' ),
		'settings'	 => 'theme-rate',
	)
);

foreach ( $theme_links as $theme_link ) {
	Kirki::add_field( 'blogr_settings', array(
		'type'		 => 'custom',
		'settings'	 => $theme_link[ 'settings' ],
		'section'	 => 'links_section',
		'default'	 => '<div style="padding: 10px; text-align: center; font-size: 20px; font-weight: bold;"><a target="_blank" href="' . $theme_link[ 'link' ] . '" >' . esc_attr( $theme_link[ 'text' ] ) . ' </a></div>',
		'priority'	 => 10,
	) );
}

function kakina_configuration() {

	$config[ 'color_back' ]		 = '#192429';
	$config[ 'color_accent' ]	 = '#008ec2';
	$config[ 'width' ]			 = '25%';

	return $config;
}

add_filter( 'kirki/config', 'kakina_configuration' );

/**
 * Add custom CSS styles
 */
function kakina_enqueue_header_css() {

	$columns = get_theme_mod( 'archive_number_columns', 4 );

	if ( $columns == '2' ) {
		$css = '@media only screen and (min-width: 769px) {.archive .rsrc-content .woocommerce ul.products li.product{width: 48.05%}}';
	} elseif ( $columns == '3' ) {
		$css = '@media only screen and (min-width: 769px) {.archive .rsrc-content .woocommerce ul.products li.product{width: 30.75%;}}';
	} elseif ( $columns == '5' ) {
		$css = '@media only screen and (min-width: 769px) {.archive .rsrc-content .woocommerce ul.products li.product{width: 16.95%;}}';
	} else {
		$css = '';
	}
	wp_add_inline_style( 'kirki-styles-kakina_settings', $css );
}

add_action( 'wp_enqueue_scripts', 'kakina_enqueue_header_css', 9999 );

function kakina_menu_list() {
	$menus			 = array();
	$menus[ 0 ]		 = __( 'Select Menu', 'kakina' );
	$menus_select	 = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
	foreach ( $menus_select as $menu ) {
		$menus[ $menu->term_id ] = $menu->name;
	}
	return $menus;
}
