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
                <section class="blog__lists episodes__lists">
                    <?php while (have_posts()) : the_post(); ?>

                        <article id="post-<?php the_ID(); ?>" class="blog__post">
                            <div class="blog__postImg">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large'); ?>
                                <?php endif; ?>
                            </div>
                            <div class="blog__postContent">
                                <div class="blog__postDay">
                                    <?php red_starter_posted_on(); ?>
                                </div>
                                <?php the_title(sprintf('<a href="%s" rel="bookmark" class="blog__postTitle"><h3>', esc_url(get_permalink())), '</h3></a>'); ?>
                                <p class="blog__postTag"><?php the_tags('', ' | '); ?></p>
                                <div class="entry-content">
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink(); ?>" class="blog__postBtn">See more</a>
                                </div>
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