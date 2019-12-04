<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Global_Dignity
 */
/**
 * @license
 * MyFonts Webfont Build ID 3484785, 2017-11-16T10:01:47-0500
 * 
 * The fonts listed in this notice are subject to the End User License
 * Agreement(s) entered into by the website owner. All other parties are 
 * explicitly restricted from using the Licensed Webfonts(s).
 * 
 * You may obtain a valid license at the URLs below.
 * 
 * Webfont: HelveticaNeueLTPro-Bd by Linotype
 * URL:
 * https://www.myfonts.com/fonts/linotype/helvetica-neue-pro/helvetica-neue-pro-bold/
 * Copyright: Part of the digitally encoded machine readable outline data for producing
 * the Typefaces provided is copyrighted &#x00A9; 1981 - 2008 Linotype GmbH,
 * www.linotype.com. All rights reserved. This software is the property of Linotype
 * GmbH, and may not be repro
 * Licensed pageviews: 5,000,000
 * 
 * Webfont: HelveticaNeueLTPro-Lt by Linotype
 * URL:
 * https://www.myfonts.com/fonts/linotype/helvetica-neue-pro/helvetica-neue-pro-light/
 * Copyright: Part of the digitally encoded machine readable outline data for producing
 * the Typefaces provided is copyrighted &#x00A9; 1988 - 2008 Linotype GmbH,
 * www.linotype.com. All rights reserved. This software is the property of Linotype
 * GmbH, and may not be repro
 * Licensed pageviews: 2,500,000
 * 
 * Webfont: HelveticaNeueLTPro-Roman by Linotype
 * URL:
 * https://www.myfonts.com/fonts/linotype/helvetica-neue-pro/helvetica-neue-pro-roman/
 * Copyright: Part of the digitally encoded machine readable outline data for producing
 * the Typefaces provided is copyrighted &#x00A9; 1981 - 2008 Linotype GmbH,
 * www.linotype.com. All rights reserved. This software is the property of Linotype
 * GmbH, and may not be repro
 * Licensed pageviews: 2,500,000
 * 
 * Webfont: TradeGothicLTPro-BdCn20 by Linotype
 * URL: https://www.myfonts.com/fonts/linotype/trade-gothic/pro-bold-condensed-20/
 * Copyright: Copyright &#x00A9; 2007 Linotype GmbH, www.linotype.com. All rights
 * reserved. This font software may not be reproduced, modified, disclosed or
 * transferred without the express written approval of Linotype GmbH. Trade Gothic is
 * either a registered trademark
 * Licensed pageviews: 2,500,000
 * 
 * 
 * License: https://www.myfonts.com/viewlicense?type=web&buildid=3484785
 * 
 * © 2017 MyFonts Inc
*/

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
<?php if(is_front_page()):?>
<style>

</style>
<script type='text/javascript'>
jQuery(document).ready(function($) {
	function setHeight() {
	windowHeight = $(window).innerHeight();
	$('.opening-element').css('min-height', windowHeight);
	$('.opening-element-1-mobile').css('min-height', windowHeight + 60);
	$('.opening-element-2-mobile').css('min-height', windowHeight + 60);
	$('.opening-element-3-mobile').css('min-height', windowHeight + 60);
	};
	setHeight();
	$(window).resize(function() {
	setHeight();
	});
});
</script>

<?php endif;?>
</head>

<body <?php body_class(); ?>>
<div id="preloader">
	<div id="loader-animation">
		<div class="multi-color-line loader-mcl"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div>
	</div>
</div>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'global-dignity' ); ?></a>

		

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation wrap-1300">
			<a id="header-logo-mobile" href="<?php echo get_site_url();?>"><img src="<?php the_field('header_logo', 'option');?>" /></a>
			<div id="site-nav-inner">
				<a id="header-logo" href="<?php echo get_site_url();?>"><img src="<?php the_field('header_logo', 'option');?>" /></a>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
				<div id="involved-donate-wrap">
					<button id="get-involved-button" class="button button-get-involved" aria-controls="get-involved" aria-expanded="false">Get Involved</button>
					<a id="donate-button" class="button button-blue" href="<?php echo get_site_url();?>/donate">Donate</a>
				</div>
			</div>
			
			<button class="hamburger-menu">
				  <div class="bar"></div>	
			</button>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	
	
	
	<div id="get-involved-drawer" class="">
		<button type="button" id="get-involved-drawer-close"><span id="one"></span><span id="two"></span></button>
		<div id="get-involved-drawer-inner" class="wrap-960">
			<div id="get-involved-drawer-inner-left" class="get-involved-drawer-inner-cell title-drawer">
				<div class="multi-color-line-wrap"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>
				<h1>Get Involved</h1>					
			</div>
			
		<?php if( have_rows('get_involved_navigation', 'option') ): ?>
			<nav class="get_involved_navigation get-involved-drawer-inner-cell">
				<?php while( have_rows('get_involved_navigation', 'option') ): the_row(); ?>
					<?php if( have_rows('page_link', 'option') ): ?>
						<?php while( have_rows('page_link', 'option') ): the_row(); ?>
							<?php 
							// vars
							$post_id = get_sub_field('link', false, false);
							// check 
							if( $post_id ): ?>	
							<p class="desktop" id="nav<?php echo $post_id; ?>"><?php the_sub_field('label');?></p>
							<a class="mobile" href="<?php the_sub_field('link');?>"><?php the_sub_field('label');?></a>
							<script>
								jQuery(document).ready(function($){
									$("#get_involved_menu_right_inner > div:first-child").addClass('show-card');
									$('nav.get_involved_navigation p#nav<?php echo $post_id; ?>').hover(function(){
										$(".get_involved_preview_card").removeClass('show-card');
										$(".get_involved_preview_card#<?php echo $post_id; ?>").addClass('show-card');
									})
								});
							</script>
							<?php endif;?>
						<?php endwhile;?>
					<?php endif;?>
				<?php endwhile;?>
			</nav>
		<?php endif; ?>
										
		<?php if( have_rows('navigation_&_preview_cards', 'option') ): ?>
			<div id="get_involved_menu_wrap" class="get-involved-drawer-inner-cell preview-card-wrap">
				<div id="get_involved_menu_right_inner">
					<?php while( have_rows('navigation_&_preview_cards', 'option') ): the_row(); ?>
						<?php if( have_rows('single_preview_card', 'option') ): ?>
									<?php while( have_rows('single_preview_card', 'option') ): the_row(); ?>											
										<?php 
										// vars
										$post_id = get_sub_field('page_link', false, false);
										// check 
										if( $post_id ): ?>		
											<div class="get_involved_preview_card" id="<?php echo $post_id; ?>">
												<img class="normal-res" src="<?php the_sub_field('image');?>"/>
												<img class="high-res" src="<?php the_sub_field('high_resolution_image');?>"/> 
												<p><?php the_sub_field('text');?></p>
												<a class="drawer-link button button-black" href="<?php echo get_the_permalink($post_id); ?>"><?php the_sub_field('button_label');?></a>
											</div>
										<?php endif; ?>
									<?php endwhile;?>
						<?php endif;?>
					<?php endwhile;?>
				</div>
			</div>
		<?php endif;?>
											
		</div>
	</div>


	<div id="content" class="site-content">
