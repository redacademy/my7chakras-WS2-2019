<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package RED_Starter_Theme
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php 
			
			$categories = get_categories( array(
				'orderby' => 'name',
				'parent'  => 0
			) );
			 
			foreach ( $categories as $category ) {
				printf( '<a class= "category-search" href="%1$s">%2$s</a><br />',
					esc_url( get_category_link( $category->term_id ) ),
					esc_html( $category->name )
				);
			}
			?> 
		</div><!-- .entry-meta -->
		<?php endif; ?>
		<?php the_title( sprintf( '<p class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' ); ?>
			<hr>
	</header><!-- .entry-header -->

</article><!-- #post-## -->
