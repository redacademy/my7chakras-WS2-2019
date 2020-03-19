<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" class="about">
	<header class="entry-header">
	<div class="bg-img"><h1>About <br> My Seven Chakras </h1></div>
	</header><!-- .entry-header -->

	<div class="entry-content">

	

		<!-- wp:paragraph -->
<h2>Whether you’re looking to balance your chakras, heal your emotions, discover your purpose, manifest abundance or just feel happy, you are in the right place.</h2>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>My goal with My Seven Chakras is to help you master your energies, so that you can experience spontaneous healing, attract more abundance, align with your divine purpose and awaken to your true self.  </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>I’ve interviewed over 538 incredible souls including healers, yogis, mystics, shamans, visionaries and conscious entrepreneurs. Notable personalities include Marianne Williamson (2020 US Presidential candidate), Dr. Ivan Misner (Founder of BNI International), Marc Allen (Founder of New World Library), Arielle Ford (Best Selling Author), Dr. Dawson Church (Scientist and award-winning author).<br>
Some exciting topics we’ve explored are chakras, energetic medicine &amp; healing, yogic philosophy &amp; lifestyle, spiritual awakening, conscious leadership, thriving relationships, nutrition and much more!</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"align":"center"} -->
<h3 class="has-text-align-center">Our Values</h3>
<!-- /wp:heading -->

<div class="value-wrap">
<!-- wp:image {"align":"center","id":17,"sizeSlug":"large"} -->
<div class="row-one">
<div class="eachvalue-wrap">
<div class="wp-block-image"><figure class="aligncenter size-large"><img src="http://localhost/my7chakras/wp-content/uploads/2020/02/Group-1082.png" alt="" class="wp-image-17"/><figcaption>Imagination </figcaption></figure></div>
<h6>Our imagination is more real than the physical reality around us. To transform our reality, all we need to do is impress upon our subconscious mind. </h6>
</div>

<!-- wp:image {"align":"center","id":33,"sizeSlug":"large"} -->
<div class="eachvalue-wrap">
<div class="wp-block-image"><figure class="aligncenter size-large"><img src="http://localhost/my7chakras/wp-content/uploads/2020/02/Group-1090-1.png" alt="" class="wp-image-33"/><figcaption>Purpose</figcaption></figure></div>
<h6>It is our firm belief that you are here to fulfill a specific purpose. You already know your life’s divine purpose, all you have to do is remember what it is. </h6>
</div>

<div class="eachvalue-wrap">
<div class="wp-block-image"><figure class="aligncenter size-large"><img src="http://localhost/my7chakras/wp-content/uploads/2020/02/Group-1150.png" alt="" class="wp-image-33"/><figcaption>Heart</figcaption></figure></div>
<h6>Love is the most powerful force in the Universe. Through kindness, unconditional love and gratitude, anything can be accomplished.</h6>
</div>

<div class="eachvalue-wrap">
<div class="wp-block-image"><figure class="aligncenter size-large"><img src="http://localhost/my7chakras/wp-content/uploads/2020/02/Group-1151.png" alt="" class="wp-image-33"/><figcaption>Oneness</figcaption></figure></div>
<h6>The purpose of meditation is to still the mind and melt away the ego that keeps us separated and disconnected. Once we wake up, we realize how connected we truly are to everything around us.</h6>
</div>

<div class="eachvalue-wrap">
<div class="wp-block-image"><figure class="aligncenter size-large"><img src="http://localhost/my7chakras/wp-content/uploads/2020/03/Group-1184.png" alt="" class="wp-image-21"/><figcaption>Action</figcaption></figure></div>
<h6>We believe that transformation begins with some form of imperfect action. That first imperfect step can often build enough momentum to help us cross the finish line. </h6>
</div>
</div>
</span>

<h3 class="has-text-align-center">Here’s how I can support you at the moment</h3>
<div class="support-wrap">

<div class="wp-block-image"><figure class="aligncenter size-large"><img class="img-support" src="http://localhost/my7chakras/wp-content/uploads/2020/02/Group-1152.png" alt="" class="wp-image-25"/></figure></div>
<div class="eachvalue-wrap">
<figcaption>Action Tribe Energy Circle</figcaption>
<h6>monthly subscription program where members receive transformational energy training from shamans, healers, yogis, mystics and intuitives</h6>
</div>


<div class="wp-block-image"><figure class="aligncenter size-large"><img class="img-support" src="http://localhost/my7chakras/wp-content/uploads/2020/02/Group-1154.png" alt="" class="wp-image-27"/></figure></div>
<div class="eachvalue-wrap">
<figcaption>Podcasts</figcaption>
<h6> listened to in over 150 countries and over 3.6 million downloads till date. Find your first or next episode here. </h6>
</div>


<div class="wp-block-image"><figure class="aligncenter size-large"><img class="img-support" src="http://localhost/my7chakras/wp-content/uploads/2020/02/Group-1184.png" alt="" class="wp-image-35"/></figure></div>
<div class="eachvalue-wrap">
<figcaption>Sponsorship &amp; Collaboration</figcaption>
<h6>monthly subscription program where members receive transformational energy training from shamans, healers, yogis, mystics and intuitives </h6>
</div>


<div class="wp-block-image"><figure class="aligncenter size-large"><img class="img-support" src="http://localhost/my7chakras/wp-content/uploads/2020/03/Group-1188.png" alt="" class="wp-image-29"/></figure></div>
<div class="eachvalue-wrap">
<figcaption>Events, workshops &amp; retreats</figcaption>
<h6> Coming soon! </h6>
</div>
</div>

<a href="#masthead">
					<button class="sticky-button">
						<img  src= "<?php echo get_template_directory_uri();?>/assets/logo/slide-button.svg" alt="logo">
					</button>
</a>					

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>