
(function($){
	"use strict";
	var HT = {};

	/*MAIN*/ 

	var $window = $(window);
	var	$document = $(document);
	var $carousel = $(".owl-slide");
	

		HT.carousel = () =>{
			
			$carousel.each(function(){
				let _this = $(this);
				let option = _this.find('.owl-carousel').attr('data-owl');
				let owlInit = atob(option);
				owlInit = JSON.parse(owlInit);
				_this.find('.owl-carousel').owlCarousel(owlInit);
			});
		}

	// $(document).ready(function(){
 //  		$(".owl-carousel").owlCarousel();
	// });
		

		
		
		$document.on('ready',function(){
			HT.carousel();
			// HT.sale_carousel();
			
		});

})(jQuery);
