<?
$request = $_SERVER['REQUEST_URI'];
$searchIndex = '/index.php';
$searchSubcategory = '/catalog-category2.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#111111">

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">

    <title>3Rzip швейная фурнитура в Москве: купить оптом молнии, застежки, бегунок - металлические и пластиковые</title>

    <link rel="preload" href="fonts/SFPro/SFProDisplay-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/SFPro/SFProDisplay-Medium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/SFPro/SFProDisplay-Bold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/SFPro/SFProDisplay-Heavy.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Unbounded/Unbounded-Bold.ttf" as="font" type="font/ttf" crossorigin>

    <link rel="stylesheet" href="css/main.css" type="text/css">

    <?/* Подключение библиотек */?>
    <script defer src="js/jquery.js"></script>                  <!-- jquery -->
    <script defer src="js/fancybox.umd.js"></script>            <!-- fancybox -->
    <script defer src="js/popper.js"></script>                  <!-- popper -->
    <script defer src="js/swiper-bundle.js"></script>           <!-- swiper -->
    <script defer src="js/gsap.js"></script>                    <!-- gsap -->
    <script defer src="js/tippy-bundle.umd.js"></script>        <!-- tippy -->

	<script defer src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>

    <script defer src="js/main.js"></script>
</head>

<body
    class="
        <? if(strpos($request, $searchIndex)): ?>index<?endif;?>
        <? if(strpos($request, $searchSubcategory)): ?>has-subcategory<?endif;?>
    "
>
    <header class="header">
        <div class="container header-container header-nav-container">
            <a class="header-logo logo" href="javascript:;">
                <img
                        loading="lazy"
                        class="image"
                        src="img/logo-bg.png"
                        width="94"
                        height="80"
                        alt="Амперкин - выбор профессионалов"
                >
            </a>
            <div class="header-menu">
                <ul class="list-reset header-menu-section">
                    <li class="header-menu-section__item">
                        <a class="header-menu-section__link" href="javascript:;">Главная страница</a>
                    </li>
                    <li class="header-menu-section__item">
                        <a class="header-menu-section__link" href="javascript:;">Продукция 3R</a>
                    </li>
                    <li class="header-menu-section__item">
                        <a class="header-menu-section__link" href="javascript:;">О производстве</a>
                    </li>
                    <li class="header-menu-section__item">
                        <a class="header-menu-section__link" href="javascript:;">Сертификаты</a>
                    </li>
                    <li class="header-menu-section__item">
                        <a class="header-menu-section__link" href="javascript:;">Новости</a>
                    </li>
                    <li class="header-menu-section__item">
                        <a class="header-menu-section__link" href="javascript:;">Контакты</a>
                    </li>
                </ul>
                <div class="header-menu-action">
                    <a class="btn-reset btn header-menu-action__item" href="javascript:;">
                        <svg class="icon icon-fill">
                            <use href="img/i_home.svg#i_home"></use>
                        </svg>
                    </a>
                    <a class="btn-reset btn header-menu-action__item" href="javascript:;">
                        <svg class="icon icon-fill">
                            <use href="img/i_home.svg#i_home"></use>
                        </svg>
                    </a>
                    <a class="btn-reset btn header-menu-action__item" href="javascript:;">
                        <svg class="icon icon-fill">
                            <use href="img/i_home.svg#i_home"></use>
                        </svg>
                    </a>
                    <button
                            class="btn-reset btn header-menu-action__item header-menu-action__burger"
                            type="button"
                            aria-label="Открыть меню"
                            aria-expanded="false"
                            data-menu-spoiler
                    >
                        <svg class="icon icon-fill">
                            <use href="img/i_menu.svg#i_menu"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <main class="main">