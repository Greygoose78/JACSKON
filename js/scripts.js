/*!
 * Start Bootstrap - Agency v6.0.3 (https://startbootstrap.com/theme/agency)
 * Copyright 2013-2020 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
 */


var myVar;

function myLoader() {

    myVar = setTimeout(showPage, 900);

}

function showPage() {

    document.getElementById("loader").style.display = "none";
    $(document).ready(function() {
        (function() {
            var i = 0;
            setInterval(function() {
                $("body").addClass("bg1");
                $("body").removeClass("body1");
            }, 0);
        })();
    });
    document.getElementById("page").style.display = "block";
}

(function($) {

    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
        if (
            location.pathname.replace(/^\//, "") ==
            this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length ?
                target :
                $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
                $("html, body").animate({
                        scrollTop: target.offset().top - 72,
                    },
                    1000,
                    "easeInOutExpo"
                );
                return false;
            }
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $(".js-scroll-trigger").click(function() {
        $(".navbar-collapse").collapse("hide");
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $("body").scrollspy({
        target: "#mainNav",
        offset: 74,
    });

    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });


})(jQuery); // End of use strict.