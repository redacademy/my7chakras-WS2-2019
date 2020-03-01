<div class="about-page-container about-page-header">
	<?php
	/**
	 * The template for displaying all pages.
	 *
	 * @package RED_Starter_Theme
	 */

	get_header(); ?>
	</div>
<div class="about-container">
		<div id="primary" class="content-area about">
			<main id="main" class="site-main" role="main">
				<?php while ( have_posts() ) : the_post(); ?>


            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="entry-content">
                    <?php the_content(); ?>
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
</div>

<?php get_footer(); ?>