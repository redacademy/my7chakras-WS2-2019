<?php

/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while (have_posts()) : the_post(); ?>

			<?php
			/**
			 * Template part for displaying single posts.
			 *
			 * @package RED_Starter_Theme
			 */

			?>

			<article id="post-<?php the_ID(); ?>" class="blog__post">
				<div class="blog__postWrapper">
					<p>Episode <?php echo getPostThNumber() ?></p>
					<?php echo get_the_date('F d'); ?>
					<?php the_title('<h3 class="blog__postTitle">', '</h3>'); ?>
					<p class="blog__postTag">
						<?php the_tags('', ' | '); ?>
					</p>
					<div class="blog__postThumbnail">
						<?php if (has_post_thumbnail()) : ?>
							<?php the_post_thumbnail('large'); ?>
						<?php endif; ?>
					</div>


					<?php the_content(); ?>
				</div>
				<div class="blog__postText episode__question">
					<h3>Featured Questions <span class="">?</span><span>:</span></h3>
					<ol class="">
						<?php
						if (post_custom('featured_questions')) {
							$items = explode("\n", post_custom('featured_questions'));
							foreach ($items as $value) {
								echo '<li>' . $value . '</li>';
							}
						}
						?>
					</ol>
				</div>
				<?php
				wp_link_pages(array(
					'before' => '<div class="page-links">' . esc_html('Pages:'),
					'after'  => '</div>',
				));
				?>



				<?php the_post_navigation(); ?>

				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;
				?>

			<?php endwhile; // End of the loop. 
			?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>