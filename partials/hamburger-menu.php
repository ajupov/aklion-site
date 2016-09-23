<a class="button-collapse" data-activates="al-hamburger-menu" href="#">
    <i id="al-hamburger-menu-anchor" class="fa fa-bars" aria-hidden="true"></i>
</a>

<div class="side-nav collection" id="al-hamburger-menu">
    <?
        $isAutorized = true;

        if($isAutorized)
        {
            include('/partials/hamburger-autorized.php');
        }
        else
        {
            include('/partials/hamburger-not-autorized.php');
        }

    ?>
    <a class="collection-item al-collection-item" href="#">
        <img src="assets/roll_ico.png" alt="Роллы"/>
        <span>Роллы</span>
    </a>
    <a class="collection-item al-collection-item" href="#">
        <img src="assets/pizza_ico.png" alt="Суши"/>
        <span>Суши</span>
    </a>
    <a class="collection-item al-collection-item" href="#">
        <img src="assets/set_ico.png" alt="Сеты"/>
        <span>Сеты</span>
    </a>
    <a class="collection-item al-collection-item" href="#">
        <img src="assets/vok_ico.png" alt="Вок"/>
        <span>Вок</span>
    </a>
    <a class="collection-item al-collection-item" href="#">
        <img src="assets/salat_ico.png" alt="Салаты"/>
        <span>Салаты</span>
    </a>
    <a class="collection-item al-collection-item" href="#">
        <img src="assets/fresh_ico.png" alt="Напитки"/>
        <span>Напитки</span>
    </a>

    <?
        if($isAutorized)
        {
            include('/partials/hamburger-autorized-exit.php');
        }
    ?>
</div>
