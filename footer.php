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
		
<?php if(is_page_template('page-template-founders.php') || is_page_template('page-template-leadership.php') || is_page_template('page-template-board-of-directors.php')):?>	
	<script type="text/javascript">window.onscroll = function() {mySNunction()};
jQuery(document).ready(function(t){var e=document.getElementById("leadership-navigation"),s=document.getElementById("page_title_intro"),n=e.offsetTop;window.onscroll=function(){window.pageYOffset>=n?(e.classList.add("stuck"),s.classList.add("stuck")):(e.classList.remove("stuck"),s.classList.remove("stuck"))}});

/*
		jQuery(document).ready(function($) {
			var leadershipNavbar = document.getElementById("leadership-navigation");
			var pageTitleIntro = document.getElementById("page_title_intro");
			var sticky = leadershipNavbar.offsetTop;
			function mySNFunction() {
			  if (window.pageYOffset >= sticky) {
			    leadershipNavbar.classList.add("stuck");
			    pageTitleIntro.classList.add("stuck");
			  } else {
			    leadershipNavbar.classList.remove("stuck");
			    pageTitleIntro.classList.remove("stuck");
			  }
			}
				window.onscroll = function() {mySNFunction()};
		}); 
*/

	</script>	
<?php endif;?>

<?php if(is_front_page()):?>
<script type='text/javascript'>
jQuery(document).ready(function($) {


});



</script>

<script type='text/javascript'>
	jQuery(document).ready(function(t){function i(){if(t(window).width()<992){var i=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(t){window.setTimeout(t,10)};function n(t){return Math.floor(Math.random()*t)}window.requestAnimationFrame=i,(d=document.getElementById("openingCanvas-mobile")).width=window.innerWidth,d.height=window.innerHeight,(w=d.getContext("2d")).globalCompositeOperation="lighter";var o="rgba(0, 0, 0, 0.0)",e=160,h=10,r=20,a=["rgba(255,255,255,0.15)"];(m=function(t){this.ind=t,this.x=n(d.width),this.y=n(d.height),this.dx=.75*(Math.random()-.75),this.dy=.75*(Math.random()-.75),this.r=n(h),this.color=a[Math.floor(Math.random()*a.length)]}).prototype.draw=function(){this.r=this.r>r?flashfactor*(Math.log(this.r)/Math.LN10):r,this.y+=this.dy,this.x+=this.dx,w.beginPath(),(l=w.createRadialGradient(this.x,this.y,.001*this.r,this.x,this.y,this.r)).addColorStop(0,this.color),l.addColorStop(1,o),w.fillStyle=l,w.beginPath(),w.arc(this.x,this.y,this.r,0,2*Math.PI),w.fill()},(c=function(){w.lineWidth=1,this.particles=[];for(var t=0;t<e;t++)this.particles.push(new m(t))}).prototype.draw=function(){this.particles.forEach(function(t){t.draw()})};var s=new c;window.onresize=function(){d.width=window.innerWidth,d.height=window.innerHeight,w.globalCompositeOperation="lighter",s=new c},function t(){w.clearRect(0,0,d.width,d.height),s.draw(),requestAnimationFrame(t)}()}else{var d,w;i=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(t){window.setTimeout(t,10)};function n(t){return Math.floor(Math.random()*t)}window.requestAnimationFrame=i,(d=document.getElementById("openingCanvas")).width=window.innerWidth,d.height=window.innerHeight,(w=d.getContext("2d")).globalCompositeOperation="lighter";var l,m,c;o="rgba(0, 0, 0, 0.0)",e=160,h=10,r=20,a=["rgba(255,255,255,0.15)"];(m=function(t){this.ind=t,this.x=n(d.width),this.y=n(d.height),this.dx=.75*(Math.random()-.75),this.dy=.75*(Math.random()-.75),this.r=n(h),this.color=a[Math.floor(Math.random()*a.length)]}).prototype.draw=function(){this.r=this.r>r?flashfactor*(Math.log(this.r)/Math.LN10):r,this.y+=this.dy,this.x+=this.dx,w.beginPath(),(l=w.createRadialGradient(this.x,this.y,.001*this.r,this.x,this.y,this.r)).addColorStop(0,this.color),l.addColorStop(1,o),w.fillStyle=l,w.beginPath(),w.arc(this.x,this.y,this.r,0,2*Math.PI),w.fill()},(c=function(){w.lineWidth=1,this.particles=[];for(var t=0;t<e;t++)this.particles.push(new m(t))}).prototype.draw=function(){this.particles.forEach(function(t){t.draw()})};s=new c;window.onresize=function(){d.width=window.innerWidth,d.height=window.innerHeight,w.globalCompositeOperation="lighter",s=new c},function t(){w.clearRect(0,0,d.width,d.height),s.draw(),requestAnimationFrame(t)}()}}i(),t(window).bind("resize",function(){i()})});
/*
jQuery(document).ready(function($) {
function openingFloatyAnimation() {	
 if ( $(window).width() < 992) {      
	 
var myRequestAnimationFrame =  window.requestAnimationFrame ||
	  window.webkitRequestAnimationFrame ||
	  window.mozRequestAnimationFrame    ||
	  window.oRequestAnimationFrame      ||
	  window.msRequestAnimationFrame     ||
	  function(callback) {
		  window.setTimeout(callback, 10);
	  };
window.requestAnimationFrame=myRequestAnimationFrame;

var canvas = document.getElementById('openingCanvas-mobile');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;
var ctx = canvas.getContext('2d');
ctx.globalCompositeOperation = 'lighter';

function randomMax(max) {
	return Math.floor(Math.random() * max);
}
function distance(a, b) {
	return ~~Math.sqrt(Math.pow(a.x - b.x, 4) + Math.pow(a.y - b.y, 4));
}

var particleBackground = 'rgba(0, 0, 0, 0.0)',
	numParticles = 160,
	radiusmax = 10,
	miParticleSize = 20,
	criticalDistance = 0,
	colorSet = [
		'rgba(255,255,255,0.15)',
	],
	fillStyle;

var Particle = function (ind) {
	this.ind = ind;
	this.x = randomMax(canvas.width);
	this.y = randomMax(canvas.height);
  this.dx = (Math.random() - 0.75) * 0.75;
  this.dy = (Math.random() - 0.75) * 0.75;
	this.r = randomMax(radiusmax);
	this.color = colorSet[Math.floor(Math.random() * colorSet.length)];
};

Particle.prototype.draw = function () {
	this.r = this.r > miParticleSize ? flashfactor * (Math.log(this.r) / Math.LN10) : miParticleSize;
	this.y += this.dy;
	this.x += this.dx;
	
	ctx.beginPath();
	
	fillStyle = ctx.createRadialGradient(this.x, this.y, this.r * 0.001, this.x, this.y, this.r);
	fillStyle.addColorStop(0, this.color);
	fillStyle.addColorStop(1, particleBackground);
	
	ctx.fillStyle = fillStyle;
	ctx.beginPath();
	ctx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
	ctx.fill();
};

var ParticleSystem = function () {
	ctx.lineWidth = 1;
	this.particles = [];
	
	for (var i = 0; i < numParticles; i++) {
		this.particles.push(new Particle(i));
	}
};
ParticleSystem.prototype.draw = function () {
	this.particles.forEach(function(particle) {
		particle.draw();
	});
};

var particleSystem = new ParticleSystem();

window.onresize = function() {
	canvas.width = window.innerWidth;
	canvas.height = window.innerHeight;
	ctx.globalCompositeOperation = 'lighter';
	particleSystem = new ParticleSystem();
};

(function animloop(){
	ctx.clearRect(0, 0, canvas.width, canvas.height);
	particleSystem.draw();
	
	requestAnimationFrame(animloop);
})(); 
} 
else {
var myRequestAnimationFrame =  window.requestAnimationFrame ||
	  window.webkitRequestAnimationFrame ||
	  window.mozRequestAnimationFrame    ||
	  window.oRequestAnimationFrame      ||
	  window.msRequestAnimationFrame     ||
	  function(callback) {
		  window.setTimeout(callback, 10);
	  };
window.requestAnimationFrame=myRequestAnimationFrame;

var canvas = document.getElementById('openingCanvas');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;
var ctx = canvas.getContext('2d');
ctx.globalCompositeOperation = 'lighter';

function randomMax(max) {
	return Math.floor(Math.random() * max);
}
function distance(a, b) {
	return ~~Math.sqrt(Math.pow(a.x - b.x, 4) + Math.pow(a.y - b.y, 4));
}

var particleBackground = 'rgba(0, 0, 0, 0.0)',
	numParticles = 160,
	radiusmax = 10,
	miParticleSize = 20,
	criticalDistance = 0,
	colorSet = [
		'rgba(255,255,255,0.15)',
	],
	fillStyle;

var Particle = function (ind) {
	this.ind = ind;
	this.x = randomMax(canvas.width);
	this.y = randomMax(canvas.height);
  this.dx = (Math.random() - 0.75) * 0.75;
  this.dy = (Math.random() - 0.75) * 0.75;
	this.r = randomMax(radiusmax);
	this.color = colorSet[Math.floor(Math.random() * colorSet.length)];
};

Particle.prototype.draw = function () {
	this.r = this.r > miParticleSize ? flashfactor * (Math.log(this.r) / Math.LN10) : miParticleSize;
	this.y += this.dy;
	this.x += this.dx;
	
	ctx.beginPath();
	
	fillStyle = ctx.createRadialGradient(this.x, this.y, this.r * 0.001, this.x, this.y, this.r);
	fillStyle.addColorStop(0, this.color);
	fillStyle.addColorStop(1, particleBackground);
	
	ctx.fillStyle = fillStyle;
	ctx.beginPath();
	ctx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
	ctx.fill();
};

var ParticleSystem = function () {
	ctx.lineWidth = 1;
	this.particles = [];
	
	for (var i = 0; i < numParticles; i++) {
		this.particles.push(new Particle(i));
	}
};
ParticleSystem.prototype.draw = function () {
	this.particles.forEach(function(particle) {
		particle.draw();
	});
};

var particleSystem = new ParticleSystem();

window.onresize = function() {
	canvas.width = window.innerWidth;
	canvas.height = window.innerHeight;
	ctx.globalCompositeOperation = 'lighter';
	particleSystem = new ParticleSystem();
};

(function animloop(){
	ctx.clearRect(0, 0, canvas.width, canvas.height);
	particleSystem.draw();
	
	requestAnimationFrame(animloop);
})(); 
}}

openingFloatyAnimation();

$(window).bind('resize',function(){
    openingFloatyAnimation();
});
});
*/

// Scrollmagic Opening Panels Scrolling	
jQuery(document).ready(function(e){var o=new ScrollMagic.Controller,n=(new ScrollMagic.Scene({triggerElement:"#opening-progress-wrap",triggerHook:"onLeave",duration:"500%"}).setPin("#opening-progress-wrap").addTo(o),new ScrollMagic.Controller),t=(new ScrollMagic.Scene({triggerElement:".opening-element-1-mobile",triggerHook:"onLeave",duration:"100%"}).setPin(".opening-element-1-mobile",{pushFollowers:!1}).addTo(n),n=new ScrollMagic.Controller,new ScrollMagic.Scene({triggerElement:".opening-element-2-mobile",triggerHook:"onLeave",duration:"100%"}).setPin(".opening-element-2-mobile",{pushFollowers:!1}).addTo(n),n=new ScrollMagic.Controller,new ScrollMagic.Scene({triggerElement:".opening-element-3-mobile",triggerHook:"onLeave",duration:"100%"}).setPin(".opening-element-3-mobile",{pushFollowers:!1}).addTo(n),new ScrollMagic.Controller),l=(new ScrollMagic.Scene({triggerElement:".opening-element-1",triggerHook:"onLeave",duration:"150%"}).setPin(".opening-element-1",{pushFollowers:!1}).addTo(t),"#white-slash"),a="#imagine-text-mask",r=".opening-element-1-arrow",i="#red-drop";(new TimelineMax).delay(2).to(a,1,{bottom:16,ease:Power4.easeInOut},1).to(l,0,{height:20,ease:Linear.easeNone}).to("p#imagine",0,{autoAlpha:1,ease:Expo.easeInOut},1.7).to(i,.7,{height:120,ease:Expo.easeInOut},3.2).to(r,1,{y:70,autoAlpha:1,ease:Expo.easeInOut}).to(a,1,{top:118,ease:Expo.easeInOut},3).to(l,1,{y:32,ease:Expo.easeInOut},3).to(r,.5,{y:62,ease:Power2.easeOut}).to(r,.25,{y:70,ease:Bounce.easeOut}).to(i,1,{height:0,top:124,ease:Expo.easeInOut}).to(r,.5,{y:64,ease:Power2.easeOut}).to(r,.25,{y:70,ease:Bounce.easeOut});var g=new TimelineMax({repeat:-1,delay:3,repeatDelay:3}),s=e("#opening-element-1-arrow-jump");g.set(s,{y:70,ease:Linear.easeNone}).to(s,.5,{y:64,ease:Power2.easeOut}).to(s,.25,{y:70,ease:Bounce.easeOut}),s.on("click",function(e){event.preventDefault(),TweenMax.to(window,1,{scrollTo:{y:".opening-element-2"},ease:CustomEase.create("custom","M0,0,C0.029,0.056,-0.005,0.161,0.064,0.28,0.244,0.587,0.633,1,1,1")}),console.log("Clicked!")});e(".opening-element-2");var c=new ScrollMagic.Controller,w=(new ScrollMagic.Scene({triggerElement:".opening-element-2",triggerHook:"onLeave"}).setClassToggle("#opening-nav-bg-line","sticky-2-active").addTo(c),new ScrollMagic.Controller),m=(new ScrollMagic.Scene({triggerElement:".opening-element-2",triggerHook:"onLeave"}).setClassToggle("#sticky1","sticky-inactive").addTo(w),new ScrollMagic.Controller),p=(new ScrollMagic.Scene({triggerElement:".opening-element-2",triggerHook:"onLeave",duration:"150%"}).setClassToggle("#sticky2","sticky-active").addTo(m),new ScrollMagic.Controller),u=(new ScrollMagic.Scene({triggerElement:".opening-element-2",triggerHook:"onLeave",duration:"150%"}).setPin(".opening-element-2",{pushFollowers:!1}).setClassToggle(".oe2-wrap","oe2-active").addTo(p),new TimelineMax({repeat:-1,delay:3,repeatDelay:3}),e(".oe-2-arrow > img"));g.to(u,.5,{y:-10,ease:Power2.easeOut}).to(u,.25,{y:0,ease:Bounce.easeOut}),u.on("click",function(e){event.preventDefault(),TweenMax.to(window,1,{scrollTo:{y:".opening-element-3"},ease:CustomEase.create("custom","M0,0,C0.029,0.056,-0.005,0.161,0.064,0.28,0.244,0.587,0.633,1,1,1")})});var d=new ScrollMagic.Controller,S=(new ScrollMagic.Scene({triggerElement:".opening-element-3",triggerHook:"onLeave"}).setClassToggle("#opening-nav-bg-line","sticky-3-active").addTo(d),new ScrollMagic.Controller),M=(new ScrollMagic.Scene({triggerElement:".opening-element-3",triggerHook:"onLeave",duration:"150%"}).setClassToggle(".oe-3-text-wrap","oe3-active").addTo(S),new ScrollMagic.Controller),v=(new ScrollMagic.Scene({triggerElement:".opening-element-3",triggerHook:"onLeave",duration:"150%"}).setPin(".opening-element-3",{pushFollowers:!1}).setClassToggle("#sticky3","sticky-active").addTo(M),new TimelineMax({repeat:-1,delay:3,repeatDelay:3})),y=e(".oe-3-arrow > img");v.to(y,.5,{y:-10,ease:Power2.easeOut}).to(y,.25,{y:0,ease:Bounce.easeOut});new ScrollMagic.Scene({triggerElement:".opening-element-3",triggerHook:"onLeave",offset:"0",duration:"150%"}).addTo(M);y.on("click",function(e){event.preventDefault(),TweenMax.to(window,1,{scrollTo:{y:".opening-element-4"},ease:CustomEase.create("custom","M0,0,C0.029,0.056,-0.005,0.161,0.064,0.28,0.244,0.587,0.633,1,1,1")})});var T=new ScrollMagic.Controller,C=(new ScrollMagic.Scene({triggerElement:".opening-element-4",triggerHook:"onLeave"}).setClassToggle("#opening-nav-bg-line","sticky-4-active").addTo(T),new ScrollMagic.Controller),k=(new ScrollMagic.Scene({triggerElement:".opening-element-4",triggerHook:"onLeave",duration:"100%"}).setClassToggle("#sticky4","sticky-active").addTo(C),new ScrollMagic.Controller),E=(new ScrollMagic.Scene({triggerElement:".opening-element-4",triggerHook:"onLeave",duration:"100%"}).setPin(".opening-element-4",{pushFollowers:!0}).setClassToggle(".oe4-wrap","oe4-active").addTo(k),e(".oe-4-arrow"));new TimelineMax({repeat:-1,delay:3,repeatDelay:3}),E=e(".oe-4-arrow > img");v.to(E,.5,{y:-10,ease:Power2.easeOut}).to(E,.25,{y:0,ease:Bounce.easeOut}),E.on("click",function(e){event.preventDefault(),TweenMax.to(window,1,{scrollTo:{y:"#main",offsetY:175,ease:CustomEase.create("custom","M0,0,C0.029,0.056,-0.005,0.161,0.064,0.28,0.244,0.587,0.633,1,1,1")}})})});

/*
jQuery(document).ready(function($) {
	
var openingNavController = new ScrollMagic.Controller();
var openingNav = new ScrollMagic.Scene({
        triggerElement: "#opening-progress-wrap",
        triggerHook: "onLeave",
        duration: "500%"
})
.setPin("#opening-progress-wrap")
.addTo(openingNavController);


var controller1M = new ScrollMagic.Controller();
var openingelement1 = new ScrollMagic.Scene({
        triggerElement: ".opening-element-1-mobile",
        triggerHook: "onLeave",
        duration: "100%"
})
.setPin(".opening-element-1-mobile", {pushFollowers: false})
.addTo(controller1M);

var controller1M = new ScrollMagic.Controller();
var openingelement1 = new ScrollMagic.Scene({
        triggerElement: ".opening-element-2-mobile",
        triggerHook: "onLeave",
        duration: "100%"
})
.setPin(".opening-element-2-mobile", {pushFollowers: false})
.addTo(controller1M);

var controller1M = new ScrollMagic.Controller();
var openingelement1 = new ScrollMagic.Scene({
        triggerElement: ".opening-element-3-mobile",
        triggerHook: "onLeave",
        duration: "100%"
})
.setPin(".opening-element-3-mobile", {pushFollowers: false})
.addTo(controller1M);


var controller1 = new ScrollMagic.Controller();
var openingelement1 = new ScrollMagic.Scene({
        triggerElement: ".opening-element-1",
        triggerHook: "onLeave",
        duration: "150%"
})
.setPin(".opening-element-1", {pushFollowers: false})
.addTo(controller1);

var oe1Animation = new TimelineMax();
var whiteSlash = ("#white-slash")
var imagineTextMask = ("#imagine-text-mask")
var openingElement1Arrow = (".opening-element-1-arrow")
var redDrop = ("#red-drop")

oe1Animation.delay(2)
.to(imagineTextMask, 1, {bottom: 16, ease: Power4.easeInOut}, 1)
.to(whiteSlash, 0, {height: 20, ease: Linear.easeNone})
.to("p#imagine", 0, {autoAlpha: 1, ease: Expo.easeInOut}, 1.7)
.to(redDrop, 0.7, {height: 120, ease: Expo.easeInOut}, 3.2)
.to(openingElement1Arrow, 1, {y: 70, autoAlpha: 1, ease: Expo.easeInOut})
.to(imagineTextMask, 1, {top: 118, ease: Expo.easeInOut}, 3)
.to(whiteSlash, 1, {y: 32, ease: Expo.easeInOut}, 3)
.to(openingElement1Arrow, .5, {y:62, ease:Power2.easeOut})
.to(openingElement1Arrow, .25, {y:70, ease:Bounce.easeOut})
.to(redDrop, 1, {height: 0, top: 124, ease: Expo.easeInOut})
.to(openingElement1Arrow, .50, {y:64, ease:Power2.easeOut})
.to(openingElement1Arrow, .25, {y:70, ease:Bounce.easeOut})


var oe1Animation2 = new TimelineMax({repeat:-1, delay: 3, repeatDelay: 3});

var oea1 = $("#opening-element-1-arrow-jump")
oe1Animation2
	.set(oea1, {y:70, ease:Linear.easeNone})  
	.to(oea1, .50, {y:64, ease:Power2.easeOut})
	.to(oea1, .25, {y:70, ease:Bounce.easeOut})  
	
	
	oea1.on('click',
  function(e) { event.preventDefault();
  	TweenMax.to(window,1, {scrollTo:{y:".opening-element-2"}, ease:CustomEase.create("custom", "M0,0,C0.029,0.056,-0.005,0.161,0.064,0.28,0.244,0.587,0.633,1,1,1")});
    console.log( "Clicked!" );

}); 
	
var oe2 = $(".opening-element-2")
var controller201 = new ScrollMagic.Controller();
var openingelement201 = new ScrollMagic.Scene({
        triggerElement: ".opening-element-2",
        triggerHook: "onLeave"
    })
    .setClassToggle("#opening-nav-bg-line", "sticky-2-active")
    .addTo(controller201);
    
var controller21 = new ScrollMagic.Controller();
var openingelement21 = new ScrollMagic.Scene({
        triggerElement: ".opening-element-2",
        triggerHook: "onLeave"
    })
    .setClassToggle("#sticky1", "sticky-inactive")
    .addTo(controller21);
    
var controller211 = new ScrollMagic.Controller();
var openingelement211 = new ScrollMagic.Scene({
        triggerElement: ".opening-element-2",
        triggerHook: "onLeave",
        duration: "150%"
    })
    .setClassToggle("#sticky2", "sticky-active")
    .addTo(controller211);

var controller2 = new ScrollMagic.Controller();
var openingelement2 = new ScrollMagic.Scene({
        triggerElement: ".opening-element-2",
        triggerHook: "onLeave",
        duration: "150%"
    })
    .setPin(".opening-element-2", {pushFollowers: false})
    .setClassToggle(".oe2-wrap", "oe2-active")
    .addTo(controller2);

var oe2Animation2 = new TimelineMax({repeat:-1, delay: 3, repeatDelay: 3});
var oe2a = $(".oe-2-arrow > img");
oe1Animation2
	.to(oe2a, .50, {y:-10, ease:Power2.easeOut})
	.to(oe2a, .25, {y:0, ease:Bounce.easeOut}) 

  oe2a.on('click',
  function(e) { event.preventDefault();
  	TweenMax.to(window, 1, {scrollTo:{y: ".opening-element-3"}, ease:CustomEase.create("custom", "M0,0,C0.029,0.056,-0.005,0.161,0.064,0.28,0.244,0.587,0.633,1,1,1")});
});  	
	  

var controller301 = new ScrollMagic.Controller();
var openingelement301 = new ScrollMagic.Scene({
        triggerElement: ".opening-element-3",
        triggerHook: "onLeave"
    })
    .setClassToggle("#opening-nav-bg-line", "sticky-3-active")
    .addTo(controller301);

var controller31 = new ScrollMagic.Controller();
var openingelement31 = new ScrollMagic.Scene({
        triggerElement: ".opening-element-3",
        triggerHook: "onLeave",
        duration: "150%"
    })
    .setClassToggle(".oe-3-text-wrap", "oe3-active")
    .addTo(controller31);
    
var controller3 = new ScrollMagic.Controller();
var openingelement3 = new ScrollMagic.Scene({
        triggerElement: ".opening-element-3",
        triggerHook: "onLeave",
        duration: "150%"
    })
    .setPin(".opening-element-3", {pushFollowers: false})
    .setClassToggle("#sticky3", "sticky-active")
    .addTo(controller3);
    
 var oe3Animation2 = new TimelineMax({repeat:-1, delay: 3, repeatDelay: 3});
    var oe3a = $(".oe-3-arrow > img");
oe3Animation2
	.to(oe3a, .50, {y:-10, ease:Power2.easeOut})
	.to(oe3a, .25, {y:0, ease:Bounce.easeOut}) 


var openingelement3Animation = new ScrollMagic.Scene({
    triggerElement: ".opening-element-3",
    triggerHook: "onLeave",
    offset: "0",
    duration: "150%"
})   
    .addTo(controller3);   
    
  oe3a.on('click',
  function(e) { event.preventDefault();
  	TweenMax.to(window, 1, {scrollTo:{y: ".opening-element-4"}, ease:CustomEase.create("custom", "M0,0,C0.029,0.056,-0.005,0.161,0.064,0.28,0.244,0.587,0.633,1,1,1")});
}); 


var controller401 = new ScrollMagic.Controller();
var openingelement401 = new ScrollMagic.Scene({
        triggerElement: ".opening-element-4",
        triggerHook: "onLeave"
    })
    .setClassToggle("#opening-nav-bg-line", "sticky-4-active")
    .addTo(controller401);
    
var controller41 = new ScrollMagic.Controller();
var openingelement41 = new ScrollMagic.Scene({
        triggerElement: ".opening-element-4",
        triggerHook: "onLeave",
        duration: "100%"
    })
    .setClassToggle("#sticky4", "sticky-active")
    .addTo(controller41);	    
	    
var controller4 = new ScrollMagic.Controller();
var openingelement4 = new ScrollMagic.Scene({
        triggerElement: ".opening-element-4",
        triggerHook: "onLeave",
        duration: "100%"
    })
    .setPin(".opening-element-4", {pushFollowers: true})
     .setClassToggle(".oe4-wrap", "oe4-active")
    .addTo(controller4);
var oe4a = $('.oe-4-arrow');  

 var oe4Animation2 = new TimelineMax({repeat:-1, delay: 3, repeatDelay: 3});
    var oe4a = $(".oe-4-arrow > img");
oe3Animation2
	.to(oe4a, .50, {y:-10, ease:Power2.easeOut})
	.to(oe4a, .25, {y:0, ease:Bounce.easeOut})   

     
  oe4a.on('click',
  function(e) { event.preventDefault();
  	TweenMax.to(window, 1, {scrollTo:{y: "#main", offsetY:175, ease:CustomEase.create("custom", "M0,0,C0.029,0.056,-0.005,0.161,0.064,0.28,0.244,0.587,0.633,1,1,1")}});
});  
});
*/
</script>

<?php endif;?>
		
<?php if(is_page_template('page-template-board-resources.php') || is_page_template('page-template-brand-resources.php') || is_page_template('page-template-organizational-resources.php') || is_page_template('page-template-press.php') || is_page_template('page-template-resources.php')):?>	
	<script type="text/javascript">
jQuery(document).ready(function(e){window.onscroll=function(){mySNunction()};e(".menu-resources-menu-container");var t=e("#page_title_intro");e("#masthead");e(window).resize(function(){this.resizeTO&&clearTimeout(this.resizeTO),this.resizeTO=setTimeout(function(){e(this).trigger("windowResize")},500)}),e(window).on("windowResize",function(){console.log(e(window).width())});var i=document.getElementById("resources-navigation"),n=(t=document.getElementById("page_title_intro"),i.offsetTop);window.onscroll=function(){window.pageYOffset>=n?(i.classList.add("stuck"),t.classList.add("stuck")):(i.classList.remove("stuck"),t.classList.remove("stuck"))}});

/*
jQuery(document).ready(function($) {
	window.onscroll = function() {mySNunction()};
	
	var pageNavHeight = $('.menu-resources-menu-container');
	var pageTitleIntro = $('#page_title_intro');
	var mastHead = $('#masthead');
*/

/*
$(window).resize(function() {
if(this.resizeTO) clearTimeout(this.resizeTO);
    this.resizeTO = setTimeout(function() {
      $(this).trigger('windowResize');
    }, 500); 
});
$(window).on('windowResize', function() {
   console.log($(window).width());
});
*/
			
/*
	var leadershipNavbar = document.getElementById("resources-navigation");
	var pageTitleIntro = document.getElementById("page_title_intro");
	var sticky = leadershipNavbar.offsetTop;
	function mySNFunction() {
	  if (window.pageYOffset >= sticky) {
	    leadershipNavbar.classList.add("stuck");
	    pageTitleIntro.classList.add("stuck");
	  } else {
	    leadershipNavbar.classList.remove("stuck");
	    pageTitleIntro.classList.remove("stuck");
	  }
	}
		window.onscroll = function() {mySNFunction()};
}); 
*/

	</script>	
<?php endif;?>


<?php if(is_page_template('page-template-inspiration.php') || is_page_template('page-template-teaching-tools.php')):?>	
<script type="text/javascript">
	jQuery(document).ready(function(e){window.onscroll=function(){o()};e(".menu-teaching-dignity-menu-container");var t=e("#page_title_intro");e("#masthead");e(window).resize(function(){this.resizeTO&&clearTimeout(this.resizeTO),this.resizeTO=setTimeout(function(){e(this).trigger("windowResize")},500)}),e(window).on("windowResize",function(){console.log(e(window).width())});var i=document.getElementById("teaching-navigation"),n=(t=document.getElementById("page_title_intro"),i.offsetTop);function o(){window.pageYOffset>=n?(i.classList.add("stuck"),t.classList.add("stuck")):(i.classList.remove("stuck"),t.classList.remove("stuck"))}window.onscroll=function(){o()}});

/*
jQuery(document).ready(function($) {
	window.onscroll = function() {mySNFunction()};
	
	var pageNavHeight = $('.menu-teaching-dignity-menu-container');
	var pageTitleIntro = $('#page_title_intro');
	var mastHead = $('#masthead');



$(window).resize(function() {
if(this.resizeTO) clearTimeout(this.resizeTO);
    this.resizeTO = setTimeout(function() {
      $(this).trigger('windowResize');
    }, 500); 
});
$(window).on('windowResize', function() {
   console.log($(window).width());
});
			
	var leadershipNavbar = document.getElementById("teaching-navigation");
	var pageTitleIntro = document.getElementById("page_title_intro");
	var sticky = leadershipNavbar.offsetTop;
	function mySNFunction() {
	  if (window.pageYOffset >= sticky) {
	    leadershipNavbar.classList.add("stuck");
	    pageTitleIntro.classList.add("stuck");
	  } else {
	    leadershipNavbar.classList.remove("stuck");
	    pageTitleIntro.classList.remove("stuck");
	  }
	}
		window.onscroll = function() {mySNFunction()};
}); 
*/

	</script>	
<?php endif;?>



		
		
<?php if(is_page_template('page-template-our-story.php')):?>
<script type='text/javascript'>
var controller=new ScrollMagic.Controller,duration=1,blueArrowDown=document.getElementById("about-blue-down-arrow1");(blueBounce=new TimelineMax).to(blueArrowDown,duration/4,{y:-16,ease:Power2.easeOut}).to(blueArrowDown,duration/2,{y:0,ease:Bounce.easeOut});var blueBounce,scene=new ScrollMagic.Scene({triggerElement:"#blue-bounce-trigger"}).setTween(blueBounce).addTo(controller);duration=1,blueArrowDown=document.getElementById("about-blue-down-arrow2");(blueBounce=new TimelineMax).to(blueArrowDown,duration/4,{y:-16,ease:Power2.easeOut}).to(blueArrowDown,duration/2,{y:0,ease:Bounce.easeOut});scene=new ScrollMagic.Scene({triggerElement:"#blue-bounce-trigger"}).setTween(blueBounce).addTo(controller);
/*
		var controller = new ScrollMagic.Controller(); 

		var duration = 1;
		var blueArrowDown = document.getElementById("about-blue-down-arrow1");	
		var blueBounce = new TimelineMax()
		
		blueBounce.to(blueArrowDown, duration / 4, {y:-16, ease:Power2.easeOut})
		.to(blueArrowDown, duration / 2, {y:0, ease:Bounce.easeOut});
		
		var scene = new ScrollMagic.Scene({
			triggerElement: "#blue-bounce-trigger"})
		.setTween(blueBounce)
		.addTo(controller);
		
		var duration = 1;
		var blueArrowDown = document.getElementById("about-blue-down-arrow2");	
		var blueBounce = new TimelineMax()
		
		blueBounce.to(blueArrowDown, duration / 4, {y:-16, ease:Power2.easeOut})
		.to(blueArrowDown, duration / 2, {y:0, ease:Bounce.easeOut});
		
		var scene = new ScrollMagic.Scene({
			triggerElement: "#blue-bounce-trigger"})
		.setTween(blueBounce)
		.addTo(controller);	
*/
</script>
	
<?php endif;?>

<?php if(is_page_template('page-template-our-story.php') || is_page_template('page-template-where-we-work.php') || is_page_template('page-template-global-dignity-day.php') || is_page_template('page-template-volunteer.php') || is_page_template('page-template-pledge.php')):?>	
<script type='text/javascript'>
jQuery(document).ready(function($) {
	
var downArrowBounce = new TimelineMax({repeat:-1, delay: 0, repeatDelay: 2});
var dab = $("#down-arrow-bounce")
var duration = 1;
downArrowBounce
	.to(dab, duration / 4, {y:3, ease:Power1.easeOut})
	.to(dab, duration / 4, {y:-6, ease:Power2.easeOut})
	.to(dab, duration / 2, {y:0, ease:Bounce.easeOut});   
// 	Hero Arrow Hover Bounce
	$("dab").on("mouseenter", function() {
	  TweenMax.to(this, duration / 4, {y:-12, ease:Power2.easeOut});
	  TweenMax.to(this, duration / 2, {y:0, ease:Bounce.easeOut, delay:duration / 4});
	});
}); 
</script>
<?php endif;?>

<?php if(is_page_template('page-template-volunteer.php') || is_page_template('page-template-pledge.php')):?>
<script>
	$(document).on('mailsent.wpcf7', function () {
	    console.log('mailsent.wpcf7 triggered!');
	    $('body').css('overflow','hidden')
	    $('#volunteer-form-sent-wrap').fadeIn(300);
	    $('#pledge-form-sent-wrap').fadeIn(300);
  	});
  
  	$('button.x-close').on('click', function() {
	    $('.form-sent-wrap').fadeOut(300);
		$('body').css('overflow','auto')
	});
  
  $(document).ready(function() {
    function setHeight() {
      windowHeight = $(window).innerHeight();
      $('.form-sent-wrap').css('min-height', windowHeight);
    };
    setHeight();
    
    $(window).resize(function() {
      setHeight();
    });
  });
</script>
<?php endif;?>

</body>

</html>
