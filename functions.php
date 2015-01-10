<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walker
require_once('library/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');


/**
 * Removes the all but the formatting button from the post editor.
 *
 * @since    1.0.0
 *
 * @param    array    $buttons    The current array buttons including the kitchen sink.
 * @return   array                The updated array of buttons that exludes the kitchen sink.
 */
add_filter( 'mce_buttons_2', 'acme_remove_firm_kitchen_sink');

function acme_remove_firm_kitchen_sink( $buttons ) {

 	$invalid_buttons = array(
			'underline',
			'justifyfull',
			'forecolor',
			#'|',
			#'pastetext',
			#'pasteword',
			#'removeformat',
			#'charmap',
			#'outdent',
			#'indent',
			#'undo',
			#'redo',
			#'wp_help'
		);


	
	foreach ( $buttons as $button_key => $button_value ) {
    
    		if ( in_array( $button_value, $invalid_buttons ) ) {
      			unset( $buttons[ $button_key ] );
    		}
    
	}

	return $buttons;

}

// Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
// Register our callback to the appropriate filter
add_filter('mce_buttons_2', 'my_mce_buttons_2');

/*
* Callback function to filter the MCE settings
*/

function my_mce_before_init_insert_formats( $init_array ) {  

// Define the style_formats array

	$style_formats = array(  
		// Each array child is a format with it's own settings
		array(  
			'title' => 'Content Block',  
			'block' => 'span',  
			'classes' => 'content-block',
			'wrapper' => true,
			
		),  
		array(  
			'title' => 'Blue Button',  
			'block' => 'span',  
			'classes' => 'blue-button',
			'wrapper' => true,
		),
		array(  
			'title' => 'Red Button',  
			'block' => 'span',  
			'classes' => 'red-button',
			'wrapper' => true,
		),
	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' ); 

?>
