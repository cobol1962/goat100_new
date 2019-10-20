(function($){
	$(function(){


    // Navbar

	}); // end of document ready
})(jQuery); // end of jQuery name space
function initializeGallery(hash) {
		$(".count").remove();
	$(".button-collapse").sideNav();
	var categories = $('nav .categories-container');
	if (categories.length) {
		categories.pushpin({ top: categories.offset().top });
		var $links = categories.find('li');
		$links.each(function() {
			var $link = $(this);
			$link.on('click', function() {
				$links.removeClass('active');
				$link.addClass('active');
				var $galleryItems = $('.gallery .gallery-item');

				$galleryItems.stop().addClass('gallery-filter').fadeIn(100);

				if (hash !== 'all') {
					var $galleryFilteredOut = $galleryItems.not('.' + hash).not('.all');
					$galleryFilteredOut.removeClass('gallery-filter').hide();
				}

				// transition layout
				$masonry.masonry({
					transitionDuration: '.3s'
				});
				// only animate on layout
				$masonry.one( 'layoutComplete', function( event, items ) {
					$masonry.masonry({
						transitionDuration: 0
					});
				});
				setTimeout(function() {

				$masonry.masonry('layout');
				}, 1000);
			});
		});
	}
	var $galleryItems = $('.gallery .gallery-item');



	// Home
	$('.carousel:not(.carousel-slider)').carousel({
		dist: 0,
		padding: 10
	});
	$('.carousel.carousel-slider').carousel({
		fullWidth: true,
		indicators: true,
		onCycleTo: function(el) {
			$('.nav-background img').removeClass('active');
			$('.nav-background img').eq(el.index()).addClass('active');
		}
	});


	// Masonry Grid
	var $masonry = $('.gallery');
	$masonry.masonry({
		// set itemSelector so .grid-sizer is not used in layout
		itemSelector: '.gallery-filter',
		// use element for option
		columnWidth: '.gallery-filter',
		// no transitions
		transitionDuration: 0
	});
	// layout Masonry after each image loads
	$masonry.imagesLoaded(function() {
		$masonry.masonry('layout');

	});

	$('a.filter').click(function (e) {
		e.preventDefault();
	});
	setTimeout(function() {
		var rb = 1;

		$.each($galleryItems, function(i) {
			if ($(this).is(":visible")) {
				if ($(this).find(".gallery-name").find(".count").length == 0) {
					$(this).find(".gallery-name").append($('<span class="btn-floating btn-large waves-effect waves-light count">' + rb + '</span>'));
				}
				$(this).find(".gallery-name").find(".count").html(rb);
				$(this).attr("order", rb);
				rb++;
			}
		})
	}, 2000);


	// Contact Form Icon
	$("form .form-control").focus(function() {
		$(this).siblings("label").first().children("i").first().css({"color": "#aaa", "left": 0});
	});
	$("form .form-control").blur(function() {
		$(this).siblings("label").first().children("i").first().css({"color": "transparent", "left": "-20px"});
	});


	var onShow = function(el) {
		var carousel = el.find('.carousel.initialized');
		carousel.carousel({
			dist: 0,
			padding: 10
		});
		$("#lg-share").hide();
		$.each(el.find('.carousel.initialized').find("img"), function() {
			$(this).closest("a").attr("href", $(this).attr("src"));
		});
		var $lg = el.find('.carousel.initialized').lightGallery({
	 		thumbnail: true,
 		});
		$lg.on('onAfterOpen.lg',function(event) {
			$("#lg-share").hide();
	   	$("#chatDiv").hide();
		});
		$lg.on('onCloseAfter.lg',function(event){
			$("#chatDiv").show();
		});
	};
	$('.gallery-expand').galleryExpand({
		onShow: onShow,
		onHode: function() {
			alert(">")
			$("#chatDiv").hide();
		}
	});

	$('.blog .gallery-expand').galleryExpand({
		onShow: onShow,
		fillScreen: true,
		inDuration: 500,
	});

}
