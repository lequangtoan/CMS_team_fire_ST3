<?php

add_filter( 'rwmb_meta_boxes', 'hrm_register_meta_boxes' );

function hrm_register_meta_boxes( $meta_boxes )
{
	$meta_boxes[]  = array(
		'title'  => __( 'Cấu hình bài viết', 'hrm' ),
		'pages'  => array( 'product' ),
		'fields' => array(
			array(
				'id'   => 'pr_code',
				'name' => __( 'Mã sản phẩm', 'hrm' ),
				'type' => 'text',
			),
			array(
				'id'   => 'pr_thuoc_tinh',
				'name' => __( 'Thuộc tính', 'hrm' ),
				'type' => 'text',
			),
			array(
				'id'   => 'pr_nha_sx',
				'name' => __( 'Nhà sản xuất', 'hrm' ),
				'type' => 'text',
			),
			array(
				'id'   => 'pr_bao_hanh',
				'name' => __( 'Bảo hành', 'hrm' ),
				'type' => 'text',
			),
			array(
				'id'   => 'pr_tinh_trang',
				'name' => __( 'Tình trạng hàng hoá', 'hrm' ),
				'type' => 'select',
				'options'     => array(
					'Còn hàng'     => esc_html__( 'Còn hàng', 'hrm' ),
					'Hết hàng'     => esc_html__( 'Hết hàng', 'hrm' ),
					'Hàng đang về' => esc_html__( 'Hàng đang về', 'hrm' ),
				),
				'multiple'    => false,
				'std'         => 'Còn hàng',
			),
			// array(
			// 	'id'   => 'pr_color',
			// 	'name' => __( 'Màu sắc', 'hrm' ),
			// 	'type' => 'wysiwyg',
			// 	'options' => array(
			// 		'textarea_rows' => 6,
			// 	),
			// ),
		),
	);
	return $meta_boxes;
}
