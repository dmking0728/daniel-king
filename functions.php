<?php

/*
 |------------------------------------------------------------------
 | Bootstraping a Theme
 |------------------------------------------------------------------
 |
 | This file is responsible for bootstrapping your theme. Autoloads
 | composer packages, checks compatibility and loads theme files.
 | Most likely, you don't need to change anything in this file.
 | Your theme custom logic should be distributed across a
 | separated components in the `/app` directory.
 |
 */

// Require Composer's autoloading file
// if it's present in theme directory.
if (file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
    require $composer;
}

// Before running we need to check if everything is in place.
// If something went wrong, we will display friendly alert.
$ok = require_once __DIR__ . '/bootstrap/compatibility.php';

if ($ok) {
    // Now, we can bootstrap our theme.
    $theme = require_once __DIR__ . '/bootstrap/theme.php';

    // Autoload theme. Uses localize_template() and
    // supports child theme overriding. However,
    // they must be under the same dir path.
    (new Tonik\Gin\Foundation\Autoloader($theme->get('config')))->register();
}

//add class to nav li items
function add_class_to_nav_li_items($classes, $item, $args) {
    if($args->theme_location == 'primary' || $args->theme_location == 'secondary' ) {
      $classes[] = 'nav-item';
    }
    return $classes;
  }
  add_filter('nav_menu_css_class', 'add_class_to_nav_li_items', 1, 3);

  add_filter( 'nav_menu_link_attributes', function($atts) {
    $atts['class'] = "nav-link";
    return $atts;
}, 100, 1 );


function mytheme_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'mytheme_excerpt_more');

