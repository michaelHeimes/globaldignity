<?php
/**
 * Template Name: Volunteer
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

			<?php if( have_rows('banner_with_text_overlay') ): ?>
				<div id="banner">
					<?php while( have_rows('banner_with_text_overlay') ): the_row(); ?>	
						<?php 
						$image = get_sub_field('banner_image');
						$size = 'banner-normal-res';
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
						<?php 
						$image = get_sub_field('high_resolution_banner_image');
						$size = 'banner-high-res';
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
		<!--
						<img class="normal-res" src="<?php the_sub_field('banner_image');?>"/>
						<img class="high-res" src="<?php the_sub_field('high_resolution_banner_image');?>"/> 
		-->
						<div id="banner-overlay-text-wrap">
							<h1 class="centered"><?php the_sub_field('page_title');?></h1>
							<p class="centered"><?php the_sub_field('banner_overlay_text');?></p>
							<a class="centered arrow-down-skip-link ps2id" href="#next"><img id="down-arrow-bounce" src="/wp-content/themes/global-dignity/svg/arrow-scroll-down.svg" width="42px" height="auto" /></a>
						</div>
					<?php endwhile;?>
				</div>
			<?php endif;?>	
			<div id="next"></div>
			
					<div id="be_the_change" class="wrap-700">
						<div class="multi-color-line-wrap no-banner"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>
						<h1 class="centered"><?php the_field('be_the_change_title');?></h1>
						<p><?php the_field('be_the_change_text');?></p>
					</div>
					
					<div class="wrap-700">
						<?php echo do_shortcode('[contact-form-7 id="1240" title="Volunteer Form"]');?>
					</div>

		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php
// get_sidebar();
get_footer();

