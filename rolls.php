<?
/*
 *
 * @package aklion
 *
 * Template Name: Rolls
*/
?>

<? get_header(); ?>
		<?
			$category = $_GET['type'];
			$name = 'Роллы';
			
			switch($category)
			{
				case 'roll_classic':
					$name = 'Классические роллы';
					break;
				case 'roll_baked':
					$name = 'Запеченые роллы';
					break;								
				case 'roll_hot':
					$name = 'Горячие роллы';
					break;							
				case 'roll_original':
					$name = 'Оригинальные роллы';
					break;
				default:
					$category = 'roll';
					break;
			}
		?>
		<main>
			<div class="white container z-depth-3">
				<div class="al-red-divider"></div>
				<div class="container al-inner-container">
					<div class="al-red valign-wrapper">
						<h5 class="valign white-text"><? echo $name; ?></h5>
					</div>
					<div id="al-red-space" class="row al-no-hmargin al-no-vmargin">
						<?
							get_template_part_ex('/partials/items', array('category' => $category));
						?>
					</div>
				</div>
				<div class="al-red-divider"></div>
			</div>
			<? get_template_part('/partials/items/item-modal'); ?>
		</main>
<? get_footer(); ?>