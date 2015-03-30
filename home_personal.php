<?php
/*
Template Name: Personal Homepage
*/
get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>/css/personal.css" />

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
		<!-- blurb 1 -->
		<div class="small-12 medium-6 columns">
			<div class="medium-2 columns hide-for-small-only">
				<i class="at-fork circle icon"></i>
			</div>
			<div class="small-12 medium-10 columns">
				<h3 class="show-for-small-only">
					<i class="at-fork circle icon"></i>
					<?php 
						if ( function_exists( 'ot_get_option' ) ) {
	 						$blurb_1_url_link = ot_get_option( 'blurb_1_url_link');
	 						$personal_blurb_1_title = ot_get_option( 'personal_blurb_1_title', 'Latest Recipe' );
	 						echo '<a href="'.$blurb_1_url_link.'"/>';

	 						echo $personal_blurb_1_title;
	 						echo '</a>';
	 					}
 					?>
				</h3>
				<h3 class="show-for-medium-up">
					
					<?php 
						if ( function_exists( 'ot_get_option' ) ) {
	 						$blurb_1_url_link = ot_get_option( 'blurb_1_url_link');
	 						$personal_blurb_1_title = ot_get_option( 'personal_blurb_1_title', 'Latest Recipe' );
	 						echo '<a href="'.$blurb_1_url_link.'"/>';

	 						echo $personal_blurb_1_title;
	 						echo '</a>';
	 					}
 					?>
				</h3>
				<!-- This is the paragraph text that describes the recipe to be featured -->
				<?php
					if ( function_exists( 'ot_get_option' ) ) {
	 					$personal_blurb_1_paragraph = ot_get_option( 'personal_blurb_1_paragraph', 'Latest Recipe' );
	 					echo '<p>'.$personal_blurb_1_paragraph.'</p>';
	 				}
 				?>					
				<!-- blurb 1 button -->
				<?php 
					if ( function_exists( 'ot_get_option' ) ) {
	 					$blurb_1_button_link = ot_get_option( 'blurb_1_button_link', '/personal/recipes/');
	 					$blurb_1_button_label = ot_get_option( 'blurb_1_button_label', 'Browse All Recipes');	 					
	 					echo '<a href="'.$blurb_1_button_link.'" class="button small"/>';
	 					echo $blurb_1_button_label;
	 					echo '</a>';
	 				}
 				?>				
			</div>		
		</div>

		<!-- blurb 2 -->
		<div class="small-12 medium-6 columns">
			<div class="medium-2 columns hide-for-small-only">
				<i class="at-wrench circle icon"></i>
			</div>

			<!-- Blurb 2 theme content inputs -->
			<div class="small-12 medium-10 columns">
				<h3 class="show-for-small-only">
					<i class="at-wrench circle icon"></i>
					<?php 
						if ( function_exists( 'ot_get_option' ) ) {
	 						$blurb_2_url_link = ot_get_option( 'blurb_2_url_link');
	 						$personal_blurb_2_title = ot_get_option( 'personal_blurb_2_title', 'Newest Resource' );
	 						echo '<a href="'.$blurb_2_url_link.'"/>';
	 						echo $personal_blurb_2_title;
	 						echo '</a>';
	 					}
 					?>
				</h3>
				<h3 class="show-for-medium-up">
					
					<?php 
						if ( function_exists( 'ot_get_option' ) ) {
	 						$blurb_2_url_link = ot_get_option( 'blurb_2_url_link', '/resources/');
	 						$personal_blurb_2_title = ot_get_option( 'personal_blurb_2_title', 'Newest Resource' );
	 						echo '<a href="'.$blurb_2_url_link.'"/>';

	 						echo $personal_blurb_2_title;
	 						echo '</a>';
	 					}
 					?>
				</h3>
				<!-- This is the paragraph text that is generally about resources to be featured -->
				<?php
					if ( function_exists( 'ot_get_option' ) ) {
	 					$personal_blurb_2_paragraph = ot_get_option( 'personal_blurb_2_paragraph', 'Looking for tools to help you build a better life? The choices can be rather overwhelming, so here you’ll find a selection of some of our favorites.' );
	 					echo '<p>'.$personal_blurb_2_paragraph.'</p>';
	 				}
 				?>					
				<!-- blurb 1 button -->
				<?php 
					if ( function_exists( 'ot_get_option' ) ) {
	 					$blurb_2_button_link = ot_get_option( 'blurb_2_button_link', '/resources/');
	 					$blurb_2_button_label = ot_get_option( 'blurb_2_button_label', 'More Resources');	 					
	 					echo '<a href="'.$blurb_2_button_link.'" class="button small"/>';
	 					echo $blurb_2_button_label;
	 					echo '</a>';
	 				}
 				?>				
			</div>	

		</div>
	</div>
</section>


<?php get_footer(); ?>
