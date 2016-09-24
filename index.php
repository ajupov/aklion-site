<html>
    <head>
        <? include('/partial-views/layout/includes.php'); ?>
        <? include('/temp/Container.php'); ?>
        <? include('/engine/templater.php'); ?>
        <link rel="stylesheet" href="/assets/styles/index.css"/>
        <script src="/assets/scripts/index.js"></script>
        <title>Заказ пиццы, суши</title>
    </head>
    <body>
        <? include('/partial-views/layout/header.php'); ?>
        <main>
            <div class="al-empty-divider"></div>
            <div class="white container z-depth-3">
                <? include('/partial-views/index/slider.php'); ?>
                <div class="al-red-divider"></div>
                <div class="container al-inner-container">
                    <? include('/partial-views/index/hits.php'); ?>
                    <? include('/partial-views/index/news.php'); ?>
                </div>
                <div class="al-red-divider"></div>
            </div>
            <? include('/partial-views/index/why.php'); ?>
            <? include('/partial-views/index/reviews.php'); ?>
            <? include('/partial-views/index/info.php'); ?>
        </main>
    </body>
    <? include('/partial-views/layout/footer.php'); ?>
</html>