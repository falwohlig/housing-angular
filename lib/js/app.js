(function ($) {
   
    $('.priceSlider').slider({
        range: true,
        min: 0,
        max: 30000000,
        values: [500000, 1500000],
        step: 10000,
        slide: function (event, ui) {
            $('.priceSlider .sliderTooltip .stLabel').html(
                'Rs. ' + ui.values[0].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") +
                ' <span class="fa fa-arrows-h"></span> ' +
                'Rs. ' + ui.values[1].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")
            );
            var priceSliderRangeLeft = parseInt($('.priceSlider .ui-slider-range').css('left'));
            var priceSliderRangeWidth = $('.priceSlider .ui-slider-range').width();
            var priceSliderLeft = priceSliderRangeLeft + (priceSliderRangeWidth / 2) - ($('.priceSlider .sliderTooltip').width() / 2);
            $('.priceSlider .sliderTooltip').css('left', priceSliderLeft);
        }
    });
    $('.priceSlider .sliderTooltip .stLabel').html(
        '$' + $('.priceSlider').slider('values', 0).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") +
        ' <span class="fa fa-arrows-h"></span> ' +
        '$' + $('.priceSlider').slider('values', 1).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")
    );
    var priceSliderRangeLeft = parseInt($('.priceSlider .ui-slider-range').css('left'));
    var priceSliderRangeWidth = $('.priceSlider .ui-slider-range').width();
    var priceSliderLeft = priceSliderRangeLeft + (priceSliderRangeWidth / 2) - ($('.priceSlider .sliderTooltip').width() / 2);
    $('.priceSlider .sliderTooltip').css('left', priceSliderLeft);

    $('.areaSlider').slider({
        range: true,
        min: 0,
        max: 20000,
        values: [5000, 10000],
        step: 10,
        slide: function (event, ui) {
            $('.areaSlider .sliderTooltip .stLabel').html(
                ui.values[0].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' Sq Ft' +
                ' <span class="fa fa-arrows-h"></span> ' +
                ui.values[1].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' Sq Ft'
            );
            var areaSliderRangeLeft = parseInt($('.areaSlider .ui-slider-range').css('left'));
            var areaSliderRangeWidth = $('.areaSlider .ui-slider-range').width();
            var areaSliderLeft = areaSliderRangeLeft + (areaSliderRangeWidth / 2) - ($('.areaSlider .sliderTooltip').width() / 2);
            $('.areaSlider .sliderTooltip').css('left', areaSliderLeft);
        }
    });
    $('.areaSlider .sliderTooltip .stLabel').html(
        $('.areaSlider').slider('values', 0).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' Sq Ft' +
        ' <span class="fa fa-arrows-h"></span> ' +
        $('.areaSlider').slider('values', 1).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' Sq Ft'
    );
    var areaSliderRangeLeft = parseInt($('.areaSlider .ui-slider-range').css('left'));
    var areaSliderRangeWidth = $('.areaSlider .ui-slider-range').width();
    var areaSliderLeft = areaSliderRangeLeft + (areaSliderRangeWidth / 2) - ($('.areaSlider .sliderTooltip').width() / 2);
    $('.areaSlider .sliderTooltip').css('left', areaSliderLeft);

    $('.areaSlider1').slider({
        range: true,
        min: 0,
        max: 200111,
        values: [5000, 10000],
        step: 10,
        slide: function (event, ui) {
            $('.areaSlider1 .sliderTooltip .stLabel').html(
                ui.values[0].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' Sq Ft' +
                ' <span class="fa fa-arrows-h"></span> ' +
                ui.values[1].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' Sq Ft'
            );
            var areaSliderRangeLeft = parseInt($('.areaSlider1 .ui-slider-range').css('left'));
            var areaSliderRangeWidth = $('.areaSlider1 .ui-slider-range').width();
            var areaSliderLeft = areaSliderRangeLeft + (areaSliderRangeWidth / 2) - ($('.areaSlider1 .sliderTooltip').width() / 2);
            $('.areaSlider1 .sliderTooltip').css('left', areaSliderLeft);
        }
    });
    $('.areaSlider1 .sliderTooltip .stLabel').html(
        $('.areaSlider1').slider('values', 0).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' Sq Ft' +
        ' <span class="fa fa-arrows-h"></span> ' +
        $('.areaSlider1').slider('values', 1).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' Sq Ft'
    );
    var areaSliderRangeLeft = parseInt($('.areaSlider1 .ui-slider-range').css('left'));
    var areaSliderRangeWidth = $('.areaSlider1 .ui-slider-range').width();
    var areaSliderLeft = areaSliderRangeLeft + (areaSliderRangeWidth / 2) - ($('.areaSlider1 .sliderTooltip').width() / 2);
    $('.areaSlider1 .sliderTooltip').css('left', areaSliderLeft);

})(jQuery);