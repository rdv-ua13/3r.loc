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
    /*this.initHeaderScroll();*/
    this.initBurger();
    this.initOverlay();
    this.initFancyBehavior();
    /*this.initTabs();
    this.initBasicTabs();*/
    this.initSwitchContent();
    /*this.initPasswordSwitcher();*/
    this.initBasicSlider();
    this.initBasicGallerySlider();
    this.initSliders();
    /*this.initMiniSlider();
    this.initSwiperTabs();
    this.initSwiperBasicTabs();
    this.initTagbarSlider();*/
    /*this.initSelect2();
    this.setStaticStarRating();
    this.setVisibleStarRatingGrade();*/
    this.initTooltips();
    this.initMaskedInput();
    this.initDeleteTrigger();
    this.initInputSearchBehavior();
    /*this.initSearchResBehavior();
    this.initCatalogSidebarFilterViewSwitcher();
    this.initCheckedRadioInsurances();
    this.initCatalogSidebarFilterCheckedTags();
    this.initCatalogSidebarFilter();
    this.initCatalogSidebarSortOptionsContent();
    this.initCatalogSidebarApplyFilter();*/
    this.initCheckall();
};

// Initialize device check
application.prototype.initTouch = function () {
    if ('ontouchstart' in document.documentElement) {
        $('html').addClass('touch');
    }
}

// Initialize header scroll
application.prototype.initHeaderScroll = function () {
    $(window).scroll(function () {
        setHeaderScroll();
    });
    setHeaderScroll();

    function setHeaderScroll() {
        if ($(window).scrollTop() > 125) {
            $('.header').addClass('scrolled');
        } else {
            $('.header').removeClass('scrolled');
        }
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

// Initialize tabs
application.prototype.initTabs = function () {
    if ($('.tabs').length) {
        const tabsContainer = $('.tabs-container');
        let currentSelected = 0;
        let currentTabBlockId = null;

        setSelectedTab();
        $(window).on('resize', setSelectedTab());

        $('.tabs-item').on('click', function () {
            currentTabBlockId = $(this).closest(tabsContainer).data('tab');

            $(".tabs-container[data-tab='" + currentTabBlockId + "']").find('.tabs-trigger').removeClass('selected');
            $(this).find('.tabs-trigger').removeClass('notice').addClass('selected');

            currentSelected = $(this).find(".tabs-trigger").data("target");
            $(".tabs-content[data-tab-content='" + currentTabBlockId + "']").find('.tabs-content__panel').removeClass('active');
            $(".tabs-content[data-tab-content='" + currentTabBlockId + "']").find(".tabs-content__panel[data-id='" + currentSelected + "']").addClass('active');
        });

        function setSelectedTab () {
            if (window.matchMedia('(min-width: 992px)').matches) {
                $('.tabs-trigger').removeClass('selected');
                $('.tabs-trigger.desktop-first-elem').addClass('selected');
                $('.tabs-content__panel').removeClass('active');
                $('.tabs-content__panel.desktop-first-elem').addClass('active');
            } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                $('.tabs-trigger').removeClass('selected');
                $('.tabs-trigger.mobile-first-elem').addClass('selected');
                $('.tabs-content__panel').removeClass('active');
                $('.tabs-content__panel.mobile-first-elem').addClass('active');
            }
        }
    }
};

// Initialize basic tabs
application.prototype.initBasicTabs = function () {
    if ($('.basic-tabs').length) {
        const tabsContainer = $('.basic-tabs-container');
        let currentSelected = 0;
        let currentTabBlockId = null;

        $('.basic-tabs-item').on('click', function () {
            currentTabBlockId = $(this).closest(tabsContainer).data('tab');

            $(".basic-tabs-container[data-tab='" + currentTabBlockId + "']").find('.basic-tabs-trigger').removeClass('selected');
            $(this).find('.basic-tabs-trigger').removeClass('notice').addClass('selected');

            currentSelected = $(this).find(".basic-tabs-trigger").data("target");
            $(".basic-tabs-content[data-tab-content='" + currentTabBlockId + "']").find('.basic-tabs-content__panel').removeClass('active');
            $(".basic-tabs-content[data-tab-content='" + currentTabBlockId + "']").find(".basic-tabs-content__panel[data-id='" + currentSelected + "']").addClass('active');
        });
    }
};

// Initialize switch content
application.prototype.initSwitchContent = function () {
    const switchContent = $('.switch-content');

    switchContent.on('click', function () {
        if($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        } else {
            $(this).addClass('selected');
        }
    });
};

// Initialize password-switcher
application.prototype.initPasswordSwitcher = function () {
    if ($('input[type=password]').length) {
        $(document).on('click', 'input[data-password-switcher]', function(){
            if ($(this).is(':checked')) {
                $(this).closest('.form__field').find('input[data-password-target]').attr('type', 'text');
                $(this).closest('.form__input-btn').addClass('show');
            } else {
                $(this).closest('.form__field').find('input[data-password-target]').attr('type', 'password');
                $(this).closest('.form__input-btn').removeClass('show');
            }
        });
    }
};

// Initialize basic slider
application.prototype.initBasicSlider = function () {
    if ($('.basic-slider-wrap').length) {
        const slider = $('[data-basic-slider]');

        slider.each(function (i) {
            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-slider-wrap-' + i);

            const basicSliderSetting = {
                slidesPerView: 'auto',
                slidesPerGroup: 1,
                spaceBetween: 12,
                direction: 'horizontal',
                navigation: {
                    nextEl: '.basic-slider-wrap-' + i + ' .swiper-button-next',
                    prevEl: '.basic-slider-wrap-' + i + ' .swiper-button-prev',
                },
            };
            let basicSlider = new Swiper('.basic-slider-wrap-' + i + ' .basic-slider.basic-slider-desktop', basicSliderSetting);

            reinitSlider();
            $(window).on("resize", reinitSlider);

            function reinitSlider() {
                if (window.matchMedia("(min-width: 992px)").matches) {
                    basicSlider = null;
                    basicSlider = new Swiper('.basic-slider-wrap-' + i + ' .basic-slider.basic-slider-desktop', basicSliderSetting);
                } else if (window.matchMedia("(max-width: 991.98px)").matches) {
                    basicSlider = null;
                    basicSlider = new Swiper('.basic-slider-wrap-' + i + ' .basic-slider.basic-slider-mobile', basicSliderSetting);
                }
            }
        });
    }
};

// Initialize basic gallery slider
application.prototype.initBasicGallerySlider = function () {
    if ($('.basic-slider-wrap').length) {
        const slider = $('[data-basic-gallery-slider]');

        slider.each(function (i) {
            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-gallery-slider-wrap-' + i);

            const basicGallerySliderSetting = {
                slidesPerView: 'auto',
                slidesPerGroup: 1,
                spaceBetween: 8,
                direction: 'horizontal',
                navigation: {
                    nextEl: '.basic-gallery-slider-wrap-' + i + ' .swiper-button-next',
                    prevEl: '.basic-gallery-slider-wrap-' + i + ' .swiper-button-prev',
                },
                breakpoints: {
                    992: {
                        spaceBetween: 32,
                    },
                }
            };
            let basicGallerySlider = new Swiper('.basic-gallery-slider-wrap-' + i + ' .basic-gallery-slider', basicGallerySliderSetting);
        });
    }
};

// Initialize sliders
application.prototype.initSliders = function () {
    if ($('.index-slider-wrapper').length) {
        let indexSlider = new Swiper('.index-slider', {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 0,
            direction: 'horizontal',
            navigation: {
                nextEl: '.index-slider-wrapper .swiper-button-next',
                prevEl: '.index-slider-wrapper .swiper-button-prev',
            },
            pagination: {
                el: ".index-slider-wrapper .swiper-pagination",
                type: 'bullets',
            },
            prev() {
                this.swiper.slidePrev(25)
            },
            next() {
                this.swiper.slideNext(25)
            },
        });
    }
};

// Initialize mini slider - change images on mouse movement
application.prototype.initMiniSlider = function () {
    if ($('.mini-slider').length) {
        $('.mini-slider').each(function(index, element) {
            if (!$(element).hasClass('init-slider')) {
                $(element).addClass('init-slider');
                let slideLength = $(element).find('.mini-slider__slide').length;
                for (let i = 0; i < slideLength; i++) {
                    $(element).find('.mini-slider__dots').append('<li class="mini-slider__dot"></li>');
                }
                $(element).find('.mini-slider__slide:eq(0)').find('.mini-slider__img').css('opacity', '1');
                $(element).find('.mini-slider__dots').find('.mini-slider__dot:eq(0)').addClass('mini-slider__dot--active');
                $(element).find('.mini-slider__slide').on('touchstart mouseover', function(event) {
                    if ($(window).innerWidth() > 991) {
                        let thisOp = $(element).find('.mini-slider__slide').index(this);
                        $(element).find('.mini-slider__slide').find('.mini-slider__img').css('opacity', '0');
                        $(element).find(this).find('.mini-slider__img').css('opacity', '1');

                        $(element).find('.mini-slider__dots').find('.mini-slider__dot').removeClass('mini-slider__dot--active');
                        $(element).find('.mini-slider__dots').find('.mini-slider__dot:eq(' + thisOp + ')').addClass('mini-slider__dot--active');
                        event.stopPropagation();
                        event.preventDefault();
                    }
                });
                // if has nav btns
                /*$(element).find('.mini-slider__button').on('click', function(event) {
                    event.preventDefault();
                    let $currentVisibleSlide = $(element).find('.mini-slider__img').filter(function() {
                        return $(this).css('opacity') == '1';
                    }).closest('.mini-slider__slide')
                        , slidesCount = $(element).find('.mini-slider__slide').length;

                    $(element).find('.mini-slider__img').css('opacity', '0');
                    $(element).find('.mini-slider__dots').find('.mini-slider__dot').removeClass('mini-slider__dot--active');
                    if ($(this).hasClass('mini-slider__button--prev')) {
                        let prevSlideIndex = $currentVisibleSlide.index() - 1;
                        $(element).find('.mini-slider__img:eq(' + prevSlideIndex + ')').css('opacity', '1');
                        $(element).find('.mini-slider__dots').find('.mini-slider__dot:eq(' + prevSlideIndex + ')').addClass('mini-slider__dot--active');
                    }
                    if ($(this).hasClass('mini-slider__button--next')) {
                        let nextSlideIndex = $currentVisibleSlide.index() + 1;
                        if (nextSlideIndex >= slidesCount) {
                            nextSlideIndex = 0;
                        }
                        $(element).find('.mini-slider__img:eq(' + nextSlideIndex + ')').css('opacity', '1');
                        $(element).find('.mini-slider__dots').find('.mini-slider__dot:eq(' + nextSlideIndex + ')').addClass('mini-slider__dot--active');
                    }
                });*/
            }
        });
    }
};

// Initialize swiper tabs
application.prototype.initSwiperTabs = function () {
    if ($(".tabs-container.swiper").length) {
        const swiperTabSettings = {
            slidesPerView: "auto",
        };
        let swiperTabs = new Swiper(".tabs-container.swiper", swiperTabSettings);
    }
};

// Initialize swiper basic-tabs
application.prototype.initSwiperBasicTabs = function () {
    if ($(".basic-tabs-container.swiper").length) {
        const swiperTabSettings = {
            slidesPerView: "auto",
            spaceBetween: 8,
            breakpoints: {
                992: {
                    spaceBetween: 12,
                },
            }

        };
        let swiperTabs = new Swiper(".basic-tabs-container.swiper", swiperTabSettings);
    }
};

// Initialize tag-bar slider
application.prototype.initTagbarSlider = function () {
    if ($('[data-tag-bar-slider]').length) {
        const slider = $('[data-tag-bar-slider]');

        slider.each(function (i) {
            const tagbarSliderSetting = {
                slidesPerView: 'auto',
                spaceBetween: 8,
                direction: 'horizontal',
            };
            let tagbarSlider = null;

            slider.eq(i).addClass('tag-bar-slider-' + i);

            setCheckedSlide();
            breakpointChecker();
            $(window).on('resize', breakpointChecker);

            function breakpointChecker() {
                if (window.matchMedia('(min-width: 992px)').matches) {
                    if(tagbarSlider !== null) tagbarSlider.destroy(true, true);
                    tagbarSlider = null;
                }
                else if (window.matchMedia('(max-width: 991.98px)').matches) {
                    tagbarSlider = new Swiper('.tag-bar-slider-' + i, tagbarSliderSetting);
                }
            }

            function setCheckedSlide() {
                $('.tag-bar-slider-' + i + ' .tag-bar-slide-item input').on('click', function () {
                   if($(this).prop('checked')) {
                       $(this).closest('.tag-bar-slide-item').addClass('checked');
                   } else {
                       $(this).closest('.tag-bar-slide-item').removeClass('checked');
                   }
                });
            }
        });
    }
};

// Initialize select2 plagin
application.prototype.initSelect2 = function () {
    if ($('.js-select2').length) {
        $('.js-select2').select2();
    }
};

// Set behavior static star-rating
application.prototype.setStaticStarRating = function () {
    if ($('[data-star-rate-static]').length) {
        $('[data-star-rate-static]').each(function (i) {
            const rating = $(this).find('.star-rating');
            const value = parseInt($(this).find('.star-rating-value').data("value"));

            switch (value) {
                case 0:
                    rating.addClass('star-rating-0');
                    break;
                case 1:
                    rating.addClass('star-rating-1');
                    break;
                case 2:
                    rating.addClass('star-rating-2');
                    break;
                case 3:
                    rating.addClass('star-rating-3');
                    break;
                case 4:
                    rating.addClass('star-rating-4');
                    break;
                case 5:
                    rating.addClass('star-rating-5');
                    break;
                default:
                    rating.addClass('star-rating-0');
            }
        });
    }
};

// Set caption to star rating
application.prototype.setVisibleStarRatingGrade = function () {
    if ($('.star-rating-label').length) {
        let caption = '';

        $('[data-star-grade]').hover(
            function () {
                caption = $(this).data('star-grade');

                $(this).closest('.star-rating-label').find('.star-rating-grade').text(caption);
            },
            function () {
                $(this).closest('.star-rating-label').find('.star-rating-grade').text('');
            }
        );
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

// Mobile number mask
application.prototype.initMaskedInput = function () {
    $(".isPhone").mask("+7 (999) 999-99-99", { autoclear: false });
};

// Initialize delete trigger
application.prototype.initDeleteTrigger = function () {
    $('[data-delete-trigger]').on("click", function () {
        $(this).closest('[data-removable]').remove();
    });
};

// Initialize input-search behavior
application.prototype.initInputSearchBehavior = function () {
    if ($('.input-search').length) {
        $('.input-search').on('input', function () {
            if ($(this).val() === '' || $(this).val() === null) {
                $(this).removeClass('has-data');
                $(this).closest('.input-search-wrapper').removeClass('has-data');
            } else if ($(this).val() !== '' && $(this).val() !== null) {
                $(this).addClass('has-data');
                $(this).closest('.input-search-wrapper').addClass('has-data');
            }
        });

        $('.input-delete-btn').on('click', function () {
            $(this).closest('.input-search-wrapper').removeClass('has-data');
            $(this).closest('.input-search-wrapper').find('.input-search').val('').removeClass('has-data');
        });
    }
};

// Initialize search result behavior
application.prototype.initSearchResBehavior = function () {
    $(document).on('click', '.search-results__close', function () {
        $(this).closest('.header-search-results').removeClass('active');
        $(this).closest('.cart-quick-add').removeClass('active');
    });

    $(document).on('keyup', function (e) {
        if (e.key == 'Escape') {
            $('.search-results__close').closest('.header-search-results').removeClass('active');
            $('.search-results__close').closest('.cart-quick-add').removeClass('active');
        }
    });
};

// Initialize catalog sidebar filter view switcher
application.prototype.initCatalogSidebarFilterViewSwitcher = function () {
    if ($('[data-filter-option-view]').length && $('[data-filter-option-content]').length) {
        const viewSwitcherContainer = $('[data-filter-option]');
        const viewSwitcher = $('[data-filter-option-view]');
        const viewSwitcherContent = $('[data-filter-option-content]');

        viewSwitcher.on('click', function () {
            if (!$(this).hasClass('collapse-view-in')) {
                $(this).addClass('collapse-view-in');
                $(this).closest(viewSwitcherContainer).find(viewSwitcherContent).addClass('collapse-content-in');
            } else if ($(this).hasClass('collapse-view-in')) {
                $(this).removeClass('collapse-view-in');
                $(this).closest(viewSwitcherContainer).find(viewSwitcherContent).removeClass('collapse-content-in');
            }
        });
    }
};

// Initialize checked radio insurances
application.prototype.initCheckedRadioInsurances = function () {
    if ($('.custom-radio').length) {
        $('.custom-radio__input').on('click',function () {
            let name = $(this).attr('name');

            $('.custom-radio__input[name="' + name + '"]').removeClass('checked');
            $('.custom-radio__input[name="' + name + '"]').not(this).prop('checked', false);
            $(this).addClass('checked');
        });
    }
};

// Initialize catalog sidebar filter checked tags
application.prototype.initCatalogSidebarFilterCheckedTags = function () {
    if ($('.catalog-sidebar-filter__tag').length) {
        $('.catalog-sidebar-filter__tag input[type="checkbox"]').on('click',function () {
            $(this).closest('.catalog-sidebar-filter__tag').toggleClass('checked');
        });
    }
};

// Initialize catalog sidebar filter
application.prototype.initCatalogSidebarFilter = function () {
    if ($('[data-filter]').length && $('[data-filter-spoiler]').length) {
        const filter = $('[data-filter]');
        const filterSpoiler = $('[data-filter-spoiler]');
        const filterClose = $('[data-filter-close]');

        setResponsiveFilter();
        setCheckChangeFilter();
        $(window).on('resize', setResponsiveFilter, setCloseFilter, setCheckChangeFilter);

        filterClose.on('click', function () {
            setCloseFilter();
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                setCloseFilter();
            }
        });

        function setResponsiveFilter() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                setCloseFilter();
            } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                filterSpoiler.on('click', function () {
                    $(this).addClass('active');
                    filter.addClass('active');
                });
            }
        }

        function setCloseFilter() {
            filter.removeClass('active');
            filterSpoiler.removeClass('active');
        }

        function setCheckChangeFilter() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                filter.removeClass('has-filter');
            } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                filter.on('change', function () {
                    filter.addClass('has-filter');
                    filterSpoiler.addClass('has-filter');
                });
            }
        }
    }
};

// Initialize catalog sidebar sort options content
application.prototype.initCatalogSidebarSortOptionsContent = function () {
    $('.catalog-sidebar-filter__options-item').each(function(i, e) {
        $(e).find('.catalog-sidebar-filter__options-search .input-search').on('input', function() {
            let text = $(this).val().toLowerCase();
            $(this).parents('.catalog-sidebar-filter__options-item').find('.catalog-sidebar-filter__item .custom-checkbox__label-for').each(function() {
                if ($(this).text().toLowerCase().indexOf(text) === -1) {
                    $(this).closest('.catalog-sidebar-filter__item').fadeOut(200);
                    $(this).closest('.spoiler').addClass('height-auto');
                    $(this).closest('.catalog-sidebar-filter__options-content-item').find('.spoiler-trigger').addClass('visually-hidden');
                } else {
                    $(this).closest('.catalog-sidebar-filter__item').fadeIn(200);
                    $(this).closest('.spoiler').removeClass('height-auto');
                    $(this).closest('.catalog-sidebar-filter__options-content-item').find('.spoiler-trigger').removeClass('visually-hidden');
                }
            });
        });

        $(e).find('.catalog-sidebar-filter__options-search .input-search').siblings('.input-delete-btn').on('click', function(e) {
            e.preventDefault();

            $(this).closest('.catalog-sidebar-filter__options-content').find('.catalog-sidebar-filter__item').fadeIn(200);
            $(this).closest('.catalog-sidebar-filter__options-content').find('.spoiler').removeClass('height-auto');
            $(this).closest('.catalog-sidebar-filter__options-content').find('.spoiler-trigger').removeClass('visually-hidden');
        });
    });

};

// Initialize catalog sidebar apply filter
application.prototype.initCatalogSidebarApplyFilter = function () {
    let trigger = null;
    let coordsTrigger = null;
    let wTrigger = null;
    let hTrigger = null;
    let html = '<div class="catalog-sidebar-apply-filter">' +
        '           <div class="catalog-sidebar-apply-filter__title">Показать</div>' +
        '           <div class="catalog-sidebar-apply-filter__value">2 184 товара</div>' +
        '       </div>';

    $(document).on('click', '.catalog-sidebar-filter__item .custom-checkbox__input', '.catalog-sidebar-filter__item .custom-checkbox__label-for', function () {
        let scroll = $(window).scrollTop();
        trigger = $(this).closest('.custom-checkbox');
        coordsTrigger = trigger.offset();
        wTrigger = trigger.outerWidth();
        hTrigger = trigger.outerHeight();

        $('.catalog-sidebar-apply-filter').remove();
        $('body').append(html);
        $('.catalog-sidebar-apply-filter').css({
           'top': parseInt(coordsTrigger.top + (hTrigger * 0.5)) - scroll + 'px',
           'left': parseInt(coordsTrigger.left + (wTrigger - 2)) + 'px',
        });
        setTimeout(function () {
            $('.catalog-sidebar-apply-filter').remove();
        }, 5000);

    });

    $(window).on('scroll', function () {
        $('.catalog-sidebar-apply-filter').remove();
    });
};

// Initialize check all group
application.prototype.initCheckall = function () {
    if ($('.checkall-for').length) {
        initOnloadCheckall();
        initOnclickCheckallFor();
        initOnclickCheckallGroup();

        function initOnloadCheckall() {
            $('.checkall-for').each(function () {
                const checkallFor = $(this);
                const checkallForData = checkallFor.data('checkall-for');
                let checkallForState = false;
                let checkallGroupState = [];
                let checkallGroupCheckedState = [];

                checkallForHandling();
                compareGroupState(checkallGroupState);

                function checkallForHandling() {
                    $(".checkall-group[data-checkall-group='" + checkallForData + "']").each(function (e) {
                        let checkallGroupElem = $(this);

                        if(checkallGroupElem.is(':checked')) {
                            checkallForState = true;
                            checkallGroupState.push(true);
                        } else if(!checkallGroupElem.is(':checked')) {
                            checkallGroupState.push(false);
                        }
                    });

                    if(checkallForState === false) {
                        checkallFor.prop('checked', false);
                    } else if(checkallForState === true) {
                        checkallFor.prop('checked', true);
                    }
                }

                function compareGroupState(arr) {
                    $.each(arr, function(i) {
                        if(arr[i] === true) {
                            checkallGroupCheckedState.push('checked');
                        } else if(arr[i] === false) {
                            checkallGroupCheckedState.push('notChecked');
                        }
                    });

                    const allChecked = checkallGroupCheckedState.every(elem => elem === 'checked');

                    if(allChecked) checkallFor.removeClass('custom-checkbox__input--checkline');
                }
            });
        }

        function initOnclickCheckallFor() {
            $('.checkall-for').on('click', function (e) {
                const checkallFor = $(this);
                const checkallForData = checkallFor.data('checkall-for');

                if(checkallFor.is(':checked')) {
                    checkallFor.prop('checked', true);
                    checkallFor.removeClass('custom-checkbox__input--checkline');
                    $(".checkall-group[data-checkall-group='" + checkallForData + "']").prop("checked", true);
                } else if(!checkallFor.is(':checked')) {
                    checkallFor.prop('checked', false);
                    $(".checkall-group[data-checkall-group='" + checkallForData + "']").prop("checked", false);
                }
            });
        }

        function initOnclickCheckallGroup() {
            $('.checkall-group').on('click', function (e) {
                const checkallGroup = $(this);
                const checkallGroupData = checkallGroup.data('checkall-group');

                let checkallGroupState = [];
                let checkallGroupCheckedState = [];

                checkallGroupHandling();
                compareGroupState(checkallGroupState);

                function checkallGroupHandling() {
                    $(".checkall-group[data-checkall-group='" + checkallGroupData + "']").each(function (e) {
                        let checkallGroupElem = $(this);

                        if(checkallGroupElem.is(':checked')) {
                            checkallGroupState.push(true);
                        } else if(!checkallGroupElem.is(':checked')) {
                            checkallGroupState.push(false);
                        }
                    });
                }

                function compareGroupState(arr) {
                    $.each(arr, function(i) {
                        if(arr[i] === true) {
                            checkallGroupCheckedState.push('checked');
                        } else if(arr[i] === false) {
                            checkallGroupCheckedState.push('notChecked');
                        }
                    });

                    const allChecked = checkallGroupCheckedState.every(elem => elem === 'checked');
                    const allNotChecked = checkallGroupCheckedState.every(elem => elem === 'notChecked');

                    if(allChecked) {
                        $(".checkall-for[data-checkall-for='" + checkallGroupData + "']").prop('checked', true);
                        $(".checkall-for[data-checkall-for='" + checkallGroupData + "']").removeClass('custom-checkbox__input--checkline');
                    } else if(allNotChecked) {
                        $(".checkall-for[data-checkall-for='" + checkallGroupData + "']").prop('checked', false);
                    } else if(!allChecked && !allNotChecked) {
                        $(".checkall-for[data-checkall-for='" + checkallGroupData + "']").prop('checked', true);

                        if(!$(".checkall-for[data-checkall-for='" + checkallGroupData + "']").hasClass('custom-checkbox__input--checkline')) {
                            $(".checkall-for[data-checkall-for='" + checkallGroupData + "']").addClass('custom-checkbox__input--checkline');
                        }
                    }
                }
            });
        }
    }
};