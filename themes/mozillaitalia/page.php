<?php get_header();?>
<div id="main">
<?php get_sidebar();?>
      <div id="content">
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
