<?php /* Template Name: Home Page Template */ get_header(); ?>
<div class="slideshow">
	<?php 
		$args = array( 'post_type' => 'slides', 'posts_per_page' => 10, 'orderby' => 'title', 'order' => 'ASC' );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
			print '<div class="slide"><a href="' . get_field('link') . '"><img src="' . get_field('image') . '" alt="" /></a></div>';
		endwhile;
	?>
</div>
	<main role="main">
		<!-- section -->
		<section class="home">


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="ads">
					<?php 
						$args = array( 'post_type' => 'featured_images', 'posts_per_page' => 10, 'orderby' => 'title', 'order' => 'ASC' );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
							print '<div class="ad"><a href="' . get_field('link') . '"><img src="' . get_field('image') . '" alt="" /></a></div>';
						endwhile;
					?>
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

		</section>
		<!-- /section -->
		<div class="seo">
			<?php the_content(); ?>
			<?php edit_post_link(); ?>
		</div>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
