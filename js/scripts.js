jQuery( document ).ready(function($) {
	
var controller = new ScrollMagic.Controller();

var $all_oembed_videos = $(".video-wrap > iframe[src*='youtube'], .video-wrap > iframe[src*='vimeo']");
	$all_oembed_videos.each(function() {
		$(this).removeAttr('height').removeAttr('width');
 	});
 	
/*
if($('#top-bar-alert').length) {
	function setHeight() {
		var alertHeight = $('#top-bar-alert').innerHeight();
		$('#masthead').css('top', alertHeight);
		$('#opening-wrap').css('margin-top', -alertHeight)
	};
	
	setHeight();
	
	$(window).resize(function() {
		setHeight();
	});
	
}; 	

	var headerPin = new ScrollMagic.Scene({
	        triggerElement: "#masthead",
	        triggerHook: "onLeave",
	    })
	    .setPin("#masthead", {pushFollowers: false})
	    .addTo(controller);
*/



/*
	var tween = TweenMax.to('#opening-wrap', 1, {marginTop:0});

	var scrollSlides = new ScrollMagic.Scene({
	        triggerElement: '#top-bar-alert',
	        triggerHook: "onLeave",
	        duration: 67
	    })
	    .setTween(tween)
	    .addTo(controller);
*/


if($('#top-bar-alert').length) {
	var alert = $('#top-bar-alert');
	var content = $('#content');
		
	function setAlertHeight() {
		alertHeight = $(alert).innerHeight();	
		$(content).css('padding-top', alertHeight);
	};
		setAlertHeight();
		
	$(window).resize(function() {
		setAlertHeight();
	});
		
	$( '#top-bar-alert').on('click', '#top-bar-close', function() {
		$(alert).css('margin-top', -alertHeight).queue(function(next){
		$(alert).delay(1500).fadeOut();
		next();
		});
		
		$(content).css('padding-top', 0);
		
	});

  	$(window).scroll(function(){    
	  	                      
        if ($(this).scrollTop() > 150) {
			$(alert).css('margin-top', -alertHeight);
        } else {
			$(alert).css('margin-top', 0);
        }
    });	
	
	
};


// Opening Wrap Height

/*
	function openingWrapHeight() {
		alertHeight = $(alert).innerHeight();	
		$(content).css('padding-top', alertHeight);
	};
		openingWrapHeight();
		
	$(window).resize(function() {
		openingWrapHeight();
	});
*/


// Back to top fade on scroll	
  	$(window).scroll(function(){                          
        if ($(this).scrollTop() > 1000) {
            $('#btt-button-wrap').fadeIn(300);
        } else {
            $('#btt-button-wrap').fadeOut(300);
        }
    });
	
// 	Hamburger Menu
var hamburgerWrap = $('#logo-hamburger-wrap');
var masthead = $('#masthead');
var bar = $('.bar');
var siteNav = $('nav#site-navigation');
var siteNavInner = $('#site-nav-inner');
var body = $('body');
	$(hamburgerWrap).on('click', '.hamburger-menu', function(e) {
		$(bar).toggleClass('animate');
		$(masthead).toggleClass('nav-clicked');
		$(siteNav).toggleClass('nav-clicked');
		$(siteNavInner).delay(300).fadeToggle(300);
// 		$('.main-navigation li').delay(200).fadeToggle(300);
// 		$('#involved-donate-wrap').delay(200).fadeToggle(300);
		$(body).toggleClass('freeze');
	})
	$(hamburgerWrap).on('click', '#hamburger-close-button', function(e) {
		$(bar).toggleClass('animate');
		$(masthead).toggleClass('nav-clicked');
		$(siteNav).toggleClass('nav-clicked');
		$(siteNavInner).css('display', 'none');
		$(siteNavInner).fadeOut(30);
// 		$('.main-navigation li').delay(200).fadeToggle(300);
// 		$('#involved-donate-wrap').delay(200).fadeToggle(300);
		$(body).toggleClass('freeze');
	})
	
		
// Show nav is window goes wide after hamburger click
$(window).on('resize', function(){
      var win = $(this);
      if (win.width() < 992) { 

      $(siteNavInner).css('display', 'none');

      }
    else
    {
        $(siteNavInner).css('display', 'block');
    }

});


// Leadership Sticky Nav
if($('#leadership-navigation').length) {
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
};



	if ($('body').hasClass('page-template-page-template-inspiration')) {


		/**
		 * Filtering
		 */
		// Ajax Load More Plugin filtering		
		var alm_is_animating; // we need to make sure call are not interrupted by animations

		window.almComplete = function(alm){     
			alm_is_animating = false; // clear animating flag
		};

		// Team filter alm for post term
		function gp_team_specialist_alm_filter(term_slug) {

			if (alm_is_animating) {
				return false; // Exit if filtering is still active 
			}

			alm_is_animating = true;

			var obj= {}, 
			count = 0;

				obj['search'] = '';
				obj['taxonomy'] = 'inspiration_cat';
				obj['taxonomy-terms'] = term_slug;
				obj['taxonomy-operator'] = 'IN';
				obj['posts_per_page'] = '15';
				obj['meta_compare'] = 'EXISTS';
				obj['target'] = 'inspiration_cards';

			var data = obj;      
			ajaxloadmore.filter('fade', '300', data); // Send data to Ajax Load More
		}

		$(document).on('gd-inspiration-alm-filter', function(event, term_slug) {
			gp_team_specialist_alm_filter(term_slug);
		});
		
		

		$(document).on('click', '#cat-filter button', function(event) {
			event.preventDefault();
			var term = $(this).data('term');
			$(this).siblings().removeClass('active');
			console.log(term);
			$(document).trigger('gd-inspiration-alm-filter', [term, false]);

			$('#cat-filter button').removeClass('active');
			$(this).addClass('active');
		});

		
	}


// Resources Sticky Nav
if($('#resources-navigation').length) {
	
	window.onscroll = function() {mySNunction()};
	
	var pageNavHeight = $('.menu-resources-menu-container');
	var pageTitleIntro = $('#page_title_intro');
	var mastHead = $('#masthead');
	
	$(window).resize(function() {
		if(this.resizeTO) clearTimeout(this.resizeTO);
		this.resizeTO = setTimeout(function() {
		$(this).trigger('windowResize');
		}, 500); 
	});
	
/*
	$(window).on('windowResize', function() {
		console.log($(window).width());
	});
*/
	
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
		
}; 

// Teaching Sticky Nav
if($('#teaching-navigation').length) {

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
	
}; 


// Banner Bouncing Down Arrows
if($('#down-arrow-bounce').length) {
	
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
	
}; 

// Our Story animations
if($('body').hasClass('page-template-page-template-our-story')){
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
};


// Volunteer Form Confirmation Popup
if($('#volunteer-form-sent-wrap').length) {
	
	$(document).on('mailsent.wpcf7', function () {
	    $('body').css('overflow','hidden')
	    $('#volunteer-form-sent-wrap').fadeIn(300);
  	});

  	$('button.x-close').on('click', function() {
	    $('.form-sent-wrap').fadeOut(300);
		$('body').css('overflow','auto')
	});	

    function setHeight() {
      windowHeight = $(window).innerHeight();
      $('.form-sent-wrap').css('min-height', windowHeight);
    };
    setHeight();
    
    $(window).resize(function() {
      setHeight();
    });
	
};

// Pledge Form Confirmation Popup
if($('#pledge-form-sent-wrap').length) {
	
	$(document).on('mailsent.wpcf7', function () {
	    $('body').css('overflow','hidden')
	    $('#pledge-form-sent-wrap').fadeIn(300);
  	});

  	$('button.x-close').on('click', function() {
	    $('.form-sent-wrap').fadeOut(300);
		$('body').css('overflow','auto')
	});	

    function setHeight() {
      windowHeight = $(window).innerHeight();
      $('.form-sent-wrap').css('min-height', windowHeight);
    };
    setHeight();
    
    $(window).resize(function() {
      setHeight();
    });
	
};


// 	Mobile Get Involved Drawer
	$(body).on('click', 'li.get-involved-mobile-button a', function(e) {
		e.preventDefault();
		console.log("clicked");
		$('ul#mobile-get-involved-drawer').addClass('show-mgi-drawer');
	
	});	
	
	$(body).on('click', 'li#gi-drawer-close a, button.hamburger-menu, #hamburger-close-button', function(e) {
		e.preventDefault();
		$('ul#mobile-get-involved-drawer').removeClass('show-mgi-drawer');
	
	});	
			
// 	Checkbox
	$(body).on('click', '.checkbox-input-wrap', function() {
		$('.checkbox-input-wrap').toggleClass('check-clicked');
	})
	
	$(body).on('click', '.checkbox-498 > span > span > input[type="checkbox"]', function() {
		$('span.wpcf7-form-control-wrap.checkbox-498 > span > span').toggleClass('check-clicked');
	})
	
	$(body).on('click', '.give-mailchimp-fieldset label > input', function() {
		$('.give-mc-optin-label').toggleClass('check-clicked');
	})
	
	$(body).on('click', 'span.wpcf7-list-item input[type="radio"]', function() {
		$('span.wpcf7-list-item input[type="radio"]').parent().removeClass('radio-clicked');
		$(this).parent().toggleClass('radio-clicked');
	})	
		
	
// 	Full Height Get Involved Drawer
	  function setHeight() {
	    windowHeight = $(window).innerHeight();
	    $('#get-involved-drawer').css('min-height', windowHeight + 100);
	  };
	  setHeight();
	  $(window).resize(function() {
	    setHeight();
	  });
	  
// 	Get Involved Drawer

var getInvolvedDrawer = $('#get-involved-drawer');
var buttonGetInvolved = $('.button-get-involved');
var currentPageItemLink = $('.current_page_item a'); 
	var currentPageItemAncestorLink = $('.current-page-ancestor a'); 
	$(siteNavInner).on('click', 'button#get-involved-button, li.get-involved-button', function(){
		$(buttonGetInvolved).toggleClass("gi-clicked");	
	    $(getInvolvedDrawer).toggleClass("gi-clicked");
		$(currentPageItemLink).toggleClass("gi-clicked");
		$(currentPageItemAncestorLink).toggleClass("gi-clicked");
		$(body).toggleClass("freeze");		
	});	
	$(getInvolvedDrawer).on('click', 'button#get-involved-drawer-close', function(){
		$(buttonGetInvolved).removeClass("gi-clicked");
	    $(getInvolvedDrawer).removeClass("gi-clicked");
		$(currentPageItemLink).toggleClass("gi-clicked");
		$(currentPageItemAncestorLink).toggleClass("gi-clicked");
	    $(".get_involved_preview_card").removeClass('show-card');
		$("#get_involved_menu_right_inner > div:first-child").addClass('show-card');
		$(body).toggleClass("freeze");		
	});	
	
// 	Drawer Margin-Top
	function marginTop() {
	cw = $(getInvolvedDrawer).height();
	$(getInvolvedDrawer).css('margin-top', -cw);
	};
	marginTop();
	$(window).resize(function() {
	marginTop();
	});
	
// 	Country and Language Selectors
var countriesButton = $('#countries button.select-button');
	$('#countries').on('click', countriesButton, function() {
		$('ul#country_selector').fadeToggle(300);
		$('ul#country_selector').toggleClass('countries-clicked');
		$('ul#language_selector').fadeToggle(300);
		$('ul#language_selector').toggleClass('countries-clicked');
		$('button.select-button > img').toggleClass('flipped');
	});



	
// 	Accordian
	$( ".accordion" ).accordion({
		animated: 'bounceslide',
		easing: 'swing',
		active: false,
		heightStyle: content,
		collapsible: true
	});
	
// YouTube Mask Click To Play
	$('#about_us_video_1').on('click', '#about_us_video_1_mask, #about_us_video_1 .video-text-overlay', function(ev) {
		$("#about_us_video_1 > iframe")[0].src += "&autoplay=1";
		ev.preventDefault();
		$('#about_us_video_1_mask').fadeOut();
		$('#about_us_video_1 .video-text-overlay').fadeOut();
	});
  
	$('#about_us_video_2').on('click', '#about_us_video_2_mask, #about_us_video_2 .video-text-overlay', function(ev) {
		$("#about_us_video_2 > iframe")[0].src += "&autoplay=1";
		ev.preventDefault();
		$('#about_us_video_2_mask').fadeOut();
		$('#about_us_video_2 .video-text-overlay').fadeOut();
	});
	
	$('#home_video_mask').on('click', '#home_video_mask, #home_video_element > .video-text-overlay', function(ev) {
		$("#home_video_element > iframe")[0].src += "&autoplay=1";
		ev.preventDefault();
		$('#home_video_mask').fadeOut();
		$('#home_video_element .video-text-overlay').fadeOut(); home_video_mask
	});
	
// Contact Form 7

  
//   Pledge Form Opt-In
	$('form-button-text-wrap').on('click', '.page-template-page-template-pledge #form-button-text-wrap > span.wpcf7-form-control-wrap.opt-in > span > span', function() {
		$(this).toggleClass('check-clicked');
	})

// Give Form
    var justOnce = $('#just-once');	
    var donersChoice = $('.give-recurring-donors-choice');
    var donersChoiceLabel = $('.give-recurring-donors-choice > label');
    var recurringCheckbox = $('.give-recurring-period');
    
 	$('#give-amount').each(function() { 
	 	$(this).removeAttr('value').attr('placeholder','ENTER AMOUNT');
        });

        $(justOnce).addClass('once-clicked');
    
	$(body).on('click', 'div.give-recurring-donors-choice > label', function() {
	    $(this).toggleClass('once-clicked');
	    $(justOnce).toggleClass('once-clicked');
	});
	
	
	$(body).on('click', '#just-once', function() {
	    $(this).addClass('once-clicked');
	    $(donersChoiceLabel).removeClass('once-clicked');
	    $(recurringCheckbox).prop('checked', false);
	});
	
	
// Home Page Only
if($('body').hasClass('home')) {
	
function openingFloatyAnimation() {	
	
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
	}

openingFloatyAnimation();

$(window).bind('resize',function(){
    openingFloatyAnimation();
});
	
	
	
	var openingNav = new ScrollMagic.Scene({
	        triggerElement: "#opening-progress-wrap",
	        triggerHook: "onLeave",
	        duration: "525%"
	})
	.setPin("#opening-progress-wrap")
	.addTo(controller);
	
	
/*
	var openingelement1 = new ScrollMagic.Scene({
	        triggerElement: ".opening-element-1-mobile",
	        triggerHook: "onLeave",
	        duration: "100%"
	})
	.setPin(".opening-element-1-mobile", {pushFollowers: false})
	.addTo(controller);
	
	var openingelement1 = new ScrollMagic.Scene({
	        triggerElement: ".opening-element-2-mobile",
	        triggerHook: "onLeave",
	        duration: "100%"
	})
	.setPin(".opening-element-2-mobile", {pushFollowers: false})
	.addTo(controller);
	
	var openingelement1 = new ScrollMagic.Scene({
	        triggerElement: ".opening-element-3-mobile",
	        triggerHook: "onLeave",
	        duration: "100%"
	})
	.setPin(".opening-element-3-mobile", {pushFollowers: false})
	.addTo(controller);
*/
	
	var openingelement1 = new ScrollMagic.Scene({
	        triggerElement: ".opening-element-1",
	        triggerHook: "onLeave",
	        duration: "150%"
	})
	.setPin(".opening-element-1", {pushFollowers: false})
	.addTo(controller);
	
	var oe1Animation = new TimelineMax();
	var whiteSlash = ("#white-slash")
	var imagineTextMask = ("#imagine-text-mask")
	var openingElement1Arrow = (".opening-element-1-arrow")
	var redDrop = ("#red-drop")
	
	oe1Animation.delay(2)
	.to(openingElement1Arrow, 1, {y: 70, autoAlpha: 1, ease: Expo.easeInOut})
	.to(openingElement1Arrow, .5, {y:62, ease:Power2.easeOut})
	.to(openingElement1Arrow, .25, {y:70, ease:Bounce.easeOut})
	.to(openingElement1Arrow, .50, {y:64, ease:Power2.easeOut})
	.to(openingElement1Arrow, .25, {y:70, ease:Bounce.easeOut})
	
	
	var oe1Animation2 = new TimelineMax({repeat:-1, delay: 2, repeatDelay: 3});
	
	var oea1 = $("#opening-element-1-arrow-jump")
	oe1Animation2
		.set(oea1, {y:70, ease:Linear.easeNone})  
		.to(oea1, .50, {y:64, ease:Power2.easeOut})
		.to(oea1, .25, {y:70, ease:Bounce.easeOut})  
		
		
		oea1.on('click', function(e) { 
		
			event.preventDefault();
	  	
			TweenMax.to(window,1, {scrollTo:{y:".opening-element-2"},
			ease:CustomEase.create("custom", "M0,0,C0.029,0.056,-0.005,0.161,0.064,0.28,0.244,0.587,0.633,1,1,1")});
	
	}); 
		
	var oe2 = $(".opening-element-2")
	var openingelement201 = new ScrollMagic.Scene({
	        triggerElement: ".opening-element-2",
	        triggerHook: "onLeave"
	    })
	    .setClassToggle("#opening-nav-bg-line", "sticky-2-active")
	    .addTo(controller);
	    
	var openingelement21 = new ScrollMagic.Scene({
	        triggerElement: ".opening-element-2",
	        triggerHook: "onLeave"
	    })
	    .setClassToggle("#sticky1", "sticky-inactive")
	    .addTo(controller);
	    
	var openingelement211 = new ScrollMagic.Scene({
	        triggerElement: ".opening-element-2",
	        triggerHook: "onLeave",
	        duration: "150%"
	    })
	    .setClassToggle("#sticky2", "sticky-active")
	    .addTo(controller);
	    	
	var openingelement2 = new ScrollMagic.Scene({
	        triggerElement: ".opening-element-2",
	        triggerHook: "onLeave",
	        duration: "150%"
	    })
	    .setPin(".opening-element-2", {pushFollowers: false})
		.setClassToggle(".oe2-wrap", "oe2-active")
	    .addTo(controller);
	
	var oe2Animation2 = new TimelineMax({repeat:-1, repeatDelay: 3});
	var oe2a = $(".oe-2-arrow > img");
	oe1Animation2
		.to(oe2a, .50, {y:-10, ease:Power2.easeOut})
		.to(oe2a, .25, {y:0, ease:Bounce.easeOut}) 
	
	  oe2a.on('click',
	  function(e) { event.preventDefault();
	  	TweenMax.to(window, 1, {scrollTo:{y: ".opening-element-3"}, ease:CustomEase.create("custom", "M0,0,C0.029,0.056,-0.005,0.161,0.064,0.28,0.244,0.587,0.633,1,1,1")});
	});  	
		  
	
	var openingelement301 = new ScrollMagic.Scene({
	        triggerElement: ".opening-element-3",
	        triggerHook: "onLeave"
	    })
	    .setClassToggle("#opening-nav-bg-line", "sticky-3-active")
	    .addTo(controller);
	
	var openingelement31 = new ScrollMagic.Scene({
	        triggerElement: ".opening-element-3",
	        triggerHook: "onLeave",
	        duration: "150%"
	    })
	    .setClassToggle(".oe-3-text-wrap", "oe3-active")
	    .addTo(controller);
	    
	var openingelement3 = new ScrollMagic.Scene({
	        triggerElement: ".opening-element-3",
	        triggerHook: "onLeave",
	        duration: "150%"
	    })
	    .setPin(".opening-element-3", {pushFollowers: false})
	    .setClassToggle("#sticky3", "sticky-active")
	    .addTo(controller);
	    
	 var oe3Animation2 = new TimelineMax({repeat:-1, repeatDelay: 3});
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
	    .addTo(controller);   
	    
	  oe3a.on('click',
	  function(e) { event.preventDefault();
	  	TweenMax.to(window, 1, {scrollTo:{y: ".opening-element-4"}, ease:CustomEase.create("custom", "M0,0,C0.029,0.056,-0.005,0.161,0.064,0.28,0.244,0.587,0.633,1,1,1")});
	}); 
	
	
	var openingelement401 = new ScrollMagic.Scene({
	        triggerElement: ".opening-element-4",
	        triggerHook: "onLeave"
	    })
	    .setClassToggle("#opening-nav-bg-line", "sticky-4-active")
	    .addTo(controller);
	    
	var openingelement41 = new ScrollMagic.Scene({
	        triggerElement: ".opening-element-4",
	        triggerHook: "onLeave",
	        duration: "100%"
	    })
	    .setClassToggle("#sticky4", "sticky-active")
	    .addTo(controller);	    
		    
	var openingelement4 = new ScrollMagic.Scene({
	        triggerElement: ".opening-element-4",
	        triggerHook: "onLeave",
	        duration: "100%"
	    })
	    .setPin(".opening-element-4", {pushFollowers: true})
	     .setClassToggle(".oe4-wrap", "oe4-active")
	    .addTo(controller);
	var oe4a = $('.oe-4-arrow');  
	
	 var oe4Animation2 = new TimelineMax({repeat:-1, repeatDelay: 3});
	    var oe4a = $(".oe-4-arrow > img");
	oe3Animation2
		.to(oe4a, .50, {y:-10, ease:Power2.easeOut})
		.to(oe4a, .25, {y:0, ease:Bounce.easeOut})   
	
	     
	  oe4a.on('click',
	  function(e) { event.preventDefault();
	  	TweenMax.to(window, 1, {scrollTo:{y: "#main", offsetY:175, ease:CustomEase.create("custom", "M0,0,C0.029,0.056,-0.005,0.161,0.064,0.28,0.244,0.587,0.633,1,1,1")}});
	});
}; 	


/*
* jquery-match-height 0.7.2 by @liabru
* http://brm.io/jquery-match-height/
* License MIT
*/
!function(t){"use strict";"function"==typeof define&&define.amd?define(["jquery"],t):"undefined"!=typeof module&&module.exports?module.exports=t(require("jquery")):t(jQuery)}(function(t){var e=-1,o=-1,n=function(t){return parseFloat(t)||0},a=function(e){var o=1,a=t(e),i=null,r=[];return a.each(function(){var e=t(this),a=e.offset().top-n(e.css("margin-top")),s=r.length>0?r[r.length-1]:null;null===s?r.push(e):Math.floor(Math.abs(i-a))<=o?r[r.length-1]=s.add(e):r.push(e),i=a}),r},i=function(e){var o={
byRow:!0,property:"height",target:null,remove:!1};return"object"==typeof e?t.extend(o,e):("boolean"==typeof e?o.byRow=e:"remove"===e&&(o.remove=!0),o)},r=t.fn.matchHeight=function(e){var o=i(e);if(o.remove){var n=this;return this.css(o.property,""),t.each(r._groups,function(t,e){e.elements=e.elements.not(n)}),this}return this.length<=1&&!o.target?this:(r._groups.push({elements:this,options:o}),r._apply(this,o),this)};r.version="0.7.2",r._groups=[],r._throttle=80,r._maintainScroll=!1,r._beforeUpdate=null,
r._afterUpdate=null,r._rows=a,r._parse=n,r._parseOptions=i,r._apply=function(e,o){var s=i(o),h=t(e),l=[h],c=t(window).scrollTop(),p=t("html").outerHeight(!0),u=h.parents().filter(":hidden");return u.each(function(){var e=t(this);e.data("style-cache",e.attr("style"))}),u.css("display","block"),s.byRow&&!s.target&&(h.each(function(){var e=t(this),o=e.css("display");"inline-block"!==o&&"flex"!==o&&"inline-flex"!==o&&(o="block"),e.data("style-cache",e.attr("style")),e.css({display:o,"padding-top":"0",
"padding-bottom":"0","margin-top":"0","margin-bottom":"0","border-top-width":"0","border-bottom-width":"0",height:"100px",overflow:"hidden"})}),l=a(h),h.each(function(){var e=t(this);e.attr("style",e.data("style-cache")||"")})),t.each(l,function(e,o){var a=t(o),i=0;if(s.target)i=s.target.outerHeight(!1);else{if(s.byRow&&a.length<=1)return void a.css(s.property,"");a.each(function(){var e=t(this),o=e.attr("style"),n=e.css("display");"inline-block"!==n&&"flex"!==n&&"inline-flex"!==n&&(n="block");var a={
display:n};a[s.property]="",e.css(a),e.outerHeight(!1)>i&&(i=e.outerHeight(!1)),o?e.attr("style",o):e.css("display","")})}a.each(function(){var e=t(this),o=0;s.target&&e.is(s.target)||("border-box"!==e.css("box-sizing")&&(o+=n(e.css("border-top-width"))+n(e.css("border-bottom-width")),o+=n(e.css("padding-top"))+n(e.css("padding-bottom"))),e.css(s.property,i-o+"px"))})}),u.each(function(){var e=t(this);e.attr("style",e.data("style-cache")||null)}),r._maintainScroll&&t(window).scrollTop(c/p*t("html").outerHeight(!0)),
this},r._applyDataApi=function(){var e={};t("[data-match-height], [data-mh]").each(function(){var o=t(this),n=o.attr("data-mh")||o.attr("data-match-height");n in e?e[n]=e[n].add(o):e[n]=o}),t.each(e,function(){this.matchHeight(!0)})};var s=function(e){r._beforeUpdate&&r._beforeUpdate(e,r._groups),t.each(r._groups,function(){r._apply(this.elements,this.options)}),r._afterUpdate&&r._afterUpdate(e,r._groups)};r._update=function(n,a){if(a&&"resize"===a.type){var i=t(window).width();if(i===e)return;e=i;
}n?o===-1&&(o=setTimeout(function(){s(a),o=-1},r._throttle)):s(a)},t(r._applyDataApi);var h=t.fn.on?"on":"bind";t(window)[h]("load",function(t){r._update(!1,t)}),t(window)[h]("resize orientationchange",function(t){r._update(!0,t)})});
	$('.single_video').matchHeight();
	$('.principle-card').matchHeight();
  	$('.single-resource-nav').matchHeight();
	$('.single-resource-nav > p:nth-child(2)').matchHeight();
	$('.single-toolkit-file-inner-wrap').matchHeight();
	$('.single_logo').matchHeight();
	$('.timeline-copy.tc-desktop').matchHeight({byRow:false});
		
    console.log( "Scripts Loaded!" );
});