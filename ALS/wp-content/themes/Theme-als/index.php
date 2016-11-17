<?php get_header(); ?> <!-- Appel au template de l’en-tête -->

<main>
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<div class="article">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
	<?php endif; ?>
</main>

<?php get_footer(); ?> <!-- Appel au template du pied de page -->