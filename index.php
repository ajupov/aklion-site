<?
/*
 * @package aklion
*/
?>

<? get_header();?>
		<main>
			<div class="white container z-depth-3">
				<? get_template_part('/partials/slider'); ?>
				<div class="al-red-divider"></div>
				<div class="container al-inner-container">
					<? get_template_part('/partials/hits-news'); ?>
				</div>
				<div class="al-red-divider"></div>
			</div>
			<? get_template_part('/partials/why'); ?>			
			<? get_template_part('/partials/reviews'); ?>	
			<? get_template_part('/partials/info'); ?>
			<? get_template_part('/partials/items/item-modal'); ?>
			<input id="al-is-comments-open" type="hidden" value="<? echo comments_open(); ?>"/>
			<? get_template_part('/partials/review-modal'); ?>
		</main>
<? get_footer(); ?>