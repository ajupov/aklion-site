<div class="card hoverable">
    <div id="al-cart-submit-wrapper" class="row">
        <div class="col l12 m12 s12">
            <h5><strong>Итого: <span class="green-text"><? echo $total?> ₽</span></strong></h5>
        </div>
        <div class="input-field col l12 m12 s12">
<!--            <i class="material-icons prefix">account_circle</i>-->
            <input id="name" type="text" class="validate al-no-vmargin">
            <label for="name">Ваше имя:</label>
        </div>
        <div class="input-field col l12 m12 s12">
<!--            <i class="material-icons prefix">phone</i>-->
            <input id="phone" type="tel" class="validate al-no-vmargin">
            <label for="phone">Ваш телефон:</label>
        </div>
        <div class="input-field col l12 m12 s12">
<!--            <i class="material-icons prefix">email</i>-->
            <input id="email" type="email" class="validate al-no-vmargin">
            <label for="email">Ваш email:</label>
        </div>

        <div class="input-field col l12 m12 s12">
<!--            <i class="material-icons prefix">business</i>-->
            <input id="address" type="text" class="validate al-no-vmargin">
            <label for="address">Адрес доставки:</label>
        </div>
        <div class="input-field col l12 m12 s12">
<!--            <i class="material-icons prefix">mode_edit</i>-->
            <textarea id="textarea1" class="materialize-textarea "></textarea>
            <label for="additional">Примечания:</label>
        </div>
        <div class="col l12 m12 s12">
            <input type="checkbox" id="isWithCard" />
            <label for="isWithCard">Оплата картой</label>
        </div>
        <div class="col l12 m12 s12">
            <a href="#" id="al-cart-submit"><strong>Отправить заказ</strong></a>
        </div>
    </div>
</div>