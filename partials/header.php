<?
/*
 * @package aklion
*/
?>

<div class="navbar-fixed">
    <nav>
        <div class="hide-on-med-and-up">
            <div class="row al-no-vmargin">
				<div class="col s12">
					<a class="button-collapse" data-activates="al-hamburger-menu" href="#">
						<i id="al-hamburger-menu-anchor" class="fa fa-bars" aria-hidden="true"></i>
					</a>
					<div class="side-nav collection" id="al-hamburger-menu">
						<a class="collection-item al-collection-item al-no-vpadding" href="/cart/">
							<img class="responsive-img" src="<?= bloginfo('template_directory'); ?>/assets/images/cart-green.png" alt="Корзина"/>	
							<span id="al-menu-cart-span"><? the_cart_total(); ?></span>
						</a>
						<h6 id="al-menu-cart-h6">Корзина</h6>
						<div class="grey al-menu-divider"></div>
						<a class="collection-item al-collection-item" href="/">
							<img id="al-menu-general-image" src="<?= bloginfo('template_directory'); ?>/assets/images/logos/logo-small.png" alt="Аклион">
							<span>Главная</span>
						</a>
						<a class="collection-item al-collection-item" href="/pizza/">
							<img src="<?= bloginfo('template_directory'); ?>/assets/images/price-icons/pizza_ico.png" alt="Роллы"/>
							<span>Пицца</span>
						</a>
						<a class="collection-item al-collection-item" href="/rolls/">
							<img src="<?= bloginfo('template_directory'); ?>/assets/images/price-icons/roll_ico.png" alt="Роллы"/>
							<span>Роллы</span>
						</a>
						<a class="collection-item al-collection-item" href="/sets/">
							<img src="<?= bloginfo('template_directory'); ?>/assets/images/price-icons/set_ico.png" alt="Сеты"/>
							<span>Сеты</span>
						</a>
						<a class="collection-item al-collection-item" href="/woks/">
							<img src="<?= bloginfo('template_directory'); ?>/assets/images/price-icons/vok_ico.png" alt="Вок"/>
							<span>Вок</span>
						</a>
						<a class="collection-item al-collection-item" href="/sushi/">
							<img src="<?= bloginfo('template_directory'); ?>/assets/images/price-icons/salat_ico.png" alt="Салаты"/>
							<span>Салаты</span>
						</a>
						<a class="collection-item al-collection-item" href="/sushi/">
							<img src="<?= bloginfo('template_directory'); ?>/assets/images/price-icons/snack_ico.png" alt="Закуски"/>
							<span>Закуски</span>
						</a>
						<a class="collection-item al-collection-item" href="/freshs/">
							<img src="<?= bloginfo('template_directory'); ?>/assets/images/price-icons/fresh_ico.png" alt="Напитки"/>
							<span>Напитки</span>
						</a>
						<div class="grey al-menu-divider"></div>
						<a class="collection-item al-collection-item" href="/about/">
							<span>О нас</span>
						</a>
						<a class="collection-item al-collection-item" href="/conditions/">
							<span id="al-menu-condition-item">Условия оплаты и доставки</span>
						</a>
						<a class="collection-item al-collection-item" href="/shares/">
							<span>Акции</span>
						</a>
						<a class="collection-item al-collection-item" href="/vacancies/">
							<span>Вакансии</span>
						</a>
						<a class="collection-item al-collection-item" href="/offer/">
							<span>Оферты</span>
						</a>
					</div>
				</div>
			</div>
        </div>
		
        <div id="al-nav-1" class="hide-on-small-and-down">
            <div class="container">
                <a href="/">
                    <img src="<?= bloginfo('template_directory'); ?>/assets/images/logos/logo.png" id="al-logo" alt="Аклион">
                </a>
				<ul id="al-nav-1-left" class="left hide-on-small-and-down">
					<li>
						<a href="/about/" class="al-hoverable">О нас</a>
					</li>
					<li>
						<a href="/conditions/" class="al-hoverable">Условия оплаты и доставки</a>
					</li>
					<li>
						<a href="/shares/" class="al-hoverable">Акции</a>
					</li>
					<li>
						<a href="/vacancies/" class="al-hoverable">Вакансии</a>
					</li>
					<!--<li>
						<a href="/offer/" class="al-hoverable">Оферты</a>
					</li>-->
				</ul>
		</div>
        </div>
        <div id="al-nav-2" class="row black al-no-vmargin">
            <div class="container valign-wrapper">
				<div id="al-city" class="col l1 m2 s3 al-no-hpadding">
					<h6 class="white-text">г. Пенза</h6>
                </div>
                <div id="al-time" class="col l3 m4 hide-on-med-and-down white-text center-align">
                    <div class="row al-no-vmargin">
						<span class="al-no-vmargin">Работаем</span>
						<span id="al-work-time-value"  class="al-no-vmargin"></span>
					</div>
					<div class="row al-no-vmargin">
						<ul id="al-work-day-wrapper">
							<li><a href="#" class="al-day al-hoverable" data="1">Пн</a></li>
							<li><a href="#" class="al-day al-hoverable" data="2">Вт</a></li>
							<li><a href="#" class="al-day al-hoverable" data="3">Ср</a></li>
							<li><a href="#" class="al-day al-hoverable" data="4">Чт</a></li>
							<li><a href="#" class="al-day al-hoverable" data="5">Пт</a></li>
							<li><a href="#" class="al-day al-holiday" data="6">Сб</a></li>
							<li><a href="#" class="al-day al-holiday" data="0">Вс</a></li>
						</ul>
					</div>
                </div>
                <div class="col l3 m3 s4">
					<a href="tel:303-414">
						<div class="row valign-wrapper al-no-vmargin">
							<img id="al-phone-image" class="responsive-img" src="<?= bloginfo('template_directory'); ?>/assets/images/phone.png" alt="Телефон">
							<h5 id="al-phone-value">303-414</h5>
						</div>
					</a>
                </div>
				<div id="al-mobile-logo-wrapper" class="col s6 hide-on-med-and-up">
					<div class="row al-no-vmargin valign-wrapper">
						<div class="col s4 al-no-hpadding">
							<a href="/" class="valign-wrapper">
								<img id="al-logo-small" src="<?= bloginfo('template_directory'); ?>/assets/images/logos/logo-small.png" class="responsive-img" alt="Аклион">
							</a>
						</div>
						<div class="col s8">
							<h6 class="white-text">AKLION</h6>
						</div>
					</div>
				</div>
                <div id="al-cart" class="col l5 m5 hide-on-small-and-down valign-wrapper">
                    <div id="al-cart-inner" class="row al-no-vmargin valign-wrapper">
                        <div class="col l2 hide-on-med-and-down">
                            <a id="al-cart-image" href="#" onclick="showCartMini(event)"></a>
                        </div>
                        <div class="col l5 m6 center-align al-no-hpadding">
                            <h5 id="al-cart-total"><? the_cart_total(); ?></h5>
                        </div>
                        <div class="col l5 m6 al-no-hpadding">
							<a href="/cart/" id="al-cart-checkout">ОФОРМИТЬ ЗАКАЗ</a>
                        </div>
						<div id="al-float-cart" class="card z-depth-3">
							<div id="al-float-cart-inner" class="row al-no-hmargin">
								<? get_template_part('/partials/items-mini'); ?>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="al-nav-3" class="hide-on-small-and-down">
            <div class="">
                <div id="al-nav-3-items-wrapper" class="row valign-wrapper al-container-additional-1">
                    <div class="col l2 m2 s6 al-no-hpadding">
                        <a href="/pizza/" class="valign-wrapper al-hoverable">
                            <img src="<?= bloginfo('template_directory'); ?>/assets/images/price-icons/pizza_ico.png" alt="Пицца"/>
                            <span>Пицца</span>
                        </a>
                    </div>
                    <div class="col l2 m2 s6 al-no-hpadding">
						<a class='dropdown-button valign-wrapper al-hoverable' href='#' data-activates='dropdown_rolls'>
							<img src="<?= bloginfo('template_directory'); ?>/assets/images/price-icons/roll_ico.png" alt="Роллы"/>
							<span>Роллы</span>
						</a>
						<ul id='dropdown_rolls' class='dropdown-content'>
							<li>
								<a href="/rolls/?type=roll_classic" class="al-hoverable">Классические роллы</a>
							</li>
							<li>
								<a href="/rolls/?type=roll_baked" class="al-hoverable">Запеченые роллы</a>
							</li>
							<li>
								<a href="/rolls/?type=roll_hot" class="al-hoverable">Горячие роллы</a>
							</li>
							<li>
								<a href="/rolls/?type=roll_original" class="al-hoverable">Оригинальные роллы</a>
							</li>
							<li>
								<a href="/rolls/" class="al-hoverable">Все роллы</a>
							</li>
						</ul>
                    </div>
                    <div class="col l2 m2 s6 al-no-hpadding">
                        <a href="/sets/" class="valign-wrapper al-hoverable">
                            <img src="<?= bloginfo('template_directory'); ?>/assets/images/price-icons/set_ico.png" alt="Сеты"/>
                            <span>Сеты</span>
                        </a>
                    </div>
                    <div class="col l2 m2 s6 al-no-hpadding">
                        <a href="/woks/" class="valign-wrapper al-hoverable">
                            <img src="<?= bloginfo('template_directory'); ?>/assets/images/price-icons/vok_ico.png" alt="Вок"/>
                            <span>Вок</span>
                        </a>
                    </div>
                    <div class="col l2 m2 s6 al-no-hpadding">
                        <a href="/salads/" class="valign-wrapper al-hoverable">
                            <img src="<?= bloginfo('template_directory'); ?>/assets/images/price-icons/salat_ico.png" alt="Салаты"/>
                            <span>Салаты</span>
                        </a>
                    </div>
                    <div class="col l2 m2 s6 al-no-hpadding">
                        <a href="/snacks/" class="valign-wrapper al-hoverable">
                            <img src="<?= bloginfo('template_directory'); ?>/assets/images/price-icons/snack_ico.png" alt="Закуски"/>
                            <span>Закуски</span>
                        </a>
                    </div>
					<div class="col l2 m2 s6 al-no-hpadding">
                        <a href="/freshs/" class="valign-wrapper al-hoverable">
                            <img src="<?= bloginfo('template_directory'); ?>/assets/images/price-icons/fresh_ico.png" alt="Напитки"/>
                            <span>Напитки</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>