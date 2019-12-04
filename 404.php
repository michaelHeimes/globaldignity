<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Global_Dignity
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<div class="multi-color-line-wrap"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>
				<header class="page-header">
					<h1 class="page-title"><?php the_field('title404', 'option'); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php the_field('message', 'option'); ?></p>
					
					<?php $link = get_field('black_button_link', 'option');
					if( $link ): ?>
						<a class="button button-black ps2id" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
					<?php endif; ?>
					
					<?php $link = get_field('clear_button_link', 'option');
					if( $link ): ?>
						<a class="button button-clear" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
					<?php endif; ?>



				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
