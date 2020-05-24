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
			
<!-- 			<?php echo do_shortcode( '[ajax_load_more id="4531436691" container_type="div" acf="true" acf_field_type="repeater" acf_field_name="inspiration_cards" ajax_load_more post_type="post" transition="masonry" masonry_animation="slide-up" users="false" users_role="undefined" users_include="undefined" users_exclude="undefined" users_per_page="undefined" users_order="undefined" users_orderby="undefined" post_type="post, page" posts_per_page="15" scroll="false" button_label="Load More" button_loading_label="Loading More..."]' );?> -->



		<ul id="cat-filter">
			<li class="label">Filter By:</li>
			<li><button class="active" data-repeater="default" data-posts-per-page="15" data-scroll="false" data-post-type="post" data-term="">All</button></li>
			<?php
		  $categories = get_categories(array(
		    'show_option_all'    => '',
		    'orderby'            => 'name',
		    'order'              => 'ASC',
		    'style'              => 'list',
		    'show_count'         => 0,
		    'hide_empty'         => 1,
		    'use_desc_for_title' => 1,
		    'child_of'           => 0,
		    'feed'               => '',
		    'feed_type'          => '',
		    'feed_image'         => '',
		    'exclude'            => '34,33,32,31,30',
		    'exclude_tree'       => '',
		    'include'            => '',
		    'hierarchical'       => true,
		    'title_li'           => __( 'Categories' ),
		    'show_option_none'   => __('No categories'),
		    'number'             => NULL,
		    'echo'               => 1,
		    'depth'              => 0,
		    'current_category'   => 0,
		    'pad_counts'         => 0,
		    'taxonomy'           => 'inspiration_cat',
		    'walker'             => 'Walker_Category' 
		      ));
		  foreach ( $categories as $category ) :?>
		  
		   <?php echo '<li><button data-repeater="default" data-posts-per-page="15"  data-scroll="false" data-term="' . $category->slug . '">' . $category->name . '</button></li>';
		
		  endforeach;?>
		</ul>
		
			
		<?php echo do_shortcode( '[ajax_load_more id="inspiration_cards" container_type="div" ajax_load_more post_type="inspiration" taxonomy="inspiration_cat" transition="masonry" masonry_animation="slide-up" users="false" users_role="undefined" users_include="undefined" users_exclude="undefined" users_per_page="undefined" users_order="undefined" users_orderby="undefined" posts_per_page="15" scroll="false" loading_style="infinite classic" button_label="Load More" button_loading_label="Loading More..."]' );?>
		
		
<!-- <?php echo do_shortcode('[ajax_load_more id="alm_team_members" css_classes="grid-x grid-padding-x small-up-2 medium-up-2 large-up-3 xlarge-up-4" category_not_in="19" container_type="div" post_type="team_member" transition_container="false" posts_per_page="999" taxonomy="department" taxonomy_terms="investment-team" taxonomy_operator="IN" order="ASC" orderby="meta_value" no_results_text="<h5>No Team Members Found</h5>" meta_key="last_name" meta_compare="EXISTS" cache="false" cache_id="4001080191"]'); ?> -->
	

			
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
