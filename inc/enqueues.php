<?php // CSS & JavaScript Enqueues

/**
 * Defer jQuery Parsing using the HTML5 defer property
 */

if (!(is_admin() )) {
  function defer_parsing_of_js ( $url ) {
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    // return "$url' defer ";
    return "$url' defer onload='";
  }
  add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
}

/**
 * Link to all theme CSS files.
 */
function prelude_theme_scripts() {
  // CSS
  wp_enqueue_style('prelude-css', get_template_directory_uri() . '/assets/css/theme.min.css', array(), THEME_VERSION );
  
  // Fonts
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed', array(), THEME_VERSION );
  wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/762e136566.js', array(), THEME_VERSION);
  
  // JS
  wp_enqueue_script('prelude-js', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), THEME_VERSION, true );
  wp_enqueue_script('niftynav-js', get_template_directory_uri() . '/assets/js/niftynav.min.js', THEME_VERSION, true );
  
  
}
add_action( 'wp_enqueue_scripts', 'prelude_theme_scripts' );
