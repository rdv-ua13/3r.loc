document.addEventListener("DOMContentLoaded", () => {
    const app = new application();
    app.init();
});

function application() {
    //variable
    //this.myMap;
}
application.prototype.init = function () {
    this.initTouch();
    this.initBurger();
    this.initOverlay();
    this.initFancyBehavior();
    this.initBasicSlider();
    this.initSliders();
    this.initVideoPlayer();
    this.initTooltips();
    this.initAnimatedCounter();
    this.initContactsMap();
};

// Initialize device check
application.prototype.initTouch = function () {
    if ('ontouchstart' in document.documentElement) {
        $('html').addClass('touch');
    }
};

// Initialize disable scroll
application.prototype.disableScroll = function () {
    const body = document.body;
    const fixBlocks = document?.querySelectorAll('.fixed-block');
    const paddingOffset = `${(window.innerWidth - body.offsetWidth)}px`;

    document.documentElement.style.scrollBehavior = 'none';
    fixBlocks.forEach(el => { el.style.paddingRight = paddingOffset; });
    body.style.paddingRight = paddingOffset;
    body.classList.add('dis-scroll');
};

// Initialize enable scroll
application.prototype.enableScroll = function () {
    const body = document.body;
    const fixBlocks = document?.querySelectorAll('.fixed-block');
    fixBlocks.forEach(el => { el.style.paddingRight = '0px'; });
    body.style.paddingRight = '0px';
    body.classList.remove('dis-scroll');
};

// Initialize burger-menu
application.prototype.initBurger = function () {
    const body = document?.querySelector('body');
    const burger = document?.querySelector('[data-menu-spoiler]');
    const menu = document?.querySelector('[data-menu]');

    burger?.addEventListener('click', (e) => {
        burger?.classList.toggle('active');
        menu?.classList.toggle('active');

        if (menu?.classList.contains('active')) {
            burger?.setAttribute('aria-expanded', 'true');
            burger?.setAttribute('aria-label', 'Закрыть меню');
            this.disableScroll();
        } else {
            burger?.setAttribute('aria-expanded', 'false');
            burger?.setAttribute('aria-label', 'Открыть меню');
            this.enableScroll();
        }
    });

    $(window).on('resize', function () {
        setMenuClose();
    });

    $(document).on('keyup', function (e) {
        if (e.key == 'Escape') {
            setMenuClose();
        }
    });

    $(document).on('click', function (e) {
        if ($('.overlay').is(e.target)) {
            setMenuClose();
        }
    });

    function setMenuClose() {
        burger?.setAttribute('aria-expanded', 'false');
        burger?.setAttribute('aria-label', 'Открыть меню');
        burger?.classList.remove('active');
        menu?.classList.remove('active');
        body?.classList.remove('overflow-hidden');
        $('.overlay').remove();
        return application.prototype.enableScroll();
    }
};

// Initialize overlay element
application.prototype.initOverlay = function () {
    if($('[data-overlay]').length) {
        const body = $('body');
        const triggerEl = $('[data-overlay]');

        $(triggerEl).on('click', function () {
            body.addClass('overflow-hidden');
            $("<div class='overlay'></div>").insertAfter($(this));
        });

        $(document).on('click', function (e) {
            if ($('.overlay').is(e.target)) {
                setTargetAction()
            }
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                setTargetAction()
            }
        });
        
        function setTargetAction() {
            body.removeClass('overflow-hidden');
            $('.overlay').remove();
            return application.prototype.enableScroll();
        }
    }
};

// Initialize custom fancy behavior
application.prototype.initFancyBehavior = function () {
    const body = $('body');
    const fancybox = $('[data-fancybox]');
    const burger = $('[data-menu-spoiler]');
    const menu = $('[data-menu]');

    fancybox.on('click', function () {
        let currentSrc = $(this).data('src');

        menu.removeClass('active');
        burger.attr('aria-expanded', 'false');
        burger.attr('aria-label', 'Открыть меню');
        $('.overlay').remove();
        $('.overlay-transparent').remove();

        $('.modal').not(currentSrc).closest('.fancybox__container.is-animated').click();
    });

    $(document).on('click', function (e) {
        if ($('.fancybox__slide.is-selected.has-inline').is(e.target) || $('.fancybox__slide .carousel__button.is-close').is(e.target)) {
            body.removeClass('overflow-hidden');
            return application.prototype.enableScroll();
        }
    });
};

// Initialization basic slider
application.prototype.initBasicSlider = function () {
    if ($('.basic-slider-wrap').length) {
        const slider = $('[data-basic-slider]');
        let spaceBetweenDesktop = 20;

        slider.each(function (i) {
            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-slider-wrap-' + i);

            const basicSliderSetting = {
                slidesPerView: 'auto',
                slidesPerGroup: 1,
                spaceBetween: 16,
                direction: 'horizontal',
                navigation: {
                    nextEl: '.basic-slider-wrap-' + i + ' .swiper-button-next',
                    prevEl: '.basic-slider-wrap-' + i + ' .swiper-button-prev',
                },
                pagination: {
                    el: '.basic-slider-wrap-' + i + ' .swiper-pagination',
                    type: 'bullets',
                },
                breakpoints: {
                    992: {
                        spaceBetween: 32
                    },
                }
            };

            basicSlider = new Swiper('.basic-slider-wrap-' + i + ' .basic-slider', basicSliderSetting);
        });
    }
};

// Initialize sliders
application.prototype.initSliders = function () {
    if ($('[data-index-fs-categories-slider]').length) {
        const sliderEl = $('[data-index-fs-categories-slider]');
        let slider = null;

        sliderEl.each(function (i) {
            const sliderSetting = {
                autoplay: {
                    delay: 1,
                    disableOnInteraction: false
                },
                freeMode: true,
                freeModeMomentum: false,
                loop: true,
                slidesPerView: 'auto',
                spaceBetween: 0,
                speed: 12000
            };

            slider = new Swiper('.index-fs-categories-slider', sliderSetting);
        });
    }
    if ($('[data-production-slider]').length) {
        const sliderEl = $('[data-production-slider]');
        let slider = null;

        sliderEl.each(function (i) {
            const sliderSetting = {
                loop: true,
                slidesPerView: 'auto',
                spaceBetween: 16,
                pagination: {
                    el: ".production-slider .swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".production-slider .swiper-button-next",
                    prevEl: ".production-slider .swiper-button-prev",
                },
                breakpoints: {
                    992: {
                        slidesPerView: 2,
                        spaceBetween: 32,
                        initialSlide: 2
                    }
                }
            };

            slider = new Swiper('.production-slider', sliderSetting);
        });
    }
    if ($('[data-news-slider]').length) {
        const sliderEl = $('[data-news-slider]');
        let slider = null;

        sliderEl.each(function (i) {
            const sliderSetting = {
                slidesPerView: 1,
                spaceBetween: 40,
                navigation: {
                    nextEl: "[data-news-slider] .swiper-button-next",
                    prevEl: "[data-news-slider] .swiper-button-prev",
                },
                breakpoints: {
                    992: {
                        spaceBetween: 100,
                    }
                }
            };

            slider = new Swiper('[data-news-slider]', sliderSetting);
        });
    }
};

// Initialize video block with custom controls
application.prototype.initVideoPlayer = function () {
    if ($('[data-video]').length) {
        let videoPlayer = $('[data-video-player]');

        videoPlayer.on('click', function (i) {
            let $this = this;
            let videoCover = $(this).siblings('[data-video-cover]');
            let videoContainer = $(this).closest('[data-video]');
            let isPlaying = $this.currentTime > 0 && !$this.paused && !$this.ended && $this.readyState > $this.HAVE_CURRENT_DATA;

            if (!isPlaying) {
                $this.play();
                videoCover.addClass('video-cover--hidden');
                videoContainer.addClass('video-is-playing')
            } else {
                $this.pause();
                $this.currentTime = 0;
                videoCover.removeClass('video-cover--hidden');
                videoContainer.removeClass('video-is-playing')
            }
        });
    }
};

// Initialize tooltips
application.prototype.initTooltips = function () {
    if ($(".tooltip").length) {
        tippy(".tooltip", {
            allowHTML: true,
            trigger: "mouseenter click",
        });
    }
};

// Initialize animated counter
application.prototype.initAnimatedCounter = function () {
    if ($('.animated-counter').length) {
        $('.animated-counter').each(function (i) {
            let
                counter = document.querySelectorAll('.animated-counter'),
                startValue = parseInt(counter[i].dataset.startValue),
                value = parseInt(counter[i].dataset.value),
                valueVal = {
                    val: value
                },
                k = (value * 0.01),
                duration = null;

            if (k > 100) {
                duration = 2;
            } else if (k > 10 && k < 100) {
                duration = 1.5;
            } else if (k < 10) {
                duration = 1;
            }

            gsap.from(valueVal, {
                duration: duration,
                ease: 'expo.inOut',
                val: startValue,
                roundProps: 'val',
                onUpdate: function() {
                    counter[i].innerText = format_number(valueVal.val);
                }
            });
        });

        function format_number(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        };
    }
};

// Initialization contacts map
application.prototype.initContactsMap = function () {
    if ($('.contacts-map').length) {
        ymaps.ready(init);

        let map,
            placemark,
            mapItem = $('.contacts-map-content');

        function init () {
            mapItem.each(function (i) {
                mapItem.eq(i).attr('id', 'contactsMap' + i);

                let coordX = $(this).data('x'),
                    coordY = $(this).data('y'),
                    hint = $(this).data('hint'),
                    zoomControl = new ymaps.control.ZoomControl({
                        options: {
                            size: 'large',
                            float: 'none',
                            position: {
                                top: 50,
                                right: 10,
                                left: 'auto',
                            },
                        }
                    });

                // Параметры карты можно задать в конструкторе.
                map = new ymaps.Map(
                    // ID DOM-элемента, в который будет добавлена карта.
                    'contactsMap' + i,
                    // Параметры карты.
                    {
                        // Географические координаты центра отображаемой карты.
                        center: [
                            coordX,
                            coordY
                        ],
                        // Масштаб.
                        zoom: 15,
                        controls: ['fullscreenControl'],
                    }, {
                        // Поиск по организациям.
                        searchControlProvider: 'yandex#search'
                    }
                );

                placemark = new ymaps.Placemark([coordX, coordY]);

                map.geoObjects.add(placemark);
                map.controls.add(zoomControl);
            });
        }
    }
};