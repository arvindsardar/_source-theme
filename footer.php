<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _source
 */

?>
		</div> <!-- .inner -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="inner row">
			<div class="col-xs-12 col-sm"><a href="/">
				<img class="footer-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg"></a>
			</div>
			<div class="col-xs-12 col-sm site-map"><h2>Site Map</h2><?php wp_nav_menu() ?></div>
			<div class="col-xs-12 col-sm legals">&copy; <?php echo date("Y"); ?> <a href="http://designsupport.com.au">Design Support</a></div>
		</div> <!-- .inner -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
