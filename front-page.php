<?php get_header(); ?>

<div class="row">	
	<div class="small-12 columns" role="main">

	<?php do_action('foundationPress_before_content'); ?>

	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action('foundationPress_page_before_entry_content'); ?>
			<div class="entry-content">
				<div class="row">
					<div class="small-12 medium-6 columns">
						<a href="/corporate" id="corporate_style_btn" class="squeeze_image hvr-outline-out corporate">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/landingpage-corporate-alt.jpg" width="auto" height="358" alt="It&#39;s Business">
						</a>
					</div><!-- end column -->
					<div class="small-12 medium-6 columns">
						<a href="/personal" id="personal_style_btn"  class="squeeze_image hvr-outline-out personal">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/landingpage-personal-alt.jpg" width="auto" height="auto" alt="It&#39;s Personal">
						</a>
					</div><!-- end column -->
				</div><!-- end row -->
			</div><!-- end entry-content -->
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action('foundationPress_page_before_comments'); ?>
			<?php comments_template(); ?>
			<?php do_action('foundationPress_page_after_comments'); ?>
		</article>
	<?php endwhile;?>

	<?php do_action('foundationPress_after_content'); ?>

	</div>
</div>
<?php get_footer(); ?>
