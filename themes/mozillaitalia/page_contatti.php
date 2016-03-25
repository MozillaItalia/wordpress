<?php
/*
Template Name: Contatti
*/
?><?php get_header();?>
<div id="main">
<?php get_sidebar();?>
      <div id="content">
		 <div id="introduzione">
			<div id="intro_statica">				
			  <h1>Contatti associazione</h1>
			  <p>Attraverso questa pagina è possibile contattare l'associazione o uno dei suoi membri.</p>
			  <h2>Non scrivere se…</h2>
			  <p class="attenzione">Non utilizzare questo modulo per inviare richieste di aiuto relative ai prodotti Mozilla: 
			     tutte le domande di questo tipo verranno <strong>sistematicamente cestinate</strong>. Per ottenere supporto utilizzare l'apposito 
			     <a href="http://forum.mozillaitalia.org">forum</a>. </p>			
			</div>
			<div class="banner_collabora" id="banner_collabora_contatti">
			  <h2>Collabora con noi</h2>
		   	  <div id="foxkeh_contatti"></div>			
			  <p>Entra a far parte della nostra comunità in modo attivo!</p>
			  <p>Scopri <a href="<?php echo $indirizzo_base_url; ?>come-iniziare/">in che modo puoi collaborare</a> 
			     e aiutaci a portare avanti le nostre attività di <strong>traduzione e supporto</strong>.</p>
			</div>
		</div>
     <?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="entry">
					<?php the_content('Continua a leggere l\'articolo &raquo;'); ?>
				</div>
			</div>
			<?php endwhile; ?>

			<div class="navigation">
				<div class="alignleft"><?php next_posts_link('&laquo; Notizie precedenti') ?></div>
				<div class="alignright"><?php previous_posts_link('Notizie successive &raquo;') ?></div>
			</div>

		<?php else : ?>

		<h2 class="center">Pagina non trovata</h2>
		<p class="center">Spiacente, la pagina cercata non è disponibile.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>
      </div>
</div>
<?php get_footer ();?>