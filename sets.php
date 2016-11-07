<?
/*
 *
 * @package aklion
 *
 * Template Name: Sets
*/
?>

<? get_header(); ?>
		<main>
			<div class="white container z-depth-3">
				<div class="al-red-divider"></div>
				<div class="container al-inner-container">
					<div class="al-brown valign-wrapper">
						<h5 class="valign white-text">Сеты</h5>
					</div>
					<div id="al-brown-space" class="row al-no-hmargin al-no-vmargin">
						<?
							get_template_part_ex('/partials/items', array('category' => 'set'));
						?>
					</div>
				</div>
				<div class="al-red-divider"></div>
			</div>
			<? get_template_part('/partials/items/item-modal'); ?>
		</main>
<? get_footer(); ?>