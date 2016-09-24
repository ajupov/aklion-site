<html>
    <head>
        <? include('partials/includes.php'); ?>
        <? include('temp/Container.php'); ?>
        <? include('engine/templater.php'); ?>
        <link href="custom/index.css" rel="stylesheet" />
        <script src="custom/index.js"></script>
        <title>Заказ пиццы, суши</title>
    </head>
    <body>
        <? include('partials/header.php'); ?>
        <main>
            <div class="al-empty-divider"></div>
            <div class="white container z-depth-3">
                <? include('partials/slider.php'); ?>
                <div class="al-red-divider"></div>
                <div class="container al-inner-container">
                    <? include('partials/hits.php'); ?>
                    <? include('partials/news.php'); ?>
                </div>
                <div class="al-red-divider"></div>
            </div>
            <? include('partials/why.php'); ?>
            <? include('partials/reviews.php'); ?>
            <? include('partials/info.php'); ?>
        </main>
    </body>
    <? include('partials/footer.php'); ?>
</html>