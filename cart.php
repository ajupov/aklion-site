<?
/*
 * @package aklion
 *
 * Template Name: Cart
 */
?>

<? get_header(); ?>
		<main>
			<div class="white container z-depth-3">
				<div class="al-red-divider"></div>
				<div class="container al-inner-container">
					<div class="al-green valign-wrapper">
						<h5 class="valign white-text">Корзина покупателя</h5>
					</div>
					<div id="al-green-space" class="row al-no-hmargin al-no-vmargin">
						<div class="col l8 m12 s12">
						<?
							get_template_part('/partials/items-cart');
						?>
						</div>
						<div class="col l4 m12 s12">
							<div class="card hoverable">
								<div id="al-cart-submit-wrapper" class="row">
									<div class="col l12 m12 s12">
										<h5><strong>Итого: <span id="al-checkout-total" class="green-text"><? the_cart_total() ?></span></strong></h5>
									</div>
									<div class="input-field col l12 m12 s12">
										<input id="name" type="text" class="validate al-no-vmargin">
										<label for="name" data-error="Введите имя">Ваше имя:</label>
									</div>
									<div class="input-field col l12 m12 s12">
										<input id="phone" type="tel" class="validate al-no-vmargin">
										<label for="phone" data-error="Введите номер телефона">Ваш телефон:</label>
									</div>
									<div class="input-field col l8 m8 s8">
										<input id="street" type="text" class="validate al-no-vmargin">
										<label for="street" data-error="Введите название улицы">Улица:</label>
									</div>
									<div class="input-field col l4 m4 s4">
										<input id="house" type="text" class="validate al-no-vmargin">
										<label for="house" data-error="Введите номер дома">Дом:</label>
									</div>
									<div class="input-field col l6 m6 s6">
										<input id="porch" type="number" min="0" max="100" class="validate al-no-vmargin">
										<label for="porch">Номер подъезда:</label>
									</div>
									<div class="input-field col l6 m6 s6">
										<input id="apartment" type="number" min="0" max="10000" class="validate al-no-vmargin">
										<label for="apartment">Квартира:</label>
									</div>
									<div class="input-field col l12 m12 s12">
										<textarea id="note" placeholder="например, у Вас не работает домофон" class="materialize-textarea"></textarea>
										<label for="note">Примечание:</label>
									</div>
									<p id="al-need-lease-wrapper">
										<input type="checkbox" id="need-lease" />
										<label for="need-lease">Приготовить сдачу с суммы</label>
									</p>
									<div id="al-lease-sum-wrapper" class="input-field col l12 m12 s12">
										<input id="lease-sum" type="number" min="0" max="10000" class="validate al-no-vmargin">
										<label for="lease-sum">Сумма:</label>
									</div>
									<div class="col l12 m12 s12"> 
										<a href="#" onClick="createOrder(event)" id="al-cart-submit">Отправить заказ</a>
									</div>
								</div>
							</div>						
						</div>
					</div>
				</div>
				<div class="al-red-divider"></div>
			</div>
		</main>
<? get_footer(); ?>