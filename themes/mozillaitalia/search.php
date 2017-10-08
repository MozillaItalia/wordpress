<?php get_header();?>
<div id="main">
<?php get_sidebar();?>
      <div id="content">
    <?php if (have_posts()) : ?>

		<h1>Risultati della ricerca</h1>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post">
				<h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Link permanente a <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                <div class="entry">
					<?php the_excerpt(); ?>
                </div>
				<div class="postmetadata"><?php the_tags('Etichette: ', ', ', '<br />'); ?> Archiviato in <?php the_category(', ') ?> il
					<?php echo strftime('%d %B %Y alle %H:%M',strtotime(get_the_time('m/d/Y H:i'))); ?> <!-- | by <?php the_author() ?> -->| <?php edit_post_link('Modifica', '', ''); ?> </div>
			</div>
			<div class="hr"><hr /></div>
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Notizie precedenti') ?></div>
			<div class="alignright"><?php previous_posts_link('Notizie successive &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2>Attenzione</h2>
		<p>Non è stato trovato alcun elemento corrispondente ai termini inseriti.</p>
		<p>Riprovare con chiavi di ricerca diverse?</p>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>
      </div>
</div>
<?php get_footer ();?>
