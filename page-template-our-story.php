<?php
/**
 * Template Name: Our Story
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

				<div id="banner-overlay-text-wrap">
					<h1 class="centered"><?php the_sub_field('page_title');?></h1>
					<p class="centered"><?php the_sub_field('banner_overlay_text');?></p>
					<a class="centered arrow-down-skip-link ps2id" href="#next"><img id="down-arrow-bounce" src="/wp-content/themes/global-dignity/svg/arrow-scroll-down.svg" width="42px" height="auto" /></a>
				</div>
			<?php endwhile;?>
		</div>
	<?php endif;?>	
	<div id="next"></div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="wrap-1440">
				<?php if( have_rows('page_intro') ): ?>
					<div class="multi-color-line-wrap"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>
					<div id="mission-and-vision" class="wrap-700 mobile-padded">
						<?php while( have_rows('page_intro') ): the_row(); ?>	
						<h1 class="centered text-below"><?php the_sub_field('title');?></h1>
						<p class="centered"><?php the_sub_field('text');?></p>
						<?php endwhile;?>
					</div>
				<?php endif;?>
				
					<div class="yellow-rule-wrap os-rule-top wrap-1300">
						<div class="yellow-rule"></div>
					</div>
				
					<?php if( have_rows('image_offset_text_box') ): ?>
						<div id="global-dignity-day" class="wrap-1350">
						<?php while( have_rows('image_offset_text_box') ): the_row(); ?>
							<div class="image-right-overlap-wrap">
									<div class="inner-box">			
										<div class="multi-color-line-wrap"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>
		<div id="blue-bounce-trigger"></div>
										<p id="small_title"><?php the_sub_field('small_title');?></p>
										<h1><?php the_sub_field('title');?></h1>
										<p><?php the_sub_field('text');?></p>
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
					
					
				<?php if( have_rows('dignity_principles') ): ?>
					<?php while( have_rows('dignity_principles') ): the_row(); ?>			
						<div id="dignity_principles_wrap">
							<div id="dignity_principles" class="wrap-1300">
								<div class="multi-color-line-wrap"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>
								<h1 class="centered">Dignity Principles</h1>
								<div id="principles-intro-wrap" class="wrap-700">
									<?php the_sub_field('principles_intro');?>
								</div>
									<div class="dignity-cards-wrap">
										<div class="principle-card" id="one"><div class="number-wrap"><div class="number-bg"><div class="number">1</div></div></div><p><?php the_sub_field('one');?></p></div>
										<div class="principle-card" id="two"><div class="number-wrap"><div class="number-bg"><div class="number">2</div></div></div><p><?php the_sub_field('two');?></p></div>
										<div class="principle-card" id="three"><div class="number-wrap"><div class="number-bg"><div class="number">3</div></div></div><p><?php the_sub_field('three');?></p></div>
										<div class="principle-card" id="four"><div class="number-wrap"><div class="number-bg"><div class="number">4</div></div></div><p><?php the_sub_field('four');?></p></div>
										<div class="principle-card" id="five"><div class="number-wrap"><div class="number-bg"><div class="number">5</div></div></div><p><?php the_sub_field('five');?></p></div>
									</div>
							</div>
						</div>
					<?php endwhile;?>
				<?php endif;?>	
				
		<div id="rule-above-video-1" class="yellow-rule-wrap os-rule-bottom">
			<div class="yellow-rule wrap-1300"></div>
		</div>
					
				
				<?php if( have_rows('about_us_video_1') ): ?>
					<div id="about_us_video_1" class="video-wrap">
						<?php while( have_rows('about_us_video_1') ): the_row(); ?>		
						<?php the_sub_field('link');?>
						<div class="video-text-overlay">
							<div class="fw_video_top_pipe"></div>
							<span><?php the_sub_field('date');?></span>
							<span><?php the_sub_field('location');?></span>
							<h2><?php the_sub_field('title');?></h2>
							<p><?php the_sub_field('text');?></p>
						</div>
						<?php endwhile;?>
						<div class="video-mask" id="about_us_video_1_mask"></div>
					</div>
				<?php endif;?>
				
				<?php if( have_rows('about_us_video_1') ): ?>
					<?php while( have_rows('about_us_video_1') ): the_row(); ?>
						<div class="video-text-overlay vto-mobile">
							<div class="fw_video_top_pipe"></div>
							<span><?php the_sub_field('date');?></span>
							<span><?php the_sub_field('location');?></span>
							<h2><?php the_sub_field('title');?></h2>
							<p><?php the_sub_field('text');?></p>
						</div>			
					<?php endwhile;?>
				<?php endif;?>	
				
				
				<?php if( have_rows('what_we_believe') ): ?>
					<div id="what-we-believe" class="wrap-960 mobile-padded">
						<div class="wrap-700">
							<div class="multi-color-line-wrap"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>
							<?php while( have_rows('what_we_believe') ): the_row(); ?>
								<h1 class="centered"><?php the_sub_field('what_we_believe_title');?></h1>				
								<h3><?php the_sub_field('what_is_dignity_title');?></h3>
								<p><?php the_sub_field('what_is_dignity_text');?></p>
								<h3><?php the_sub_field('call_to_action_title');?></h3>
								<p><?php the_sub_field('call_to_action_text');?></p>
							<?php endwhile;?>
						</div>
					</div>
				<?php endif;?>
				
				
				
				
				<div id="history" class="wrap-960  mobile-padded">
					<div class="wrap-700">
						<?php the_field('our_history');?>
					</div>
				</div>
		
				<?php if( have_rows('the_first_decade') ): ?>
					<div id="the_first_decade" class="wrap-700">
						<?php while( have_rows('the_first_decade') ): the_row(); ?>					
							<h2><?php the_sub_field('title');?></h2>
							<p><?php the_sub_field('text');?></p>		
						<?php endwhile;?>
					</div>
				<?php endif;?>
			</div>
<!--
 			<div id="anchor-nav-wrap">
				<div class="anchor-nav wrap-960" role="navigation">
					<div id="anchor-progress"></div>
				    <p id="anchor2006">2006</p>
				    <div class="anchor-spacer"></div>
				    <p id="anchor2008">2008</p>
				    <div class="anchor-spacer"></div>
				    <p id="anchor2011">2011</p>
				    <div class="anchor-spacer"></div>
				    <p id="anchor2014">2014</p>
				    <div class="anchor-spacer"></div>
				    <p id="anchor2015">2015</p>
				    <div class="anchor-spacer"></div>				    
				    <p id="anchor2016">2016</p>
				    <div class="anchor-spacer"></div>				    
				    <p id="anchor2017">2017</p>
	  			</div>
			</div>	
--> 	
			
			
			
		<div id="timeline-wrap">
			<div id="timeline-intro"><img class="timeline-icon" src="/wp-content/themes/global-dignity/svg/dove-icon.svg" width="48px" height="auto" /><div id="dotted_line"></div><img id="timeline-blue-down-arrow" src="/wp-content/themes/global-dignity/svg/blue-arrow-scroll-down.svg" width="37px" height="auto" /></div>  			
<!-- 			<div id="timeline-wrap-inner"> -->
				<?php if( have_rows('timeline') ): ?>
					<div id="timeline" class="wrap-960">

						<?php while( have_rows('timeline') ): the_row(); ?>		
							<?php if( have_rows('single_year') ): ?>
								<?php while( have_rows('single_year') ): the_row(); ?>
									<div class="single-timeline-year" id="<?php the_sub_field('year');?>">
								<?php endwhile;?>
							<?php endif;?>						
						<?php if( have_rows('single_year') ): ?>
							<?php while( have_rows('single_year') ): the_row(); ?>
								<div class="timeline-year-text-img-wrap">
									<h4><?php the_sub_field('year');?></h4>
									<img class="tl-mobile-img" src="<?php the_sub_field('mobile_image');?>" />
									<img class="tl-img"  src="<?php the_sub_field('image');?>" />
								</div>
								<p class="timeline-copy tc-mobile"><?php the_sub_field('text');?></p>
								<p class="timeline-copy tc-desktop"><?php the_sub_field('text');?></p>
					</div>
						<?php endwhile;?>
				<?php endif;?>
						<?php endwhile;?>
					</div>
				<?php endif;?>
<!-- 			</div> -->
		</div>
		

		
		<div class="wrap-1440">
			<?php if( have_rows('about_us_video_2') ): ?>
				<div id="about_us_video_2" class="video-wrap">
					<?php while( have_rows('about_us_video_2') ): the_row(); ?>		
					<?php the_sub_field('link');?>
					<div class="video-text-overlay">
						<div class="fw_video_top_pipe"></div>
						<span><?php the_sub_field('date');?></span>
						<span><?php the_sub_field('location');?></span>
						<h2><?php the_sub_field('title');?></h2>
						<p><?php the_sub_field('text');?></p>
					</div>
					<?php endwhile;?>
				<div class="video-mask" id="about_us_video_2_mask"></div>
				</div>
			<?php endif;?>
		</div>
		
		<?php if( have_rows('about_us_video_2') ): ?>
			<?php while( have_rows('about_us_video_2') ): the_row(); ?>
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
