<?php
/**
 * Template Name: Board of Directors
 *
 * @package Global_Dignity
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="multi-color-line-wrap no-banner"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>

			<h1 class="centered wrap-700 intro-padded"><?php the_field('leadership_title', 'option');?></h1>
			
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
		
		<?php if( have_rows('Officers_bio_cards') ): ?>
			<div class="leadership_bio_cards" id="Officers_bio_cards">
				<h4 class="centered">Officers</h4>
				<?php while( have_rows('Officers_bio_cards') ): the_row(); ?>			
				<?php if( have_rows('single_bio_card') ): ?>
					<div class="single_bio_card_wrap">
						<div class="single_bio_card wrap-960">
							<?php while( have_rows('single_bio_card') ): the_row(); ?>
								
								<img class="high-res round-portrait" src="<?php the_sub_field('high_resolution_image');?>"/> 
								<div class="bio-card-text-wrap">							
									<h3><?php the_sub_field('name');?></h3><img class="flag" src="<?php the_sub_field('flag');?>"/>
									<p class="member-title"><?php the_sub_field('title');?></p>
									<p><?php the_sub_field('bio_text');?></p>
								</div>
							<?php endwhile;?>
						</div>
					</div>
				<?php endif;?>
				<?php endwhile;?>
			</div>
		<?php endif;?>		
		
		
		<?php if( have_rows('board_members_bio_cards') ): ?>
			<div class="leadership_bio_cards" id="board_members_bio_cards">
				<h4 class="centered">Board Members</h4>
				<?php while( have_rows('board_members_bio_cards') ): the_row(); ?>			
				<?php if( have_rows('single_bio_card') ): ?>
					<div class="single_bio_card_wrap">
						<div class="single_bio_card wrap-960">
							<?php while( have_rows('single_bio_card') ): the_row(); ?>
								<img class="high-res round-portrait" src="<?php the_sub_field('high_resolution_image');?>"/> 
								<div class="bio-card-text-wrap">
									<h3><?php the_sub_field('name');?></h3><img class="flag" src="<?php the_sub_field('flag');?>"/>
									<p><?php the_sub_field('title');?></p>
									<p><?php the_sub_field('bio_text');?></p>
								</div>
							<?php endwhile;?>
						</div>
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


