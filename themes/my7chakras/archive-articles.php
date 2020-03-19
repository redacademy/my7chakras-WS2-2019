<?php

/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area episodes blog resources">
    <main id="main" class="site-main" role="main">
        <div class="episodes__wrapper">
            <div class="episodes__heading resources__heading">
                <h1>Enlighten Yourself With Inner Knowledge </h1>
                <p>Lorem ipsum dolor sit amet, consetetur
                    sadipscing elitr, sed diam nonumy eirmod
                    tempor invidunt ut . Lorem ipsum dolor sit amet, consetetur
                </p>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/episodes_heading.png" alt="heading flower">
            </div>

            <?php get_template_part('searchform-articles'); ?>

            <div class="episodes__info">
                <div></div>
                <ul class="episodes__sort">
                    <li>
                        <p>Sorted: Newest to oldest</p>
                        <ul>
                            <li><a href="<?php echo add_query_arg(array('order' => 'DESC')); ?>">Newest to oldest</a></li>
                            <li><a href="<?php echo add_query_arg(array('order' => 'ASC')); ?>">Oldest to newest</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
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
                                    <?php echo get_the_date('F d'); ?>
                                </div>
                                <?php the_title(sprintf('<a href="%s" rel="bookmark" class="blog__postTitle"><h3>', esc_url(get_permalink())), '</h3></a>'); ?>
                                <p class="blog__postTag"><?php the_tags('', ' | '); ?></p>
                                <div class="blog__postExcerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="blog__postBtn">See more</a>
                            </div>
                        </article>

                    <?php endwhile; ?>

                </section>
                <div class="blog__pageNavi">
                    <?php if (have_posts()) :
                        while (have_posts()) : the_post();

                        endwhile;

                        if (function_exists('pagination')) :
                            pagination($wp_query->max_num_pages, get_query_var('paged'));
                        endif;

                    else :
                        echo 'no posts';
                    endif; ?>
                </div>

            <?php else : ?>

                <?php get_template_part('template-parts/content', 'none'); ?>

            <?php endif; ?>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>