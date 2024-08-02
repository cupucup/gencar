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
01 - BANNER SLIDER JS
02 - PARTNERS SLIDER JS
03 - NEWS SLIDER JS
04 - TESTIMONIALS SLIDER JS
05 - PRICING SLIDER JS
-------------------------------------------------------------------------------------*/


  /*=====================================================================
  01 - BANNER SLIDER JS
  =====================================================================*/
  var swiper = new Swiper(".bannerSwiper", {
	speed: 3000,
    parallax: true,
	pagination: false,
	grabCursor: true,
	loop: true,
	autoplay: true,
	autoplay: {
		delay: 3000,
		disableOnInteraction: false
	},
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
});



  /*=====================================================================
  02 - PARTNERS SLIDER JS
  =====================================================================*/
  var swiper = new Swiper(".Partners", {
	slidesPerView: 5,
	spaceBetween: 30,
	speed: 1000,
	loop:true,
	autoplay: true,
	autoplay: {
		delay: 1000,
		disableOnInteraction: false
	},
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
	breakpoints: {
		0: {
			slidesPerView: 1,
		},
		421: {
			slidesPerView: 2,
		},
		767: {
			slidesPerView: 3,
		},
		992: {
			slidesPerView: 4,
		},
		1250: {
			slidesPerView: 5,
		},
	},
});


  /*=====================================================================
  03 - NEWS SLIDER JS
  =====================================================================*/
  var swiper = new Swiper(".News", {
	slidesPerView: 3,
	spaceBetween: 15,
	speed: 1200,
	loop: false,
	autoplay: true,
	autoplay: {
		delay: 1200,
		disableOnInteraction: false
	},
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
	breakpoints: {
		0: {
			slidesPerView: 1,
		},
		768: {
			slidesPerView: 2,
		},
		992: {
			slidesPerView: 3,
		},
	},
});


  /*=====================================================================
  04 - TESTIMONIALS SLIDER JS
  =====================================================================*/
  var swiper = new Swiper(".Testimonials", {
	// Optional parameters
	direction: "horizontal",
	loop: true,
	spaceBetween: 25,
	speed: 1500,
	slidesPerView: 3,
	autoplay: true,
	autoplay: {
		delay: 1500,
		disableOnInteraction: false
	},
	pagination: {
        el: ".swiper-pagination",
		clickable: true,
    },
  	breakpoints: {
	0: {
		slidesPerView: 1,
	},
	576: {
      slidesPerView:2,
	  spaceBetween: 20,
	  centeredSlides:false,
    },
    992: {
		centeredSlides:true,
		slidesPerView: 3,
    },
  },
});



  /*=====================================================================
  05 - PRICING SLIDER JS
  =====================================================================*/
  var swiper = new Swiper(".Pricing", {
	slidesPerView: 3,
	spaceBetween: 15,
	speed: 1200,
	loop: false,	
	autoplay: true,
	autoplay: {
		delay: 1200,
		disableOnInteraction: false
	},
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
		
	},
	breakpoints: {
		0: {
			slidesPerView: 1,
		},
		576: {
			slidesPerView: 2,
		},
		992: {
			slidesPerView: 3,
		},
		1199: {
			slidesPerView: 4,
		},
	},
});
