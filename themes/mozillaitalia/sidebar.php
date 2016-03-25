<div id="sidebar">		
  <h3>Cerca nel sito</h3>
  <form method="get" class="searchform" action="<?php bloginfo('url'); ?>/">
	<div>
    	<input type="text" value="<?php the_search_query(); ?>" name="s" id="box_ricerca" />
		<input name="" id="pulsante_ricerca" type="submit" value="Cerca" />		
	</div>
  </form>	
  <?php 
     include(TEMPLATEPATH . '/menu_laterale.php');	
  ?>

  <h3>Categorie</h3>
  <ul>
    <?php wp_list_categories('title_li='); ?>
  </ul>
</div>