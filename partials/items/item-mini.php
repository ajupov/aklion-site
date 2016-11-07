<?
/*
 * @package aklion
*/
?>

<div class="card hoverable al-price-mini-card" href="/cart/">
	<div class="row al-no-vmargin valign-wrapper">
		<div class="col l5">
			<a href="/cart/">
				<img class="al-cart-mini-image" src="<? echo $this->image; ?>">
			</a>
		</div>
		<div class="col l5 al-no-hpadding">
			<div class="row al-no-vmargin">
				<p class="al-cart-mini-p al-no-vmargin"><? echo $this->title ?> <b>(<? echo $this->count?> шт.)</b></p>
			</div>
			<div class="row al-no-vmargin">
				<p class="al-cart-mini-p al-no-vmargin"><strong>Итого: <span class="green-text" data="<? echo $this->hash_key; ?>"><? echo $this->count * $this->price?> ₽</span></strong></p>
			</div>
		</div>
		<div class="col l2">
			<a href="#" class="al-cart-mini-action-remove" onclick="removeCartItem(event, '<? echo $this->hash_key; ?>')">
				<i class="fa fa-trash-o" aria-hidden="true"></i>
			</a>
		</div>
	</div>
</div>