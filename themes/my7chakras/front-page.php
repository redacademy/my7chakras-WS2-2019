<?php
/**
 * The template for displaying all pages.
 *  Template Name: Front Page
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	<div class='front-page'>
			<?php if ( have_posts() ) : the_post(); ?>

				<?php the_content( 'template-parts/content', 'page' ); ?>

			<?php endif; // End of the loop. ?>
				<div>

					<h1 class='feature'>Feature Episodes</h1>
				
				<div class ="feature-episodes">
					
					<?php
						$args = array( 'post_type' => 'post', 'numberposts' => '3', 'orderby' => 'date', 'order' => 'DESC' );
						$posts = get_posts( $args ); // returns an array of posts
					?>
					
					<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>

					<div class ="card-container" >

					
						<a href="<?php echo get_permalink(); ?>">
								<div class="image-card">
									
									<img class = "wp-post-image" src = "<?php echo get_the_post_thumbnail_url();?>">
									<div>
										
										<?php echo trim(explode('|',get_the_title(),2)[1]);?>
									
									</div>

								</div>
								<p>
									<?php
									$date = new DateTime(get_the_date());
									echo $date->format('F dS');
									?>
								</p>
								
								<h1><?php echo trim(explode('|',get_the_title(),2)[0]);?></h1>
								
								<p class="post-tags"> <?php echo the_tags($before = '', $sep = ' | ', $after = '');?></p>
								<p>	<?php echo wp_trim_words( get_the_content(), $num_words = 25);?> </p>
	
								
								<p class= "more"> <a href="<?php echo get_permalink(); ?>" >See more ></a></p>	

							
						</a>
						</div>

				<?php endforeach; wp_reset_postdata(); ?>

				</div>

				</div>
		</div>
	</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>


