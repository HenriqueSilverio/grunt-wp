<?php get_header(); ?>

<section>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<article>
			<header>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			</header>
			<div class="entry">
				<?php the_content(); ?>
			</div>
			<footer>
				<time date="<?php the_time('Y-m-j'); ?>" pubdate="pubdate">
					<?php the_time('l, j \d\e F \d\e Y'); // terça-Feira, 09 de julho de 2013 ?>
				</time>
			</footer>
		</article>

	<?php endwhile; ?>

	<nav class="nav-paginate">
		<div class="nav-previous">
			<?php next_posts_link(); ?>
		</div>
		<div class="nav-next">
			<?php previous_posts_link(); ?>
		</div>
	</nav>

	<?php else : ?>

		<article>
			<header>
				<h1>Not found</h1>
			</header>
		</article>

	<?php endif; ?>
</section>

<?php get_footer(); ?>