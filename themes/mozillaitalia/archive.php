<?php get_header();?>
<div id="main">
<?php get_sidebar();?>
      <div id="content">
     <?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* Archivio per categoria */ if (is_category()) { ?>
		<h1>Archivio per la categoria “<?php single_cat_title(); ?>”</h1>
 	  <?php /* Archivio per etichetta */ } elseif( is_tag() ) { ?>
		<h1>Notizie con etichetta “<?php single_tag_title(); ?>”</h1>
 	  <?php /* Archivio per un giorno */ } elseif (is_day()) { ?>
		<h1>Archivio per data</h1>
 	  <?php /* Archivio per un mese */ } elseif (is_month()) { ?>
		<h1>Archivio per data</h1>
 	  <?php /* Archivio per un anno */ } elseif (is_year()) { ?>
		<h1>Archivio per data</h1>
	  <?php /* Archivio per autore */ } elseif (is_author()) { ?>
		<h1>Archivio per autore</h1>
 	  <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h1>Archivio</h1>
 	  <?php } ?>


		<?php while (have_posts()) : the_post(); ?>
		<div class="post">
				<h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Link permanente a <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<div class="entry">
				  <?php the_content(); ?>
				</div>
				<div class="postmetadata"><?php the_tags('Etichette: ', ', ', '<br />'); ?> Archiviato in <?php the_category(', ') ?> il
					<?php echo strftime('%d %B %Y alle %H:%M',strtotime(get_the_time('m/d/Y H:i'))); ?> | <?php edit_post_link('Modifica', '', ''); ?> </div>
		</div>
		<div class="hr"><hr /></div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Notizie precedenti') ?></div>
			<div class="alignright"><?php previous_posts_link('Notizie successive &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Nessun elemento trovato</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>
      </div>
</div>
<?php get_footer ();?>
