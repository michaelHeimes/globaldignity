<?php
/**
 * Template Name: Resources
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
		
		
		<?php if( have_rows('page_title_&_intro') ): ?>
			<div id="page_title_intro" class="to-be-sticky centered intro-padded">
				<?php while( have_rows('page_title_&_intro') ): the_row();?>
				<h3 class="centered wrap-700"><?php the_sub_field('page_title');?></h3>
				<p class="centered wrap-700"><?php the_sub_field('text');?></p>
				<?php endwhile;?>
			</div>
		<?php endif;?>	
							
		
		
				
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();


