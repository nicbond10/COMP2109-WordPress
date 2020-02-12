<?php
/**
 * Template Name: Homepage Template
 * Description: A template for the homepage.
 */

get_header();
?>

	<div class="container main-container">

        <div class="row">

            <div class="col p-5">
                <?php
                    // Start the loop to get the page's content
                    while(have_posts()) : the_post();
                ?>
                <div class="main-content">
                    <?php the_content(); ?> <!-- Main content -->
                </div>
                <?php
                endwhile; // end the loop
                    wp_reset_query(); // resetting the page query
                ?>
            </div>

            <div class="col p-5">
                <?php
                    // Start the loop to get the page's content
                    while(have_posts()) : the_post();
                ?>
                <div class="main-content">
                    <?php the_content(); ?> <!-- Main content -->
                </div>
                <?php
                endwhile; // end the loop
                    wp_reset_query(); // resetting the page query
                ?>
            </div>

            <div class="col p-5">
                <?php
                    // Start the loop to get the page's content
                    while(have_posts()) : the_post();
                ?>
                <div class="main-content">
                    <?php the_content(); ?> <!-- Main content -->
                </div>
                <?php
                endwhile; // end the loop
                    wp_reset_query(); // resetting the page query
                ?>
            </div>

        </div><!-- end row -->

        <div class="row">

            <div class="col p-5">
                <?php
                    // Start the loop to get the page's content
                    while(have_posts()) : the_post();
                ?>
                <div class="main-content">
                    <?php the_content(); ?> <!-- Main content -->
                </div>
                <?php
                endwhile; // end the loop
                    wp_reset_query(); // resetting the page query
                ?>
            </div>

            <div class="col p-5">
                <?php
                    // Start the loop to get the page's content
                    while(have_posts()) : the_post();
                ?>
                <div class="main-content">
                    <?php the_content(); ?> <!-- Main content -->
                </div>
                <?php
                endwhile; // end the loop
                    wp_reset_query(); // resetting the page query
                ?>
            </div>

            <div class="col p-5">
                <?php
                    // Start the loop to get the page's content
                    while(have_posts()) : the_post();
                ?>
                <div class="main-content">
                    <?php the_content(); ?> <!-- Main content -->
                </div>
                <?php
                endwhile; // end the loop
                    wp_reset_query(); // resetting the page query
                ?>
            </div>

        </div><!-- end row -->

        <div class="row">

            <div class="col p-5">
                <?php
                    // Start the loop to get the page's content
                    while(have_posts()) : the_post();
                ?>
                <div class="main-content">
                    <?php the_content(); ?> <!-- Main content -->
                </div>
                <?php
                endwhile; // end the loop
                    wp_reset_query(); // resetting the page query
                ?>
            </div>

            <div class="col p-5">
                <?php
                    // Start the loop to get the page's content
                    while(have_posts()) : the_post();
                ?>
                <div class="main-content">
                    <?php the_content(); ?> <!-- Main content -->
                </div>
                <?php
                endwhile; // end the loop
                    wp_reset_query(); // resetting the page query
                ?>
            </div>

            <div class="col p-5">
                <?php
                    // Start the loop to get the page's content
                    while(have_posts()) : the_post();
                ?>
                <div class="main-content">
                    <?php the_content(); ?> <!-- Main content -->
                </div>
                <?php
                endwhile; // end the loop
                    wp_reset_query(); // resetting the page query
                ?>
            </div>

        </div><!-- end row -->

    </div><!-- end container -->

<?php
get_footer();
