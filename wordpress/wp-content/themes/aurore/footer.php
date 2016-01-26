<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Aurore
 * @since Aurore 1.0
 */
?>

<footer>
	<div class="curved"><img src="<?php echo get_template_directory_uri();?>/img/chevronUp.png"></div>
	<div class="row bottom-bar">
		<div class="small-12 large-12 medium-12 columns">
			<div class="small-12 large-5 medium-5 columns">
				<div class="small-12 large-6 medium-6 columns center">
					<a href="">La maison Bopos</a>
				</div>
				<div class="small-12 large-6 medium-6 columns center">
					<a href="">Le jeu</a>
				</div>
			</div>
			<!--<div class="small-12 large-2 medium-5 columns center">
				<a href=""><img src="<?php echo get_template_directory_uri();?>/img/logo-planete.png"></a>
			</div>-->
			<div class="small-12 large-5 medium-5 columns">
				<div class="small-12 large-6 medium-6 columns center">
					<a href="">Le projet Aurore</a>
				</div>
				<div class="small-12 large-6 medium-6 columns center">
					<a href="">Contact</a>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
