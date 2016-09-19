<? include('PriceList.php'); ?>

<?
    $priceList1 = new PriceList();
    $priceList1->type = 'pizza';
    $priceList1->name = 'Манхетон';
    $priceList1->text = 'Пышное тесто, шампиньоны маринованные, томаты свежие, колбаса, маслины, сыр моцарелла, пицца-соус';
    $priceList1->image = 'pizza-1.png';
    $priceList1->price1 = 450;
    $priceList1->price2 = null;
    $priceList1->price3 = 650;
    $priceList1->weight1 = 700;
    $priceList1->weight2 = null;
    $priceList1->weight3 = 1200;
    $priceList1->rating = 5;
    $priceList1->isNew = true;
    $priceList1->isHit = true;
                                
    $priceList2 = new PriceList();
    $priceList2->type = 'pizza';
    $priceList2->name = 'Да Винчи';
    $priceList2->text = 'Тонкое тесто, говядина деликатесная, перец болгарский, маслины, сыр моцарелла, чеснок';
    $priceList2->image = 'pizza-2.png';
    $priceList2->price1 = 450;
    $priceList2->price2 = null;
    $priceList2->price3 = 650;
    $priceList2->weight1 = 700;
    $priceList2->weight2 = null;
    $priceList2->weight3 = 1200;
    $priceList2->rating = 5;
    $priceList2->isNew = true;
    $priceList2->isHit = true;

    $priceList3 = new PriceList();
    $priceList3->type = 'pizza';
    $priceList3->name = 'Гавайская';
    $priceList3->text = 'Тонкое тесто, ветчина, ананасы, пицца-соус, сыр моцарелла';
    $priceList3->image = 'pizza-3.png';
    $priceList3->price1 = 450;
    $priceList3->price2 = null;
    $priceList3->price3 = 650;
    $priceList3->weight1 = 700;
    $priceList3->weight2 = null;
    $priceList3->weight3 = 1200;
    $priceList3->rating = 4;
    $priceList3->isNew = true;
    $priceList3->isHit = true;

    $priceLists = array($priceList1, $priceList2, $priceList3);
?>