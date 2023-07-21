<?/* auth */?>
<div id="modal-auth" class="modal">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Войти в личный кабинет</div>
                <div class="modal__subtitle">
                    Нет аккаунта?
                    <a
                            class="link link-red"
                            href="javascript:;"
                            data-fancybox
                            data-src="#modal-reg"
                    >Зарегистрироваться</a>
                </div>
            </div>

            <form id="" class="form" method="" action="javascript:;">
                <div class="form__field-area">
                    <div class="form__field">
                        <input
                                id=""
                                class="input-reset form__input"
                                type="email"
                                name=""
                                placeholder="Email"
                                required
                        >
                    </div>
                    <div class="form__field">
                        <input
                                id=""
                                class="input-reset form__input form__input-icon"
                                type="password"
                                name=""
                                placeholder="Пароль"
                                data-password-target
                                required
                        >
                        <label class="form__input-btn">
                            <svg class="icon icon-default">
                                <use href="img/sprite.svg#fill-eye"></use>
                            </svg>
                            <svg class="icon icon-show">
                                <use href="img/sprite.svg#fill-eye-slash"></use>
                            </svg>
                            <input
                                    type="checkbox"
                                    class="visually-hidden"
                                    data-password-switcher
                            >
                        </label>
                        <div class="form__field-ps">
                            <a
                                    class="link link-red"
                                    href="javascript:;"
                                    data-fancybox
                                    data-src="#modal-restore"
                            >Напомнить пароль</a>
                        </div>
                    </div>
                </div>
                <div class="form__field-btn form__field-btn--single">
                    <button class="btn-reset btn btn-primary" type="submit">
                        <span class="btn__text">Войти</span>
                    </button>
                </div>
            </form>
        </div>
        <div class="modal__content-item">
            <div class="modal__soc">
                <div class="h5">Авторизуйтесь через соцсети</div>
                <div class="modal__soc-links">
                    <a class="soc-ya" href="javascript:;">
                        <svg class="icon">
                            <use href="img/sprite.svg#soc-logo-ya"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?/* reg */?>
<div id="modal-reg" class="modal">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Регистрация</div>
                <div class="modal__subtitle">
                    Есть аккаунт?
                    <a
                            class="link link-red"
                            href="javascript:;"
                            data-fancybox
                            data-src="#modal-auth"
                    >Войти</a>
                </div>
            </div>

            <form id="" class="form" method="" action="javascript:;">
                <div class="form__field-area">
                    <div class="form__field">
                        <div class="client-type">
                            <div class="client-type__item">
                                <span class="custom-radio">
                                    <input
                                            id="ct-individual"
                                            class="custom-radio__input"
                                            type="radio"
                                            name="client-type"
                                            checked
                                            data-ct
                                    >
                                    <label for="ct-individual" class="custom-radio__label-for">Физическое лицо</label>
                                </span>
                            </div>
                            <div class="client-type__item">
                                <span class="custom-radio">
                                    <input
                                            id="ct-entity"
                                            class="custom-radio__input"
                                            type="radio"
                                            name="client-type"
                                            data-ct
                                    >
                                    <label for="ct-entity" class="custom-radio__label-for">Юридическое лицо</label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form__field">
                        <input
                                id=""
                                class="input-reset form__input"
                                type="email"
                                name=""
                                placeholder="Email"
                                required
                        >
                    </div>
                    <div class="form__field" data-ct-entity-bind>
                        <input
                                id=""
                                class="input-reset form__input"
                                type="text"
                                name=""
                                placeholder="ИНН организации"
                                required
                        >
                    </div>
                    <div class="form__field">
                        <input
                                id=""
                                class="input-reset form__input form__input-icon"
                                type="password"
                                name=""
                                placeholder="Пароль"
                                data-password-target
                                required
                        >
                        <label class="form__input-btn">
                            <svg class="icon icon-default">
                                <use href="img/sprite.svg#fill-eye"></use>
                            </svg>
                            <svg class="icon icon-show">
                                <use href="img/sprite.svg#fill-eye-slash"></use>
                            </svg>
                            <input
                                    type="checkbox"
                                    class="visually-hidden"
                                    data-password-switcher
                            >
                        </label>
                    </div>
                    <div class="form__field">
                        <span class="custom-checkbox">
                            <input id="reg-mailing" class="custom-checkbox__input" type="checkbox">
                            <label for="reg-mailing" class="custom-checkbox__label-for text-secondary-color">Подписаться на рассылку акций</label>
                        </span>
                    </div>
                </div>
                <div class="form__field-btn form__field-btn--single">
                    <button class="btn-reset btn btn-primary" type="submit">
                        <span class="btn__text">Зарегистрироваться</span>
                    </button>
                </div>
                <div class="form__field-agree">
                    Нажимая кнопку «Зарегистрироваться», Вы соглашаетесь с условиями
                    <a class="link link-red" href="javascript:;">политики конфиденциальности</a>
                </div>
            </form>
        </div>
        <div class="modal__content-item">
            <div class="modal__soc">
                <div class="h5">Авторизуйтесь через соцсети</div>
                <div class="modal__soc-links">
                    <a class="soc-ya" href="javascript:;">
                        <svg class="icon">
                            <use href="img/sprite.svg#soc-logo-ya"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?/* restore pass */?>
<div id="modal-restore" class="modal">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Напомнить пароль</div>
                <div class="modal__subtitle">Введите электронную почту, к которой привязан ваш аккаунт и мы отправим вам новый пароль</div>
                <div>
                    <a
                            class="link link-red"
                            href="javascript:;"
                            data-fancybox
                            data-src="#modal-auth"
                    >Войти в аккаунт</a>
                </div>
            </div>

            <form id="" class="form" method="" action="javascript:;">
                <div class="form__field-area">
                    <div class="form__field">
                        <input
                                id=""
                                class="input-reset form__input"
                                type="email"
                                name=""
                                placeholder="Email"
                                required
                        >
                    </div>
                </div>
                <div class="form__field-btn form__field-btn--single">
                    <button
                            class="btn-reset btn btn-primary"
                            type="button"
                            data-fancybox
                            data-src="#modal-restore-final"
                    >
                        <span class="btn__text">Отправить пароль</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="modal-restore-final" class="modal">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header modal__header-icon">
                <div class="modal__title-icon">
                    <svg class="icon">
                        <use href="img/lock-2-opened.svg#lock-2-opened"></use>
                    </svg>
                    <div class="h4">Мы отправили пароль на вашу почту</div>
                </div>
                <div class="modal__subtitle">Проверьте указанную электронную почту.<br> Если письма нет, то проверьте папку Спам.</div>
                <div class="form__field-ps">
                    <a
                            class="link link-red"
                            href="javascript:;"
                            data-fancybox
                            data-src="#modal-auth"
                    >Войти в аккаунт</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?/* estimate */?>
<div id="modal-estimate" class="modal modal-big">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Добавить в смету</div>
            </div>

            <form id="" class="form" method="" action="javascript:;">
                <div class="form__field-area">
                    <div class="form__field">
                        <select
                                id=""
                                class="input-reset form__input form__input--select2 js-select2"
                                name=""
                                required
                        >
                            <option value="0">Смета 03.02.2023 12:58:02</option>
                            <option value="1">Селект 2</option>
                            <option value="2">Селект 3</option>
                        </select>
                        <div class="form__field-ps">
                            <span class="text-secondary-color">Выберите смету из существующих или введите название новой</span>
                        </div>
                    </div>
                </div>
                <div class="form__field-btn form__field-btn--single">
                    <button
                            class="btn-reset btn btn-primary"
                            type="submit"
                            data-notice="compare"
                    >
                        <span class="btn__text">Добавить в смету</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?/* share */?>
<div id="modal-share" class="modal modal-big">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title-share">
                    <picture>
                        <source srcset="img/product.webp" type="image/webp">
                        <img
                                loading="lazy"
                                src="img/product.png"
                                class="image"
                                width="60"
                                height="60"
                                alt="Изображение блока"
                        >
                    </picture>
                    <div class="h4">SE Удлинитель катушечный Thorsman 4 роз 15м 3х1.5 IP20</div>
                </div>
            </div>

            <div class="gap-sm">
                <div class="submit-field-wrapper" data-share-link>
                    <div class="submit-field-input flex-1">
                        <input
                                class="input-reset input"
                                type="text"
                                name=""
                                placeholder="https://www.amperkin.ru/product/774420/?utm_source=dire..."
                                value="https://www.amperkin.ru/product/774420/?utm_source=dire..."
                                data-share-link-input
                        >
                    </div>
                    <button class="btn-reset btn btn-primary" type="button" data-share-link-btn>
                        <span class="btn__text">Копировать</span>
                    </button>
                </div>
            </div>

            <div class="modal__soc modal-share-soc">
                <div class="modal__soc-links">
                    <a class="soc-vk" href="javascript:;" target="_blank">
                        <svg class="icon">
                            <use href="img/sprite.svg#soc-logo-vk"></use>
                        </svg>
                    </a>
                    <a class="soc-ok" href="javascript:;" target="_blank">
                        <svg class="icon">
                            <use href="img/sprite.svg#soc-logo-ok"></use>
                        </svg>
                    </a>
                    <a class="soc-tg" href="javascript:;" target="_blank">
                        <svg class="icon">
                            <use href="img/sprite.svg#soc-logo-tg"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?/* share shopping cart */?>
<div id="modal-share-cart" class="modal modal-big">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title-share">
                    <div class="h4">Поделиться корзиной</div>
                </div>
            </div>

            <div class="gap-sm">
                <div class="submit-field-wrapper" data-share-link>
                    <div class="submit-field-input flex-1">
                        <input
                                class="input-reset input"
                                type="text"
                                name=""
                                placeholder="https://www.amperkin.ru/product/774420/?utm_source=dire..."
                                value="https://www.amperkin.ru/product/774420/?utm_source=dire..."
                                data-share-link-input
                        >
                    </div>
                    <button class="btn-reset btn btn-primary" type="button" data-share-link-btn>
                        <span class="btn__text">Копировать</span>
                    </button>
                </div>
            </div>

            <div class="modal__soc modal-share-soc">
                <div class="modal__soc-links">
                    <a class="soc-vk" href="javascript:;" target="_blank">
                        <svg class="icon">
                            <use href="img/sprite.svg#soc-logo-vk"></use>
                        </svg>
                    </a>
                    <a class="soc-ok" href="javascript:;" target="_blank">
                        <svg class="icon">
                            <use href="img/sprite.svg#soc-logo-ok"></use>
                        </svg>
                    </a>
                    <a class="soc-tg" href="javascript:;" target="_blank">
                        <svg class="icon">
                            <use href="img/sprite.svg#soc-logo-tg"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?/* loged review */?>
<div id="modal-loged-review" class="modal modal-big modal-create-review">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Новый отзыв</div>
            </div>

            <form id="" class="form" method="" action="javascript:;">
                <div class="form__field-area">
                    <div class="form__field">
                        <span class="star-rating-wrapper">
                            <span class="star-rating-value">Оцените товар:</span>
                            <span class="star-rating star-rating-label star-rating--max star-rating--stroke">
                                <span class="star-rating__container">
                                    <input
                                            id="starrateTestOne"
                                            class="visually-hidden"
                                            type="radio"
                                            name="createReviewStarrate"
                                            value="5"
                                    >
                                    <label for="starrateTestOne" data-star-grade="&nbsp;– отлично">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#fill-star"></use>
                                        </svg>
                                    </label>

                                    <input
                                            id="starrateTestTwo"
                                            class="visually-hidden"
                                            type="radio"
                                            name="createReviewStarrate"
                                            value="4"
                                    >
                                    <label for="starrateTestTwo" data-star-grade="&nbsp;– хорошо">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#fill-star"></use>
                                        </svg>
                                    </label>

                                    <input
                                            id="starrateTestThree"
                                            class="visually-hidden"
                                            type="radio"
                                            name="createReviewStarrate"
                                            value="3"
                                    >
                                    <label for="starrateTestThree" data-star-grade="&nbsp;– удовлетворительно">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#fill-star"></use>
                                        </svg>
                                    </label>

                                    <input
                                            id="starrateTestFour"
                                            class="visually-hidden"
                                            type="radio"
                                            name="createReviewStarrate"
                                            value="2"
                                    >
                                    <label for="starrateTestFour" data-star-grade="&nbsp;– плохо">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#fill-star"></use>
                                        </svg>
                                    </label>

                                    <input
                                            id="starrateTestFive"
                                            class="visually-hidden"
                                            type="radio"
                                            name="createReviewStarrate"
                                            value="1"
                                    >
                                    <label for="starrateTestFive" data-star-grade="&nbsp;– ужасно">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#fill-star"></use>
                                        </svg>
                                    </label>
                                </span>
                                <span class="star-rating-grade"></span>
                            </span>
                        </span>
                    </div>
                    <div class="form__field">
                        <span class="custom-checkbox">
                            <input id="review-recommend" class="custom-checkbox__input" type="checkbox">
                            <label for="review-recommend" class="custom-checkbox__label-for">Я рекомендую данный товар к покупке</label>
                        </span>
                    </div>
                    <div class="form__field form__field-g">
                        <div class="form__field-title">Поделитесь впечатлениями о товаре</div>
                        <input
                                id=""
                                class="input-reset form__input"
                                type="text"
                                name=""
                                placeholder="Достоинства"
                        >
                        <input
                                id=""
                                class="input-reset form__input"
                                type="text"
                                name=""
                                placeholder="Недостатки"
                        >
                        <input
                                id=""
                                class="input-reset form__input"
                                type="text"
                                name=""
                                placeholder="Комментарий к отзыву"
                        >
                    </div>
                    <div class="form__field">
                        <div class="dropfile-wrapper">
                            <div class="dropfile-title">Добавьте фотографии</div> <!--Добавьте фотографии-->
                            <div class="dropfile js-upload-photos" data-type="image" data-input-name="PHOTOS[]">
                                <div class="dropfile-gallery"></div>
                                <label class="dropfile-field js-drop-file">
                                    <input class="visually-hidden dropfile-input js-change-file" type="file" accept="image/*" multiple>
                                    <div class="dropfile-area">
                                        <div class="dropfile-area__view">
                                            <svg class="icon icon-sm">
                                                <use href="img/sprite.svg#image-plus"></use>
                                            </svg>
                                            <div class="dropfile-area__view-dragover">
                                                <svg class="icon icon-sm">
                                                    <use href="img/sprite.svg#copy"></use>
                                                </svg>
                                                <span>Перетащите фото сюда</span>
                                            </div>
                                        </div>
                                        <div class="dropfile-area__text">
                                            <div class="dropfile-area__title dropfile-area__title--desktop">
                                                <a class="link-red" href="javascript:;">Нажмите на ссылку</a>
                                                <span>, чтобы выбрать фотографии или просто перетащите их в эту область</span>
                                            </div>
                                            <div class="dropfile-area__title dropfile-area__title--mobile">
                                                <a class="link-red" href="javascript:;">Выбрать файлы</a>
                                            </div>
                                            <div class="dropfile-area__accept">До 10 изображений в формате PNG, JPEG</div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form__field">
                        <div class="field-wrapper">
                            <div class="label">
                                <span class="label-title">
                                    <span class="label-text">Ваше имя</span>
                                </span>
                                <input
                                        id=""
                                        class="input-reset form__input"
                                        type="text"
                                        name=""
                                        placeholder="Ваше имя"
                                >
                            </div>
                        </div>
                    </div>
                    <div class="form__field form__field-g form__field-g--horizontal">
                        <div class="field-wrapper">
                            <div class="label">
                                <span class="label-title">
                                    <span class="label-text">Город</span>
                                </span>
                                <input
                                        id=""
                                        class="input-reset form__input"
                                        type="text"
                                        name=""
                                        placeholder="Город"
                                >
                            </div>
                        </div>
                        <div class="field-wrapper">
                            <div class="label">
                                <span class="label-title">
                                    <span class="label-text">Телефон для связи</span>
                                </span>
                                <input
                                        id=""
                                        class="input-reset form__input"
                                        type="text"
                                        name=""
                                        placeholder="Телефон для связи"
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form__field-btn form__field-btn--single">
                    <?/* // todo (@Masterkov): временно data-fancybox. Поменять на type="submit" */?>
                    <button class="btn-reset btn btn-primary" type="button" data-fancybox data-src="#modal-review-success">
                        <span class="btn__text">Отправить отзыв</span>
                    </button>
                </div>
                <div class="form__field-ps">
                    Оставляя отзыв, вы соглашаетесь с условиями
                    <a
                            class="link link-red"
                            href="javascript:;"
                            data-fancybox
                            data-src="#modal-restore"
                    >политики конфиденциальности</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?/* review success */?>
<div id="modal-review-success" class="modal modal-big">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header modal__header-icon">
                <div class="modal__title-icon modal__title-column">
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-color-checkbox-rec"></use>
                    </svg>
                    <div class="h4 text-center">Ваш отзыв успешно отправлен на модерацию</div>
                </div>
                <div class="modal__subtitle text-center">После проверки ваш отзыв будет опубликован на странице товара</div>
            </div>
        </div>
    </div>
</div>

<?/* cart delete */?>
<div id="modal-cart-delete" class="modal modal-cart-delete">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Удалить товары</div>
                <div class="modal__subtitle">Вы уверены, что хотите удалить выбранные товары из корзины?</div>
            </div>

            <div class="btn-g modal-cart-delete__btn-g">
                <button class="btn-reset btn btn-primary">
                    <span class="btn__text">Удалить</span>
                </button>
                <button class="btn-reset btn btn-light">
                    <span class="btn__text">Отменить</span>
                </button>
            </div>
        </div>
    </div>
</div>