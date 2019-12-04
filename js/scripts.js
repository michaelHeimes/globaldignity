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

// 	Mobile Get Involved Drawer
	$(body).on('click', 'li.get-involved-mobile-button a', function(e) {
		e.preventDefault();
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
	  
// 	Get Involved Button Actions
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
	
// 	Country Selector
// Category Filters
var countriesButton = $('#countries button.select-button');
	$('#countries').on('click', countriesButton, function(e) {
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