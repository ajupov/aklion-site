<div class="al-red valign-wrapper">
    <h5 class="valign white-text">Новинки</h5>
</div>
<div id="al-red-space" class="row al-no-hmargin al-no-vmargin">
    <?
        $templater = new Templater();

        foreach ($priceLists as $priceList)
        {
            if($priceList->isNew)
            {
                echo $templater->render('partials/item-new.php', (array)$priceList);
            }
        }
    ?>
</div>