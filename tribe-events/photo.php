<?php
/**
 * Photo View Template
 * The wrapper template for photo view.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/photo.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); } ?>
<h1>AttentiveU</h1>
<h2>lifelong learning for modern, everyday people </h2>
<p>Welcome to AttentiveU… our central hub for wellness learning. Here you’ll find links to seminars and webinars we offer on a variety of topics in the Five Areas of Wellness. Think of it as a “University” that’s attentive to YOU. 
</p>
<p>Looking for other wellness tools and stuff to read? <a href="/resources/">Click here</a>.</p>
<?php do_action( 'tribe_events_before_template' ); ?>
<!-- Tribe Bar -->
<?php tribe_get_template_part( 'modules/bar' ); ?>
<!-- Main Events Content -->
<?php tribe_get_template_part( 'pro/photo/content' ) ?>
<?php do_action( 'tribe_events_after_template' ) ?>
