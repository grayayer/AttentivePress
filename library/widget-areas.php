<?php

function foundationpress_sidebar_widgets() {
  register_sidebar(array(
      'id' => 'sidebar-widgets',
      'name' => __('Sidebar widgets', 'FoundationPress'),
      'description' => __('Drag widgets to this sidebar container.', 'FoundationPress'),
      'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
      'after_widget' => '</div></article>',
      'before_title' => '<h6>',
      'after_title' => '</h6>'
  ));

  register_sidebar(array(
      'id' => 'blog-sidebar-widgets',
      'name' => __('Blog Sidebar widgets', 'FoundationPress'),
      'description' => __('Drag widgets to this blog-sidebar container.', 'FoundationPress'),
      'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
      'after_widget' => '</div></article>',
      'before_title' => '<h6>',
      'after_title' => '</h6>'
  ));

  register_sidebar(array(
      'id' => 'footer-widget-1',
      'name' => __('Footer Widget 1', 'FoundationPress'),
      'description' => __('Drag widgets to this footer container', 'FoundationPress'),
      'before_widget' => '<article id="%1$s" class="medium-2 hide-for-small columns dots widget %2$s" data-equalizer-watch>',
      'after_widget' => '</article>',
      'before_title' => '<h6>',
      'after_title' => '</h6>'      
  ));


  register_sidebar(array(
      'id' => 'footer-widget-2',
      'name' => __('Footer Widget 2', 'FoundationPress'),
      'description' => __('Drag widgets to this footer container', 'FoundationPress'),
      'before_widget' => '<article id="%1$s" class="hide-for-small medium-2 columns dots widget %2$s" data-equalizer-watch>',
      'after_widget' => '</article>',
      'before_title' => '<h6>',
      'after_title' => '</h6>'      
  ));


  register_sidebar(array(
      'id' => 'footer-widget-3',
      'name' => __('Footer Widget 3', 'FoundationPress'),
      'description' => __('Drag widgets to this footer container', 'FoundationPress'),
      'before_widget' => '<article id="%1$s" class="medium-2 columns dots widget %2$s hide-for-small" data-equalizer-watch>',
      'after_widget' => '</article>',
      'before_title' => '<h6>',
      'after_title' => '</h6>'      
  ));


  register_sidebar(array(
      'id' => 'footer-widget-4',
      'name' => __('Footer Widget 4', 'FoundationPress'),
      'description' => __('Drag widgets to this footer container', 'FoundationPress'),
      'before_widget' => '<article id="%1$s" class="small-5 medium-2 columns widget red %2$s" data-equalizer-watch>',
      'after_widget' => '</article>',
      'before_title' => '<h6>',
      'after_title' => '</h6>'      
  ));


  register_sidebar(array(
      'id' => 'footer-widget-5',
      'name' => __('Footer Widget 5', 'FoundationPress'),
      'description' => __('Drag widgets to this footer container', 'FoundationPress'),
      'before_widget' => '<article id="%1$s" class="small-5 medium-2 columns last widget %2$s" data-equalizer-watch>',
      'after_widget' => '</article>',
      'before_title' => '<h6>',
      'after_title' => '</h6>'      
  ));
}

add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );

?>