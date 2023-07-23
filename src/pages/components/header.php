<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#111111">

    <title>TITLE</title>

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

    <?/* Подключение библиотек (отдельно)*/?>
    <script defer src="js/jquery.js"></script>    <!-- jquery -->
    <script defer src="js/jquery.maskedinput.js"></script>    <!-- maskedinput -->
    <script defer src="js/jquery.validate.js"></script>    <!-- validate -->
    <script defer src="js/messages_ru.js"></script>    <!-- validate -->
    <script defer src="js/popper.js"></script>    <!-- popper -->
    <script defer src="js/swiper-bundle.js"></script>    <!-- swiper -->
    <script defer src="js/tippy-bundle.umd.js"></script>    <!-- tippy -->
    <script defer src="js/fancybox.umd.js"></script>    <!-- fancybox -->
    <script defer src="js/select2.js"></script>    <!-- select2 -->

	<?/* Подключение библиотек (объединённо)
    <script defer src="js/libs.min.js"></script> */?>

    <script defer src="js/main.js"></script>
</head>

<? if (strpos($_SERVER["REQUEST_URI"], "card-product.php")) : ?>
<body class="card-product-page">
<? else : ?>
<body>
<? endif; ?>
    <header class="header header-transparent dark-bg fixed-block">
        <div class="container header-container header-nav-container">
            <div class="header-logo">
                <a class="logo logo-dark" href="javascript:;">
                    <img
                        loading="lazy"
                        class="image"
                        src="img/logo-dark.svg"
                        width="71"
                        height="56"
                        alt="Амперкин - выбор профессионалов"
                    >
                    <span class="logo-label">Каждой одежке<br>по&nbsp; <span class="logo-highlighted">3R</span> &nbsp;застежке!</span>
                </a>
                <a class="logo logo-light" href="javascript:;">
                    <img
                        loading="lazy"
                        class="image"
                        src="img/logo-light.svg"
                        width="71"
                        height="56"
                        alt="Амперкин - выбор профессионалов"
                    >
                    <span class="logo-label">Каждой одежке<br>по&nbsp; <span class="logo-highlighted">3R</span> &nbsp;застежке!</span>
                </a>
            </div>

            <div class="header-search">
                <form id="" class="form" method="" action="javascript:;">
                    <div class="input-wrapper input-search-wrapper">
                        <input
                                class="input-reset input input-search"
                                type="search"
                                name="Поиск"
                                placeholder="Поиск по каталогу..."
                                autocomplete="off"
                        >
                        <button class="btn-reset btn btn-link input-delete-btn">
                            <svg class="icon btn__icon icon-xs">
                                <use href="img/sprite.svg#cross"></use>
                            </svg>
                        </button>
                        <button class="btn-reset btn btn-primary input-search-btn input-search-btn--square" type="submit">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#search"></use>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>

            <div class="header-contacts">
                <div class="header-contacts__tel">
                    <?/* second status + class="off" */?>
                    <span class="header-contacts__status on">Сейчас работаем</span>
                    <a class="header-contacts__number" href="tel:+74951183770">+7 (495) 118-37-70</a>
                </div>
            </div>

			<div class="header-profile not-logged">
                <button class="btn-reset btn btn-primary">
                    <svg class="icon btn__icon">
                        <use href="img/sprite.svg#call-calling"></use>
                    </svg>
                    <span class="btn__text">Позвоните мне</span>
                </button>
                <button class="btn-reset btn btn-b-light btn-square">
                    <svg class="icon btn__icon">
                        <use href="img/sprite.svg#search"></use>
                    </svg>
                </button>
            </div>

            <div class="header-catalog">
                <div class="header-catalog-preview">
                    <a class="header-catalog-preview__item" href="javascript:;">Продукция</a>
                    <a class="header-catalog-preview__item" href="javascript:;">о Производстве</a>
                    <a class="header-catalog-preview__item" href="javascript:;">доставка и оплата</a>
                    <a class="header-catalog-preview__item" href="javascript:;">Новости</a>
                    <a class="header-catalog-preview__item" href="javascript:;">Контакты</a>
                </div>
            </div>

            <div class="header-mobile-menu">
                <button
                        class="btn-reset burger"
                        aria-label="Открыть меню"
                        aria-expanded="false"
                        data-menu-spoiler
                        data-overlay
                >
                    <svg class="icon">
                        <use href="img/sprite.svg#burger"></use>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <div class="mobile-menu" data-menu>
        <div class="mobile-menu-close" data-menu-close>
            <svg class="icon">
                <use href="img/sprite.svg#cross"></use>
            </svg>
        </div>

        <div class="mobile-menu__item">
            поиск
        </div>

        <ul class="list-reset mobile-menu-list">
            <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">доставка</a></li>
            <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">оплата</a></li>
            <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">Гарантия</a></li>
            <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">Акции</a></li>
            <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">Распродажа</a></li>
            <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">Контакты</a></li>
        </ul>

        <div class="mobile-menu-footer">
            <div class="mobile-menu__item mobile-menu-login">
                <button class="btn-reset btn btn-b-light" data-fancybox data-src="#modal-auth">
                    <span class="btn__text">Войти</span>
                </button>
                <button class="btn-reset btn btn-b-dark" data-fancybox data-src="#modal-reg">
                    <span class="btn__text">Регистрация</span>
                </button>
            </div>

            <div class="mobile-menu__item mobile-menu-contacts">
                <a class="mobile-menu-contacts__number" href="tel:+74951183770">+7 (111) 111-11-11</a>
                <a class="link-dashed link-gray mobile-menu-contacts__call" href="javascript:;">заказать звонок</a>
            </div>
        </div>
    </div>

    <main class="main">