<?
/*
 * @package aklion
*/
?>

<div class="card hoverable al-item-card-cart al-cart-hash-<? echo $this->hash_key; ?>">
	<div class="row al-no-vmargin al-price-cart-<? echo $this->id; ?>">
	<input type="hidden" class='al-hash-cart' value="<? echo $this->hash_key; ?>">
		<div class="col l6 m6 s10">
			<div class="row">
				<div class="col l12 s12 m12">
					<img class="responsive-img materialboxed al-cart-image" src="<? echo $this->image; ?>">
				</div>
			</div>
			<div class="row al-no-hmargin">
				<div class="col l12 s12 m12 al-price-cart-specy-wrapper">
					<?
						foreach($this->species as $specy)
						{							
							echo '<div class="row al-no-vmargin valign-wrapper">';
							echo '	<div class="col l8 m8 s8 al-species-info">';
							echo '		<div class="row al-no-vmargin">';
							echo '			<span class="left al-item-species-text">' . $specy['text'] . ' </span>';
							echo '		</div>';
							echo '		<div class="row al-no-vmargin">';
							echo '			<span class="left al-item-species-text">Вес ' . $specy['weight'] . '±50 г.' . '</span>';
							echo '		</div>';
							echo '	</div>';
							echo '	<div class="col l5 m4 s4 al-no-hpadding">';
							echo '		<h6 class="al-no-vmargin al-item-species-cost">' . $specy['cost'] . ' ₽</h6>';	
							echo '	</div>';
							echo '</div>';
						}
					?>
				</div>
			</div>
		</div>
		<div class="col l5 m5 s10 offset-s1">
			<input type="hidden" data="<? echo $this->hash_key; ?>" value="
			<? 
				echo htmlspecialchars(json_encode($this->species), ENT_QUOTES, 'UTF-8');
			?>">
			<h6 class="al-item-title valign-wrapper"><? 
				echo $this->title;
				if($this->selectedSpecy != '')
				{
					echo ' (' . $this->selectedSpecy . ')';
				}
			?></h6>
			<p class="al-cart-item-text al-no-vmargin"><? echo $this->text ?></p>
			<input type="hidden" class="al-cart-selected-cost" data="<? echo $this->hash_key; ?>" value="<? echo $this->selectedCost; ?>"/>
			<div class="input decimal optional al-numeric-input">
				<label>Количество:</label>
				<input value="<? echo $this->count?>" min="1" class="numeric decimal optional center-text-align al-cart-numeric" type="number" data="<? echo $this->hash_key; ?>">
			</div>
			<p><strong>Итого: <span class="green-text" data="<? echo $this->hash_key; ?>"><? echo $this->count * $this->price?> ₽</span></strong></p>
			<a href="#" class="center waves-effect waves-green btn-flat al-cart-action-refresh" data="<? echo $this->hash_key; ?>" onclick="refreshCartItem(event, '<? echo $this->hash_key; ?>', <? echo $this->id; ?>)">Обновить в корзине</a>
		</div>
		<div class="col l1 m1 s1 pull-s1">
			<div class="row center">
				<a href="#" class="al-cart-action-remove" onclick="removeCartItem(event, '<? echo $this->hash_key; ?>')">
					<i class="fa fa-trash-o" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</div>
</div>