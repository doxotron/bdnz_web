$(document).ready(function () {

    /*** initialize functions ***/
    mAnimate();
    /*** text rotator ***/
    initTextRotator();


    $(window).on("load resize", function () {
        var windowHeight = $(window).height();
        $(".homepage-hero-module").css("min-height", windowHeight);
        $(".video").css("min-height", windowHeight);
    });

    $(window).on("scroll", function () {
        var pageTop = $("html").scrollTop();
        if (pageTop > 150) {
            $(".site-header").addClass("solid-color");
        } else {
            $(".site-header").removeClass("solid-color");
        }
    });

    $(window).on("load scroll", function () {
        $(".manimate").each(function () {
            var topOfElement = $(this).offset().top;
            var bottomOfElement = $(this).offset().top + $(this).outerHeight();
            var bottomOfScreen = $(window).scrollTop() + window.innerHeight;
            var topOfScreen = $(window).scrollTop();
            var getTime = $(this).attr("data-manim-time");
            var elem = $(this);
            var randomize = (Math.random() * 1.5) + 1;
            if ((bottomOfScreen > topOfElement) && (topOfScreen < bottomOfElement)) {
                setTimeout(function () {
                    elem.addClass("manim-do-appear");
                }, getTime * randomize);
            }
        });
    });


    $(".feature").click(function () {
        $(".feature").removeClass("active-feature");
        $(this).addClass("active-feature");
        showSlide();
    });

    $(".features-right").click(function (e) {
        e.preventDefault();
        var elem = $(".feature");
        var numberOfElems = elem.length;
        if (elem.last().hasClass("active-feature")) {
            $(".active-feature").removeClass("active-feature");
            elem.first().addClass("active-feature");
        } else {
            $(".active-feature").removeClass("active-feature").next().addClass("active-feature");
        }
        showSlide();
    });

    $(".features-left").click(function (e) {
        e.preventDefault();
        var elem = $(".feature");
        var numberOfElems = elem.length;
        if (elem.first().hasClass("active-feature")) {
            $(".active-feature").removeClass("active-feature");
            elem.last().addClass("active-feature");
        } else {
            $(".active-feature").removeClass("active-feature").prev().addClass("active-feature");
        }
        showSlide();
    });

    //parallax background

    $("section[data-type='background']").each(function () {
        var bgobj = $(this);
        var bgspeed = $(this).attr("data-speed");
        //console.log(bgspeed);

        $(window).scroll(function () {
            //console.log('lskjdflk');
           var yPos = -($(window).scrollTop() / bgspeed);
           if ($(window).outerWidth() < 1024) {
               yPos = 0;
           }
           var coords = '50%' + yPos + 'px';

           bgobj.css("backgroundPosition", coords);
        });
    });

    $('.map-point').click(function () {
        //$('.map-point').removeClass('map-point-expand');
        var elem = $(this);
        var moveElemLeft = "-=100";
        var moveElemRight = "+=100";

        if ($(document).width() < 1024) {
            moveElemLeft = "-=200";
            moveElemRight = "+=200";
        }
        if (!elem.hasClass('map-point-expand')) {
            elem.animate({left: moveElemLeft},300);
            $('.map-point-expand').animate({left:moveElemRight},500).removeClass('map-point-expand');
            elem.addClass('map-point-expand');
        } else {
            elem.removeClass('map-point-expand').animate({left:moveElemRight},500);
        }

       //elem.toggleClass('map-point-expand');
    });

    $('button.navbar-toggle').click(function (e) {
        $('body,html').toggleClass('scroll-block');
    });

    $("#loader").hide();

});


function showSlide() {
    //var slidePos = $(".feature-decr-slide");
    var activeElem = $(".active-feature").index() + 1;
    $(".feature-descr-slide").removeClass("active-slide");
    $(".feature-descr-slide:nth-child(" + activeElem + ")").addClass("active-slide");

    var leftOffset = $(".active-slide").offset().left;
    var featureWidth = $(".features-description").innerWidth();
    $(".features-holder").css("margin-left", 0 - (leftOffset - featureWidth));
}

function initTextRotator() {
    $(".text-rotator").each(function () {
        var elem = $(this);
        var wordsArr = elem.attr("data-rotator").split(",");
        var rotatorTime = elem.attr("data-rotator-time");
        var rotatorSpeed = elem.attr("data-rotator-speed");
        var getHeight = elem.outerHeight();
        $(this).wrap("<span class='rotator-container'></span>");
        var wordCounter = 0;
        elem.text(wordsArr[wordCounter]);
        setInterval(function () {
            elem.animate({
                top: getHeight
            }, rotatorSpeed, function () {
                wordCounter++;
                if (wordCounter >= wordsArr.length) {
                    wordCounter = 0;
                }
                elem.text(wordsArr[wordCounter]);
                elem.animate({
                    top: 0
                }, rotatorSpeed);
            });
        }, rotatorTime);
    });
}

function mAnimate() {
    $(".manimate").each(function () {
        var elem = $(this);
        var getWidth = $(this).outerWidth();
        var getHeight = $(this).outerHeight();
        var getMarginTop = elem.css("margin-top");
        var getMarginBottom = elem.css("margin-bottom");
        var getMarginLeft = elem.css("margin-left");
        var getMarginRight = elem.css("margin-right");
        //console.log(getHeight);
        //add wrapper
        $(this).wrap("<div class='manimate-container' style='width:" + getWidth + "px; height:" + getHeight + "px; margin:" + getMarginTop + " " + getMarginRight + " " + getMarginBottom + " " + getMarginLeft + ";'></div>").css("margin", "0");
    });
}