<?php 
	global $post;
    $postid = $post->ID; 
	$chair = get_page_template_slug( $post ); ?>

	<?php if ($chair == 'page-template-country.php') :?>
			
		<?php if( have_rows('country_page_header') ): ?>
			<?php while( have_rows('country_page_header') ): the_row();?>
			
		<?php if( get_sub_field('chairs_name') ): ?>
		<div class="single_bio_card_wrap">
			<div class="single_bio_card wrap-960">
				<div id="country-page-copy-wrap">
					<div class="wrap-960">
						<img class="high-res round-portrait" src="<?php the_sub_field('chair_portrait_high_resolution_image');?>"/> 
						<div id="country_page_copy_text_wrap">
							<h3><?php the_sub_field('chairs_name');?></h3>
							<img src="<?php the_sub_field('country_flag');?>" />
							<p>Country Chair For <?php the_sub_field('country_name');?></p>
							<p><?php the_sub_field('page_copy');?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif;?>	
				
			<?php endwhile;?>
		<?php endif;?>	

	<?php else:?>

	<article class="single-card-wrap cat-<?php $terms = get_the_terms( $post->ID , 'inspiration_cat' ); foreach ( $terms as $term ) { echo $term->slug;}?>">	
		
	
	
			<div class="single_card">
				<?php 
				$link = get_field('link');
				if( $link ): ?>
				<a href="<?php echo $link['url']; ?>" target="_blank">
					<p class="inspiration-label">Inspiration</p>
					<h4><?php the_title();?></h4>
					<p class="link-url"><?php echo $link['title']; ?></p>
				<?php endif; ?>	
	
					<div class="card-image-wrap">						
						<img class="high-res" src="<?php the_field('high_resolution_image');?>"/>
						<?php if(get_field('if_video')):?>
						<img class="card-play-button" src="/wp-content/themes/global-dignity/svg/play_button.svg" width="58px" height="auto" />
						<?php endif;?>
					</div>
					<p class="card-copy"><?php the_field('text');?></p>
				</a>
			</div>

	</article>


	<?php endif;?>
