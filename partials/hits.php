<div class="al-green valign-wrapper">
    <h5 class="valign white-text">Специальные предложения</h5>
</div>
<div id="al-green-space" class="row al-no-hmargin al-no-vmargin">
    <?
        $templater = new Templater();

        foreach ($priceLists as $priceList)
        {
            if($priceList->isHit)
            {
                echo $templater->render('partials/item-hit.php', (array)$priceList);
            }
        }
    ?>
</div>