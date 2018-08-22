;(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var slider = context.find('#banner_slider');
        if (slider.length) {
            slider.owlCarousel({
                direction: 'ltr',
                items: 1,
                singleItem : true,
                slideSpeed: 400,
                autoPlay: '300000',
                stopOnHover: true,
                pagination: false,
                navigation: true,
                navigationText: ['Назад', 'Вперед']
            });
        }
    });
}(Tygh, Tygh.$));