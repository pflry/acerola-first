'use strict';

require('slick-carousel');
require('jscroll');
import CountUp from 'countup.js';
import OnScreen from 'onscreen';

const app = {
    init: function() {
        app.scrollTop.init();
        app.scrollAnchor.init();
        app.slideMenu.init();
        app.scrollHeader.init();
        app.slickCarousel.init();
        app.jScroll.init();
        app.countUp.init();
        app.accordion.init();
        app.jobFilters.init();
        app.customFileInput.init();
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

// Smooth scroll anchor
app.scrollAnchor = {
    init: function() {
        $(document).on('click', 'a[href^="#"]', function (event) {
            event.preventDefault();

            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top
            }, 500);
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
            let hb = $('#header');
            let bbh = $('#blogBannerHome');

            st > 40 && !hb.hasClass() ? hb.addClass('scroll') : hb.removeClass('scroll');
            st > 40 && !bbh.hasClass() ? bbh.addClass('scroll') : bbh.removeClass('scroll');
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
            decimal: ','
        };

        let params = {
            start: 0,
            decimals: 0,
            duration: 15
        };

        let kounters = ['counterCareer', 'counterCustomer', 'counterContact', 'counterCareerBody', 'counterCustomerBody', 'counterContactBody'];
        
        let i;

        let os = new OnScreen({
            tolerance: 0,
            debounce: 0
        });

        os.on('enter', '.counter', (element, event) => {
            for (i = 0; i < kounters.length; i++) {
                let end = parseInt($('#' + kounters[i]).attr('data-number'));
                let yocounter = new CountUp(kounters[i], params.start, end, params.decimals, params.duration, options);
                yocounter.start();
            }
            os.destroy();
        });
    }
};

// accordion
app.accordion = {
    init: function () {
        $('#accordion').click(function () {
            $(this).toggleClass('active');
            $('#trier').removeClass('active');
            $('#jobCategories').slideToggle(250);
            $('#sortTypes').slideUp(250);
        });

        $('#trier').click(function () {
            $(this).toggleClass('active');
            $('#accordion').removeClass('active');
            $('#sortTypes').slideToggle(250);
            $('#jobCategories').slideUp(250);
        });

        $('#shareJob').click(function () {
            $(this).toggleClass('active');
            $('#socialJob').slideToggle(250);
        });
    }
};


// job filters (btn active or not)
app.jobFilters = {
    init: function () {
        let currentURL = $(location).attr("href");
        let pathArray = currentURL.split('/');
        let btnID = '#'+pathArray[pathArray.length-2];

        $(btnID).length ? $(btnID).toggleClass('active') : $('#allCategories').toggleClass('active');
    }
};


// Custom file input
 app.customFileInput = {
    init: function () {
        $('.inputfile').each(function () {
            let $input = $(this),
                $label = $input.next('label'),
                labelVal = $label.html();
            
            $input.on('change', function (e) {
                
                let fileName = '';

                if (e.target.value) {
                    fileName = e.target.value.split('\\').pop();
                }
                    

                if (fileName) {
                    $label.html(fileName);
                    $label.addClass('selected');
                }else{
                    $label.html(labelVal);
                }
            });
            
        });
    }
};

app.init();