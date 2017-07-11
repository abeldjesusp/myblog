<?php get_header(); ?>

<section id="main">
	<section id="article_list">
		<?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<article>
			<div class="thumb"><a href="<?php the_permalink();?>">
				<?php if( has_post_thumbnail() ){the_post_thumbnail('list_articles_thumbs');}?>
			</a></div>
			<hgroup><h2><a href=""><?php the_title();?></a></h2></hgroup>
			<div class="date"> <?php echo get_the_date(); ?> en <span><?php the_category();?></span></div>
			<div class="extract"><?php the_content();?></div>
		</article>

		<!-- Codigo que se ejecutara cuando se encuentren articulos -->
		<?php endwhile; else: ?>

		<!-- Aqui el codigo que se ejecutara si no encuentra articulos. -->
		<h1>No se encontraron Articulos</h1>
		<?php endif; ?>
	</section>

<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>