<?php /* Template Name: Home Page Template */ get_header(); ?>
<div class="slideshow">
	<div class="slide"><img src="/wp-content/uploads/2014/04/slide1.jpg" alt="" /></div>
	<div class="slide"><img src="/wp-content/uploads/2014/04/slide2.jpg" alt="" /></div>
	<div class="slide"><img src="/wp-content/uploads/2014/04/slide3.jpg" alt="" /></div>
</div>
	<main role="main">
		<!-- section -->
		<section class="home">


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="ads">
					<div class="ad"><a href="#"><img src="/wp-content/uploads/2014/04/ad1.jpg" alt="" /></a></div>
					<div class="ad"><a href="#"><img src="/wp-content/uploads/2014/04/ad2.jpg" alt="" /></a></div>
					<div class="ad"><a href="#"><img src="/wp-content/uploads/2014/04/ad3.jpg" alt="" /></a></div>
					<div class="ad"><a href="#"><img src="/wp-content/uploads/2014/04/ad3.jpg" alt="" /></a></div>
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
		<?php the_content(); ?>
		<?php edit_post_link(); ?>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
