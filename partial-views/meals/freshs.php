<div class="al-yellow valign-wrapper">
    <h5 class="valign white-text">Напитки</h5>
</div>
<div id="al-yellow-space" class="row al-no-hmargin al-no-vmargin">
    <?
        $templater = new Templater();

        foreach ($priceLists as $priceList)
        {
            if($priceList->type == 'roll')
            {
                if($priceList->isHit)
                {
                    echo $templater->render('/partial-views/price/price-hit.php', (array)$priceList);
                }
                else if($priceList->isNew)
                {
                    echo $templater->render('/partial-views/price/price-new.php', (array)$priceList);
                }
                else if($priceList)
                {
                    echo $templater->render('/partial-views/price/price.php', (array)$priceList);
                }
            }
        }
    ?>
</div>