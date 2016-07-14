$(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

    //    $(".downHead").click(function () {
    //        $('html, body').animate({
    //            scrollTop: $(".section1").offset().top
    //        }, 800);
    //        return false;
    //
    //    });

    $(".downIndex, .headerAppLogo").click(function () {
        $('html, body').animate({
            scrollTop: $("#OR").offset().top
        }, 800);
        return false;

    });

    $(".down1").click(function () {
        $('html, body').animate({
            scrollTop: $(".section2").offset().top
        }, 800);
        return false;

    });

    $(".down2").click(function () {
        $('html, body').animate({
            scrollTop: $(".section3").offset().top
        }, 800);
        return false;

    });

    $(".down3").click(function () {
        $('html, body').animate({
            scrollTop: $("footer").offset().top
        }, 800);
        return false;

    });

    $(".downOR").click(function () {
        $('html, body').animate({
            scrollTop: $("#bgColorWhite").offset().top
        }, 800);
        return false;

    });

    $(".downCus").click(function () {
        $('html, body').animate({
            scrollTop: $("#previewScroll").offset().top
        }, 800);
        return false;

    });

    $(".downPrev").click(function () {
        $('html, body').animate({
            scrollTop: $("#slides").offset().top
        }, 800);
        return false;

    });

});


jQuery(function($) {
  
  // Function which adds the 'animated' class to any '.animatable' in view
  var doAnimations = function() {
    
    // Calc current offset and get all animatables
    var offset = $(window).scrollTop() + $(window).height(),
        $animatables = $('.animatable');
    
    // Unbind scroll handler if we have no animatables
    if ($animatables.size() == 0) {
      $(window).off('scroll', doAnimations);
    }
    
    // Check all animatables and animate them if necessary
		$animatables.each(function(i) {
       var $animatable = $(this);
			if (($animatable.offset().top + $animatable.height() - 20) < offset) {
        $animatable.removeClass('animatable').addClass('animatedScroll');
			}
    });

	};
  
  // Hook doAnimations on scroll, and trigger a scroll
	$(window).on('scroll', doAnimations);
  $(window).trigger('scroll');

});


$(".noScroll, .noScroll2").click(function () {
    $("body").css("overflow", "hidden");
});
$(".close").click(function () {
    $("body").css("overflow", "visible");
});


$(function () {
    setNavigation();
});

function setNavigation() {
    var path = window.location.pathname;
    path = path.replace(/\/$/, "");
    path = decodeURIComponent(path);

    $(".nav a").each(function () {
        var href = $(this).attr('href');
        if (path.substring(0, href.length) === href) {
            $(this).closest('li').addClass('active');
        }
    });
}





$(document).ready(function () {
    $('#next, #prev, #scrollUp, .slides-pagination, .downOR, .downPrev, .downCus').click(function () {
        $('#blueReel').toggleClass('rotated');
        //                $('#reelSliderBg').css("display","block");

    });
});
//



$('#next, #prev, .slides-pagination').click(function () {
    document.getElementById('video1').pause();
    document.getElementById('video2').pause();
    document.getElementById('video3').pause();
    document.getElementById('video4').pause();

});


$('.video').click(function () {
    if ($("#media-video").get(0).paused) {
        $("#media-video").get(0).play();
    } else {
        $("#media-video").get(0).pause();
    }
});



//TRACKING INFO//

(function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-71286082-2', 'auto');
ga('send', 'pageview');