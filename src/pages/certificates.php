<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="gap-sm-plus">
	<div class="container">
		<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/breadcrumbs.php"); ?>
	</div>
</div>

<div class="gap-lg-plus">
	<div class="container">
        <div class="h1"><span class="red-color">Сертификаты</span> соответствия</div>
	</div>
</div>

<div class="block block--mobile has-bg has-bg--mobile block-gray--mobile">
	<div class="container">
		<div class="">
            <div class="gap-lg h3 mobile-only">Преимущества работы в компании</div>
            <div class="page-subtitle page-subtitle--fz-sm">Сертификаты соответствия являются гарантией того, что продукция или услуги соответствуют требованиям государственных стандартов и нормативов</div>
		</div>
	</div>
</div>

<div class="block block-border-bottom block-gray--mobile">
	<div class="container">
		<div class="certificates">
            <div class="certificates__item">
                <div class="certificates__view">
                    <img
                        loading="lazy"
                        class="image"
                        src="img/certificates-1.png"
                        width="100%"
                        height="auto"
                        alt="Изображение блока"
                    >
                </div>
                <div class="certificates__descr">Сертификат соответствия №0104866</div>
            </div>
            <div class="certificates__item">
                <div class="certificates__view">
                    <img
                        loading="lazy"
                        class="image"
                        src="img/certificates-2.png"
                        width="100%"
                        height="auto"
                        alt="Изображение блока"
                    >
                </div>
                <div class="certificates__descr">Сертификат соответствия №0104855</div>
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
						<button class="btn-reset btn btn-primary" type="submit">
							<span class="btn__text">Отправить</span>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>