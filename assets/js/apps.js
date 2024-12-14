/* Validation form */
validateForm('validation-newsletter');
validateForm('validation-cart');
validateForm('validation-user');
validateForm('validation-contact');

/* Lazys */
BLUEWEB_FRAMEWORK.Lazys = function () {
    if (isExist($('.lazy'))) {
        var lazyLoadInstance = new LazyLoad({
            elements_selector: '.lazy'
        });
    }
};

/* Load name input file */
BLUEWEB_FRAMEWORK.loadNameInputFile = function () {
    if (isExist($('.custom-file input[type=file]'))) {
        $('body').on('change', '.custom-file input[type=file]', function () {
            var fileName = $(this).val();
            fileName = fileName.substr(fileName.lastIndexOf('\\') + 1, fileName.length);
            $(this).siblings('label').html(fileName);
        });
    }
};

/* Back to top */
BLUEWEB_FRAMEWORK.GoTop = function () {
    $(window).scroll(function () {
        if (!$('.scrollToTop').length)
            $('body').append('<div class="scrollToTop"><img src="' + GOTOP + '" alt="Go Top"/></div>');
        if ($(this).scrollTop() > 100) $('.scrollToTop').fadeIn();
        else $('.scrollToTop').fadeOut();
    });

    $('body').on('click', '.scrollToTop', function () {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });
};

/* Alt images */
BLUEWEB_FRAMEWORK.AltImg = function () {
    $('img').each(function (index, element) {
        if (!$(this).attr('alt') || $(this).attr('alt') == '') {
            $(this).attr('alt', WEBSITE_NAME);
        }
    });
};

/* Menu */
BLUEWEB_FRAMEWORK.Menu = function () {
    /* Menu remove empty ul */
    if (isExist($('.menu'))) {
        $('.menu ul li a').each(function () {
            $this = $(this);

            if (!isExist($this.next('ul').find('li'))) {
                $this.next('ul').remove();
                $this.removeClass('has-child');
            }
        });
    }

    /* Menu fixed */
    $(window).scroll(function () {
        var cach_top = $(window).scrollTop();
        var heaigt_header = $(".heade").height() + $(".w-menu").height();

        if (cach_top >= heaigt_header) {
            if (!$(".w-menu").hasClass("fix_head animate__animated animate__fadeIn")) {
                $(".w-menu").addClass("fix_head animate__animated animate__fadeIn");
            }
        } else {
            $(".w-menu").removeClass("fix_head animate__animated animate__fadeIn");
        }
    });
    $(window).scroll(function () {
        var cach_top = $(window).scrollTop();
        var heaigt_header = $(".wrap_scrolldmuc").height() + $(".header_mobile").height();

        if (cach_top >= heaigt_header) {
            if (!$(".header_mobile").hasClass("fix_head")) {
                $(".header_mobile").addClass("fix_head");
            }
        } else {
            $(".header_mobile").removeClass("fix_head");
        }
    });

    /* Mmenu */
    // if (isExist($('nav#menu'))) {
    // 	$('nav#menu').mmenu({
    // 		extensions: ['border-full', 'position-left', 'position-front']
    // 	});
    // }
};

/* Tools */
BLUEWEB_FRAMEWORK.Tools = function () {
    if (isExist($('.toolbar'))) {
        $('.footer').css({ marginBottom: $('.toolbar').innerHeight() });
    }
};

/* Popup */
BLUEWEB_FRAMEWORK.Popup = function () {
    if (isExist($('#popup'))) {
        $('#popup').modal('show');
    }
};

/* Wow */
BLUEWEB_FRAMEWORK.Wows = function () {
    new WOW().init();
};

/* Pagings */
BLUEWEB_FRAMEWORK.Pagings = function () {
    /* best seller product */
    if (isExist($('.paging-product'))) {
        loadPaging('api/product.php?perpage=8', '.paging-product');
    }
    //dự án
    if (isExist($('.show_padding'))) {
        $(".show_padding").each(function () {
            var list = $(this).data("list");
            var cat = $(this).data("cat");
            loadPaging("api/product.php?perpage=" + "6" + "&idList=" + list + "&idCat=" + cat, '.show_padding' + list);
        })
    }
    if (isExist($('.click_cat'))) {
        $(".click_cat p").click(function () {
            ($(this).parents('.click_cat').find("p").hasClass('choosed')) ? $(this).parents('.click_cat').find("p").removeClass('choosed') : '';
            $(this).addClass('choosed');
            var list = $(this).attr("data-list");
            var cat = $(this).attr("data-cat");
            $(".show_padding" + list).attr("data-list", list);
            $(".show_padding" + list).attr("data-cat", cat);
            loadPaging("api/product.php?perpage=" + "6" + "&idList=" + list + "&idCat=" + cat, '.show_padding' + list);
            return false;
        })
    }

};

/* Ticker scroll 
BLUEWEB_FRAMEWORK.TickerScroll = function () {
    if (isExist($('.news-scroll'))) {
        $('.news-scroll')
            .easyTicker({
                direction: 'up',
                easing: 'swing',
                speed: 'slow',
                interval: 3500,
                height: 'auto',
                visible: 3,
                mousePause: true,
                controls: {
                    up: '.news-control#up',
                    down: '.news-control#down'
                    // toggle: '.toggle',
                    // stopText: 'Stop'
                },
                callbacks: {
                    before: function (ul, li) {
                        // $(li).css('color', 'red');
                    },
                    after: function (ul, li) {}
                }
            })
            .data('easyTicker');
    }
};
*/

/* Photobox */
BLUEWEB_FRAMEWORK.Photobox = function () {
    if (isExist($('.album-gallery'))) {
        $('.album-gallery').photobox('a', { thumbs: true, loop: false });
    }
};

/* Comment */
BLUEWEB_FRAMEWORK.Comment = function () {
    if (isExist($('.comment-page'))) {
        $('.comment-page').comments({
            url: 'api/comment.php'
        });
    }
};

/* DatePicker */
BLUEWEB_FRAMEWORK.DatePicker = function () {
    if (isExist($('#birthday'))) {
        $('#birthday').datetimepicker({
            timepicker: false,
            format: 'd/m/Y',
            formatDate: 'd/m/Y',
            minDate: '01/01/1950',
            maxDate: TIMENOW
        });
    }
};

/* Search */
BLUEWEB_FRAMEWORK.Search = function () {
    if (isExist($(".icon-search"))) {
        $(".icon-search").click(function () {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
                $(".search-grid").stop(true, true).animate({ opacity: "0", width: "0px" }, 200);
            } else {
                $(this).addClass("active");
                $(".search-grid").stop(true, true).animate({ opacity: "1", width: "230px" }, 200);
            }
            document.getElementById($(this).next().find("input").attr("id")).focus();
            $(".icon-search i").toggleClass("bi bi-x-lg");
        });
    }
};

/* Videos */
BLUEWEB_FRAMEWORK.Videos = function () {
    Fancybox.bind("[data-fancybox]", {});
};

/* Owl Data */
BLUEWEB_FRAMEWORK.OwlData = function (obj) {
    if (!isExist(obj)) return false;
    var items = obj.attr('data-items');
    var rewind = Number(obj.attr('data-rewind')) ? true : false;
    var autoplay = Number(obj.attr('data-autoplay')) ? true : false;
    var center = Number(obj.attr('data-center')) ? true : false;
    var loop = Number(obj.attr('data-loop')) ? true : false;
    var lazyLoad = Number(obj.attr('data-lazyload')) ? true : false;
    var mouseDrag = Number(obj.attr('data-mousedrag')) ? true : false;
    var touchDrag = Number(obj.attr('data-touchdrag')) ? true : false;
    var animations = obj.attr('data-animations') || false;
    var smartSpeed = Number(obj.attr('data-smartspeed')) || 800;
    var autoplaySpeed = Number(obj.attr('data-autoplayspeed')) || 800;
    var autoplayTimeout = Number(obj.attr('data-autoplaytimeout')) || 5000;
    var dots = Number(obj.attr('data-dots')) ? true : false;
    var responsive = {};
    var responsiveClass = true;
    var responsiveRefreshRate = 200;
    var nav = Number(obj.attr('data-nav')) ? true : false;
    var navContainer = obj.attr('data-navcontainer') || false;
    var navTextTemp =
        "<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>";
    var navText = obj.attr('data-navtext');
    navText = nav && navContainer && (((navText === undefined || Number(navText)) && navTextTemp) || (isNaN(Number(navText)) && navText) || (Number(navText) === 0 && false));

    if (items) {
        items = items.split(',');

        if (items.length) {
            var itemsCount = items.length;

            for (var i = 0; i < itemsCount; i++) {
                var options = items[i].split('|'),
                    optionsCount = options.length,
                    responsiveKey;

                for (var j = 0; j < optionsCount; j++) {
                    const attr = options[j].indexOf(':') ? options[j].split(':') : options[j];

                    if (attr[0] === 'screen') {
                        responsiveKey = Number(attr[1]);
                    } else if (Number(responsiveKey) >= 0) {
                        responsive[responsiveKey] = {
                            ...responsive[responsiveKey],
                            [attr[0]]: (isNumeric(attr[1]) && Number(attr[1])) ?? attr[1]
                        };
                    }
                }
            }
        }
    }

    if (nav && navText) {
        navText = navText.indexOf('|') > 0 ? navText.split('|') : navText.split(':');
        navText = [navText[0], navText[1]];
    }

    obj.owlCarousel({
        rewind,
        autoplay,
        center,
        loop,
        lazyLoad,
        mouseDrag,
        touchDrag,
        smartSpeed,
        autoplaySpeed,
        autoplayTimeout,
        dots,
        nav,
        navText,
        navContainer: nav && navText && navContainer,
        responsiveClass,
        responsiveRefreshRate,
        responsive
    });

    if (autoplay) {
        obj.on('translate.owl.carousel', function (event) {
            obj.trigger('stop.owl.autoplay');
        });

        obj.on('translated.owl.carousel', function (event) {
            obj.trigger('play.owl.autoplay', [autoplayTimeout]);
        });
    }

    if (animations && isExist(obj.find('[owl-item-animation]'))) {
        var animation_now = '';
        var animation_count = 0;
        var animations_excuted = [];
        var animations_list = animations.indexOf(',') ? animations.split(',') : animations;

        obj.on('changed.owl.carousel', function (event) {
            $(this).find('.owl-item.active').find('[owl-item-animation]').removeClass(animation_now);
        });

        obj.on('translate.owl.carousel', function (event) {
            var item = event.item.index;

            if (Array.isArray(animations_list)) {
                var animation_trim = animations_list[animation_count].trim();

                if (!animations_excuted.includes(animation_trim)) {
                    animation_now = 'animate__animated ' + animation_trim;
                    animations_excuted.push(animation_trim);
                    animation_count++;
                }

                if (animations_excuted.length == animations_list.length) {
                    animation_count = 0;
                    animations_excuted = [];
                }
            } else {
                animation_now = 'animate__animated ' + animations_list.trim();
            }
            $(this).find('.owl-item').eq(item).find('[owl-item-animation]').addClass(animation_now);
        });
    }
};

/* Owl Page */
BLUEWEB_FRAMEWORK.OwlPage = function () {
    if (isExist($('.owl-page'))) {
        $('.owl-page').each(function () {
            BLUEWEB_FRAMEWORK.OwlData($(this));
        });
    }
};

/* Dom Change */
BLUEWEB_FRAMEWORK.DomChange = function () {
    /* Video Fotorama */
    $(document).ready(function () {
        // Chọn phần tử cần quan sát
        var targetNode = document.getElementById('video-fotorama');

        // Kiểm tra nếu phần tử tồn tại
        if (targetNode) {
            // Cấu hình observer để quan sát các thay đổi trong cây DOM
            var config = { childList: true, subtree: true };

            // Callback function sẽ được gọi khi các thay đổi xảy ra
            var callback = function (mutationsList, observer) {
                for (var mutation of mutationsList) {
                    if (mutation.type === 'childList') {
                        $('#fotorama-videos').fotorama();
                        // Dừng quan sát sau khi thực hiện callback
                        observer.disconnect();
                    }
                }
            };

            // Tạo một observer instance với callback function
            var observer = new MutationObserver(callback);

            // Bắt đầu quan sát mục tiêu với cấu hình đã xác định
            observer.observe(targetNode, config);
        } else {
            console.error('Phần tử với ID "video-fotorama" không tồn tại.');
        }
    });


    /* Video Select */
    // $('#video-select').one('DOMSubtreeModified', function () {
    //     $('.listvideos').change(function () {
    //         var id = $(this).val();
    //         $.ajax({
    //             url: 'api/video.php',
    //             type: 'POST',
    //             dataType: 'html',
    //             data: {
    //                 id: id
    //             },
    //             beforeSend: function () {
    //                 holdonOpen();
    //             },
    //             success: function (result) {
    //                 $('.video-main').html(result);
    //                 holdonClose();
    //             }
    //         });
    //     });
    // }); search

    /* Chat Facebook */
    $('#messages-facebook').one('DOMSubtreeModified', function () {
        $('.js-facebook-messenger-box').on('click', function () {
            $('.js-facebook-messenger-box, .js-facebook-messenger-container').toggleClass('open'),
                $('.js-facebook-messenger-tooltip').length && $('.js-facebook-messenger-tooltip').toggle();
        }),
            $('.js-facebook-messenger-box').hasClass('cfm') &&
            setTimeout(function () {
                $('.js-facebook-messenger-box').addClass('rubberBand animated');
            }, 3500),
            $('.js-facebook-messenger-tooltip').length &&
            ($('.js-facebook-messenger-tooltip').hasClass('fixed') ?
                $('.js-facebook-messenger-tooltip').show() :
                $('.js-facebook-messenger-box').on('hover', function () {
                    $('.js-facebook-messenger-tooltip').show();
                }),
                $('.js-facebook-messenger-close-tooltip').on('click', function () {
                    $('.js-facebook-messenger-tooltip').addClass('closed');
                }));
        $('.search_open').click(function () {
            $('.search_box_hide').toggleClass('opening');
        });
    });
};

/* Quick View */
BLUEWEB_FRAMEWORK.QuickView = function (obj) {
    $("body").on("click", ".product-quick-view", function () {
        var slug = $(this).attr("data-slug");

        if (slug) {
            $.ajax({
                type: "POST",
                url: slug + "?quickview=1",
                dataType: "html",
                beforeSend: function () {
                    holdonOpen();
                },
                success: function (result) {
                    holdonClose();
                    $("#popup-quickview").find(".modal-body").html(result);
                    $("#popup-quickview").modal("show");
                    // MagicZoom.refresh("Zoom-quickview");
                    // BLUEWEB_FRAMEWORK.OwlData($('.owl-pro-detail'));
                    MagicZoom.refresh("Zoom-1");
                    BLUEWEB_FRAMEWORK.OwlData($(".owl-pro-detail"));
                    BLUEWEB_FRAMEWORK.Lazys();
                },
            });
        }
    });
};

/* Cart */
BLUEWEB_FRAMEWORK.Cart = function () {
    /* Add */
    if (isExist($('.select-city-cart'))) {
        fetch(CONFIG_BASE + "assets/jsons/city-group.json", { headers: { "Content-Type": "application/json" } }).then(response => {
            return response.json();
        }).then(function (data) {
            $.each(data.citysCentral, function (index, val) {
                $('.select-city-cart').append(`<option value="` + val.id + `">` + val.name + `</option>`);
            });
        });
    }
    $('body').on('click', '.addcart', function () {
        $this = $(this);
        $parents = $this.parents('.right-pro-detail');
        var id = $this.data('id');
        var action = $this.data('action');
        var quantity = $parents.find('.quantity-pro-detail').find('.qty-pro').val();
        quantity = quantity ? quantity : 1;
        var color = $parents.find('.color-block-pro-detail').find('.color-pro-detail input:checked').val();
        color = color ? color : 0;
        var size = $parents.find('.size-block-pro-detail').find('.size-pro-detail input:checked').val();
        size = size ? size : 0;

        if (id) {
            $.ajax({
                url: 'api/cart.php',
                type: 'POST',
                dataType: 'json',
                async: false,
                data: {
                    cmd: 'add-cart',
                    id: id,
                    color: color,
                    size: size,
                    quantity: quantity
                },
                beforeSend: function () {
                    holdonOpen();
                },
                success: function (result) {
                    if (action == 'addnow') {
                        $('.count-cart').html(result.max);
                        $.ajax({
                            url: 'api/cart.php',
                            type: 'POST',
                            dataType: 'html',
                            async: false,
                            data: {
                                cmd: 'popup-cart'
                            },
                            success: function (result) {
                                $('#popup-cart .modal-body').html(result);
                                $('#popup-cart').modal('show');
                                BLUEWEB_FRAMEWORK.Lazys();
                                holdonClose();
                            }
                        });
                    } else if (action == 'buynow') {
                        window.location = CONFIG_BASE + 'gio-hang';
                    }
                }
            });
        }
    });

    /* Delete */
    $('body').on('click', '.del-procart', function () {
        confirmDialog('delete-procart', LANG['delete_product_from_cart'], $(this));
    });

    /* Counter */
    $('body').on('click', '.counter-procart', function () {
        var $button = $(this);
        var quantity = 1;
        var input = $button.parent().find('input');
        var id = input.data('pid');
        var code = input.data('code');
        var oldValue = $button.parent().find('input').val();
        if ($button.text() == '+') quantity = parseFloat(oldValue) + 1;
        else if (oldValue > 1) quantity = parseFloat(oldValue) - 1;
        $button.parent().find('input').val(quantity);
        updateCart(id, code, quantity);
    });

    /* Quantity */
    $('body').on('change', 'input.quantity-procart', function () {
        var quantity = $(this).val() < 1 ? 1 : $(this).val();
        $(this).val(quantity);
        var id = $(this).data('pid');
        var code = $(this).data('code');
        updateCart(id, code, quantity);
    });

    /* City */
    if (isExist($('.select-city-cart'))) {
        $('.select-city-cart').change(function () {
            var id = $(this).val();
            loadDistrict(id);
            loadShip();
        });
    }

    /* District */
    if (isExist($('.select-district-cart'))) {
        $('.select-district-cart').change(function () {
            var id = $(this).val();
            var city = $('.select-city-cart').val();
            loadWard(city, id);
            loadShip();
        });
    }

    /* Ward */
    if (isExist($('.select-ward-cart'))) {
        $('.select-ward-cart').change(function () {
            var id = $(this).val();
            loadShip(id);
        });
    }

    /* Payments */
    if (isExist($('.payments-label'))) {
        $('.payments-label').click(function () {
            var payments = $(this).data('payments');
            $('.payments-cart .payments-label, .payments-info').removeClass('active');
            $(this).addClass('active');
            $('.payments-info-' + payments).addClass('active');
        });
    }

    /* Colors */
    if (isExist($('.color-pro-detail'))) {
        $('body').on('click', '.color-pro-detail input', function (event) {
            $this = $(this).parents('label.color-pro-detail');
            $parents = $this.parents('.attr-pro-detail');
            $parents_detail = $this.parents('.grid-pro-detail');
            $parents.find('.color-block-pro-detail').find('.color-pro-detail').removeClass('active');
            $parents.find('.color-block-pro-detail').find('.color-pro-detail input').prop('checked', false);
            $this.addClass('active');
            $this.find('input').prop('checked', true);
            var id_color = $parents.find('.color-block-pro-detail').find('.color-pro-detail input:checked').val();
            var id_pro = $this.data('idproduct');

            $.ajax({
                url: 'api/color.php',
                type: 'POST',
                dataType: 'html',
                data: {
                    id_color: id_color,
                    id_pro: id_pro
                },
                beforeSend: function () {
                    holdonOpen();
                },
                success: function (result) {
                    if (result) {
                        $parents_detail.find('.left-pro-detail').html(result);
                        MagicZoom.refresh('Zoom-1');
                        BLUEWEB_FRAMEWORK.OwlData($('.owl-pro-detail'));
                        BLUEWEB_FRAMEWORK.Lazys();
                    }
                    holdonClose();
                }
            });
        });
    }

    /* Sizes */
    $('body').on('click', '.size-pro-detail input', function (event) {
        $this = $(this).parent();
        $parents = $this.parents('.attr-pro-detail');
        console.log($(this));
        $parents.find('.size-block-pro-detail').find('.size-pro-detail').removeClass('active');
        $parents.find('.size-block-pro-detail').find('.size-pro-detail input').prop('checked', false);
        $this.addClass('active');
        $this.find('input').prop('checked', true);
    });

    /* Quantity detail page */
    if (isExist($('.quantity-pro-detail span'))) {
        $('.quantity-pro-detail span').click(function () {
            var $button = $(this);
            var oldValue = $button.parent().find('input').val();
            if ($button.text() == '+') {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                if (oldValue > 1) var newVal = parseFloat(oldValue) - 1;
                else var newVal = 1;
            }
            $button.parent().find('input').val(newVal);
        });
    }
};

/* Slick */
BLUEWEB_FRAMEWORK.SlickPage = function () {
    //tại sao
    if (isExist($(".slick_why"))) {
        $(".slick_why").slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 3000,
            focusOnSelect: false,
            arrows: false,
            vertical: true,
            verticalSwiping: true,
            centerMode: false,
            dots: false,
            infinite: false,
        });
    }
    // quy trình
    $('.slick_top').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        dots: false,
        autoplay: false,
        speed: 600,
        asNavFor: '.slick_bot',
        infinite: true,
        centerMode: false,
        focusOnSelect: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                }
            },

        ]
    });
    $('.slick_bot').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 600,
        dots: false,
        autoplay: false,
        infinite: true,
        centerMode: false,
        focusOnSelect: false,
        arrows: false
    });
    //
    if (isExist($(".slide-text"))) {
        $(".slide-text").slick({
            dots: true,
            infinite: true,
            autoplaySpeed: 3000,
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,
            autoplay: true,
            arrows: true,
            fade: true,
        });
    }

    if (isExist($(".slide-text"))) {
        $(".slide-text").slick({
            dots: true,
            infinite: true,
            autoplaySpeed: 3000,
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,
            autoplay: true,
            arrows: true,
            fade: true,
        });
    }
    if (isExist($(".slick-khachhang"))) {
        $(".slick-khachhang").slick({
            dots: false,
            infinite: false,
            autoplaySpeed: 3000,
            slidesToShow: 3,
            slidesToScroll: 1,
            adaptiveHeight: true,
            vertical: true,
            autoplay: true,
            arrows: false,
            draggable: true,
            verticalSwiping: true,
        });
    }
    if (isExist($(".slick_newsdm"))) {
        $(".slick_newsdm").slick({
            dots: false,
            infinite: true,
            autoplaySpeed: 3000,
            slidesToShow: 6,
            slidesToScroll: 1,
            adaptiveHeight: true,
            vertical: true,
            autoplay: true,
            infinite: true,
            arrows: false,
        });
    }
    // slick youtube
    if ($(".slick-youtube").length) {
        $(".slick-youtube").slick({
            dots: false,
            infinite: false,
            autoplaySpeed: 3000,
            slidesToShow: 2,
            slidesToScroll: 1,
            vertical: false,
            autoplay: false,
            arrows: true,

            prevArrow: '<button type="button" class="slick-prev"><img src="assets/imgs/prev-icon.png" alt="Previous"></button>',
            nextArrow: '<button type="button" class="slick-next"><img src="assets/imgs/next-icon.png" alt="Next"></button>',
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        rows: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        rows: 1,
                        prevArrow: '<button type="button" class="slick-prev"><img src="assets/imgs/prev-icon1.png" alt="Previous"></button>',
                        nextArrow: '<button type="button" class="slick-next"><img src="assets/imgs/next-icon1.png" alt="Next"></button>',
                    }
                }
            ]
        });
    }


    // slick feedback
    $('.slider-for-feedback').slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav-feedback'
    });
    $('.slider-nav-feedback').slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        asNavFor: '.slider-for-feedback',
        dots: true,
        centerMode: true,
        focusOnSelect: true
    });
    $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        centerMode: true,
        variableWidth: true,
        infinite: true,
        focusOnSelect: true,
        cssEase: 'linear',
        touchMove: true,
        // prevArrow: '<button class="slick-prev"> < </button>',
        // nextArrow: '<button class="slick-next"> > </button>',

        //         responsive: [                        
        //             {
        //               breakpoint: 576,
        //               settings: {
        //                 centerMode: false,
        //                 variableWidth: false,
        //               }
        //             },
        //         ]
    });


    var imgs = $('.slider img');
    imgs.each(function () {
        var item = $(this).closest('.item');
        item.css({
            'background-image': 'url(' + $(this).attr('src') + ')',
            'background-position': 'center',
            '-webkit-background-size': 'cover',
            'background-size': 'cover',
        });
        $(this).hide();
    });

};
BLUEWEB_FRAMEWORK.Swiper = function () {
    let newKhongGian = new Swiper(".khonggian-swiper", {
        slidesPerView: 3,
        initialSlide: 3,
        loop: true,
        centeredSlides: true,
        spaceBetween: 30,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },



    });
}
BLUEWEB_FRAMEWORK.shinerLogo = function () {
    $(window).bind("load", function () {
        var api = $(".peShiner").peShiner({ api: true, paused: true, reverse: true, repeat: 1, color: 'oceanHL' });
        api.resume();
    });
    if ($(window).width() <= 1024) {
        $('.peShiner').removeClass('peShiner');
    }
    $(window).bind("load", function () {
        var api = $(".peShiner2").peShiner({ api: true, paused: true, reverse: true, repeat: 1, color: 'oceanHL' });
        api.resume();
    });
    if ($(window).width() <= 1024) {
        $('.peShiner2').removeClass('peShiner2');
    }
    $(window).bind("load", function () {
        var api = $(".peShiner3").peShiner({ api: true, paused: true, reverse: true, repeat: 1, color: 'oceanHL' });
        api.resume();
    });
    if ($(window).width() <= 1024) {
        $('.peShiner3').removeClass('peShiner3');
    }
};
BLUEWEB_FRAMEWORK.counterData = function () {
    if (isExist($('#counter'))) {
        var a = 0;
        $(window).scroll(function () {
            var oTop = $('#counter').offset().top - window.innerHeight;
            if (a == 0 && $(window).scrollTop() > oTop) {
                $('.counter-value').each(function () {
                    var $this = $(this)
                        , countTo = $this.attr('data-count');
                    $({
                        countNum: $this.text()
                    }).animate({
                        countNum: countTo
                    }, {
                        duration: 7000,
                        easing: 'swing',
                        step: function () {
                            $this.text(Math.floor(this.countNum) + "+")
                        },
                        complete: function () {
                            $this.text(this.countNum + "+")
                        }
                    })
                });
                a = 1
            }
        })
    }
};
/* Aos */
BLUEWEB_FRAMEWORK.AosAnimation = function () {
    AOS.init({});
};

/* TOC */
BLUEWEB_FRAMEWORK.Toc = function () {
    if (isExist($(".toc-list"))) {
        $(".toc-list").toc({
            content: "div#toc-content",
            headings: "h2,h3,h4"
        });

        if (!$(".toc-list li").length) $(".meta-toc").hide();
        if (!$(".toc-list li").length) $(".meta-toc .mucluc-dropdown-list_button").hide();

        $('.toc-list').find('a').click(function () {
            var x = $(this).attr('data-rel');
            goToByScroll(x);
        });

        $("body").on("click", ".mucluc-dropdown-list_button", function () {
            $(".box-readmore").slideToggle(200);
        });

        $(document).scroll(function () {
            var y = $(this).scrollTop();
            if (y > 300) {
                $('.meta-toc').addClass('fiedx');
            } else {
                $('.meta-toc').removeClass('fiedx');
            }
        });
    }
};

BLUEWEB_FRAMEWORK.LoaderWrapper = function () {
    if (isExist($("#loader-wrapper"))) {
        setTimeout(function () {
            $("#loader-wrapper").addClass('show1');
        }, 1500);
        setTimeout(function () {
            $('#loader-wrapper').remove();
        }, 3000);
    }
};

BLUEWEB_FRAMEWORK.Homes = function () {
    if (isExist($(".list-hot"))) {
        //FirstLoadAPI(".list-hot a:first", "api/load_ajax_product.php", ".load_ajax_product");
        //LoadAPI(".list-hot a", "api/load_ajax_product.php", ".load_ajax_product");
    }

    if (isExist($(".cats-bar-icon"))) {
        $("body").on("click", ".cats-bar-icon", function () {
            $this = $(this);
            $this.toggleClass("active not-active");
            var isActive = $this.hasClass("active");
            $(".cats-owl").animate({
                opacity: +isActive,
                visibility: isActive ? "visible" : "hidden",
            }, 1000, function () { });
        });
    }
    if (isExist($(".content-text"))) {
        $(".content-text table").each(function (i, val) {
            $(this).addClass("table table-bordered");
        });
        $(document).ready(function () {
            $('.content-text img').each(function (index, element) {
                var src = $(this).attr('src');
                $(this).wrap("<a data-fancybox='gallery' data-src ='" + src + "'  href='" + src + "' > </a>");
            });
        });
    }

};
BLUEWEB_FRAMEWORK.aweOwlPage = function () {
    var owl = $('.owl-carousel.in-page');
    owl.each(function () {
        var xs_item = $(this).attr('data-xs-items');
        var md_item = $(this).attr('data-md-items');
        var lg_item = $(this).attr('data-lg-items');
        var sm_item = $(this).attr('data-sm-items');
        var margin = $(this).attr('data-margin');
        var dot = $(this).attr('data-dot');
        var nav = $(this).attr('data-nav');
        var height = $(this).attr('data-height');
        var play = $(this).attr('data-play');
        var loop = $(this).attr('data-loop');

        if (typeof margin !== typeof undefined && margin !== false) { } else {
            margin = 30;
        }
        if (typeof xs_item !== typeof undefined && xs_item !== false) { } else {
            xs_item = 1;
        }
        if (typeof sm_item !== typeof undefined && sm_item !== false) {

        } else {
            sm_item = 3;
        }
        if (typeof md_item !== typeof undefined && md_item !== false) { } else {
            md_item = 3;
        }
        if (typeof lg_item !== typeof undefined && lg_item !== false) { } else {
            lg_item = 3;
        }

        if (loop == 1) { loop = true; } else { loop = false; }
        if (dot == 1) { dot = true; } else { dot = false; }
        if (nav == 1) { nav = true; } else { nav = false; }
        if (play == 1) { play = true; } else { play = false; }

        $(this).owlCarousel({
            loop: loop,
            margin: Number(margin),
            responsiveClass: true,
            dots: dot,
            nav: nav,
            navText: ['<div class="owlleft"><svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;"><polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline></svg></div>', '<div class="owlright"><svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;"><polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline></svg></div>'],
            autoplay: play,
            autoplayTimeout: 4000,
            smartSpeed: 3000,
            autoplayHoverPause: true,
            autoHeight: false,
            responsive: {
                0: {
                    items: Number(xs_item)
                },
                600: {
                    items: Number(sm_item)
                },
                1000: {
                    items: Number(md_item)
                },
                1200: {
                    items: Number(lg_item)
                }
            }
        })
    });
};

BLUEWEB_FRAMEWORK.slickPage = function () {
    if (isExist($(".slick.in-page"))) {
        $('.slick.in-page').each(function () {
            var dots = $(this).attr('data-dots');
            var infinite = $(this).attr('data-infinite');
            var speed = $(this).attr('data-speed');
            var vertical = $(this).attr('data-vertical');
            var arrows = $(this).attr('data-arrows');
            var autoplay = $(this).attr('data-autoplay');
            var autoplaySpeed = $(this).attr('data-autoplaySpeed');
            var centerMode = $(this).attr('data-centerMode');
            var centerPadding = $(this).attr('data-centerPadding');
            var slidesDefault = $(this).attr('data-slidesDefault');
            var responsive = $(this).attr('data-responsive');
            var xs_item = $(this).attr('data-xs-items');
            var md_item = $(this).attr('data-md-items');
            var lg_item = $(this).attr('data-lg-items');
            var sm_item = $(this).attr('data-sm-items');
            var slidesDefault_ar = slidesDefault.split(":");
            var xs_item_ar = xs_item.split(":");
            var sm_item_ar = sm_item.split(":");
            var md_item_ar = md_item.split(":");
            var lg_item_ar = lg_item.split(":");
            var to_show = slidesDefault_ar[0];
            var to_scroll = slidesDefault_ar[1];
            if (responsive == 1) { responsive = true; } else { responsive = false; }
            if (dots == 1) { dots = true; } else { dots = false; }
            if (arrows == 1) { arrows = true; } else { arrows = false; }
            if (infinite == 1) { infinite = true; } else { infinite = false; }
            if (autoplay == 1) { autoplay = true; } else { autoplay = false; }
            if (centerMode == 1) { centerMode = true; } else { centerMode = false; }
            if (vertical == 1) { vertical = true; } else { vertical = false; }
            if (typeof speed !== typeof undefined && speed !== false) { } else { speed = 300; }
            if (typeof autoplaySpeed !== typeof undefined && autoplaySpeed !== false) { } else { autoplaySpeed = 2000; }
            if (typeof centerPadding !== typeof undefined && centerPadding !== false) { } else { centerPadding = "0px"; }
            var reponsive_json = [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: Number(lg_item_ar[0]),
                    slidesToScroll: Number(lg_item_ar[1])
                }
            }, {
                breakpoint: 992,
                settings: {
                    slidesToShow: Number(md_item_ar[0]),
                    slidesToScroll: Number(md_item_ar[1])
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: Number(sm_item_ar[0]),
                    slidesToScroll: Number(sm_item_ar[1]),
                    vertical: false
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: Number(xs_item_ar[0]),
                    slidesToScroll: Number(xs_item_ar[1]),
                    vertical: false
                }
            }];
            if (responsive == 1) {
                $(this).slick({
                    dots: dots,
                    infinite: infinite,
                    arrows: arrows,
                    speed: Number(speed),
                    vertical: vertical,
                    slidesToShow: Number(to_show),
                    slidesToScroll: Number(to_scroll),
                    autoplay: autoplay,
                    autoplaySpeed: Number(autoplaySpeed),
                    responsive: reponsive_json
                });
            } else {
                $(this).slick({
                    dots: dots,
                    infinite: infinite,
                    arrows: arrows,
                    speed: Number(speed),
                    vertical: vertical,
                    slidesToShow: Number(to_show),
                    slidesToScroll: Number(to_scroll),
                    autoplay: autoplay,
                    autoplaySpeed: Number(autoplaySpeed)
                });
            }
        });
    }
};
BLUEWEB_FRAMEWORK.toolTip = function () {
    $('body').on('mousemove', '.tooltip1', function (e) {
        var x = e.clientX + 30;
        var y = e.clientY + 30;
        var tieude = $(this).parents('.box').find('.name-product').text();
        var mota = $(this).parents('.box').find('.desc').text();
        var giacu = $(this).parents('.box').find('.price-old').text();
        var giamoi = $(this).parents('.box').find('.price-new').text();
        if (!$(this).find(".tooltip-content").length)
            $(this).append('<div class="tooltip-content" style="width: 260px;"><div class="tooltip-content-tieude">' + tieude + '</div><div class="price_sanpham giaa">Giá:<div class="price-old">' + giacu + '</div><div class="price-new">' + giamoi + '</div></div><div class="title_thongso">THÔNG SỐ SẢN PHẨM</div><div class="tooltip-content-desc">' + mota + '</div></div>');
        $(this).find('.tooltip-content').css({ "left": x + "px", "top": y + "px" });
    });
    $('body').on('mouseleave', '.tooltip1', function (e) {
        $(this).find('.tooltip-content').remove();
    });

};
BLUEWEB_FRAMEWORK.Menumobile = function () {
    $('#btn-menu-mobile').on('click', function () {
        var section = $('.header-menu');
        var template = $('script[data-template="header_nav"]').html();
        if (template) {
            $('div[data-section="header_nav"]').html(template);
            awe_lazyloadImage();
            $('#nav-col li > a .open_mnu').click(function (e) {
                e.preventDefault();
                e.stopPropagation();
                $(this).closest('li').find('> .dropdown-menu').slideToggle("fast");
                $(this).closest('li').toggleClass("current");
                $(this).closest('li').find('> .dropdown-menu').toggleClass("current");
                $(this).toggleClass('current');
                return false;
            });
            $('#nav li > a .open_mnu').click(function (e) {
                e.preventDefault();
                e.stopPropagation();
                $(this).closest('li').find('> .dropdown-menu').slideToggle("fast");
                $(this).closest('li').toggleClass("current");
                $(this).closest('li').find('> .dropdown-menu').toggleClass("current");
                $(this).toggleClass('current');
                return false;
            });
        }
        $(this).addClass('open');
        $('.header-menu').addClass('current');
        $('body').addClass('menu-open'); // Thêm dòng này
        $('.mobile-nav-overflow').toggleClass('open');
    });

    $('.header-menu .close-menu').on('click', function () {
        $(this).closest('.header-menu').removeClass('current');
        $('body').removeClass('menu-open'); // Thêm dòng này
        $('.mobile-nav-overflow').toggleClass('open');
    });

    $('.mobile-nav-overflow').on('click', function () {
        $('.header-menu').removeClass('current');
        $(this).toggleClass('open');
        $('#btn-menu-mobile').toggleClass('open');
        $('body').removeClass('menu-open'); // Thêm dòng này
    });

    $('.menu-bar').on('click', function () {
        $('.opacity_menu').addClass('current');
    });

    $('#nav-col li > a .open_mnu').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).closest('li').find('> .dropdown-menu').slideToggle("fast");
        $(this).closest('li').toggleClass("current");
        $(this).closest('li').find('> .dropdown-menu').toggleClass("current");
        $(this).toggleClass('current');
        return false;
    });

    $('#nav li > a .open_mnu').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).closest('li').find('> .dropdown-menu').slideToggle("fast");
        $(this).closest('li').toggleClass("current");
        $(this).closest('li').find('> .dropdown-menu').toggleClass("current");
        $(this).toggleClass('current');
        return false;
    });

    $('.opacity_menu').on('click', function () {
        $('.opacity_menu').removeClass('current');
    });

    $('.header-action-item.search-mobile').click(function (e) {
        e.preventDefault();
        $('.search-mobile.search_form').toggleClass('open');
    });

    $('.input-group-btn .search-close').click(function (e) {
        e.preventDefault();
        $('.search-mobile.search_form').toggleClass('open');
    });
};

BLUEWEB_FRAMEWORK.Sort = function () {
    function handleSorting() {
        var selectedOption = $(".content_ul option:selected");
        var sortValue = selectedOption.data("sort");
        var listValue = selectedOption.data("list");
        var catValue = selectedOption.data("cat");
        var url = "api/sortproduct.php?perpage=20";
        if (listValue && catValue) {
            url += "&idList=" + listValue + "&idCat=" + catValue;
            url += "&Sort=" + sortValue;
        }
        else if (listValue) {
            url += "&idList=" + listValue;
            url += "&Sort=" + sortValue;
        }
        else if (catValue) {
            url += "&idCat=" + catValue;
            url += "&Sort=" + sortValue;
        }
        else {
            url += "&Sort=" + sortValue;
        }

        loadPaging(url, '.sortproduct-paging-list');
    }

    $(".content_ul").change(function () {
        handleSorting();
    });

    if ($(".itemsort.active").length) {
        $(".itemsort.active").each(function () {
            var sortValue = $(this).attr("data-sort");
            var listValue = $(this).attr("data-list");
            var catValue = $(this).attr("data-cat");

            var url = "api/sortproduct.php?perpage=20";

            if (listValue && catValue) {
                url += "&idList=" + listValue + "&idCat=" + catValue;
                url += "&Sort=" + sortValue;
            }
            else if (listValue) {
                url += "&idList=" + listValue;
                url += "&Sort=" + sortValue;
            }
            else if (catValue) {
                url += "&idCat=" + catValue;
                url += "&Sort=" + sortValue;
            }
            else {
                url += "&Sort=" + sortValue;
            }

            loadPaging(url, '.sortproduct-paging-list');
        });
    }

    $(".itemsort").click(function () {
        if (!$(this).hasClass("active")) {
            $(this).parent().find(".itemsort").removeClass("active");
            $(this).addClass("active");

            var sortValue = $(this).attr("data-sort");
            var listValue = $(this).attr("data-list");
            var catValue = $(this).attr("data-cat");

            var url = "api/sortproduct.php?perpage=20";
            if (listValue && catValue) {
                url += "&idList=" + listValue + "&idCat=" + catValue;
                url += "&Sort=" + sortValue;
            }
            else if (listValue) {
                url += "&idList=" + listValue;
                url += "&Sort=" + sortValue;
            }
            else if (catValue) {
                url += "&idCat=" + catValue;
                url += "&Sort=" + sortValue;
            }
            else {
                url += "&Sort=" + sortValue;
            }

            loadPaging(url, '.sortproduct-paging-list');
        }
    });

};

BLUEWEB_FRAMEWORK.Showhide = function () {
    if ($('.product-tab').length > 0) {
        $('.product-tab-title').on('click', function () {
            if ($(this).parent().hasClass('opened')) {
                $(this).parent().removeClass('opened');
                $(this).parent().first().find('.product-tab-description').slideUp();
            }
            else {
                $('.product-tab-description').slideUp();
                $('.product-tab').removeClass('opened');
                $(this).parent().addClass('opened');
                $(this).parent().first().find('.product-tab-description').slideDown();
            }
        });
    }
};
BLUEWEB_FRAMEWORK.GoogleMap = function () {
    $(".map_items").click(function () {
        if ($(this).hasClass("active")) { } else {
            $(this).parent().find(".map_items").removeClass("active");
            $(this).addClass("active");
            let idMap = $(this).attr("data-map");
            $(".map_frame").each(function () {
                loadPaging("api/maps.php?idMap=" + idMap, '.map_frame');
            });
        }
    });
    if (isExist($('.map_items.active'))) {
        $(".map_items.active").each(function () {
            let idMap = $(this).attr("data-map");
            $(".map_frame").each(function () {
                loadPaging("api/maps.php?idMap=" + idMap, '.map_frame');
            });
        })
    }
};
function scrollTocuon($vitri3) {
    $('html, body').animate({
        scrollTop: $('#' + $vitri3).offset().top - 100
    }, 'slow');
    return false;
}
/* Ready */
$(document).ready(function () {
    BLUEWEB_FRAMEWORK.Homes();
    BLUEWEB_FRAMEWORK.LoaderWrapper();
    BLUEWEB_FRAMEWORK.SlickPage();
    // BLUEWEB_FRAMEWORK.Swiper();
    BLUEWEB_FRAMEWORK.AosAnimation();
    BLUEWEB_FRAMEWORK.Lazys();
    BLUEWEB_FRAMEWORK.Tools();
    // BLUEWEB_FRAMEWORK.Popup();
    BLUEWEB_FRAMEWORK.Wows();
    BLUEWEB_FRAMEWORK.AltImg();
    BLUEWEB_FRAMEWORK.GoTop();
    BLUEWEB_FRAMEWORK.Menu();
    BLUEWEB_FRAMEWORK.shinerLogo();
    BLUEWEB_FRAMEWORK.counterData();
    BLUEWEB_FRAMEWORK.OwlPage();
    BLUEWEB_FRAMEWORK.Pagings();
    BLUEWEB_FRAMEWORK.Cart();
    BLUEWEB_FRAMEWORK.Videos();
    BLUEWEB_FRAMEWORK.Photobox();
    BLUEWEB_FRAMEWORK.Comment();
    BLUEWEB_FRAMEWORK.Search();
    BLUEWEB_FRAMEWORK.DomChange();
    /*BLUEWEB_FRAMEWORK.TickerScroll();*/
    BLUEWEB_FRAMEWORK.DatePicker();
    BLUEWEB_FRAMEWORK.loadNameInputFile();
    BLUEWEB_FRAMEWORK.QuickView();
    BLUEWEB_FRAMEWORK.Toc();
    BLUEWEB_FRAMEWORK.toolTip();
    BLUEWEB_FRAMEWORK.Sort();
    BLUEWEB_FRAMEWORK.Menumobile();
    BLUEWEB_FRAMEWORK.Showhide();
    BLUEWEB_FRAMEWORK.GoogleMap();
});


