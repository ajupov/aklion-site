<div class="col l12 m12 s12">
    <div class="card hoverable">
        <div class="row al-no-vmargin">
            <div class="col l5 m5 s10 offset-s1">
                <div class="al-cart-image-wrapper">
                    <img src="/assets/images/price-images/<? echo $image; ?>" alt="<? echo $image; ?>" class="responsive-img">
                </div>
                <div class="al-cart-species-wrapper">
                    <?
                        $templater = new Templater();
                        $existsNonEmpty = false;

                        foreach ($species as $specy)
                        {
                            if($specy->weight != null && $specy->price != null && $specy->additional != null)
                            {
                                echo $templater->render('/partial-views/price/price-species.php', (array)$specy);
                                $existsNonEmpty = true;
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="col l6 m6 s10 offset-s1">
                <h6 class="al-item-title"><? echo $name ?></h6>
                <p class="al-cart-item-text"><? echo $text ?></p>
                <label>Выберите вид:</label>
                <div class="input-field al-no-vmargin">
                    <select>
                        <?foreach ($species as $specy)
                            {
                                if($specy->weight != null && $specy->price != null && $specy->additional != null)
                                {
                                    $entries = array('г.', '(', ')');
                                    $replaced = str_replace($entries, '', $specy->additional);
                                    echo '<option value="' . $specy->id .'" ' .
                                        ($specy->id == $priceSpeciesId ? 'selected' : '') .'>' . $replaced . '</option>';
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="input decimal optional al-numeric-input">
                    <label>Количество:</label>
                    <input value="<? echo $priceCount?>" min="0" class="numeric decimal optional center-text-align" type="number">
                </div>
                <p><strong>Итого: <span class="green-text"><? echo $priceCount * $selectedSpecyPrice?> ₽</span></strong></p>
            </div>
            <div class="col l1 m1 s1 pull-s1">
                <div class="row">
                    <a href="#" class="al-cart-remove-wrapper">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>