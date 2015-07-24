/**
 * Created by Administrator on 17/07/2015.
 */

$(document).ready(function(){

    // hide #back-top first
    $("#back-top").hide();

    // fade in #back-top
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 150) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-top').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });

});
$('#button-filter').on('click', function() {
    filter = [];

    $('input[name^=\'filter\']:checked').each(function(element) {
        filter.push(this.value);
    });

    location = '#' + filter.join(',');
});

