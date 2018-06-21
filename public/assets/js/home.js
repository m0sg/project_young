
(function($){

	$(document).ready(function() {
		/* ---------------------------------------------- /*
		 * Header Scroll 
		/* ---------------------------------------------- */
		$('.header .navbar').onePageNav({
			currentClass: 'current',
			changeHash: false,
			scrollSpeed: 750
		});

		/* ---------------------------------------------- /*
		 * Home Banner Scroll 
		/* ---------------------------------------------- */
		$(".lets-talk").click(function() {
		    $('html,body').animate({
		        scrollTop: $("#contact").offset().top},
		        'slow');
		});

		/* ---------------------------------------------- /*
		 * Testimonial Slider
		/* ---------------------------------------------- */
		$('.testimonial-slider').owlCarousel({
		    loop:true,
		    margin:10,
		    nav:true,
            dots:false,
		    items:1
		})

		/* ---------------------------------------------- /*
		 * Testimonial Slider
		/* ---------------------------------------------- */
		$('.testimonial-slider-01').owlCarousel({
			dots:true,
		    loop:true,
		    margin:10,
		    nav:false,
		    items:1
		})


        $('.testimonial-slider-02').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            items:1,
            autoplay:true,
            autoplayTimeout:6000
        })

	}); // Document Get Ready End here

	/* ---------------------------------------------- /*
	 * home Banner
	/* ---------------------------------------------- */
	$(".home-banner").height($(window).height());
	$(window).resize(function(){
		$(".home-banner").height($(window).height());
	});

    $(function() {

        $('ul.tabs__caption').on('click', 'li:not(.active)', function() {
            $(this)
                .addClass('active').siblings().removeClass('active')
                .closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
        });

    });



})(jQuery);

