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
                        <? foreach ($priceLists as $priceList) {
                            if($priceList->isHit){
                                echo "
                                    <div class=\"col card hoverable l4 s6 m12 al-green-item\">
                                        <div class=\"al-mark-red left valign-wrapper\">
                                            <p class=\"valign\">ХИТ!</p>
                                        </div>
                                        <img src=\"assets/temp/$priceList->image\" alt=\"$priceList->image\" style=\"width:90%;\">
                                        <p class=\"center-align al-green-item-title\">$priceList->name</p>
                                        <p class=\"center-align al-green-item-text\">$priceList->text</p>
                                        <div class=\"al-rating\">
                                            <span class=\"al-star-icon\">";
                                                for ($i = 1; $i <= $priceList->rating; $i++) {
                                                    echo "&#9733";
                                                }
                                        echo "</span>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col m8 al-item-bottom\">";
                                                switch($priceList->type){
                                                    case 'pizza':
                                                        if($priceList->weight1 != null && $priceList->weight1 > 0
                                                            && $priceList->price1 != null && $priceList->price1 > 0){
                                                             echo " <div class=\"valign-wrapper al-item-info-wraper\">
                                                                        <div class=\"col valign m7 al-item-weight-wraper\">
                                                                            <span class=\"al-item-weight\">$priceList->weight1 г. (Маленький круг)</span>
                                                                        </div>
                                                                        <div class=\"col valign m3 al-item-cost-wraper\">
                                                                            <span class=\"al-item-cost\">$priceList->price1 р.</span>
                                                                        </div>
                                                                    </div>";
                                                        }
                                                        if($priceList->weight2 != null && $priceList->weight2 > 0
                                                            && $priceList->price2 != null && $priceList->price2 > 0){
                                                             echo " <div class=\"valign-wrapper al-item-info-wraper\">
                                                                        <div class=\"col valign m7 al-item-weight-wraper\">
                                                                            <span class=\"al-item-weight\">$priceList->weight2 г. (Средний круг)</span>
                                                                        </div>
                                                                        <div class=\"col valign m3 al-item-cost-wraper\">
                                                                            <span class=\"al-item-cost\">$priceList->price2 р.</span>
                                                                        </div>
                                                                    </div>";
                                                        }
                                                        if($priceList->weight3 != null && $priceList->weight3 > 0
                                                            && $priceList->price3 != null && $priceList->price3 > 0){
                                                             echo " <div class=\"valign-wrapper al-item-info-wraper\">
                                                                        <div class=\"col valign m7 al-item-weight-wraper\">
                                                                            <span class=\"al-item-weight\">$priceList->weight3 г. (Большой круг)</span>
                                                                        </div>
                                                                        <div class=\"col valign m3 al-item-cost-wraper\">
                                                                            <span class=\"al-item-cost\">$priceList->price3 р.</span>
                                                                        </div>
                                                                    </div>";
                                                        }

                                                        break;
                                                }
                                            echo "</div>
                                            <div class=\"col m4\">
                                                <div class=\"row no-margin valign-wrapper\">
                                                    <div class=\"col m1 no-pading no-margin\">
                                                        <span class=\"material-icons al-add-icon valign\">add</span>
                                                    </div>
                                                    <div class=\"col m1 al-btn-wraper\">
                                                        <a class=\"btn-floating al-item-add-btn valign\"></a>
                                                     </div>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>";
                                    }
                        } ?>
                        </div>

                        <div class="al-red valign-wrapper">
                            <p class="valign">Новинки</p>
                        </div>
                        <div class="al-red-space row center-align">
                        <? foreach ($priceLists as $priceList) {
                            if($priceList->isNew){
                                echo "
                                    <div class=\"col card hoverable l4 s6 m12 al-green-item\">
                                        <div class=\"al-mark-red left valign-wrapper\">
                                            <p class=\"valign\">ХИТ!</p>
                                        </div>
                                        <img src=\"assets/temp/$priceList->image\" alt=\"$priceList->image\" style=\"width:90%;\">
                                        <p class=\"center-align al-green-item-title\">$priceList->name</p>
                                        <p class=\"center-align al-green-item-text\">$priceList->text</p>
                                        <div class=\"al-rating\">
                                            <span class=\"al-star-icon\">";
                                                for ($i = 1; $i <= $priceList->rating; $i++) {
                                                    echo "&#9733";
                                                }
                                        echo "</span>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col m8 al-item-bottom\">";
                                                switch($priceList->type){
                                                    case 'pizza':
                                                        if($priceList->weight1 != null && $priceList->weight1 > 0
                                                            && $priceList->price1 != null && $priceList->price1 > 0){
                                                             echo " <div class=\"valign-wrapper al-item-info-wraper\">
                                                                        <div class=\"col valign m7 al-item-weight-wraper\">
                                                                            <span class=\"al-item-weight\">$priceList->weight1 г. (Маленький круг)</span>
                                                                        </div>
                                                                        <div class=\"col valign m3 al-item-cost-wraper\">
                                                                            <span class=\"al-item-cost\">$priceList->price1 р.</span>
                                                                        </div>
                                                                    </div>";
                                                        }
                                                        if($priceList->weight2 != null && $priceList->weight2 > 0
                                                            && $priceList->price2 != null && $priceList->price2 > 0){
                                                             echo " <div class=\"valign-wrapper al-item-info-wraper\">
                                                                        <div class=\"col valign m7 al-item-weight-wraper\">
                                                                            <span class=\"al-item-weight\">$priceList->weight2 г. (Средний круг)</span>
                                                                        </div>
                                                                        <div class=\"col valign m3 al-item-cost-wraper\">
                                                                            <span class=\"al-item-cost\">$priceList->price2 р.</span>
                                                                        </div>
                                                                    </div>";
                                                        }
                                                        if($priceList->weight3 != null && $priceList->weight3 > 0
                                                            && $priceList->price3 != null && $priceList->price3 > 0){
                                                             echo " <div class=\"valign-wrapper al-item-info-wraper\">
                                                                        <div class=\"col valign m7 al-item-weight-wraper\">
                                                                            <span class=\"al-item-weight\">$priceList->weight3 г. (Большой круг)</span>
                                                                        </div>
                                                                        <div class=\"col valign m3 al-item-cost-wraper\">
                                                                            <span class=\"al-item-cost\">$priceList->price3 р.</span>
                                                                        </div>
                                                                    </div>";
                                                        }

                                                        break;
                                                }
                                            echo "</div>
                                            <div class=\"col m4\">
                                                <div class=\"row no-margin valign-wrapper\">
                                                    <div class=\"col m1 no-pading no-margin\">
                                                        <span class=\"material-icons al-add-icon valign\">add</span>
                                                    </div>
                                                    <div class=\"col m1 al-btn-wraper\">
                                                        <a class=\"btn-floating al-item-add-btn valign\"></a>
                                                     </div>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>";
                                    }
                        } ?>
                        </div>
                    </div>
                    <div class="al-divider"></div> 
                </div>
            </div>
            </div>
        </main>
    </body>
</html>