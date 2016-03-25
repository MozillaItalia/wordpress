<?php get_header();?>
<div id="main">
<?php get_sidebar();?>

      <div id="content">
 		 <div id="introduzione">
			<div id="intro_statica">				
			  <h1>Associazione Italiana Supporto e Traduzione Mozilla</h1>
			  <p>Siamo un'associazione senza fini di lucro che si dedica alla traduzione italiana, al supporto e alla promozione dei prodotti della <a href="http://www.mozilla-europe.org/">Mozilla Foundation</a> e derivati.</p>
			  <p>In questo sito è raccolto il nostro lavoro: software, traduzioni, articoli e guide.</p>
			  <p>Vi raccomandiamo di consultare i <a href="http://forum.mozillaitalia.org/">nostri forum</a>, per chiedere informazioni o segnalare problemi su tutto ciò che pubblichiamo e, ovviamente, anche per offrire aiuto.</p>
		    </div>
			<div class="banner_collabora" id="banner_collabora_home">
            	<div id="foxkeh_home"></div>
				<h2>Collabora con noi</h2>			
				<p>Entra a far parte della nostra comunità in modo attivo!</p>
				<p>Scopri <a href="<?php echo $indirizzo_base_url; ?>come-iniziare/">in che modo puoi collaborare</a> 
           e aiutaci a portare avanti le nostre attività di <strong>traduzione e supporto</strong>.</p>
			</div>
		</div>	
      <?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Link permanente a <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<div class="entry">
					<?php the_content('(continua a leggere…)'); ?>
				</div>
				<div class="postmetadata">
					<?php the_tags('Etichette: ', ', ', '<br />'); ?> Archiviato in <?php the_category(', ') ?> il 
					<?php echo strftime('%d %B %Y alle %H:%M',strtotime(get_the_time('m/d/Y H:i'))); ?>
    	            | Scritto da <?php the_author(); ?>
					<?php edit_post_link('Modifica', ' | ', ''); ?>                      
                </div>
			</div>
			<div class="hr"><hr /></div>			

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Notizie precedenti') ?></div>
			<div class="alignright"><?php previous_posts_link('Notizie successive &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 style="clear: left; padding-top: 50px;">Attenzione</h2>
		<p class="center">L'indirizzo richiesto non corrisponde a nessuna pagina di questo sito.</p>
		<p>Si desidera fare una ricerca in archivio?</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>
      </div>
</div>
<?php get_footer ();?>
