<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="gap-sm-plus">
	<div class="container">
		<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/breadcrumbs.php"); ?>
	</div>
</div>

<div class="gap-lg-plus">
	<div class="container">
		<div class="h1">Застежки-молнии</div>
	</div>
</div>

<div class="block-bottom">
	<div class="container">
        <div class="catalog">
            <div class="catalog-item catalog-category">
                <div class="card-list card-list--big">
                    <a class="card card-narrow" href="javascript:;">
                        <div class="card__view">
                            <img
                                    loading="lazy"
                                    src="img/card-img-1.png"
                                    class="image"
                                    width="566"
                                    height="320"
                                    alt="Изображение блока"
                            >
                        </div>
                        <div class="card__descr">
                            <div class="card__title">Тракторные молнии</div>
                        </div>
                    </a>
                    <a class="card card-narrow" href="javascript:;">
                        <div class="card__view">
                            <img
                                    loading="lazy"
                                    src="img/card-img-9.png"
                                    class="image"
                                    width="566"
                                    height="320"
                                    alt="Изображение блока"
                            >
                        </div>
                        <div class="card__descr">
                            <div class="card__title">Спиральная застежка-молния</div>
                        </div>
                    </a>
                    <a class="card card-narrow" href="javascript:;">
                        <div class="card__view">
                            <img
                                    loading="lazy"
                                    src="img/card-img-10.png"
                                    class="image"
                                    width="566"
                                    height="320"
                                    alt="Изображение блока"
                            >
                        </div>
                        <div class="card__descr">
                            <div class="card__title">Металлическая молния</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="catalog-item catalog-grid catalog-grid-has-sort">
                <div class="catalog-sidebar">
                    <form
                            id=""
                            class="form catalog-sidebar-filter-search"
                            method=""
                            action="javascript:;"
                    >
                        <div class="input-wrapper input-search-wrapper">
                            <input
                                    class="input-reset input input-search"
                                    type="search"
                                    name="Поиск"
                                    placeholder="Найти по названию или артикулу..."
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
                    <div class="catalog-sidebar-filter-spoiler" data-filter-spoiler>
                        <button class="btn-reset btn">
                            <svg class="icon btn__icon icon-sm">
                                <use href="img/sprite.svg#filter"></use>
                            </svg>
                            <span class="btn__text">Фильтры</span>
                        </button>
                    </div>
                    <form
                            id=""
                            class="form catalog-sidebar-filter"
                            method=""
                            action="javascript:;"
                            data-filter
                    >
                        <div class="catalog-sidebar-filter__header">
                            <div class="catalog-sidebar-filter__title">
                                <svg class="icon icon-md">
                                    <use href="img/sprite.svg#filter"></use>
                                </svg>
                                <span>Фильтр</span>
                            </div>
                            <div class="catalog-sidebar-filter__close" data-filter-close>
                                <svg class="icon icon-md">
                                    <use href="img/sprite.svg#cross"></use>
                                </svg>
                            </div>
                        </div>

                        <div class="catalog-sidebar-filter-sort">
                            <div class="catalog-sidebar-filter-sort__title">Сортировать:</div>
                            <div class="catalog-sidebar-filter-sort__select">
                                <input
                                        id="csfSortValue"
                                        type="text"
                                        class="visually-hidden"
                                        name=""
                                        value=""
                                >
                                <span class="catalog-sidebar-filter-sort__select-text">Сначала недорогие</span>
                                <svg class="icon">
                                    <use href="img/sprite.svg#chevron-down"></use>
                                </svg>
                            </div>
                            <div class="catalog-sidebar-filter-sort__options">
                                <div class="catalog-sidebar-filter-sort__options-item">
                                    <input
                                            id="csfSortByLowPrice"
                                            type="radio"
                                            class="visually-hidden"
                                            name="csfSortCatalogGrid"
                                            value=""
                                            checked
                                    >
                                    <label for="csfSortByLowPrice" class="catalog-sidebar-filter-sort__options-label active">Сначала недорогие</label>
                                </div>
                                <div class="catalog-sidebar-filter-sort__options-item">
                                    <input
                                            id="csfSortByHighPrice"
                                            type="radio"
                                            class="visually-hidden"
                                            name="csfSortCatalogGrid"
                                            value=""
                                    >
                                    <label for="csfSortByHighPrice" class="catalog-sidebar-filter-sort__options-label">Сначала дорогие</label>
                                </div>
                                <div class="catalog-sidebar-filter-sort__options-item">
                                    <input
                                            id="csfSortByPopular"
                                            type="radio"
                                            class="visually-hidden"
                                            name="csfSortCatalogGrid"
                                            value=""
                                    >
                                    <label for="csfSortByPopular" class="catalog-sidebar-filter-sort__options-label">Сначала популярные</label>
                                </div>
                            </div>
                        </div>

                        <div class="catalog-sidebar-filter__selection" action="">
                            <ul class="list-reset catalog-sidebar-filter__options">
                                <li class="catalog-sidebar-filter__options-item" data-filter-option>
                                    <div class="catalog-sidebar-filter__options-header collapse-view-in" data-filter-option-view>
                                        <svg class="icon icon-sm">
                                            <use href="img/sprite.svg#chevron-down"></use>
                                        </svg>
                                        <span class="catalog-sidebar-filter__options-title">Тип</span>
                                    </div>
                                    <div class="catalog-sidebar-filter__options-content collapse-content-in" data-filter-option-content>
                                        <div class="catalog-sidebar-filter__options-content-item">
                                            <ul class="list-reset catalog-sidebar-filter__list catalog-sidebar-filter__list--row">
                                                <li class="catalog-sidebar-filter__item">
                                                    <label class="catalog-sidebar-filter__tag">
                                                        <input
                                                                class="visually-hidden"
                                                                type="checkbox"
                                                                name="csfType"
                                                                value=""
                                                        >
                                                        <span class="btn__text">Бытовой</span>
                                                    </label>
                                                </li>
                                                <li class="catalog-sidebar-filter__item">
                                                    <label class="catalog-sidebar-filter__tag">
                                                        <input
                                                                class="visually-hidden"
                                                                type="checkbox"
                                                                name="csfType"
                                                                value=""
                                                        >
                                                        <span class="btn__text">Влагозащищенный</span>
                                                    </label>
                                                </li>
                                                <li class="catalog-sidebar-filter__item">
                                                    <label class="catalog-sidebar-filter__tag">
                                                        <input
                                                                class="visually-hidden"
                                                                type="checkbox"
                                                                name="csfType"
                                                                value=""
                                                        >
                                                        <span class="btn__text">С заземлением</span>
                                                    </label>
                                                </li>
                                                <li class="catalog-sidebar-filter__item">
                                                    <label class="catalog-sidebar-filter__tag">
                                                        <input
                                                                class="visually-hidden"
                                                                type="checkbox"
                                                                name="csfType"
                                                                value=""
                                                        >
                                                        <span class="btn__text">С клеммами</span>
                                                    </label>
                                                </li>
                                                <li class="catalog-sidebar-filter__item">
                                                    <label class="catalog-sidebar-filter__tag">
                                                        <input
                                                                class="visually-hidden"
                                                                type="checkbox"
                                                                name="csfType"
                                                                value=""
                                                        >
                                                        <span class="btn__text">С крышкой</span>
                                                    </label>
                                                </li>
                                                <li class="catalog-sidebar-filter__item">
                                                    <label class="catalog-sidebar-filter__tag">
                                                        <input
                                                                class="visually-hidden"
                                                                type="checkbox"
                                                                name="csfType"
                                                                value=""
                                                        >
                                                        <span class="btn__text">С подсветкой</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="catalog-sidebar-filter__options-item" data-filter-option>
                                    <div class="catalog-sidebar-filter__options-header collapse-view-in" data-filter-option-view>
                                        <svg class="icon icon-sm">
                                            <use href="img/sprite.svg#chevron-down"></use>
                                        </svg>
                                        <span class="catalog-sidebar-filter__options-title">Высота звеньев, мм</span>
                                    </div>
                                    <div class="catalog-sidebar-filter__options-content collapse-content-in" data-filter-option-content>
                                        <div class="catalog-sidebar-filter__options-content-item catalog-sidebar-filter__options-search">
                                            <div class="input-wrapper input-search-wrapper">
                                                <input
                                                        class="input-reset input input-search"
                                                        type="search"
                                                        name=""
                                                        placeholder="Я ищу..."
                                                        autocomplete="off"
                                                >
                                                <button class="btn-reset btn btn-link input-search-btn" type="button">
                                                    <svg class="icon btn__icon icon-xs">
                                                        <use href="img/sprite.svg#search"></use>
                                                    </svg>
                                                </button>
                                                <button class="btn-reset btn btn-link input-delete-btn" type="button">
                                                    <svg class="icon btn__icon icon-xs">
                                                        <use href="img/sprite.svg#cross"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="catalog-sidebar-filter__options-content-item">
                                            <ul class="list-reset catalog-sidebar-filter__list">
                                                <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <input id="csfLinkHeightOne" class="custom-checkbox__input" type="checkbox">
                                                            <label for="csfLinkHeightOne" class="custom-checkbox__label-for">2.35 (&#177; 0.05)</label>
                                                        </span>
                                                </li>
                                                <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <input id="csfLinkHeightTwo" class="custom-checkbox__input" type="checkbox">
                                                            <label for="csfLinkHeightTwo" class="custom-checkbox__label-for">2.90 (&#177; 0.05)</label>
                                                        </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="catalog-sidebar-filter__options-item" data-filter-option>
                                    <div class="catalog-sidebar-filter__options-header collapse-view-in" data-filter-option-view>
                                        <svg class="icon icon-sm">
                                            <use href="img/sprite.svg#chevron-down"></use>
                                        </svg>
                                        <span class="catalog-sidebar-filter__options-title">Ширина звеньев, мм</span>
                                    </div>
                                    <div class="catalog-sidebar-filter__options-content collapse-content-in" data-filter-option-content>
                                        <div class="catalog-sidebar-filter__options-content-item catalog-sidebar-filter__options-search">
                                            <div class="input-wrapper input-search-wrapper">
                                                <input
                                                        class="input-reset input input-search"
                                                        type="search"
                                                        name=""
                                                        placeholder="Я ищу..."
                                                        autocomplete="off"
                                                >
                                                <button class="btn-reset btn btn-link input-search-btn" type="button">
                                                    <svg class="icon btn__icon icon-xs">
                                                        <use href="img/sprite.svg#search"></use>
                                                    </svg>
                                                </button>
                                                <button class="btn-reset btn btn-link input-delete-btn" type="button">
                                                    <svg class="icon btn__icon icon-xs">
                                                        <use href="img/sprite.svg#cross"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="catalog-sidebar-filter__options-content-item">
                                            <ul class="list-reset catalog-sidebar-filter__list">
                                                <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <input id="csfLinkWidthOne" class="custom-checkbox__input" type="checkbox">
                                                            <label for="csfLinkWidthOne" class="custom-checkbox__label-for">4.15 (&#177; 0.05)</label>
                                                        </span>
                                                </li>
                                                <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <input id="csfLinkWidthTwo" class="custom-checkbox__input" type="checkbox">
                                                            <label for="csfLinkWidthTwo" class="custom-checkbox__label-for">4.60 (&#177; 0.05)</label>
                                                        </span>
                                                </li>
                                                <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <input id="csfLinkWidthThree" class="custom-checkbox__input disabled" type="checkbox" disabled>
                                                            <label for="csfLinkWidthThree" class="custom-checkbox__label-for">5.80 (&#177; 0.05)</label>
                                                        </span>
                                                </li>
                                                <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <input id="csfLinkWidthFour" class="custom-checkbox__input" type="checkbox">
                                                            <label for="csfLinkWidthFour" class="custom-checkbox__label-for">6.00 (&#177; 0.05)</label>
                                                        </span>
                                                </li>
                                                <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <input id="csfLinkWidthFive" class="custom-checkbox__input" type="checkbox">
                                                            <label for="csfLinkWidthFive" class="custom-checkbox__label-for">7.60 (&#177; 0.05)</label>
                                                        </span>
                                                </li>
                                                <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <input id="csfLinkWidthSix" class="custom-checkbox__input" type="checkbox">
                                                            <label for="csfLinkWidthSix" class="custom-checkbox__label-for">7.65 (&#177; 0.05)</label>
                                                        </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="catalog-sidebar-filter__options-item" data-filter-option>
                                    <div class="catalog-sidebar-filter__options-header" data-filter-option-view>
                                        <svg class="icon icon-sm">
                                            <use href="img/sprite.svg#chevron-down"></use>
                                        </svg>
                                        <span class="catalog-sidebar-filter__options-title">Ширина застежки-молнии</span>
                                    </div>
                                    <div class="catalog-sidebar-filter__options-content" data-filter-option-content>
                                        <div class="catalog-sidebar-filter__options-content-item catalog-sidebar-filter__options-search">
                                            <div class="input-wrapper input-search-wrapper">
                                                <input
                                                        class="input-reset input input-search"
                                                        type="search"
                                                        name=""
                                                        placeholder="Я ищу..."
                                                        autocomplete="off"
                                                >
                                                <button class="btn-reset btn btn-link input-search-btn" type="button">
                                                    <svg class="icon btn__icon icon-xs">
                                                        <use href="img/sprite.svg#search"></use>
                                                    </svg>
                                                </button>
                                                <button class="btn-reset btn btn-link input-delete-btn" type="button">
                                                    <svg class="icon btn__icon icon-xs">
                                                        <use href="img/sprite.svg#cross"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="catalog-sidebar-filter__options-content-item">
                                            <ul class="list-reset catalog-sidebar-filter__list">
                                                <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <input id="csfZipWidthOne" class="custom-checkbox__input" type="checkbox">
                                                            <label for="csfZipWidthOne" class="custom-checkbox__label-for">2.35 (&#177; 0.05)</label>
                                                        </span>
                                                </li>
                                                <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <input id="csfZipWidthTwo" class="custom-checkbox__input" type="checkbox">
                                                            <label for="csfZipWidthTwo" class="custom-checkbox__label-for">2.90 (&#177; 0.05)</label>
                                                        </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="catalog-sidebar-filter__options-item" data-filter-option>
                                    <div class="catalog-sidebar-filter__options-header" data-filter-option-view>
                                        <svg class="icon icon-sm">
                                            <use href="img/sprite.svg#chevron-down"></use>
                                        </svg>
                                        <span class="catalog-sidebar-filter__options-title">Ширина ленты</span>
                                    </div>
                                    <div class="catalog-sidebar-filter__options-content" data-filter-option-content>
                                        <div class="catalog-sidebar-filter__options-content-item catalog-sidebar-filter__options-search">
                                            <div class="input-wrapper input-search-wrapper">
                                                <input
                                                        class="input-reset input input-search"
                                                        type="search"
                                                        name=""
                                                        placeholder="Я ищу..."
                                                        autocomplete="off"
                                                >
                                                <button class="btn-reset btn btn-link input-search-btn" type="button">
                                                    <svg class="icon btn__icon icon-xs">
                                                        <use href="img/sprite.svg#search"></use>
                                                    </svg>
                                                </button>
                                                <button class="btn-reset btn btn-link input-delete-btn" type="button">
                                                    <svg class="icon btn__icon icon-xs">
                                                        <use href="img/sprite.svg#cross"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="catalog-sidebar-filter__options-content-item">
                                            <ul class="list-reset catalog-sidebar-filter__list">
                                                <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <input id="csfTapeWidthOne" class="custom-checkbox__input" type="checkbox">
                                                            <label for="csfTapeWidthOne" class="custom-checkbox__label-for">2.35 (&#177; 0.05)</label>
                                                        </span>
                                                </li>
                                                <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <input id="csfTapeWidthTwo" class="custom-checkbox__input" type="checkbox">
                                                            <label for="csfTapeWidthTwo" class="custom-checkbox__label-for">2.90 (&#177; 0.05)</label>
                                                        </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="catalog-sidebar-filter__options-item" data-filter-option>
                                    <div class="catalog-sidebar-filter__options-header" data-filter-option-view>
                                        <svg class="icon icon-sm">
                                            <use href="img/sprite.svg#chevron-down"></use>
                                        </svg>
                                        <span class="catalog-sidebar-filter__options-title">Тип звена молнии</span>
                                    </div>
                                    <div class="catalog-sidebar-filter__options-content" data-filter-option-content>
                                        <div class="catalog-sidebar-filter__options-content-item catalog-sidebar-filter__options-search">
                                            <div class="input-wrapper input-search-wrapper">
                                                <input
                                                        class="input-reset input input-search"
                                                        type="search"
                                                        name=""
                                                        placeholder="Я ищу..."
                                                        autocomplete="off"
                                                >
                                                <button class="btn-reset btn btn-link input-search-btn" type="button">
                                                    <svg class="icon btn__icon icon-xs">
                                                        <use href="img/sprite.svg#search"></use>
                                                    </svg>
                                                </button>
                                                <button class="btn-reset btn btn-link input-delete-btn" type="button">
                                                    <svg class="icon btn__icon icon-xs">
                                                        <use href="img/sprite.svg#cross"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="catalog-sidebar-filter__options-content-item">
                                            <ul class="list-reset catalog-sidebar-filter__list">
                                                <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <input id="csfZipLinkTypeOne" class="custom-checkbox__input" type="checkbox">
                                                            <label for="csfZipLinkTypeOne" class="custom-checkbox__label-for">2.35 (&#177; 0.05)</label>
                                                        </span>
                                                </li>
                                                <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-checkbox">
                                                            <input id="csfZipLinkTypeTwo" class="custom-checkbox__input" type="checkbox">
                                                            <label for="csfZipLinkTypeTwo" class="custom-checkbox__label-for">2.90 (&#177; 0.05)</label>
                                                        </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="catalog-sidebar-filter__options-item" data-filter-option>
                                    <div class="catalog-sidebar-filter__options-header collapse-view-in" data-filter-option-view>
                                        <svg class="icon icon-sm">
                                            <use href="img/sprite.svg#chevron-down"></use>
                                        </svg>
                                        <span class="catalog-sidebar-filter__options-title">Срок доставки (демо)</span>
                                    </div>
                                    <div class="catalog-sidebar-filter__options-content collapse-content-in" data-filter-option-content>
                                        <div class="catalog-sidebar-filter__options-content-item">
                                            <ul class="list-reset catalog-sidebar-filter__list">
                                                <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-radio">
                                                            <input id="csfDeliveryPeriodOne" class="custom-radio__input checked" type="radio" name="csfDeliveryPeriod" value="0" checked>
                                                            <label for="csfDeliveryPeriodOne" class="custom-radio__label-for">Любой</label>
                                                        </span>
                                                </li>
                                                <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-radio">
                                                            <input id="csfDeliveryPeriodTwo" class="custom-radio__input disabled" type="radio" name="csfDeliveryPeriod" value="1" disabled>
                                                            <label for="csfDeliveryPeriodTwo" class="custom-radio__label-for">Сегодня</label>
                                                        </span>
                                                </li>
                                                <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-radio">
                                                            <input id="csfDeliveryPeriodThree" class="custom-radio__input" type="radio" name="csfDeliveryPeriod" value="2">
                                                            <label for="csfDeliveryPeriodThree" class="custom-radio__label-for">2-4 дня</label>
                                                        </span>
                                                </li>
                                                <li class="catalog-sidebar-filter__item">
                                                        <span class="custom-radio">
                                                            <input id="csfDeliveryPeriodFour" class="custom-radio__input" type="radio" name="csfDeliveryPeriod" value="3">
                                                            <label for="csfDeliveryPeriodFour" class="custom-radio__label-for">3-5 дней</label>
                                                        </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="catalog-sidebar-filter__actions">
                                <button class="btn-reset btn btn-light" type="button" data-filter-reset>
                                    <span class="btn__text">Сбросить фильтры</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="catalog-content">
                    <div class="catalog-content__layout">
                        <div class="catalog-content__grid">
                            <div class="card card-product">
                                <div class="card__descr">
                                    <div class="card__title">Тракторная молния Акулий зуб – тип 5 (разъемная 2-х замковая)</div>
                                    <div class="card__subtitle">Предназначена для швейных и галантерейных изделий из материалов с поверхностной плотностью от 200 г/м2 до 400 г/м2 (кожаные, замшевые и меховые изделия; джинсовая и легкая брезентовая ткань).</div>
                                </div>
                                <div class="card__properties">
                                    <div class="card__properties-item">Высота звеньев, мм – 2.90 (&#177; 0.05)</div>
                                    <div class="card__properties-item">Ширина звеньев, мм — 5.80 (&#177; 0.05)</div>
                                    <div class="card__properties-item">Ширина застежки-молнии, мм — 33 (&#177; 1)</div>
                                    <div class="card__properties-item">Ширина ленты, мм — 15 (&#177; 1)</div>
                                    <div class="card__properties-item">Тип звена молнии — тип 5</div>
                                    <div class="card__properties-item">Количество замков — 2</div>
                                    <div class="card__properties-item">Материал звеньев — пластик</div>
                                    <div class="card__properties-item">Вид соединения — разъемная</div>
                                </div>
                                <div class="card__order">
                                    <button class="btn-reset btn btn-primary">
                                        <span class="btn__text">Заказать</span>
                                    </button>
                                </div>
                            </div>
                            <div class="card card-product">
                                <div class="card__descr">
                                    <div class="card__title">Тракторная молния Акулий зуб – тип 5 (разъемная)</div>
                                    <div class="card__subtitle">Предназначена для швейных и галантерейных изделий из материалов с поверхностной плотностью от 200 г/м2 до 400 г/м2 (кожаные, замшевые и меховые изделия; джинсовая и легкая брезентовая ткань).</div>
                                </div>
                                <div class="card__properties">
                                    <div class="card__properties-item">Высота звеньев, мм – 2.90 (&#177; 0.05)</div>
                                    <div class="card__properties-item">Ширина звеньев, мм — 5.80 (&#177; 0.05)</div>
                                    <div class="card__properties-item">Ширина застежки-молнии, мм — 33 (&#177; 1)</div>
                                    <div class="card__properties-item">Ширина ленты, мм — 15 (&#177; 1)</div>
                                    <div class="card__properties-item">Тип звена молнии — тип 5</div>
                                    <div class="card__properties-item">Количество замков — 2</div>
                                    <div class="card__properties-item">Материал звеньев — пластик</div>
                                    <div class="card__properties-item">Вид соединения — разъемная</div>
                                </div>
                                <div class="card__order">
                                    <button class="btn-reset btn btn-primary">
                                        <span class="btn__text">Заказать</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-wrapper">
                            <?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/pagination.php"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>

<div class="block-bottom">
    <div class="container">
        <div class="download">
            <a
                    class="download-file"
                    href="img/test.png"
                    style="background-image: url('img/download-bg.png');"
                    download=""
            >
                <span class="download-file__title">Скачать PDF-каталог</span>
                <span class="download-file__subtitle">PDF, 3.2 Мб</span>
            </a>
        </div>
    </div>
</div>

<div class="block block-border-bottom">
    <div class="container">
        <div class="gap-lg-plus">
            <div class="h2">Преимущества продукции 3<span class="red-color">R</span></div>
        </div>
        <div class="card-list card-list--big">
            <div class="card card-advantage">
                <div class="card__view">
                    <svg class="icon">
                        <use href="img/advantage-setting.svg#advantage-setting"></use>
                    </svg>
                </div>
                <div class="card__descr">
                    <div class="card__title h4"><span class="red-color">Прочность</span></div>
                    <div class="card__subtitle">Собственная служба контроля качества, состоящая из 3-х этапов</div>
                </div>
            </div>
            <div class="card card-advantage">
                <div class="card__view">
                    <svg class="icon">
                        <use href="img/advantage-timer.svg#advantage-timer"></use>
                    </svg>
                </div>
                <div class="card__descr">
                    <div class="card__title h4"><span class="red-color">Сроки</span></div>
                    <div class="card__subtitle">Производим на территории России, за счет этого срок изготовления всего 15 дней</div>
                </div>
            </div>
            <div class="card card-advantage">
                <div class="card__view">
                    <svg class="icon">
                        <use href="img/advantage-wallet.svg#advantage-wallet"></use>
                    </svg>
                </div>
                <div class="card__descr">
                    <div class="card__title h4"><span class="red-color">Цена</span></div>
                    <div class="card__subtitle">Производим из сертифицированного сырья. Сохраняем цены за счет производства в РФ</div>
                </div>
            </div>
            <div class="card card-advantage">
                <div class="card__view">
                    <svg class="icon">
                        <use href="img/advantage-brush.svg#advantage-brush"></use>
                    </svg>
                </div>
                <div class="card__descr">
                    <div class="card__title h4"><span class="red-color">Цвета</span></div>
                    <div class="card__subtitle">Обладаем собственной картой цветов, которая насчитывает 600 оттенков.</div>
                </div>
            </div>
            <div class="card card-advantage">
                <div class="card__view">
                    <svg class="icon">
                        <use href="img/advantage-ruler.svg#advantage-ruler"></use>
                    </svg>
                </div>
                <div class="card__descr">
                    <div class="card__title h4"><span class="red-color">Размер</span></div>
                    <div class="card__subtitle">Благодаря современному парку оборудования, производим готовую продукцию от 10,00 см. с шагом 0,5 см</div>
                </div>
            </div>
            <div class="card card-advantage">
                <div class="card__view">
                    <svg class="icon">
                        <use href="img/advantage-shapes.svg#advantage-shapes"></use>
                    </svg>
                </div>
                <div class="card__descr">
                    <div class="card__title h4"><span class="red-color">Логотип</span></div>
                    <div class="card__subtitle">У нас вы можете персонализировать пуллер, нанести логотип вашей компании или вашего заказчика</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="block block-border-bottom block-gray">
    <div class="container">
        <div class="gap-lg-plus">
            <div class="h2"><span class="red-color">Клиенты,</span> которые нам доверяют</div>
        </div>
        <div class="catalog-extra-slider out-container-x">
            <div class="basic-slider-wrap">
                <div class="basic-gallery-slider partners-slider swiper" data-basic-gallery-slider>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide partners-slider__item grayscale-desktop">
                            <img
                                    loading="lazy"
                                    src="img/brand-dkc.png"
                                    class="image"
                                    width="100%"
                                    height="auto"
                                    alt="Изображение блока"
                            >
                        </div>
                        <div class="swiper-slide partners-slider__item grayscale-desktop">
                            <img
                                    loading="lazy"
                                    src="img/brand-legrand.png"
                                    class="image"
                                    width="165"
                                    height="80"
                                    alt="Изображение блока"
                            >
                        </div>
                        <div class="swiper-slide partners-slider__item grayscale-desktop">
                            <img
                                    loading="lazy"
                                    src="img/brand-arlight.png"
                                    class="image"
                                    width="165"
                                    height="80"
                                    alt="Изображение блока"
                            >
                        </div>
                        <div class="swiper-slide partners-slider__item grayscale-desktop">
                            <img
                                    loading="lazy"
                                    src="img/brand-schneider-electric.png"
                                    class="image"
                                    width="165"
                                    height="80"
                                    alt="Изображение блока"
                            >
                        </div>
                        <div class="swiper-slide partners-slider__item grayscale-desktop">
                            <img
                                    loading="lazy"
                                    src="img/brand-philips.png"
                                    class="image"
                                    width="165"
                                    height="80"
                                    alt="Изображение блока"
                            >
                        </div>
                        <div class="swiper-slide partners-slider__item grayscale-desktop">
                            <img
                                    loading="lazy"
                                    src="img/brand-dkc.png"
                                    class="image"
                                    width="165"
                                    height="80"
                                    alt="Изображение блока"
                            >
                        </div>
                        <div class="swiper-slide partners-slider__item grayscale-desktop">
                            <img
                                    loading="lazy"
                                    src="img/brand-legrand.png"
                                    class="image"
                                    width="165"
                                    height="80"
                                    alt="Изображение блока"
                            >
                        </div>
                        <div class="swiper-slide partners-slider__item grayscale-desktop">
                            <img
                                    loading="lazy"
                                    src="img/brand-arlight.png"
                                    class="image"
                                    width="165"
                                    height="80"
                                    alt="Изображение блока"
                            >
                        </div>
                        <div class="swiper-slide partners-slider__item grayscale-desktop">
                            <img
                                    loading="lazy"
                                    src="img/brand-schneider-electric.png"
                                    class="image"
                                    width="165"
                                    height="80"
                                    alt="Изображение блока"
                            >
                        </div>
                        <div class="swiper-slide partners-slider__item grayscale-desktop">
                            <img
                                    loading="lazy"
                                    src="img/brand-philips.png"
                                    class="image"
                                    width="165"
                                    height="80"
                                    alt="Изображение блока"
                            >
                        </div>
                    </div>
                </div>
                <div class="swiper-navigation">
                    <div class="swiper-button-next">
                        <svg class="icon icon-md">
                            <use href="img/sprite.svg#chevron-right"></use>
                        </svg>
                    </div>
                    <div class="swiper-button-prev">
                        <svg class="icon icon-md">
                            <use href="img/sprite.svg#chevron-left"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="block block-border-bottom">
    <div class="container">
        <div class="contact-us">
            <div class="contact-us__item">
                <div class="contact-address">
                    <div class="gap-lg-plus">
                        <div class="h2">Свяжитесь <span class="red-color">с нами</span></div>
                    </div>
                    <div class="gap-lg">
                        <div class="gap-md">
                            <div class="h4">Офис в москве</div>
                        </div>
                        <div class="contact-address-info">
                            <span>Москва, ул. Мартынова, д. 62, корпус 6</span>
                            <span><a class="link link-tdu" href="mailto:2588081@3rzip.ru">2588081@3rzip.ru</a></span>
                            <span><a class="contact-address-phone" href="tel:+74951183770">+7 (495) 118-37-70</a></span>
                        </div>
                    </div>
                    <div class="">
                        <div class="social">
                            <ul class="list-reset social__list">
                                <li>
                                    <a class="social-vk" href="javascript:;" target="_blank" aria-label="Наша страничка в Вконтакте">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#soc-logo-vk"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a class="social-ok" href="javascript:;" target="_blank" aria-label="Наша страничка в Одноклассники">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#soc-logo-ok"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-us__item">
                <form class="contact-form form visually-hidden tmp" action="#" method="">
                    <div class="contact-form-success">
                        <div class="contact-form-success__view">
                            <svg class="icon" data-contact-form-success-ok>
                                <use href="img/sprite.svg#tick-circle"></use>
                            </svg>
                        </div>
                        <div class="contact-form-success__descr">
                            <div class="contact-form-success__title h3">Ваша заявка отправлена</div>
                            <div class="contact-form-success__subtitle">Мы свяжемся с вами в ближайшее время</div>
                        </div>
                    </div>
                    <div class="contact-form-design">
                        <svg class="icon">
                            <use href="img/logo-design.svg#logo-design"></use>
                        </svg>
                    </div>
                    <div class="gap-md field-wrapper">
                        <div class="h3">Получить консультацию</div>
                    </div>
                    <div class="gap-md field-wrapper">
                        <div class="titled-input titled-input-label">
                            <div class="input-title">Ваше имя</div>
                            <div class="input-wrapper">
                                <input
                                        class="input-reset input"
                                        type="text"
                                        name=""
                                        value=""
                                        placeholder="Ваше имя"
                                        autocomplete="off"
                                        required
                                >
                            </div>
                        </div>
                    </div>
                    <div class="gap-md field-wrapper">
                        <div class="titled-input titled-input-label">
                            <div class="input-title">Номер телефона или электронная почта</div>
                            <div class="input-wrapper">
                                <input
                                        class="input-reset input"
                                        type="text"
                                        name=""
                                        value=""
                                        placeholder="Номер телефона или электронная почта"
                                        autocomplete="off"
                                        required
                                >
                            </div>
                        </div>
                    </div>
                    <div class="gap-md field-wrapper">
                        <div class="titled-input titled-input-label">
                            <div class="input-title">Сообщение</div>
                            <div class="input-wrapper">
                            <textarea
                                    class="textarea"
                                    name=""
                                    placeholder="Задайте ваш вопрос"
                            ></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="gap-md field-wrapper">
                        <span class="custom-checkbox">
                            <input id="contactFormAgree" class="custom-checkbox__input" type="checkbox" checked>
                            <label for="contactFormAgree" class="custom-checkbox__label-for">Отправляя заявку, я соглашаюсь с условиями <a class="link link-tdu" href="javascript:;">политики обработки персональных данных</a></label>
                        </span>
                    </div>
                    <div class="field-wrapper">
						<?/* change type to "submit" */?>
                        <button class="btn-reset btn btn-primary" type="button" data-contact-form-success>
                            <span class="btn__text">Отправить</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>