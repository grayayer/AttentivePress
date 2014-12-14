<?php get_header(); ?>

<div class="row">	
	<div class="small-12 columns" role="main">

	<?php do_action('foundationPress_before_content'); ?>

	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action('foundationPress_page_before_entry_content'); ?>
			<div class="entry-content">

				<div id="main-squeeze">
					<ul id="section-choice">
						<li class="personal first" id="personal_style_btn">
							<a href="/personal">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/css/images/img-front-itspersonal.jpg" width="372" height="358" alt="It&#39;s Personal">
							</a>
						</li>
						<li class="business last" id="corporate_style_btn">
							<a href="/corporate">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/css/images/img-front-itsbusiness.jpg" width="372" height="358" alt="It&#39;s Business">
							</a>
						</li>
					</ul><!-- /#section-choice -->
				</div> <!-- /main-squeeze /main -->

			</div>
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
