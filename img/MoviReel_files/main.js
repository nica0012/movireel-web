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

    //Scroll to form

    $(".jumper").click(function () {
        $('html, body').animate({
            scrollTop: $("#myDiv").offset().top
        }, 800);
        return false;

    });

    $(".downHead").click(function () {
        $('html, body').animate({
            scrollTop: $(".section1").offset().top
        }, 800);
        return false;

    });

    $(".downIndex, .headerAppLogo").click(function () {
        $('html, body').animate({
            scrollTop: $("main").offset().top
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

});


//TIMER//

//var eventdate = new Date("January 8, 2016 23:59:59");

function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.now();
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = 'January 8 2016';
initializeClock('clockdiv', deadline);


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