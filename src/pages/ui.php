<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>ui page</title>

    <link rel="preload" href="fonts/SFPro/SFProDisplay-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/SFPro/SFProDisplay-Medium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/SFPro/SFProDisplay-Bold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/SFPro/SFProDisplay-Heavy.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Unbounded/Unbounded-Bold.ttf" as="font" type="font/ttf" crossorigin>

    <link rel="stylesheet" href="css/main.css" type="text/css">

	<?/* Подключение библиотек */?>
    <script defer src="js/jquery.js"></script>                  <!-- jquery -->
    <script defer src="js/jquery.fancybox.js"></script>         <!-- fancybox -->
    <script defer src="js/popper.js"></script>                  <!-- popper -->
    <script defer src="js/swiper-bundle.js"></script>           <!-- swiper -->
    <script defer src="js/gsap.js"></script>                    <!-- gsap -->
    <script defer src="js/tippy-bundle.umd.js"></script>        <!-- tippy -->

    <script defer src="js/main.js"></script>

    <style>
        body {
            margin: 0;
            padding: 16px;
            overflow-x: hidden;
            background: #F5F5F5;
            font-size: 16px;
        }
        h1, h2, h3, h4, h5, h6 {
            margin-bottom: 16px;
        }
        .container-ui {
            display:flex;
            flex-wrap: wrap;
            gap: 8px;
        }
        .col-ui {
            flex: 1;
            display:flex;
            flex-direction: column;
            gap: 12px;
        }
        .row-ui {
            display:flex;
            align-items:center;
            gap: 16px;
        }
        .bg-dark {
            background-color: #b8c1f0;
        }
        .text-center {
            text-align: center;
        }
        .color-wrapper {
            width: 100%;
        }
        .color-item {
            display: flex;
            align-items: center;
            gap: 4px;
            margin-bottom: 4px;
            break-inside: avoid;
        }
        .color-block {
            display: inline-block;
            min-width: 140px;
            width: 140px;
            height: 30px;
        }
        .tooltip-ui-set {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 12px;
            padding: 12px;
        }
        .tooltip-ui-set:not(:last-child) {
            margin-bottom: 20px;
        }
        .tooltip-ui-iconset {
            min-width: 320px;
            border: 1px solid var(--interface1-color);
            border-radius: 8px;
        }
        .tooltip-ui-iconset .tooltip .icon {
            min-width: 24px;
            width: 24px;
            min-height: 24px;
            height: 24px;
        }
        .tooltip-ui-iconset .tooltip .icon-free {
            min-width: 64px;
            width: auto;
            min-height: 64px;
            height: 64px;
        }
        .tooltip-ui-iconset .tooltip .icon {
            fill: var(--interface1-color);
        }
        .tooltip-ui-iconset .tooltip:hover .icon {
            fill: var(--red1-color);
        }

        @media (min-width: 768px) {
            .color-wrapper {
                column-count: 3;
                column-gap: 20px;
            }
        }
        @media (max-width: 991.98px) {}
    </style>
</head>
<body>
    <h3 class="text-center">Variables css</h3>
    <h4>Fonts</h4>
    <div style="font-family: var(--font-family-sfpro);">SF Pro Display &#8212; var(--font-family-sfpro)</div>
    <div style="font-family: var(--font-family-unbounded);">Unbounded &#8212; var(--font-family-unbounded)</div>

    <br>
    <h4>Colors</h4>
    <div class="container-ui">
        <div class="color-wrapper">
            <div class="color-item">
                <span class="color-block" style="background-color: var(--black-color);"></span>&nbsp;&#8212; var(--black-color)
            </div>
            <div class="color-item">
                <span class="color-block" style="background-color: var(--white-color); box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2);"></span>&nbsp;&#8212; var(--white-color)
            </div>

            <div class="color-item">
                <span class="color-block" style="background-color: var(--interface0-color);"
                ></span>&nbsp;&#8212; var(--interface0-color)
            </div>
            <div class="color-item">
                <span class="color-block" style="background-color: var(--interface1-color);"></span>&nbsp;&#8212; var(--interface1-color)
            </div>
            <div class="color-item">
                <span class="color-block" style="background-color: var(--interface2-color);"></span>&nbsp;&#8212; var(--interface2-color)
            </div>
            <div class="color-item">
                <span class="color-block" style="background-color: var(--interface3-color);"></span>&nbsp;&#8212; var(--interface3-color)
            </div>
            <div class="color-item">
                <span class="color-block" style="background-color: var(--interface4-color);"></span>&nbsp;&#8212; var(--interface4-color)
            </div>
            <div class="color-item">
                <span class="color-block" style="background-color: var(--interface5-color);"></span>&nbsp;&#8212; var(--interface5-color)
            </div>
            <div class="color-item">
                <span class="color-block" style="background-color: var(--interface10-color);"></span>&nbsp;&#8212; var(--interface10-color)
            </div>
            <div class="color-item">
                <span class="color-block" style="background-color: var(--interface11-color);"></span>&nbsp;&#8212; var(--interface11-color)
            </div>
            <div class="color-item">
                <span class="color-block" style="background-color: var(--interface12-color);"></span>&nbsp;&#8212; var(--interface12-color)
            </div>
            <div class="color-item">
                <span class="color-block" style="background-color: var(--interface13-color);"></span>&nbsp;&#8212; var(--interface13-color)
            </div>
            <div class="color-item">
                <span class="color-block" style="background-color: var(--interface14-color);"></span>&nbsp;&#8212; var(--interface14-color)
            </div>
            <div class="color-item">
                <span class="color-block" style="background-color: var(--interface15-color);"></span>&nbsp;&#8212; var(--interface15-color)
            </div>
            <div class="color-item">
                <span class="color-block" style="background-color: var(--interface16-color);"></span>&nbsp;&#8212; var(--interface16-color)
            </div>
            <div class="color-item">
                <span class="color-block" style="background-color: var(--interface17-color);"></span>&nbsp;&#8212; var(--interface17-color)
            </div>
            <div class="color-item">
                <span class="color-block" style="background-color: var(--interface18-color);"></span>&nbsp;&#8212; var(--interface18-color)
            </div>
            <div class="color-item">
                <span class="color-block" style="background-color: var(--interface19-color);"></span>&nbsp;&#8212; var(--interface19-color)
            </div>
            <div class="color-item">
                <span class="color-block" style="background-color: var(--interface20-color); box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2);"></span>&nbsp;&#8212; var(--interface20-color)
            </div>

            <div class="color-item">
                <span class="color-block" style="background-color: var(--red1-color);"></span>&nbsp;&#8212; var(--red1-color)
            </div>
            <div class="color-item">
                <span class="color-block" style="background-color: var(--red2-color);"></span>&nbsp;&#8212; var(--red2-color)
            </div>
            <div class="color-item">
                <span class="color-block" style="background-color: var(--red3-color);"></span>&nbsp;&#8212; var(--red3-color)
            </div>
            <div class="color-item">
                <span class="color-block" style="background-color: var(--red4-color);"></span>&nbsp;&#8212; var(--red4-color)
            </div>
            <div class="color-item">
                <span class="color-block" style="background-color: var(--red5-color);"></span>&nbsp;&#8212; var(--red5-color)
            </div>
            <div class="color-item">
                <span class="color-block" style="background-color: var(--red6-color);"></span>&nbsp;&#8212; var(--red6-color)
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Размер заголовков</h3>
    <div class="container-ui" style="gap: 32px;">
        <div>
            <pre>
@media (min-width: 992px) {
    h1, .h1 { font-size: 56px; }
    h2, .h2 { font-size: 48px; }
    h3, .h3 { font-size: 40px; }
    h4, .h4 { font-size: 32px; }
    h5, .h5 { font-size: 24px; }
    h6, .h6 { font-size: 20px; }
}
            </pre>
        </div>
        <div>
            <pre>
@media (max-width: 991.98px) {
	h1, .h1, h2, .h2 { font-size: 30px; }
	h3, .h3 { font-size: 24px; }
	h4, .h4 { font-size: 20px; }
	h5, .h5, h6, .h6 { font-size: 18px; }
}
            </pre>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Отступы в проекте</h3>
    <div class="container-ui" style="gap: 32px;">
        <div>
            <pre>
@media (min-width: 992px) {
    .gap-xxs { margin-bottom: 12px !important; }
    .gap-xs { margin-bottom: 16px !important; }
    .gap-sm { margin-bottom: 20px !important; }
    .gap-md { margin-bottom: 24px !important; }
    .gap-lg { margin-bottom: 32px !important; }
    .gap-xl { margin-bottom: 40px !important; }
    .gap-xxl { margin-bottom: 80px !important; }
}
            </pre>
        </div>
        <div>
            <pre>
@media (max-width: 991.98px) {
        .gap-xxs { margin-bottom: 8px !important; }
		.gap-xs, .gap-sm { margin-bottom: 12px !important; }
		.gap-md { margin-bottom: 16px !important; }
		.gap-lg { margin-bottom: 20px !important; }
		.gap-xl { margin-bottom: 24px !important; }
		.gap-xxl { margin-bottom: 40px !important; }
}
            </pre>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Icons</h3>
    <div class="container-ui">
        <h6 style="min-width: 100%">
            .icon-fill - строго запрещает свойство "stroke"
            <br>
            .icon-stroke - строго запрещает свойство "fill"
        </h6>
        <div>
            <h6 class="text-center">sprite.svg#id_из_тултип</h6>
            <div class="tooltip-ui-set tooltip-ui-iconset">
                <span class="tooltip"
                      data-tippy-content="#arrow-down"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#arrow-down"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#arrow-right"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#arrow-right"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#check"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#check"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#check-circle"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#check-circle"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#checkbox-rec"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#checkbox-rec"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#chevron-down"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#chevron-down"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#copy"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#copy"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#cross"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#cross"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#lock"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#lock"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#minus"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#minus"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#plus"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#plus"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#search"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#search"></use>
                    </svg>
                    <!--end ui content-->
                </span>
            </div>
            <div class="tooltip-ui-set tooltip-ui-iconset">
                <span class="tooltip"
                      data-tippy-content="#arrow-down"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/arrow-down.svg#arrow-down"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#arrow-right"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/arrow-right.svg#arrow-right"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#btn-arrow-round-light"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/btn-arrow-round-light.svg#btn-arrow-round-light"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#chevron-down"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/chevron-down.svg#chevron-down"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#chevron-down-white"
                      style="background-color: var(--interface15-color)"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/chevron-down-white.svg#chevron-down-white"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#filled-call"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/filled-call.svg#filled-call"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#filled-clock"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/filled-clock.svg#filled-clock"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#filled-mail"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/filled-mail.svg#filled-mail"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#filled-pin"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/filled-pin.svg#filled-pin"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#i_chat"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/i_chat.svg#i_chat"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#i_connection"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/i_connection.svg#i_connection"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#i_doc-flow"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/i_doc-flow.svg#i_doc-flow"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#i_home"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/i_home.svg#i_home"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#i_manager"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/i_manager.svg#i_manager"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#i_menu"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/i_menu.svg#i_menu"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#i_pin1"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/i_pin1.svg#i_pin1"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#i_scroll"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/i_scroll.svg#i_scroll"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#i_shipment"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/i_shipment.svg#i_shipment"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#i_speed-feedback"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/i_speed-feedback.svg#i_speed-feedback"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#i_stage"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/i_stage.svg#i_stage"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#i_term"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/i_term.svg#i_term"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#play-circle"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/play-circle.svg#play-circle"></use>
                    </svg>
                    <!--end ui content-->
                </span>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Buttons</h3>
    <div class="container-ui">
        <div>
            <h6 class="text-center flex-1">default</h6>
            <div class="container-ui">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="class='btn-reset btn'"
                    >
                        <!--start ui content-->
                        <button class="btn-reset btn">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-down"></use>
                            </svg>
                            <span class="btn__text">Кнопка</span>
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-down"></use>
                            </svg>
                        </button>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h6 class="text-center flex-1">primary</h6>
            <div class="container-ui">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="class='btn-reset btn btn-primary'"
                    >
                        <!--start ui content-->
                        <button class="btn-reset btn btn-primary">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-down"></use>
                            </svg>
                            <span class="btn__text">Кнопка</span>
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-down"></use>
                            </svg>
                        </button>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h6 class="text-center flex-1">secondary</h6>
            <div class="container-ui">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="class='btn-reset btn btn-secondary'"
                    >
                        <!--start ui content-->
                        <button class="btn-reset btn btn-secondary">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-down"></use>
                            </svg>
                            <span class="btn__text">Кнопка</span>
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-down"></use>
                            </svg>
                        </button>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h6 class="text-center flex-1">info</h6>
            <div class="container-ui">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="class='btn-reset btn btn-info'"
                    >
                        <!--start ui content-->
                        <button class="btn-reset btn btn-info">
                            <span class="btn-info__view">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#chevron-down"></use>
                                </svg>
                            </span>
                            <span class="btn-info__descr">
                                <span class="text-content">Контент</span>
                            </span>
                        </button>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h6 class="text-center flex-1">info gray</h6>
            <div class="container-ui">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="class='btn-reset btn btn-info btn-info--gray'"
                    >
                        <!--start ui content-->
                        <button class="btn-reset btn btn-info btn-info--gray">
                            <span class="btn-info__view">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#chevron-down"></use>
                                </svg>
                            </span>
                            <span class="btn-info__descr">
                                <span class="text-content">Контент</span>
                            </span>
                        </button>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Links</h3>
    <div class="container-ui">
        <div>
            <!--start ui content-->
            <a class="link">Ссылка</a>
            <!--end ui content-->
        </div>
        <div>
            <!--start ui content-->
            <a class="link link-tdu">Ссылка</a>
            <!--end ui content-->
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Checkbox / Radio buttons</h3>
    <div>
        <div class="tooltip-ui-set">
            <div class="tooltip"
                 data-tippy-content="default checkbox"
            >
                <!--start ui content-->
                <span class="custom-checkbox">
                        <input id="ui_checkbox_001" class="custom-checkbox__input" checked type="checkbox">
                        <label for="ui_checkbox_001" class="custom-checkbox__label-for">checkbox label</label>
                    </span>
                <!--end ui content-->
            </div>
        </div>
        <div class="tooltip-ui-set">
            <div class="tooltip"
                 data-tippy-content="default radio"
            >
                <!--start ui content-->
                <span class="custom-radio">
                        <input id="ui_radio_001" class="custom-radio__input" checked name="ui_radio" type="radio">
                        <label for="ui_radio_001" class="custom-radio__label-for">radio label</label>
                    </span>
                <span class="custom-radio">
                        <input id="ui_radio_002" class="custom-radio__input" name="ui_radio" type="radio">
                        <label for="ui_radio_002" class="custom-radio__label-for">radio label</label>
                    </span>
                <!--end ui content-->
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Inputs</h3>
    <div class="flex-start-start">
        <div class="tooltip" style="align-self: flex-start;" data-tippy-content="default">
            <!--start ui content-->
            <div class="input-wrapper">
                <input
                        class="input-reset input"
                        type="text"
                        name=""
                        value=""
                        placeholder="Placeholder"
                        autocomplete="off"
                >
                <div class="input-error-msg">Сообщение об ошибке (без класса ".error" для ".input" display:none)</div>
            </div>
            <!--end ui content-->
        </div>
        <div class="tooltip" style="align-self: flex-start;" data-tippy-content="error">
            <!--start ui content-->
            <div class="input-wrapper">
                <input
                        class="input-reset input error"
                        type="text"
                        name=""
                        value=""
                        placeholder="Placeholder"
                        autocomplete="off"
                >
                <div class="input-error-msg">Сообщение об ошибке</div>
            </div>
            <!--end ui content-->
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Popups</h3>
    <div class="container-ui">
        <!--start ui content-->
        <button
                class="btn-reset btn"
                type="button"
                data-fancybox
                data-src="#modal_request"
        >
            <span class="text-content">Popup: Форма</span>
        </button>
        <!--end ui content-->
        <!--start ui content-->
        <button
                class="btn-reset btn"
                type="button"
                data-fancybox
                data-src="#modal_details"
        >
            <span class="text-content">Popup: Подробнее</span>
        </button>
        <!--end ui content-->
        <!--start ui content-->
        <button
                class="btn-reset btn"
                type="button"
                data-fancybox
                data-src="#modal_standard_spiral_zippers"
        >
            <span class="text-content">Popup: Стандартные спиральные молнии</span>
        </button>
        <!--end ui content-->
        <!--start ui content-->
        <button
                class="btn-reset btn"
                type="button"
                data-fancybox
                data-src="#modal_reversible_spiral_zippers"
        >
            <span class="text-content">Popup: Реверсивные спиральные молнии</span>
        </button>
        <!--end ui content-->
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

	<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/modals.php"); ?>
</body>
</html>