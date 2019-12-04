<?php
/**
 * Template Name: Press
 *
 * @package Global_Dignity
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
			<div class="multi-color-line-wrap"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>

			<h1 class="centered wrap-700 intro-padded resources_title"><?php the_field('resources_title', 'option');?></h1>
			<p class="centered wrap-700 intro-padded"><?php the_field('resources_quote', 'option');?></p>
			<p class="centered wrap-700 intro-padded resources_quote_author"><?php the_field('quote_author', 'option');?></p>

			<nav id="resources-navigation" class="page-navigation">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'resources-menu',
						'menu_id'        => 'resources-menu',
						'menu_class'     => 'wrap-1440',
					) );
				?>
			</nav>	
			
			<?php if( have_rows('leadership_page_title_&_intro') ): ?>
				<div id="page_title_intro" class="centered intro-padded">
					<?php while( have_rows('leadership_page_title_&_intro') ): the_row();?>
						<div class="wrap-700">
							<h3 class="centered wrap-700"><?php the_sub_field('page_title');?></h3>
							<p class="centered wrap-700"><?php the_sub_field('page_intro');?></p>
						</div>
					<?php endwhile;?>
				</div>
			<?php endif;?>
			
			<?php if( have_rows('page_title_&_intro') ): ?>
				<div id="document_files" class="wrap-1200 resource-module-wrap">
					<?php while( have_rows('page_title_&_intro') ): the_row();?>
					<p class="resource-module-category">Press</p>
					<h4 class="resource-module-title"><?php the_sub_field('page_title');?></h4>
					<p class="resource-module-intro"><?php the_sub_field('text');?></p>
	
						<?php if( have_rows('press_releases') ): ?>
								<div class="teaching_resources_content-wrap">
									<div class="teaching_resources_content-wrap-inner">
										<?php while( have_rows('press_releases') ): the_row();?>
										<?php if( have_rows('single_press_release') ): ?>
												<?php while( have_rows('single_press_release') ): the_row();?>
												<div class="single-teaching-resource-file">
													<div class="file-left">
														<img src="/wp-content/themes/global-dignity/svg/pdf-icon.svg" width="93px" height="auto" />
														<p class="teaching-resource-file-size"><?php the_sub_field('file_size');?></p>
														<a href="<?php the_sub_field('file');?>">Download PDF</a>
													</div>
													
													<div class="resource-file-right">
														<p class="resource-file-right-category">Documents</p>					
														<h4><?php the_sub_field('file_name');?></h4>
														<p><?php the_sub_field('file_text');?></p>
														<p><?php the_sub_field('suggested_use');?></p>
													</div>										
	
													
													
												</div>
											<?php endwhile;?>
										<?php endif;?>																								
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