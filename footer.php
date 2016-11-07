<?
/*
 * @package aklion
 */
?>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<? get_template_part('partials/footer'); ?>
		</footer>
		<? wp_footer(); ?>
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js" type="text/javascript"></script>
		<script src="<?= bloginfo('template_directory'); ?>/vendors/materialize/js/materialize.min.js"></script>
		<script src="<?= bloginfo('template_directory'); ?>/script.js"></script>
	</body>
</html>