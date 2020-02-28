<?php

/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area episodes">
    <main id="main" class="site-main" role="main">
        <div class="episodes__wrapper">
            <h1>My Seven Chakras Podcast Episode</h1>

            <h2>Categories</h2>

            <h2>Episodes</h2>

            <?php if (have_posts()) : ?>

                <?php if (is_home() && !is_front_page()) : ?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                    </header>
                <?php endif; ?>
                <?php while (have_posts()) : the_post(); ?>



                <?php endwhile; ?>

            <?php else : ?>

                <?php get_template_part('template-parts/content', 'none'); ?>

            <?php endif; ?>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>