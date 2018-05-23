<?php
function mychildtheme_enqueue_styles() {
   $parent_style = 'twentyseventeen';

   wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
   wp_enqueue_style( 'child-style',
       get_stylesheet_directory_uri() . '/style.css',
       array( $parent_style )
   );
}
add_action( 'wp_enqueue_scripts', 'mychildtheme_enqueue_styles' );
function adding_scripts() {

    wp_register_script('main',get_stylesheet_directory_uri() . '/main.js', array('jquery'),'1.1', true);
    wp_enqueue_script('main');
}
    
add_action( 'wp_enqueue_scripts', 'adding_scripts' );

function my_videos( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = array(
		'id' => 'my_video',
		'title' => esc_html__( 'My Video', 'my-videos' ),
		'post_types' => array( 'video' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => false,
		'fields' => array(
			array(
				'id' => $prefix . 'video_url',
				'type' => 'text',
				'name' => esc_html__( 'url', 'my-videos' ),
			),
			array(
				'id' => $prefix . 'embed',
				'type' => 'text',
				'name' => esc_html__( 'Embed', 'my-videos' ),
			),
			array(
				'id' => $prefix . 'aspect_ratio',
				'name' => esc_html__( 'Aspect Ratio', 'my-videos' ),
				'type' => 'select_advanced',
				'placeholder' => esc_html__( 'Select Aspect Ratio', 'my-videos' ),
				'options' => array(
					'16:9' => 'Wide Screen',
					'4:3' => 'Standard',
				),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'my_videos' );





function my_social( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = array(
		'id' => 'my_social',
		'title' => esc_html__( 'My Social', 'my-social' ),
		'post_types' => array( 'social'),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => false,
		'fields' => array(
			array(
				'id' => $prefix . 'url',
				'type' => 'url',
				'name' => esc_html__( 'URL', 'my-social' ),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'my_social' );





?>