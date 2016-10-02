<?
    include('/temp/PriceList.php');
    include('/temp/PriceListSpecies.php');
    include('/temp/Callout.php');
    include('/temp/CartItem.php');

    //Пицца
    $species1 = new PriceListSpecies();
    $species1->id = 1;
    $species1->price = 450;
    $species1->weight = 700;
    $species1->additional = 'г. (Маленький круг)';

    $species2 = new PriceListSpecies();
    $species2->id = 2;
    $species2->price = 550;
    $species2->weight = 950;
    $species2->additional = 'г. (Средний круг)';

    $species3 = new PriceListSpecies();
    $species3->id = 3;
    $species3->price = 650;
    $species3->weight = 1200;
    $species3->additional = 'г. (Большой круг)';

    $priceList1 = new PriceList();
    $priceList1->id = 1;
    $priceList1->type = 'pizza';
    $priceList1->name = 'Манхетон';
    $priceList1->text = 'Пышное тесто, шампиньоны маринованные, томаты свежие, колбаса, маслины, сыр моцарелла, пицца-соус';
    $priceList1->image = 'pizza-1.png';
    $priceList1->rating = 5;
    $priceList1->isNew = true;
    $priceList1->isHit = true;
    $priceList1->species = array($species1);
                                
    $priceList2 = new PriceList();
    $priceList2->id = 2;
    $priceList2->type = 'pizza';
    $priceList2->name = 'Да Винчи';
    $priceList2->text = 'Тонкое тесто, говядина деликатесная, перец болгарский, маслины, сыр моцарелла, чеснок';
    $priceList2->image = 'pizza-2.png';
    $priceList2->rating = 5;
    $priceList2->isNew = true;
    $priceList2->isHit = true;
    $priceList2->species = array($species1, $species2);

    $priceList3 = new PriceList();
    $priceList3->id = 3;
    $priceList3->type = 'pizza';
    $priceList3->name = 'Гавайская';
    $priceList3->text = 'Тонкое тесто, ветчина, ананасы, пицца-соус, сыр моцарелла';
    $priceList3->image = 'pizza-3.png';
    $priceList3->rating = 4;
    $priceList3->isNew = true;
    $priceList3->isHit = true;
    $priceList3->species = array($species1, $species2, $species3);

    $priceList4 = new PriceList();
    $priceList4->id = 4;
    $priceList4->type = 'pizza';
    $priceList4->name = 'Манхетон';
    $priceList4->text = 'Пышное тесто, шампиньоны маринованные, томаты свежие, колбаса, маслины, сыр моцарелла, пицца-соус';
    $priceList4->image = 'pizza-1.png';
    $priceList4->rating = 5;
    $priceList4->isNew = false;
    $priceList4->isHit = false;
    $priceList4->species = array($species1);

    $priceList5 = new PriceList();
    $priceList5->id = 5;
    $priceList5->type = 'pizza';
    $priceList5->name = 'Да Винчи';
    $priceList5->text = 'Тонкое тесто, говядина деликатесная, перец болгарский, маслины, сыр моцарелла, чеснок';
    $priceList5->image = 'pizza-2.png';
    $priceList5->rating = 5;
    $priceList5->isNew = false;
    $priceList5->isHit = false;
    $priceList5->species = array($species1, $species2);

    $priceList6 = new PriceList();
    $priceList6->id = 6;
    $priceList6->type = 'pizza';
    $priceList6->name = 'Гавайская';
    $priceList6->text = 'Тонкое тесто, ветчина, ананасы, пицца-соус, сыр моцарелла';
    $priceList6->image = 'pizza-3.png';
    $priceList6->rating = 4;
    $priceList6->isNew = false;
    $priceList6->isHit = false;
    $priceList6->species = array($species1, $species2, $species3);

    //Роллы, суши, сеты
    $species4 = new PriceListSpecies();
    $species4->price = 600;
    $species4->weight = 700;
    $species4->additional = 'г. (Маленький сет)';

    $species5 = new PriceListSpecies();
    $species5->price = 800;
    $species5->weight = 950;
    $species5->additional = 'г. (Средний сет)';

    $species6 = new PriceListSpecies();
    $species6->price = 1000;
    $species6->weight = 1200;
    $species6->additional = 'г. (Большой сет)';

    $priceList7 = new PriceList();
    $priceList7->id = 7;
    $priceList7->type = 'roll';
    $priceList7->name = 'Патриот';
    $priceList7->text = 'Истиный патриотический сет роллов для истиных патриотов';
    $priceList7->image = 'roll-1.png';
    $priceList7->rating = 5;
    $priceList7->isNew = true;
    $priceList7->isHit = true;
    $priceList7->species = array($species4);

    $priceList8 = new PriceList();
    $priceList8->id = 8;
    $priceList8->type = 'roll';
    $priceList8->name = 'Лексус';
    $priceList8->text = 'Изящный сет из роллов, но все таки всего лишь лексус';
    $priceList8->image = 'roll-2.png';
    $priceList8->rating = 5;
    $priceList8->isNew = true;
    $priceList8->isHit = true;
    $priceList8->species = array($species4, $species5);

    $priceList9 = new PriceList();
    $priceList9->id = 9;
    $priceList9->type = 'roll';
    $priceList9->name = 'Кенвуд';
    $priceList9->text = 'Отлично звучит, в то время как вы надкусываете каждый ролл. Осторожно! могут украсть...';
    $priceList9->image = 'roll-3.png';
    $priceList9->rating = 4;
    $priceList9->isNew = true;
    $priceList9->isHit = true;
    $priceList9->species = array($species4, $species5, $species6);

    $priceList10 = new PriceList();
    $priceList10->id = 10;
    $priceList10->type = 'roll';
    $priceList10->name = 'Чупа-чупс';
    $priceList10->text = 'В комплекте идут пластмассовые палочки';
    $priceList10->image = 'roll-1.png';
    $priceList10->rating = 5;
    $priceList10->isNew = false;
    $priceList10->isHit = false;
    $priceList10->species = array($species4);

    $priceList11 = new PriceList();
    $priceList11->id = 11;
    $priceList11->type = 'roll';
    $priceList11->name = 'Адидас';
    $priceList11->text = 'Четкие роллы для четиких пацанов';
    $priceList11->image = 'roll-2.png';
    $priceList11->rating = 5;
    $priceList11->isNew = false;
    $priceList11->isHit = false;
    $priceList11->species = array($species4, $species5);

    $priceList12 = new PriceList();
    $priceList12->id = 12;
    $priceList12->type = 'roll';
    $priceList12->name = 'Роспотребнадзор';
    $priceList12->text = 'Без комментариев...';
    $priceList12->image = 'roll-3.png';
    $priceList12->rating = 4;
    $priceList12->isNew = false;
    $priceList12->isHit = false;
    $priceList12->species = array($species4, $species5, $species6);

    //Салаты
    $species7 = new PriceListSpecies();
    $species7->price = 600;
    $species7->weight = 700;
    $species7->additional = 'г. (Маленький контейнер)';

    $species8 = new PriceListSpecies();
    $species8->price = 800;
    $species8->weight = 950;
    $species8->additional = 'г. (Средний контейнер)';

    $species9 = new PriceListSpecies();
    $species9->price = 1000;
    $species9->weight = 1200;
    $species9->additional = 'г. (Большой контейнер)';

    $priceList13 = new PriceList();
    $priceList13->id = 13;
    $priceList13->type = 'salad';
    $priceList13->name = 'Патриот';
    $priceList13->text = 'Истиный патриотический сет роллов для истиных патриотов';
    $priceList13->image = 'salad-1.png';
    $priceList13->rating = 5;
    $priceList13->isNew = true;
    $priceList13->isHit = true;
    $priceList13->species = array($species4);

    $priceList14 = new PriceList();
    $priceList14->id = 14;
    $priceList14->type = 'salad';
    $priceList14->name = 'Лексус';
    $priceList14->text = 'Изящный сет из роллов, но все таки всего лишь лексус';
    $priceList14->image = 'salad-2.png';
    $priceList14->rating = 5;
    $priceList14->isNew = true;
    $priceList14->isHit = true;
    $priceList14->species = array($species4, $species5);

    $priceList15 = new PriceList();
    $priceList15->id = 15;
    $priceList15->type = 'salad';
    $priceList15->name = 'Кенвуд';
    $priceList15->text = 'Отлично звучит, в то время как вы надкусываете каждый ролл. Осторожно! могут украсть...';
    $priceList15->image = 'salad-3.png';
    $priceList15->rating = 4;
    $priceList15->isNew = true;
    $priceList15->isHit = true;
    $priceList15->species = array($species4, $species5, $species6);

    $priceList16 = new PriceList();
    $priceList16->id = 16;
    $priceList16->type = 'salad';
    $priceList16->name = 'Чупа-чупс';
    $priceList16->text = 'В комплекте идут пластмассовые палочки';
    $priceList16->image = 'salad-1.png';
    $priceList16->rating = 5;
    $priceList16->isNew = false;
    $priceList16->isHit = false;
    $priceList16->species = array($species4);

    $priceList17 = new PriceList();
    $priceList17->id = 17;
    $priceList17->type = 'salad';
    $priceList17->name = 'Адидас';
    $priceList17->text = 'Четкие роллы для четиких пацанов';
    $priceList17->image = 'salad-2.png';
    $priceList17->rating = 5;
    $priceList17->isNew = false;
    $priceList17->isHit = false;
    $priceList17->species = array($species4, $species5);

    $priceList18 = new PriceList();
    $priceList18->id = 18;
    $priceList18->type = 'salad';
    $priceList18->name = 'Роспотребнадзор';
    $priceList18->text = 'Без комментариев...';
    $priceList18->image = 'salad-3.png';
    $priceList18->rating = 4;
    $priceList18->isNew = false;
    $priceList18->isHit = false;
    $priceList18->species = array($species4, $species5, $species6);

    $priceLists = array(
        $priceList1,
        $priceList2,
        $priceList3,
        $priceList4,
        $priceList5,
        $priceList6,
        $priceList7,
        $priceList8,
        $priceList9,
        $priceList10,
        $priceList11,
        $priceList12,
        $priceList13,
        $priceList14,
        $priceList15,
        $priceList16,
        $priceList17,
        $priceList18,
    );

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


    //Содержимое
    $cartItem1 = new CartItem();
    $cartItem1->priceId = 1;
    $cartItem1->priceSpeciesId = 1;
    $cartItem1->priceCount = 1;

    $cartItem2 = new CartItem();
    $cartItem2->priceId = 2;
    $cartItem2->priceSpeciesId = 2;
    $cartItem2->priceCount = 2;

    $cartItem3 = new CartItem();
    $cartItem3->priceId = 3;
    $cartItem3->priceSpeciesId = 3;
    $cartItem3->priceCount = 3;

    $cartItems = array($cartItem1, $cartItem2, $cartItem3)
?>