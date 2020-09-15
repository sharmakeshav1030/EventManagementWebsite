/* Light Carousel v1.0.0 | (c) 2015 Taisuke J | This project is released under the MIT license. */

(function($){

	$.fn.lightCarousel = function(options){

		options = $.extend({
			interval: 6000, // Interval between transitions
			changeHeight: true, // If set to false, it retains the height of first slide
			slideshow: true // Auto transitons
		}, options);

		this.each(function(){

			var container = this;

			window.onload = function() {

				/* Initial settings */
				if((typeof window.orientation != 'undefined') || (navigator.userAgent.indexOf('Windows Phone') != -1)){
					$('.carousel').addClass('mobile');
				} // Hide controls for mobile

				$(container).fadeIn(1000);
				setTimeout(function(){
					$('.carousel li:first').addClass('current');
				}, 200);

				$('.thumbnails li:first').addClass('selected');
				$('.carousel').height($('.carousel li:first').outerHeight() - 1);
				// There was some browser differences in calculation (-1px)

				var selectedNumber = 0, // Shows which slide is currently displayed
					slideLength = -1, // Number of slides
					pause = false; // true when user select a slide

				for(var i = 0; i < $('.carousel li').length; i++) {
					var caption = $('.carousel li').eq(i).children('img').attr('alt');
					$('.carousel li').eq(i).append('<div class="caption"><span>' + caption + '</span></div>');
					slideLength++;
				} // Inserting captions and counting slides

				$('.thumbnails img').wrap("<div></div>"); // for the selected thumbnail color

				/* Transition function (called by click events and the timer) */
				function changeSlide(number) {
					if(options.changeHeight){
						$('.carousel').height($('.carousel li').eq(number).outerHeight() - 1);
					}
					$('.carousel li').removeClass('current');
					$('.carousel li').eq(number).addClass('current');
					$('.thumbnails li').removeClass('selected');
					$('.thumbnails li').eq(number).addClass('selected');
					selectedNumber = number;
				}

				/* Click events which pass values to the function */
				$('.thumbnails ul').on('click touchstart', 'li', function(e) {
					var index = $('.thumbnails li').index(this);
					changeSlide(index);
					pause = true;
				});
				$('.thumbnails ul').on('click touchstart', 'li', function(e) {
					var index = $('.thumbnails li').index(this);
					changeSlide(index);
					pause = true;
				});
				$('.controls').on('click touchstart', '.prev', function(e) {
					if(selectedNumber == 0) {
						changeSlide(slideLength);
					} else {
						changeSlide(selectedNumber - 1);
					}
					pause = true;
				});
				$('.controls').on('click touchstart', '.next', function(e) {
					if(selectedNumber == slideLength) {
						changeSlide(0);
					} else {
						changeSlide(selectedNumber + 1);
					}
					pause = true;
				});

				/* Automatic Slideshow */
				if(options.slideshow) {
					setTimeout(autoTransition, options.interval);
				}

				function autoTransition() {
					if(pause) {
						pause = false;
					} else {
						if(selectedNumber == slideLength) {
							selectedNumber = 0;
						} else {
							selectedNumber++;
						}
						changeSlide(selectedNumber);
					}
					setTimeout(autoTransition, options.interval);
				}

				/* After resizing the window */
				var resizeTimer = false;
				$(window).on("resize", function() {
					if (resizeTimer !== false) {
						clearTimeout(resizeTimer);
					}
					timer = setTimeout(function() {
						$('.carousel').height($('.carousel li').eq(selectedNumber).outerHeight() - 1);
					}, 50);
				});
			}
		});

	}

})(jQuery);