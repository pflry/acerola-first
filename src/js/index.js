'use strict';

require('slick-carousel');
require('jscroll');
import CountUp from 'countup.js';

const app = {
    init: function() {
        app.scrollTop.init();
        app.slideMenu.init();
        app.scrollHeader.init();
        app.slickCarousel.init();
        app.jScroll.init();
        app.countUp.init();
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
            $('#containerWrapper').toggleClass('covered');
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

// Slick carousel
app.slickCarousel = {
    init: function() {
        $(document).ready(function () {
            $('.carousel').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                centerMode: true,
                variableWidth: true,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: false
            });
        });  
    }
};

// jScroll (infinite scroll)
app.jScroll = {
    init: function() {
        let options = {
            debug: false,
            autoTrigger: true,
            loadingHtml: '<div class="loader">Chargement</div>',
            pagingSelector: 'nav.navigation',
            nextSelector: 'nav.navigation .nav-links a.next',
            contentSelector: '.jscroll',
            padding: 20
        };
        $('.jscroll').jscroll(options);
    }
};

// countUp
app.countUp = {
    init: function() {
        let options = {
            useEasing: true,
            useGrouping: true,
            separator: ' ',
            decimal: ',',
        };

        let numAnim1 = new CountUp("counter1", 2, 2008799, 0, 5, options);
        numAnim1.start();
        
        let numAnim2 = new CountUp("counter2", 0, 2508799, 0, 5, options);
        numAnim2.start();
    }
};

app.init();