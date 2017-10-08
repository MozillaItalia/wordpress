<?php get_header();?>
<div id="main">
<?php get_sidebar();?>
      <div id="content">
     <?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Link permanente a <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<div class="entry">
					<?php the_content('Continua a leggere l\'articolo &raquo;'); ?>
				</div>
				<div class="postmetadata">
					<?php the_tags('Etichette: ', ', ', '<br />'); ?> Archiviato in <?php the_category(', ') ?> il
					<?php echo strftime('%d %B %Y alle %H:%M',strtotime(get_the_time('m/d/Y H:i'))); ?> | Scritto da <?php the_author_posts_link(); ?>
    	            <?php edit_post_link('Modifica', ' | ', ''); ?>
        </div>
			</div>
			<?php endwhile; ?>

			<div class="navigation">
				<div class="alignleft"><?php next_posts_link('&laquo; Notizie precedenti') ?></div>
				<div class="alignright"><?php previous_posts_link('Notizie successive &raquo;') ?></div>
			</div>

		<?php else : ?>

		<h2 style="clear: left;">Errore</h2>
		<p class="center">Spiacente, l'articolo cercato non è presente.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>
      </div>
</div>
<?php get_footer ();?>
