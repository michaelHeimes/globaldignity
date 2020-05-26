<?php
/**
 * Template Name: COVID Inspiration
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Global_Dignity
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="multi-color-line-wrap no-banner"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>

			<h1 class="centered wrap-700 intro-padded resources_title">COVID-19 Resources</h1>
		
			<nav id="covid-navigation" class="page-navigation">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'covid-menu',
						'menu_id'        => 'covid-menu',
						'menu_class'     => 'wrap-1440',
					) );
				?>
			</nav>	
		
		<?php if( have_rows('leadership_page_title_&_intro') ): ?>
			<div id="page_title_intro" class="centered intro-padded">
				<?php while( have_rows('leadership_page_title_&_intro') ): the_row();?>
					<div class="wrap-700">
						<h3 class="centered wrap-700"><?php the_sub_field('page_title');?></h3>
						<p class="centered wrap-700"><?php the_sub_field('page_intro');?></p>
					</div>
				<?php endwhile;?>
			</div>
		<?php endif;?>		
		
		<div id="inspiration-card-wrap">

		
			
		<?php echo do_shortcode( '[ajax_load_more id="inspiration_cards" container_type="div" ajax_load_more post_type="covid_inspiration" transition="masonry" masonry_animation="slide-up" users="false" users_role="undefined" users_include="undefined" users_exclude="undefined" users_per_page="undefined" users_order="undefined" users_orderby="undefined" posts_per_page="15" scroll="false" loading_style="infinite classic" button_label="Load More" button_loading_label="Loading More..."]' );?>

		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
