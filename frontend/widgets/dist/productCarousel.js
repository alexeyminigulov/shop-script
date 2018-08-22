;(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var elm = context.find('#scroll_list_101');

        $('.ty-float-left:contains(.ty-scroller-list),.ty-float-right:contains(.ty-scroller-list)').css('width', '100%');

        var item = 5,
            // default setting of carousel
            itemsDesktop = 4,
            itemsDesktopSmall = 3;
        itemsTablet = 2;

        if (item > 3) {
            itemsDesktop = item;
            itemsDesktopSmall = item - 1;
            itemsTablet = item - 2;
        } else if (item == 1) {
            itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
        } else {
            itemsDesktop = item;
            itemsDesktopSmall = itemsTablet = item - 1;
        }

        var desktop = [1199, itemsDesktop],
            desktopSmall = [979, itemsDesktopSmall],
            tablet = [768, itemsTablet],
            mobile = [479, 1];

        if (elm.length) {
            elm.owlCarousel({
                direction: 'ltr',
                items: item,
                itemsDesktop: desktop,
                itemsDesktopSmall: desktopSmall,
                itemsTablet: tablet,
                itemsMobile: mobile,
                scrollPerPage: true,
                autoPlay: false,
                lazyLoad: true,
                slideSpeed: 400,
                stopOnHover: true,
                navigation: true,
                navigationText: ['<i class="uni-left-sight"></i>', '<i class="uni-right-sight"></i>'],
                pagination: false,
            });

        }
    });
})(Tygh, Tygh.$);





;(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var elm = context.find('#scroll_list_100');

        $('.ty-float-left:contains(.ty-scroller-list),.ty-float-right:contains(.ty-scroller-list)').css('width', '100%');

        var item = 5,
            // default setting of carousel
            itemsDesktop = 4,
            itemsDesktopSmall = 3;
        itemsTablet = 2;

        if (item > 3) {
            itemsDesktop = item;
            itemsDesktopSmall = item - 1;
            itemsTablet = item - 2;
        } else if (item == 1) {
            itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
        } else {
            itemsDesktop = item;
            itemsDesktopSmall = itemsTablet = item - 1;
        }

        var desktop = [1199, itemsDesktop],
            desktopSmall = [979, itemsDesktopSmall],
            tablet = [768, itemsTablet],
            mobile = [479, 1];


        if (elm.length) {
            elm.owlCarousel({
                direction: 'ltr',
                items: item,
                itemsDesktop: desktop,
                itemsDesktopSmall: desktopSmall,
                itemsTablet: tablet,
                itemsMobile: mobile,
                scrollPerPage: true,
                autoPlay: false,
                lazyLoad: true,
                slideSpeed: 400,
                stopOnHover: true,
                navigation: true,
                navigationText: ['<i class="uni-left-sight"></i>', '<i class="uni-right-sight"></i>'],
                pagination: false,
            });

        }
    });
})(Tygh, Tygh.$);





(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var elm = context.find('#scroll_list_102');

        $('.ty-float-left:contains(.ty-scroller-list),.ty-float-right:contains(.ty-scroller-list)').css('width', '100%');

        var item = 5,
            // default setting of carousel
            itemsDesktop = 4,
            itemsDesktopSmall = 3;
        itemsTablet = 2;

        if (item > 3) {
            itemsDesktop = item;
            itemsDesktopSmall = item - 1;
            itemsTablet = item - 2;
        } else if (item == 1) {
            itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
        } else {
            itemsDesktop = item;
            itemsDesktopSmall = itemsTablet = item - 1;
        }

        var desktop = [1199, itemsDesktop],
            desktopSmall = [979, itemsDesktopSmall],
            tablet = [768, itemsTablet],
            mobile = [479, 1];


        if (elm.length) {
            elm.owlCarousel({
                direction: 'ltr',
                items: item,
                itemsDesktop: desktop,
                itemsDesktopSmall: desktopSmall,
                itemsTablet: tablet,
                itemsMobile: mobile,
                scrollPerPage: true,
                autoPlay: false,
                lazyLoad: true,
                slideSpeed: 400,
                stopOnHover: true,
                navigation: true,
                navigationText: ['<i class="uni-left-sight"></i>', '<i class="uni-right-sight"></i>'],
                pagination: false,
            });

        }
    });
})(Tygh, Tygh.$);