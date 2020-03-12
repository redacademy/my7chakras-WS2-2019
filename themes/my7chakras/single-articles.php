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

            <article id="post-<?php the_ID(); ?>" class="post">
                <div class="post__wrapper">
                    <p class="post__num">Episode <?php echo getPostThNumber() ?></p>
                    <?php echo get_the_date('F d'); ?>
                    <?php the_title('<h3 class="post__title">', '</h3>'); ?>
                    <p class="post__tag">
                        <?php the_tags('', ' | '); ?>
                    </p>
                    <div class="post__thumbnail">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large'); ?>
                        <?php endif; ?>
                    </div>
                    <div class="episode__btn">
                        <div class="episode__btnPodcast">
                            <audio src="https://res.cloudinary.com/code-kitchen/video/upload/v1555038697/posts/zk5sldkxuebny7mwlhh3.mp3"></audio>
                            <h5>Stream Podcast</h5>
                            <div class="episode__play">
                                <button data-skip="-30" class="player__button"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/episodes/replay-30.png" alt=""></button>
                                <button class="player__button toggle" title="Toggle Play"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/episodes/play-circle.png" alt=""></button>
                                <button data-skip="30" class="player__button"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/episodes/forward-30.png" alt=""></button>
                            </div>
                        </div>
                        <div class="episode__btnApp">
                            <h5>Listen On:</h5>
                            <div>
                                <a href="">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/episodes/podcast.png" alt="">
                                    <p>Apple<br>Podcasts</p>
                                </a>
                                <a href="">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/episodes/spotify.png" alt="">
                                    <p>Spotify</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="episode__heading">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="post__text">
                    <p class="post__white post__white--top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog/white_top.svg" alt=""></p>
                    <div class="episode__question">
                        <h3>Featured Questions <span class="question">?</span><span class="colon">:</span></h3>
                        <ol>
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
                    <p class="post__white post__white--bottom"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog/white_bottom.svg" alt=""></p>
                </div>
                <div class="post__footer">
                    <?php
                    $prev_post = get_previous_post();
                    $next_post = get_next_post();
                    if ($prev_post || $next_post) :
                    ?>
                        <nav class="page-nav">
                            <?php if ($prev_post) :
                            ?>
                                <a href="<?php echo get_permalink($prev_post->ID); ?>" class="prev-link">
                                    <?php if (get_the_post_thumbnail($prev_post->ID)) :
                                    ?>
                                        <?php echo get_the_post_thumbnail($prev_post->ID, 'full'); ?>
                                    <?php else :
                                    ?>
                                        <img src="no-image.jpg" alt="">
                                    <?php endif; ?>
                                    <div>
                                        <p>Previous Episode</p>
                                        <p class="page-navTitle"><?php echo get_the_title($next_post->ID); ?></p>
                                    </div>
                                </a>
                            <?php endif; ?>
                            <?php if ($next_post) :
                            ?>
                                <a href="<?php echo get_permalink($next_post->ID); ?>" class="next-link">
                                    <?php if (get_the_post_thumbnail($next_post->ID)) :
                                    ?>
                                        <?php echo get_the_post_thumbnail($next_post->ID, 'full'); ?>
                                    <?php else :
                                    ?>
                                        <img src="no-image.jpg" alt="">
                                    <?php endif; ?>
                                    <div>
                                        <p class="page-navTitle">Next Episode</p>
                                        <p><?php echo get_the_title($next_post->ID); ?></p>
                                    </div>
                                </a>
                            <?php endif; ?>
                        </nav>
                    <?php endif; ?>

                    <div class="post__related">
                        <h2>Related episodes</h2>
                        <div class="post__relatedList">
                            <?php
                            $categories = get_the_category($post->ID);
                            $category_ID = array();
                            foreach ($categories as $category) :
                                array_push($category_ID, $category->cat_ID);
                            endforeach;
                            $args = array(
                                'post__not_in' => array($post->ID),
                                'posts_per_page' => 3,
                                'category__in' => $category_ID,
                                'orderby' => 'rand',
                            );

                            $query = new WP_Query($args);

                            if ($query->have_posts()) :
                                while ($query->have_posts()) : $query->the_post(); ?>

                                    <article class="related-post-sub">
                                        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                                            <div class="blog__postImg">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <?php the_post_thumbnail('large'); ?>
                                                <?php endif; ?>
                                                <p class="blog__postNum">Episode <?php echo getPostThNumber() ?></p>
                                            </div>
                                        </a>
                                        <div class="blog__postContent">
                                            <div class="blog__postDay">
                                                <?php echo get_the_date('F d'); ?>
                                            </div>
                                            <?php the_title(sprintf('<a href="%s" rel="bookmark" class="blog__postTitle"><h3>', esc_url(get_permalink())), '</h3></a>'); ?>
                                            <p class="blog__postTag"><?php the_tags('', ' | '); ?></p>
                                            <div class="blog__postExcerpt">
                                                <?php the_excerpt(); ?>
                                            </div>
                                        </div>
                                    </article>

                                <?php endwhile; ?>

                            <?php else : ?>

                                <p>There is no related post</p>

                            <?php endif;
                            wp_reset_postdata(); ?>

                        </div>
                    </div>
                    <?php related_posts(); ?>
                </div>
            <?php endwhile; // End of the loop.
            ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>