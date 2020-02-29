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
            <h1>My Seven Chakras <br>Podcast Episode</h1>

            <h2>Categories</h2>
            <div class="episodes__categories">
                <a href="" class="episodes__category">
                    <p>Personal Growth,<br>Purpose & Career</p>
                </a>
                <a href="" class="episodes__category">
                    <p>Health & <br>Spirituality</p>
                </a>
                <a href="" class="episodes__category">
                    <p>Love & <br>Relationships</p>
                </a>
                <a href="" class="episodes__category">
                    <p>Energy Medicine, <br>Chakras & Healing</p>
                </a>
            </div>

            <h2>Episodes</h2>

            <?php if (have_posts()) : ?>

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