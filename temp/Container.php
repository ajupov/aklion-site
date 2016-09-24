<?
    include('/temp/PriceList.php');
    include('/temp/PriceListSpecies.php');
    include('/temp/Callout.php');

    $species1 = new PriceListSpecies();
    $species1->price = 450;
    $species1->weight = 700;
    $species1->additional = 'г. (Маленький круг)';

    $species2 = new PriceListSpecies();
    $species2->price = 550;
    $species2->weight = 950;
    $species2->additional = 'г. (Средний круг)';

    $species3 = new PriceListSpecies();
    $species3->price = 650;
    $species3->weight = 1200;
    $species3->additional = 'г. (Большой круг)';

    $priceList1 = new PriceList();
    $priceList1->type = 'pizza';
    $priceList1->name = 'Манхетон';
    $priceList1->text = 'Пышное тесто, шампиньоны маринованные, томаты свежие, колбаса, маслины, сыр моцарелла, пицца-соус';
    $priceList1->image = 'pizza-1.png';
    $priceList1->rating = 5;
    $priceList1->isNew = true;
    $priceList1->isHit = true;
    $priceList1->species = array($species1);
                                
    $priceList2 = new PriceList();
    $priceList2->type = 'pizza';
    $priceList2->name = 'Да Винчи';
    $priceList2->text = 'Тонкое тесто, говядина деликатесная, перец болгарский, маслины, сыр моцарелла, чеснок';
    $priceList2->image = 'pizza-2.png';
    $priceList2->rating = 5;
    $priceList2->isNew = true;
    $priceList2->isHit = true;
    $priceList2->species = array($species1, $species2);

    $priceList3 = new PriceList();
    $priceList3->type = 'pizza';
    $priceList3->name = 'Гавайская';
    $priceList3->text = 'Тонкое тесто, ветчина, ананасы, пицца-соус, сыр моцарелла';
    $priceList3->image = 'pizza-3.png';
    $priceList3->rating = 4;
    $priceList3->isNew = true;
    $priceList3->isHit = true;
    $priceList3->species = array($species1, $species2, $species3);

    $priceLists = array($priceList1, $priceList2, $priceList3);

    $callout1 = new Callout();
    $callout1->text = 'На прошлых праздниках заказывала пиццу. Приветливо прияли и обслужили. Вежливые работники. Люблю итальянскую кухню и не разочаровалась, заказав ПастаБаста. Рекомендую! Спасибо, буду заказывать чаще.';
    $callout1->autor = 'Юлия';

    $callout2 = new Callout();
    $callout2->text = 'На прошлых праздниках заказывала пиццу. Приветливо прияли и обслужили. Вежливые работники. Люблю итальянскую кухню и не разочаровалась, заказав ПастаБаста. Рекомендую! Спасибо, буду заказывать чаще.';
    $callout2->autor = 'Марина';

    $callout3 = new Callout();
    $callout3->text = 'На прошлых праздниках заказывала пиццу. Приветливо прияли и обслужили. Вежливые работники. Люблю итальянскую кухню и не разочаровалась, заказав ПастаБаста. Рекомендую! Спасибо, буду заказывать чаще.';
    $callout3->autor = 'Елена';

    $callout4 = new Callout();
    $callout4->text = 'На прошлых праздниках заказывала пиццу. Приветливо прияли и обслужили. Вежливые работники. Люблю итальянскую кухню и не разочаровалась, заказав ПастаБаста. Рекомендую! Спасибо, буду заказывать чаще.';
    $callout4->autor = 'Изабела';

    $callout5 = new Callout();
    $callout5->text = 'На прошлых праздниках заказывала пиццу. Приветливо прияли и обслужили. Вежливые работники. Люблю итальянскую кухню и не разочаровалась, заказав ПастаБаста. Рекомендую! Спасибо, буду заказывать чаще.';
    $callout5->autor = 'Марианна';

    $callout6 = new Callout();
    $callout6->text = 'На прошлых праздниках заказывала пиццу. Приветливо прияли и обслужили. Вежливые работники. Люблю итальянскую кухню и не разочаровалась, заказав ПастаБаста. Рекомендую! Спасибо, буду заказывать чаще.';
    $callout6->autor = 'Сюзанна';

    $callout7 = new Callout();
    $callout7->text = 'На прошлых праздниках заказывала пиццу. Приветливо прияли и обслужили. Вежливые работники. Люблю итальянскую кухню и не разочаровалась, заказав ПастаБаста. Рекомендую! Спасибо, буду заказывать чаще.';
    $callout7->autor = 'Злата';

    $callout8 = new Callout();
    $callout8->text = 'На прошлых праздниках заказывала пиццу. Приветливо прияли и обслужили. Вежливые работники. Люблю итальянскую кухню и не разочаровалась, заказав ПастаБаста. Рекомендую! Спасибо, буду заказывать чаще.';
    $callout8->autor = 'Анжела';

    $callouts = array($callout1, $callout2, $callout3, $callout4, $callout5, $callout6, $callout7, $callout8);
?>