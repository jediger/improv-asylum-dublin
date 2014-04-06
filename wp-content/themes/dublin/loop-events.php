<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="event-image">
			<?php $image = get_field('event_image'); ?>
			<img src="<?php print $image['url']; ?>" alt="" />
		</div>
		<div class="text">
			<a href="<?php the_field('tickets_link'); ?>" class="button tickets">Buy Tickets</a>
			<!-- post title -->
			<h2>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<!-- /post title -->
			<?php the_field('times'); ?>
			
			<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
			
			<?php edit_post_link(); ?>
		</div>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
