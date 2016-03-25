<?php
/*
Template Name: Download
*/
?>

<?php get_header();?>
<div id="main">
<?php get_sidebar();?>
      <div id="content">
		 <div id="introduzione">
			<div id="intro_statica">
			  <h1>Download</h1>
			  <p>Attraverso questa pagina è possibile raggiungere tutto il materiale realizzato e curato da Mozilla Italia.</p>
			  <p>Per gli utenti di Firefox, Thunderbird e SeaMonkey vi sono i langpack per tradurre in
			     italiano l'interfaccia del programma. Sono disponibili anche i programmi di installazione per
			     Windows oltre che le build per altri sistemi operativi.</p>
			  <p>Vi invitiamo a segnalare qualunque errore troviate nei nostri lavori di traduzione sul
			     <a href="http://forum.mozillaitalia.org/viewforum.php?f=8">forum delle traduzioni</a>. Per problemi
			     di utilizzo delle applicazioni in generale potete utilizzare i nostri <a href="http://forum.mozillaitalia.org/">forum
			     di supporto</a>.</p>
			  <p><strong>Attenzione:</strong> tutto il software presente su questo sito, dove non altrimenti indicato, è da
			      intendersi distribuito secondo la <a href="https://www.mozilla.org/en-US/MPL/2.0/">Mozilla Public License
			      (MPL)</a>.</p>
			</div>
			<div class="banner_collabora" id="banner_collabora_download">
			  <h2>Collabora con noi</h2>
  		   	  <div id="foxkeh_download"></div>
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
