<?
/*
 *
 * @package aklion
 *
 * Template Name: Woks
*/
?>

<? get_header(); ?>
		<main>
			<div class="white container z-depth-3">
				<div class="al-red-divider"></div>
				<div class="container al-inner-container">
					<div class="al-blue valign-wrapper">
						<h5 class="valign white-text">Вок</h5>
					</div>
					<div id="al-blue-space" class="row al-no-hmargin al-no-vmargin">
						<?
							get_template_part_ex('/partials/items', array('category' => 'wok'));
						?>
					</div>
				</div>
				<div class="al-red-divider"></div>
			</div>
			<? get_template_part('/partials/items/item-modal'); ?>
		</main>
<? get_footer(); ?>