<?php
/*
Template Name: Personal Homepage
*/
get_header(); ?>

<header id="homepage-hero" class="homepage-hero" role="banner">
	<div class="row">
		<div class="small-12 columns">
			<h1>Genuine, sustainable wellness support.</h1>			
		</div>
		<div class="show-for-medium-up">
			<div class="small-12 medium-offset-1 medium-11 columns">
				<span class="tagline">Because once you have the tools,</span >
			</div>
			<div class="small-12 medium-offset-2 medium-10 columns">
				<span class="tagline">you can create whatever life you want.</span >
				<a role="button" class="large button hero_area" href="/personal/what-is-a-health-coach/">Ask a Health Coach</a>			
			</div>
		</div>
		<div class="show-for-small-only">
			<div class="small-12 columns">
				<span class="tagline">Because once you have the tools, you can create whatever life you want.</span >
				<a role="button" class="large button hero_area" href="/personal/what-is-a-health-coach/">Ask a Health Coach</a>			
			</div>
		</div>		
	</div>
</header>
<section class="blurb">
	<div class="row">
		<div class="small-12 medium-6 columns">
			<div class="medium-2 columns hide-for-small-only">
				<i class="at-fork circle icon"></i>
			</div>
			<div class="small-12 medium-10 columns">
				<h3 class="show-for-small-only"><i class="at-fork circle icon"></i> <a href="#">Latest Recipe</a></h3>
				<h3 class="show-for-medium-up"></i> <a href="#">Latest Recipe</a></h3>
				<p>Red Lentil Soup is amazing, delicious and healthy. Other short text about this recipce goes here. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<a href="#" class="button small">Browse Recipes</a>
			</div>		
		</div>
		<div class="small-12 medium-6 columns">
			<div class="medium-2 columns hide-for-small-only">
				<i class="at-wrench circle icon"></i>
			</div>
			<div class="small-12 medium-10 columns omega">
				<h3 class="show-for-medium-up"><a href="#">Newest Resource</a></h3>
				<h3 class="show-for-small-only"><i class="at-wrench circle icon"></i> <a href="#">Newest Resource</a></h3>
				<p>We just launched a comprehensive new tool for your colleagues. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
				<a href="#" class="button small">More Resources</a>
			</div>		
		</div>
	</div>
</section>


<?php /*
	<div class="row">
		<div class="small-12 large-8 columns" role="main">

		<?php do_action('foundationPress_before_content'); ?>

		<?php while (have_posts()) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<header>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
				<?php do_action('foundationPress_page_before_entry_content'); ?>
				<div class="entry-content">
					<?php the_content(); ?>
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

	<?php get_sidebar(); ?>
</div>
< */ ?>
<?php get_footer(); ?>
