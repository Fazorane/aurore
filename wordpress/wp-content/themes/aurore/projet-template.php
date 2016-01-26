<?php
/**
 * Template Name: projet
 *
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Aurore
 * @since Aurore 1.0
 */

/*appel Header*/
get_header(); ?>

<!--Décalaration variable video et image-->
<?php $video = get_field('video');?> 
<?php $img = get_field('image');?>
<!-- Tout le contenu de la page-->

<div id="fullpage">
	<div class="section" id="sectionun">
		<div class="intro columns small-12 medium-12 large-12">
			<div class="flex-video" id="video_projet">
			<?php echo  $video; ?>
		   </div>
	</div>
</div>
	
<div class="section" id="section1">
			<div class="row">
				<h1>LE PROJET</h1>
				<div  class="small-12 large-6 medium-6 columns">
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
					<?php endwhile; ?>
					<?php endif; ?>

				</div>

				<div class="small-12 large-6 medium-6 columns">
					<img src="<?php  echo $img; ?>">
					
				</div>

			</div>
		</div>

		<div class="section" id="section1">
			<div class="row">
				<h1>PARTENAIRES</h1>
				<div id="bar">
					<!--bar qui separeles deux blocs -->
					</div>

				<?php
				
				$blocs = get_field('blocs');

foreach ($blocs as $bloc) {
	echo '<div class="small-12 large-6 medium-6 columns">';

	echo '<div id="logo_part"><img src="' . $bloc['img']['url'] . '" alt=""></div><br/>';

	echo '<h4 id="part_title">' . $bloc['titre'] . '</h4>';

	echo '<div class="cadre">';

	echo '<div class="cadre">';

	echo '<p>' . $bloc['texte'] . '</p>';

	echo '</div>
		 </div>
		 </div>';
}

?>
		</div>
	</div>

</div>
<!-- Footer-->

<?php get_footer(); ?>
