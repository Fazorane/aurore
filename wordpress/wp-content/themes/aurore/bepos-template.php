<?php
/**
 * Template Name: Bepos
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Aurore
 * @since Aurore 1.0
 */

get_header(); ?>

<?php
	$titreSection2 = get_field('title_section');
	$infosCarousel = get_field('carousel');
?>

<div id="fullpage" class="bps container">
	<div class="section " id="section_bepos">
		<div class="intro columns small-12 medium-12 large-12">
			
		</div>
	</div>

	<div class="section" id="section1">
		<h1>LES CLES DE LA MAISON BEPOS</h1>
	    <div class="intro">			
			<div class="columns small-12 medium-12 large-12">
				<?php get_all_categories(); ?>
				<div class="row tab_content">
					<div class="columns medium-3 large-3 image">
						<div class="img-circular" style="background: url() center no-repeat;"></div>
					</div>
					<div class="columns medium-9 large-9 content"></div>
				</div>
				<div class="row sousMenus">						
					<?php get_articles(true); ?>
				</div>
			</div>

		</div>
	</div>

	<div class="section rowNotBefore" id="section2_bepos">
		<h1>Les bons gestes</h1>
		<div class="carousel-container columns large-12 medium-12 small-12">
			<div id="carousel">
				<?php 
					foreach ($infosCarousel as $infoCarousel) {
						echo '<div class="carousel-feature">
								<a href="#">
									<img class="carousel-image" alt="Image Caption" src="'. $infoCarousel['image']['sizes']['thumbnail'] .'">
									<h3>'. $infoCarousel['titre'] .'</h3>
									<div class="carousel-caption">
										<p>'. $infoCarousel['caption'] .'</p>
									</div>
								</a>
							</div>';
					}

				?>
			</div>
		<div class="btns">
     		<a id="but_prev" href="#"><img src="<?php echo get_template_directory_uri();?>/img/arrow-left.png"></a>
     		<a id="but_next" href="#"><img src="<?php echo get_template_directory_uri();?>/img/arrow-right.png"></a>
    	</div>
		</div>
	</div>
	
</div>

<?php get_footer(); ?>
