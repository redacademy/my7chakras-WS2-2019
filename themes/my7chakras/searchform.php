<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<label>
			<input type="search" class="search-field" placeholder="Search" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />


			<button class="search-submit">
			<span class="icon-search" aria-hidden="true">
				<img src= "<?php echo get_template_directory_uri();?>/assets/logo/searc-purple.svg" alt="logo">				
			</span>
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		</button>
		</label>
	</fieldset>
</form>
