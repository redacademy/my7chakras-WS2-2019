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
                <section class="episodes__lists">
                    <?php while (have_posts()) : the_post(); ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="episodes__post">
                            <div class="episodes__postImg">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large'); ?>
                                <?php endif; ?>
                            </div>

                            <?php if ('post' === get_post_type()) : ?>
                                <div class="episodes__postDay">
                                    <?php red_starter_posted_on(); ?>
                                </div>
                            <?php endif; ?>
                            <?php the_title(sprintf('<a href="%s" rel="bookmark" class="episodes__postTitle"><h1>', esc_url(get_permalink())), '</h1></a>'); ?>

                            <div class="entry-content">
                                <?php the_excerpt(); ?>
                                <p><a href="<?php the_permalink(); ?>" class="read-more">See more</a></p>
                            </div>
                        </article>

                    <?php endwhile; ?>
                </section>
            <?php else : ?>

                <?php get_template_part('template-parts/content', 'none'); ?>

            <?php endif; ?>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>