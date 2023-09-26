(function ($) {
    "use strict";
    var fullHeight=function () {
        $('.js-fullheight').css('height', $(window).height());
        $(window).resize(function () {
            $('.js-fullheight').css('height', $(window).height());
        });
    };
    fullHeight();
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
    $('#sidebarCollapse').on('click', function () {
        $('#content').toggleClass('active');
    });
    $('#sidebarCollapse').on('click', function () {
        $('#button-add').toggleClass('active');
    });
}
)(jQuery);
