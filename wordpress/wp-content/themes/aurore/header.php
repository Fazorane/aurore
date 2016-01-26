<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Aurore
 * @since 
 * Aurore 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#ffffff">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php
		//wp_head();
	?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lib/css/main.min.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php bloginfo('template_url'); ?>/lib/js/ressources/html5shiv.min.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/lib/js/ressources/respond.min.js"></script>
    <![endif]-->
    <!--[if IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lib/css/ie8.css" />
    <html class="ie8">
    <![endif]-->

	<script> var site_url = "<?php echo get_bloginfo('url');?>";</script>
	<script> var template_directory = "<?php echo get_bloginfo('template_directory');?>";</script>

</head>

<body <?php //body_class(); ?>>

    <header>
        <div class="top-bar" id="main-navigation">
            <div class="row">
           
                <?php get_menu(); ?>
            </div>  
        </div>
        <div class="chevron"><img src="<?php echo get_template_directory_uri();?>/img/chevronDown.png"></div>
    </header>