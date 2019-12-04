<?php
/**
 * Template Name: Ambassador
 *
 * @package Global_Dignity
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="intro-padded">
				<div class="multi-color-line-wrap"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>
	
				<h1 class="centered wrap-700"><?php the_field('page_title');?></h1>
				<div id="donate-pages-intro" class="wrap-700"><?php the_field('page_text');?></div>
			</div>
			<div id="give-form-wrap" class="wrap-960">
				<div id="give-form-inner" class="wrap-700">
					<?php echo do_shortcode('[give_form id="3724"]');?>
					<button type="button" id="just-once">Just This Once</button>
				</div>
			</div>
				
		</main><!-- #main -->
	</div><!-- #primary -->
	
	<script>jQuery(document).ready(function($) {
  function setWidth() {
    buttonWidth = $('button#just-once').innerWidth();
    $('[id*=give-form] .give-recurring-donors-choice').css('max-width', buttonWidth + 4);
  };
  setWidth();
  $(window).resize(function() {
    setWidth();
  });
  });</script>

<?php
// get_sidebar();
get_footer();