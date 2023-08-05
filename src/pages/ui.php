<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>ui page</title>

    <link rel="preload" href="fonts/Manrope/Manrope-Thin.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Manrope/Manrope-Light.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Manrope/Manrope-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Manrope/Manrope-Medium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Manrope/Manrope-Semibold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Manrope/Manrope-Bold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Manrope/Manrope-ExtraBold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/SFPro/SFProDisplay-Thin.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/SFPro/SFProDisplay-Ultralight.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/SFPro/SFProDisplay-Light.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/SFPro/SFProDisplay-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/SFPro/SFProDisplay-Medium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/SFPro/SFProDisplay-Semibold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/SFPro/SFProDisplay-Bold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/SFPro/SFProDisplay-Black.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/SFPro/SFProDisplay-Heavy.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Unbounded/static/Unbounded-ExtraLight.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Unbounded/static/Unbounded-Light.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Unbounded/static/Unbounded-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Unbounded/static/Unbounded-Medium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Unbounded/static/Unbounded-SemiBold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Unbounded/static/Unbounded-Bold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Unbounded/static/Unbounded-Black.ttf" as="font" type="font/ttf" crossorigin>

    <link rel="stylesheet" href="css/vendors.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">

	<?/* Подключение библиотек (отдельно) */?>
    <script defer src="js/jquery.js"></script>    <!-- jquery -->
    <script defer src="js/jquery.maskedinput.js"></script>    <!-- maskedinput -->
    <script defer src="js/jquery.validate.js"></script>    <!-- validate -->
    <script defer src="js/messages_ru.js"></script>    <!-- validate -->
    <script defer src="js/popper.js"></script>    <!-- popper -->
    <script defer src="js/swiper-bundle.js"></script>    <!-- swiper -->
    <script defer src="js/tippy-bundle.umd.js"></script>    <!-- tippy -->
    <script defer src="js/fancybox.umd.js"></script>    <!-- fancybox -->
    <script defer src="js/select2.js"></script>    <!-- select2 -->
    <script defer src="js/readmore.js"></script>    <!-- readmore -->
    <script defer src="js/flatpickr.min.js"></script>    <!-- flatpickr -->
    <script defer src="js/ru.js"></script>    <!-- flatpickr -->

	<?/* Подключение библиотек (объединённо)
    <script defer src="js/libs.min.js"></script> */?>

    <script defer src="js/main.js"></script>

    <style>
        body {
            margin: 0;
            padding: 16px;
            overflow-x: hidden;
            background: #F5F5F5;
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
        .color-block {
            display: inline-block;
            width: 150px;
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
            border: 1px solid var(--surface-gray2-color);
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
            fill: var(--red-color);
        }
    </style>
</head>
<body>
    <h3 class="text-center">Variables css</h3>
    <h4>Fonts</h4>
    <div style="font-family: var(--font-family-manrope);">Manrope &#8212; var(--font-family-manrope)</div>
    <div style="font-family: var(--font-family-sfpro);">SF Pro Display &#8212; var(--font-family-sfpro)</div>
    <div style="font-family: var(--font-family-unbounded);">Unbounded &#8212; var(--font-family-unbounded)</div>

    <br>
    <h4>Colors</h4>
    <div class="container-ui">
        <div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--black-color);"
                ></span>&nbsp;&#8212; var(--black-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--white-color);"
                ></span>&nbsp;&#8212; var(--white-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--red-color);"
                ></span>&nbsp;&#8212; var(--red-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--red2-color);"
                ></span>&nbsp;&#8212; var(--red2-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--green-color);"
                ></span>&nbsp;&#8212; var(--green-color)
            </div>
        </div>
        <div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--interface1-color);"
                ></span>&nbsp;&#8212; var(--interface1-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--interface2-color);"
                ></span>&nbsp;&#8212; var(--interface2-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--interface3-color);"
                ></span>&nbsp;&#8212; var(--interface3-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--interface4-color);"
                ></span>&nbsp;&#8212; var(--interface4-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--interface5-color);"
                ></span>&nbsp;&#8212; var(--interface5-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--interface6-color);"
                ></span>&nbsp;&#8212; var(--interface6-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--interface7-color);"
                ></span>&nbsp;&#8212; var(--interface7-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--interface8-color);"
                ></span>&nbsp;&#8212; var(--interface8-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--interface9-color);"
                ></span>&nbsp;&#8212; var(--interface9-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--interface10-color);"
                ></span>&nbsp;&#8212; var(--interface10-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--interface11-color);"
                ></span>&nbsp;&#8212; var(--interface11-color)
            </div>
        </div>
        <div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--surface-gray1-color);"
                ></span>&nbsp;&#8212; var(--surface-gray1-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--surface-gray2-color);"
                ></span>&nbsp;&#8212; var(--surface-gray2-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--surface-gray4-color);"
                ></span>&nbsp;&#8212; var(--surface-gray4-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--surface-gray5-color);"
                ></span>&nbsp;&#8212; var(--surface-gray5-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--surface-gray6-color);"
                ></span>&nbsp;&#8212; var(--surface-gray6-color)
            </div>
        </div>
        <div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--text-secondary-color);"
                ></span>&nbsp;&#8212; var(--text-secondary-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--fancybox-bg);"
                ></span>&nbsp;&#8212; var(--fancybox-bg)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="box-shadow: var(--card-shadow);"
                ></span>&nbsp;&#8212; box-shadow: var(--card-shadow)
            </div>
            <div class="flex-v-center">
                <span class="color-block"></span>
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="box-shadow: var(--card-shadow-hover);"
                ></span>&nbsp;&#8212; box-shadow: var(--card-shadow-hover)
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Размер заголовков</h3>
    <div class="container-ui">
        <pre>
@media (min-width: 992px) {
	h1, .h1 {
		font-size: 50px;
		line-height: 1.3;
	}
	h2, .h2 {
		font-size: 40px;
		line-height: 1.3;
	}
	h3, .h3 {
		font-size: 24px;
		line-height: 1.3;
	}
	h4, .h4 {
		font-size: 20px;
		line-height: 1.5;
	}
	h5, .h5 {
		font-size: 18px;
		line-height: 1.5;
	}
	h6, .h6 {
		font-size: 16px;
		line-height: 1.5;
	}
}
        </pre>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Отступы в проекте</h3>
    <div class="container-ui">
        <pre>
@media (min-width: 992px) {
    .gap-xs {
        margin-bottom: 12px !important;
    }
    .gap-sm {
        margin-bottom: 16px !important;
    }
    .gap-sm-plus {
        margin-bottom: 20px !important;
    }
    .gap-md {
        margin-bottom: 24px !important;
    }
    .gap-lg {
        margin-bottom: 32px !important;
    }
    .gap-lg-plus {
        margin-bottom: 40px !important;
    }
    .gap-xl {
        margin-bottom: 48px !important;
    }
    .gap-xl-plus {
        margin-bottom: 60px !important;
    }
    .gap-xxl {
        margin-bottom: 72px !important;
    }
}
        </pre>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Icons</h3>
    <div class="container-ui">
        <h4 style="min-width: 100%">
            .icon-fill - строго запрещает свойство "stroke"
            <br>
            .icon-stroke - строго запрещает свойство "fill"
        </h4>
        <div>
            <h4 class="text-center">sprite.svg#id_из_тултип</h4>
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
                      data-tippy-content="#arrow-left"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#arrow-left"></use>
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
                      data-tippy-content="#arrow-up"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#arrow-up"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#burger"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#burger"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#call-calling"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#call-calling"></use>
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
                      data-tippy-content="#chevron-left"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#chevron-left"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#chevron-right"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#chevron-right"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#chevron-up"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#chevron-up"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#circle-1"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#circle-1"></use>
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
                      data-tippy-content="#filter"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#filter"></use>
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
                <span class="tooltip"
                      data-tippy-content="#search"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#search"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#user"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#user"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#user-square"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#user-square"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#zoom-in"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#zoom-in"></use>
                    </svg>
                    <!--end ui content-->
                </span>
            </div>
            <div class="tooltip-ui-set tooltip-ui-iconset">
                <span class="tooltip"
                      data-tippy-content="#soc-logo-ok"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#soc-logo-ok"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#soc-logo-tg"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#soc-logo-tg"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#soc-logo-vk"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#soc-logo-vk"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#soc-logo-ya"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#soc-logo-ya"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#soc-logo-yt"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#soc-logo-yt"></use>
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
        <div class="col-ui">
            <div>
                <h4 class="text-center flex-1" style="max-width: 343px;">default</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 165px;">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="col-ui" style="max-width: 165px;">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 343px">mini</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 165px;">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-mini btn-primary'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-mini btn-primary">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="col-ui" style="max-width: 165px;">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-mini btn-primary active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-mini btn-primary active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 343px">primary</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 165px;">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-primary'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-primary">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="col-ui" style="max-width: 165px;">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-primary active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-primary active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 343px">secondary</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 165px;">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-secondary'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-secondary">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="col-ui" style="max-width: 165px;">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-secondary active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-secondary active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 343px">gray</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 165px;">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-gray'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-gray">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="col-ui" style="max-width: 165px;">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-gray active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-gray active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 343px">light</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 165px;">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-light'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-light">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="col-ui" style="max-width: 165px;">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-light active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-light active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-ui">
            <div>
                <h4 class="text-center flex-1" style="max-width: 343px">light border</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 165px;">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-b-light'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-b-light">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="col-ui" style="max-width: 165px;">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-b-light active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-b-light active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 343px">dark border</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 165px;">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-b-dark'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-b-dark">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="col-ui" style="max-width: 165px;">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-b-dark active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-b-dark active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 343px">btn-link</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 165px;">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-link'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-link">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="col-ui" style="max-width: 165px;">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-link active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-link active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Links</h3>
    <div class="container-ui bg-dark">
        <div class="col-ui">
            <div>
                <h4 class="text-center flex-1" style="max-width: 165px;">default</h4>
                <div class="container-ui">
                    <div class="col-ui">
                        <div>
                            <!--start ui content-->
                            <a class="link">Ссылка</a>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 165px;">link-light</h4>
                <div class="container-ui">
                    <div class="col-ui">
                        <div>
                            <!--start ui content-->
                            <a class="link-light">Ссылка</a>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 165px;">link-dark</h4>
                <div class="container-ui">
                    <div class="col-ui">
                        <div>
                            <!--start ui content-->
                            <a class="link-dark">Ссылка</a>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-ui">
            <div>
                <h4 class="text-center flex-1" style="max-width: 165px;">link-red</h4>
                <div class="container-ui">
                    <div class="col-ui">
                        <div>
                            <!--start ui content-->
                            <a class="link-red">Ссылка</a>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 165px;">link-gray</h4>
                <div class="container-ui">
                    <div class="col-ui">
                        <div>
                            <!--start ui content-->
                            <a class="link-gray">Ссылка</a>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 165px;">link-dashed</h4>
                <div class="container-ui">
                    <div class="col-ui">
                        <div>
                            <!--start ui content-->
                            <a class="link-dashed link-red">Ссылка</a>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Input</h3>
    <div>
        <div class="container-ui">
            <div class="col-ui" style="max-width: 290px">
                <!--start ui content-->
                <div class="titled-input titled-input-label">
                    <div class="input-title">Label</div>
                    <div class="input-wrapper">
                        <input
                                class="input-reset input"
                                type="text"
                                name=""
                                value=""
                                placeholder="Placeholder"
                                autocomplete="off"
                        >
                    </div>
                </div>
                <!--end ui content-->
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Checkbox / Radio buttons (для примера состояний стоит type=checkbox)</h3>
    <div>
        <div class="container-ui">
            <div class="col-ui" style="max-width: 165px;">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="default"
                    >
                        <!--start ui content-->
                        <div class="custom-checkbox">
                            <input class="custom-checkbox__input" type="checkbox">
                        </div>
                        <!--end ui content-->
                    </div>
                    <div class="tooltip"
                         data-tippy-content="disabled"
                    >
                        <!--start ui content-->
                        <div class="custom-checkbox">
                            <input class="custom-checkbox__input disabled" type="checkbox" disabled>
                        </div>
                        <!--end ui content-->
                    </div>
                    <div class="tooltip"
                         data-tippy-content="checked"
                    >
                        <!--start ui content-->
                        <div class="custom-checkbox">
                            <input class="custom-checkbox__input custom-checkbox__input--checkline" type="checkbox" checked>
                        </div>
                        <!--end ui content-->
                    </div>
                    <div class="tooltip"
                         data-tippy-content="checked"
                    >
                        <!--start ui content-->
                        <div class="custom-checkbox">
                            <input class="custom-checkbox__input" type="checkbox" checked>
                        </div>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
            <div class="col-ui" style="max-width: 165px;">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="default"
                    >
                        <!--start ui content-->
                        <div class="custom-radio">
                            <input class="custom-radio__input" type="checkbox">
                        </div>
                        <!--end ui content-->
                    </div>
                    <div class="tooltip"
                         data-tippy-content="disabled"
                    >
                        <!--start ui content-->
                        <div class="custom-radio">
                            <input class="custom-radio__input disabled" type="checkbox" disabled>
                        </div>
                        <!--end ui content-->
                    </div>
                    <div class="tooltip"
                         data-tippy-content="checked"
                    >
                        <!--start ui content-->
                        <div class="custom-radio">
                            <input class="custom-radio__input" type="checkbox" checked>
                        </div>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h4 class="text-center flex-1" style="max-width: 343px">checkbox label</h4>
        <div class="container-ui">
            <div class="col-ui" style="max-width: 165px;">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="default"
                    >
                        <!--start ui content-->
                        <span class="custom-checkbox">
                            <input id="checkbox-ui-1" class="custom-checkbox__input" type="checkbox">
                            <label for="checkbox-ui-1" class="custom-checkbox__label-for">Label</label>
                        </span>
                        <!--end ui content-->
                    </div>
                    <div class="tooltip"
                         data-tippy-content="disabled"
                    >
                        <!--start ui content-->
                        <span class="custom-checkbox">
                            <input id="checkbox-ui-2" class="custom-checkbox__input disabled" type="checkbox" disabled>
                            <label for="checkbox-ui-2" class="custom-checkbox__label-for">Label</label>
                        </span>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
            <div class="col-ui" style="max-width: 165px;">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="default"
                    >
                        <!--start ui content-->
                        <span class="custom-radio">
                            <input id="radio-ui-1" class="custom-radio__input" type="checkbox">
                            <label for="radio-ui-1" class="custom-radio__label-for">Label</label>
                        </span>
                        <!--end ui content-->
                    </div>
                    <div class="tooltip"
                         data-tippy-content="disabled"
                    >
                        <!--start ui content-->
                        <span class="custom-radio">
                            <input id="radio-ui-2" class="custom-radio__input disabled" type="checkbox" disabled>
                            <label for="radio-ui-2" class="custom-radio__label-for">Label</label>
                        </span>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h4 class="text-center flex-1" style="max-width: 343px">checkbox label + brand</h4>
        <div class="container-ui">
            <div class="col-ui" style="max-width: 165px;">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="default"
                    >
                        <!--start ui content-->
                        <span class="custom-checkbox">
                            <input id="checkbox-ui-3" class="custom-checkbox__input" type="checkbox" checked>
                            <label for="checkbox-ui-3" class="custom-checkbox__label-for">Label</label>
                            <span class="custom-checkbox__brand">
                                <svg class="icon">
                                    <use href="img/sprite.svg#burger"></use>
                                </svg>
                            </span>
                        </span>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
            <div class="col-ui" style="max-width: 165px;">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="disabled"
                    >
                        <!--start ui content-->
                        <span class="custom-checkbox">
                            <input id="checkbox-ui-4" class="custom-checkbox__input disabled" type="checkbox" disabled>
                            <label for="checkbox-ui-4" class="custom-checkbox__label-for">Label</label>
                            <span class="custom-checkbox__brand">
                                <svg class="icon">
                                    <use href="img/sprite.svg#burger"></use>
                                </svg>
                            </span>
                        </span>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
        <div class="container-ui">
            <div class="col-ui" style="max-width: 165px;">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="default"
                    >
                        <!--start ui content-->
                        <span class="custom-checkbox">
                            <input id="checkbox-ui-5" class="custom-checkbox__input" type="checkbox">
                            <label for="checkbox-ui-5" class="custom-checkbox__label-for">Label</label>
                            <span class="custom-checkbox__brand">
                                <img
                                        loading="lazy"
                                        src="img/test.png"
                                        class="image"
                                        width=""
                                        height=""
                                        alt="Изображение блока"
                                >
                            </span>
                        </span>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
            <div class="col-ui" style="max-width: 165px;">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="disabled"
                    >
                        <!--start ui content-->
                        <span class="custom-checkbox">
                            <input id="checkbox-ui-5" class="custom-checkbox__input disabled" type="checkbox" disabled>
                            <label for="checkbox-ui-5" class="custom-checkbox__label-for">Label</label>
                            <span class="custom-checkbox__brand">
                                <img
                                        loading="lazy"
                                        src="img/test.png"
                                        class="image"
                                        width=""
                                        height=""
                                        alt="Изображение блока"
                                >
                            </span>
                        </span>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <h3 class="text-center">Check all</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%; gap: 15px;">
                    <!--start ui content-->
                    <div class="custom-checkbox">
                        <input
                                class="custom-checkbox__input custom-checkbox__input--checkline checkall-for"
                                type="checkbox"
                                data-checkall-for="checkallTest"
                        >
                        all
                    </div>

                    <div class="custom-checkbox">
                        <input
                                class="custom-checkbox__input checkall-group"
                                type="checkbox"
                                data-checkall-group="checkallTest"
                        >
                        single
                    </div>
                    <div class="custom-checkbox">
                        <input
                                class="custom-checkbox__input checkall-group"
                                type="checkbox"
                                data-checkall-group="checkallTest"
                        >
                        single
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Tooltip</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    tooltip -&nbsp;
                    <!--start ui content-->
                    <span class="tooltip"
                          data-tippy-content="<div class='tooltip-content'>
                                                    <p>Принимает <a href='javascript:;'>HTML</a></p>
                                                    <p>Можно изменить trigger на 'click' в initTooltips() ->
                                                        <a href='javascript:;' style='color: red;'>trigger: 'click'</a>
                                                    </p>
                                                </div>"
                    >
                        <svg class="icon">
                            <use href="img/sprite.svg#info"></use>
                        </svg>
                    </span>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Card-list</h3>
    <h5 class="text-center">card-list--big</h5>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    <!--start ui content-->
                    <div class="card-list card-list--big">
                        <div class="card">
                            <div class="card__view">
                                <picture>
                                    <source srcset="img/card-img-1.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/card-img-1.png"
                                            class="image"
                                            width="566"
                                            height="320"
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="card__descr">
                                <div class="card__title h3">Застежки-молнии</div>
                                <div class="card__subtitle">Не подведут даже в самый ответственный момент</div>
                            </div>
                            <div class="card__more">
                                <span class="more-link">
                                    <span>Узнать больше</span>
                                    <span class="decor"><span></span></span>
                                </span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card__view">
                                <picture>
                                    <source srcset="img/card-img-2.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/card-img-2.png"
                                            class="image"
                                            width="566"
                                            height="320"
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="card__descr">
                                <div class="card__title">Пластиковая фурнитура</div>
                                <div class="card__subtitle">Останется защелкнутой, даже если рюкзак затрещит</div>
                            </div>
                            <div class="card__more">
                                <span class="more-link">
                                    <span>Узнать больше</span>
                                    <span class="decor"><span></span></span>
                                </span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card__view">
                                <picture>
                                    <source srcset="img/card-img-3.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/card-img-3.png"
                                            class="image"
                                            width="566"
                                            height="320"
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="card__descr">
                                <div class="card__title">Кнопки</div>
                                <div class="card__subtitle">Сумочка будет под надежной защитой</div>
                            </div>
                            <div class="card__more">
                                <span class="more-link">
                                    <span>Узнать больше</span>
                                    <span class="decor"><span></span></span>
                                </span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card__view">
                                <picture>
                                    <source srcset="img/card-img-4.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/card-img-4.png"
                                            class="image"
                                            width="566"
                                            height="320"
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="card__descr">
                                <div class="card__title">Ленты и шнурки</div>
                                <div class="card__subtitle">Больше не развяжутся на пробежке</div>
                            </div>
                            <div class="card__more">
                                <span class="more-link">
                                    <span>Узнать больше</span>
                                    <span class="decor"><span></span></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <br>
    <h5 class="text-center">card-list--medium</h5>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    <!--start ui content-->
                    <div class="card-list card-list--medium">
                        <div class="card">
                            <div class="card__view">
                                <picture>
                                    <source srcset="img/card-img-1.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/card-img-1.png"
                                            class="image"
                                            width="566"
                                            height="320"
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="card__descr">
                                <div class="card__title h3">Застежки-молнии</div>
                                <div class="card__subtitle">Не подведут даже в самый ответственный момент</div>
                            </div>
                            <div class="card__more">
                                <span class="more-link">
                                    <span>Узнать больше</span>
                                    <span class="decor"><span></span></span>
                                </span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card__view">
                                <picture>
                                    <source srcset="img/card-img-2.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/card-img-2.png"
                                            class="image"
                                            width="566"
                                            height="320"
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="card__descr">
                                <div class="card__title">Пластиковая фурнитура</div>
                                <div class="card__subtitle">Останется защелкнутой, даже если рюкзак затрещит</div>
                            </div>
                            <div class="card__more">
                                <span class="more-link">
                                    <span>Узнать больше</span>
                                    <span class="decor"><span></span></span>
                                </span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card__view">
                                <picture>
                                    <source srcset="img/card-img-3.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/card-img-3.png"
                                            class="image"
                                            width="566"
                                            height="320"
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="card__descr">
                                <div class="card__title">Кнопки</div>
                                <div class="card__subtitle">Сумочка будет под надежной защитой</div>
                            </div>
                            <div class="card__more">
                                <span class="more-link">
                                    <span>Узнать больше</span>
                                    <span class="decor"><span></span></span>
                                </span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card__view">
                                <picture>
                                    <source srcset="img/card-img-4.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/card-img-4.png"
                                            class="image"
                                            width="566"
                                            height="320"
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="card__descr">
                                <div class="card__title">Ленты и шнурки</div>
                                <div class="card__subtitle">Больше не развяжутся на пробежке</div>
                            </div>
                            <div class="card__more">
                                <span class="more-link">
                                    <span>Узнать больше</span>
                                    <span class="decor"><span></span></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <br>
    <h5 class="text-center">card-list--small</h5>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    <!--start ui content-->
                    <div class="card-list card-list--small">
                        <div class="card">
                            <div class="card__view">
                                <picture>
                                    <source srcset="img/card-img-1.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/card-img-1.png"
                                            class="image"
                                            width="566"
                                            height="320"
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="card__descr">
                                <div class="card__title h3">Застежки-молнии</div>
                                <div class="card__subtitle">Не подведут даже в самый ответственный момент</div>
                            </div>
                            <div class="card__more">
                                <span class="more-link">
                                    <span>Узнать больше</span>
                                    <span class="decor"><span></span></span>
                                </span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card__view">
                                <picture>
                                    <source srcset="img/card-img-2.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/card-img-2.png"
                                            class="image"
                                            width="566"
                                            height="320"
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="card__descr">
                                <div class="card__title">Пластиковая фурнитура</div>
                                <div class="card__subtitle">Останется защелкнутой, даже если рюкзак затрещит</div>
                            </div>
                            <div class="card__more">
                                <span class="more-link">
                                    <span>Узнать больше</span>
                                    <span class="decor"><span></span></span>
                                </span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card__view">
                                <picture>
                                    <source srcset="img/card-img-3.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/card-img-3.png"
                                            class="image"
                                            width="566"
                                            height="320"
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="card__descr">
                                <div class="card__title">Кнопки</div>
                                <div class="card__subtitle">Сумочка будет под надежной защитой</div>
                            </div>
                            <div class="card__more">
                                <span class="more-link">
                                    <span>Узнать больше</span>
                                    <span class="decor"><span></span></span>
                                </span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card__view">
                                <picture>
                                    <source srcset="img/card-img-4.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/card-img-4.png"
                                            class="image"
                                            width="566"
                                            height="320"
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="card__descr">
                                <div class="card__title">Ленты и шнурки</div>
                                <div class="card__subtitle">Больше не развяжутся на пробежке</div>
                            </div>
                            <div class="card__more">
                                <span class="more-link">
                                    <span>Узнать больше</span>
                                    <span class="decor"><span></span></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

</body>
</html>