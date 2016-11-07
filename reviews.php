<?
/*
 * @package aklion
 *
 * Template Name: Reviews
 */
?>

<? get_header();?>
		<main>
			<div class="white container z-depth-3">
				<div class="al-red-divider"></div>
				<div class="container al-inner-container">		
					<div class="al-red valign-wrapper">
						<h5 class="valign white-text">Отзывы</h5>
					</div>
					<div id="al-review-wrapper" class="row al-no-vmargin al-no-hmargin">
						<div class="col l10 m10 s12 center-align">
							<div id="al-reviews-inner" class="row"> 
								<?
									get_template_part_ex('/partials/items-review', array('count' => '6'));
								?>
							</div>
							<div id="al-review-preloader" class="preloader-wrapper small">
								<div class="spinner-layer spinner-green-only">
									<div class="circle-clipper left">
										<div class="circle"></div>
									</div><div class="gap-patch">
									<div class="circle"></div>
									</div><div class="circle-clipper right">
										<div class="circle"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col l2 m2 s12 center-align">
							<a href="#" id="al-callout-add-anchor" onclick="showAddReviewDialog(event)" class="center-align">ОСТАВИТЬ ОТЗЫВ</a>
						</div>
					</div>
				</div>
				<div class="al-red-divider"></div>
			</div>
			<input id="al-is-comments-open" type="hidden" value="<? echo comments_open(); ?>"/>
			<? get_template_part('/partials/review-modal'); ?>
		</main>
<? get_footer(); ?>
<script src="<?= bloginfo('template_directory'); ?>/reviews.js"></script>