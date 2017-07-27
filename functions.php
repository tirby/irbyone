<?php
/**
 * Codelation Default Default functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Codelation Default
 * @since Codelation Default 0.1
 */

/**
 * Codelation Default Default only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
  require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'Codelation Default_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own Codelation Default_setup() function to override in a child theme.
 *
 * @since Codelation Default 0.1
 */
function Codelation Default_setup() {

  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

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
   *  @since Codelation Default Default 1.2
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
    'primary' => __( 'Primary Menu', 'Codelation Default' ),
  ) );

  add_action( 'wp_enqueue_scripts', 'Codelation Default_enqueue_styles' );
}

endif; // Codelation Default_setup

add_action('after_setup_theme', 'Codelation Default_setup');

function Codelation Default_enqueue_styles() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
}

function Codelation Default_the_custom_logo() {}

function Codelation Default_body_classes( $classes ) {
  // Adds a class of custom-background-image to sites with a custom background image.
  if ( get_background_image() ) {
    $classes[] = 'custom-background-image';
  }

  // Adds a class of group-blog to sites with more than 1 published author.
  if ( is_multi_author() ) {
    $classes[] = 'group-blog';
  }

  // Adds a class of hfeed to non-singular pages.
  if ( ! is_singular() ) {
    $classes[] = 'hfeed';
  }

  return $classes;
}

add_filter( 'body_class', 'Codelation Default_body_classes' );

// Register Footer Menu
register_nav_menus(
  array(
    'footer_menu' => 'Footer Menu',
  )
);
