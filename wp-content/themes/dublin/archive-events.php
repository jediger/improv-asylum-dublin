<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="event-list">

			<h1><?php _e( 'Now Playing', 'html5blank' ); ?></h1>
			<?php get_template_part('loop', 'events'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
