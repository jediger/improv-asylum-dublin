<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- article -->
		<article id="event-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post title -->
			<h1>
				<?php the_title(); ?>
			</h1>
			<!-- /post title -->
			<div class="event-image">
				<?php $image = get_field('event_image'); ?>
				<img src="<?php print $image['url']; ?>" alt="" />
			</div>
			<div class="text">
				<a href="<?php the_field('tickets_link'); ?>" class="button tickets">Buy Tickets</a>
				<?php the_field('times'); ?>
				<?php the_content(); // Dynamic Content ?>
				<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
	
			</div>
			<a href="/events" class="return">&lt; return to all shows</a>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
