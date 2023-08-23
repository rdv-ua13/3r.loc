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
    this.initBasicGallerySlider();
    this.initSliders();
    this.initVideoPlayer();
    this.initTooltips();
    this.initInputSearchBehavior();
    this.initCheckall();
    this.initAnimatedCounter();
    this.initDeleteTrigger();
    this.initContactsMap();
    this.initContactFormSuccess();
    this.initContactFormSuccessClicked();
    this.initCatalogContentSort();
    this.initCatalogSidebarFilterViewSwitcher();
    this.initCheckedRadioInsurances();
    this.initCatalogSidebarFilterCheckedTags();
    this.initCatalogSidebarFilter();
    this.initCatalogSidebarSortOptionsContent();
    /*this.initDropfiles();*/
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

    if ($('.nav-breadcrumbs').length) {
        let sliderNavBreadcrumbs = new Swiper('.nav-breadcrumbs', {
            spaceBetween: 0,
            slidesPerView: 'auto',
        });
    }
};



// Initialize video block with custom controls
application.prototype.initVideoPlayer = function () {
    if ($('[data-video-player]').length) {
        let videoPlayer = $('[data-video-player]');

        videoPlayer.on('click', function (i) {
            let $this = this;
            let videoCover = $(this).siblings('[data-video-cover]');
            let isPlaying = $this.currentTime > 0 && !$this.paused && !$this.ended
                && $this.readyState > $this.HAVE_CURRENT_DATA;

            $this.controls = true;

            if (!isPlaying) {
                videoCover.addClass('visually-hidden');
            } else {
                videoCover.removeClass('visually-hidden');
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

// Initialize delete trigger
application.prototype.initDeleteTrigger = function () {
    $('[data-delete-trigger]').on("click", function () {
        $(this).closest('[data-removable]').remove();
    });
};

// Initialize contacts map
application.prototype.initContactsMap = function () {
    if ($('.contacts__map').length) {
        ymaps.ready(init);

        let myMap;
        let mapItem = $('.contacts__map-content');

        function init () {
            mapItem.each(function (i) {
                mapItem.eq(i).attr('id', 'contactsMap' + i);

                let coord = $(this).data('coord'),
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
                myMap = new ymaps.Map(
                    // ID DOM-элемента, в который будет добавлена карта.
                    'contactsMap' + i,
                    // Параметры карты.
                    {
                        // Географические координаты центра отображаемой карты.
                        center: [coord],
                        // Масштаб.
                        zoom: 15,
                        controls: ['fullscreenControl'],
                    }, {
                        // Поиск по организациям.
                        searchControlProvider: 'yandex#search'
                    }
                );
                myMap.controls.add(zoomControl);
            });
        }
    }
};

// Initialize success notification when ".contact-form" is sended
application.prototype.initContactFormSuccess = function () {
    $('[data-contact-form-success]').on("click", function () {
        $(this).closest('.contact-form').find('.contact-form-success').addClass('active');
    });
};

// Initialize success notification clicked
application.prototype.initContactFormSuccessClicked = function () {
    $('[data-contact-form-success-ok]').on("click", function () {
        $(this).closest('.contact-form-success').addClass('animated');
        setTimeout(function () {
            $('.contact-form-success').removeClass('active');
        }, 990);
        setTimeout(function () {
            $('.contact-form-success').removeClass('animated');
        }, 1000);
    });
};

// Initialize catalog content sort
application.prototype.initCatalogContentSort = function () {
    if ($('.catalog-sidebar-filter-sort__options').length) {
        initCatalogContentSortSwitch();

        catalogSettingsSortSelect();
        $(window).on('resize', catalogSettingsSortSelect);

        $(document).on('click', function (e) {
            if (!$('.catalog-sidebar-filter-sort__select').is(e.target) &&
                !$('.catalog-sidebar-filter-sort__options').is(e.target) &&
                $('.catalog-sidebar-filter-sort__options').has(e.target).length === 0)
            {
                closeCatalogContentSettingsSort();
            }
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                closeCatalogContentSettingsSort();
            }
        });

        function initCatalogContentSortSwitch() {
            $('.catalog-sidebar-filter-sort__options input[type="radio"]').on('click', function () {
                if($(this).prop('checked')) {
                    $(this).closest('.catalog-sidebar-filter-sort__options').find('.catalog-sidebar-filter-sort__options-label').removeClass('active');
                    $(this).siblings('.catalog-sidebar-filter-sort__options-label').addClass('active');
                } else {
                    $(this).siblings('.catalog-sidebar-filter-sort__options-label').removeClass('active');
                }

                if (window.matchMedia('(max-width: 1199.98px)').matches) {
                    let selectPlaceholder = $('.catalog-sidebar-filter-sort__options-label.active').text();

                    $('.catalog-sidebar-filter-sort').find('.catalog-sidebar-filter-sort__select-text').text(selectPlaceholder);
                    $('.catalog-sidebar-filter-sort').find('.catalog-sidebar-filter-sort__select input').val(selectPlaceholder);
                    closeCatalogContentSettingsSort();
                }
            });
        }

        function catalogSettingsSortSelect() {
            if (window.matchMedia('(min-width: 1200px)').matches) {
                closeCatalogContentSettingsSort();
            } else if (window.matchMedia('(max-width: 1199.98px)').matches) {
                $('.catalog-sidebar-filter-sort__select').on('click', function () {
                    if (!$(this).hasClass('active')) {
                        $(this).addClass('active');
                        $(this).siblings('.catalog-sidebar-filter-sort__options').addClass('active');
                    } else if ($(this).hasClass('active')) {
                        $(this).removeClass('active');
                        $(this).siblings('.catalog-sidebar-filter-sort__options').removeClass('active');
                    }
                });
            }
        }

        function closeCatalogContentSettingsSort () {
            $('.catalog-sidebar-filter-sort__select').removeClass('active');
            $('.catalog-sidebar-filter-sort__options').removeClass('active');
        }
    }
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


// Initialize drop files
application.prototype.initDropfiles = function () {
    File.prototype.convertToBase64 = function (callback) {
        let reader = new FileReader();

        reader.onloadend = function (e) {
            callback(e.target.result, e.target.error);
        };
        reader.readAsDataURL(this);
    };

    File.prototype.convertToSvgHtml = function (callback) {
        let reader = new FileReader();

        reader.onloadend = function(e) {
            callback(e.target.result, e.target.error);
        }
        reader.readAsText(this);
    };

    const getDataImage = (file, callback) => {
        let filename = file.name,
            idxDot = filename.lastIndexOf(".") + 1,
            extFile = filename.substr(idxDot, filename.length).toLowerCase();

        if (extFile === "jpg" || extFile === "jpeg" || extFile === "png") {
            file.convertToBase64((base64) => {
                callback(base64, false);
            })
        }
        else if(extFile === "svg") {
            file.convertToSvgHtml((svgHtml) => {
                callback(svgHtml, true);
            })
        }
        else {
            alert('Неверный формат файла (Поддерживаемые форматы: .txt, .text, .doc, .docx, .pdf, .odt)');
        }
    }

    const getDataDocs = (file, callback) => {
        let filename = file.name,
            idxDot = filename.lastIndexOf(".") + 1,
            extFile = filename.substr(idxDot, filename.length).toLowerCase();

        if (extFile === "txt" || extFile === "text" || extFile === "doc" || extFile === "docx" || extFile === "pdf" || extFile === "odt") {
            file.convertToBase64((base64) => {
                callback(base64, false);
            })
        }
        else {
            alert('Неверный формат файла (Поддерживаемые форматы: .txt, .text, .doc, .docx, .pdf, .odt)');
        }
    }

    $('body').on('dragenter', '.js-drop-file', function (e) {
        e.stopPropagation();
        e.preventDefault();
    });

    $('body').on('dragover', '.js-drop-file', function (e) {
        e.stopPropagation();
        e.preventDefault();
    });

    $('body').on('drop', '.js-drop-file', function (e) {
        e.stopPropagation();
        e.preventDefault();

        let type = $(this).closest('.dropfile').attr('data-type');

        /*if (type === 'image') {
            for (let i in e.originalEvent.dataTransfer.files) {
                if (e.originalEvent.dataTransfer.files.hasOwnProperty(i)) {
                    let file = e.originalEvent.dataTransfer.files[i];
                    getDataImage(file, (data, isSvg) => {
                        appendImage($(this), data, isSvg);
                    });
                }
            }
        }
        else */if (type === 'document') {
            appendDocument($(this), e.originalEvent.dataTransfer.files);
        }
    })

    $('.js-drop-file').on('change', '.js-change-file', function () {
        let type = $(this).closest('.dropfile').attr('data-type');

        if (type === 'image') {
            for (let i in $(this)[0].files) {
                if ($(this)[0].files.hasOwnProperty(i)) {
                    let file = $(this)[0].files[i];
                    /*if (type === 'image') {
                        getDataImage(file, (data, isSvg) => {
                            appendImage($(this), data, isSvg);
                        });
                    }
                    else */if (type === 'document') {
                        getDataDocs(file, (data) => {
                            appendImage($(this), data, isSvg);
                        });
                    }
                }
            }
        }
        else if (type === 'document') {
            appendDocument($(this), $(this)[0].files);
        }
    });

    /*function appendImage($input, data, isSvg) {
        let image = '',
            $parent = $input.closest('.dropfile');

        if(isSvg) {
            image = data;
        }
        else {
            image = `<img src="` + data + `">`;
        }

        let html = `
                    <div class="dropfile-image__item">
                        ` + image + `
                        <div class="dropfile-image__remove js-remove-image">
                            <svg class="icon btn__icon 123">
                                <use href="/local/templates/main/img/sprite.svg#trash"></use>
                            </svg>
                        </div>
                        <input class="js-image" type="hidden" name="` + $parent.attr('data-input-name') + `" value='` + data + `'>
                    </div>
                    `;

        if($parent.hasClass('js-upload-cover')) {
            $parent
                .find('.dropfile-image')
                .html(html);
        }
        else if($parent.hasClass('js-upload-avatar')) {
            $parent
                .find('.dropfile-area')
                .addClass('dropfile-image')
                .html(html);
        }
        else if($parent.hasClass('js-upload-photos')) {
            $parent
                .find('.dropfile-gallery')
                .show()
                .append(html);
        }
    }*/

    function appendDocument($input, files) {
        let $parent = $input.closest('.dropfile'),
            $inputFile = $('<input/>')
                .attr('type', "file")
                .attr('multiple', true)
                .attr('name', $parent.attr('data-input-name'))
                .hide();

        $inputFile.get(0).files = files;

        for (let i in files) {
            if (files.hasOwnProperty(i)) {
                let filename = files[i].name,
                    idxDot = filename.lastIndexOf(".") + 1,
                    extFile = filename.substr(idxDot, filename.length).toLowerCase();

                if (extFile === "doc" || extFile === "docx" || extFile === "xls" ||
                    extFile === "xlsx" || extFile === "ppt" || extFile === "pptx" ||
                    extFile === "txt" || extFile === "pdf"
                ) {
                } else {
                    alert('Неверный формат файла (Поддерживаемые форматы: doc, docx, xls, xlsx, ppt, pptx, txt, pdf)');

                    return false;
                }
            }
        }

        /*let html = `
                    <div class="dropfile-attachment__item" data-removable>
                        <span>
                            <svg class="icon icon-sm">
                                <use href="img/sprite.svg#file-text"></use>
                            </svg>
                        </span>
                        <span>` + $parent.attr('data-input-name') + `</span>
                        <span data-delete-trigger>
                            <svg class="icon">
                                <use href="img/sprite.svg#cross"></use>
                            </svg>
                        </span>
                    </div>
                    `;*/

        let html = ``;
        for (let i in files) {
            if (files.hasOwnProperty(i)) {
                let filename = files[i].name;

                let $parent = $input.closest('.dropfile'),
                    $inputFile = $('<input/>')
                        .attr('type', "file")
                        .attr('multiple', true)
                        .attr('name', $parent.attr('data-input-name'))
                        .hide();

                const dataTransfer = new DataTransfer();
                dataTransfer.items.add(files[i]);
                $inputFile.get(0).files = dataTransfer.files;

                if ($inputFile.get(0).webkitEntries.length) {
                    $inputFile.get(0).dataset.file = `${dataTransfer.files[0].name}`;
                }

                console.log($inputFile.get(0).files)

                $html = $('<div/>')
                    .addClass('dropfile-documents__item')
                    .html(`<svg class="icon">
                                <use href="/local/templates/main/img/sprite.svg#file"></use>
                            </svg>
                            <div class="dropfile-documents__name">` + filename + `</div>
                            <div class="dropfile-documents__remove js-remove-document">
                                <svg class="icon">
                                    <use href="/local/templates/main/img/sprite.svg#cross"></use>
                                </svg>
                            </div>`)
                    .append($inputFile)

                $parent.find('.dropfile-documents').append($html);
            }
        }

        //$parent.find('.dropfile-documents').append(html);
    }


    $('body').on('click', '.dropfile-image', function (e) {
        e.preventDefault();
        e.stopPropagation();
    });

    $('body').on('click', '.js-remove-image', function (e) {
        e.preventDefault();
        e.stopPropagation();

        let $parent = $(this).closest('.dropfile');

        if($parent.hasClass('js-upload-photos')) {
            $(this).closest('.dropfile-image__item').remove();
        }
        else {
            let html = ``;

            if($parent.hasClass('js-upload-avatar')) {
                $parent.find('')
                html += `<div class="dropfile-descr">
                        <div class="dropfile-descr__view">
                            <svg class="icon">
                                <use href="/local/templates/main/img/sprite.svg#add-image"></use>
                            </svg>
                        </div>
                    </div>`
            }

            $(this).closest('.dropfile-image').html(html);

            if($parent.hasClass('js-upload-avatar')) {
                $parent.find('.dropfile-area').removeClass('dropfile-image');
            }
        }
    });

    $('body').on('click', '.js-remove-document', function (e) {
        e.preventDefault();
        e.stopPropagation();

        console.log('oks')
        $(this).closest('.dropfile-documents__item').remove();
    });
};