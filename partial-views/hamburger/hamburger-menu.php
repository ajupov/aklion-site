<a class="button-collapse" data-activates="al-hamburger-menu" href="#">
    <i id="al-hamburger-menu-anchor" class="fa fa-bars" aria-hidden="true"></i>
</a>

<div class="side-nav collection" id="al-hamburger-menu">
    <?
        $isAutorized = true;

        if($isAutorized)
        {
            include('/partial-views/hamburger/hamburger-autorized.php');
        }
        else
        {
            include('/partial-views/hamburger/hamburger-not-autorized.php');
        }

    ?>
    <a class="collection-item al-collection-item" href="/pizza.php">
        <img src="/assets/images/price-icons/pizza_ico.png" alt="Роллы"/>
        <span>Пицца</span>
    </a>
    <a class="collection-item al-collection-item" href="/rolls.php">
        <img src="/assets/images/price-icons/roll_ico.png" alt="Роллы"/>
        <span>Роллы</span>
    </a>
    <a class="collection-item al-collection-item" href="/sushi.php">
        <img src="/assets/images/price-icons/sushi_ico.png" alt="Суши"/>
        <span>Суши</span>
    </a>
    <a class="collection-item al-collection-item" href="/sets.php">
        <img src="/assets/images/price-icons/set_ico.png" alt="Сеты"/>
        <span>Сеты</span>
    </a>
    <a class="collection-item al-collection-item" href="/woks.php">
        <img src="/assets/images/price-icons/vok_ico.png" alt="Вок"/>
        <span>Вок</span>
    </a>
    <a class="collection-item al-collection-item" href="/salads.php">
        <img src="/assets/images/price-icons/salat_ico.png" alt="Салаты"/>
        <span>Салаты</span>
    </a>
    <a class="collection-item al-collection-item" href="/freshs.php">
        <img src="/assets/images/price-icons/fresh_ico.png" alt="Напитки"/>
        <span>Напитки</span>
    </a>

    <?
        if($isAutorized)
        {
            include('/partial-views/hamburger/hamburger-autorized-exit.php');
        }
    ?>
</div>
