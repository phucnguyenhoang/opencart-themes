function getURLVar(key) {
	var value = [];

	var query = String(document.location).split('?');

	if (query[1]) {
		var part = query[1].split('&');

		for (i = 0; i < part.length; i++) {
			var data = part[i].split('=');

			if (data[0] && data[1]) {
				value[data[0]] = data[1];
			}
		}

		if (value[key]) {
			return value[key];
		} else {
			return '';
		}
	}
}

$(document).ready(function() {

	// increase number of product
	 function minus(){
	   if(document.getElementById("input-quantity").value <= 0) {
	  return false;
	   }
		document.getElementById("input-quantity").value --;
	 };
	// decrease of product
	 function plus(){
	   document.getElementById("input-quantity").value ++;
	 };
	 $('#minus').click(function(){
	  minus();
	 });
	 $('#plus').click(function(){
	  plus();
	 });


	// Highlight any found errors
	$('.text-danger').each(function() {
		var element = $(this).parent().parent();

		if (element.hasClass('form-group')) {
			element.addClass('has-error');
		}
	});

	// zoom
		 $('.thumbnails-image img').elevateZoom({
		 zoomType : "inner",
		 cursor: "crosshair",
		 gallery:'gallery_01',
		 cursor: 'crosshair',
		 galleryActiveClass: "active",
		 imageCrossfade: false
		 });

    // slider
    $(".image-additional").owlCarousel({
        autoPlay: 5000,
        navigation:false,
        pagination: false,
        slideSpeed : 500,
        goToFirstSpeed : 1500,
        autoHeight : true,
        items :3, //10 items above 1000px browser width
        itemsDesktop : [1000,3], //5 items between 1000px and 901px
        itemsDesktopSmall : [900,3], // betweem 900px and 601px
        itemsTablet: [600,2], //2 items between 600 and 0
        itemsMobile : [480,2] // itemsMobile disabled - inherit from itemsTablet option
    });

      //related products roll
      $(".view-related").owlCarousel({
        autoPlay: 3000,
        navigation:true,
        pagination: false,
        slideSpeed : 500,
        goToFirstSpeed : 1500,
        autoHeight : false,
        items : 3, //10 items above 1000px browser width
        itemsDesktop : [1000,3], //5 items between 1000px and 901px
        itemsDesktopSmall : [900,2], // betweem 900px and 601px
        itemsTablet: [600,2], //2 items between 600 and 0
        itemsMobile : [480,1] // itemsMobile disabled - inherit from itemsTablet option
      });

	// Menu
	$('#menu .dropdown-menu').each(function() {
		var menu = $('#menu').offset();
		var dropdown = $(this).parent().offset();

		var i = (dropdown.left + $(this).outerWidth()) - (menu.left + $('#menu').outerWidth());

		if (i > 0) {
			$(this).css('margin-left', '-' + (i + 5) + 'px');
		}
	});
	// click grid/list
	$(document).on('click', '#grid-view', function(e){
		e.preventDefault();
		display('grid');
	});

	$(document).on('click', '#list-view', function(e){
		e.preventDefault();
		display('list');
	});
	// Product List
function display(view) {
	if (view == 'list') {
		$('#content .row > div.clearfix').remove();

		$('#content .product-layout').attr('class', 'product-layout product-list col-xs-12');
		$('.product-list > div').each(function(index, element) {
			html = '<div class="row">';
			html += '<div class="col-xs-12 col-sm-4 col-md-4">';
			html += '<div class="box-left">';
			html += '<div class="left-block">' + $(element).find('.left-block').html() + '</div>';
			html += '</div>';
			html += '</div>';
			html += '<div class="right-block col-xs-12 col-sm-8 col-md-8"><div class="caption">';
				html += '<div class="name">' + $(element).find('.name').html() + '</div>';
				html += ' <p class="description">' + $(element).find('.description').html() + '</p>';
				html += '<div class="price-box">'
				var price = $(element).find('.price').html();
				if (price != null) {
					html += '<p class="price">' + price  + '</p>';
				}
				var rating = $(element).find('.rating').html();
				if (rating != null) {
					html += '<div class="rating">' + rating + '</div>';
				}
				html +='</div>';
				html += '<div class="zoom-in">';
				html += '<div class="button-group">';
				html += $(element).find('.button-group').html() ;
				html +='</div>';
			html +='</div>';
			html += '</div></div>';
			$(element).html(html);

		});
		localStorage.setItem('display', 'list');
		$('.btn-group').find('#list-view').addClass('selected');
		$('.btn-group').find('#grid-view').removeClass('selected');

	} else {
		$('#content .row > .clearfix').remove();



		// What a shame bootstrap does not take into account dynamically loaded columns
		cols = $('#column-right, #column-left').length;

		if (cols == 2) {
			$('#content .product-layout').attr('class', 'product-layout product-grid col-lg-6 col-md-6 col-sm-12 col-xs-6 col-mobile');

			$('#content .product-layout:nth-child(2n)').after('<div class="clearfix"></div>');
		} else if (cols == 1) {
			$('#content .product-layout').attr('class', 'product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-6 col-mobile');

			$('#content .product-layout:nth-child(3n)').after('<div class="clearfix"></div>');
		} else {
			$('#content .product-layout').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-6 col-mobile');

			$('#content .product-layout:nth-child(4n)').after('<div class="clearfix"></div>');
		}

		$('.product-grid > div').each(function(index, element) {
			html = '<div class="item-inner">';
			html += '<div class="left-block">' + $(element).find('.left-block').html() + '</div>';
			html += '<div class="right-block"><div class="caption">';
				html += '<div class="name">' + $(element).find('.name').html() + '</div>';
				var price = $(element).find('.price').html();
				if (price != null) {
					html += '<p class="price">' + price  + '</p>';
				}
				html += '<div class="actions2"><div class="button-group">' +$(element).find('.button-group').html() + '</div></div>';
				html += ' <p class="description">' + $(element).find('.description').html() + '</p>';
			html += '</div></div></div>';
			$(element).html(html);
		});

		 localStorage.setItem('display', 'grid');
		 $('.btn-group').find('#grid-view').addClass('selected');
		 $('.btn-group').find('#list-view').removeClass('selected');
	}
}

	if (localStorage.getItem('display') == 'list') {
		$('#list-view').trigger('click');
	} else {
		$('#grid-view').trigger('click');
	}


	// tooltips on hover
	$('[data-toggle=\'tooltip\']').tooltip({container: 'body'});

	// Makes tooltips work on ajax generated content
	$(document).ajaxStop(function() {
		$('[data-toggle=\'tooltip\']').tooltip({container: 'body'});
	});
});