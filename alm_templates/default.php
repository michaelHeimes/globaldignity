<article class="single-card-wrap">
	

	
	
	
	<?php if( have_rows('single_card') ): ?>
		<?php while( have_rows('single_card') ): the_row();?>	

		<div class="single_card">
			<?php 
			$link = get_sub_field('link');
			if( $link ): ?>
			<a href="<?php echo $link['url']; ?>" target="_blank">
				<p class="inspiration-label">Inspiration</p>
				<h4><?php the_sub_field('title');?></h4>
				<p class="link-url"><?php echo $link['title']; ?></p>
			<?php endif; ?>	

				<div class="card-image-wrap">			










<!--
						<?php $url = get_sub_field('youtube_link', false, false);
						$oembed = _wp_oembed_get_object();
						$provider = $oembed->get_provider($url);
						$oembed_data = $oembed->fetch( $provider, $url );
						$thumbnail = $oembed_data->thumbnail_url;
						$iframe = $oembed_data->html;
						?>
						
					<img src="<?php echo $thumbnail; ?>" alt="">
-->
					
					
					<img class="normal-res" src="<?php the_sub_field('image');?>"/>
					<img class="high-res" src="<?php the_sub_field('high_resolution_image');?>"/>
					<?php if(get_sub_field('if_video')):?>
					<img class="card-play-button" src="/wp-content/themes/global-dignity/svg/play_button.svg" width="58px" height="auto" />
					<?php endif;?>
				</div>
				<p class="card-copy"><?php the_sub_field('text');?></p>
			</a>
		</div>
		<?php endwhile;?>
	<?php endif;?>	
</article>