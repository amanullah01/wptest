<?php
if ( ! function_exists( 'wptest_setup' ) ) :

function wptest_setup() {


// Add default posts and comments RSS feed links to head.
//add_theme_support( 'automatic-feed-links' );

/*
* Let WordPress manage the document title.
* By adding theme support, we declare that this theme does not use a
* hard-coded <title> tag in the document head, and expect WordPress to
* provide it for us.
*/
add_theme_support( 'title-tag' );

/*
* Enable support for custom logo.
*
*/
add_theme_support( 'custom-logo', array(
'height'      => 240,
'width'       => 240,
'flex-height' => true,
) );

/*
* Enable support for Post Thumbnails on posts and pages.
*
* @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
*/
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1200, 9999 );

// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
'primary-menu' => __( 'Main Menu', 'wptest' ),
'top-menu' => __( 'Top Menu', 'wptest' ),
'mobile-menu' => __( 'Mobile Menu', 'wptest' ),
) );

/*
* Switch default core markup for search form, comment form, and comments
* to output valid HTML5.
*/
add_theme_support( 'html5', array(
'search-form',
'comment-form',
'comment-list',
'gallery',
'caption',
) );

/*
* Enable support for Post Formats.
*
* See: https://codex.wordpress.org/Post_Formats
*/
add_theme_support( 'post-formats', array(
'aside',
'image',
'video',
'quote',
'link',
'gallery',
'status',
'audio',
'chat',
) );


// Indicate widget sidebars can use selective refresh in the Customizer.
add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; 
add_action( 'after_setup_theme', 'wptest_setup' );

/**
* Enqueues scripts and styles.
*
*/
function shellbd_resources() {}

// Theme stylesheet.
// wp_enqueue_style( 'style', get_stylesheet_uri() );
// wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/css/shellbd.css', array(), VERSION, 'all' );
	require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';
	require get_template_directory() . '/inc/widget.php';
?>