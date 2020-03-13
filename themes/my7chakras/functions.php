<?php

/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RED_Starter_Theme
 */

if (!function_exists('red_starter_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function red_starter_setup()
	{
		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		// Let WordPress manage the document title.
		add_theme_support('title-tag');

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'primary' => esc_html('Primary Menu'),
		));

		// Switch search form, comment form, and comments to output valid HTML5.
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));
	}
endif; // red_starter_setup
add_action('after_setup_theme', 'red_starter_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function red_starter_content_width()
{
	$GLOBALS['content_width'] = apply_filters('red_starter_content_width', 640);
}
add_action('after_setup_theme', 'red_starter_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function red_starter_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html('Sidebar'),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar(array(
		'name'          => esc_html('sidebar-social'),
		'id'            => 'sidebar-social',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'red_starter_widgets_init');

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function red_starter_minified_css($stylesheet_uri, $stylesheet_dir_uri)
{
	if (file_exists(get_template_directory() . '/build/css/style.min.css')) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter('stylesheet_uri', 'red_starter_minified_css', 10, 2);

/**
 * Enqueue scripts and styles.
 */
function red_starter_scripts()
{
	wp_enqueue_style('flickity-css', get_template_directory_uri() . '/build/css/flickity.css');
	wp_enqueue_style('red-starter-style', get_stylesheet_uri());
	wp_enqueue_script('Jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
	wp_enqueue_script('red-starter-navigation', get_template_directory_uri() . '/build/js/navigation.min.js', array(), '20151215', true);
	wp_enqueue_script('red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20151215', true);
	wp_enqueue_script('flickity-js', get_template_directory_uri() . '/build/js/flickity.pkgd.min.js');
	wp_enqueue_script('normal-js', get_template_directory_uri() . '/build/js/index.min.js');
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'red_starter_scripts');


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


/**
 * Set exerpt length
 */
function my_excerpt_length($length)
{
	return 12;
}
add_filter('excerpt_length', 'my_excerpt_length');


/**
 * Set post number
 */
function getPostThNumber()
{
	global $wpdb, $post;

	$number = $wpdb->get_var("
	  SELECT COUNT(*)
	  FROM $wpdb->posts
	  WHERE post_status = 'publish'
	  AND post_type = 'post'
	  AND post_date <= '$post->post_date'
	");

	return $number;
}

/**
 * Show max page number
 */

function max_show_page_number()
{
	global $wp_query;

	$max_page = $wp_query->max_num_pages;
	echo $max_page;
}


/**
 * pagenation
 */

function pagination($pages, $paged, $range = 2, $show_only = false)
{

	$pages = (int) $pages;
	$paged = $paged ?: 1;

	$text_first   = "« First";
	$text_before  = "‹ Before";
	$text_next    = "Next ›";
	$text_last    = "Last »";

	if ($show_only && $pages === 1) {

		echo '<div class="pagination"><span class="current pager">1</span></div>';
		return;
	}

	if ($pages === 1) return;

	if (1 !== $pages) {

		echo '<div class="pagination"><span class="page_num">Page ', $paged, ' of ', $pages, '</span>';
		if ($paged > $range + 1) {

			echo '<a href="', get_pagenum_link(1), '" class="first">', $text_first, '</a>';
		}
		if ($paged > 1) {

			echo '<a href="', get_pagenum_link($paged - 1), '" class="prev">', $text_before, '</a>';
		}
		for ($i = 1; $i <= $pages; $i++) {

			if ($i <= $paged + $range && $i >= $paged - $range) {

				if ($paged === $i) {
					echo '<span class="current pager">', $i, '</span>';
				} else {
					echo '<a href="', get_pagenum_link($i), '" class="pager">', $i, '</a>';
				}
			}
		}
		if ($paged < $pages) {

			echo '<a href="', get_pagenum_link($paged + 1), '" class="next">', $text_next, '</a>';
		}
		if ($paged + $range < $pages) {

			echo '<a href="', get_pagenum_link($pages), '" class="last">', $text_last, '</a>';
		}
		echo '</div>';
	}
}


/**
 * audio
 */

// function enqueue_my_script()
// {
// 	wp_enqueue_script('functions_js', get_stylesheet_directory_uri() . '/js/audiojs/audio.min.js', array('jquery'), false, false);
// }
// add_action('wp_enqueue_scripts', 'enqueue_my_script');
