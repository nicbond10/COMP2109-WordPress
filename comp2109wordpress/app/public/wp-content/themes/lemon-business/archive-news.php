<?php
/**
 * Template Name: News Template
 * Template Post Type: Post, Page
 * Description: A template for the lemon news page.
 */

get_header();
?>

<!-- NOTE: I could not figure out how to get the custom post to work exactly the way we did in class, 
so I did it using this archive page as the template -->

	<div id="primary" class="container">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>
			<!-- Had to code an h1 for the title of this page as it kept grabbing the title of the First custom post -->
			<h1>Lemon News</h1>

			<?php
			// Start the loop.
			while ( have_posts() ) :

				do_shortcode('[news_shortcode]');

			endwhile;
			// End the loop.
		endif;
		?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
