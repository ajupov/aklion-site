<?
/*
 *
 * @package aklion
 *
 * Template Name: Sushi
*/
?>

<? get_header(); ?>
		<main>
			<div class="white container z-depth-3">
				<div class="al-red-divider"></div>
				<div class="container al-inner-container">
					<div class="al-orange valign-wrapper">
						<h5 class="valign white-text">Суши</h5>
					</div>
					<div id="al-orange-space" class="row al-no-hmargin al-no-vmargin">
						<?
							get_template_part_ex('/partials/items', array('category' => 'sushi'));
						?>
					</div>
				</div>
				<div class="al-red-divider"></div>
			</div>
			<? get_template_part('/partials/items/item-modal'); ?>
		</main>
<? get_footer(); ?>