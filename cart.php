<html>
<head>
    <? include('/partial-views/layout/includes.php'); ?>
    <? include('/temp/Container.php'); ?>
    <? include('/engine/templater.php'); ?>
    <link rel="stylesheet" href="/assets/styles/cart.css"/>
    <title>Корзина покупателя</title>
</head>
<body>
<? include('/partial-views/layout/header.php'); ?>
<main>
    <div class="al-empty-divider"></div>
    <div class="white container z-depth-3">
        <div class="al-transparent-divider"></div>
        <div class="al-red-divider"></div>
        <div class="container al-inner-container">
            <? include('/partial-views/cart/cart-inner.php'); ?>
        </div>
        <div class="al-red-divider"></div>
    </div>
</main>
</body>
<? include('/partial-views/layout/footer.php'); ?>
</html>