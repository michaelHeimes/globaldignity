<?php
/**
 * Template Name: Partner Organizations
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

			<h1 class="centered wrap-700 intro-padded">Meet Our Partners</h1>
			
			<nav id="leadership-navigation" class="page-navigation">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'leadership-menu',
						'menu_id'        => 'leadership-menu',
						'menu_class'     => 'wrap-1440',
					) );
				?>
			</nav>

		<?php if( have_rows('leadership_page_title_&_intro') ): ?>
			<div id="page_title_intro" class="to-be-sticky intro-padded">
				<?php while( have_rows('leadership_page_title_&_intro') ): the_row(); ?>		
					<h3 class="centered wrap-700"><?php the_sub_field('page_title');?></h3>
					<?php if(get_sub_field('page_intro')):?>
					<div class="centered wrap-700"><?php the_sub_field('page_intro');?></div>
					<?php endif;?>
				<?php endwhile;?>
			</div>
		<?php endif;?>	
					
					
						<div class="leadership_bio_cards partner-cards">
							<?php if( have_rows('partners') ): ?>
								<?php while( have_rows('partners') ): the_row(); ?>
									<?php if( have_rows('single_partner') ): ?>
									<div class="single_bio_card_wrap">
										<div class="single_bio_card wrap-960">
									
										<?php while( have_rows('single_partner') ): the_row(); ?>
										
											
											<a class="round-portrait" href="<?php the_sub_field('link_to_partner');?>" target="_blank" style="background-image: url(<?php the_sub_field('logo');?>)"></a>
											
											<div class="bio-card-text-wrap">
												<h3><?php the_sub_field('name');?></h3>
												<?php the_sub_field('text');?>
											</div>
											
										<?php endwhile;?>
									<?php endif;?>
										</div>
									</div>	
								<?php endwhile;?>
							<?php endif;?>	
						</div>
						
						
					<div class="partner-organizations mobile-padded">
						
						<div class="yellow-rule"></div>
						
					</div>
						
					<div id="partner-form"></div>
					<div class="wrap-700" id="partner-form-wrap">
						<h4><?php the_field('title_above_form');?></h4>
					<p><?php the_field('text_above_the_form');?></p>
					<?php echo do_shortcode('[contact-form-7 id="3333" title="Partner Contact Form"]');?>
					</div>
					
					
		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php
// get_sidebar();
get_footer();

