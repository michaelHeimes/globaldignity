<?php
/**
 * Template Name: Inspiration
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

			<h1 class="centered wrap-700 intro-padded resources_title"><?php the_field('resources_title', 'option');?></h1>
			<p class="centered wrap-700 intro-padded"><?php the_field('resources_quote', 'option');?></p>
			<p class="centered wrap-700 intro-padded resources_quote_author"><?php the_field('quote_author', 'option');?></p>
		
		<nav id="resources-navigation" class="page-navigation">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'resources-menu',
					'menu_id'        => 'resources-menu',
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
			<?php echo do_shortcode( '[ajax_load_more id="4531436691" container_type="div" acf="true" acf_field_type="repeater" acf_field_name="inspiration_cards" ajax_load_more post_type="post" transition="masonry" masonry_animation="slide-up" users="false" users_role="undefined" users_include="undefined" users_exclude="undefined" users_per_page="undefined" users_order="undefined" users_orderby="undefined" post_type="post, page" posts_per_page="15" scroll="false" button_label="Load More" button_loading_label="Loading More..."]' );?>
			
			

			
<!--
			<?php if( have_rows('inspiration_cards') ): ?>
				<?php while( have_rows('inspiration_cards') ): the_row();?>	
				<?php if( have_rows('single_card') ): ?>
					<?php while( have_rows('single_card') ): the_row();?>	
					<div class="single_card">
						<p class="inspiration-label">Inspiration</p>
						<h4><?php the_sub_field('title');?></h4>
						<?php 
						$link = get_field('link');
						if( $link ): ?>
							<a class="button" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
						<?php endif; ?>						
						<?php if( get_sub_field('youtube_link') ): ?>
							<?php the_sub_field('youtube_link'); ?></p>
						<?php endif; ?>
						<?php if( get_sub_field('image') ): ?>
							<img class="normal-res" src="<?php the_sub_field('image');?>"/>
							<img class="high-res" src="<?php the_sub_field('high_resolution_image');?>"/> 
						<?php endif; ?>
						<p><?php the_sub_field('text');?></p>
					</div>
					<?php endwhile;?>
				<?php endif;?>					
				<?php endwhile;?>
			<?php endif;?>	
-->		
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
