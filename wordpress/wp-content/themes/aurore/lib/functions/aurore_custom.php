<?php

/********************************************************************************************/
//  Fonctions php
/********************************************************************************************/


/*Menu*/
function get_menu() {

	global $post;
	
    $args = array(
        'order'                  => 'ASC',
        'orderby'                => 'menu_order',
        'post_type'              => 'nav_menu_item',
        'post_status'            => 'publish',
        'output'                 => ARRAY_A,
        'output_key'             => 'menu_order',
        'nopaging'               => true,
        'update_post_term_cache' => false 
	);

	$items = wp_get_nav_menu_items( 'menu-principal', $args );

	foreach ($items as $i => $item) {
		if (isset($item->object_id) && isset($post->ID)) {
                if($item->object_id == $post->ID) {$activeClass = 'activeMenu';} else {$activeClass = '';}
            }
        else {
            	$activeClass = '';
        }
		if($i == 0) {
			echo '<div class="small-12 large-5 medium-5 columns">
        		  <div class="top-bar-right">
        		  <ul class="menu">';
			echo '<li class="'. $item->classes[0] . ' ' . $activeClass . '"><a href="' . $item->url . '" class="center">' . $item->title . '</a></li>';
		}
		else if($i == 1) {
			echo '<li class="'. $item->classes[0] . ' ' . $activeClass . '"><a href="' . $item->url . '" class="center">' . $item->title . '</a></li>';
			echo '</ul>
				  </div>
				  </div>
				  <div class="small-12 center large-2 medium-2 columns">
                  <a href="index.php"><img src="'. get_template_directory_uri() .'/img/logo-site.svg"></a>
                  </div>';
			echo '<div class="small-12 large-5 medium-5 columns">
        		  <div class="top-bar-right">
        		  <ul class="menu">';
		} else {

			echo '<li class="'. $item->classes[0] . ' ' . $activeClass . '"><a href="' . $item->url . '" class="center">' . $item->title . '</a></li>';

		}
	}

	echo '</ul></div></div>';
}
/*fin Menu*/

/*Tabs Maison BEPOS*/
function get_all_categories() {
	global $post;

	$args = array( 'posts_per_page' => 9 );
	$allPosts = get_posts($args);

	$argsCats = array(
		'type'        	=> 'post',
		'child_of'    	=> 0,
		'parent'      	=> '',
		'hide_empty'  	=> 1,
		'hierarchical'	=> 1,
		'exclude'     	=> '',
		'include'     	=> '',
		'number'      	=> '',
		'taxonomy'    	=> 'category',
		'pad_counts'  	=> false 

	); 

	$categories = get_categories( $argsCats );

	$classActive = 'active';

	echo '<ul class="firstTabs  small-12 medium-12 large-12">';
	foreach ($categories as $category) {
		echo '<li class="columns small-12 medium-4 large-4 '. $classActive .'"><a href="#" class="'. $category->slug .'">'. $category->name .'</a></li>';
		$classActive = '';
	}
	echo '</ul>';
}

add_action( 'wp_ajax_nopriv_get_articles', 'get_articles' );
add_action( 'wp_ajax_get_articles', 'get_articles' );
function get_articles($return = false) {

	$cat = 'energie';

	if(isset($_GET['cat']) && !empty($_GET['cat'])) {
		$cat = $_GET['cat'];
	}

	$args = array (
		'post_type' => 'post',
		'category_name' =>  $cat
	);

	$query = new WP_Query($args);

	if($query->have_posts()) {
		$active = 'active';
		echo '<ul>';
		
		while ($query->have_posts()) : $query->the_post();
			$image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()));
			?>
				<li class="<?php echo $active; ?>">
					<img class="imgArticle" src="<?php echo $image[0]; ?>">
					<div class="titre">
						<p><?php the_title(); ?></p>
					</div>
					<div class="content-article"><?php the_content(); ?></div>
				</li>
			<?php
			$active = '';
		endwhile;

		echo '</ul>';
	}

	wp_reset_query();

	if(!$return) die();
}

/*Fin Tabs*/