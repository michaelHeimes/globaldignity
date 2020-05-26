<?php
/**
 * Template Name: Teaching Dignity
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
		
		<?php if( have_rows('leadership_page_title_&_intro') ): ?>
			<div id="page_title_intro" class="to-be-sticky centered intro-padded">
				<?php while( have_rows('leadership_page_title_&_intro') ): the_row();?>
					<div class="wrap-700">
						<h3 class="centered wrap-700"><?php the_sub_field('page_title');?></h3>
						<p class="centered wrap-700"><?php the_sub_field('page_intro');?></p>
					</div>
				<?php endwhile;?>
			</div>
		<?php endif;?>	
			
			<nav id="resources_on_page_navigation" class="centered">
					<?php if( have_rows('learner_experiences_navigation') ): ?>
							<?php while( have_rows('learner_experiences_navigation') ): the_row();?>								
								
								<a href="#learner_experiences" id="learner_experiences_navigation"  class="ps2id single-resource-nav high-res" style="background-image:url(<?php the_sub_field('background_image');?>);background-repeat:no-repeat;background-position:center center; background-size:cover;">
									<h4>Learning Experiences</h4>
									<p><?php the_sub_field('text');?></p>
									<img class="centered" src="/wp-content/themes/global-dignity/svg/arrow-scroll-down.svg" width="42px" height="auto" />
									<p>view learning experiences</p>
								<div class="single-resource-nav-mask"></div>	
								</a>						
							<?php endwhile;?>
					<?php endif;?>
							
					<?php if( have_rows('toolkits_navigation') ): ?>
							<?php while( have_rows('toolkits_navigation') ): the_row();?>								
								
								<a href="#toolkits" id="toolkits_navigation" class="ps2id single-resource-nav high-res" style="background-image:url(<?php the_sub_field('background_image');?>);background-repeat:no-repeat;background-position:center center; background-size:cover;">
									<h4>Toolkits</h4>
									<p><?php the_sub_field('text');?></p>
									<img class="centered" src="/wp-content/themes/global-dignity/svg/arrow-scroll-down.svg" width="42px" height="auto" />
									<p>view toolkits</p>
								<div class="single-resource-nav-mask"></div>													
								</a>						
							<?php endwhile;?>
					<?php endif;?>
							
					<?php if( have_rows('teaching_resources_navigation') ): ?>
							<?php while( have_rows('teaching_resources_navigation') ): the_row();?>								
								
								<a href="#teaching_resources" id="teaching_resources_navigation"  class="ps2id single-resource-nav high-res" style="background-image:url(<?php the_sub_field('background_image');?>);background-repeat:no-repeat;background-position:center center; background-size:cover;">
									<h4>Teaching Resources</h4>
									<p><?php the_sub_field('text');?></p>
									<img class="centered" src="/wp-content/themes/global-dignity/svg/arrow-scroll-down.svg" width="42px" height="auto" />
									<p>view resources</p>
								<div class="single-resource-nav-mask"></div>												
								</a>						
							<?php endwhile;?>
					<?php endif;?>
			</nav>
			
			<div class="clear resource-module-wrap"></div>
			
			<?php if( have_rows('learner_experiences') ): ?>
					<?php while( have_rows('learner_experiences') ): the_row();?>
					<div id="learner_experiences" class="wrap-1200 resource-module-wrap">
						<p class="resource-module-category">Teaching Tools</p>
						<h4 class="resource-module-title">Learning Experiences</h4>
						<p class="resource-module-intro"><?php the_sub_field('text');?></p>	
					
						<div class="accordion">
							<h4><span>Ages 5-9</span> Learning Experience</h4>
							<div>
								<?php if( have_rows('ages_5-9') ): ?>
										<?php while( have_rows('ages_5-9') ): the_row();?>
											<?php if( have_rows('download_all') ): ?>
													<?php while( have_rows('download_all') ): the_row();?>
														<div class="download-all-wrap">
															<p><?php the_sub_field('instructions');?></p>			
															<a class="button button-black" href="<?php the_sub_field('download_experience_zip');?>" download>Download 5-9 Experience</a>
														</div>
													<?php endwhile;?>
											<?php endif;?>
											<?php if( have_rows('objective_one') ): ?>
												<div class="wrap-960">
													<?php while( have_rows('objective_one') ): the_row();?>	
														<div class="objective-header">	
															<h3 class="objective-number">Ages 5-9 | Objective One</h3>
															<h3 class="objective-title"><?php the_sub_field('objective_title');?></h3>
															<p class="objective-intro"><?php the_sub_field('text');?></p>
														</div>
														<?php if( have_rows('rows') ): ?>
															<?php while( have_rows('rows') ): the_row();?>
																	<?php if( have_rows('single_row') ): ?>
																		<?php while( have_rows('single_row') ): the_row();?>
																			<div class="single_row">
																										
																				<?php if( have_rows('file_1') ): ?>
																					<?php while( have_rows('file_1') ): the_row();?>
																					<?php if(get_sub_field('file_name')):?>
																					<div class="single_file">
																						<img class="file-icon" class="file-icon" src="/wp-content/themes/global-dignity/svg/pdf-icon.svg" width="47px" height="auto" />
																							<div class="single_file_text_wrap">
																								<h4><?php the_sub_field('file_name');?></h4>		
																								<p><?php the_sub_field('file_size');?> | <span>Ages 5-9</span></p>							
																								<a href="<?php the_sub_field('file_link');?>" target="_blank">Download PDF</a>
																							</div>
																					</div>
																					<?php endif;?>
																					<?php endwhile;?>
																				<?php endif;?>	
																				
																				<?php if( have_rows('file_2') ): ?>
																					<?php while( have_rows('file_2') ): the_row();?>
																					<?php if(get_sub_field('file_name')):?>
																					<div class="single_file">
																						<img class="file-icon" src="/wp-content/themes/global-dignity/svg/pdf-icon.svg" width="47px" height="auto" />
																							<div class="single_file_text_wrap">
																								<h4><?php the_sub_field('file_name');?></h4>		
																								<p><?php the_sub_field('file_size');?> | <span>Ages 5-9</span></p>							
																								<a href="<?php the_sub_field('file_link');?>" target="_blank">Download PDF</a>		
																							</div>
																					</div>
																					<?php endif;?>	
																					<?php endwhile;?>
																				<?php endif;?>	
																				
																				<?php if( have_rows('file_3') ): ?>
																					<?php while( have_rows('file_3') ): the_row();?>
																					<?php if(get_sub_field('file_name')):?>
																					<div class="single_file">
																						<img class="file-icon" src="/wp-content/themes/global-dignity/svg/pdf-icon.svg" width="47px" height="auto" />
																							<div class="single_file_text_wrap">
																								<h4><?php the_sub_field('file_name');?></h4>		
																								<p><?php the_sub_field('file_size');?> | <span>Ages 5-9</span></p>							
																								<a href="<?php the_sub_field('file_link');?>" target="_blank">Download PDF</a>
																							</div>
																					</div>
																					<?php endif;?>
																					<?php endwhile;?>
																				<?php endif;?>	
																																																												
																			</div>
																		<?php endwhile;?>
																	<?php endif;?>																	
																<?php endwhile;?>
														<?php endif;?>																
																								
													<?php endwhile;?>
												</div>
											<?php endif;?>
											
											<div class="objective-divider"></div>
											
											<?php if( have_rows('objective_two') ): ?>
												<div class="wrap-960">
													<?php while( have_rows('objective_two') ): the_row();?>		
														<div class="objective-header">
															<h3 class="objective-number">Ages 5-9 | Objective Two</h3>
															<h3 class="objective-title"><?php the_sub_field('objective_title');?></h3>
															<p class="objective-intro"><?php the_sub_field('text');?></p>
														</div>
														<?php if( have_rows('rows') ): ?>
															<?php while( have_rows('rows') ): the_row();?>
																	<?php if( have_rows('single_row') ): ?>
																		<?php while( have_rows('single_row') ): the_row();?>
																			<div class="single_row">
																										
																				<?php if( have_rows('file_1') ): ?>
																					<?php while( have_rows('file_1') ): the_row();?>
																					<?php if(get_sub_field('file_name')):?>
																					<div class="single_file">
																						<img class="file-icon" class="file-icon" src="/wp-content/themes/global-dignity/svg/pdf-icon.svg" width="47px" height="auto" />
																							<div class="single_file_text_wrap">
																								<h4><?php the_sub_field('file_name');?></h4>		
																								<p><?php the_sub_field('file_size');?> | <span>Ages 5-9</span></p>							
																								<a href="<?php the_sub_field('file_link');?>" target="_blank">Download PDF</a>
																							</div>
																					</div>
																					<?php endif;?>
																					<?php endwhile;?>
																				<?php endif;?>	
																				
																				<?php if( have_rows('file_2') ): ?>
																					<?php while( have_rows('file_2') ): the_row();?>
																					<?php if(get_sub_field('file_name')):?>
																					<div class="single_file">
																						<img class="file-icon" src="/wp-content/themes/global-dignity/svg/pdf-icon.svg" width="47px" height="auto" />
																							<div class="single_file_text_wrap">
																								<h4><?php the_sub_field('file_name');?></h4>		
																								<p><?php the_sub_field('file_size');?> | <span>Ages 5-9</span></p>							
																								<a href="<?php the_sub_field('file_link');?>" target="_blank">Download PDF</a>		
																							</div>
																					</div>
																					<?php endif;?>	
																					<?php endwhile;?>
																				<?php endif;?>	
																				
																				<?php if( have_rows('file_3') ): ?>
																					<?php while( have_rows('file_3') ): the_row();?>
																					<?php if(get_sub_field('file_name')):?>
																					<div class="single_file">
																						<img class="file-icon" src="/wp-content/themes/global-dignity/svg/pdf-icon.svg" width="47px" height="auto" />
																							<div class="single_file_text_wrap">
																								<h4><?php the_sub_field('file_name');?></h4>		
																								<p><?php the_sub_field('file_size');?> | <span>Ages 5-9</span></p>							
																								<a href="<?php the_sub_field('file_link');?>" target="_blank">Download PDF</a>
																							</div>
																					</div>
																					<?php endif;?>
																					<?php endwhile;?>
																				<?php endif;?>	
																			</div>
																		<?php endwhile;?>
																	<?php endif;?>																	
																<?php endwhile;?>
														<?php endif;?>																
																								
													<?php endwhile;?>
												</div>
											<?php endif;?>

											<div class="objective-divider"></div>

											<?php if( have_rows('objective_three') ): ?>
												<div class="wrap-960">
													<?php while( have_rows('objective_three') ): the_row();?>	
														<div class="objective-header">														
															<h3 class="objective-number">Ages 5-9 | Objective Three</h3>
															<h3 class="objective-title"><?php the_sub_field('objective_title');?></h3>
															<p class="objective-intro"><?php the_sub_field('text');?></p>
														</div>
														<?php if( have_rows('rows') ): ?>
															<?php while( have_rows('rows') ): the_row();?>
																	<?php if( have_rows('single_row') ): ?>
																		<?php while( have_rows('single_row') ): the_row();?>
																			<div class="single_row">
																										
																				<?php if( have_rows('file_1') ): ?>
																					<?php while( have_rows('file_1') ): the_row();?>
																					<?php if(get_sub_field('file_name')):?>
																					<div class="single_file">
																						<img class="file-icon" class="file-icon" src="/wp-content/themes/global-dignity/svg/pdf-icon.svg" width="47px" height="auto" />
																							<div class="single_file_text_wrap">
																								<h4><?php the_sub_field('file_name');?></h4>		
																								<p><?php the_sub_field('file_size');?> | <span>Ages 5-9</span></p>							
																								<a href="<?php the_sub_field('file_link');?>" target="_blank">Download PDF</a>
																							</div>
																					</div>
																					<?php endif;?>
																					<?php endwhile;?>
																				<?php endif;?>	
																				
																				<?php if( have_rows('file_2') ): ?>
																					<?php while( have_rows('file_2') ): the_row();?>
																					<?php if(get_sub_field('file_name')):?>
																					<div class="single_file">
																						<img class="file-icon" src="/wp-content/themes/global-dignity/svg/pdf-icon.svg" width="47px" height="auto" />
																							<div class="single_file_text_wrap">
																								<h4><?php the_sub_field('file_name');?></h4>		
																								<p><?php the_sub_field('file_size');?> | <span>Ages 5-9</span></p>							
																								<a href="<?php the_sub_field('file_link');?>" target="_blank">Download PDF</a>		
																							</div>
																					</div>
																					<?php endif;?>	
																					<?php endwhile;?>
																				<?php endif;?>	
																				
																				<?php if( have_rows('file_3') ): ?>
																					<?php while( have_rows('file_3') ): the_row();?>
																					<?php if(get_sub_field('file_name')):?>
																					<div class="single_file">
																						<img class="file-icon" src="/wp-content/themes/global-dignity/svg/pdf-icon.svg" width="47px" height="auto" />
																							<div class="single_file_text_wrap">
																								<h4><?php the_sub_field('file_name');?></h4>		
																								<p><?php the_sub_field('file_size');?> | <span>Ages 5-9</span></p>							
																								<a href="<?php the_sub_field('file_link');?>" target="_blank">Download PDF</a>
																							</div>
																					</div>
																					<?php endif;?>
																					<?php endwhile;?>
																				<?php endif;?>	

																			</div>
																		<?php endwhile;?>
																	<?php endif;?>																	
																<?php endwhile;?>
														<?php endif;?>																
																								
													<?php endwhile;?>
												</div>
											<?php endif;?>

										<?php endwhile;?>
								<?php endif;?>
							</div>
						</div><!-- End Accordion -->
					
						<div class="accordion">
							<h4><span>Ages 10+</span> Learning Experience</h4>
							<div>
										
								<?php if( have_rows('ages_10') ): ?>
										<?php while( have_rows('ages_10') ): the_row();?>
											<?php if( have_rows('download_all') ): ?>
													<?php while( have_rows('download_all') ): the_row();?>
														<div class="download-all-wrap">
															<p><?php the_sub_field('instructions');?></p>			
															<a class="button button-black" href="<?php the_sub_field('download_experience_zip');?>" download>Download 10+ Experience</a>															
														</div>									
													<?php endwhile;?>
											<?php endif;?>
																												
											<?php if( have_rows('objective_one') ): ?>
												<div class="wrap-960">
													<?php while( have_rows('objective_one') ): the_row();?>		
														<div class="objective-header">													
															<h3 class="objective-number">Ages 10+ | Objective One</h3>
															<h3 class="objective-title"><?php the_sub_field('objective_title');?></h3>
															<p class="objective-intro"><?php the_sub_field('text');?></p>
														</div>
														<?php if( have_rows('rows') ): ?>
															<?php while( have_rows('rows') ): the_row();?>
																	<?php if( have_rows('single_row') ): ?>
																		<?php while( have_rows('single_row') ): the_row();?>
																			<div class="single_row">
																										
																				<?php if( have_rows('file_1') ): ?>
																					<?php while( have_rows('file_1') ): the_row();?>
																					<?php if(get_sub_field('file_name')):?>
																					<div class="single_file">
																						<img class="file-icon" class="file-icon" src="/wp-content/themes/global-dignity/svg/pdf-icon.svg" width="47px" height="auto" />
																							<div class="single_file_text_wrap">
																								<h4><?php the_sub_field('file_name');?></h4>		
																								<p><?php the_sub_field('file_size');?> | <span>Ages 10+</span></p>							
																								<a href="<?php the_sub_field('file_link');?>" target="_blank">Download PDF</a>
																							</div>
																					</div>
																					<?php endif;?>
																					<?php endwhile;?>
																				<?php endif;?>	
																				
																				<?php if( have_rows('file_2') ): ?>
																					<?php while( have_rows('file_2') ): the_row();?>
																					<?php if(get_sub_field('file_name')):?>
																					<div class="single_file">
																						<img class="file-icon" src="/wp-content/themes/global-dignity/svg/pdf-icon.svg" width="47px" height="auto" />
																							<div class="single_file_text_wrap">
																								<h4><?php the_sub_field('file_name');?></h4>		
																								<p><?php the_sub_field('file_size');?> | <span>Ages 10+</span></p>							
																								<a href="<?php the_sub_field('file_link');?>" target="_blank">Download PDF</a>		
																							</div>
																					</div>
																					<?php endif;?>	
																					<?php endwhile;?>
																				<?php endif;?>	
																				
																				<?php if( have_rows('file_3') ): ?>
																					<?php while( have_rows('file_3') ): the_row();?>
																					<?php if(get_sub_field('file_name')):?>
																					<div class="single_file">
																						<img class="file-icon" src="/wp-content/themes/global-dignity/svg/pdf-icon.svg" width="47px" height="auto" />
																							<div class="single_file_text_wrap">
																								<h4><?php the_sub_field('file_name');?></h4>		
																								<p><?php the_sub_field('file_size');?> | <span>Ages 10+</span></p>							
																								<a href="<?php the_sub_field('file_link');?>" target="_blank">Download PDF</a>
																							</div>
																					</div>
																					<?php endif;?>
																					<?php endwhile;?>
																				<?php endif;?>	
																																																											
																			</div>
																		<?php endwhile;?>
																	<?php endif;?>																	
																<?php endwhile;?>
														<?php endif;?>																
																								
													<?php endwhile;?>
												</div>
											<?php endif;?>
											
											<div class="objective-divider"></div>
											
											<?php if( have_rows('objective_two') ): ?>
												<div class="wrap-960">
													<?php while( have_rows('objective_two') ): the_row();?>	
														<div class="objective-header">														
															<h3 class="objective-number">Ages 10+ | Objective Two</h3>
															<h3 class="objective-title"><?php the_sub_field('objective_title');?></h3>
															<p class="objective-intro"><?php the_sub_field('text');?></p>
														</div>
														<?php if( have_rows('rows') ): ?>
															<?php while( have_rows('rows') ): the_row();?>
																	<?php if( have_rows('single_row') ): ?>
																		<?php while( have_rows('single_row') ): the_row();?>
																			<div class="single_row">
																										
																				<?php if( have_rows('file_1') ): ?>
																					<?php while( have_rows('file_1') ): the_row();?>
																					<?php if(get_sub_field('file_name')):?>
																					<div class="single_file">
																						<img class="file-icon" class="file-icon" src="/wp-content/themes/global-dignity/svg/pdf-icon.svg" width="47px" height="auto" />
																							<div class="single_file_text_wrap">
																								<h4><?php the_sub_field('file_name');?></h4>		
																								<p><?php the_sub_field('file_size');?> | <span>Ages 10+</span></p>							
																								<a href="<?php the_sub_field('file_link');?>" target="_blank">Download PDF</a>
																							</div>
																					</div>
																					<?php endif;?>
																					<?php endwhile;?>
																				<?php endif;?>	
																				
																				<?php if( have_rows('file_2') ): ?>
																					<?php while( have_rows('file_2') ): the_row();?>
																					<?php if(get_sub_field('file_name')):?>
																					<div class="single_file">
																						<img class="file-icon" src="/wp-content/themes/global-dignity/svg/pdf-icon.svg" width="47px" height="auto" />
																							<div class="single_file_text_wrap">
																								<h4><?php the_sub_field('file_name');?></h4>		
																								<p><?php the_sub_field('file_size');?> | <span>Ages 10+</span></p>							
																								<a href="<?php the_sub_field('file_link');?>" target="_blank">Download PDF</a>		
																							</div>
																					</div>
																					<?php endif;?>	
																					<?php endwhile;?>
																				<?php endif;?>	
																				
																				<?php if( have_rows('file_3') ): ?>
																					<?php while( have_rows('file_3') ): the_row();?>
																					<?php if(get_sub_field('file_name')):?>
																					<div class="single_file">
																						<img class="file-icon" src="/wp-content/themes/global-dignity/svg/pdf-icon.svg" width="47px" height="auto" />
																							<div class="single_file_text_wrap">
																								<h4><?php the_sub_field('file_name');?></h4>		
																								<p><?php the_sub_field('file_size');?> | <span>Age 10+</span></p>							
																								<a href="<?php the_sub_field('file_link');?>" target="_blank">Download PDF</a>
																							</div>
																					</div>
																					<?php endif;?>
																					<?php endwhile;?>
																				<?php endif;?>	
																				
																			</div>
																		<?php endwhile;?>
																	<?php endif;?>																	
																<?php endwhile;?>
														<?php endif;?>																
																								
													<?php endwhile;?>
												</div>
											<?php endif;?>
											
											<div class="objective-divider"></div>
											
											<?php if( have_rows('objective_three') ): ?>
												<div class="wrap-960">
													<?php while( have_rows('objective_three') ): the_row();?>		
														<div class="objective-header">													
															<h3 class="objective-number">Ages 10+ | Objective Three</h3>
															<h3 class="objective-title"><?php the_sub_field('objective_title');?></h3>
															<p class="objective-intro"><?php the_sub_field('text');?></p>
														</div>
														<?php if( have_rows('rows') ): ?>
															<?php while( have_rows('rows') ): the_row();?>
																	<?php if( have_rows('single_row') ): ?>
																		<?php while( have_rows('single_row') ): the_row();?>
																			<div class="single_row">
																										
																				<?php if( have_rows('file_1') ): ?>
																					<?php while( have_rows('file_1') ): the_row();?>
																					<?php if(get_sub_field('file_name')):?>
																					<div class="single_file">
																						<img class="file-icon" class="file-icon" src="/wp-content/themes/global-dignity/svg/pdf-icon.svg" width="47px" height="auto" />
																							<div class="single_file_text_wrap">
																								<h4><?php the_sub_field('file_name');?></h4>		
																								<p><?php the_sub_field('file_size');?> | <span>Ages 10+</span></p>							
																								<a href="<?php the_sub_field('file_link');?>" target="_blank">Download PDF</a>
																							</div>
																					</div>
																					<?php endif;?>
																					<?php endwhile;?>
																				<?php endif;?>	
																				
																				<?php if( have_rows('file_2') ): ?>
																					<?php while( have_rows('file_2') ): the_row();?>
																					<?php if(get_sub_field('file_name')):?>
																					<div class="single_file">
																						<img class="file-icon" src="/wp-content/themes/global-dignity/svg/pdf-icon.svg" width="47px" height="auto" />
																							<div class="single_file_text_wrap">
																								<h4><?php the_sub_field('file_name');?></h4>		
																								<p><?php the_sub_field('file_size');?> | <span>Ages 10+</span></p>							
																								<a href="<?php the_sub_field('file_link');?>" target="_blank">Download PDF</a>		
																							</div>
																					</div>
																					<?php endif;?>	
																					<?php endwhile;?>
																				<?php endif;?>	
																				
																				<?php if( have_rows('file_3') ): ?>
																					<?php while( have_rows('file_3') ): the_row();?>
																					<?php if(get_sub_field('file_name')):?>
																					<div class="single_file">
																						<img class="file-icon" src="/wp-content/themes/global-dignity/svg/pdf-icon.svg" width="47px" height="auto" />
																							<div class="single_file_text_wrap">
																								<h4><?php the_sub_field('file_name');?></h4>		
																								<p><?php the_sub_field('file_size');?> | <span>Ages 10+</span></p>							
																								<a href="<?php the_sub_field('file_link');?>" target="_blank">Download PDF</a>
																							</div>
																					</div>
																					<?php endif;?>
																					<?php endwhile;?>
																				<?php endif;?>	

																			</div>
																		<?php endwhile;?>
																	<?php endif;?>																	
																<?php endwhile;?>
														<?php endif;?>																
																								
													<?php endwhile;?>
												</div>
											<?php endif;?>

										<?php endwhile;?>
								<?php endif;?>
							</div>
						</div><!-- End Accordion -->

					<?php endwhile;?>
					</div>
			<?php endif;?>	
			

			<?php if( have_rows('toolkits') ): ?>
				<div id="toolkits" class="wrap-1200 resource-module-wrap">
					<?php while( have_rows('toolkits') ): the_row();?>
						<p class="resource-module-category">Teaching Tools</p>
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
			
			<?php if( have_rows('teaching_resources') ): ?>
				<div id="teaching_resources" class="wrap-1200 resource-module-wrap">
					<p class="resource-module-category">Teaching Tools</p>
					<h4 class="resource-module-title">Teaching Resources</h4>
					<?php while( have_rows('teaching_resources') ): the_row();?>
					<p class="resource-module-intro"><?php the_sub_field('text');?></p>
					
							<?php if( have_rows('exploring_dignity_files') ): ?>
								<div id="exploring_dignity_files" class="accordion">
									<h4>Exploring Dignity</h4>
										<div>
											<div class="teaching_resources_content-wrap">
												<div class="teaching_resources_content-wrap-inner">
													<?php while( have_rows('exploring_dignity_files') ): the_row();?>					
														<?php if( have_rows('single_resource') ): ?>
															<?php while( have_rows('single_resource') ): the_row();?>					
																<div class="single-teaching-resource-file">
																	<?php if( get_sub_field('resource_type') == 'PDF' ): ?>
																		<?php if( have_rows('resource_file') ): ?>
																			<?php while( have_rows('resource_file') ): the_row();?>	
																	<div class="file-left">
																		<img src="/wp-content/themes/global-dignity/svg/pdf-icon.svg" width="93px" height="auto" />
																		<p class="teaching-resource-file-size"><?php the_sub_field('file_size');?></p>
																		<a href="<?php the_sub_field('file');?>" target="_blank">Download PDF</a>
																	</div>
																			<?php endwhile;?>
																		<?php endif;?>
																	<?php endif;?>	
																	
																	<?php if( get_sub_field('resource_type') == 'Video' ): ?>
																		<?php if( have_rows('resource_video') ): ?>
																			<?php while( have_rows('resource_video') ): the_row();?>																		
																				<div class="file-left">
																					<img src="/wp-content/themes/global-dignity/svg/video_link.svg" width="93px" height="auto" />

																					<?php $link = get_sub_field('link_to_video');
																					if( $link ): ?>
																						<p class="teaching-resource-file-size"><?php echo $link['title']; ?><p>
																						<a href="<?php echo $link['url']; ?>" target="_blank">view video</a>
																					<?php endif; ?>
																				</div>
																			<?php endwhile;?>
																		<?php endif;?>																	
																	<?php endif;?>																		
							
																	<?php if( get_sub_field('resource_type') == 'Link' ): ?>
																		<?php if( have_rows('resource_link') ): ?>
																			<?php while( have_rows('resource_link') ): the_row();?>																		
																				<div class="file-left">
																					<img src="/wp-content/themes/global-dignity/svg/link_icon.svg" width="93px" height="auto" />
																					<?php $link = get_sub_field('link_to_resource_page');
																					if( $link ): ?>
																						<p class="teaching-resource-file-size"><?php echo $link['title']; ?><p>
																						<a href="<?php echo $link['url']; ?>" target="_blank">visit page</a>
																					<?php endif; ?>
																				</div>
																			<?php endwhile;?>
																		<?php endif;?>																	
																	<?php endif;?>	
																		
																	<div class="resource-file-right">
																		<p class="resource-file-right-category">Exploring Dignity</p>
																		<h4><?php the_sub_field('resource_name');?></h4>
																		<p><?php the_sub_field('text');?></p>
																		<h5>Suggested Use</h5>
																		<p><?php the_sub_field('suggested_use');?></p>
																	</div>
																</div>
															<?php endwhile;?>
														<?php endif;?>										
													<?php endwhile;?>
												</div>
											</div>
										</div>
								</div>
							<?php endif;?>	
							
							<?php if( have_rows('curriculum_resources_and_tools') ): ?>
								<div id="exploring_dignity_files" class="accordion">
									<h4>Curriculum Resources And Tools</h4>
										<div>
											<div class="teaching_resources_content-wrap">
												<div class="teaching_resources_content-wrap-inner">												
													<?php while( have_rows('curriculum_resources_and_tools') ): the_row();?>					
														<?php if( have_rows('single_resource') ): ?>
															<?php while( have_rows('single_resource') ): the_row();?>					
														<div class="single-teaching-resource-file">
															<?php if( get_sub_field('resource_type') == 'PDF' ): ?>
																<?php if( have_rows('resource_file') ): ?>
																	<?php while( have_rows('resource_file') ): the_row();?>	
															<div class="file-left">
																<img src="/wp-content/themes/global-dignity/svg/pdf-icon.svg" width="93px" height="auto" />
																<p class="teaching-resource-file-size"><?php the_sub_field('file_size');?></p>
																<a href="<?php the_sub_field('file');?>">Download PDF</a>
															</div>
																	<?php endwhile;?>
																<?php endif;?>
															<?php endif;?>	
															
															<?php if( get_sub_field('resource_type') == 'Video' ): ?>
																<?php if( have_rows('resource_video') ): ?>
																	<?php while( have_rows('resource_video') ): the_row();?>																		
																		<div class="file-left">
																			<img src="/wp-content/themes/global-dignity/svg/video_link.svg" width="93px" height="auto" />

																			<?php $link = get_sub_field('link_to_video');
																			if( $link ): ?>
																				<p class="teaching-resource-file-size"><?php echo $link['title']; ?><p>
																				<a href="<?php echo $link['url']; ?>" target="_blank">view video</a>
																			<?php endif; ?>
																		</div>
																	<?php endwhile;?>
																<?php endif;?>																	
															<?php endif;?>																		
					
															<?php if( get_sub_field('resource_type') == 'Link' ): ?>
																<?php if( have_rows('resource_link') ): ?>
																	<?php while( have_rows('resource_link') ): the_row();?>																		
																		<div class="file-left">
																			<img src="/wp-content/themes/global-dignity/svg/link_icon.svg" width="93px" height="auto" />
																			<?php $link = get_sub_field('link_to_resource_page');
																			if( $link ): ?>
																				<p class="teaching-resource-file-size"><?php echo $link['title']; ?><p>
																				<a href="<?php echo $link['url']; ?>" target="_blank">visit page</a>
																			<?php endif; ?>
																		</div>
																	<?php endwhile;?>
																<?php endif;?>																	
															<?php endif;?>
																
															<div class="resource-file-right">
																<p class="resource-file-right-category">Curriculum Resources And Tools</p>
																<h4><?php the_sub_field('resource_name');?></h4>
																<p><?php the_sub_field('text');?></p>
																<h5>Suggested Use</h5>
																<p><?php the_sub_field('suggested_use');?></p>
															</div>
														</div>
															<?php endwhile;?>
														<?php endif;?>										
													<?php endwhile;?>
												</div>
											</div>
										</div>
								</div>
							<?php endif;?>	
						
							<?php if( have_rows('resources_to_stop_bullying') ): ?>
								<div id="exploring_dignity_files" class="accordion">
									<h4>Resources To Stop Bullying</h4>
										<div>
											<div class="teaching_resources_content-wrap">
												<div class="teaching_resources_content-wrap-inner">											
													<?php while( have_rows('resources_to_stop_bullying') ): the_row();?>					
														<?php if( have_rows('single_resource') ): ?>
															<?php while( have_rows('single_resource') ): the_row();?>					
														<div class="single-teaching-resource-file">
															
															<?php if( get_sub_field('resource_type') == 'PDF' ): ?>
																<?php if( have_rows('resource_file') ): ?>
																	<?php while( have_rows('resource_file') ): the_row();?>	
															<div class="file-left">
																<img src="/wp-content/themes/global-dignity/svg/pdf-icon.svg" width="93px" height="auto" />
																<p class="teaching-resource-file-size"><?php the_sub_field('file_size');?></p>
																<a href="<?php the_sub_field('file');?>">Download PDF</a>
															</div>
																	<?php endwhile;?>
																<?php endif;?>
															<?php endif;?>	
															
															<?php if( get_sub_field('resource_type') == 'Video' ): ?>
																<?php if( have_rows('resource_video') ): ?>
																	<?php while( have_rows('resource_video') ): the_row();?>																		
																		<div class="file-left">
																			<img src="/wp-content/themes/global-dignity/svg/video_link.svg" width="93px" height="auto" />

																			<?php $link = get_sub_field('link_to_video');
																			if( $link ): ?>
																				<p class="teaching-resource-file-size"><?php echo $link['title']; ?><p>
																				<a href="<?php echo $link['url']; ?>" target="_blank">view video</a>
																			<?php endif; ?>
																		</div>
																	<?php endwhile;?>
																<?php endif;?>																	
															<?php endif;?>																		
					
															<?php if( get_sub_field('resource_type') == 'Link' ): ?>
																<?php if( have_rows('resource_link') ): ?>
																	<?php while( have_rows('resource_link') ): the_row();?>																		
																		<div class="file-left">
																			<img src="/wp-content/themes/global-dignity/svg/link_icon.svg" width="93px" height="auto" />
																			<?php $link = get_sub_field('link_to_resource_page');
																			if( $link ): ?>
																				<p class="teaching-resource-file-size"><?php echo $link['title']; ?><p>
																				<a href="<?php echo $link['url']; ?>" target="_blank">visit page</a>
																			<?php endif; ?>
																		</div>
																	<?php endwhile;?>
																<?php endif;?>																	
															<?php endif;?>
																
															<div class="resource-file-right">
																<p class="resource-file-right-category">Resources To Stop Bullying</p>
																<h4><?php the_sub_field('resource_name');?></h4>
																<p><?php the_sub_field('text');?></p>
																<h5>Suggested Use</h5>
																<p><?php the_sub_field('suggested_use');?></p>
															</div>
														</div>
															<?php endwhile;?>
														<?php endif;?>										
													<?php endwhile;?>
												</div>
											</div>
										</div>
								</div>
							<?php endif;?>		
							
															
					<?php endwhile;?>
				</div>
			<?php endif;?>	
			
			
			
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
		
		<?php if( have_rows('insporation_section_title_&_intro') ): ?>
			<div id="page_title_intro" class="to-be-sticky centered intro-padded">
				<?php while( have_rows('insporation_section_title_&_intro') ): the_row();?>
					<div class="wrap-700">
						<h3 class="centered wrap-700"><?php the_sub_field('page_title');?></h3>
						<p class="centered wrap-700"><?php the_sub_field('page_intro');?></p>
					</div>
				<?php endwhile;?>
			</div>
		<?php endif;?>		
		
		<div id="inspiration-card-wrap">
			<?php echo do_shortcode( '[ajax_load_more id="4531436691" container_type="div" acf="true" acf_field_type="repeater" acf_field_name="inspiration_cards" ajax_load_more post_type="post" transition="masonry" masonry_animation="slide-up" users="false" users_role="undefined" users_include="undefined" users_exclude="undefined" users_per_page="undefined" users_order="undefined" users_orderby="undefined" post_type="post, page" posts_per_page="15" scroll="false" button_label="Load More" button_loading_label="Loading More..."]' );?>
		
			
			
			
						
					
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();


