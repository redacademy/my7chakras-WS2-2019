<?php

/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/fa6c85a2f7.js" crossorigin="anonymous"></script>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html('Skip to content'); ?></a>


		<div class="site-header">
		<header id="masthead" class="site-header" role="banner">

			<a class="logo-header" href="/">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/logo/logo.svg" alt="logo">
			</a>


			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="search-toggle" aria-controls="primary-menu" aria-expanded="false">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/logo/search.svg" alt="logo">
				</button>




				<button class="menu-toggle">
					<i class="burger-menu fas fa-bars"></i>

				</button>


			</nav><!-- #site-navigation -->


			<nav class="main-manu-content" id="menu">

				<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
				<div class="clear"></div>
				
			</div>
					<div class="search-bar hide">
						<?php get_search_form(); ?>
					</div>

				
				<a href="#masthead">

					<button class="sticky-button">
						<img  src= "<?php echo get_template_directory_uri();?>/assets/logo/slide-button.svg" alt="logo">
						
					</button>
				</a>

			
				
			</header>

			<div class="overlay-body">
			</div>

	</div>



	<div id="content" class="site-content">

