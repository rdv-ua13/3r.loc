<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="gap-xxl">
    <div class="index-fs" style="background-image: url('img/index-bg1.png');">
        <div class="gap-xl index-fs-header-wrapper bg-blur bg-blur-15">
            <div class="container">
                <div class="index-fs-header">
                    <div class="index-fs-header__item">
                        <h1 class="index-fs-header__title text-uppercase">ШВЕЙНАЯ ФУРНИТУРА российского производства</h1>
                    </div>
                    <div class="index-fs-header__item">
						<?/*<div class="basic-slider-wrap">
                            <div class="index-fs-header-video-slider basic-slider nav-out swiper" data-basic-slider>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <iframe
                                                width="720"
                                                height="405"
                                                src="https://rutube.ru/play/embed/042e56c98f29a75106e1f40f3bf5ce78/"
                                                frameBorder="0"
                                                allow="clipboard-write; autoplay"
                                                webkitAllowFullScreen
                                                mozallowfullscreen
                                                allowFullScreen
                                        ></iframe>
                                    </div>
                                    <div class="swiper-slide">
                                        <iframe
                                                width="100%"
                                                height="auto"
                                                src="https://rutube.ru/play/embed/2011970b9d6d4e2b8949679830e19dc1/"
                                                frameBorder="0"
                                                allow="clipboard-write;"
                                                webkitAllowFullScreen
                                                mozallowfullscreen
                                                allowFullScreen
                                        ></iframe>
                                    </div>
                                    <div class="swiper-slide">
                                        <iframe
                                                width="720"
                                                height="405"
                                                src="https://rutube.ru/play/embed/042e56c98f29a75106e1f40f3bf5ce78/"
                                                frameBorder="0"
                                                allow="clipboard-write; autoplay"
                                                webkitAllowFullScreen
                                                mozallowfullscreen
                                                allowFullScreen
                                        ></iframe>
                                    </div>
                                    <div class="swiper-slide">
                                        <iframe
                                                width="100%"
                                                height="auto"
                                                src="https://rutube.ru/play/embed/2011970b9d6d4e2b8949679830e19dc1/"
                                                frameBorder="0"
                                                allow="clipboard-write;"
                                                webkitAllowFullScreen
                                                mozallowfullscreen
                                                allowFullScreen
                                        ></iframe>
                                    </div>
                                </div>
                                <div class="swiper-navigation">
                                    <div class="swiper-button-next">
                                        <button class="btn-reset btn btn-scale">
                                            <svg class="icon icon-fill">
                                                <use href="img/arrow-right.svg#arrow-right"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="swiper-button-prev">
                                        <button class="btn-reset btn btn-scale">
                                            <svg class="icon icon-fill">
                                                <use href="img/arrow-right.svg#arrow-right"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>*/?>


						<div class="video-wrapper">
                            <div class="video-container video-container--16/9" data-video>
                                <video
                                        class="video-player"
                                        width="100%"
                                        height="auto"
                                        playsinline=""
                                        controlslist="nodownload"
                                        preload="metadata"
                                        data-video-player
                                >
                                    <source src="demo.mp4" type="video/mp4">
                                </video>
                                <div class="video-cover" data-video-cover="">
                                    <div class="video-controls">
                                        <img
                                                loading="lazy"
                                                class="image"
                                                src="img/play-circle.svg#play-circle"
                                                width="52"
                                                height="52"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="video-poster">
                                        <img
                                                loading="lazy"
                                                class="image"
                                                src="img/video-preview.png"
                                                width="100%"
                                                height="auto"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="video-caption">Заголовок видео и причина его посмотреть</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gap-xl index-fs-calculate-wrapper bg-blur bg-blur-15">
            <div class="container">
                <div class="index-fs-calculate">
                    <div class="index-fs-calculate__request">
                        <div class="index-fs-calculate__request-title">Оставьте заявку — менеджер свяжется с вами в день заявки и рассчитает стоимость и точные сроки</div>
                        <div class="index-fs-calculate__request-btn">
                            <button class="btn-reset btn btn-scale" type="button">
                                <span class="text-content">Рассчитать стоимость и сроки</span>
                            </button>
                        </div>
                    </div>
                    <div class="index-fs-calculate__categories">
                        <div class="index-fs-calculate__categories-item index-fs-calculate__categories-zipper">
                            <div class="index-fs-calculate__categories-decor" style="background-image: url('img/decor1.png');"></div>
                            <div class="index-fs-calculate__categories-title">Застёжки - молнии</div>
                            <div class="index-fs-calculate__categories-pointer">
                                <svg class="icon icon-xl">
                                    <use href="img/btn-arrow-round-light.svg#btn-arrow-round-light"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="index-fs-calculate__categories-item index-fs-calculate__categories-fitting">
                            <div class="index-fs-calculate__categories-decor" style="background-image: url('img/decor2.png');"></div>
                            <div class="index-fs-calculate__categories-title">Пластиковая  фурнитура</div>
                            <div class="index-fs-calculate__categories-pointer">
                                <svg class="icon icon-xl">
                                    <use href="img/btn-arrow-round-light.svg#btn-arrow-round-light"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="index-fs-calculate__categories-item index-fs-calculate__categories-tape">
                            <div class="index-fs-calculate__categories-decor" style="background-image: url('img/decor3.png');"></div>
                            <div class="index-fs-calculate__categories-title">Текстильная лента, шнуры</div>
                            <div class="index-fs-calculate__categories-pointer">
                                <svg class="icon icon-xl">
                                    <use href="img/btn-arrow-round-light.svg#btn-arrow-round-light"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="index-fs-calculate__categories-item index-fs-calculate__categories-service">
                            <div class="index-fs-calculate__categories-decor" style="background-image: url('img/decor4.png');"></div>
                            <div class="index-fs-calculate__categories-title">Услуги</div>
                            <div class="index-fs-calculate__categories-pointer">
                                <svg class="icon icon-xl">
                                    <use href="img/btn-arrow-round-light.svg#btn-arrow-round-light"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="index-fs-categories-wrapper">
            <div class="slider-out">
                <div class="index-fs-categories-slider basic-slider swiper" data-index-fs-categories-slider>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">Название категории</div>
                        <div class="swiper-slide">Название категории</div>
                        <div class="swiper-slide">Название категории</div>
                        <div class="swiper-slide">Название категории</div>
                        <div class="swiper-slide">Название категории</div>
                        <div class="swiper-slide">Название категории</div>
                        <div class="swiper-slide">Название категории</div>
                        <div class="swiper-slide">Название категории</div>
                        <div class="swiper-slide">Название категории</div>
                        <div class="swiper-slide">Название категории</div>
                        <div class="swiper-slide">Название категории</div>
                        <div class="swiper-slide">Название категории</div>
                        <div class="swiper-slide">Название категории</div>
                        <div class="swiper-slide">Название категории</div>
                        <div class="swiper-slide">Название категории</div>
                        <div class="swiper-slide">Название категории</div>
                        <div class="swiper-slide">Название категории</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gap-xxl">
    <div class="container">
        <div class="counted-section">
            <div class="gap-xxs counted-section__pointer">1 / 3</div>
            <div class="compact-content-x">
                <div class="advantage">
                    <div class="gap-md advantage__item advantage__item--half">
                        <div class="split-heading">
                            <div class="split-heading__title h3 text-uppercase">
                                <span class="red3-color">R</span>ight product
                            </div>
                            <div class="split-heading__other">
                                <span>— правильный продукт</span>
                            </div>
                        </div>
                    </div>
                    <div class="gap-xxl advantage__item advantage__item--half">
                        <div class="gap-md fw-medium">Благодаря современному парку оборудования (500+ единиц), огромному опыту и <span class="fw-bold">налаженному производству:</span></div>
                        <ul class="list-reset list-default">
                            <li>Производится 1.000.000+ единиц товара ежемесячно</li>
                            <li>Более 25 лет — опыт работы на рынке</li>
                            <li>
                                <span class="brand-3r">
                                    <span>3</span>
                                    <span>R</span>
                                </span>
                                доверяют 500+ постоянных клиентов
                            </li>
                        </ul>
                    </div>
                    <div class="advantage__item">
                        <div class="border-heading">
                            <div class="gap-md border-heading__title h5">Уникальные возможности производства:</div>
                            <div class="advantage-uniq">
                                <ul class="list-reset advantage-uniq__list">
                                    <li class="advantage-uniq__item">
                                        <span class="custom-checkbox">
                                            <input id="checkbox-advantage-uniq-1" class="custom-checkbox__input checked" type="checkbox">
                                            <label for="checkbox-advantage-uniq-1" class="custom-checkbox__label-for">Производство металлических молний полного цикла</label>
                                        </span>
                                    </li>
                                    <li class="advantage-uniq__item">
                                        <span class="custom-checkbox">
                                            <input id="checkbox-advantage-uniq-2" class="custom-checkbox__input checked" type="checkbox">
                                            <label for="checkbox-advantage-uniq-2" class="custom-checkbox__label-for">Водоотталкивающие застёжки-молнии, а также со светоотражающей лентой</label>
                                        </span>
                                    </li>
                                    <li class="advantage-uniq__item">
                                        <span class="custom-checkbox">
                                            <input id="checkbox-advantage-uniq-3" class="custom-checkbox__input checked" type="checkbox">
                                            <label for="checkbox-advantage-uniq-3" class="custom-checkbox__label-for">1.800+ цветов текстильной ленты (собственная карта цветов)</label>
                                        </span>
                                    </li>
                                    <li class="advantage-uniq__item">
                                        <span class="custom-checkbox">
                                            <input id="checkbox-advantage-uniq-4" class="custom-checkbox__input checked" type="checkbox">
                                            <label for="checkbox-advantage-uniq-4" class="custom-checkbox__label-for">50+ видов пластиковой фурнитуры</label>
                                        </span>
                                    </li>
                                    <li class="advantage-uniq__item">
                                        <span class="custom-checkbox">
                                            <input id="checkbox-advantage-uniq-5" class="custom-checkbox__input checked" type="checkbox">
                                            <label for="checkbox-advantage-uniq-5" class="custom-checkbox__label-for">Принимаются заказы от 100 метров, с шагом от 0,5 см</label>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gap-xxl">
    <div class="container">
        <div class="counted-section">
            <div class="gap-xxs counted-section__pointer">2 / 3</div>
            <div class="gap-xxl compact-content-x">
                <div class="advantage advantage-quality">
                    <div class="gap-xxl advantage__item advantage-quality__item">
                        <div class="gap-lg split-heading">
                            <div class="split-heading__title h3 text-uppercase">
                                <span class="red3-color">R</span>ight quality
                            </div>
                            <div class="split-heading__other">
                                <span>— правильное качество</span>
                            </div>
                        </div>
                        <div class="">
                            <div class="gap-md fw-medium">Качество обеспечивается 3-х ступенчатым контролем:</div>
                            <ul class="list-reset advantage-quality__list">
                                <li class="advantage-quality__list-item">Отдел технического контроля проверяет всё <span class="fw-bold">поступающее сырье</span> и комплектующие</li>
                                <li class="advantage-quality__list-item">Внедрён регламент проверки качества <span class="fw-bold">на каждом производственном участке</span></li>
                                <li class="advantage-quality__list-item"><span class="fw-bold">Перед отгрузкой</span> проводится контроль качества произведённой продукции</li>
                            </ul>
                        </div>
                    </div>
                    <div class="advantage__item advantage-quality__item advantage-quality__item--certificate">
                        <div class="advantage-quality-certificate">
                            <div class="gap-md">
                                <p class="fw-medium">
                                    Продукция
                                    <span class="brand-3r">
                                    <span>3</span>
                                    <span>R</span>
                                </span>
                                    проходит проверки в независимых лабораториях,  что подтверждено сертификатами:
                                </p>
                            </div>
                            <div class="advantage-quality-certificate__list">
                                <div class="advantage-quality-certificate__list-item">
                                    <img
                                            loading="lazy"
                                            class="image"
                                            src="img/license.png"
                                            width="170"
                                            height="250"
                                            alt="Изображение блока"
                                    >
                                </div>
                                <div class="advantage-quality-certificate__list-item">
                                    <img
                                            loading="lazy"
                                            class="image"
                                            src="img/license.png"
                                            width="170"
                                            height="250"
                                            alt="Изображение блока"
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="advantage-quality-sample-wrapper">
                <div class="advantage-quality-sample">
                    <div class="advantage-quality-sample__view">
                        <img
                                loading="lazy"
                                class="image"
                                src="img/sample.png"
                                width="500"
                                height="270"
                                alt="Изображение блока"
                        >
                    </div>
                    <div class="advantage-quality-sample__descr">
                        <div class="advantage-quality-sample__descr-container">
                            <div class="advantage-quality-sample__info">
                                <div class="advantage-quality-sample__info-title">Убедитесь в качестве, получив образцы перед заказом</div>
                                <div class="advantage-quality-sample__info-subtitle">Оставьте заявку — менеджер ответит в день обращения и отправит образцы бесплатно</div>
                            </div>
                            <div class="advantage-quality-sample__request">
                                <button class="btn-reset btn btn-primary" type="button">
                                    <span class="text-content">Получить образец</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gap-xxl">
    <div class="container">
        <div class="counted-section">
            <div class="gap-xxs counted-section__pointer">3 / 3</div>
            <div class="compact-content-x">
                <div class="advantage advantage-service">
                    <div class="gap-md advantage__item advantage__item--half advantage-service__item">
                        <div class="gap-lg split-heading">
                            <div class="split-heading__title h3 text-uppercase">
                                <span class="red3-color">R</span>ight service
                            </div>
                            <div class="split-heading__other">
                                <span>— правильное сервис</span>
                            </div>
                        </div>
                        <div class="">
                            <div class="fw-medium">Отлаженный сервис позволяет <span class="fw-bold">выстроить комфортное взаимодействие:</span></div>
                        </div>
                    </div>
                    <div class="advantage__item advantage-service__item">
                        <ul class="list-reset advantage-service__list">
                            <li class="advantage-service__list-item">
                                <svg class="icon icon-fill">
                                    <use href="img/i_manager.svg#i_manager"></use>
                                </svg>
                                <div class="text-content">С вами работает персональный менеджер</div>
                            </li>
                            <li class="advantage-service__list-item">
                                <svg class="icon icon-fill">
                                    <use href="img/i_connection.svg#i_connection"></use>
                                </svg>
                                <div class="text-content">Заказ может быть размещен через любые каналы коммуникации: телефон, мессенджеры, эл.почта</div>
                            </li>
                            <li class="advantage-service__list-item">
                                <svg class="icon icon-fill">
                                    <use href="img/i_stage.svg#i_stage"></use>
                                </svg>
                                <div class="text-content">Вас информируют о каждом этапе выполнения заказа</div>
                            </li>
                            <li class="advantage-service__list-item">
                                <svg class="icon icon-fill">
                                    <use href="img/i_speed-feedback.svg#i_speed-feedback"></use>
                                </svg>
                                <div class="text-content">Скорость обратной связи — получаете ответ в день обращения</div>
                            </li>
                            <li class="advantage-service__list-item">
                                <svg class="icon icon-fill">
                                    <use href="img/i_doc-flow.svg#i_doc-flow"></use>
                                </svg>
                                <div class="text-content">Внедрён электронный документооборот</div>
                            </li>
                            <li class="advantage-service__list-item">
                                <svg class="icon icon-fill">
                                    <use href="img/i_shipment.svg#i_shipment"></use>
                                </svg>
                                <div class="text-content">Отгрузка продукции осуществляется удобным для вас способом</div>
                            </li>
                            <li class="advantage-service__list-item">
                                <svg class="icon icon-fill">
                                    <use href="img/i_term.svg#i_term"></use>
                                </svg>
                                <div class="text-content">Заказы выполняются в согласованный срок</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gap-xxl">
    <div class="banner-order" style="background-image: url('img/index-bg2.png');">
        <div class="banner-order-heading">
            <div class="banner-order-heading__logo">
                <img
                        loading="lazy"
                        class="image"
                        src="img/logo-stroke.png"
                        width="175"
                        height="135"
                        alt="Изображение блока"
                >
            </div>
            <div class="banner-order-heading__title h3 text-uppercase">удобный поставщик для клиентов</div>
            <div class="banner-order-heading__subtitle">— всегда вовремя, всё в одном месте и по единому стандарту</div>
        </div>
        <div class="bg-blur bg-blur-15 banner-order-request">
            <div class="container banner-order-request__container">
                <button class="btn-reset btn" type="button">
                    <span class="text-content">Сделать заказ</span>
                </button>
                <div class="banner-order-request__title">Менеджеры отвечают на заявки в день обращения</div>
            </div>
        </div>
    </div>
</div>

<div class="gap-xxl">
    <div class="container">
        <div class="compact-content-x">
            <div class="gap-xl">
                <div class="h3 text-uppercase">О производстве</div>
            </div>
            <div class="numbers">
                <div class="numbers__item numbers__item--lg">
                    <div class="numbers__value pre-hidden">
                        <span class="animated-counter" data-start-value="880000" data-value="1000000"></span>+
                    </div>
                    <div class="numbers__descr">
                        <span>Товаров отгружаем ежемесячно</span>
                    </div>
                </div>
                <div class="numbers__item numbers__item--lg numbers__item--red">
                    <div class="numbers__value pre-hidden">
                        <span class="animated-counter" data-start-value="3150" data-value="4500"></span>&nbsp;м<sup>2</sup>
                    </div>
                    <div class="numbers__descr">
                        <span>Площадь производственных площадей</span>
                    </div>
                </div>
                <div class="numbers__item numbers__item--dark">
                    <div class="numbers__value pre-hidden">
                        <span class="animated-counter" data-start-value="250" data-value="500"></span>+
                    </div>
                    <div class="numbers__descr">
                        <span>Единиц оборудования в парке</span>
                    </div>
                </div>
                <div class="numbers__item">
                    <div class="numbers__value pre-hidden">
                        <span class="animated-counter" data-start-value="60" data-value="120"></span>+
                    </div>
                    <div class="numbers__descr">
                        <span>Сотрудников в компании</span>
                    </div>
                </div>
                <div class="numbers__item numbers__item--dark">
                    <div class="numbers__value pre-hidden">
                        <span class="animated-counter" data-start-value="12" data-value="25"></span>
                    </div>
                    <div class="numbers__descr">
                        <span>Лет на рынке</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gap-xxl">
    <div class="production-slider-wrapper">
        <div class="container">
            <div class="compact-content-x slider-out">
                <div class="basic-slider-wrap">
                    <div class="production-slider basic-slider swiper" data-production-slider>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img
                                    loading="lazy"
                                    class="image"
                                    src="img/production1.png"
                                    width="470"
                                    height="300"
                                    alt="Изображение блока"
                                >
                            </div>
                            <div class="swiper-slide">
                                <img
                                    loading="lazy"
                                    class="image"
                                    src="img/production2.png"
                                    width="470"
                                    height="300"
                                    alt="Изображение блока"
                                >
                            </div>
                            <div class="swiper-slide">
                                <img
                                    loading="lazy"
                                    class="image"
                                    src="img/production1.png"
                                    width="470"
                                    height="300"
                                    alt="Изображение блока"
                                >
                            </div>
                            <div class="swiper-slide">
                                <img
                                    loading="lazy"
                                    class="image"
                                    src="img/production2.png"
                                    width="470"
                                    height="300"
                                    alt="Изображение блока"
                                >
                            </div>
                            <div class="swiper-slide">
                                <img
                                        loading="lazy"
                                        class="image"
                                        src="img/production1.png"
                                        width="470"
                                        height="300"
                                        alt="Изображение блока"
                                >
                            </div>
                            <div class="swiper-slide">
                                <img
                                        loading="lazy"
                                        class="image"
                                        src="img/production2.png"
                                        width="470"
                                        height="300"
                                        alt="Изображение блока"
                                >
                            </div>
                            <div class="swiper-slide">
                                <img
                                        loading="lazy"
                                        class="image"
                                        src="img/production1.png"
                                        width="470"
                                        height="300"
                                        alt="Изображение блока"
                                >
                            </div>
                            <div class="swiper-slide">
                                <img
                                        loading="lazy"
                                        class="image"
                                        src="img/production2.png"
                                        width="470"
                                        height="300"
                                        alt="Изображение блока"
                                >
                            </div>
                        </div>
                        <div class="swiper-navigation">
                            <div class="swiper-button-next">
                                <button class="btn-reset btn btn-scale">
                                    <svg class="icon icon-fill">
                                        <use href="img/arrow-right.svg#arrow-right"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="swiper-button-prev">
                                <button class="btn-reset btn btn-scale">
                                    <svg class="icon icon-fill">
                                        <use href="img/arrow-right.svg#arrow-right"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gap-xxl">
    <div class="container">
        <div class="brand-history">
            <div class="gap-xl">
                <div class="h3 text-uppercase">История бренда 3<span class="red3-color">R</span></div>
            </div>
            <ul class="list-reset brand-history__list">
                <li class="brand-history__item">
                    <span class="brand-history__marker">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#lock"></use>
                        </svg>
                    </span>
                    <span class="brand-history__date">1998 год</span>
                    <span class="brand-history__divider">&#8212;</span>
                    <span class="brand-history__text">начало производственного пути (на площади 200 кв. м.). По сути, история 3R началась с подвала профтехучилища, где из готовых рулонов собирались металлические молнии тип 5</span>
                </li>
                <li class="brand-history__item">
                    <span class="brand-history__marker">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#lock"></use>
                        </svg>
                    </span>
                    <span class="brand-history__date">2000 год</span>
                    <span class="brand-history__divider">&#8212;</span>
                    <span class="brand-history__text">запуск производства пластиковых застёжек-молний тип 3, тип 5 и тип 8</span>
                </li>
                <li class="brand-history__item">
                    <span class="brand-history__marker">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#lock"></use>
                        </svg>
                    </span>
                    <span class="brand-history__date">2003 год</span>
                    <span class="brand-history__divider">&#8212;</span>
                    <span class="brand-history__text">запуск производства спиральных застёжек-молний тип 5</span>
                </li>
                <li class="brand-history__item">
                    <span class="brand-history__marker">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#lock"></use>
                        </svg>
                    </span>
                    <span class="brand-history__date">2004 год</span>
                    <span class="brand-history__divider">&#8212;</span>
                    <span class="brand-history__text">переезд в новый цех (750 кв. м.). На новой площадке внедрена технология покраски слайдеров</span>
                </li>
                <li class="brand-history__item">
                    <span class="brand-history__marker">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#lock"></use>
                        </svg>
                    </span>
                    <span class="brand-history__date">2008 год</span>
                    <span class="brand-history__divider">&#8212;</span>
                    <span class="brand-history__text">увеличение станочного парка, расширение производственных площадей (1.000 кв.м.)</span>
                </li>
                <li class="brand-history__item">
                    <span class="brand-history__marker">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#lock"></use>
                        </svg>
                    </span>
                    <span class="brand-history__date">2009 год</span>
                    <span class="brand-history__divider">&#8212;</span>
                    <span class="brand-history__text">
                        регистрация товарного знака
                        <span class="brand-3r">
                            <span>3</span>
                            <span>R</span>
                        </span>
                    </span>
                </li>
                <li class="brand-history__item">
                    <span class="brand-history__marker">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#lock"></use>
                        </svg>
                    </span>
                    <span class="brand-history__date">2010 год</span>
                    <span class="brand-history__divider">&#8212;</span>
                    <span class="brand-history__text">освоение и внедрение технологии покраски текстильной ленты и запуск производства пластиковой рулонной молнии</span>
                </li>
                <li class="brand-history__item">
                    <span class="brand-history__marker">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#lock"></use>
                        </svg>
                    </span>
                    <span class="brand-history__date">2012 год</span>
                    <span class="brand-history__divider">&#8212;</span>
                    <span class="brand-history__text">закупка оборудования для автоматического производства спиральных застёжек-молний тип 3</span>
                </li>
                <li class="brand-history__item">
                    <span class="brand-history__marker">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#lock"></use>
                        </svg>
                    </span>
                    <span class="brand-history__date">2017 год</span>
                    <span class="brand-history__divider">&#8212;</span>
                    <span class="brand-history__text">приобретен первый термопластавтомат для производства пластиковой фурнитуры</span>
                </li>
                <li class="brand-history__item">
                    <span class="brand-history__marker">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#lock"></use>
                        </svg>
                    </span>
                    <span class="brand-history__date">2018 год</span>
                    <span class="brand-history__divider">&#8212;</span>
                    <span class="brand-history__text">расширение производственной площадки до 1.250 кв.м.</span>
                </li>
                <li class="brand-history__item">
                    <span class="brand-history__marker">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#lock"></use>
                        </svg>
                    </span>
                    <span class="brand-history__date">2018 год</span>
                    <span class="brand-history__divider">&#8212;</span>
                    <span class="brand-history__text">разработан собственный станок для производства спиральных влагостойких молний и молний со светоотражающим покрытием</span>
                </li>
                <li class="brand-history__item">
                    <span class="brand-history__marker">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#lock"></use>
                        </svg>
                    </span>
                    <span class="brand-history__date">2019 год</span>
                    <span class="brand-history__divider">&#8212;</span>
                    <span class="brand-history__text">преодоление внутреннего кризиса за счет перестройки производственных процессов и обновления менеджерского состава</span>
                </li>
                <li class="brand-history__item">
                    <span class="brand-history__marker">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#lock"></use>
                        </svg>
                    </span>
                    <span class="brand-history__date">2022 год</span>
                    <span class="brand-history__divider">&#8212;</span>
                    <span class="brand-history__text">обновление и модернизация парка оборудования</span>
                </li>
                <li class="brand-history__item">
                    <span class="brand-history__marker">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#lock"></use>
                        </svg>
                    </span>
                    <span class="brand-history__date">2023 год</span>
                    <span class="brand-history__divider">&#8212;</span>
                    <span class="brand-history__text">расширение производственных и складских площадей до 4.500 кв.м. Рост станочного парка, позволяющего производить более 1.000.000 единиц продукции в месяц</span>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="gap-xxl">
    <div class="container">
        <div class="compact-content-x">
            <div class="brand-plan">
                <div class="brand-plan__descr">
                    <div class="gap-md brand-plan__title h5">О наших ближайших планах и&nbsp;обновлениях вы можете прочитать на странице новостей</div>
                    <div class="brand-plan__more">
                        <a class="btn-reset btn" href="javascript:;">
                            <span class="text-content">Новости</span>
                        </a>
                    </div>
                </div>
                <div class="brand-plan__view">
                    <img
                        loading="lazy"
                        class="image"
                        src="img/plans1.png"
                        width="370"
                        height="290"
                        alt="Изображение блока"
                    >
                </div>
            </div>
        </div>
    </div>
</div>

<div class="">
    <div class="banner-order" style="background-image: url('img/index-bg2.png');">
        <div class="banner-order-heading">
            <div class="banner-order-heading__logo">
                <img
                        loading="lazy"
                        class="image"
                        src="img/logo-stroke.png"
                        width="175"
                        height="135"
                        alt="Изображение блока"
                >
            </div>
            <div class="banner-order-heading__title h4 text-uppercase">Миссия — решать ваши задачи комплексно, качественно и&nbsp;быстро</div>
        </div>
        <div class="bg-blur bg-blur-15 banner-order-request">
            <div class="container banner-order-request__container">
                <button class="btn-reset btn" type="button">
                    <span class="text-content">Сделать заказ</span>
                </button>
                <div class="banner-order-request__title">Менеджеры отвечают на заявки в день обращения</div>
            </div>
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>