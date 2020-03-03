<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">


	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">

				<a class="logo-header" href="">
					<img src= "<?php echo get_template_directory_uri();?>/assets/logo/logo.svg" alt="logo">				
				</a>




	
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="search-toggle" aria-controls="primary-menu" aria-expanded="false">
						<img src= "<?php echo get_template_directory_uri();?>/assets/logo/search.svg" alt="logo">				
					</button>

					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<img src= "<?php echo get_template_directory_uri();?>/assets/logo/burger.svg" alt="logo">				
					</button>
				</nav><!-- #site-navigation -->


				<div class="main-manu-content">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</div>

			</header><!-- #masthead -->

			<div id="content" class="site-content">
