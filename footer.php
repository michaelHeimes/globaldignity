<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Global_Dignity
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div id="footer-form-wrap" class="mobile-padded">
			<div class="wrap-1300">
				<div id="footer-form-left">
					<div id="top-pipe"></div>
						<h4>Sign Up For The Global Dignity Newsletter</h4>
						<p id="form-intro">Stay in-touch and up-to-date on the latest happenings with the Global Dignity movement.</p>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>
				</div><!-- footer-form-left -->
				
				<div id="footer-form-right">
					<!-- Begin MailChimp Signup Form -->
		<!-- 			<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css"> -->
					<style type="text/css">
						#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
						/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
						   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
					</style>
					
					<div id="mc_embed_signup">
						
						<form action="//globaldignity.us16.list-manage.com/subscribe/post?u=133da7107cee635346f7d86a8&amp;id=9585fb99b4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							
							<div id="mc_embed_signup_scroll">
								<div class="mc-field-group name-half">
									<input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="Your First Name">
								</div>
								<div class="mc-field-group name-half">
									<input type="text" value="" name="LNAME" class="" id="mce-LNAME" placeholder="Your Last Name">
								</div>
								<div class="mc-field-group">
									<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Your Email">
								</div>
								<div class="mc-field-group">
									<input type="text" value="" name="MMERGE3" class="" id="mce-MMERGE3" placeholder="Country">
								</div>
							</div>
							<div id="checkbox" class="mc-field-group input-group">
								<div class="checkbox-input-wrap">
									<input type="checkbox" value="1" name="group[2309][1]" id="mce-group[2309]-2309-0"><label for="mce-group[2309]-2309-0">I'm Under 23</label>
								</div>
							</div>
				    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<div style="position: absolute; left: -5000px;" aria-hidden="true">
								<input type="text" name="b_133da7107cee635346f7d86a8_9585fb99b4" tabindex="-1" value="">
							</div>
							<div class="clear" id="submit-button-wrap"><input type="submit" class="button button-black" value="I'M IN!" name="subscribe" id="mc-embedded-subscribe" class="button">
							</div>
						</form>
						
					</div><!-- mc_embed_signup -->
				</div><!-- footer-form-right -->
			</div><!-- wrap-1300 -->
		</div><!-- footer-form-wrap -->
			
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[3]='MMERGE3';ftypes[3]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->

		<div id="footer-social" class="wrap-1300">
			<a id="footer-social-link" href="<?php echo get_site_url();?>"><img src="<?php the_field('footer_logo', 'option');?>" width="234px" /></a>
			
			<?php if( have_rows('social_links', 'option') ): ?>
				<div id="footer-social-icons">
				<?php while( have_rows('social_links', 'option') ): the_row(); ?>
					<?php if( have_rows('single_social_link', 'option') ): ?>
						<?php while( have_rows('single_social_link', 'option') ): the_row(); ?>				
					<a href="<?php the_sub_field('link', 'option');?>"><?php the_sub_field('icon', 'option');?></a>

						<?php endwhile;?>
					<?php endif;?>				
				<?php endwhile;?>
				</div>
			<?php endif;?>
		</div>
		
		<div class="gray-pipe centered"></div>

		<nav id="footer-navigation" class="wrap-1300">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'footer-menu',
					'menu_id'        => 'footer-menu',
					'menu_class'     => 'wrap-1300',
				) );
			?>
		</nav><!-- #site-navigation -->
		
		<div class="gray-pipe centered"></div>

		<div class="site-info wrap-1300">
			<?php if( have_rows('footer_text', 'option') ): ?>
				<p id="footer_text">
				<?php while( have_rows('footer_text', 'option') ): the_row(); ?>
					<span><?php the_sub_field('name', 'option');?></span><span><?php the_sub_field('address', 'option');?></span><span><?php the_sub_field('phone_number', 'option');?></span><span>&copy;<?php the_sub_field('copyright', 'option');?></span>
				<?php endwhile;?>
				</p>
			<?php endif;?>			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>

<?php if(is_page_template('page-template-volunteer.php')):?>
	<div id="volunteer-form-sent-wrap" class="form-sent-wrap">
		<div id="form-sent-card">
			<button type="button" class="x-close"><span class="x-1"></span><span class="x-2"></span></button>
			<div class="multi-color-line-wrap no-banner"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>
			<h3>Thank You!</h3>
			<p>We have received your message about volunteering and will pass along your information to the Global Dignity team in your country.</p>
			<div id="alert-card-button-wrap">
				<a class="button button-black" href="<?php echo get_site_url()?>">Return To Home Page</a>
				<a class="button button-clear" href="<?php echo get_site_url()?>/pledge/">Take The Dignity Pledge</a>
			</div>	
		</div>
	</div>
<?php endif;?>

<?php if(is_page_template('page-template-pledge.php')):?>
	<div id="pledge-form-sent-wrap" class="form-sent-wrap">
		<script async src="https://static.addtoany.com/menu/page.js"></script>
		<div id="form-sent-card">
			<button type="button" class="x-close"><span class="x-1"></span><span class="x-2"></span></button>
			<div class="multi-color-line-wrap no-banner"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>
			<h3>Welcome to the Global Movement for Dignity!</h3>
			<p>THANK YOU for joining with others to create a world where compassion, understanding and love triumph over intolerance, inequality and injustice. Help us spread the word by inviting your friends and family to join you and the Global Movement for Dignity.</p>
			<div id="pledge-card-logo-wrap"><img src="<?php the_field('pledge_logo');?>" width="215px"/></div>
			<div id="alert-card-button-wrap" class="a2a_kit a2a_kit_size_32 a2a_default_style">
				<a id="fb-share-button" class="button button-black a2a_button_facebook" href="#">Post To Facebook</a>
				<a class="button button-clear a2a_button_twitter" href="<?php echo get_site_url()?>/pledge/">Post To Twitter</a>
			</div>	
		</div>
	</div>
<?php endif;?>

	<div id="btt-button-wrap"><a class="btt-button ps2id" href="#top"><img src="/wp-content/themes/global-dignity/svg/Back-to-Top-Arrow.svg" width="auto" height="auto" /></a></div>
		

</body>

</html>
