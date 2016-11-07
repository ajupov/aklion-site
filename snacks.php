<?
/*
 *
 * @package aklion
 *
 * Template Name: Snack
*/
?>

<? get_header(); ?>
		<main>
			<div class="white container z-depth-3">
				<div class="al-red-divider"></div>
				<div class="container al-inner-container">
					<div class="al-yellow valign-wrapper">
						<h5 class="valign white-text">Закуски</h5>
					</div>
					<div id="al-yellow-space" class="row al-no-hmargin al-no-vmargin">
						<?
							get_template_part_ex('/partials/items', array('category' => 'snack'));
						?>
					</div>
				</div>
				<div class="al-red-divider"></div>
			</div>
			<? get_template_part('/partials/items/item-modal'); ?>
		</main>
<? get_footer(); ?>