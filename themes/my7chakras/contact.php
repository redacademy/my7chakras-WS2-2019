<?php
/**
 * Template Name: Contact
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : the_post(); ?>
                
                <?php the_content( 'template-parts/content', 'page' ); ?>

			<?php endif; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<h2>Contact AJ</h2>
<p>How can AJ help you?</p>

<?php get_footer(); ?>
