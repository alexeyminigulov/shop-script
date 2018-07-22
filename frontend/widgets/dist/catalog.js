(function ($) {


    function fn_abt_timer_menu (){
        var timer, timer2, opened_menu = null, opened_menu2 = null, second_lvl;
        $('.first-lvl').hover(function () {
            var elem = $(this).children('.ty-menu__submenu');
            clearTimeout(timer);
            timer = setTimeout(function () {
                if (opened_menu !== null) {
                    opened_menu.hide();
                    opened_menu = null;
                }
                opened_menu = elem.show();
            }, 200);
        });
        $('.hover-zone').mouseleave(function () {
            clearTimeout(timer);
            if (opened_menu !== null) {
                opened_menu.hide();
                opened_menu = null;
            }
        });

        $('.second-lvl').hover(function () {
            second_lvl = $(this);
            var elem = $(this).children('.ty-menu__submenu');
            clearTimeout(timer2);
            timer2 = setTimeout(function () {
                if (opened_menu2 !== null) {
                    second_lvl.removeClass('hover2');
                    opened_menu2 = null;
                }
                $('.second-lvl').removeClass('hover2');
                second_lvl.addClass('hover2');
            }, 200);
        });
        $('.hover-zone2').mouseleave(function () {
            clearTimeout(timer2);
            $('.second-lvl').removeClass('hover2');
            if (opened_menu2 !== null) {
                opened_menu2.hide();
                $('.second-lvl').removeClass('hover2');
                opened_menu2 = null;
            }
        });
    }



    (function(_, $) {
        $(document).ready(function () {
            var abtam = $('div.abtam');
            if (abtam.length){
                var ids = [];
                abtam.each(function(){
                    ids.push($(this).attr('id'));
                });

                $.ceAjax('request', fn_url('abt__am.load'), {
                    result_ids: ids.join(','),
                    method: 'post',
                    hidden: true,
                    callback: function(data) {
                        fn_abt_timer_menu();
                        $(document).on('click', 'li.second-lvl > a.cm-responsive-menu-toggle', function () {
                            $(this).toggleClass('ty-menu__item-toggle-active');
                            $('.icon-down-open', this).toggleClass('icon-up-open');
                            $(this).parent().find('.cm-responsive-menu-submenu').first().toggleClass('ty-menu__items-show');
                        });
                    }
                });
            }
        });
    }(Tygh, Tygh.$));






    (function(_, $) {
        $(document).ready(function () {
            var h1 =  160;
            var h2 =  300;

            var m = $('.hpo-menu');
            var b = $('.hpo-banner');
            if (m.length){
                var m_offset = m.offset();
                var m_height = m.find('.ty-dropdown-box__title').outerHeight(true) + m.find('.ty-dropdown-box__content').outerHeight(true);
                if (parseInt(b.parent().outerHeight(true)) > parseInt(m_height)){
                    m_height = parseInt(b.parent().outerHeight(true));
                }

                var m_h = parseInt(m_offset.top) + parseInt(m_height);

                h1 = m_h;
                h2 = m_h + m.find('.ty-dropdown-box__title').outerHeight(true);
            }

            $(window).scroll(function () {
                var scroll = $(window).scrollTop();

                if (document.documentElement.clientWidth > 767) {
                    if (scroll >= h1) {
                        $("body").addClass("fixed-top");
                    } else {
                        $("body").removeClass("fixed-top");
                    }
                    if (scroll >= h2) {
                        $(".fixed-top").addClass("show");
                    } else {
                        $(".fixed-top").removeClass("show");
                    }



                    if (m.length){
                        if (scroll >= m_h) {
                            m.removeClass('open-menu');
                            b.removeClass('open-menu-hpage-banners');
                        } else {
                            m.addClass('open-menu');
                            b.addClass('open-menu-hpage-banners');
                        }
                    }


                } else {
                    if (scroll >= 88) {
                        $("body").addClass("fixed-top show");
                    } else {
                        $("body").removeClass("fixed-top show");
                    }
                }

                if (document.documentElement.clientWidth < 768) {
                    var wh = $(window).height() - 47;
                    var awh = $(window).height();
                    if (scroll >= 160) {
                        $(".cat-menu-vertical .ty-dropdown-box__content").css('height', +wh + 'px');
                        $(".cat-menu-horizontal > .ty-menu__items.open").css('height', +awh + 'px');
                    } else {
                        $(".cat-menu-vertical .ty-dropdown-box__content").css('height', 'inherit');
                        $(".cat-menu-horizontal > .ty-menu__items").css('height', 'inherit');
                    }
                }
            });
        });
    }(Tygh, Tygh.$));




    if (document.documentElement.clientWidth >= 768) {

        if ($('.cat-menu-vertical .ty-dropdown-box__title').hasClass('open')) {
            $('.cat-menu-vertical .ty-menu__items').removeClass('hover-zone');
        } else {
            $('.cat-menu-vertical .ty-menu__items').addClass('hover-zone');
            $('.hover-zone').hover(
                function () {
                    $('body').addClass('shadow')
                },
                function () {
                    $('body').removeClass('shadow')
                }
            );
        }

        (function (_, $) {
            $(document).ready(function () {

                if ($('div.abtam').length == 0){
                    fn_abt_timer_menu();
                }
            });
        })(Tygh, Tygh.$)
    }

})(window.jQuery);