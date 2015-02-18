 var onstart=function () {

   jQuery(document).ready(function ($) {

    $('#myCarousel').carousel({
        interval: 5000
    });

    $('#carousel-text').html($('#slide-content-0').html());

    //Handles the carousel thumbnails
    $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        var id = id_selector.substr(id_selector.length - 1);
        var id = parseInt(id);
        $('#myCarousel').carousel(id);
    });


    // When the carousel slides, auto update the text
    $('#myCarousel').on('slid.bs.carousel', function (e) {
        var id = $('.item.active').data('slide-number');
        $('#carousel-text').html($('#slide-content-' + id).html());
    });

    var windowWidth = $(window).width();
    //alert(windowWidth);
    if (windowWidth > 1024) {
        $('.price-map').hover(function () {
            $('.bt-price').css('box-shadow', '0 0 5px #fff');
            $('.price-btn').fadeToggle(800);
        });
    }
    $('#mobile-toggle').click(function () {
        $('.full-nav').slideToggle();
    });

    $('#action-tabs').click(function () {
        $('#action').slideDown();
    });

    $('.mobile-action a li').click(function () {
        $('#action').slideUp();
    });

    $('#property-tabs').click(function () {
        $('#property').slideDown();
    });

    $('.mobile-action a li').click(function () {
        $('#property').slideUp();
    });

    //slider0
    var slideCount0 = $('#slider0 ul li').length;
    var slideWidth0 = $('#slider0 ul li').width();
    var slideHeight0 = $('#slider0 ul li').height();
    var sliderUlWidth0 = slideCount0 * slideWidth0;

    $('#slider0').css({ height: slideHeight0 });

    $('#slider0 ul').css({ width: sliderUlWidth0, marginLeft: -slideWidth0 });

    $('#slider0 ul li:last-child').prependTo('#slider0 ul');

    function moveLeft0() {
        $('#slider0 ul').animate({
            left: +slideWidth0
        }, 200, function () {
            $('#slider0 ul li:last-child').prependTo('#slider0 ul');
            $('#slider0 ul').css('left', '');
        });
    };

    function moveRight0() {
        $('#slider0 ul').animate({
            left: -slideWidth0
        }, 200, function () {
            $('#slider0 ul li:first-child').appendTo('#slider0 ul');
            $('#slider0 ul').css('left', '');
        });
    };

    $('a#control_prev0').click(function () {
        moveLeft0();
    });

    $('a#control_next0').click(function () {
        moveRight0();
    });

    //slider1
    var slideCount1 = $('#slider1 ul li').length;
    var slideWidth1 = $('#slider1 ul li').width();
    var slideHeight1 = $('#slider1 ul li').height();
    var sliderUlWidth1 = slideCount1 * slideWidth1;

    $('#slider1').css({ height: slideHeight1 });

    $('#slider1 ul').css({ width: sliderUlWidth1, marginLeft: -slideWidth1 });

    $('#slider1 ul li:last-child').prependTo('#slider1 ul');

    function moveLeft1() {
        $('#slider1 ul').animate({
            left: +slideWidth1
        }, 200, function () {
            $('#slider1 ul li:last-child').prependTo('#slider1 ul');
            $('#slider1 ul').css('left', '');
        });
    };

    function moveRight1() {
        $('#slider1 ul').animate({
            left: -slideWidth1
        }, 200, function () {
            $('#slider1 ul li:first-child').appendTo('#slider1 ul');
            $('#slider1 ul').css('left', '');
        });
    };

    $('a#control_prev1').click(function () {
        moveLeft1();
    });

    $('a#control_next1').click(function () {
        moveRight1();
    });

    //slider2

    var slideCount2 = $('#slider2 ul li').length;
    var slideWidth2 = $('#slider2 ul li').width();
    var slideHeight2 = $('#slider2 ul li').height();
    var sliderUlWidth2 = slideCount2 * slideWidth2;

    $('#slider2').css({ height: slideHeight2 });

    $('#slider2 ul').css({ width: sliderUlWidth2, marginLeft: -slideWidth2 });

    $('#slider2 ul li:last-child').prependTo('#slider2 ul');

    function moveLeft2() {
        $('#slider2 ul').animate({
            left: +slideWidth2
        }, 200, function () {
            $('#slider2 ul li:last-child').prependTo('#slider2 ul');
            $('#slider2 ul').css('left', '');
        });
    };

    function moveRight2() {
        $('#slider2 ul').animate({
            left: -slideWidth2
        }, 200, function () {
            $('#slider2 ul li:first-child').appendTo('#slider2 ul');
            $('#slider2 ul').css('left', '');
        });
    };

    $('a#control_prev2').click(function () {
        moveLeft2();
    });

    $('a#control_next2').click(function () {
        moveRight2();
    });

    //slider3

    var slideCount3 = $('#slider3 ul li').length;
    var slideWidth3 = $('#slider3 ul li').width();
    var slideHeight3 = $('#slider3 ul li').height();
    var sliderUlWidth3 = slideCount3 * slideWidth3;

    $('#slider3').css({ height: slideHeight3 });

    $('#slider3 ul').css({ width: sliderUlWidth3, marginLeft: -slideWidth3 });

    $('#slider3 ul li:last-child').prependTo('#slider3 ul');

    function moveLeft3() {
        $('#slider3 ul').animate({
            left: +slideWidth3
        }, 200, function () {
            $('#slider3 ul li:last-child').prependTo('#slider3 ul');
            $('#slider3 ul').css('left', '');
        });
    };

    function moveRight3() {
        $('#slider3 ul').animate({
            left: -slideWidth3
        }, 200, function () {
            $('#slider3 ul li:first-child').appendTo('#slider3 ul');
            $('#slider3 ul').css('left', '');
        });
    };

    $('a#control_prev3').click(function () {
        moveLeft3();
    });

    $('a#control_next3').click(function () {
        moveRight3();
    });

    //Calender
    $('.cal-rt').datepicker({
        todayHighlight: true
    });
    $('.filter-bottom .input-daterange').datepicker({
    });

    //Dropdown
    $('#dropMenu1 li a').click(function () {
        id = $(this).text();
        $('#dropdownMenu1').text(id);
        $('#dropdownMenu1 span').addClass('caret');
        $('#dropdownMenu1 span').addClass('caret-right');
    });

    $('#dropMenu2 li a').click(function () {
        id = $(this).text();
        $('#dropdownMenu2').text(id);
    });

    $('#dropMenu3 li a').click(function () {
        id = $(this).text();
        $('#dropdownMenu3').text(id);
    });

    $('#dropMenu4 li a').click(function () {
        id = $(this).text();
        $('#dropdownMenu4').text(id);
    });

    $('#dropMenu5 li a').click(function () {
        id = $(this).text();
        $('#dropdownMenu5').text(id);
    });

//    $('.property-item').click(function () {
//        $('.prop-info').css('right', '25%');
//        $('.close-info').css('right', '55%');
//        $('.close-info').css('display', 'block');
//    });
//
//    $('.close-info').click(function () {
//        $('.prop-info').css('right', '-10%');
//        $('.close-info').css('display', 'none');
//    });
//
//    var prop_height = $('.item-left').height();
//    $('.property-item, .item-right').height(prop_height + 'px');

    $('.bank').click(function () {
        $('#bank-data').slideToggle("slow");
        $('.bank').toggleClass('active-bank');
    });

    //id smooth
     //$(function () {
     //              $('a[href*=#]:not([href=#])').click(function () {
     //                  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
     //                      var target = $(this.hash);
     //                      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
     //                      if (target.length) {
     //                          $('.prop-info').animate({
     //                              scrollTop: target.offset().top
     //                          }, 1000);
     //                          return false;
     //                      }
     //                  }
     //              });
     //          });
});
    
};
    