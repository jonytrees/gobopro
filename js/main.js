jQuery(function ($) {

    // ===================================================== Fix fixed bg's jump

    /MSIE [6-8]|Mac/i.test(navigator.userAgent) || $("header, article, footer").each(function () {
        if ("fixed" == $(this).css("backgroundAttachment")) {
            var i = $(this), a = /WebKit/i.test(navigator.userAgent) ? 9 : 8;
            i.addClass("froid-fixed-bg").data({
                bgX: i.css("backgroundPosition").slice(0, i.css("backgroundPosition").indexOf(" ")),
                bgY: i.css("backgroundPosition").slice(i.css("backgroundPosition").indexOf(" ")),
                margin: a
            })
        }
    }), $(window).bind("SIModals.modalsOpen", function () {
        $(".froid-fixed-bg").each(function () {
            var i = $(this);
            i.css("backgroundPosition", "calc(" + i.data("bgX") + " - " + i.data("margin") + "px) " + i.data("bgY"))
        })
    }), $(window).bind("SIModals.modalsClose", function () {
        $(".froid-fixed-bg").each(function () {
            var i = $(this);
            i.css("backgroundPosition", i.data("bgX") + " " + i.data("bgY"))
        })
    });

    // ===================================================== Mobile full-width && disable animation

    if (is_mobile()) {

        // Fix mobile fixed bg's
        $("header, section, article, footer, .section-bg-block::before").each(function () {
            if ("fixed" == $(this).css("backgroundAttachment")) $(this).css('backgroundAttachment', 'scroll');
        });

        // Remove animation
        function removeAnimation(block, className) {
            block.css({
                'transform': 'none',
                '-webkit-transform': 'none',
                '-moz-transform': 'none',
                '-ms-transform': 'none',
                '-o-transform': 'none',
                'transition': 'none',
                '-webkit-transition': 'none',
                'opacity': 1
            }).removeClass(className);
        }

        function removeTransform(block, className) {
            block.css({
                'transform': 'none',
                '-webkit-transform': 'none',
                '-moz-transform': 'none',
                '-ms-transform': 'none',
                '-o-transform': 'none'
            }).removeClass(className);
        }

        removeAnimation($('.cre-animate'), 'cre-animate');
        removeTransform($('.si-floating'), 'si-floating');
        removeTransform($('.si-floating2'), 'si-floating2');
        removeTransform($('.si-floating3'), 'si-floating3');
        removeTransform($('.si-floating4'), 'si-floating4');

        // Mobile stretch
        // $('html, body').css('min-width', '1280px').addClass('mobile');
        // $('html').css('width', window.innerWidth + 'px');

        $('html').css('width', window.innerWidth + 'px');
        $(window).resize(function () {
           $('html').css('width', window.innerWidth + 'px');
        });
        $(window).bind('scroll', function () {
           $('html').css('width', window.innerWidth + 'px');
        });

        // ===================================================== All sound load
        $.ionSound({
            sounds: ["bip-1", "bip-2", "wuf-1", "wuf-2", "wuf-3", "wuf-4"],
            path: template_url + "/sounds/",
            volume: 0
        });
    }
    else {

        // ===================================================== All sound load
        $.ionSound({
            sounds: ["bip-1", "bip-2", "wuf-1", "wuf-2", "wuf-3", "wuf-4"],
            path: template_url + "/sounds/",
            volume: 0
        });

        // ===================================================== Sounds
        $(document).on('mouseenter',
            '.btn, ' +
            '.si-close, ' +
            '.phone-link, ' +
            '.si-jump, ' +
            '.swiper-button-prev, ' +
            '.swiper-button-next, ' +
            '.swiper-pagination-bullet, ' +
            '.tab-link', function () {
                $.ionSound.play('bip-2');
            });
        SIModals.beforeOpen = function () {
            $.ionSound.play('wuf-4');
        };
        SIModals.beforeClose = function () {
            $.ionSound.play('wuf-3');
        };

        // ===================================================== smooth scrolling
        if (!navigator.userAgent.match(/Trident\/7\./)) { // if not IE
            SmoothScroll({stepSize: 100});
        } else {
            document.body.addEventListener("mousewheel", function () {
                event.preventDefault();
                var wd = event.wheelDelta;
                var csp = window.pageYOffset;
                window.scrollTo(0, csp - wd);
            });
        }

        // ===================================================== parallax
        $('.element-parallax').scrollingParallax({
            staticSpeed: 1.4,
            staticScrollLimit: false
        });

        // ===================================================== video bg
        //$('#video-bg').css({'visibility': 'visible'});
        //$('#video-bg')[0].play();
    }

    if (is_OSX()) {
        $('html, body').addClass('osx');
    }


    // ===================================================== Init all plugins and scripts
    $.fn.SIInit = function () {

        //Modal photos
        $("[data-fancybox]").fancybox({
            loop: true,
            thumbs: {
                autoStart: true
            },
            youtube: {},
            vimeo: {}
        });

        //Forms
        $('.send-form').SIForms({
            'validateFields': {
                'client_name': 'Укажите ваше имя',
                'client_phone': 'Укажите ваш телефон',
                'client_mail': 'Укажите ваш e-mail'
            },
            'sendSuccess': function (res) {
                //grecaptcha.reset(recaptcha);
                //yaCounter.reachGoal('target' + res.id);
                //ga('send', 'event', res.gcode, res.gcode);
            }
        });

        //Jump links
        $('.si-jump').SIJump();

        //Page messages
        SIPageMessages.init();
    };

    $.fn.SIInit();


    // ===================================================== Modals
    $.fn.SIModalInit = function () {
        SIModals.init();

        // Init modals
        SIModals.attachModal('.open-characteristic-modal', '.characteristic-modal', {'.send-extra': 'extra'});
        SIModals.attachModal('.open-project-modal', '.project-modal', {'.send-extra': 'extra'});
        SIModals.attachModal('.open-consult-modal', '.consult-modal', {'.send-extra': 'extra'});
        SIModals.attachModal('.open-condition-modal', '.condition-modal', {'.send-extra': 'extra'});
        SIModals.attachModal('.open-text-modal', '.text-modal', false, function () {
            return '.text-modal-' + $(this).data('id');
        });

        // Modal controls
        SIModals.attachClose('.si-close');
    };

    $.fn.SIModalInit();

    //SIModals.afterOpen = function () {
    //grecaptcha.reset(recaptcha);
    //};

    // ===================================================== Styler
    $('input[type=file], input[type=radio], input[type=checkbox], select').styler();
    $('input[type=radio]').change(function () {
        var label = $(this).closest('label'),
            name = $(this).attr('name');
        $('input[name=' + name + ']').closest('label').removeClass('checked');
        if ($(this).is(':checked'))
            label.addClass('checked');
    });
    $('input[type=checkbox]').change(function () {
        var label = $(this).closest('label');
        if ($(this).is(':checked'))
            label.addClass('checked');
        else
            label.removeClass('checked');
    });

    // ===================================================== Counter
    var tomorrow = new Date();
    tomorrow.setHours(24, 0, 0, 0);
    $('.counter').countdown({
        until: tomorrow,
        layout: '<div class="counter-item"><b>{dnn}</b>{dl}</div><div class="counter-separator">:</div>' +
        '<div class="counter-item"><b>{hnn}</b>{hl}</div><div class="counter-separator">:</div>' +
        '<div class="counter-item"><b>{mnn}</b>{ml}</div><div class="counter-separator">:</div>' +
        '<div class="counter-item"><b>{snn}</b>{sl}</div>'
    });

    // ===================================================== spoiler
    $(".spoiler").spoiler();

    // ===================================================== swiper
    if($('html').find('.place-slider-holder')){
        var placeSlider = new Swiper('.place-slider', {
            slidesPerView: 3,
            spaceBetween: 0,
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			  },
            navigation: {
				nextEl: '.place-next',
				prevEl: '.place-prev',
			  },
            loop: true,
            autoplay: {
				delay: 5000,
			  },
			on: {
				slideChange: function() {
					$.ionSound.play('wuf-1');
				}
			}
        });
	}

    if($('html').find('.place-slider-holder')){
        var placeMobileSlider = new Swiper('.place-mobile-slider', {
            slidesPerView: 1,
            spaceBetween: 0,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.place-next',
                prevEl: '.place-prev',
            },
            loop: true,
            autoplay: {
                delay: 5000,
            },
            on: {
                slideChange: function() {
                    $.ionSound.play('wuf-1');
                }
            }
        });
    }

    if($('html').find('.logo-slider-holder')){
        var logoSlider = new Swiper('.logo-slider', {
            slidesPerView: 7,
            spaceBetween: 0,
            pagination: {
                el: '.logo-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.logo-next',
                prevEl: '.logo-prev',
            },
            loop: true,
            autoplay: {
                delay: 5000,
            },
            on: {
                slideChange: function() {
                    $.ionSound.play('wuf-1');
                }
            }
        });
    }

    if($('html').find('.logo-slider-holder')){
        var logoMobileSlider = new Swiper('.logo-mobile-slider', {
            slidesPerView: 4,
            spaceBetween: 0,
            pagination: {
                el: '.logo-mobile',
                clickable: true,
            },
            navigation: {
                nextEl: '.logo-next',
                prevEl: '.logo-prev',
            },
            loop: true,
            autoplay: {
                delay: 5000,
            },
            on: {
                slideChange: function() {
                    $.ionSound.play('wuf-1');
                }
            }
        });
    }

    if($('html').find('.sertificate-slider-holder')){
        var sertificateSlider = new Swiper('.sertificate-slider', {
            slidesPerView: 1,
            spaceBetween: 0,
            navigation: {
                nextEl: '.sertificate-next',
                prevEl: '.sertificate-prev',
            },
            loop: true,
            autoplay: {
                delay: 5000,
            },
            on: {
                slideChange: function() {
                    $.ionSound.play('wuf-1');
                }
            }
        });
    }

    if($('html').find('.review-slider-holder')){
        var sertificateSlider = new Swiper('.review-slider', {
            slidesPerView: 1,
            spaceBetween: 0,
            navigation: {
                nextEl: '.review-next',
                prevEl: '.review-prev',
            },
            loop: true,
            autoplay: {
                delay: 5000,
            },
            on: {
                slideChange: function() {
                    $.ionSound.play('wuf-1');
                }
            }
        });
    }

    if($('html').find('.what-slider-holder')){
        var whatSlider = new Swiper('.what-slider', {
            slidesPerView: 1,
            spaceBetween: 0,
            navigation: {
                nextEl: '.what-next',
                prevEl: '.what-prev',
            },
            loop: true,
            autoplay: {
                delay: 5000,
            },
            on: {
                slideChange: function() {
                    $.ionSound.play('wuf-1');
                }
            }
        });
    }

    if($('html').find('.dealer-slider-holder')){
        var dealerSlider = new Swiper('.dealer-slider', {
            slidesPerView: 1,
            spaceBetween: 0,
            navigation: {
                nextEl: '.dealer-next',
                prevEl: '.dealer-prev',
            },
            loop: true,
            autoplay: {
                delay: 5000,
            },
            on: {
                slideChange: function() {
                    $.ionSound.play('wuf-1');
                }
            }
        });
    }

    // =====================================================dotdotdot
    $('.ellipsis').dotdotdot();
    $(window).resize(function () {
        $('.ellipsis').dotdotdot();
    });


    //===================================================== desktop menu
    var showMenu = $('.show-menu');

    function closeGlobalNav(timeout) {
        var globalNavigation = $('.global-nav'),
            showMenu = $('.show-menu');

        // $('html').removeClass('si-lock2');
        showMenu.removeClass('opened');
        $('.layout-header .si-phone').removeClass('hidden');
        $('.layout-header .logo').removeClass('hidden');
        $('.layout-header .consult').removeClass('hidden');
        globalNavigation.removeClass('active');
        // $('.layout-header').removeClass('active-menu');
        setTimeout(function () {
            globalNavigation.removeClass('visible');
        }, timeout);
    }

    //show menu button
    showMenu.click(function () {
        var globalNavigation = $('.global-nav');

        if ($(this).hasClass('opened')) {
            closeGlobalNav(600);
        } else {
            // $('html').addClass('si-lock2');
            $(this).addClass('opened');
            $('.layout-header').css('border-bottom', 'none');
            $('.layout-header .si-phone').addClass('hidden');
            $('.layout-header .logo').addClass('hidden');
            $('.layout-header .consult').addClass('hidden');
            globalNavigation.addClass('visible').addClass('active');

            // $('.layout-header').addClass('active-menu');
        }
    });

    //navigation overlay click
    $('.nav-overlay').click(function () {
        closeGlobalNav(600);
    });

    //close button click
    $('.nav-close').click(function () {
        closeGlobalNav(600);
    });

    //global link click
    $(".global-nav-link").click(function (e) {
        closeGlobalNav(1200);
    });

    //===================================================== mobile menu
    // var showMenuMobile = $('.show-mobile-menu');
    //
    // function closeGlobalNavMobile(timeout) {
    //     var globalNavigationMobile = $('.global-mobile-nav'),
    //         showMenuMobile = $('.show-mobile-menu');
    //
    //     $('html').removeClass('si-lock2');
    //     showMenuMobile.removeClass('opened');
    //     // $('.layout-header .si-phone').css('display', 'inline-block');
    //     globalNavigationMobile.removeClass('active');
    //     $('.layout-header .consult').css('display', 'inline-block');
    //     $('.layout-header .si-phone').css('padding-left', '90px').css('padding-top', '0');
    //     $('.show-mobile-menu .text').css('display', 'none');
    //     setTimeout(function () {
    //         globalNavigationMobile.removeClass('visible');
    //     }, timeout);
    // }

    //show menu button
    // showMenuMobile.click(function () {
    //     var globalNavigationMobile = $('.global-mobile-nav');
    //
    //     if ($(this).hasClass('opened')) {
    //         closeGlobalNavMobile(600);
    //     } else {
    //         $('html').addClass('si-lock2');
    //         $(this).addClass('opened');
    //         // $('.layout-header .si-phone').css('display', 'none');
    //         globalNavigationMobile.addClass('visible').addClass('active');
    //
    //         $('.layout-header .consult').css('display', 'none');
    //         $('.show-mobile-menu .text').css('display', 'block');
    //         $('.layout-header .si-phone').css('padding-left', '50px').css('padding-top', '20px');
    //     }
    // });

    //navigation overlay click
    // $('.nav-overlay').click(function () {
    //     closeGlobalNavMobile(600);
    // });

    //close button click
    // $('.nav-close').click(function () {
    //     closeGlobalNavMobile(600);
    // });

    //global link click
    // $(".global-nav-link").click(function (e) {
    //     closeGlobalNavMobile(1200);
    // });


    $(".program-block").click(function(){
        if($(this).hasClass('click-active')){
            $(this).removeClass('click-active');
        }else{
            $(this).addClass('click-active');
        }
    });

    // ===================================================== custom scripts

    //label
    $('.ani-label').click(function () {
        var label = $(this),
            holder = label.parent(),
            input = holder.find('.ani-input');

        holder.toggleClass('active');
        input.focus();
    });

    //menu
    function headerBehaviour() {
        if ($(window).scrollTop() > 0) {
            $('.layout-header').addClass('active');
        }
        else {
            $('.layout-header').removeClass('active');
        }
    }

    headerBehaviour();
    $(window).resize(function () {
        headerBehaviour();
    });
    $(window).bind('scroll', function () {
        headerBehaviour();
    });

    //accordion
    $('.question-item:first').addClass('active').find('.answer').css('display', 'block');
    $('.question-item').each(function () {
        var item = $(this),
            question = item.find('.question'),
            answer = item.find('.answer');
        answer.slideUp();
        if (item.hasClass('active')) {
            $(this).find('.answer').slideDown();
        }
        question.click(function () {
            if (question.parents('.question-item').hasClass('active')) {
                answer.slideUp();
                item.removeClass('active');
            }
            else {
                item.parents('.questions-block').find('.question-item').find('.answer').slideUp();
                answer.slideDown();
                item.parents('.questions-block').find('.question-item').removeClass('active');
                item.addClass('active');
            }
        });
    });

    //equal height
    function setEqualHeight(block) {
        var maxHeight = 0;

        block.each(function () {
            var height = $(this).innerHeight();

            if (height > maxHeight) {
                maxHeight = height;
            }
        });

        return block.css('height', maxHeight);
    }

    setEqualHeight($('.block'));


    // ===================================================== loader
    setTimeout(function () {
       $('html').removeClass('loading');
       setTimeout(function () {
           $('.loader').hide();
       }, 500);
    }, 1000);

    [].forEach.call(document.querySelectorAll('img[data-src]'),    function(img) {
        img.setAttribute('src', img.getAttribute('data-src'));
        img.onload = function() {
            img.removeAttribute('data-src');
        };
    });

});