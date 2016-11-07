<?
/*
 * @package aklion
*/
?>

<div id="al-reviews">
    <h5 id="al-reviews-title" class="red-text">ОТЗЫВЫ КЛИЕНТОВ</h5>
    <div class="container">
        <div class="row al-no-vmargin">
            <div class="col l10 m10 s12">
                <div id="al-reviews-inner" class="row"> 
					<?
						get_template_part_ex('/partials/items-review', array('count' => '3', 'offset' => '0'));
					?>
                </div>
            </div>
            <div class="col l2 m2 s12 center-align">
                <a href="#" id="al-callout-add-anchor" onclick="showAddReviewDialog(event)" class="center-align">ОСТАВИТЬ ОТЗЫВ</a>
            </div>
        </div>
        <div class="row al-no-vmargin">
            <a href="/reviews/" id="al-show-all-reviews-a">ПОСМОТРЕТЬ ВСЕ ОТЗЫВЫ</a>
        </div>
    </div>
</div>