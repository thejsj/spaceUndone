<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
	
//Thumnails
add_theme_support( 'post-thumbnails' ); 
add_image_size( 'category-thumb', 280, 9999 ); //300 pixels wide (and unlimited height)
add_image_size( 'square', 180, 180 ); //300 pixels wide (and unlimited height)

//Pieces
/*
 * This is reserved for adding a new custom post type: Pieces
 * A piece is different from a post in that, is is intended for portfolio pieces instead of blogging posts...
 */
/*
register_post_type( 'piece',
	array(
		'labels' => array(
			'name' => __( 'Pieces' ),
			'singular_name' => __( 'Piece' )
		),
	'taxonomies'=> array('category'),
	'public' => true,
	'has_archive' => true,
	'rewrite' => array('slug' => 'pieces')
	)
);

$add = array('thumbnail', 'trackbacks', 'page-attributes','custom-fields');

add_post_type_support( 'piece', $add );

register_taxonomy('Type', 'piece', array('hierarchical' => 'False', 'label'=> 'Types'));function new_excerpt_length($length) {	return 30;}add_filter('excerpt_length', 'new_excerpt_length');
*/

/* To Remove CSS from Gallery */
add_filter('gallery_style', create_function('$a', 'return "<div class=\'gallery\'>";'));

/* Register Menus */
add_action( 'init', 'register_nav_menu' );
if ( function_exists( 'register_nav_menu' ) ) {
	register_nav_menu( 'primary', 'Primary Menu' );
}

/* For CUstom Ordering Plugin */
if ( class_exists("global_posts_ordering") ) {
   $global_posts_ordering = new global_posts_ordering(array("post"));
}

?>
