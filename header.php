<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

	<!-- bootstrap -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/bootstrap.min.css'; ?>" />

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet" />

	<!-- animate.css 
    ======================-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />



	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'bootstrap2wordpress'); ?></a>


		<header class="site-header" role="banner">
			<!-- nav bar
      	============== -->
			<div class="navbar-wrapper">
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
					<div class="container">
						<a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri() . '/assets/img/logo.png'; ?>" alt="Bootstrap to Wordpress" /></a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<?php
						$args = [
							// Location pickable in Customizer
							'theme_location'  =>  'menu-1',
							// Assigns a default menu to location
							'menu'            =>  'Main Menu',
							// Main wrapper around the ul of posts
							'container'       =>  'div',
							'container_class' =>  'collapse navbar-collapse',
							'container_id'    =>  'navbarSupportedContent',
							// Wrapper for menu items - defaults to ul
							'items_wrap'      =>  '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'menu_class'      =>  'navbar-nav ms-auto mb-2 mb-lg-0', //class of ul
							'echo' => 'true', // def true
							// Add text to link text (inside a tag)
							'link_before'     =>  '',
							'link_after'      =>  '',
							// Add text to link text (inside a tag)
							'before'          =>  '',
							'after'           =>  '',
							// Depth of child nav items to show
							'depth'           =>  0,
							// Callback function if menu is not available
							'fallback_cb'     =>  'wp_page_menu',
							'add_li_class' => 'nav-item',
							'add_a_class' => 'nav-link',
							'a_tag_aria_current' => 'page'
						];
						wp_nav_menu($args);

						?>

					</div>
				</nav>
			</div>
		</header>