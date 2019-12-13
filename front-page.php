<?php
/**
 * The template for the home page
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

<script type='text/javascript'>
jQuery(document).ready(function($) {
	$(window).load(function(){
     $("#preloader").delay(400).fadeOut();
     $("body.home").css("overflow", "visible");
     $('canvas#openingCanvas').delay(1500).fadeIn(); 
	});
});
</script>

	<div id="primary" class="content-area">
		
		<div id="opening-wrap">
			<?php if( have_rows('opening_elements') ): ?>
				<?php while( have_rows('opening_elements') ): the_row(); ?>
	
					<div class="opening-element opening-element-1">
						<div class="canvas-glow"></div>
						<canvas id="openingCanvas"></canvas>
						<div class="opening-element-inner">
							
								<div id="imagine-text-wrap">
									<div id="imagine-text-wrap-inner">
										<div id="red-drop"></div>
										<div id="imagine-text-mask"><div id="white-slash"></div></div>
										<p id="imagine">Imagine a World</p>
									</div>
									<div id="oe-1-underline-mobile"></div>
								</div>
							<a href="#" class="centered opening-element-1-arrow opening-arrow" id="opening-element-1-arrow-jump"><img src="/wp-content/themes/global-dignity/svg/arrow-scroll-down.svg" width="42px" height="auto" /></a>
						</div>
					<div id="opening-element-1-bottom" class="opening-element-bottom"></div>
					</div>

					<div class="opening-element opening-element-2">
						<div class="oe-bg-img high-res" style="background-image:url(<?php the_sub_field('element_2_high_resolution_background_image');?>)"></div>
						<div class="opening-element-mask"></div>
							<div class="opening-element-wrap oe2-wrap">
								<div class="frame frame-top"></div><div class="frame frame-right"></div><div class="frame frame-bottom-r"></div><div class="frame frame-bottom-l"></div><div class="frame frame-left"></div>
								<div class="opening-element-inner">
									<img class="line-globe" src="/wp-content/themes/global-dignity/svg/line-globe.svg" width="141px" height="auto" />
									<div class="oe-2-text-wrap"><div class="oe-2-slash"></div>
										<p class="oe-2-text">where understanding, compassion and love</p>

										<p class="yellow-triumph">triumph</p>

										<span id="trumph-square"></span>
									</div>
								</div>
							<a href="#" class="centered oe-2-arrow"><img  src="/wp-content/themes/global-dignity/svg/arrow-scroll-down.svg" width="42px" height="auto" /></a>
							</div>
					<div id="opening-element-2-bottom" class="opening-element-bottom"></div>
					</div>
					
					<div class="opening-element opening-element-3">
						<div class="oe-bg-img high-res" style="background-image:url(<?php the_sub_field('element_3_high_resolution_background_image');?>)"></div>
						<div class="opening-element-mask"></div>
						<div class="opening-element-inner">
							<div class="oe-3-text-wrap">
							<div class="oe-3-top-bar oe-3-bar"></div>
							
								<p class="oe-3-where">where</p>
								<p class="oe-3-everyone">Everyone</p>
								<p class="oe-3-seen-as">is seen as</p>
								<p class="oe-3-equal">Equal.</p>
								
							<div class="oe-3-bottom-bar oe-3-bar"></div>
							<a href="#" class="centered oe-3-arrow"><img  src="/wp-content/themes/global-dignity/svg/arrow-scroll-down.svg" width="42px" height="auto" /></a>
							</div>
						</div>
					<div id="opening-element-3-bottom" class="opening-element-bottom"></div>
					</div>
					
					<div class="opening-element opening-element-4">
						<div class="oe-bg-img high-res" style="background-image:url(<?php the_sub_field('element_4_high_resolution_background_image');?>)"></div>
						<div class="opening-element-mask"></div>
						<div class="opening-element-inner oe4-wrap">		
							<div class="oe-4-text-top">				
								<p class="we-build"><span>We</span> <span>are</span> <span>working</span> <span>to</span> <span>build</span></p>
							</div>
							<div class="oe-4-bottom">
								<div class="oe-4-text-bottom-l">
									<p class="that-world"><span>that</span> <span>world</span></p>
								</div>
								<div class="oe-4-text-bottom-r">
									<div class="everyday-wrap oe-word-wrap">	
										<p class="everyday">everyday</p>
									</div>
									<p class="we-need"><span>but</span> <span>we</span> <span>need</span></p>
										<p class="you">you.</p>
									<div class="bg-circle"></div>
								</div>
							</div>
							<a href="#" class="centered oe-4-arrow"><img  src="/wp-content/themes/global-dignity/svg/arrow-scroll-down.svg" width="42px" height="auto" /></a>
						</div>
					<div id="opening-element-4-bottom" class="opening-element-bottom"></div>
					</div>
					
					<div id="opening-progress-wrap">
						<div id="opening-progress">
							<div id="opening-nav-bg-line"></div>
							<div id="sticky1" class="sticky-number">01</div>
							<div id="sticky2" class="sticky-number">02</div>
							<div id="sticky3" class="sticky-number">03</div>
							<div id="sticky4" class="sticky-number">04</div>
						</div>
					</div>
					<?php endwhile;?>
			<?php endif;?>		
		</div>
				
		<main id="main" class="site-main">
			
			<div if class="wrap-920">
				<img class="centered home-element-icon" src="/wp-content/themes/global-dignity/svg/dove-icon.svg" width="48px" height="auto" />
				<div class="multi-color-line-wrap"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>
			</div>
			
			<h1 class="centered text-below">Global Dignity</h1>
			
			<?php if( have_rows('text_left_image_right') ): ?>
				<div id="mission" class="wrap-1300">
				<?php while( have_rows('text_left_image_right') ): the_row(); ?>
					<div id="mission-img-wrap" class="mobile">
						<img class="high-res" src="<?php the_sub_field('high_resolution_image');?>"/> 
					</div>
					<div id="mission-text-button-wrap" class="mobile-padded">
							<p><?php the_sub_field('text');?></p>
							<?php $link = get_sub_field('link');
							if( $link ): ?>
								<a class="button button-black ps2id" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
							<?php endif; ?>
					</div>
					<div id="mission-img-wrap" class="desktop">
						<img class="high-res" src="<?php the_sub_field('high_resolution_image');?>"/> 
					</div>
				<?php endwhile;?>
				</div>
			<?php endif;?>
			
			<div class="yellow-rule-wrap wrap-1300">
				<div class="yellow-rule"></div>
			</div>
						
			<?php if( have_rows('global_dignity_day') ): ?>
				<?php while( have_rows('global_dignity_day') ): the_row(); ?>
					<?php
					$checked = get_sub_field('move_up_on_home_page');
					if( $checked  ): ?>
						<div id="global-dignity-day" class="wrap-1350">
	
							<div class="image-right-overlap-wrap">
								<h1><?php the_sub_field('title');?></h1>
								<p class="blue-date"><?php the_sub_field('date');?></p>
									<div class="inner-box">			
										<div class="multi-color-line-wrap"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>
										<p><?php the_sub_field('text');?></p>
										<?php $link = get_sub_field('link');
										if( $link ): ?>
										<a class="button button-black" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
										<?php endif; ?>
									</div>
							</div>
							<img class="high-res home-gdd-img" src="<?php the_sub_field('image_high-res');?>"/> 
							
							
							<div class="inner-box inner-box-mobile">			
								<div class="multi-color-line-wrap"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>
								<p><?php the_sub_field('text');?></p>
								<?php $link = get_sub_field('link');
								if( $link ): ?>
								<a class="button button-black" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
								<?php endif; ?>
							</div>
						</div>
					<?php endif; ?>			
				<?php endwhile;?>
			<?php endif;?>
			
			<?php if( have_rows('global_community') ): ?>
				<div id="a-global-community" class="wrap-1300 mobile-padded">
					<img class="centered home-element-icon" src="/wp-content/themes/global-dignity/svg/global-community-icon.svg" width="48px" height="auto" />
				<div class="multi-color-line-wrap"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>
				<?php while( have_rows('global_community') ): the_row(); ?>	
					<h1 class="centered wrap-700"><?php the_sub_field('title');?></h1>
					<p class="centered wrap-700"><?php the_sub_field('text');?></p>
					
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
					
				<div id="home-mobile-country-map"><img src="<?php the_sub_field('map_for_mobile');?>" /></div>

				<?php if( have_rows('country_map') ): ?>
					<?php while( have_rows('country_map') ): the_row(); ?>
						<div id="home-map-wrap">
							<img src="<?php the_sub_field('map_image');?>" width="1197px" />
							<div id="pin-wrap">
								<?php if( have_rows('country_pins') ): ?>
									<?php while( have_rows('country_pins') ): the_row(); ?>
									
										<?php if( have_rows('single_country') ): ?>
											<?php while( have_rows('single_country') ): the_row(); ?>								
									
												<div class="single_country" style="top:<?php the_sub_field('position_from_top');?>%;left:<?php the_sub_field('position_from_left');?>%">
													<?php 
														$link = get_sub_field('country_page_link');
														if( $link ): ?>				
															<a href="<?php echo $link['url']; ?>" class="pin"><img src="<?php the_sub_field('pin_icon');?>"/></a>
															<a class="country-tooltip" href="<?php echo $link['url']; ?>">
																<div class="tooltip-inner">
																	<span class="country-tooltip-title"><?php echo $link['title']; ?></span>
																	<img src="<?php the_sub_field('flag');?>"/>
																</div>
															</a>
													<?php endif; ?>
												</div>
											<?php endwhile;?>
										<?php endif;?>							
									<?php endwhile;?>
								<?php endif;?>
							</div>	
						</div>						
					<?php endwhile;?>
				<?php endif;?>					
										
					<?php $link = get_sub_field('learn_more_link');
					if( $link ): ?>
						<a class="button button-clear" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
					<?php endif; ?>
				<?php endwhile;?>
				</div>
			<?php endif;?>	
			
			<?php if( have_rows('home_video_element') ): ?>
				<div id="home_video_element" class="video-wrap">
					<?php while( have_rows('home_video_element') ): the_row(); ?>		
					<?php the_sub_field('link');?>
					<div class="video-text-overlay">
						<div class="fw_video_top_pipe"></div>
						<span><?php the_sub_field('date');?></span>
						<span><?php the_sub_field('location');?></span>
						<h2><?php the_sub_field('title');?></h2>
						<p><?php the_sub_field('text');?></p>
					</div>
					<?php endwhile;?>
					<div class="video-mask" id="home_video_mask"></div>
				</div>
			<?php endif;?>
			
			
			<?php if( have_rows('home_video_element') ): ?>
				<?php while( have_rows('home_video_element') ): the_row(); ?>
					<div class="video-text-overlay vto-mobile">
						<div class="fw_video_top_pipe"></div>
						<span><?php the_sub_field('date');?></span>
						<span><?php the_sub_field('location');?></span>
						<h2><?php the_sub_field('title');?></h2>
						<p><?php the_sub_field('text');?></p>
					</div>			
				<?php endwhile;?>
			<?php endif;?>				
			

				<?php if( have_rows('global_dignity_day') ): ?>
					<?php while( have_rows('global_dignity_day') ): the_row(); ?>
						<?php
						$checked = get_sub_field('move_up_on_home_page');
						if( !$checked  ): ?>
							<div id="global-dignity-day" class="wrap-1350">
		
								<div class="image-right-overlap-wrap">
									<h1><?php the_sub_field('title');?></h1>
									<p class="blue-date"><?php the_sub_field('date');?></p>
										<div class="inner-box">			
											<div class="multi-color-line-wrap"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>
											<p><?php the_sub_field('text');?></p>
											<?php $link = get_sub_field('link');
											if( $link ): ?>
											<a class="button button-black" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
											<?php endif; ?>
										</div>
								</div>
								<img class="high-res home-gdd-img" src="<?php the_sub_field('image_high-res');?>"/> 
								
								
								<div class="inner-box inner-box-mobile">			
									<div class="multi-color-line-wrap"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>
									<p><?php the_sub_field('text');?></p>
									<?php $link = get_sub_field('link');
									if( $link ): ?>
									<a class="button button-black" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
									<?php endif; ?>
								</div>
							</div>
						<?php endif; ?>			
					<?php endwhile;?>
				<?php endif;?>
			
			<?php if( have_rows('join_us_navigation') ): ?>
				<div id="join-us" class="wrap-1401">

				<?php while( have_rows('join_us_navigation') ): the_row(); ?>	
					<img class="centered home-element-icon" src="/wp-content/themes/global-dignity/svg/handshake-icon.svg" width="48px" height="auto" />
					<div class="multi-color-line-wrap"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>		
					<h1 class="centered"><?php the_sub_field('title');?></h1>
					<div id="join_us_nav_wrap">
						<div id="join_us_nav_four">
							<?php if( have_rows('volunteer') ): ?>
								<?php while( have_rows('volunteer') ): the_row(); ?>
										<?php 
										$link = get_sub_field('page_link');
										if( $link ): ?>

								<a href="<?php echo $link['url']; ?>" class="join_us_nav nav_four_small high-res" id="volunteer-link" style="background-image:url(<?php the_sub_field('high_resolution_background_image');?>);"><span><?php echo $link['title']; ?></span><div class="join_us_nav-mask"></div></a>
										<?php endif; ?>
								<?php endwhile;?>
							<?php endif;?>	
							
							<?php if( have_rows('global_dignity_day') ): ?>
								<?php while( have_rows('global_dignity_day') ): the_row(); ?>
										<?php 
										$link = get_sub_field('page_link');
										if( $link ): ?>
								<a href="<?php echo $link['url']; ?>" class="join_us_nav nav_four_large high-res" id="global_dignity_day-link" style="background-image:url(<?php the_sub_field('high_resolution_background_image');?>);"><span><?php echo $link['title']; ?></span><div class="join_us_nav-mask"></div></a>
										<?php endif; ?>
								<?php endwhile;?>
							<?php endif;?>	
							
							<?php if( have_rows('donate') ): ?>
								<?php while( have_rows('donate') ): the_row(); ?>
										<?php 
										$link = get_sub_field('page_link');
										if( $link ): ?>
								<a href="<?php echo $link['url']; ?>" class="join_us_nav nav_four_small high-res" id="donate-link" style="background-image:url(<?php the_sub_field('high_resolution_background_image');?>);"><span><?php echo $link['title']; ?></span><div class="join_us_nav-mask"></div></a>
										<?php endif; ?>
								<?php endwhile;?>
							<?php endif;?>	
								
							<?php if( have_rows('teaching_dignity') ): ?>
								<?php while( have_rows('teaching_dignity') ): the_row(); ?>
										<?php 
										$link = get_sub_field('page_link');
										if( $link ): ?>
								<a href="<?php echo $link['url']; ?>" class="join_us_nav nav_four_large high-res" id="teaching-link" style="background-image:url(<?php the_sub_field('high_resolution_background_image');?>);"><span><?php echo $link['title']; ?></span><div class="join_us_nav-mask"></div></a>
										<?php endif; ?>
								<?php endwhile;?>
							<?php endif;?>
						</div>	
						
						<?php if( have_rows('take_a_dignity_pledge') ): ?>
							<?php while( have_rows('take_a_dignity_pledge') ): the_row(); ?>
									<?php 
									$link = get_sub_field('page_link');
									if( $link ): ?>
									
								<a href="<?php echo $link['url']; ?>" class="join_us_nav high-res take-a-dig-link" style="background-image:url(<?php the_sub_field('high_resolution_background_image');?>);"><span><?php echo $link['title']; ?></span><div class="join_us_nav-mask take-a-dig-mask"></div></a>
									<?php endif; ?>
							<?php endwhile;?>
						<?php endif;?>	
						

						
					</div>
					
					<div id="join_us_nav_two">

							<?php if( have_rows('affiliate_program') ): ?>
								<?php while( have_rows('affiliate_program') ): the_row(); ?>
										<?php 
										$link = get_sub_field('page_link');
										if( $link ): ?>
										
									<a href="<?php echo $link['url']; ?>" class="join_us_nav affiliate_nav high-res" style="background-image:url(<?php the_sub_field('high_resolution_background_image');?>);"><span><?php echo $link['title']; ?></span><div class="join_us_nav-mask take-a-dig-mask"></div></a>
										<?php endif; ?>
								<?php endwhile;?>
							<?php endif;?>	
							
							<?php if( have_rows('partner_organizations') ): ?>
								<?php while( have_rows('partner_organizations') ): the_row(); ?>
										<?php 
										$link = get_sub_field('page_link');
										if( $link ): ?>
										
									<a href="<?php echo $link['url']; ?>" class="join_us_nav partner_organization_nav high-res" style="background-image:url(<?php the_sub_field('high_resolution_background_image');?>);"><span><?php echo $link['title']; ?></span><div class="join_us_nav-mask take-a-dig-mask"></div></a>
										<?php endif; ?>
								<?php endwhile;?>
							<?php endif;?>	

						</div>
				
				<?php endwhile;?>
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
						
			<?php if( have_rows('story_video_grid') ): ?>
				<div id="we-all-have-a-story" class="wrap-1350">
					<img class="centered home-element-icon" src="/wp-content/themes/global-dignity/svg/story-icon.svg" width="48px" height="auto" />
					<div class="multi-color-line-wrap"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>
				<?php while( have_rows('story_video_grid') ): the_row(); ?>
					<h1 class="centered wrap-700 text-below"><?php the_sub_field('title');?></h1>
					<p class="centered wrap-700"><?php the_sub_field('intro_text');?></p>
					<?php if( have_rows('videos') ): ?>
						<div id="videos">
						<?php while( have_rows('videos') ): the_row(); ?>					
							<?php if( have_rows('single_video') ): ?>
								<?php while( have_rows('single_video') ): the_row(); ?>	
									<div class="single_video">
										<div class="video-wrap">
										<?php the_sub_field('youtube_link');?>
										</div>
										<div class="single_video_text_wrap">
											<div class="single_video_top_pipe"></div>
											<span><?php the_sub_field('date');?></span>
											<span><?php the_sub_field('location');?></span>
											<h2><?php the_sub_field('title');?></h2>
											<p class="story-video-text"><?php the_sub_field('text');?></p>
										</div>

									</div>
								<?php endwhile;?>
							<?php endif;?>	
						<?php endwhile;?>
						</div>
					<?php endif;?>	
						<?php $link = get_sub_field('see_more_link');
						if( $link ): ?>
						<a class="button button-black" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
						<?php endif; ?>				
				<?php endwhile;?>
				</div>
			<?php endif;?>	
							
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();


