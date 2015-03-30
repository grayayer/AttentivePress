<?php
/*
Template Name: Corporate Homepage
*/
get_header(); ?>

<header id="homepage-hero" role="banner">
	<div class="row">
		<div class="small-12 columns">
			<h1>Customized, flexible wellness programs.</h1>			
		</div>
		<div class="show-for-medium-up">
			<div class="small-12 medium-offset-1 medium-11 columns">
				<span class="tagline">Because good health is good business,</span >
			</div>
			<div class="small-12 medium-offset-2 medium-10 columns">
				<span class="tagline">and every business is different.</span >
				<a role="button" class="large button hero_area" href="/corporate/schedule-an-evaluation/">SCHEDULE AN EVALUATION</a>			
			</div>
		</div>
		<div class="show-for-small-only">
			<div class="small-12 columns">
				<span class="tagline">Because once you have the tools, you can create whatever life you want.</span >
				<a role="button" class="large button hero_area" href="/corporate/schedule-an-evaluation/">SCHEDULE AN EVALUATION</a>			
			</div>
		</div>		
	</div>
</header>
<section class="blurb">
	<div class="row">

		<!-- blurb 2 -->
		<div class="small-12 medium-6 columns">
			<div class="medium-2 columns hide-for-small-only">
				<i class="at-pencil circle icon"></i>
			</div>

			<!-- Blurb 2 theme content inputs -->
			<div class="small-12 medium-10 columns">
				<h3 class="show-for-small-only">
					<i class="at-pencil circle icon"></i>
					<?php 
						if ( function_exists( 'ot_get_option' ) ) {
	 						$corporate_blurb_1_url_link = ot_get_option( 'corporate_blurb_1_url_link', '#');
	 						$corporate_blurb_1_title = ot_get_option( 'corporate_blurb_1_title', 'BUILD A CUSTOM PROGRAM' );
	 						echo '<a href="'.$corporate_blurb_1_url_link.'"/>';
	 						echo $corporate_blurb_1_title;
	 						echo '</a>';
	 					}
 					?>
				</h3>
				<h3 class="show-for-medium-up">
					
					<?php 
						if ( function_exists( 'ot_get_option' ) ) {
	 						$corporate_blurb_1_url_link = ot_get_option( 'corporate_blurb_1_url_link', '#');
	 						$corporate_blurb_1_title = ot_get_option( 'corporate_blurb_1_title', 'BUILD A CUSTOM PROGRAM' );
	 						echo '<a href="'.$corporate_blurb_1_url_link.'"/>';

	 						echo $corporate_blurb_1_title;
	 						echo '</a>';
	 					}
 					?>
				</h3>
				<!-- This is the paragraph text that is generally about the passport to health -->
				<?php
					if ( function_exists( 'ot_get_option' ) ) {
	 					$corporate_blurb_1_paragraph_text = ot_get_option( 'corporate_blurb_1_paragraph_text', 'Here is filler text' );
	 					echo '<p>'.$corporate_blurb_1_paragraph_text.'</p>';
	 				}
 				?>					
				<!-- blurb 1 button -->
				<?php 
					if ( function_exists( 'ot_get_option' ) ) {
	 					$corporate_blurb_1_button_link = ot_get_option( 'corporate_blurb_1_button_link', '#');
	 					$corporate_blurb_1_button_label = ot_get_option( 'corporate_blurb_1_button_label', 'Create a Custom Program Today');	 					
	 					echo '<a href="'.$corporate_blurb_1_button_link.'" class="button small"/>';
	 					echo $corporate_blurb_1_button_label;
	 					echo '</a>';
	 				}
 				?>				
			</div>	
		</div>

<!-- 		<div class="small-12 medium-6 columns">
			<div class="medium-2 columns hide-for-small-only">
				<i class="at-pencil circle icon"></i>
			</div>
			<div class="small-12 medium-10 columns">
				<h3 class="show-for-small-only">
					<div class="row">
						<div class="small-3 medium-6 columns">
							<i class="at-pencil circle icon"></i>
						</div>
						<div class="small-9 columns" style="padding-left:0;">
							<a href="#">Build a Custom Program</a>
						</div>
					</div>
				</h3>
				<h3 class="show-for-medium-up"><a href="#">Build a Custom Program</a></h3>
				<p>Each work environment is unique, and every team has specific needs. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<a href="#" class="button small">Create a Custom Program Today</a>
			</div>		
		</div> -->


		<!-- blurb 2 -->
		<div class="small-12 medium-6 columns">
			<div class="medium-2 columns hide-for-small-only">
				<i class="at-passport3 circle icon"></i>
			</div>

			<!-- Blurb 2 theme content inputs -->
			<div class="small-12 medium-10 columns">
				<h3 class="show-for-small-only">
					<i class="at-passport3 circle icon"></i>
					<?php 
						if ( function_exists( 'ot_get_option' ) ) {
	 						$corporate_blurb_2_url_link = ot_get_option( 'corporate_blurb_2_url_link');
	 						$corporate_blurb_2_title = ot_get_option( 'corporate_blurb_2_title', 'Passport to Health' );
	 						echo '<a href="'.$corporate_blurb_2_url_link.'"/>';
	 						echo $corporate_blurb_2_title;
	 						echo '</a>';
	 					}
 					?>
				</h3>
				<h3 class="show-for-medium-up">
					
					<?php 
						if ( function_exists( 'ot_get_option' ) ) {
	 						$corporate_blurb_2_url_link = ot_get_option( 'corporate_blurb_2_url_link', 'https://passport.attentivehealth.com/');
	 						$corporate_blurb_2_title = ot_get_option( 'corporate_blurb_2_title', 'Passport to Health' );
	 						echo '<a href="'.$corporate_blurb_2_url_link.'"/>';

	 						echo $corporate_blurb_2_title;
	 						echo '</a>';
	 					}
 					?>
				</h3>
				<!-- This is the paragraph text that is generally about the passport to health -->
				<?php
					if ( function_exists( 'ot_get_option' ) ) {
	 					$corporate_blurb_2_paragraph = ot_get_option( 'corporate_blurb_2_paragraph', 'Looking for tools to help you build a better life? The choices can be rather overwhelming, so here you’ll find a selection of some of our favorites.' );
	 					echo '<p>'.$corporate_blurb_2_paragraph.'</p>';
	 				}
 				?>					
				<!-- blurb 1 button -->
				<?php 
					if ( function_exists( 'ot_get_option' ) ) {
	 					$corporate_blurb_2_button_link = ot_get_option( 'corporate_blurb_2_button_link', 'https://passport.attentivehealth.com/');
	 					$corporate_blurb_2_button_label = ot_get_option( 'corporate_blurb_2_button_label', 'Learn More About This Tool');	 					
	 					echo '<a href="'.$corporate_blurb_2_button_link.'" class="button small"/>';
	 					echo $corporate_blurb_2_button_label;
	 					echo '</a>';
	 				}
 				?>				
			</div>	
		</div>

<!-- 		<div class="small-12 medium-6 columns">
			<div class="medium-2 columns hide-for-small-only">
				<a href="https://passport.attentivehealth.com/"><i class="at-passport3 circle icon"></i></a>
			</div>
			<div class="small-12 medium-10 columns omega">
				<h3 class="show-for-medium-up"><a href="https://passport.attentivehealth.com/">Passport to Health</a></h3>
				<h3 class="show-for-small-only">
					<div class="row">
						<div class="small-3 medium-6 columns">
							<a href="https://passport.attentivehealth.com/"><i class="at-passport3 circle icon"></i></a>
						</div>
						<div class="small-9 columns" style="padding-left:0;">
							<a href="https://passport.attentivehealth.com/">Passport<br>to Health</a>
						</div>
					</div>
				</h3>
				<p>We just launched a comprehensive new tool for your colleagues. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
				<a href="https://passport.attentivehealth.com/" class="button small">Learn More About This Tool</a>
			</div>		
		</div> -->
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
