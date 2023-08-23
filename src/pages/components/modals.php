<?/* Позвоните мне */?>
<div id="modal_call_me" class="modal">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h3">Позвоните мне</div>
            </div>

            <form class="contact-form form" action="#" method="">
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

<?/* Связаться с менеджером */?>
<div id="modal_contact_manager" class="modal">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h3">Связаться с менеджером</div>
            </div>

            <form class="contact-form form" action="#" method="">
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