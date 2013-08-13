<?php


add_action('init', 'photography_register');

function photography_register () {

	//Arguments to create post type.
	$args = array(
	'label' => __('Photography'),
	'singular_label' => __('Photograph'),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => true,
	'has_archive' => true,
	'supports' => array('title', 'editor', 'thumbnail'),
	'rewrite' => array('slug' => 'photos', 'with_front' => false), );


	//Register type and custom taxonomy for type.
	register_post_type( 'photos' , $args);
	register_taxonomy("photo-types", array("photos"), array("hierarchical" => true, "label" => "Photo Types", "singular_label" => "Photo Type", "rewrite" => true, "slug" => 'photo-type'));
}

/*Adds Support for Featured Images**/
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size( 480, 320 );
}

?>