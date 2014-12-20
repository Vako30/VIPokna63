(function($) {

  $(document).ready(function() {

		$('.view-production .views-field-title').each(function(index, el) {
				var i = index + 1;
				$(this).addClass('b' + i);
			});

  	$('.view-production').prepend('<div id="prodMenu"><div class="box"></div></div>');
  	$('.view-production .views-field-title').clone().addClass('top_buttons').appendTo('#prodMenu .box');
  	$('.view-production .view-content').addClass('text_prod');
  	$('.view-production .views-row').append('<div class="count"> <a href="/kalkulyator">РАССЧИТАТЬ СТОИМОСТЬ</a></div>')

  	$( ".top_buttons" ).click(function() {
  		$( ".top_buttons" ).removeClass('active');
  		$('#prodMenu').removeClass();
  		$('.view-production .text_prod > div').hide();
  	  $( this ).addClass( "active" );
  	  $('#prodMenu').addClass('active' + $('.top_buttons.active').index());
  	  $('.view-production .text_prod > div').eq($('.top_buttons.active').index()).show();
  	});

  	$('.views-field-field-active-promo .field-content').each(function(index, el) {
  		if ($(this).html() == 'АКЦИЯ ЗАВЕРШИЛАСЬ') {
  			$(this).parent().addClass('isDisable');
  		};

  		if ($(this).html() == 'ВНИМАНИЕ АКЦИЯ') {
  			$(this).parent().addClass('isActive');
  		};
  	});

  	$('.field-name-field-active-promo .field-item').each(function(index, el) {
  		if ($(this).html() == 'АКЦИЯ ЗАВЕРШИЛАСЬ') {
  			$(this).parent().addClass('isDisable');
  		};

  		if ($(this).html() == 'ВНИМАНИЕ АКЦИЯ') {
  			$(this).parent().addClass('isActive');
  		};
  	});

  	$('.views-field-field-active-promo').append('<div class="line"></div>');
  	$('.view-display-id-page_2 .views-row').prepend('<div class="line"></div>');


// MAIN MENU

    var i = 0;

    $('.menu li').each(function() {
    	++i;
    	$(this).wrap('<div class="menu_box"></div>');
    	$(this).clone().addClass('under_menu').insertAfter(this);
    	$(this).next().prepend('<img src="http://dev1.smartproductionllc.com/wp-content/themes/VIPokna/assets/img/under_menu' + i + '.png" class="under_menu_img">');
    	var href = $(this).find('a').attr('href');
    	$(this).next().find('img').wrap('<a href="'+ href + '" class="img_link"></a>');
    	$(this).next().wrap('<a href="'+ href + '"></a>');
    });


// SLIDESHOW FRONT PAGE

    $('#block-views-slides_front_page-block .views-row').wrapAll('<div id="slider" class="sl-slider-wrapper"></div><!-- /slider-wrapper -->');
    $('#block-views-slides_front_page-block .views-row').wrapAll('<div class="sl-slider"></div><!-- /sl-slider -->');
    $('#slider').append('<nav id="nav-arrows" class="nav-arrows"> <span class="nav-arrow-prev">Previous</span> <span class="nav-arrow-next">Next</span> </nav> <nav id="nav-dots" class="nav-dots"> <span class="nav-dot-current"></span> <span></span> </nav>');

    $('#block-views-slides_front_page-block .views-row-1').wrap('<div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2"><div class="sl-slide-inner"></div></div>');

		$('#block-views-slides_front_page-block .views-row-2').wrap('<div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5"><div class="sl-slide-inner"></div></div>');

		$('#block-views-slides_front_page-block .views-row-3').wrap('<div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5"> <div class="sl-slide-inner"> </div> </div>');

		$('#block-views-slides_front_page-block .views-row-4').wrap('<div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5"> <div class="sl-slide-inner"> </div> </div>');

		$('#block-views-slides_front_page-block .views-row-5').wrap('<div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5"> <div class="sl-slide-inner"> </div> </div>');

// OPENING FOLDER

	if ( !$("body").hasClass("page-node-24") ) {
		$('#block-webform-client-block-8 .content').prepend('<div class="uc-initial-content"> <!-- custom content --> <span class="clickme">ОБРАТНАЯ СВЯЗЬ</span> </div>');

		$('#block-webform-client-block-8 .content').wrapInner('<div id="uc-container" class="uc-container"> </div>');

		$('#block-webform-client-block-8 .content form').wrap('<div class="uc-final-content"></div>');

		$('#block-webform-client-block-8 .content form').append('<span class="close">x</span>');
	}
		$('#webform-component-name input').attr('placeholder', 'Ваше имя');
		$('#webform-component-email input').attr('placeholder', 'Ваш E-mail');
		$('#webform-component-message textarea').attr('placeholder', 'Ваше сообщение');

		$('#webform-component-vashe-imya input').attr('placeholder', 'Ваше имя');
		$('#webform-component-vash-e-mail input').attr('placeholder', 'Ваш E-mail');
		$('#webform-component-vash-telefon input').attr('placeholder', 'Ваш телефон');

		var $container = $( '#uc-container' ),
			pfold = $( '#uc-container' ).pfold({
				easing : 'ease-in-out',
				folds : 3,
				folddirection : ['left','bottom','left']
			});

		$container.find( 'span.clickme' ).on( 'click', function() {

			pfold.unfold();

		} ).end().find( 'span.close' ).on( 'click', function() {

			pfold.fold();

		} );

// INIT OF SLIDESHOW FRONT PAGE

		var Page = (function() {

			var $navArrows = $( '#nav-arrows' ),
				$nav = $( '#nav-dots > span' ),
				slitslider = $( '#slider' ).slitslider( {
					onBeforeChange : function( slide, pos ) {

						$nav.removeClass( 'nav-dot-current' );
						$nav.eq( pos ).addClass( 'nav-dot-current' );

					}
				} ),

				init = function() {

					initEvents();

				},
				initEvents = function() {

					// add navigation events
					$navArrows.children( ':last' ).on( 'click', function() {

						slitslider.next();
						return false;

					} );

					$navArrows.children( ':first' ).on( 'click', function() {

						slitslider.previous();
						return false;

					} );

					$nav.each( function( i ) {

						$( this ).on( 'click', function( event ) {

							var $dot = $( this );

							if( !slitslider.isActive() ) {

								$nav.removeClass( 'nav-dot-current' );
								$dot.addClass( 'nav-dot-current' );

							}

							slitslider.jump( i + 1 );
							return false;

						} );

					} );

				};

				return { init : init };

		})();

		Page.init();

		/**
		 * Notes:
		 *
		 * example how to add items:
		 */

		/*

		var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');

		// call the plugin's add method
		ss.add($items);

		*/

// ANDROID DOCK FOOTER INIT

		$('#dock-wrapper .item img').wrap('<a href=""></a>')
		var arr = $('#dock-wrapper .item a');

		//Initialize variable
		item 			= $('.item a');
		itemReverse	= item.get().reverse();

		//Arrow up clicked
		$('#arrow-up').on('click', function() {

			$('.dock').addClass('dock-show');
			$('#arrow').hide();

			$.each(item, function() {

				var i 	 = $(this).index();
				var delay = i * 100;

				window.setTimeout(function (index) {
					return function () {
						item.eq(index).stop().animate({ 'top' : '-4.8em' });
					};
				} (i), delay);
			});
		});

		//Arrow down clicked
		$('#arrow-down').on('click', function() {

			$('.dock').removeClass('dock-show');
			$('#arrow').show();

			$.each(itemReverse, function() {

				var i 	 = $(this).index();
				var delay = i * 100;

				window.setTimeout(function (index) {
					return function () {
						$(itemReverse).eq(index).stop().animate({ 'top' : '0' });
					};
				} (i), delay);
			});
		});

		//Item hovered
		$('.item a').hover(function() {
			$(this).stop().animate({ 'top' : '-5.4em' }, 'fast');
		}, function() {
			$(this).stop().animate({ 'top' : '-4.8em' }, 'fast');
		});

		$('.menu_box .under_menu .img_link').each(function(index, el) {
			$(arr[index]).attr('href', $(this).attr('href'));
		});

      $(".owl-carousel").owlCarousel({
          animateOut: 'slideOutDown',
          animateIn: 'flipInX',
          items:1,
          margin:0,
          stagePadding:0,
          smartSpeed:450
      });

  });
} (jQuery));



