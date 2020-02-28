<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div> Subscribe to Newsletter</div>

					<ul>

					 <li><a href="">Home</a></li>
					 <li><a href="">Podcast</a></li>
					 <li><a href="">Action Tribe Energy Circle</a></li>
					 <li><a href="">Contact</a></li>
					
					</ul>

					<div>

					<?php
                    dynamic_sidebar( 'sidebar-social' );
                    ?> 

					</div>

					<div>
						<p>Copyright 2020</p>
						<p>Privacy Policy</p>
					</div>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
