<?php
if(!function_exists('FoundationPress_entry_meta')) :
    function FoundationPress_entry_meta() {
    	echo '<div class="entry_meta">';
       echo 'Written by ';
       echo '<a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a> on ';
       the_time('F jS, Y');
       echo '</div>';
       //echo '<time class="updated" datetime="'. get_the_time('c') .'">'. sprintf(__(), get_the_time('l, F jS, Y'), get_the_time()) .'</time>';
       // echo '<time class="updated" datetime="'. get_the_time('c') .'">'. sprintf(__('Posted on %s at %s.', 'FoundationPress'), get_the_time('l, F jS, Y'), get_the_time()) .'</time>';
       // echo '<p class="byline author">'. __('Written by', 'FoundationPress') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a></p>';

    }
endif;

if(!function_exists('recipe_entry_meta')) :
    function recipe_entry_meta() {
      echo '<div class="entry_meta">';
       echo 'Recipe by ';
       echo '<a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author();
       echo '</div>';
       //echo '<time class="updated" datetime="'. get_the_time('c') .'">'. sprintf(__(), get_the_time('l, F jS, Y'), get_the_time()) .'</time>';
       // echo '<time class="updated" datetime="'. get_the_time('c') .'">'. sprintf(__('Posted on %s at %s.', 'FoundationPress'), get_the_time('l, F jS, Y'), get_the_time()) .'</time>';
       // echo '<p class="byline author">'. __('Written by', 'FoundationPress') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a></p>';

    }
endif;

?>