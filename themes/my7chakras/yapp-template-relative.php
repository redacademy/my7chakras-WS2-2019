<?php
/*
YARPP Template: template
*/ ?>

<h3>Related posts</h3>
<?php if (have_posts()) : ?>
    <ul class="related-post">
        <?php while (have_posts()) : the_post(); ?>
            <?php if (has_post_thumbnail()) : ?>
                <li>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
                    <p class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
                </li>
            <?php endif; ?>
        <?php endwhile; ?>
    </ul>

<?php else : ?>
    <p>No related posts</p>
<?php endif; ?>