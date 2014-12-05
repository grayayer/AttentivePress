<?php

/**
 * Register Menus
 * http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 */
register_nav_menus(array(
	'top-bar-l-corporate' => 'Left Corprate Top Bar', // registers the menu in the WordPress admin menu editor    
    'top-bar-l-personal' => 'Left Personal Top Bar', // registers the menu in the WordPress admin menu editor
    'top-bar-r' => 'Right Top Bar',
    'mobile-off-canvas-corporate' => 'Corporate Mobile',
    'mobile-off-canvas-personal' => 'Personal Mobile',
    'medium-right-off-canvas' => 'Medium Right Common'
));

/**
 * Left Corporate top bar
 * http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
if ( ! function_exists( 'foundationPress_top_bar_l_corporate' ) ) {
	function foundationPress_top_bar_l_corporate() {
	    wp_nav_menu(array( 
	        'container' => false,                           // remove nav container
	        'container_class' => '',                        // class of container
	        'menu' => '',                                   // menu name
	        'menu_class' => 'top-bar-menu corporate_section left',            // adding custom nav class
	        'theme_location' => 'top-bar-l-corporate',                // where it's located in the theme
	        'before' => '',                                 // before each link <a> 
	        'after' => '',                                  // after each link </a>
	        'link_before' => '<span>',                      // before each link text
	        'link_after' => '</span>',                       // after each link text
	        'depth' => 5,                                   // limit the depth of the nav
	        'fallback_cb' => false,                         // fallback function (see below)
	        'walker' => new top_bar_walker()
	    ));
	}
}


/**
 * Left Personal top bar
 * http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
if ( ! function_exists( 'foundationPress_top_bar_l_personal' ) ) {
	function foundationPress_top_bar_l_personal() {
	    wp_nav_menu(array( 
	        'container' => false,                           // remove nav container
	        'container_class' => '',                        // class of container
	        'menu' => '',                                   // menu name
	        'menu_class' => 'top-bar-menu personal_section left',            // adding custom nav class
	        'theme_location' => 'top-bar-l-personal',                // where it's located in the theme
	        'before' => '',                                 // before each link <a> 
	        'after' => '',                                  // after each link </a>
	        'link_before' => '<span>',                      // before each link text
	        'link_after' => '</span>',                       // after each link text
	        'depth' => 5,                                   // limit the depth of the nav
	        'fallback_cb' => false,                         // fallback function (see below)
	        'walker' => new top_bar_walker()
	    ));
	}
}

/**
 * Right top bar
 */
if ( ! function_exists( 'foundationPress_top_bar_r' ) ) {
	function foundationPress_top_bar_r() {
	    wp_nav_menu(array( 
	        'container' => false,                           // remove nav container
	        'container_class' => '',                        // class of container
	        'menu' => '',                                   // menu name
	        'menu_class' => 'top-bar-menu right show-for-large-up',           // adding custom nav class
	        'theme_location' => 'top-bar-r',                // where it's located in the theme
	        'before' => '',                                 // before each link <a> 
	        'after' => '',                                  // after each link </a>
	        'link_before' => '<span>',                      // before each link text
	        'link_after' => '</span>',                       // after each link text
	        'depth' => 5,                                   // limit the depth of the nav
	        'fallback_cb' => false,                         // fallback function (see below)
	        'walker' => new top_bar_walker()
	    ));
	}
}

/**
 * Mobile off-canvas corporate
 */
if ( ! function_exists( 'foundationPress_mobile_off_canvas_corporate' ) ) {
	function foundationPress_mobile_off_canvas_corporate() {
	    wp_nav_menu(array( 
	        'container' => false,                           // remove nav container
	        'container_class' => '',                        // class of container
	        'menu' => '',                                   // menu name
	        'menu_class' => 'off-canvas-list corporate_section',              // adding custom nav class
	        'theme_location' => 'mobile-off-canvas-corporate',        // where it's located in the theme
	        'before' => '',                                 // before each link <a> 
	        'after' => '',                                  // after each link </a>
	        'link_before' => '',                            // before each link text
	        'link_after' => '',                             // after each link text
	        'depth' => 5,                                   // limit the depth of the nav
	        'fallback_cb' => false,                         // fallback function (see below)
	        'walker' => new top_bar_walker()
	    ));
	}
}

/**
 * Mobile off-canvas personal
 */
if ( ! function_exists( 'foundationPress_mobile_off_canvas_personal' ) ) {
	function foundationPress_mobile_off_canvas_personal() {
	    wp_nav_menu(array( 
	        'container' => false,                           // remove nav container
	        'container_class' => '',                        // class of container
	        'menu' => '',                                   // menu name
	        'menu_class' => 'off-canvas-list personal_section',              // adding custom nav class
	        'theme_location' => 'mobile-off-canvas-personal',        // where it's located in the theme
	        'before' => '',                                 // before each link <a> 
	        'after' => '',                                  // after each link </a>
	        'link_before' => '',                            // before each link text
	        'link_after' => '',                             // after each link text
	        'depth' => 5,                                   // limit the depth of the nav
	        'fallback_cb' => false,                         // fallback function (see below)
	        'walker' => new top_bar_walker()
	    ));
	}
}

/**
 * Medium off-canvas right
 */
if ( ! function_exists( 'foundationPress_medium_right_off_canvas' ) ) {
	function foundationPress_medium_right_off_canvas() {
	    wp_nav_menu(array( 
	        'container' => false,                           // remove nav container
	        'container_class' => '',                        // class of container
	        'menu' => '',                                   // menu name
	        'menu_class' => 'off-canvas-list',              // adding custom nav class
	        'theme_location' => 'medium-right-off-canvas',  // where it's located in the theme
	        'before' => '',                                 // before each link <a> 
	        'after' => '',                                  // after each link </a>
	        'link_before' => '',                            // before each link text
	        'link_after' => '',                             // after each link text
	        'depth' => 5,                                   // limit the depth of the nav
	        'fallback_cb' => false,                         // fallback function (see below)
	        'walker' => new top_bar_walker()
	    ));
	}
}

/** 
 * Add support for buttons in the top-bar menu: 
 * 1) In WordPress admin, go to Apperance -> Menus. 
 * 2) Click 'Screen Options' from the top panel and enable 'CSS CLasses' and 'Link Relationship (XFN)'
 * 3) On your menu item, type 'has-form' in the CSS-classes field. Type 'button' in the XFN field
 * 4) Save Menu. Your menu item will now appear as a button in your top-menu
*/
if ( ! function_exists( 'add_menuclass') ) {
	function add_menuclass($ulclass) {
	    $find = array('/<a rel="button"/', '/<a title=".*?" rel="button"/');
	    $replace = array('<a rel="button" class="button"', '<a rel="button" class="button"');
	    
	    return preg_replace($find, $replace, $ulclass, 1);
	}
	add_filter('wp_nav_menu','add_menuclass');
}

?>
