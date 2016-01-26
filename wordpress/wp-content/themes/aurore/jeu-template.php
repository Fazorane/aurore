<?php
/**
 * Template Name: Jeu
 *
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Aurore
 * @since Aurore 1.0
 */


get_header(); ?>

<div id="fullpage">
	<div class="section " id="section0">
		<div class="intro columns small-12 medium-12 large-12">
			<button class="btn-bloc">Commencer l'aventure</button>
		</div>
	</div>
	

	<div class="section" id="section1">
			<div class="row" id="contenu_jeu">
				<h1>Deroulement du jeu </h1>
				<div id="contenu_jeu" class="small-12 large-12 medium-12 columns">
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
					<?php endwhile; ?>
					<?php endif; ?>

					<a class="button btn-blocs" href="#">Commencer l'aventure</a>

				</div>

				<!-- Pour mettre teaser ou vidéo sur la moitié de la page 

				<div class="small-12 large-6 medium-6 columns">
					<?php echo get_field('video'); ?>
					<a class="button btn-blocs" href="#">Commencer l'aventure</a>
				</div>
				-->
			</div>
		</div>

	<div class="section" id="section2">
		<div class="intro">
			
		</div>
	</div>
</div>

<?php get_footer(); ?>
