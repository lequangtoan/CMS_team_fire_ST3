<?php
/**
*
* Metaboxes
*
*/

add_action( 'cmb2_admin_init', 'kakina_homepage_template_metaboxes' );

function kakina_homepage_template_metaboxes() {
    
    if ( class_exists( 'WooCommerce' ) ) {
    $prefix = 'kakina';

  
   /**
	 * Repeatable Field Groups
	 */
	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix .'_home_settings',
		'title'        => __( 'Homepage Settings', 'kakina' ),
		'object_types' => array( 'page', ),
		'show_on'       => array( 'key' => 'page-template', 'value' => array( 'template-home.php', 'template-home-sidebar.php' ) ),
		'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true,
	) );
	$cmb_group->add_field( array(
        'name'   => __( 'Slider', 'kakina' ),
    		'desc'   => __( 'Enable or disable slider', 'kakina' ),
    		'id'     => $prefix .'_slider_on',
    		'default' => 'off',
        'type'    => 'radio_inline',
        'options' => array(
            'on' => __( 'On', 'kakina' ),
            'off'   => __( 'Off', 'kakina' ),
        ),
    ) );
	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix .'_home_slider',
		'type'        => 'group',
		'description' => __( 'Generate slider', 'kakina' ),
		'options'     => array(
			'group_title'   => __( 'Slide {#}', 'kakina' ), // {#} gets replaced by row number
			'add_button'    => __( 'Add another slide', 'kakina' ),
			'remove_button' => __( 'Remove slide', 'kakina' ),
			'sortable'      => true, 
		),
	) );
  $cmb_group->add_group_field( $group_field_id, array(
		'name'   => __( 'Image', 'kakina' ),
		'id'     => $prefix .'_image',
		'type' => 'file',
    'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
	) );
	$cmb_group->add_group_field( $group_field_id, array(
		'name'   => __( 'Slider Title', 'kakina' ),
		'id'     => $prefix .'_title',
		'type'   => 'text',
	) );
	$cmb_group->add_group_field( $group_field_id, array(
		'name' => __( 'Slider Description', 'kakina' ),
		'id'   => $prefix .'_desc',
		'type' => 'textarea_code',
	) );
	$cmb_group->add_group_field( $group_field_id, array(
		'name' => __( 'Button Text', 'kakina' ),
		'id'   => $prefix .'_button_text',
		'type' => 'text',
	) );
	$cmb_group->add_group_field( $group_field_id, array(
		'name' => __( 'Button URL', 'kakina' ),
		'id'   => $prefix .'_url',
		'type' => 'text_url',
	) );	
  }     
}
