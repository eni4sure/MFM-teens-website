/* JS Document */
/******************************

[Table of Contents]

1. Vars and Inits
2. Set Header
3. Init Header Search
4. Init Menu
5. Init Timer
6. Init Lightbox


******************************/
$(document).ready(function() {
    "use strict";
    /* 

    1. Vars and Inits

    */    
    var hamb = $(".hamburger");
    var menuActive = false;
    var menu = $(".menu");
    initMenu();
    initTimer();
    /* 


    4. Init Menu

    */    function initMenu() {
        if (hamb.length) {
            if (menu.length) {
                hamb.on("click", function() {
                    if (menuActive) {
                        closeMenu();
                    } else {
                        openMenu();
                    }
                });
                $(".menu_close").on("click", function() {
                    if (menuActive) {
                        closeMenu();
                    } else {
                        openMenu();
                    }
                });
            }
        }
    }
    function closeMenu() {
        menu.removeClass("active");
        menuActive = false;
    }
    function openMenu() {
        menu.addClass("active");
        menuActive = true;
    }
    /* 

    5. Init Timer

    */    
    function endOfWeek(date) {
     
        var lastday = date.getDate() - (date.getDay() - 1) + 6;
        return new Date(date.setDate(lastday));
     
    }

    function initTimer() {
        if ($(".event_timer").length) {
            // Uncomment line below and replace date
            var target_date = endOfWeek(new Date());
            console.log(target_date.toString());
            // var target_date = new Date("February 9, 2020").getTime();
            // comment lines below
            // var date = new Date();
            // date.setDate(date.getDate() + 3);
            // var target_date = date.getTime();
            //----------------------------------------
            // variables for time units
                var days, hours, minutes, seconds;
            var d = $("#day");
            var h = $("#hour");
            var m = $("#minute");
            var s = $("#second");
            setInterval(function() {
                // find the amount of "seconds" between now and target
                var current_date = new Date().getTime();
                var seconds_left = (target_date - current_date) / 1e3;
                // do some time calculations
                                days = parseInt(seconds_left / 86400);
                seconds_left = seconds_left % 86400;
                hours = parseInt(seconds_left / 3600);
                seconds_left = seconds_left % 3600;
                minutes = parseInt(seconds_left / 60);
                seconds = parseInt(seconds_left % 60);
                // display result
                                d.text(days);
                h.text(hours);
                m.text(minutes);
                s.text(seconds);
            }, 1e3);
        }
    }
});
window.jssor_1_slider_init = function() {
    var s = {
            $AutoPlay: 1,
            $LazyLoading: 1,
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 30,
                $SpacingY: 30
            }
        },
        d = new $JssorSlider$("jssor_1", s),
        o = 1600;

    function i() {
        var s = d.$Elmt.parentNode.clientWidth;
        if (s) {
            var e = Math.min(o || s, s);
            d.$ScaleWidth(e)
        } else window.setTimeout(i, 30)
    }
    i(), $Jssor$.$AddEvent(window, "load", i), $Jssor$.$AddEvent(window, "resize", i), $Jssor$.$AddEvent(window, "orientationchange", i)
}

jssor_1_slider_init();