<div id="al-modal" class="modal modal-fixed-footer">
	<div class="modal-content">
		<div class="row al-no-vmargin">
			<div class="col l6 m6 s12">
				<img id="al-modal-image" class="responsive-img materialboxed" src="">
				<div id="al-modal-species-container"></div>
			</div>
			<div class="col l6 m6 s12">
				<h6 id="al-modal-title""></h6>
				<sup id="al-modal-mark" class="center-align"></sup>
				<h6 id="al-modal-rating" class="al-item-star-icon"></h6>
				<p id="al-modal-item-text"></p>
				<select id="al-modal-select">
				</select>
				<div class="input decimal optional al-numeric-input">
                    <label>Количество:</label>
                    <input id="al-modal-count" value="1" min="1" max="10" class="numeric decimal optional center-text-align" type="number">
                </div>
                <p><strong>Итого: <span id="al-modal-cost" class="green-text"></span></strong></p>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<a href="#" id="al=add-to-cart" class="modal-action modal-close waves-effect waves-green btn-flat" onclick="addToCart(event)">Добавить в корзину</a>
	</div>
</div>