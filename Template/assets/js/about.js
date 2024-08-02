
/*=====================================================================
01 - ABOUT TEAM SLIDER JS
=====================================================================*/

var swiper = new Swiper(".TeamSwiper", {
	slidesPerView: 4,
	spaceBetween: 30,
	speed: 1000,
	loop: true,
	autoplay: true,
	// autoplay: {
	// 	delay: 1000,
	// 	disableOnInteraction: false
	// },
	pagination: {
		el: ".team .swiper-pagination",
		clickable: true,
	},
	breakpoints: {
		0: {
			slidesPerView: 1,
		},
		481: {
			slidesPerView: 2,
		},
		992: {
			slidesPerView: 3,
		},
		1250: {
			slidesPerView: 4,
		},
	},
});
