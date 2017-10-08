<form method="get" class="searchform" action="<?php bloginfo('url'); ?>/">
	<div style="margin-top: 10px;">
		<input type="text" value="<?php the_search_query(); ?>" name="s" class="s" />
		<input type="submit" class="searchsubmit" value="Cerca" />
	</div>
</form>
