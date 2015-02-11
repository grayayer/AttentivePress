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

##################################################################

// enable images in media uploader

##################################################################
function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

##################################################################

// display images on media uploader and feature images

##################################################################

function fix_svg_thumb_display() {
  echo '<style> td.media-icon img[src$=".svg"], img[src$=".svg"].attachment-post-thumbnail { width: 100% !important; height: auto !important; } </style>';
}
add_action('admin_head', 'fix_svg_thumb_display');

#########

######## creates a conditional display for events manager webinar link #######

/**
* add some conditional output conditions for Events Manager
* @param string $replacement
* @param string $condition
* @param string $match
* @param object $EM_Event
* @return string
*/
function filterEventOutputCondition($replacement, $condition, $match, $EM_Event){
    if (is_object($EM_Event)) {
 
        switch ($condition) {
 
            // replace LF with HTML line breaks
            case 'nl2br':
                // remove conditional
                $replacement = preg_replace('/\{\/?nl2br\}/', '', $match);
                // process any placeholders and replace LF
                $replacement = nl2br($EM_Event->output($replacement));
                break;
 
            // #_ATT{Website}
            case 'has_att_website':
                if (is_array($EM_Event->event_attributes) && !empty($EM_Event->event_attributes['Website']))
                    $replacement = preg_replace('/\{\/?has_att_website\}/', '', $match);
                else
                    $replacement = '';
                break;
 
        }
 
    }
 
    return $replacement;
}
 
add_filter('em_event_output_condition', 'filterEventOutputCondition', 10, 4);

?>
