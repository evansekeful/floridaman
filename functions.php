<?php
/**
 *******************************************************************************
 * //functions.php
 *******************************************************************************
 *
 * The theme functions.
 *
 * CODEX REF
 * https://codex.wordpress.org/Functions_File_Explained
 *
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
**/

if( !isset( $content_width ) ) {
    $content_width = 600;
}

// Theme Dependencies ~ best not remove these!
require_once locate_template('includes/class-tgm-plugin-activation.php');
require_once ( 'includes/bootstrap_walker.php' );

// Admin Customisations
require_once( 'config/admin.php' );
require_once( 'config/login.php' );

// Theme Specific Customisations
require_once( 'config/enqueue.php' );
require_once( 'config/menus.php' );
require_once( 'config/widgets.php' );
require_once( 'config/comments.php' );
require_once( 'config/support.php' );
require_once( 'config/breadcrumbs.php' );
require_once( 'config/pagination.php' );
require_once( 'config/woocommerce.php' );
require_once( 'config/styling.php' );

// Theme Recommended & Required Plugins
require_once( 'config/required_plugins.php' );

// Theme Options
require_once ( 'config/customizer.php' );

// Theme custom post types
// require_once( '' );

function theme_queue_js()
{
    if (!is_admin())
    {
        if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
            wp_enqueue_script( 'comment-reply' );
    }
}
add_action('get_header', 'theme_queue_js');


add_filter( "the_excerpt", "add_class_to_excerpt" );

function add_class_to_excerpt( $excerpt ) {
    return str_replace('<p', '<p class="card-title"', $excerpt);
}

// Enable script async
function async_scripts($url)
{
    if ( strpos( $url, '#asyncload') === false ) {
        return $url;
      }
    else if ( is_admin() ) {
        return str_replace( '#asyncload', '', $url );
      }
    else {
      	return str_replace( '#asyncload', '', $url )."' async='async";
      }
}
add_filter( 'clean_url', 'async_scripts', 11, 1 );

// Render navbar based on page type TODO: add store navbar
function render_navbar() {
  if ( is_front_page() ) {
    get_template_part("navbar", "frontpage");
  }
  else {
    get_template_part("navbar");
  }
}


?>
