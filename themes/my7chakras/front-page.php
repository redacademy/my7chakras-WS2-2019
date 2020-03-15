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

		</main><!-- #main -->
	</div>
	</div><!-- #primary -->



<?php get_footer(); ?>


<!-- <div class="init-front">
<div>
<h1>Welcome To
My Seven Chakras</h1>
Are you looking for ideas, tools, techniques, and tips that will help you calm your emotions, reduce internal mental chatter, align your energies and authentically live your life’s purpose?

</div>
<figure class="wp-block-image size-large"><img src="http://my7chakras.van.cp.academy.red/wp-content/uploads/2020/03/aditya.png" alt="" class="wp-image-133"></figure>
</div> -->

<!-- <div class="info-front">
	<p><span>2.5</span> million downloads</p>
	<p><span>4.7</span> stars on iTunes</p>
	<p>Listeners in 150 Countries</p>

</div> -->

<!-- <div class="about-front">

	<h1>What is My Seven Chakras?</h1>
<figure class="wp-block-image size-large"><img src="http://localhost:8888/my7chakras/wp-content/uploads/2020/03/logo_MySevenChakras2.png"></figure>
	<p>My Seven Chakras is a top ranked show where we help you master your energy to experience effortless healing, awakening and abundance.
Over the last 5 years and after garnering 3.6+ million downloads, AJ has interviewed some of the most experienced, gifted and kind-hearted healers, mystics, yogis, shamans, entrepreneurs, authors and leaders to provide life changing wisdom and insights for our listeners across the globe.</p>

</div> -->

<!-- <div class="learn-more">
	<h1>The Action Tribe Energy 
		Circle Is Now Open!</h1>

<p>Receive Life-Changing Energy Mentorship With Experienced Shamans, Healers, Yogis and Teachers</p>

<a href="">Learn More</a>

</div> -->

<!-- <div class="meet-host">
	<h1>Meet the Host</h1>
	<figure class="wp-block-image size-large"><img src="http://localhost:8888/my7chakras/wp-content/uploads/2020/03/aditya2.png"></figure>
	<div>
		<p>Hi, I’m Aditya Jaykumar Iyer (AJ), and I’m the host and founder of My Seven Chakras. I live in beautiful Vancouver, British Columbia (Canada). 
			I’m a trained energy healer and Kriya yogi.. And I am fascinated by the ancient life system of the Chakras and how they can help us heal, align and manifest our greatest selves!
		</p>

		<p class='link-about'>
			<a href="">See more  <span>></span></a>
		</p>
	</div>
	
</div> -->


<!-- <div class="testimonials">
	<h1>Testimonials</h1>
	<div class='comments-container'>
		<div>
			<p>Found this podcast whilst looking to learn more about our chakras,really blown away with the amount of different content included in these episodes!tons of really interesting subjects and… </p>
			<p class='author'>- Rob, Canada</p>
		</div>

		<div>
			<p>He seems to really understand how to reach people. I recently experienced a loss, and this podcast has helped me through so much, but it has also taught me how to help others who are suffering spiritually.</p>
			<p class='author'>- D. Miller, USA</p>
		</div>

		<div>
			<p>For those of you who enjoy learning about the world, are seeking personal and spiritual growth, and are looking for a like-minded community, do not miss this show!! AJ is a fantastic host, with a mellow…</p>
			<p class='author'>- Lilliana, Portugal</p>
		</div>
	</div>

</div> -->