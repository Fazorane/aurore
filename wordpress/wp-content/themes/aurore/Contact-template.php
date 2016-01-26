<?php
/**
 * Template Name: Contact
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
 
 <div id="contactage">
	<div class="section" id="section_form">
	<div class="row">
		<h1>CONTACT</h1>
	<div class="small-12 large-6 medium-12 columns" id="maps">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11647.618010164124!2d5.9286529!3d43.1275323!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xae5e85ce0ee6f313!2sConseil+d&#39;
		Architecture%2C+d&#39;Urbanisme+et+de+l&#39;Environnement+du+Var!5e0!3m2!1sfr!2sfr!4v1452522566329" 
		width="580" height="410" frameborder="0" style="border:0" allowfullscreen></iframe>
		
	</div>


	<div class="small-12 large-6 medium-12 columns" id="form">

	<div  class="small-6 medium-3 large-4 columns">
		<img src="<?php echo get_field('logo');?>">
		</div>

    <div  class="small-6 medium-3 large-8 columns" id="form_text">
    	<?php echo get_field('adresse');?>
    	</div>

    <div class="small-12 large-12 medium-12 columns" id="formulaire">

		<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
					<?php endwhile; ?>
		<?php endif; ?>
	</div>
		
    </div>
    </div>
	</div>
</div>

<?php get_footer(); ?>
