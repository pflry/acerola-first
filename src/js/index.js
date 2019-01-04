'use strict';

import hljs from 'highlight.js/lib/highlight';

require('../node_modules/bootstrap/js/affix.js');
require('../node_modules/bootstrap/js/scrollspy.js');
require('../node_modules/dynamic-scrollspy/src/dynamicscrollspy.js');

const app = {
    init: function() {
        app.scrollTop.init();
        app.slideMenu.init();
        app.sidebarAffix.init();
        app.sidebarDynScrollspy.init();
        app.highlightjs.init();
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
            $('.blog-header').toggleClass('move');
            $('body').toggleClass('fix');
            $('.menu-toggle').toggleClass('active');
        });
    }
};

// Sidebar Affix
app.sidebarAffix = {
    init: function() {
        if ($('#sideSummary').length) {
            $('#sideSummary').affix({
                offset: {
                    top: $('#sideSummary').offset().top,
                    bottom: function () {
                        return (this.bottom = $('#footer').outerHeight(true));
                    }
                }
            });
        } 
    }
};

// Sidebar dynamic scrollspy
app.sidebarDynScrollspy = {
    init: function() {
        $('#sideSummary').DynamicScrollspy({
            affix: false,
            tH: 2,
            bH: 3,
            exclude: false,
            genIDs: true, //generate random IDs for headers?
            offset: 150, //offset from viewport top for scrollspy
            ulClassNames: 'summary-nav', //add this class to top-most UL
            activeClass: '', //active class (besides .active) to add to LI
            testing: false //if testing, append heading tagName and ID to each heading
        });
    }
};

// highlight.js (Syntax highlighting)
app.highlightjs = {
    init: function() {
        hljs.registerLanguage('apache', require('highlight.js/lib/languages/apache'));
        hljs.registerLanguage('bash', require('highlight.js/lib/languages/bash'));
        hljs.registerLanguage('css', require('highlight.js/lib/languages/css'));
        hljs.registerLanguage('javascript', require('highlight.js/lib/languages/javascript'));
        hljs.registerLanguage('json', require('highlight.js/lib/languages/json'));
        hljs.registerLanguage('less', require('highlight.js/lib/languages/less'));
        hljs.registerLanguage('php', require('highlight.js/lib/languages/php'));
        hljs.registerLanguage('powershell', require('highlight.js/lib/languages/powershell'));
        hljs.registerLanguage('scss', require('highlight.js/lib/languages/scss'));
        hljs.registerLanguage('stylus', require('highlight.js/lib/languages/stylus'));
        hljs.registerLanguage('typescript', require('highlight.js/lib/languages/typescript'));
        hljs.registerLanguage('xml', require('highlight.js/lib/languages/xml'));

        hljs.initHighlightingOnLoad();
    }
};

app.init();