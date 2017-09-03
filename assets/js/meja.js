$(document).ready(function () {
    $('.ancla').click(function () {
        $('#collapseOne').attr('class', 'collapse');
        var link = $(this);
        var anchor = link.attr('href');
        $('html, body').stop().animate({
            scrollTop: jQuery(anchor).offset().top
        }, 1000);
        return false;
    });

    $(document).scroll(function () {
        if ($(this).scrollTop() > ($('#original-nav').height() / 4)) {
            $(' #fixed-nav ').removeClass('nav-inactive').addClass('nav-active')
        } else {
            $(' #fixed-nav ').removeClass('nav-active').addClass('nav-inactive')
        }
    });
});
