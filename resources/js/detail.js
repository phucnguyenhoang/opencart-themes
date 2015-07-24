/**
 * Created by Administrator on 21/07/2015.
 */

//<![CDATA[
var body_class = $('body').attr('class');
if(body_class == 'common-home') {
    $('#pt_menu_home').addClass('act');
}

var CUSTOMMENU_POPUP_EFFECT = 1;
var CUSTOMMENU_POPUP_TOP_OFFSET = 62//]]>

$(document).ready(function() {
    $('.thumbnails').magnificPopup({
        type:'image',
        delegate: 'a',
        gallery: {
            enabled:true
        }
    });

    $('.slides').owlCarousel({
        autoPlay: 10000, //Set AutoPlay to 10 seconds
        slideSpeed :1000,
        navigation : true,
        paginationNumbers : true,
        pagination : false,
        stopOnHover : false,
        items :6, //10 items above 1000px browser width
        itemsDesktop : [1000,4], //5 items between 1000px and 901px
        itemsDesktopSmall : [900,3], // betweem 900px and 601px
        itemsTablet: [600,3], //2 items between 600 and 0
        itemsMobile : [480,2] // itemsMobile disabled - inherit from itemsTablet option
    });
});
