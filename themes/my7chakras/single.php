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
						<img src="<?php

									if (get_the_post_thumbnail($post_id) != '') {

										echo get_the_post_thumbnail_url();
									} else {

										echo catch_that_image();
									}

									?>">
					</div>
					<div class="episode__btn">
						<div class="episode__btnPodcast">
							<h5>Stream Podcast</h5>
							<div class="episode__play">
								<div class="player">
									<audio class="player__video viewer">
										<source src="<?php echo esc_html($post->audio); ?>">
									</audio>

									<div class="player__controls">
										<button data-skip="-30" class="player__button episode__playSkip"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/episodes/replay-30.png" alt=""></button>
										<button class="player__button toggle" title="Toggle Play"> ►</button>
										<button data-skip="30" class="player__button episode__playSkip"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/episodes/forward-30.png" alt=""></button>
										<div class="progress">
											<div class="progress__filled"></div>
										</div>
									</div>
								</div>
							</div>

							<!-- play function -->
							<script>
								const player = document.querySelector('.player');
								const audio = player.querySelector('.viewer');
								const progress = player.querySelector('.progress');
								const progressBar = player.querySelector('.progress__filled');
								const toggle = player.querySelector('.toggle');
								const skipButtons = player.querySelectorAll('[data-skip]');
								const ranges = player.querySelectorAll('.player__slider');
								const full = player.querySelector('.player__full');

								function togglePlay() {
									const method = audio.paused ? 'play' : 'pause';
									audio[method]();
								}

								function updateButton() {
									const icon = this.paused ? '►' : '❚ ❚';
									console.log(icon);
									toggle.textContent = icon;
								}

								function skip() {
									console.log(this.dataset.skip);
									audio.currentTime += parseFloat(this.dataset.skip);
								}

								function handleRangeUpdate() {
									audio[this.name] = this.value;
								}

								function handleProgress() {
									const percent = (audio.currentTime / audio.duration) * 100;
									progressBar.style.flexBasis = `${percent}%`;
								}

								function scrub(e) {
									const scrubTime = (e.offsetX / progress.offsetWidth) * audio.duration;
									audio.currentTime = scrubTime;
									console.log(e);
								}

								function fullS() {
									full.requestFullscreen();
								}

								audio.addEventListener('click', togglePlay);
								audio.addEventListener('play', updateButton);
								audio.addEventListener('pause', updateButton);
								audio.addEventListener('timeupdate', handleProgress);
								toggle.addEventListener('click', togglePlay);
								skipButtons.forEach(button => button.addEventListener('click', skip));
								ranges.forEach(range => range.addEventListener('change', handleRangeUpdate));
								ranges.forEach(range => range.addEventListener('mouseMove', handleRangeUpdate));

								let mousedown = false;
								progress.addEventListener('click', scrub);
								progress.addEventListener('mousemove', (e) => mousedown && scrub(e));
								progress.addEventListener('mousedown', () => mousedown = true);
								progress.addEventListener('mouseup', () => mousedown = false);
								full.addEventListener('click', fullS);
							</script>

						</div>
						<div class="episode__btnApp">
							<h5>Listen On:</h5>
							<div>
								<a href="https://podcasts.apple.com/us/podcast/id1045873679">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/episodes/podcast.png" alt="">
									<p>Apple<br>Podcasts</p>
								</a>
								<a href="https://open.spotify.com/show/6mDwmMwh0r9zQYpTc1nqa5">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/episodes/spotify.png" alt="">
									<p>Spotify</p>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="post__text">
					<p class="post__white post__white--top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog/white_top.svg" alt=""></p>
					<div class="post__textWrapper">
						<?php the_content(); ?>
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

									<?php endif; ?>
									<div>
										<p class="page-navTitle">Previous Episode</p>
										<p class="page-navContent"><?php echo get_the_title($prev_post->ID); ?></p>
									</div>
								</a>
							<?php endif; ?>
							<?php if ($next_post) :
							?>
								<a href="<?php echo get_permalink($next_post->ID); ?>" class="next-link">
									<?php if (get_the_post_thumbnail($next_post->ID)) :
									?>
										<?php echo get_the_post_thumbnail($next_post->ID, 'full'); ?>
									<?php endif; ?>
									<div>
										<p class="page-navTitle">Next Episode</p>
										<p class="page-navContent"><?php echo get_the_title($next_post->ID); ?></p>
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
								'posts_per_page' => 6,
								'category__in' => $category_ID,
								'orderby' => 'rand',
							);

							$query = new WP_Query($args);

							if ($query->have_posts()) :
								while ($query->have_posts()) : $query->the_post(); ?>

									<article class="post__relatedItem">
										<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
											<div class="post__relatedImg">
												<?php if (has_post_thumbnail()) : ?>
													<?php the_post_thumbnail('large'); ?>
												<?php endif; ?>
												<p class="post__relatedNum">Episode <?php echo getPostThNumber() ?></p>
											</div>
										</a>
										<div class="post__relatedContent">
											<div class="post__relatedDay">
												<?php echo get_the_date('F d'); ?>
											</div>
											<?php the_title(sprintf('<a href="%s" rel="bookmark" class="post__relatedTitle"><h3>', esc_url(get_permalink())), '</h3></a>'); ?>
											<div class="post__relatedExcerpt">
												<?php the_excerpt(); ?>
											</div>
											<a href="<?php the_permalink(); ?>" class="post__relatedBtn">See more</a>
										</div>
									</article>

								<?php endwhile; ?>

							<?php else : ?>

								<p>There is no related post</p>

							<?php endif; ?>

						</div>
					</div>
				</div>
			<?php endwhile; // End of the loop.
			?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>