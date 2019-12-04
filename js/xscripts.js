jQuery( document ).ready(function($) {

	var $all_oembed_videos = $(".video-wrap > iframe[src*='youtube'], .video-wrap > iframe[src*='vimeo']");
	$all_oembed_videos.each(function() {
		$(this).removeAttr('height').removeAttr('width');
 	});

// Back to top fade on scroll	
  	$(window).scroll(function(){                          
        if ($(this).scrollTop() > 1000) {
            $('#btt-button-wrap').fadeIn(300);
        } else {
            $('#btt-button-wrap').fadeOut(300);
        }
    });
	
// 	Hamburger Menu
	$('.hamburger-menu').on('click', function() {
		$('.bar').toggleClass('animate');
		$('#masthead').toggleClass('nav-clicked');
		$('nav#site-navigation').toggleClass('nav-clicked');
		$('#site-nav-inner').fadeToggle(300);
		$('.main-navigation li').delay(200).fadeToggle(300);
		$('#involved-donate-wrap').delay(200).fadeToggle(300);
		$('body').toggleClass('freeze');
	})
	
	$('.checkbox-input-wrap').on('click', function() {
		$('.checkbox-input-wrap').toggleClass('check-clicked');
	})
	
	$('.checkbox-498 > span > span > input[type="checkbox"]').on('click', function() {
		$('span.wpcf7-form-control-wrap.checkbox-498 > span > span').toggleClass('check-clicked');
	})
	
	$('span.wpcf7-list-item input[type="radio"]').on('click', function() {
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
	  
// 	Get Involved Button Actions
	$("button#get-involved-button, li.get-involved-button").click(function(){
		$(".button-get-involved").toggleClass("gi-clicked");	
	    $("#get-involved-drawer").toggleClass("gi-clicked");
		$(".current_page_item a").toggleClass("gi-clicked");
		$(".current-page-ancestor a").toggleClass("gi-clicked");
		$("body").toggleClass("freeze");		
	});	
	$("button#get-involved-drawer-close").click(function(){
		$(".button-get-involved").removeClass("gi-clicked");
	    $("#get-involved-drawer").removeClass("gi-clicked");
		$(".current_page_item a").toggleClass("gi-clicked");
		$(".current-page-ancestor a").toggleClass("gi-clicked");
	    $(".get_involved_preview_card").removeClass('show-card');
		$("#get_involved_menu_right_inner > div:first-child").addClass('show-card');
		$("body").toggleClass("freeze");		
	});	
	
// 	Drawer Margin-Top
	function marginTop() {
	cw = $('#get-involved-drawer').height();
	$('#get-involved-drawer').css('margin-top', -cw);
	};
	marginTop();
	$(window).resize(function() {
	marginTop();
	});
	
// 	Country Selector
// Category Filters
	$('#countries button').on('click', function(e) {
		$('ul#country_selector').fadeToggle(300);
		$('ul#country_selector').toggleClass('countries-clicked');
		$('button.select-button > img').toggleClass('flipped');
	});
	
/*
	$('main#main').on('click', function(e) {
		$('ul#country_selector').fadeOut(300);
		$('ul#country_selector').removeClass('countries-clicked');
		$('button.select-button > img').removeClass('flipped');
	});	
*/
	
// 	Accordian
	$( ".accordion" ).accordion({
		animated: 'bounceslide',
		easing: 'swing',
		active: false,
		heightStyle: content,
		collapsible: true
	});
	
// YouTube Mask Click To Play
	$('#about_us_video_1_mask, #about_us_video_1 .video-text-overlay').on('click', function(ev) {
		$("#about_us_video_1 > iframe")[0].src += "&autoplay=1";
		ev.preventDefault();
		$('#about_us_video_1_mask').fadeOut();
		$('#about_us_video_1 .video-text-overlay').fadeOut();
	});
  
	$('#about_us_video_2_mask, #about_us_video_2 .video-text-overlay').on('click', function(ev) {
		$("#about_us_video_2 > iframe")[0].src += "&autoplay=1";
		ev.preventDefault();
		$('#about_us_video_2_mask').fadeOut();
		$('#about_us_video_2 .video-text-overlay').fadeOut();
	});
	
	$('#home_video_mask, #home_video_element > .video-text-overlay').on('click', function(ev) {
		$("#home_video_element > iframe")[0].src += "&autoplay=1";
		ev.preventDefault();
		$('#home_video_mask').fadeOut();
		$('#home_video_element .video-text-overlay').fadeOut(); home_video_mask
	});
	
// Contact Form 7
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
  
//   Pledge Form Opt-In
	$('.page-template-page-template-pledge #form-button-text-wrap > span.wpcf7-form-control-wrap.opt-in > span > span').on('click', function() {
		$(this).toggleClass('check-clicked');
	})

// Give Form
 	$('#give-amount').each(function() { 
	 	$(this).removeAttr('value').attr('placeholder','ENTER AMOUNT');
    });
    
    
    
    $('#just-once').addClass('once-clicked');
    
	$('#give-form-1259 > div.give-recurring-donors-choice > label').on('click', function() {
	    	$('#give-form-1259 > div.give-recurring-donors-choice > label').addClass('once-clicked');
			$('#just-once').removeClass('once-clicked');
			$('.give-recurring-donors-choice').addClass('once-clicked');
	});
	
	
	$('#just-once').on('click', function() {
	    	$('#just-once').addClass('once-clicked');
			$('#give-form-1259 > div.give-recurring-donors-choice > label').removeClass('once-clicked');
			$('.give-recurring-donors-choice').removeClass('once-clicked');
	});
	
	    
   $(document).ready(function() {   
	   var $this = '#give-admin_choice-1259';
	    $('#just-once').on('click', function() {
			$($this).prop('checked', false);
		});
	});
	
	
	
// Sticky Sub Navs
/*
  	$(window).scroll(function(){                          
        if ($(this).scrollTop() > 279) {
            $('nav#leadership-navigation').addClass('stuck');
            $('#page_title_intro').addClass('stuck');
            $('nav#resources-navigation').addClass('stuck');
        } else {
            $('nav#leadership-navigation').removeClass('stuck');
            $('#page_title_intro').removeClass('stuck');
            $('nav#resources-navigation').removeClass('stuck');
        }
    });
*/
    
    
/*
	var sln = $("nav#leadership-navigation");
	var pos = sln.position();					   
	$(window).scroll(function() {
		var windowpos = $(window).scrollTop();
		if (windowpos >= pos.top & windowpos <=101) {
			sln.addClass("stuck");
		} else {
			sln.removeClass("stuck");	
		}
	});
*/
	
	
/*
$(document).ready(function() {
	if(( document.body.className.match('page-template-page-template-founders') || ('page-template-page-template-leadership'))) {
	
		window.onscroll = function() {mySLNFunction()};
		
		var leadershipNavbar = document.getElementById("leadership-navigation");
		var pageTitleIntro = document.getElementById("page_title_intro");
		
		var sticky = leadershipNavbar.offsetTop;
		
		function mySLNFunction() {
		  if (window.pageYOffset >= sticky) {
		    leadershipNavbar.classList.add("stuck");
		    pageTitleIntro.classList.add("stuck");
		  } else {
		    leadershipNavbar.classList.remove("stuck");
		    pageTitleIntro.classList.remove("stuck");
		  }
		}
			window.onscroll = function() {mySLNFunction()};
	}
});
*/


/*
 var scenes = {
  '2006': {
    '2006': '2006-anchor'
  },
  '2008': {
    '2008': '2008-anchor'
  },
  '2011': {
    '2011': '2011-anchor'
  },
  '2014': {
    '2014': '2006-anchor'
  }
}
*/





/*
$(document).ready(function() { 
	
var scene = new ScrollMagic.scene(
	{
		triggerElement: "#2008"
	}
)
	
	.setTween("#2008", 1, {autoAlpha: 1})
	.addTo(controller)

}); 
*/

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