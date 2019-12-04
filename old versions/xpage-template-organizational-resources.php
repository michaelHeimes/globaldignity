<?php
/**
 * Template Name: Organizational Resources
 *
 * @package Global_Dignity
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="multi-color-line-wrap no-banner"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>

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
		
			<?php if( have_rows('page_title_&_intro') ): ?>
				<div id="page_title_intro" class="to-be-sticky centered intro-padded">
					<?php while( have_rows('page_title_&_intro') ): the_row();?>
					<h3 class="centered wrap-700"><?php the_sub_field('page_title');?></h3>
					<p class="centered wrap-700"><?php the_sub_field('text');?></p>
					<?php endwhile;?>
				</div>
			<?php endif;?>	

			<?php if( have_rows('toolkits') ): ?>
				<div id="toolkits" class="wrap-1200 resource-module-wrap">
					<?php while( have_rows('toolkits') ): the_row();?>
						<p class="resource-module-category">Organizational Resources</p>			
						<h4 class="resource-module-title"><?php the_sub_field('title');?></h4>
						<p class="resource-module-intro"><?php the_sub_field('text');?></p>	
						<?php if( have_rows('files') ): ?>
							<div id="toolkit_files">
								<div id="toolkit_files_inner">
									<?php while( have_rows('files') ): the_row();?>
										<?php if( have_rows('single_file') ): ?>
												<?php while( have_rows('single_file') ): the_row();?>
													<div class="single-toolkit-file">
														<div class="single-toolkit-file-inner-wrap">
															<div class="single-toolkit-file-inner">
																<img class="file-icon" src="/wp-content/themes/global-dignity/svg/pdf-icon.svg" width="47px" height="auto" />	
																<div class="single_file_text_wrap">
																	<p class="above_name"><?php the_sub_field('above_name');?></p>			
																	<h4><?php the_sub_field('file_name');?></h4>
																	<a href="<?php the_sub_field('file');?>" target="_blank">Download PDF</a>
																</div>
															</div>
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