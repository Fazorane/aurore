<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Aurore
 * @since Aurore 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Page thumbnail and title.
		aurore_post_thumbnail();
		the_title( '<header><h1 class="entry-title">', '</h1></header><!-- .entry-header -->' );
	?>

	<div class="indexpage">
		<?php
			the_content();
			wp_link_pages( array(
				'before'      => '<div id="index_contenu">' . __( 'Pages:', 'aurore' ),
				'after'       => '</div>',
				'link_before' => '<p>',
				'link_after'  => '</p>',
			) );

			edit_post_link( __( 'Edit', 'aurore' ), '<div id="index_contenu">', '</div>' );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
