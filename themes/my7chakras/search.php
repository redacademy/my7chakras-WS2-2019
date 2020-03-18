<?php
/**
 * The template for displaying search results pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<section id="primary" class="content-area">

		<main id="main" class="site-main search-page" role="main">

		<div class="total-results">
		<?php
		$allsearch = new WP_Query("s=$s&showposts=0"); 
		echo $allsearch ->found_posts.' Result(s) for:'. get_search_query();
			?>
		</div>
		

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'search' ); ?>

			<?php endwhile; ?>

			<?php red_starter_numbered_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

	<?php wp_footer(); ?>

