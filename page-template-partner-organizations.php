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
			
					<div id="be_the_change" class="wrap-700">
						<div class="multi-color-line-wrap no-banner"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>
					</div>
					
					<div id="partner-organizations" class="mobile-padded">
					<h1 class="text-below"><?php the_field('title');?></h1>
					<?php the_field('text');?>
						<?php if( have_rows('partners') ): ?>
							<?php while( have_rows('partners') ): the_row(); ?>
								<?php if( have_rows('single_partner') ): ?>
									<?php while( have_rows('single_partner') ): the_row(); ?>	
										<a href="<?php the_sub_field('link_to_partner');?>" target="_blank"><img src="<?php the_sub_field('logo');?>"/></a>
									<?php endwhile;?>
								<?php endif;?>	
							<?php endwhile;?>
						<?php endif;?>	
						<div class="yellow-rule"></div>
					</div>
						
					<div id="partner-form"></div>
					<div class="wrap-700" id="partner-form-wrap">
						<h4><?php the_field('title_above_form');?></h4>
					<p><?php the_field('text_above_the_form');?></p>
					<?php echo do_shortcode('[contact-form-7 id="3333" title="Partner Contact Form"]');?>
					</div>
					
			<?php if( have_rows('partners_section') ): ?>
				<div id="partner-organizations" class="mobile-padded">
				<?php while( have_rows('partners_section') ): the_row(); ?>
					<?php if( have_rows('partners') ): ?>
						<?php while( have_rows('partners') ): the_row(); ?>
							<?php if( have_rows('single_partner') ): ?>
								<?php while( have_rows('single_partner') ): the_row(); ?>	
									<a href="<?php the_sub_field('link_to_partner');?>" target="_blank"><img src="<?php the_sub_field('logo');?>"/></a>
								<?php endwhile;?>
							<?php endif;?>	
						<?php endwhile;?>
					<?php endif;?>	
				<?php endwhile;?>
				</div>
			<?php endif;?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php
// get_sidebar();
get_footer();

