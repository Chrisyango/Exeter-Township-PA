/*-----------------------------------------------------------------------------------

	Theme Name: Exeter Township, PA
	Front-end Developer: Chris Yang
	Author Design: Samir Alley @samiralley | Tom Gooden @good3n
	Author URI: http://www.revize.com/
	Date: March 21, 2019

-----------------------------------------------------------------------------------*/

(function($) {

	'use strict';

	var $window = $(window),
		$body = $('body');

	/*!
	 * IE10 viewport hack for Surface/desktop Windows 8 bug
	 * Copyright 2014-2015 Twitter, Inc.
	 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
	 */

	// See the Getting Started docs for more information:
	// http://getbootstrap.com/getting-started/#support-ie10-width
	if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
		var msViewportStyle = document.createElement('style');
		msViewportStyle.appendChild(
			document.createTextNode(
			  '@-ms-viewport{width:auto!important}'
			)
		); document.querySelector('head').appendChild(msViewportStyle);
	}

	/*
	* E-Notify Auto submit
	*/
	$.urlParam=function(n){var e=new RegExp("[?&]"+n+"=([^]*)").exec(window.location.href);return null==e?null:e[1]||0};
	var $enotify = $('iframe[src*="/revize/plugins/notify/notify.jsp"]');
	if( $enotify.length > 0 ){
		var emailStr = $.urlParam("email");
		if( emailStr != null ){
			$enotify.attr("src", $enotify.attr("src") + "&email=" + emailStr);
		}
	}

	// RZ Class
	if(typeof RZ !== "undefined"){
	 if(RZ.login){
	  $body.addClass("user-logged-in");
	 } else{
		 $body.addClass("user-not-logged-in");
	 }
	}

	// Search Toggle
	$('#search-toggle').on('click keypress',function(e){
		$('#search').stop().slideToggle(200);
		$(this).toggleClass('fa-search fa-close');
	});

	$('#search-toggle-mobile').on('click keypress',function(e){
		$('#search').stop().slideToggle(200);
		$(this).toggleClass('fa-search fa-close');
	});

	// Navigation Toggle
	$("#nav-toggle").on("click keypress", function(){
		$("#nav").stop().slideToggle();
		$(this).toggleClass("active");
	});

	// Settings Toggle
	$("#settings-toggle").on("click keypress", function(){
		$("#settings").stop().slideToggle();
		$(this).toggleClass("fa-bars fa-close");
	});
	
	// Keyboard Navigation: Nav, flyout
	var isClick = false;
	$("#nav li a, #flyout  li a, a, button, .toggle, .toggle2").on('focusin', function(e) {
		console.log(isClick);
		if( isClick === false ) {
			$(".focused").removeClass("focused");
			$(e.currentTarget).parents("#nav li, #flyout li").addClass("focused");
			$(".opened:not(.focused) ul:visible,.opened2:not(.focused) ul:visible").slideUp().parent().removeClass("opened opened2");
		} else {
			$(".focused").removeClass("focused");
			isClick = false;
		}
	});

	// prevent focused class changes on click - This way arrows wont pop when clicking nav links
	$("#nav a,#flyout a").on('mousedown',function(){
		isClick = true;
	});

	// Menu Arrows
	// $("#nav > li:has(ul)").addClass('first-parent').children("a,span").append('<i class="fa fa-angle-down down-arrow">');

	// Menu Toggles
	$("#nav >li>ul,#flyout >li>ul").addClass('first-level');
	$("#nav  li ul ul").addClass('second-level');
	$("#nav >li:has(ul)").find("a:first").append('<i class="fa fa-angle-down toggle" tabindex="0">');
	$("#nav li li:has(ul)").find("a:first").append('<i class="fa fa-angle-down toggle2" tabindex="0">');
	$("#flyout >li:has(ul)").find("a:first").append('<i class="fa fa-angle-down toggle" tabindex="0">');

	function addNavClass() {
		if ($window.width() < 992) {
			$("body").addClass('mobile');
			$("body").removeClass('desktop');

		} else{
			$("body").addClass('mobile');
			$("body").removeClass('desktop');
		}
	}
	addNavClass();
	$window.resize(addNavClass);

	$(".toggle").on("click keypress",function(e) {
			e.preventDefault();
	  var $parent = $(this).parent();
	  var $parentLi = $parent.parent();
	  $parentLi.toggleClass('opened');
	  if($parent.addClass('active').next('.first-level').is(":visible")){
		$parent.next('.first-level').slideUp();
	  } else {
		$(".first-level").slideUp("slow");
		$parent.removeClass('active').next('.first-level').slideToggle();
	  }
	});

	$(".toggle2").on("click keypress",function(e) {
			e.preventDefault();
	  var $parent = $(this).parent();
	  var $parentLi = $parent.parent();
	  $parentLi.toggleClass('opened2');
	  if($parent.next('.second-level').is(":visible")){
		$parent.next('.second-level').slideUp();
	  } else {
		$(".second-level").slideUp("slow");
		$parent.next('.second-level').slideToggle();
	  }
	});

	//colapse nav if left
	$(".desktop *").focus(function(e){
		var $opened = $(".opened");
		var $opened2 = $(".opened2");
		if( $opened.length > 0 || $opened2.length > 0 ) {
			if( $(".opened :focus").length < 1 ){
				$opened.children("ul").slideUp();
				$opened.removeClass("opened");
				$(".opened2").removeClass("opened2");
			}
			if( $(".opened2 :focus").length < 1 ){
				$opened2.children("ul").slideUp();
				$opened2.removeClass("opened2");
			}
		}
	});
	// Flyout
	var flyout = $('#flyout'),
		flyoutwrap = $('#flyout-wrap');

	if (flyout.text().length){
		flyoutwrap.prepend('<div id="flyout-toggle" class="hidden-lg hidden-md"><i class="fa fa-bars"></i> Sub Menu</div>');
	}

	$("#flyout-toggle").on("click", function(){
		flyout.stop().slideToggle();
		$(this).toggleClass("active");
	});

	$("#flyout ul").addClass('flyout-children');

	var flyoutChildren = $('.flyout-children');
	
	// start calendar resize handler
	function resizeIframe(height) {
		var iFrameID = document.getElementById('calendar');
		if(iFrameID) {
				// here you can set the height, I delete it first, then I set it again
				iFrameID.height = "";
				iFrameID.height = height;
		}
		console.log("height to: " + height);
	}
	var eventMethod = window.addEventListener
	? "addEventListener"
	: "attachEvent";
	var eventHandler = window[eventMethod];
	var messageEvent = eventMethod === "attachEvent"
		? "onmessage"
		: "message";
	eventHandler(messageEvent, function (e) {

		if( e.data && e.data[0] === "setCalHeight" )
		{
			if(typeof resizeIframe === 'function'){
				resizeIframe(e.data[1]);
			}

		}

	});
	// end calendar resize handler

	// Tabs
	$('#tabs li a').on('click keypress', function(e) {
		e.preventDefault();
		$('#tabs li, #tabs-content .current').removeClass('current');
		$(this).parent().addClass('current');
		$('#tabs-content > div').eq($(this).parent().index()).addClass('current');
		let filterIndex = $('#filter li').index($('#filter li.active'));
		$('#tabs-content .active').removeClass('active');
		$('#tabs-content > div.current > div').eq(filterIndex).addClass('active');
		$('#tabs-content > div.current > div.active a:first-of-type').focus();
	});

	$('#filter li a').on('click keypress', function(e) {
		e.preventDefault();
		$('.active').removeClass('active');
		$(this).parent().addClass('active');
		$('#tabs-content > div.current > div').eq($(this).parent().index()).addClass('active');
		$('#tabs-content > div.current > div.active a:first-of-type').focus();
	});

	// Twitter Feed
	if(typeof $.fn.tweet !== "undefined"){
		$("#township-twitter").tweet({
			modpath: '_assets_/plugins/twitter/',
			username: "RevizeSoftware",
			join_text: "auto",
			avatar_size: 50,
			count: 3,
			auto_join_text_default: "",
			auto_join_text_ed: "",
			auto_join_text_ing: "",
			auto_join_text_reply: "",
			auto_join_text_url: "",
			loading_text: "Loading Tweet..."
		});

		// $(".twitterfeed").tweet({
		// 	modpath: '_assets_/plugins/twitter/',
		// 	username: "RevizeSoftware",
		// 	join_text: "auto",
		// 	avatar_size: 50,
		// 	count: 3,
		// 	auto_join_text_default: "",
		// 	auto_join_text_ed: "",
		// 	auto_join_text_ing: "",
		// 	auto_join_text_reply: "",
		// 	auto_join_text_url: "",
		// 	loading_text: "Loading Tweet..."
		// });

		// $(".twitterfeed").tweet({
		// 	modpath: '_assets_/plugins/twitter/',
		// 	username: "RevizeSoftware",
		// 	join_text: "auto",
		// 	avatar_size: 50,
		// 	count: 3,
		// 	auto_join_text_default: "",
		// 	auto_join_text_ed: "",
		// 	auto_join_text_ing: "",
		// 	auto_join_text_reply: "",
		// 	auto_join_text_url: "",
		// 	loading_text: "Loading Tweet..."
		// });
	}

	// Instafeed Feed
	if(typeof(window.Instafeed) === "function"){
		var townFeed = new Instafeed({
			get: 'user',
			userId: 8987997106,
			clientId: '924f677fa3854436947ab4372ffa688d',
			accessToken: '8987997106.924f677.8555ecbd52584f41b9b22ec1a16dafb9',
			resolution: 'standard_resolution',
			template: '<a href="{{link}}" target="_blank" id="{{id}}"><img src="{{image}}" /><span>{{caption}}</span></a>',
			sortBy: 'most-recent',
			limit: 3,
			links: false,
			target: 'township-instagram'
		});
		townFeed.run();

		// var policeFeed = new Instafeed({
		// 	get: 'user',
		// 	userId: 8987997106,
		// 	clientId: '924f677fa3854436947ab4372ffa688d',
		// 	accessToken: '8987997106.924f677.8555ecbd52584f41b9b22ec1a16dafb9',
		// 	resolution: 'standard_resolution',
		// 	template: '<a href="{{link}}" target="_blank" id="{{id}}"><img src="{{image}}" /></a>',
		// 	sortBy: 'most-recent',
		// 	limit: 3,
		// 	links: false,
		// 	target: 'township-insta'
		// });
		// policeFeed.run();

		// var parksFeed = new Instafeed({
		// 	get: 'user',
		// 	userId: 8987997106,
		// 	clientId: '924f677fa3854436947ab4372ffa688d',
		// 	accessToken: '8987997106.924f677.8555ecbd52584f41b9b22ec1a16dafb9',
		// 	resolution: 'standard_resolution',
		// 	template: '<a href="{{link}}" target="_blank" id="{{id}}"><img src="{{image}}" /></a>',
		// 	sortBy: 'most-recent',
		// 	limit: 3,
		// 	links: false,
		// 	target: 'township-insta'
		// });
		// parksFeed.run();
	}

	// bxSlider
	if(typeof $.fn.bxSlider !== "undefined"){
		$('.bxslider').bxSlider({
			mode:'fade',
			auto:($('.bxslider').children().length < 2) ? false : true,
			pager: false
		});
	}

	// Owl Slider
	if(typeof $.fn.owlCarousel !== "undefined"){
		let lwpLinkCount = $('.lwp-link').length;
		const lwpItem = function(num) {
			return (lwpLinkCount >= num ? num : lwpLinkCount);
		}
		$("#lwp-wrapper").owlCarousel({
			loop: lwpLinkCount > 1 ? true : false,
			responsiveClass: true,
			nav: true,
			autoHeight: true,
			navText: ['<i class="fa fa-caret-left"></i>', '<i class="fa fa-caret-right"></i>'],
			margin: 30,
			responsive: {
				0: {
					items: lwpItem(1),
				},
				767: {
					items: lwpItem(2),
				},
				1200: {
					items: lwpItem(3),
					loop: false,
					nav: false,
					center: true,
					startPosition: 1,
					margin: -45
				}
			}
		});

		let newsLinkCount = $('.news-link-wrapper').length;
		const newsItem = function(num) {
			return (newsLinkCount >= num ? num : newsLinkCount);
		}
		$("#news-links").owlCarousel({
			loop: newsLinkCount > 1 ? true : false,
			responsiveClass: true,
			nav: true,
			autoHeight: true,
			navText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>'],
			margin: 15,
			responsive: {
				0: {
					items: newsItem(1),
				}
			}
		});

		let departmentsLinkCount = $('.departments-link').length;
		const departmentsItem = function(num) {
			return (departmentsLinkCount >= num ? num : departmentsLinkCount);
		}
		$("#departments-links").owlCarousel({
			loop: departmentsLinkCount > 1 ? true : false,
			responsiveClass: true,
			nav: true,
			autoHeight: true,
			navText: ['<i class="fa fa-caret-left"></i>', '<i class="fa fa-caret-right"></i>'],
			margin: 0,
			responsive: {
				0: {
					items: departmentsItem(2),
				},
				500: {
					items: departmentsItem(3),
				},
				800: {
					items: departmentsItem(5),
				},
				1100: {
					items: departmentsItem(7),
				},
				1400: {
					items: departmentsItem(9),
					loop: false,
					nav: false
				}
			}
		});
	}

	$window.ready(function(){

		// Translate
		$('#google_translate_element').on('DOMNodeInserted', function(event) {
			let translateText = $('.goog-te-menu-value span:first').text();
			if (translateText !== 'Translate ') {
				$('.goog-te-menu-value span:first').html('Translate <i class="fa fa-chevron-down"></i>');
				$('.goog-te-menu-frame.skiptranslate').load(function(){
					setTimeout(function(){
						$('.goog-te-menu-frame.skiptranslate').contents().find('.goog-te-menu2-item-selected .text').html('Translate <i class="fa fa-chevron-down"></i>');    
					}, 100);
				});
			}
		});

		if ($('#side-content').length){
			$('main').css('position','relative');
			$('<div id="side-background" class="hidden-sm hidden-xs" style="background:url(./_assets_/images/flyout-bg.jpg) center no-repeat;background-size:cover;"><div class="overlay"></div></div>').prependTo('main');
		}

		function sideBackground(){
			$('#side-background').width($('#side-content').outerWidth());
		}
		sideBackground();
		$window.resize(sideBackground);

		// Fill sides script
		function fillSide(){
			var windowWidth = $('body').outerWidth();
			var pixelValue = (windowWidth - $('.container').width()) / 2;
			$('.fillLeft').css({
					'margin-left': -pixelValue
			});
			
			$('.fillRight').css({
					'margin-right': -pixelValue
			});
			$('.fillLeft.withPadding').css({
					'margin-left': -pixelValue,
					'padding-left': pixelValue
			});
			
			$('.fillRight.withPadding').css({
					'margin-right': -pixelValue,
					'padding-right': pixelValue
			});
			
			$('#side-background').width($('#flyout-wrap').outerWidth());
		}
		fillSide();
		$window.resize(fillSide);

		//Nav
		if ($('#freeform').length === 0) {
			$(window).bind('scroll', function () {
				if ($(window).scrollTop() > $('#slider').height() - 99) {
						$('header').addClass('fixed');
				} else {
						$('header').removeClass('fixed');
				}

				if ($(window).scrollTop() > $('#slider').height() / 2) {
					$('#nav ul').addClass('drop-down');
					$('#nav ul ul').css({
						'top' : '0',
						'bottom' : 'unset'
					});
				} else {
					$('#nav ul').removeClass('drop-down');
					$('#nav ul ul').css({
						'top' : 'unset',
						'bottom' : '0'
					});
				}
			});
		}
		
		// Font Adjuster
		function textResizer() {
			var $base, $baseSize, $dec, $inc;
			if ($('#settings').length) {
				$inc = $('#font-increase');
				$dec = $('#font-decrease');
				$inc.on('click', function(e) {
					return $('#post,body, #nav a,#nav span, body section').css({
						'font-size': '+=3',
						'line-height' : '+= 3'
					});
				});
				$dec.on('click', function(e) {
					return $('#post,body, #nav a,#nav span, body section').css({
						'font-size': '-=3',
						'line-height' : '+= 3'
					});
				});
			}
		};
		textResizer();

		// Social Feed
		if ( typeof $.fn.socialfeed !== "undefined"){
			$('#township-facebook').socialfeed({
				// Facebook
				facebook:{
					accounts: ['@spanishforklibrary'],
					limit: 3,
					access_token: 'EAAMkcCLFBs8BAEnpzLa3fg98gku0FhSwmvKZAujQ5m6RLRlHnIUnPaAexISWwIMA4VEoHuFUEWufVXIsasnQFRaDys2613NJUqt5sE5FqAr1sYrgnLZBPgeDmP8cZAkv7sFZBQOxUdrz2B7udHItF8tNMWiZC5iJfqkmWWK06BQZDZD'
				},
					template: "_assets_/templates/template.html",
					length: 45,
					show_media: true,
					callback:function(){
					}
			});

			// $('#police-facebook').socialfeed({
			// 	facebook:{
			// 		accounts: ['@spanishforklibrary'],
			// 		limit: 3,
			// 		access_token: 'EAAMkcCLFBs8BAEnpzLa3fg98gku0FhSwmvKZAujQ5m6RLRlHnIUnPaAexISWwIMA4VEoHuFUEWufVXIsasnQFRaDys2613NJUqt5sE5FqAr1sYrgnLZBPgeDmP8cZAkv7sFZBQOxUdrz2B7udHItF8tNMWiZC5iJfqkmWWK06BQZDZD'
			// 	},
			// 		template: "_assets_/templates/template.html",
			// 		length: 45,
			// 		show_media: true,
			// 		callback:function(){
			// 		}
			// });

			// $('#parks-facebook').socialfeed({
			// 	facebook:{
			// 		accounts: ['@spanishforklibrary'],
			// 		limit: 3,
			// 		access_token: 'EAAMkcCLFBs8BAEnpzLa3fg98gku0FhSwmvKZAujQ5m6RLRlHnIUnPaAexISWwIMA4VEoHuFUEWufVXIsasnQFRaDys2613NJUqt5sE5FqAr1sYrgnLZBPgeDmP8cZAkv7sFZBQOxUdrz2B7udHItF8tNMWiZC5iJfqkmWWK06BQZDZD'
			// 	},
			// 		template: "_assets_/templates/template.html",
			// 		length: 45,
			// 		show_media: true,
			// 		callback:function(){
			// 		}
			// });
		}

		// Animations http://www.oxygenna.com/tutorials/scroll-animations-using-waypoints-js-animate-css
		function onScrollInit( items, trigger ) {
			items.each( function() {
				var osElement = $(this),
					osAnimationClass = osElement.data('os-animation'),
					osAnimationDelay = osElement.data('os-animation-delay');

				osElement.css({
					'-moz-animation-delay':     osAnimationDelay,
					'animation-delay':          osAnimationDelay,
					'-webkit-animation-delay':  osAnimationDelay
				});

				var osTrigger = ( trigger ) ? trigger : osElement;

				if(typeof $.fn.waypoint !== "undefined"){
					osTrigger.waypoint(function() {
						osElement.addClass('animated').addClass(osAnimationClass);
					},{
						triggerOnce: true,
						offset: '100%'
					});
				}
			});
		}
		onScrollInit($('.os-animation'));

		//#Smooth Scrolling
		$('a[href*=#]:not([href=#],[href*="#collapse"])').on('click keypress', function() {
			if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 1000);
					if (target.selector === "#main") {
						setTimeout(function() {
							// Setting 'tabindex' to -1 takes an element out of normal 
							// tab flow but allows it to be focused via javascript
							$(target.selector).attr('tabindex', -1).on('blur focusout', function () {

								// when focus leaves this element, 
								// remove the tabindex attribute
								$(this).removeAttr('tabindex');

							}).focus(); // focus on the content container
						}, 1000);
					}
					return false;
				}
			}
		});

		/*global jQuery */
		/*!
		* FlexVerticalCenter.js 1.0
		*
		* Copyright 2011, Paul Sprangers http://paulsprangers.com
		* Released under the WTFPL license
		* http://sam.zoy.org/wtfpl/
		*
		* Date: Fri Oct 28 19:12:00 2011 +0100
		*/
		$.fn.flexVerticalCenter = function( options ) {
			var settings = $.extend({
				cssAttribute:   'margin-top', // the attribute to apply the calculated value to
				verticalOffset: 0,            // the number of pixels to offset the vertical alignment by
				parentSelector: null,         // a selector representing the parent to vertically center this element within
				debounceTimeout: 25,          // a default debounce timeout in milliseconds
				deferTilWindowLoad: false     // if true, nothing will take effect until the $(window).load event
			}, options || {});

			return this.each(function(){
				var $this   = $(this); // store the object
				var debounce;

				// recalculate the distance to the top of the element to keep it centered
				var resizer = function () {

					var parentHeight = (settings.parentSelector && $this.parents(settings.parentSelector).length) ?
						$this.parents(settings.parentSelector).first().height() : $this.parent().height();

					$this.css(
						settings.cssAttribute, ( ( ( parentHeight - $this.height() ) / 2 ) + parseInt(settings.verticalOffset) )
					);
				};

				// Call on resize. Opera debounces their resize by default.
				$(window).resize(function () {
					clearTimeout(debounce);
					debounce = setTimeout(resizer, settings.debounceTimeout);
				});

				if (!settings.deferTilWindowLoad) {
					// call it once, immediately.
					resizer();
				}

				// Call again to set after window (frames, images, etc) loads.
				$(window).load(function () {
					resizer();
				});

			});

		};
		$('.v-align').flexVerticalCenter();

	}); // Ready

})(jQuery);
