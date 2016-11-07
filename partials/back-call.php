<div id="al-back-call-div" class="fixed-action-btn horizontal">
	<a id="al-back-call-a" href="#al-back-call" class="btn-floating btn-large waves-effect waves-light orange" onclick="showBackCallModal(event)">
		<i class="material-icons">phone</i>
	</a>
</div>

<div id="al-back-call" class="modal modal-fixed-footer">
	<div class="modal-content">
		<div class="row">
			<div class="col l12 m12 s12">
				<h5 class="center">Оставьте заявку, мы Вам позвоним!</h5>
			</div>
			<div class="input-field col l12 m12 s12">
				<input id="name_back_call" type="text" class="validate al-no-vmargin">
				<label for="name_back_call" data-error="Введите имя">Ваше имя:</label>
			</div>
			<div class="input-field col l12 m12 s12">
				<input id="phone_back_call" type="tel" class="validate al-no-vmargin">
				<label for="phone_back_call" data-error="Введите номер телефона">Ваш телефон:</label>
			</div>
			<div class="input-field col l12 m12 s12">
				<textarea id="note_back_call" placeholder="например, позвонить через 10 минут" class="materialize-textarea"></textarea>
				<label for="note_back_call">Примечание:</label>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<a href="#" id="al-create-call-back" class="modal-action waves-effect waves-green btn-flat" onclick="createBackCall(event)">Оставить заявку</a>
	</div>
</div>