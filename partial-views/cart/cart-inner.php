<div class="al-green valign-wrapper">
    <h5 class="valign white-text">Корзина покупателя</h5>
</div>
<div id="al-green-space" class="row al-no-hmargin al-no-vmargin">
    <div class="col l8 m12 s12 al-no-hpadding">
        <?
            $total = 0;
            $templater = new Templater();

            foreach ($cartItems as $cartItem)
            {
                $priceList = null;

                foreach ($priceLists as $item)
                {
                    if ($item->id == $cartItem->priceId)
                    {
                        $priceList = $item;
                        break;
                    }
                }

                if ($priceList != null)
                {
                    $selectedSpecyPrice = null;

                    foreach ($priceList->species as $item2)
                    {
                        if ($item2->id == $cartItem->priceSpeciesId)
                        {
                            $selectedSpecyPrice = $item2->price;
                            break;
                        }
                    }

                    if ($selectedSpecyPrice != null)
                    {
                        $total += $cartItem->priceCount * $selectedSpecyPrice;
                        $array = array(
                            'priceId' => $cartItem->priceId,
                            'priceSpeciesId' => $cartItem->priceSpeciesId,
                            'priceCount' => $cartItem->priceCount,
                            'selectedSpecyPrice' => $selectedSpecyPrice,
                            'name' => $priceList->name,
                            'text' => $priceList->text,
                            'image' => $priceList->image,
                            'species' => $priceList->species
                        );
                        echo $templater->render('/partial-views/price/price-in-cart.php', $array);
                    }
                }
            }
        ?>
    </div>
    <div class="col l4 m12 s12">
        <? include('/partial-views/cart/cart-submit.php'); ?>
    </div>
</div>