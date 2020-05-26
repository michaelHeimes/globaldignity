<?php
/**
 * Template Name: Global Dignity Day
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
						$image = get_sub_field('high_resolution_banner_image');
						$size = 'banner-high-res';
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
		<!--
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
			
			<div class="wrap-960 gdd_about_section">
				<?php the_field('about_section');?>
			</div>
			
			<?php if( have_rows('get_involved') ): ?>
				<div id="get_involved">
					<div class="multi-color-line-wrap no-banner"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>
					<?php while( have_rows('get_involved') ): the_row(); ?>	
					<h1 class="centered"><?php the_sub_field('title');?></h1>
					<nav id="get-involved-nav" class="wrap-1440">
						
						<?php if( have_rows('left_link') ): ?>
							<?php while( have_rows('left_link') ): the_row(); ?>
								<?php 
								$link = get_sub_field('link');
								if( $link ): ?>								
									<a href="<?php echo $link['url']; ?>" id="left_link" class="get-involved-link-wrap high-res" style="background-image:url(<?php the_sub_field('high_resolution_background_image');?>)">
										<span><?php echo $link['title']; ?></span>
										<div class="get-involved-link-wrap-mask"></div>
									</a>
								<?php endif; ?>
								<?php endwhile;?>
						<?php endif;?>	
						
						
						
						<?php if( have_rows('center_link') ): ?>
							<?php while( have_rows('center_link') ): the_row(); ?>
								<?php 
								$link = get_sub_field('link');
								if( $link ): ?>								
									<a href="<?php echo $link['url']; ?>" id="center_link" class="get-involved-link-wrap high-res" style="background-image:url(<?php the_sub_field('high_resolution_background_image');?>)">
										<span><?php echo $link['title']; ?></span>
										<div class="get-involved-link-wrap-mask"></div>
									</a>
								<?php endif; ?>
								<?php endwhile;?>
						<?php endif;?>	
						
						
						
						<?php if( have_rows('right_link') ): ?>
							<?php while( have_rows('right_link') ): the_row(); ?>
								<?php 
								$link = get_sub_field('link');
								if( $link ): ?>								
									<a href="<?php echo $link['url']; ?>" id="right_link" class="get-involved-link-wrap high-res" style="background-image:url(<?php the_sub_field('high_resolution_background_image');?>)">
										<span><?php echo $link['title']; ?></span>
										<div class="get-involved-link-wrap-mask"></div>
									</a>
								<?php endif; ?>
								<?php endwhile;?>
						<?php endif;?>	
						
					</nav>
					<?php endwhile;?>
				</div>
			<?php endif;?>

			<?php if( have_rows('help_planning') ): ?>
				<div id="help_planning" class="wrap-700">
					<?php while( have_rows('help_planning') ): the_row(); ?>	
						<h4><?php the_sub_field('title');?></h4>
						<p><?php the_sub_field('text');?></p>
						
						<div id="help_planning_button_wrap">
							<?php $link = get_sub_field('left_link');
								if( $link ): ?>
								<a class="button button-black" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
								<?php endif; ?>
							<?php $link = get_sub_field('right_link');
								if( $link ): ?>
									<a class="button button-clear" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
								<?php endif; ?>
						</div>
					<?php endwhile;?>
				</div>
			<?php endif;?>



			
			<?php if( have_rows('quote') ): ?>
				<div id="yellow-bg-quote">
					<?php while( have_rows('quote') ): the_row(); ?>			
						<p class="wrap-960"><?php the_sub_field('quote_text');?></p>
						<div id="black-quote-bar"></div>
						<p class="wrap-960"><?php the_sub_field('quote_author');?></p>
					<?php endwhile;?>
				</div>
			<?php endif;?>
							

			
			<?php if( have_rows('video') ): ?>
				<div id="gdd-video">
					<?php while( have_rows('video') ): the_row(); ?>
					<div class="video-wrap">		
						<?php the_sub_field('link');?>
					</div>
					<div class="video-text-overlay">
						<div class="fw_video_top_pipe"></div>
						<span><?php the_sub_field('date');?></span>
						<span><?php the_sub_field('location');?></span>
						<h2><?php the_sub_field('title');?></h2>
						<p><?php the_sub_field('text');?></p>
					</div>
					<?php endwhile;?>
				</div>
			<?php endif;?>
			
			<?php if( have_rows('video') ): ?>
				<?php while( have_rows('video') ): the_row(); ?>
					<div class="video-text-overlay vto-mobile">
						<div class="fw_video_top_pipe"></div>
						<span><?php the_sub_field('date');?></span>
						<span><?php the_sub_field('location');?></span>
						<h2><?php the_sub_field('title');?></h2>
						<p><?php the_sub_field('text');?></p>
					</div>			
				<?php endwhile;?>
			<?php endif;?>	

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
