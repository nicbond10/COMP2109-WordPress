<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<div class="container">

			<?php
				if(have_posts()) : while(have_posts()) : the_post();
			?>
			<h1><?php the_title(); ?></h1>
        	<?php the_content();?>

    		<?php endwhile; endif;?>
			
	</div><!-- container -->

<?php
get_footer();