<div id="al-reviews" class="">
    <h5 id="al-reviews-title" class="red-text ">ОТЗЫВЫ КЛИЕНТОВ</h5>
    <div class="container">
        <div class="row al-no-vmargin">
            <div class="col l10 m10 s12">
                <div id="al-reviews-inner" class="row">
                    <?
                        const visibleCalloutCount = 3;
                        $counter = 0;
                        $templater = new Templater();

                        foreach ($callouts as $callout)
                        {
                            if($counter < 3)
                            {
                                echo $templater->render('partials/callout-visible.php', (array)$callout);
                            }
                            else
                            {
                                echo $templater->render('partials/callout-hidden.php', (array)$callout);
                            }

                            ++$counter;
                        }
                    ?>
                </div>
            </div>
            <div class="col l2 m2 s12 center-align">
                <a href="#" id="al-callout-add-anchor" class="center-align">ОСТАВИТЬ ОТЗЫВ</a>
            </div>
        </div>
        <div class="row al-no-vmargin">
            <a href="" id="al-show-all-callouts">ПОСМОТРЕТЬ ВСЕ ОТЗЫВЫ</a>
        </div>
    </div>
</div>