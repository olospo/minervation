<form action="/" method="get">
	<fieldset class="form-group">
		<input type="text" class="input input-lg" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search site" />
		<input type="image" class="input input-lg" id="search-icon" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search-icon.png" />
	</fieldset>
</form>
