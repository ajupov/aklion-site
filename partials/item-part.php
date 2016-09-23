<div class="row al-item-wrapper al-no-vmargin">
    <img src="/assets/temp/<? echo $image; ?>" alt="<? echo $image; ?>" class="responsive-img">
    <h6 class="center-align al-item-title"><? echo $name ?></h5>
    <p class="center-align al-item-text"><? echo $text ?></p>
    <span class="al-item-star-icon">
        <?
            for ($i = 0; $i < $rating; ++$i)
            {
                echo '★';
            }
        ?>
    </span>
    <div class="row valign-wrapper al-no-hmargin">
        <div class="col l8 m8 s8">
            <? 
                $templater = new Templater();
                $existsNonEmpty = false;

                foreach ($species as $specy)
                {
                    if($specy->weight != null && $specy->price != null && $specy->additional != null)
                    {
                        echo $templater->render('partials/item-species.php', (array)$specy);
                        $existsNonEmpty = true;
                    }
                }
            ?>
        </div>
        <div class="col l4 m4 s4 right">
            <?
                if($existsNonEmpty)
                {
                    include('partials/item-part-add.php');
                }
            ?>
        </div>
    </div>
</div>