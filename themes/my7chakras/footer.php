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
					<div class="footer-titles"> 
						
							<h2> Subscribe to My Seven Chakras</h2>
							<h3> Subscribe To Newsletter</h3>
							<h4>Win Free E-book of Aj’s life</h4>
						
							<?php echo do_shortcode('[contact-form-7 id="14" title="Contact form 1"]')?>
						
					</div>

					<div>
						<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'Menu 2' ) ); ?>

					</div>

					
						<?php
						dynamic_sidebar( 'sidebar-social' );
						?> 
				


					<div class="box-row copy-rights">
						<p>Copyright 2020</p>
						<p>Privacy Policy</p>
					</div>

				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
