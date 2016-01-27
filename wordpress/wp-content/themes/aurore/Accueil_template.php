<?php
/**
 * Template Name: Accueil
 *
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Aurore
 * @since Aurore 1.0
 */

get_header(); ?>
<style>
#fp-nav{display:none;}
</style>

<div id="indexpage" class="small-12 large-12 medium-12 columns">

	<div class="section ">
	<div class="row">
	<div class="small-12 large-5 medium-6 columns" id="index_contenu">
		<div id="index_texte">
			<!--code recuperation contenu -->
		 <?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; ?>
			<?php endif; ?> 
		</div> 
	</div>
</div>

	<div class="row">
		<div class="small-12 large-2 medium-6 columns" id="index_jeu">
		<a href="le-jeu.php"><img src="<?php echo get_template_directory_uri();?>/img/manette.png" alt="jeu"/></a><br/>
		<p class="lien_accueil"><a href="le-jeu.php">Découvrir <br/> le jeu Aurore</a></p>
    </div>

    <div class="small-12 large-2 medium-6 columns" id="index_bepos">
		<a href="la-maison-bepos.php"> <img src="<?php echo get_template_directory_uri();?>/img/maison_bepos.png" alt="maison bepos"/></a><br/>
		<p class="lien_accueil"><a href="la-maison-bepos.php">En savoir plus <br/>sur la maison </br>BEPOS</a></p>
	</div>

    </div>
	</div>
</div>


<?php get_footer(); ?>
