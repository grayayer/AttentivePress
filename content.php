<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>

		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header>
	<div class="entry-content">
		<?php if (has_post_thumbnail( $post->ID )) { //Only post a module if there's a featured image ?>
			<div class="post_thumbnail">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('thumbnail'); ?>
				</a>
			</div>

		<?php } else { ?><!--this is what's used when there isn't a featured image -->
						<!-- 				<a href="<?php the_permalink(); ?>">
					<div class="post_thumbnail">
						<img src="<?php // echo get_stylesheet_directory_uri();?>/images/thumbnail_placeholder.jpg" width="100%" height="auto" >
					</div>
				</a> -->
		<?php } ?>
		<?php FoundationPress_entry_meta(); ?>
		<div class="post_excerpt">
			<?php the_excerpt(__('Continue reading...', 'FoundationPress')); ?>
		</div>
	</div>
 <!-- don't need tags displayed
	<footer>
		<?php // $tag = get_the_tags(); if (!$tag) { } else { ?>
		<p><?php // the_tags(); ?></p><?php // } ?>
	</footer> -->
	<hr />
</article>
