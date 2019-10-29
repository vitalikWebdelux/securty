var bezpekaModule, bezpekaValidation;

(function($) {
	$(window).scroll(function () {
		if($(this).scrollTop() > 69) {
			$('#scroller').addClass('show');
			$('#widjet-phone').addClass('show');
		} else {
			$('#scroller').removeClass('show');
			$('#widjet-phone').removeClass('show');
		}
	});
	$('#scroller').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 1000);
		return false;
	});
	bezpekaModule = (function() {
		$('.type__container').on('click',function(){
			$('.hint').fadeIn();
			$('.calc').addClass('overlay');
		});
		$('.hint__close').on('click',function(){
			$('.hint').fadeOut();
			$('.calc').removeClass('overlay');
			els.$calc_slider.slick('slickNext');
		});
		$(document).mouseup(function (e) {
			var container = $(".hint");
			if (container.has(e.target).length === 0){
				$('.hint').fadeOut();
				$('.calc').removeClass('overlay');
		   	}
		});
		var els = {
			$calc_section : $('section.calc'),
			$calc_slider : $('.slider'),
			$taryf_slider : $('.taryf'),

			$progress_bar : $('.calc__progress'),
			$progress_bar_label : $('.calc__progress-text span'),

			$next_btn : $('.bc-slide').find('.bc-btn--next'),
			$prev_btn : $('.bc-slide').find('.bc-btn--prev'),
			$logo_slider : $('.bc-logos__slider')
		}, chs = {
			$rooms : $('.rooms__container'),
			$version : $('.version__container'),
			$type : $('.type__item--step'),
			$taryf : $('.taryf__item'),
			$city : $('.city__container'),
			$option : $('.option__item'),
			$prize : $('.prize__item')
		}

		function getFilterValue() {
			// Grab all the values from the filters.
			var values = $('.bc-slide').map(function() {
				// For each group, get the select values.
				var groupVal = $(this).find('.f-radio-taryf:checked').map(function() {
					return $(this).data('class');
				}).get();
					// join the values together.
				return groupVal.join('');
			}).get();

			return values.filter(function(n) {
				return n !== "";
			}).join('');
		}
		function scrollToTarget(t) {
			if (t.length > 0) {
				$('html, body').animate({
					scrollTop: t.offset().top - 200
				}, 500, 'swing'); 
	        }
		}
		return {
			init: function() {
				this.choiceNext();
				this.quizHandler();
				this.sliderCity();
				this.validationInput();
				this.modalStart();
				this.ajaxHandler();
				this.logosSlider();
				this.swipeDown();
				this.scrollHandler();
			}, 
			swipeDown: function(){
				$('a[data-scroll]').click(function () {
			    var offset = 0; // <-- change the value here
			    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

			      if (target.length) {
			        $('html, body').animate({
			          scrollTop: target.offset().top + offset
			        }, 1000, 'swing');
			        return false;
			      }
			    }
			  });
			},
			sliderCity: function(){
				els.$next_btn.attr('disabled', true);
				els.$prev_btn.on('click', function(){
					$(this).parent().siblings('.i').find("input[type='radio']").attr('checked', false);
					els.$next_btn.attr('disabled', false);
				});
				
			},
			choiceNext : function(){
				function click(){
					setTimeout(function(){
						els.$calc_slider.slick('slickNext');
					}, 300)
				}
				
				chs.$rooms.on('click',   click);
				chs.$version.on('click', click);
				chs.$type.on('click',    click);
				chs.$taryf.on('click',   click);
				chs.$city.on('click',    click);
				chs.$option.on('click',  click);
				chs.$prize.on('click',   click);
			},
			modalStart: function() {
				$('.bc-btn--border').on('click', e => {
					e.preventDefault();
					e.stopPropagation();
				  	$('#social__modal__container').toggleClass('hide-modal-recall');
				});
				$('#widjet-phone').on('click', e => {
					e.preventDefault();
				  	$('#social__modal__container').removeClass('hide-modal-recall');
				});
				$('.bc-btn--taryf').on('click', e => {
					e.preventDefault();
					e.stopPropagation();
				  	$('#social__modal__container').toggleClass('hide-modal-recall');
				});
				
				$('#social__modal__container').on('click', e => {
					e.stopPropagation();
					$('#social__modal__container').addClass('hide-modal-recall');
					$('#thanks__modal__container').addClass('hide-modal-recall');
				});
				$('#close__social__modal__container').on('click', e => {
					e.preventDefault();
					$('#social__modal__container').addClass('hide-modal-recall');
				});
				$('.social__modal__wrap').on('click', function(e){
					e.stopPropagation();
				})
			},
			scrollHandler: function(){
				
			},
			validationInput: function() {
				$('input[name="phone"]').inputmask({
					"mask": "(099) 999-99-99"
				});
				$('input[name="phone"]').on('change keyup keydown', function() {
					var myVar = $(this).val();
					var digit = ('' + myVar)[2];
					if (digit == '0') {
						$(this).val(' ');
						$(this).blur().focus();
					}
					$('input[type="submit"]').attr('disabled', 'disabled');
					var re = new RegExp("_$");
					if (!re.test(myVar)) {
						$(this).removeClass('error-phone');
						$('input[type="submit"]').removeAttr('disabled');
						$('button[type="submit"]').removeAttr('disabled').find('.shine-button__el').addClass('animate');
					} else {
						$(this).addClass('error-phone');
					}
				});
			},
			ajaxHandler: function(){
				$('#social__modal__container, .calc').on('submit', 'form', function (e) {
					e.preventDefault();
					var formData = $(this).serializeArray();
					$.ajax({
						type: 'POST',
						url: "/wp-admin/admin-ajax.php",
						data: formData,
						beforeSend: function beforeSend() {
							$('button[type="submit"]').attr('disabled', true);
							setTimeout(() => {
								$('button[type="submit"]').attr('disabled', false);
							}, 1750);
						},
						success: function success(data) {
							$('#social__modal__container').addClass('hide-modal-recall');
							$('#thanks__modal__container').removeClass('hide-modal-recall');
							setTimeout(function(){
								$('#thanks__modal__container').addClass('hide-modal-recall');
							}, 2100);

							setTimeout(function(){
								if(formData[1].name == "rooms-one") location.href = "https://bezpeka.club/";
							}, 2200);
							
						},
						error: function error(data) {
							console.log('error: ' + formData);
						}
					});
					return false;
				});
			},
			logosSlider: function() {
				if( els.$logo_slider.length > 0 ) {
					var logos = els.$logo_slider.slick({
						dots: true,
						prevArrow: false,
						nextArrow: false,
						loop: true,
						speed: 500,
						cssEase: 'ease-in-out',
						slidesToShow: 7,
						autoplay: true,
						slidesToScroll: 1,
						responsive: [
							{
								breakpoint: 992,
								settings : {
									slidesToShow: 5,
									dots: false
								}
							},
							{
								breakpoint: 768,
								settings : {
									slidesToShow: 3,
									dots: false
								}
							},
							{
								breakpoint: 568,
								settings : {
									slidesToShow: 1,
									dots: false
								}
							}
						]
					});
				}
			},
			quizHandler: function() {
				if( els.$calc_section.length < 0 ) {
					return;
				}
				els.$calc_slider.on('init', function() {
					els.$next_btn.attr('disabled', true);
				});
				// Slick for calc steps
				els.$calc_slider.slick({
					prevArrow: false,
					nextArrow: false,
					infinite: false,
					loop: false,
					adaptiveHeight: true,
					swipe: false,
					fade: true,
					touchMove: false,
					draggable: false,
				});

				els.$calc_slider.on('beforeChange', function() {
					els.$next_btn.attr('disabled', true);
				});

				this.progressHandler(els.$calc_slider);



				// Prev / next click events
				els.$next_btn.on('click', function(e) {
					bezpekaModule.prevNextHandler(els.$calc_slider, 'next', e);
					scrollToTarget($('#b_step_slider'))
				});
				els.$prev_btn.on('click', function(e) {
					bezpekaModule.prevNextHandler(els.$calc_slider, 'prev', e);
					scrollToTarget($('#b_step_slider'))
				});

				// Slick for taryfs
				els.$taryf_slider.slick({
					slidesToShow: 4,
					slidesToScroll: 1,
					loop: false,
					infinite: false,
					nextArrow: '<button type="button" class="btn taryf__arrow-right"></button>',
					prevArrow: '<button type="button" class="btn taryf__arrow-left"></button>',
					responsive: [
						{
							breakpoint: 1200,
							settings : {
								slidesToShow: 3,
							}
						},
						{
							breakpoint: 991,
							settings : {
								slidesToShow: 2,
							}
						},
						{
							breakpoint: 768,
							settings : {
								slidesToShow: 1,
							}
						}
					]
				});		
				$('.f-radio-taryf').on('change', function() {
					var filterClass = getFilterValue();
					els.$taryf_slider.slick('slickUnfilter');
					els.$taryf_slider.slick('slickFilter', filterClass);
					if($('#city-15').is(':checked')){
						$('#city-input-text').trigger( "focus" );
						$('#city-input-text').attr('disabled', false);
					}else{
						$('#city-input-text').attr('disabled', true);
					}

					$(this).closest('.slider').find('.bc-btn--next').attr('disabled', false);		
				});
			},
			progressHandler : function(slider) {
				slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {   
					var calcing = ( (nextSlide) / (slick.slideCount-1) ) * 100;
					els.$progress_bar_label.text(Math.floor(calcing) + '%');
					els.$progress_bar.css({
						'background-size': calcing + '% 100%'
					}).attr('aria-valuenow', calcing );

					// els.$progress_bar_label.text( calcing + '% completed' );
				});
			},
			prevNextHandler : function(slider, direction, e) {
				e.preventDefault();
				if( 'next' === direction ) {
					slider.slick('slickNext');
				} else if( 'prev' === direction  ) {
					slider.slick('slickPrev');
					($(this).siblings("button[type='button']")).attr('disabled', false);
				}
			}
		}
	}());
})(jQuery);
jQuery(document).ready(function () {
    bezpekaModule.init();
});