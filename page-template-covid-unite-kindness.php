<?php
/**
 * Template Name: Unite Kindness
 *
 * @package Global_Dignity
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();?>
			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<div class="wrap-1200">
					
					<div class="multi-color-line-wrap no-banner"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>
	
					<h1 class="centered wrap-700 intro-padded resources_title">COVID-19 Resources</h1>

							
				</div>

			
				<nav id="covid-navigation" class="page-navigation">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'covid-menu',
							'menu_id'        => 'covid-menu',
							'menu_class'     => 'wrap-1440',
						) );
					?>
				</nav>	
				
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
				
				<?php if( have_rows('tagline_and_hashtag') ):?>
				<div id="next" class="tag-hash-wrap">
					<div class="wrap-1200">
					<?php while ( have_rows('tagline_and_hashtag') ) : the_row();?>	
					
					<div class="tagline"><?php the_sub_field('tagline');?></div>

					<div class="divider-wrap"><span></span></div>

					<div class="hashtag"><?php the_sub_field('hashtag');?></div>
				
					<?php endwhile;?>
					</div>
				</div>
				<?php endif;?>
				
				
				<?php if( have_rows('copy_left_video_right') ):?>
				<div class="copy-vid-wrap">
					<div class="wrap-1300">
					<?php while ( have_rows('copy_left_video_right') ) : the_row();?>	
					
						<img class="centered home-element-icon" src="/wp-content/themes/global-dignity/svg/gray-hearts.svg" width="48px" height="auto">
					
						<div class="multi-color-line-wrap"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>
					
						<h1 class="centered text-below"><?php the_sub_field('heading');?></h1>
											
						<div class="inner">
						
							<div class="left">
								<?php the_sub_field('copy');?>
							</div>
	
							<div class="right">
								
								<?php if(get_sub_field('media_type') == 'image'):?>
								
									<img src="<?php the_sub_field('image');?>"/>
								
								<?php endif;?>
								
								<?php if(get_sub_field('media_type') == 'video'):?>
								
									<div id="covid-vid" class="modal">
										<?php the_sub_field('video');?>
									</div>
									
									<div>
										<a href="#covid-video" data-modal="#covid-vid">
											<div class="card-image-wrap">
											<img src="<?php the_sub_field('video_thumbnail');?>"/>
											<img class="card-play-button" src="/wp-content/themes/global-dignity/svg/covid-vid-play.svg" width="90px" height="auto">
											</div>
										</a>
									</div>
								
								<?php endif;?>
								
							</div>
							
						</div>
				
					<?php endwhile;?>
					</div>
				</div>
				<?php endif;?>
				
				<div class="yellow-rule"></div>
				
				<?php if( have_rows('image_offset_text_box') ): ?>
					<div class="wrap-1350">
					<?php while( have_rows('image_offset_text_box') ): the_row(); ?>				
				
						<div class="multi-color-line-wrap no-banner"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>
	
						<h1 class="centered text-below"><?php the_sub_field('heading');?></h1>
						
					<?php endwhile;?>
					</div>
				<?php endif;?>
								
				<?php if( have_rows('image_offset_text_box') ): ?>
					<div id="global-dignity-day" class="wrap-1350">
					<?php while( have_rows('image_offset_text_box') ): the_row(); ?>
					
						<div class="image-right-overlap-wrap">
							<div class="inner-box">		
									
								<div id="blue-bounce-trigger"></div>
								
								<div id="small_title"><img src="/wp-content/themes/global-dignity/svg/messenger-icon.svg" width="40px" height="auto" /><span>FaceBook Messenger</span></div>
								
								<h1><?php the_sub_field('title');?></h1>
								
								<?php the_sub_field('text');?>
								
								<?php $link = get_sub_field('link');
								if( $link ): ?>
								<a class="button button-black" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
								<?php endif; ?>
								
								<a class="blue-down-arrows blue-down-arrow-mobile ps2id" href="#what-we-believe"><img id="about-blue-down-arrow1" src="/wp-content/themes/global-dignity/svg/blue-arrow-scroll-down.svg" width="37px" height="auto" /></a>
							</div>
							
							<a class="blue-down-arrows blue-down-arrow-desktop ps2id" href="#what-we-believe"><img id="about-blue-down-arrow2" src="/wp-content/themes/global-dignity/svg/blue-arrow-scroll-down.svg" width="37px" height="auto" /></a>
							
					</div>	
	
					<img class="high-res home-gdd-img" src="<?php the_sub_field('high_resolution_image');?>"/> 
						
					<?php endwhile;?>
					</div>
				<?php endif;?>

					
				<?php if( have_rows('sponsors') ): ?>
					<div id="supporters" class="wrap-1401">
					<?php while( have_rows('sponsors') ): the_row(); ?>
					<h1 class="centered"><?php the_sub_field('title');?></h1>
						<?php if( have_rows('single_sponsor') ): ?>
							<?php while( have_rows('single_sponsor') ): the_row(); ?>	
								<?php if( have_rows('logo') ): ?>
									<?php while( have_rows('logo') ): the_row(); ?>										
										<a href="<?php the_sub_field('link_to_sponsor');?>" target="_blank"><img src="<?php the_sub_field('logo_image');?>"/></a>
									<?php endwhile;?>
								<?php endif;?>							
							<?php endwhile;?>
						<?php endif;?>	
					<?php endwhile;?>
					</div>
				<?php endif;?>				
				
				<div class="wrap-1400">
						<?php
							the_content();
						?>
					
				</div>
			
			</article><!-- #post-<?php the_ID(); ?> -->
			
			<?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
