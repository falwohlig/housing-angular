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
        $('.full-nav').toggleClass("mobile-header-bottom");
    });

    $('#action-tabs').click(function () {
        $('#action').slideDown();
    });

    $('.action a li').click(function () {
        $('#action').slideUp();
    });

    $('#property-tabs').click(function () {
        $('#property').slideDown();
    });

    $('.mobile-action a li .sub-menu-new').click(function () {
        $('#property').slideUp();
    });

    //About tabs
    $('#about-tabs').click(function () {
        $('#about').slideDown();
    });

    $('.mobile-action a li').click(function () {
        $('#about').slideUp();
    });

    //Service
    $('#service-tabs').click(function () {
        $('#service').slideDown();
    });

    $('.mobile-action a li').click(function () {
        $('#service').slideUp();
    });

    //reverse auction
    $('#reverse-tabs').click(function () {
        $('#reverse').slideDown();
    });

    $('.mobile-action a li').click(function () {
        $('#reverse').slideUp();
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

    //$('.cal-rt').datepicker({
    //    todayHighlight: true
    //});
    //$('.filter-bottom .input-daterange').datepicker({
    //});

    //$('#datetimepicker1').datetimepicker();

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

    $('.property-item').click(function () {
        $('.prop-info').css('right', '25%');
        $('.prop-info').css('display', 'block');
        $('.close-info').css('right', '55%');
        $('.close-info').css('display', 'block');
    });

    $('.close-info').click(function () {
        $('.prop-info').css('right', '-10%');
        $('.close-info').css('display', 'none');
    });

    var prop_height = $('.item-left').height();
    $('.property-item, .item-right').height(prop_height + 'px');

    //Essentials
    $('.bank').click(function () {
        $('#bank-data').slideDown("slow");
        $('.bank').addClass('active-bank');
        $('#hospital-data').slideUp("slow");
        $('.hospital').removeClass('active-bank');
        $('#school-data').slideUp("slow");
        $('.school').removeClass('active-bank');
        $('#park-data').slideUp("slow");
        $('.park').removeClass('active-bank');
    });
    $('.hospital').click(function () {
        $('#hospital-data').slideDown("slow");
        $('.hospital').addClass('active-bank');
        $('#bank-data').slideUp("slow");
        $('.bank').removeClass('active-bank');
        $('#school-data').slideUp("slow");
        $('.school').removeClass('active-bank');
        $('#park-data').slideUp("slow");
        $('.park').removeClass('active-bank');
    });
    $('.school').click(function () {
        $('#school-data').slideDown("slow");
        $('.school').addClass('active-bank');
        $('#bank-data').slideUp("slow");
        $('.bank').removeClass('active-bank');
        $('#hospital-data').slideUp("slow");
        $('.hospital').removeClass('active-bank');
        $('#park-data').slideUp("slow");
        $('.park').removeClass('active-bank');
    });
    $('.park').click(function () {
        $('#park-data').slideDown("slow");
        $('.park').addClass('active-bank');
        $('#bank-data').slideUp("slow");
        $('.bank').removeClass('active-bank');
        $('#hospital-data').slideUp("slow");
        $('.hospital').removeClass('active-bank');
        $('#school-data').slideUp("slow");
        $('.school').removeClass('active-bank');
    });

    //Go out
    $('.rest').click(function () {
        $('#rest-data').slideDown("slow");
        $('.rest').addClass('active-bank');
        $('#movie-data').slideUp("slow");
        $('.movie').removeClass('active-bank');
        $('#bar-data').slideUp("slow");
        $('.bar').removeClass('active-bank');
    });
    $('.movie').click(function () {
        $('#movie-data').slideDown("slow");
        $('.movie').addClass('active-bank');
        $('#rest-data').slideUp("slow");
        $('.rest').removeClass('active-bank');
        $('#bar-data').slideUp("slow");
        $('.bar').removeClass('active-bank');
    });
    $('.bar').click(function () {
        $('#bar-data').slideDown("slow");
        $('.bar').addClass('active-bank');
        $('#rest-data').slideUp("slow");
        $('.rest').removeClass('active-bank');
        $('#movie-data').slideUp("slow");
        $('.movie').removeClass('active-bank');
    });

    //Utilities
    $('.store').click(function () {
        $('#store-data').slideDown("slow");
        $('.store').addClass('active-bank');
        $('#pharm-data').slideUp("slow");
        $('.pharm').removeClass('active-bank');
        $('#mall-data').slideUp("slow");
        $('.mall').removeClass('active-bank');
    });
    $('.pharm').click(function () {
        $('#pharm-data').slideDown("slow");
        $('.pharm').addClass('active-bank');
        $('#store-data').slideUp("slow");
        $('.store').removeClass('active-bank');
        $('#mall-data').slideUp("slow");
        $('.mall').removeClass('active-bank');
    });
    $('.mall').click(function () {
        $('#mall-data').slideDown("slow");
        $('.mall').addClass('active-bank');
        $('#store-data').slideUp("slow");
        $('.store').removeClass('active-bank');
        $('#pharm-data').slideUp("slow");
        $('.pharm').removeClass('active-bank');
    });

    //prop-info slide - mobile
    if (windowWidth < 1024) {
        $('.property-item').click(function () {
            $('.prop-info').css('display', 'block');
            $('.prop-info').css('right', '0%');
            $('.prop-info').fadeIn();
            $('.close-info').fadeIn();
        });
        $('.close-info').click(function () {
            $('.prop-info').css('right', '0%');
            $('.prop-info').fadeOut();
            $('.close-info').fadeOut();
        });
    };

    //counter

    $('.up').on('click', function () {
        $('.input-quantity').val(parseInt($('.input-quantity').val()) + 1);
    });

    $('.down').on('click', function () {
        $('.input-quantity').val(parseInt($('.input-quantity').val()) - 1);
    });

    $('.inc').on('click', function () {
        $('.input-quantity1').val(parseInt($('.input-quantity1').val()) + 1);
    });

    $('.dec').on('click', function () {
        $('.input-quantity1').val(parseInt($('.input-quantity1').val()) - 1);
    });

    //social-tabs

    $('#fb-data').fadeIn();
    $('#tab-fb').addClass('selected-fb');

    $('#tab-fb').click(function () {
        $('#fb-data').fadeIn();
        $('#tab-fb').addClass('selected-fb');
        $('#tweet-data').fadeOut();
        $('#tab-tweet').removeClass('selected-tweet');
    });

    $('#tab-tweet').click(function () {
        $('#tweet-data').fadeIn();
        $('#tab-tweet').addClass('selected-tweet');
        $('#fb-data').fadeOut();
        $('#tab-fb').removeClass('selected-fb');
    });

    //property-list
    $('#property-list').fadeIn();
    $('#prop-list').addClass('tab-active');

    $('#prop-list').click(function () {
        $('#property-list').fadeIn();
        $('#prop-list').addClass('tab-active');
        $('#short-prop').removeClass('tab-active');
        $('#shortlisted-list').fadeOut();
    });

    $('#short-prop').click(function () {
        $('#shortlisted-list').fadeIn();
        $('#short-prop').addClass('tab-active');
        $('#prop-list').removeClass('tab-active');
        $('#property-list').fadeOut();
    });

    //Negotiation
    $('.gp1').click(function () {
        $('.edit').attr('contenteditable', 'true');
        $('.e1').focus();
    });
    $('.gp2').click(function () {
        $('.edit').attr('contenteditable', 'true');
        $('.e2').focus();
    });
    $('.gp3').click(function () {
        $('.edit').attr('contenteditable', 'true');
        $('.e3').focus();
    });
    $('.gp4').click(function () {
        $('.edit').attr('contenteditable', 'true');
        $('.e4').focus();
    });
    $('.gp5').click(function () {
        $('.edit').attr('contenteditable', 'true');
        $('.e5').focus();
    });
    $('.gp6').click(function () {
        $('.edit').attr('contenteditable', 'true');
        $('.e6').focus();
    });
    $('.gp7').click(function () {
        $('.edit').attr('contenteditable', 'true');
        $('.e7').focus();
    });

    $('.gb1').click(function () {
        $('.edit').attr('contenteditable', 'true');
        $('.b1').focus();
    });
    $('.gb2').click(function () {
        $('.edit').attr('contenteditable', 'true');
        $('.b2').focus();
    });
    $('.gb3').click(function () {
        $('.edit').attr('contenteditable', 'true');
        $('.b3').focus();
    });
    $('.gb4').click(function () {
        $('.edit').attr('contenteditable', 'true');
        $('.b4').focus();
    });
    $('.gb5').click(function () {
        $('.edit').attr('contenteditable', 'true');
        $('.b5').focus();
    });
    $('.gb6').click(function () {
        $('.edit').attr('contenteditable', 'true');
        $('.b6').focus();
    });
    $('.gb7').click(function () {
        $('.edit').attr('contenteditable', 'true');
        $('.b7').focus();
    });

    //Desktop sell buy
    $('.buy').slideDown();
    $('#buy-tabs').addClass('tab-active');
    //buy
    $('#buy-tabs').click(function () {
        $('.buy').slideDown();
        $('#buy-tabs').addClass('tab-active');
        $('.sell').slideUp();
        $('#sell-tabs').removeClass('tab-active');
        $('.sell_gp').css('display', 'none');
        $('.buy_gp').css('display', 'block');
    });

    //sell
    $('#sell-tabs').click(function () {
        $('.sell').slideDown();
        $('#sell-tabs').addClass('tab-active');
        $('.buy').slideUp();
        $('#buy-tabs').removeClass('tab-active');
        $('.sell_gp').css('display', 'block');
        $('.buy_gp').css('display', 'none');
    });

   //buy page

   $('.buy-links').slideDown();
    $('#buy-tab').addClass('tab-active');

    $('#buy-tab').click(function () {
        $('.buy-links').slideDown();
        $('#buy-tab').addClass('tab-active');
        $('.rent-links').slideUp();
        $('#rent-tab').removeClass('tab-active');
    });

    $('#rent-tab').click(function () {
        $('.rent-links').slideDown();
        $('#rent-tab').addClass('tab-active');
        $('.buy-links').slideUp();
        $('#buy-tab').removeClass('tab-active');
    });

    //Buy sell tabs
    $('.desktop-buy').fadeIn();
    $('#desk-buy').addClass('tab-active');
    //buy
    $('#desk-buy').click(function () {
        $('.desktop-buy').fadeIn();
        $('#desk-buy').addClass('tab-active');
        $('.desktop-sell').fadeOut();
        $('#desk-sell').removeClass('tab-active');
        $('.sell_gp').css('display', 'none');
        $('.buy_gp').css('display', 'block');
    });

    //$('.mobile-action a li').click(function () {
    //    $('.buy').slideUp();
    //});

    //sell
    $('#desk-sell').click(function () {
        $('.desktop-sell').fadeIn();
        $('#desk-sell').addClass('tab-active');
        $('.desktop-buy').fadeOut();
        $('#desk-buy').removeClass('tab-active');
        $('.sell_gp').css('display', 'block');
        $('.buy_gp').css('display', 'none');
        $('#book').css('display', 'none');
    });


    $(".desktop-sell #drop1").click(function () {
        $('.ul-drop1').slideToggle();
    });
    $(".desktop-sell #drop2").click(function () {
        $('.ul-drop2').slideToggle();
    });

    $(".sell #drop1").click(function () {
        $('.ul-drop1').slideToggle();
    });
    $(".sell #drop2").click(function () {
        $('.ul-drop2').slideToggle();
    });

    //search_filters
    $('#more').click(function () {
        $('.extra-filters').fadeIn('slow');
        $('.imp-filters').fadeOut('slow');
    });
    $('#back').click(function () {
        $('.imp-filters').fadeIn('slow');
        $('.extra-filters').fadeOut('slow');
    });

    //buy table
    $('#buy-link a li').click(function () {
        link_id = this.id;
        $('.buy-prop-data').fadeIn();
        $('.rent-prop-data').fadeOut();
        $('#' + link_id).addClass('selected-nav');
        $('#rent-link a li').removeClass('selected-nav');
        $('li:not(#' + link_id + ')').removeClass('selected-nav');
    });
    $('#rent-link a li').click(function () {
        //alert('hello');

        link_id = this.id;
        $('.rent-prop-data').fadeIn();
        $('.buy-prop-data').fadeOut();
        $('#buy-link a li').removeClass('selected-nav');
        $('#' + link_id).addClass('selected-nav');
        $('li:not(#' + link_id + ')').removeClass('selected-nav');
    });

    //$('.buy-link a li').click(function () {
    //    alert("hiii");
    //});


    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn();
        } else {
            $('.back-to-top').fadeOut();
        }
    });

    $('#bhk').click(function () {
        $('.bhk-down').slideDown();
    });
    $('#type').click(function () {
        $('.prop-down').slideDown();
    });
    $('#list').click(function () {
        $('.list-down').slideDown();
    });
    $('#age').click(function () {
        $('.age-down').slideDown();
    });
    $('#date-add').click(function () {
        $('.date-down').slideDown();
    });
    $('#bath').click(function () {
        $('.bath-down').slideDown();
    });
    $('#type').click(function () {
        $('.type-down').slideDown();
    });

    //Click event to scroll to top
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });
    //$('.mobile-action a li').click(function () {
    //    $('.sell').slideUp();
    //});

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
    