<?
/*
 * @package aklion
*/
?>

<div class="al-green valign-wrapper">
    <h5 class="valign white-text">Хиты</h5>
</div>
<div id="al-green-space" class="row al-no-hmargin al-no-vmargin">
    <?
		get_template_part_ex('/partials/items', array('tag' => 'Хит', 'count' => '3'));
    ?>
</div>
<div class="al-red valign-wrapper">
    <h5 class="valign white-text">Новинки</h5>
</div>
<div id="al-red-space" class="row al-no-hmargin al-no-vmargin">
    <?
		get_template_part_ex('/partials/items', array('tag' => 'NEW', 'count' => '3'));
    ?>
</div>