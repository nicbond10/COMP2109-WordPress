<?php
/**
 * The header for our theme
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Link CSS -->
	<link rel="stylesheet" href="<?php echo esc_url( home_url( 'wp-content/themes/cmsclass/inc/css/custom-style.css' ) );?>" />
	<!-- Link JS -->
	<!-- Add fonts -->
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
		<header id="masthead">
			<article>
				<!-- logo container -->
			</article>
			<nav>
				<?php
					wp_nav_menu( array(
						'menu' => 'main', // Do not fall back to first non-empty menu.
						'theme_location' => '',
						'fallback_cb' => false // Do not fall back to wb_page_menu()
					));
				?>
			</nav>
		</header><!-- #masthead -->

	<div id="content" class="site-content">