/************* Main Js File ************************
	Template Name: Netbiz
	Author: Netizens Technologies
	Version: 1.0
	Copyright 2023
	Please ❤ this if you like it!
*************************************************************/


/*------------------------------------------------------------------------------------ 
=============
= JS INDEX  =
=============
01 - STICKY HEADER JS
02 - BLUR BACKGROUND JS
03 - SMART MENU JS
04 - ACTIVE MENU JS
05 - SCROLL TO TOP BUTTON
06 - OPEN MENU TO HIDE SEARCH BOX JS
07 - FOOTER JS
08 - PRELOADR JS
09 - COUNTER WIDGETS JS
10 - COUNTUP JS
-------------------------------------------------------------------------------------*/


  /*=====================================================================
  01 - STICKY HEADER JS
  =====================================================================*/
	
	$(window).scroll(function () {
		var height = $(window).scrollTop();
		if (height >= 100) {
			$('.stickyMenu').addClass('fixed-menu');
			$(".search").addClass("collapsed");

		} else {
			$('.stickyMenu').removeClass('fixed-menu');
		}
		if (height >= 300) {
			$("#backTop").addClass("active")
		} else {
			$('.stickyMenu').removeClass('active');
			$("#backTop").removeClass("active")
		}
	});
	(function () {
		var doc = document.documentElement;
		var w = window;
		var prevScroll = w.scrollY || doc.scrollTop;
		var curScroll;
		var direction = 0;
		var prevDirection = 0;
		var checkScroll = function () {
			curScroll = w.scrollY || doc.scrollTop;
			if (curScroll > prevScroll) {
				//scrolled up
				direction = 2;
			}
			else if (curScroll < prevScroll) {
				//scrolled down
				direction = 1;
			}

			if (direction !== prevDirection) {
				toggleHeader(direction, curScroll);
			}

			prevScroll = curScroll;
		};
		var toggleHeader = function (direction, curScroll) {
			if (direction === 2 && curScroll > 80) {
				$('.stickyMenu').removeClass('active');
				prevDirection = direction;
			}
			else if (direction === 1) {
				$('.stickyMenu').addClass('active');
				prevDirection = direction;
			}
		};
		window.addEventListener('scroll', checkScroll);
	})();

	$(".search a").click(function() {
	$(this).parent().parent(".search").toggleClass("collapsed");
	});

  /*=====================================================================
  02 - BLUR BACKGROUND JS
  =====================================================================*/
	// $("body").on("click", ".navbar-nav a", function () {
	// $('body').removeClass('blur-body');
	// });
	// $("body").on("click", ".navbar-toggler", function () {
	// if (window.innerWidth <= 991) {
	// 	$('body').toggleClass('blur-body');
	// }
	// });

	$("body").on("click", ".navbar-toggler", function () {
		if (window.innerWidth <= 1199) {
		  $('body').toggleClass('blur-body');
		}
	  });
	  $('#main-menu li.close a').on("click", function () {
		if (window.innerWidth <= 1199) {
		  $('.navbar-toggler').click();
		  $('body').removeClass('blur-body');
		}
	  });

  /*=====================================================================
  03 - SMART MENU JS
  =====================================================================*/
	$('#main-menu').smartmenus({
		mainMenuSubOffsetX: -1,
		mainMenuSubOffsetY: 4,
		subMenusSubOffsetX: 6,
		subMenusSubOffsetY: -6
	});
	
	var $mainMenuState = $('#main-menu-state');
	if ($mainMenuState.length) {
		// animate mobile menu
		$mainMenuState.on('change', function() {
		var $menu = $('#main-menu');
		if (this.checked) {
			$menu.hide().slideDown(250, function() {
			$menu.css('display', '');
			});
		} else {
			$menu.show().slideUp(250, function() {
			$menu.css('display', '');
			});
		}
		});
		// hide mobile menu beforeunload
		$(window).on('bind', 'beforeunload unload', function() {
		if ($mainMenuState[0].checked) {
			$mainMenuState[0].click();
		}
		});
	}


  /*=====================================================================
  04 - ACTIVE MENU JS
  =====================================================================*/
	$(document).ready(function () {
		$(".tabActive a").click(function () {
			$(".tabActive a").removeClass("active");
			$(this).addClass("active");
		});
		$(function () {
			var path = window.location.href;
			var pop = [];
			$('.tabActive a').each(function () {
				var anchor = $(this).prop('href').split("/").pop();
				pop.push(anchor);
				var href = this.href.replace(".html","").replace(".php","");
				var navPath = path.replace(".html","").replace(".php","");
				if (href === navPath) {
					$(this).addClass('active');
				}
			});
			var anchor = $('.tabActive a[href*="' + pop[0] + '"]');
			if (path.split('/').pop() == "") {
				$(anchor).addClass("active")
			}
		});
	});


  /*=================================================================
  05 - SCROLL TO TOP BUTTON
  ==================================================================*/	
	var btn = $('#button');
	$(window).scroll(function() {
		if ($(window).scrollTop() > 300) {
			btn.addClass('show');
		} else {
			btn.removeClass('show');
		}
	});
	btn.on('click', function(e) {
		e.preventDefault();
		$('html, body').animate({ scrollTop: 0 }, '300');
	});




  /*=================================================================
  06 - OPEN MENU TO HIDE SEARCH BOX JS
  ==================================================================*/
	$(document).ready(function(){
		$("#teams-dropdown-menu").click(function(){
		$(".navbar-toggler").addClass("collapsed");
			$(".navbar-collapse").removeClass("show");
			$("body").removeClass("blur-body");
			$(".navbar-toggler").attr("aria-expanded", "false");
		});
		$(".navbar-toggler").click(function(){
			$("#teams-dropdown-menu ul").removeClass("active");
			$(".search_box .mobile-search-form").hide();
			// $(".navigation-wrap").addClass("Navbar_open");
		});
		$(".search_box").click(function(){
			$(".navbar-toggler").attr("aria-expanded", "false");
			$(".navbar-collapse").removeClass("show");
			$("body").removeClass("blur-body");
			// $(".navigation-wrap").removeClass("Navbar_open");
		});
	});
	/*----------------hide and show mobile search bar*/
	$(document).ready(function () {
		$(".search_icon").click(function () {
			$(".mobile-search-form").toggle();
		});
	});
	$(window).bind("resize", function () {
			$(".navbar-toggler").attr("aria-expanded", "false");
			$(".navbar-collapse").removeClass("show");
			$("body").removeClass("blur-body");
			$(".navigation-wrap").removeClass("Navbar_open");
	}).trigger('resize');


  /*=================================================================
  07 - FOOTER JS
  ==================================================================*/
	$(window).bind("resize", function () {
		if ($(this).width() > 991) {
		$(".footer-links .footer-title").removeAttr("data-bs-toggle");
		$("header .navbar .navbar-nav .nav-item:last-child .nav-link").addClass("btn")
		} else {
		$('.footer-links .footer-title').attr('data-bs-toggle', 'collapse');
		$("header .navbar .navbar-nav .nav-item .nav-link.btn").removeClass("btn")
		}
	}).trigger('resize');


  /*=================================================================
  08 - PRELOADR JS
  ==================================================================*/
	$(window).on('load', function () {
		$("body").removeClass("hidden");
		$(".page_loader").fadeOut("slow")
	});
 

  /*=================================================================
  09 - COUNTER WIDGETS JS
  ==================================================================*/
	var $myDiv = $('#counter');
	if ($myDiv.length) {
		$(window).on('load', function () {
			var a = 0;
			var oTop = $('#counter').offset().top - window.innerHeight;
			if (a == 0 && $(window).scrollTop() > oTop) {
				$('.counter-value').each(function () {
					var $this = $(this),
						countTo = $this.attr('data-count');
					$({
						countNum: $this.text()
					}).animate({
						countNum: countTo
					}, {
						duration: 2000,
						easing: 'swing',
						step: function () {
							$this.text(Math.floor(this.countNum));
						},
						complete: function () {
							$this.text(this.countNum);
						}
					});
				});
				a = 1;
			}
		});
	}
	var $myDiv = $('#counter-home');
	if ($myDiv.length) {
		$(window).on('scroll', function () {
			var a = 0;
			var oTop = $('#counter-home').offset().top - window.innerHeight;
			if (a == 0 && $(window).scrollTop() > oTop) {
				$('.counter-value').each(function () {
					var $this = $(this),
						countTo = $this.attr('data-count');
					$({
						countNum: $this.text()
					}).animate({
						countNum: countTo
					}, {
						duration: 2000,
						easing: 'swing',
						step: function () {
							$this.text(Math.floor(this.countNum));
						},
						complete: function () {
							$this.text(this.countNum);
						}
					});
				});
				a = 1;
			}
		});
	}


  /*=================================================================
  10 - COUNTUP JS
  ==================================================================*/
	(function ($) {
		$.fn.countTo = function (options) {
			options = options || {};
			return $(this).each(function () {
				// set options for current element
				var settings = $.extend({}, $.fn.countTo.defaults, {
					from: $(this).data('from'),
					to: $(this).data('to'),
					speed: $(this).data('speed'),
					refreshInterval: $(this).data('refresh-interval'),
					decimals: $(this).data('decimals')
				}, options);
				// how many times to update the value, and how much to increment the value on each update
				var loops = Math.ceil(settings.speed / settings.refreshInterval),
					increment = (settings.to - settings.from) / loops;
				// references & variables that will change with each update
				var self = this,
					$self = $(this),
					loopCount = 0,
					value = settings.from,
					data = $self.data('countTo') || {};

				$self.data('countTo', data);
				// if an existing interval can be found, clear it first
				if (data.interval) {
					clearInterval(data.interval);
				}
				data.interval = setInterval(updateTimer, settings.refreshInterval);
				render(value);

				function updateTimer() {
					value += increment;
					loopCount++;
					render(value);
					if (typeof (settings.onUpdate) == 'function') {
						settings.onUpdate.call(self, value);
					}
					if (loopCount >= loops) {
						// remove the interval
						$self.removeData('countTo');
						clearInterval(data.interval);
						value = settings.to;

						if (typeof (settings.onComplete) == 'function') {
							settings.onComplete.call(self, value);
						}
					}
				}
				function render(value) {
					var formattedValue = settings.formatter.call(self, value, settings);
					$self.html(formattedValue);
				}
			});
		};
		$.fn.countTo.defaults = {
			from: 0, // the number the element should start at
			to: 0, // the number the element should end at
			speed: 1000, // how long it should take to count between the target numbers
			refreshInterval: 100, // how often the element should be updated
			decimals: 0, // the number of decimal places to show
			formatter: formatter, // handler for formatting the value before rendering
			onUpdate: null, // callback method for every time the element is updated
			onComplete: null // callback method for when the element finishes updating
		};
		function formatter(value, settings) {
			return value.toFixed(settings.decimals);
		}
		$('.count-number').data('countToOptions', {
			formatter: function (value, options) {
				return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
			}
		});
		$('.timer').each(count);
		function count(options) {
			var $this = $(this);
			options = $.extend({}, options || {}, $this.data('countToOptions') || {});
			$this.countTo(options);
		}
	}(jQuery));

	$("header .navbar-toggler").click(function(){
		$("header .navigation-wrap").toggleClass("Navbar_open");
	});

	/*--------Wow Animation-----------*/
	$(document).ready(function(){
        if($('.home').length == 1){
			new WOW().init();
        }else{}
	});