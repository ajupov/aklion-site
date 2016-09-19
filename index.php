<? include('temp/PriceListContainer.php'); ?>

<html>
    <head>
        <? include('includes.html'); ?>
        <link href="custom/index.css" rel="stylesheet" />
        <script src="custom/index.js"></script>
        <title>Заказ пиццы, суши</title>
    </head>
    <body>
        <? include('header.html'); ?>
        <main>
            <div class="al-main">
                <div class="row al-main-container z-depth-3">
                    <div class="al-slider-card">
                        <div id="al-slider-left" class="col l3 m3 s3 valign-wrapper">
                            <div class="row">
                                <p class="al-slider-brand">AKLION</p>
                                <p class="al-slider-free">Бесплатная доставка</p>
                                <p class="al-slider-from">от 445 р.</p>
                                <a href="#" class="al-slider-a">Заказать</a>
                            </div>
                        </div>
                        <div class="l6 m6 s6 al-slider-wraper">
                            <div class="slider">
	                            <ul>
		                            <li><img src="assets/slider-item-1.jpg" alt=""></li>
		                            <li><img src="assets/slider-item-2.jpg" alt=""></li>
		                            <li><img src="assets/slider-item-3.jpg" alt=""></li>
		                            <li><img src="assets/slider-item-4.jpg" alt=""></li>
		                            <li><img src="assets/slider-item-5.jpg" alt=""></li>
	                            </ul>
                            </div>
                        </div>
                    </div>
                    <div class="al-divider"></div>               
                    <div class="al-inner-container">
                        <div class="al-green valign-wrapper">
                            <p class="valign">Специальные предложения</p>
                        </div>
                        <div class="al-green-space row center-align">
                        <!-- Здесь начинается одна карточка и так как это не MVC - то отрендерить
                            модель во вьюху при помощи шаблонизатора невозможно-->
                            <div class="col card hoverable l4 s6 m12 al-green-item">
                                <div class="al-mark-red left valign-wrapper">
                                    <p class="valign">ХИТ!</p>
                                </div>
                                <img src="assets/temp/pizza-1.png" alt="pizza-1" style="width:90%;">
                                <p class="center-align al-green-item-title">Манхетон</p>
                                <p class="center-align al-green-item-text">Пышное тесто, шампиньоны маринованные, томаты свежие, колбаса, маслины, сыр моцарелла, пицца-соус.</p>
                                <div class="al-rating">
                                    <span class="al-star-icon">&#9733&#9733&#9733&#9733&#9733</span>
                                </div>
                                <div class="row">
                                    <div class="col m8 al-item-bottom">
                                        <div class="valign-wrapper al-item-info-wraper">
                                            <div class="col valign m7 al-item-weight-wraper">
                                                <span class="al-item-weight">700 г. (Маленький круг)</span>
                                            </div>
                                            <div class="col valign m3 al-item-cost-wraper">
                                                <span class="al-item-cost">450 р.</span>
                                            </div>
                                        </div>
                                        <div class="valign-wrapper no-margin">
                                            <div class="col valign m7 al-item-weight-wraper">
                                                <span class="al-item-weight">1200 г. (Большой круг)</span>
                                            </div>
                                            <div class="col valign m3 al-item-cost-wraper">
                                                <span class="al-item-cost">650 р.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col m4">
                                        <div class="row no-margin valign-wrapper">
                                            <div class="col m1 no-pading no-margin">
                                                <span class="material-icons al-add-icon valign">add</span>
                                            </div>
                                            <div class="col m1 al-btn-wraper">
                                                <a class="btn-floating al-item-add-btn valign"></a>
                                             </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Конец рендеринга-->
                            <div class="col card hoverable l4 s4 m4 al-green-item"></div>
                            <div class="col card hoverable l4 s4 m4 al-green-item"></div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </main>
    </body>
</html>