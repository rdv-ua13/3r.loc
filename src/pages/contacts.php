<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="gap-sm-plus">
	<div class="container">
		<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/breadcrumbs.php"); ?>
	</div>
</div>

<div class="gap-xxl">
	<div class="container">
		<div class="h1"><span class="red-color">Контакты</span> производства и офиса</div>
	</div>
</div>

<div class="block-bottom">
	<div class="container">
        <div class="contacts">
            <div class="contacts__item">
                <div class="gap-lg contacts__title">Офис</div>
                <div class="gap-lg contacts__descr">
                    <div class="contacts__descr-item contacts__descr-item--address">
                        <div class="contacts__descr-title">Адрес</div>
                        <div class="contacts__descr-content">111524, Москва, ул. Электродная, д. 13А, стр. 2, офис 18</div>
                        <div class="contacts__descr-caption">Часы работы: ПН-ПТ: 9:30 – 18:30, СБ-ВС: выходной</div>
                    </div>
                    <div class="contacts__descr-item">
                        <div class="contacts__descr-title">Номер телефона</div>
                        <div class="contacts__descr-content">+7 495 258-80-81</div>
                    </div>
                    <div class="contacts__descr-item">
                        <div class="contacts__descr-title">Электронная почта</div>
                        <div class="contacts__descr-content">2588081@3rzip.ru</div>
                    </div>
                </div>
                <div class="contacts__map">
                    <div class="contacts__map-content" data-coord="55.798186, 37.489652"></div>
                </div>
            </div>
            <div class="contacts__item">
                <div class="gap-lg contacts__title">Производство</div>
                <div class="gap-lg contacts__descr">
                    <div class="contacts__descr-item contacts__descr-item--address">
                        <div class="contacts__descr-title">Адрес</div>
                        <div class="contacts__descr-content">г. Балашиха, мкр. Савино, ул. Савинская, дом 10</div>
                        <div class="contacts__descr-caption">Часы работы: ПН-ПТ: 9:30 – 18:30, СБ-ВС: выходной</div>
                    </div>
                </div>
                <div class="contacts__map">
                    <div class="contacts__map-content" data-coord="55.798186, 37.489652"></div>
                </div>
            </div>
        </div>

	</div>
</div>

<div class="block block-border-bottom block-gray">
	<div class="container">
		<div class="contact-us">
			<div class="contact-us__item">
				<div class="contact-address">
					<div class="gap-lg-plus">
						<div class="h2">Связаться с администрацией</div>
					</div>
					<div class="gap-lg-plus">
						<div class="text-bigger">Вы можете обратится к руководителю отдела по почте:</div>
					</div>
                    <div class="contact-us-person">
                        <div class="contact-us-person__item">
                            <div class="contact-us-person__title">Административный директор</div>
                            <div class="contact-us-person__name">Фещенко Ирина Июстиновна</div>
                            <div class="contact-us-person__data">
                                <a class="red-color" href="mailto:i.feshenko@3rzip.ru">i.feshenko@3rzip.ru</a>
                            </div>
                        </div>
                        <div class="contact-us-person__item">
                            <div class="contact-us-person__title">Коммерческий директор</div>
                            <div class="contact-us-person__name">Коммерческий директор</div>
                            <div class="contact-us-person__data">
                                <a class="red-color" href="mailto:r.okishev@3rzip.ru">r.okishev@3rzip.ru</a></div>
                        </div>
                        <div class="contact-us-person__item">
                            <div class="contact-us-person__title">Маркетолог</div>
                            <div class="contact-us-person__name">Литвиненко Валерия</div>
                            <div class="contact-us-person__data">
                                <a class="red-color" href="mailto:v.litvinenko@3rzip.ru">v.litvinenko@3rzip.ru</a></div>
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