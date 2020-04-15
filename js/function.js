(function ($) {
    "use strict";
	
	var $window = $(window); 
	var $body = $('body'); 
	
	/* Preloader Effect */
	$window.load(function() {
		$(".preloader").fadeOut(600);
    });
	
	/* slick nav */
	$('#main-menu').slicknav({prependTo:'#responsive-menu',label:'', closeOnClick:true,closedSymbol: '<i class="fas fa-angle-right"></i>', openedSymbol:'<i class="fas fa-angle-down"></i>'});
	
	fakewaffle.responsiveTabs();
	
	if($('.single-post-gallery').length){
		var postgallery = new Swiper('.single-post-gallery', {
				preloadImages: false,
				lazy: {
					loadPrevNext: true,
				  },
				autoHeight: true, 
				navigation: {
					nextEl: '.recipe-button-next',
					prevEl: '.recipe-button-prev',
				},
				on:{
					lazyImageReady: function (swiper) {
						this.updateAutoHeight(0);	
					},
				},
			});
	}
	
})(jQuery);