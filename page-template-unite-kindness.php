<?php
/**
 * Template Name: Unite Kindness
 *
 * @package Global_Dignity
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
			<div class="wrap-1200">
				
				<div class="multi-color-line-wrap no-banner"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>

			<?php
			while ( have_posts() ) : the_post();?>
			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					<?php the_title( '<h1 class="entry-title centered wrap-700 intro-padded resources_title">', '</h1>' ); ?>


			
				<div class="entry-content">
					<?php
						the_content();
			
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'global-dignity' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
			
				<?php if ( get_edit_post_link() ) : ?>
					<footer class="entry-footer">
						<?php
							edit_post_link(
								sprintf(
									wp_kses(
										/* translators: %s: Name of current post. Only visible to screen readers */
										__( 'Edit <span class="screen-reader-text">%s</span>', 'global-dignity' ),
										array(
											'span' => array(
												'class' => array(),
											),
										)
									),
									get_the_title()
								),
								'<span class="edit-link">',
								'</span>'
							);
						?>
					</footer><!-- .entry-footer -->
				<?php endif; ?>
			</article><!-- #post-<?php the_ID(); ?> -->
			
			<?php
			endwhile; // End of the loop.
			?>
			
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
