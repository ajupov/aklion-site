<? include('PriceList.php'); ?>

<?
    $priceList1 = new PriceList();
    $priceList1->type = 'pizza';
    $priceList1->name = 'Манхетон';
    $priceList1->text = 'Пышное тесто, шампиньоны маринованные, томаты свежие, колбаса, маслины, сыр моцарелла, пицца-соус';
    $priceList1->image = null;
    $priceList1->price1 = 450;
    $priceList1->price2 = 550;
    $priceList1->price3 = 650;
    $priceList1->weight1 = 700;
    $priceList1->weight2 = 950;
    $priceList1->weight3 = 1200;
    $priceList1->rating = 5;
    $priceList1->isNew = false;
    $priceList1->isHit = true;
                                
    $priceLists = array($priceList1);
?>