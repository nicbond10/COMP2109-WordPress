<?php
/**
 * Template Name: Homepage Template
 * Description: A template for the homepage.
 */

get_header();
?>

	<div class="container">
        <!-- Get the title of the page -->
        <h1><?php the_title(); ?></h1>

        <div class="row">
            <?php
                // Start the loop to get the page's content
                while(have_posts()) : the_post();
            ?>
            <div class="home-content">
                <?php the_content(); ?> <!-- Main content -->
            </div>
            <?php
            endwhile; // end the loop
                wp_reset_query(); // resetting the page query
            ?>
        </div><!-- end row -->

    </div><!-- end container -->

<?php
get_footer();
