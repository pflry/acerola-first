'use strict';

const app = {
    init: function() {
        app.scrollTop.init();
        app.slideMenu.init();
        app.scrollHeader.init();
    }
};

// Smooth scrolltop
app.scrollTop = {
    init: function() {
        $('#scrollTop').click(function() {
            $('html,body').animate({
                scrollTop: 0
            }, 800);
        });

        $(window).scroll(function() {
            let topPos = $(this).scrollTop();
            topPos > 100 ? $('#scrollTop').addClass('scroll-active') : $('#scrollTop').removeClass('scroll-active');
        });
    }
};

// Slide menu
app.slideMenu = {
    init: function() {
        $('.menu-toggle').click(function () {
            $('#mobalMenu').toggleClass('move');
            $('body').toggleClass('fix');
            $('.menu-toggle').toggleClass('active');
        });
    }
};

// Scroll header
app.scrollHeader = {
    init: function() {

        $(window).scroll(function () {
            let st = $(this).scrollTop();
            st > 100 ? $('#blogHeaderTop').addClass('scroll') : $('#blogHeaderTop').removeClass('scroll');
        });
    }
};

app.init();