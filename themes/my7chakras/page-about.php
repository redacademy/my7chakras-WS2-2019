<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" class="about">
	<header class="entry-header">
	<div class="bg-img"><h1>About <br> My Seven Chakras </h1></div>
	</header><!-- .entry-header -->

	<div class="entry-content">
	<?php the_content(); ?>

	

		

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>