<aside id="sidebar" class="small-12 medium-3 columns hide-for-small">
	<?php do_action('foundationPress_before_sidebar'); ?>

	<?php 
	if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		the_post_thumbnail();
	} 
	?>

	<!-- extra sidebar content that is inserted via a custom field with the key of "extra_sidebar_content" -->
	<div style="margin-top:20px;" id="page_specific_sidebar_content">
		<?php echo get_post_meta($post->ID, 'extra_sidebar_content', true); ?>
	</div>

	<?php dynamic_sidebar("sidebar-widgets"); ?>

	<?php do_action('foundationPress_after_sidebar'); ?>
</aside>
