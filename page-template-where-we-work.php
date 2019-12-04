<?php
/**
 * Template Name: Where We Work
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
			
			<?php if( have_rows('below_banner') ): ?>
				<div id="below_banner_wrap">
					<div id="below_banner" class="wrap-700">
						<?php while( have_rows('below_banner') ): the_row(); ?>			
							<h4 class="centered"><?php the_sub_field('title');?></h4>
							<p><?php the_sub_field('text');?></p>
						<?php endwhile;?>
					</div>
				</div>
			<?php endif;?>
	
			<?php if( have_rows('find_your_country') ): ?>
				<div id="find_your_country" class="wrap-700">
					<?php while( have_rows('find_your_country') ): the_row(); ?>	
						<img class="centered wrap-700" src="<?php the_sub_field('www-find_your_country_bg');?>" />
							<div id="contact-find-country-wrap" class="wrap-960">
								<div class="multi-color-line-wrap"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>
								<h1 class="centered"><?php the_sub_field('title');?></h1>
								<?php the_sub_field('text');?>
								<div id="countries">
									<div id="countries-inner">
										<button class="select-button">Select your country<img src="/wp-content/themes/global-dignity/svg/dropdown-arrow.svg" width="18px" height="auto" /></button>
			
										<?php
											wp_nav_menu( array(
												'theme_location' => 'country_selector',
												'menu_id'        => 'country_selector'
											) );
										?>
									</div>
								</div>
							</div>
					<?php endwhile;?>
			<?php endif;?>	
					
				</div>
				
				
			<?php if( have_rows('quote') ): ?>
				<div id="yellow-bg-quote">
					<?php while( have_rows('quote') ): the_row(); ?>			
						<p class="wrap-960"><?php the_sub_field('quote_text');?></p>
						<div id="black-quote-bar"></div>
						<p class="wrap-960 www-quote_author"><?php the_sub_field('quote_author');?></p>
					<?php endwhile;?>
				</div>
			<?php endif;?>
			
			<div class="start_a_chapter wrap-700">
				<div class="multi-color-line-wrap"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>
				<?php the_field('start_a_chapter');?>
			</div>

			<div id="www-contact-wrap">
				<div id="www-contact" class="wrap-960">
				<?php if( have_rows('contact') ): ?>			
						<?php while( have_rows('contact') ): the_row(); ?>			
							<h4><?php the_sub_field('title');?></h4>
							<p><?php the_sub_field('text');?></p>
						<?php endwhile;?>
				<?php endif;?>
					<div class="www-form-wrap"><?php echo do_shortcode('[contact-form-7 id="1120" title="Country Chair Contact Form"]');?></div>
				</div>
			</div>					
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
