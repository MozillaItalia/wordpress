<?php
/*
Template Name: Riconoscimenti
*/
?><?php get_header();?>
<div id="main">
<?php get_sidebar();?>
      <div id="content">
			 <div id="introduzione">
				<div id="intro_statica">
				  <h1>Comunità Mozilla Italia</h1>
				  <p>Siamo un gruppo di volontari che si dedica alla traduzione italiana, al supporto e alla promozione dei prodotti della <a href="https://www.mozilla.org/">Mozilla Foundation</a> e derivati.</p>
				  <p>In questo sito è raccolto il nostro lavoro: software, traduzioni, articoli e guide.</p>
				  <p>Vi raccomandiamo di consultare i <a href="https://forum.mozillaitalia.org/">nostri forum</a>, per chiedere informazioni o segnalare problemi su tutto ciò che pubblichiamo e, ovviamente, anche per offrire aiuto.</p>
			    </div>
				<div class="banner_collabora" id="banner_collabora_crediti">
					<h2>Collabora con noi</h2>
  			   	  	<div id="foxkeh_riconoscimenti"></div>
					<p>Entra a far parte della nostra comunità in modo attivo!</p>
					<p>Scopri <a href="<?php echo $indirizzo_base_url; ?>come-iniziare/">in che modo puoi collaborare</a>
	           e aiutaci a portare avanti le nostre attività di <strong>traduzione e supporto</strong>.</p>
				</div>
			</div>
     <?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
			    <h1><?php the_title(); ?></h1>
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
