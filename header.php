<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

<div id="ok">


		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
		.menu-bar {
  position: relative;
  left: -5%;
  display: flex;
  flex-direction: column;
  justify-content: spaces-between;
  background: #fffff
    ;
  height: 60px;
  width: 105.4%;
  margin-top: 50px;
}

.menu-item-container {
  display: flex;
  width: 40%;
  height: 100%;
  flex-direction: row;
  justify-content: center;
  align-self: center;
}

.menu-item {
  position: relative;
  height: 30%;
  flex-grow: 1;
  border-left: 1px solid #999999;
  align-self: center;
  text-align: center;
  transition: flex-grow 0.25s ease-out;  
}

.menu-item a{
  position: relative;
  bottom: 30%;
  color: #dddddd;
  text-decoration: none;
  font-size: 20px;
  transition: font-size 0.25s ease-out, font-weight 0.1s ease-out, bottom 0.25s ease-out;
}

.menu-item:first-child {
  border-left: 0px;
}

.menu-item:hover {
  flex-grow: 1.5;
}

.menu-item:hover > a {
  color: #ffffff;
  font-size: 26px;
  bottom: 60%;
  font-weight: bold;
}

.menu-bar-border-top {
  background: #eeeeee;
  height: 4px;
  width: 100%;
  box-shadow: 0px 2px #666666;
}

.menu-bar-border-bottom {
  background: #eeeeee;
  height: 4px;
  width: 100%;
  box-shadow: 0px -2px #666666;
}