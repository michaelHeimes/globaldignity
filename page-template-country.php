<?php
/**
 * Template Name: Country
 *
 * @package Global_Dignity
 */

get_header(); ?>

	<div id="primary" class="content-area">		
			<main id="main" class="site-main">
				<a class="wrap-960" id="back-to-work-link" href="<?php get_site_url();?>/where-we-work/">< Back To Find Your Country</a>
				<?php if( have_rows('country_page_header') ): ?>
					<?php while( have_rows('country_page_header') ): the_row();?>
						<div id="country_page_header" class="centered wrap-960">

							<img class="country-outline" src="<?php the_sub_field('geographic_outline');?>" />
								<div id="country_page_header_text_wrap">
									<div id="country-text-left">
										<p id="chair-header-label">Country Chair: <?php the_sub_field('country_chair_name');?></p>
										<h1 id="country-header-title"><?php the_sub_field('country_name');?></h1>
										<img id="header-flag" src="<?php the_sub_field('country_flag');?>" />
									</div>
									<a id="simplified_url" href="<?php echo the_permalink();?>"><?php the_sub_field('simplified_url');?></a>
									
							<?php if( have_rows('contact_info') ): ?>
								<div id="contact-info">
									<?php while( have_rows('contact_info') ): the_row();?>								
										<a id="chapter-email" href="mailto:<?php the_sub_field('email');?>">Email Chapter</a>
										
										<?php if(get_sub_field('phone')):?>
										<span>|</span><a href="tel:<?php the_sub_field('phone');?>"><?php the_sub_field('phone');?></a>
										<?php endif;?>
										
										<?php if(get_sub_field('address')):?>
										<span>|</span><a href="https://www.google.com/maps/place/<?php the_sub_field('address');?>" target="_blank"><?php the_sub_field('address');?></a>
										<?php endif;?>
									<?php endwhile;?>
								</div>
							<?php endif;?>	
							<?php if( get_sub_field('welcome_message') ): ?>
							<div id="welcome_message"><?php the_sub_field('welcome_message');?></div>
							<?php endif;?>	
							
							<?php if(get_field('social_follow_title')):?>
							<div id="country-social-wrap">
								<p id="social_follow_title"><?php the_field('social_follow_title');?></p>

								<?php if( have_rows('social_links') ): ?>
									<?php while( have_rows('social_links') ): the_row();?>
										<?php if( have_rows('single_social_link') ): ?>
											<?php while( have_rows('single_social_link') ): the_row();?>
												<a class="single_social_link" href="<?php the_sub_field('link');?>" target="_blank"><?php the_sub_field('icon');?></a>
											<?php endwhile;?>
										<?php endif;?>	
									<?php endwhile;?>
								<?php endif;?>	
							</div>
							<?php endif;?>	
							
						</div>
								

						</div>
						
						<div id="country-page-copy-wrap">
							<div class="wrap-960">
								<img class="normal-res round-portrait" src="<?php the_sub_field('chair_portrait_image');?>"/>
								<img class="high-res round-portrait" src="<?php the_sub_field('chair_portrait_high_resolution_image');?>"/> 
								<div id="country_page_copy_text_wrap">
									<h3><?php the_sub_field('chairs_name');?></h3>
									<img src="<?php the_sub_field('country_flag');?>" />
									<p>Country Chair For <?php the_sub_field('country_name');?></p>
									<p><?php the_sub_field('page_copy');?></p>
								</div>
							</div>
						</div>
					<?php endwhile;?>
				<?php endif;?>		
				
				<?php if( have_rows('tiled_image_gallery') ): ?>
					<?php while( have_rows('tiled_image_gallery') ): the_row();?>
						<?php if(get_sub_field('title')):?>
							<div id="tiled_image_gallery" class="wrap-960">
								<div class="multi-color-line-wrap"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>					
								<h1 class="centered"><?php the_sub_field('title');?></h1>
								<p class="centered"><?php the_sub_field('subtitle');?></p>
								<?php the_sub_field('gallery_shortcode');?>
							</div>
						<?php endif;?>	
					<?php endwhile;?>
				<?php endif;?>	
				
				

				<?php if( have_rows('video_files') ): ?>
					<div class="yellow-rule-wrap wrap-1300 country-yellow-rule">
						<div class="yellow-rule"></div>
					</div>
					
					<div class="country-videos-wrap">
						<?php while( have_rows('video_files') ): the_row();?>
							<?php if( have_rows('single_video_file') ): ?>
								<div class="single_video_file-wrap">
									<?php while( have_rows('single_video_file') ): the_row();?>
										<div class="video-wrap">			
											<?php the_sub_field('video_link');?>
										</div>
											<div class="video_link-text-wrap">
												<p class="single_video_file-title"><?php the_sub_field('title');?></p>
												<a href="<?php the_sub_field('video_link_2');?>" target="_blank">view on youtube</a>
											</div>
									<?php endwhile;?>
								</div>
							<?php endif;?>	
						<?php endwhile;?>
					</div>
				<?php endif;?>	




					
			</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
