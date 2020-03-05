<?php

// Load bootstrap stylesheet
// Load custom stylesheet
function load_stylesheets()
{

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', 
        array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/style.css', 
        array(), false, 'all');
    wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');


// Include jquery
function include_jquery()
{

    wp_deregister_script('jquery');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.1.3.min.js', '', 1,    true);

    add_action('wp_enqueue_scripts', 'jquery');

}
add_action('wp_enqueue_scripts', 'include_jquery');


// Load custom js
function load_js()
{

    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');

}
add_action('wp_enqueue_scripts', 'load_js');


// Add theme support for menus
add_theme_support('menus');

// Register the menus for top (nav) and footer
register_nav_menus(

    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
    )
);

// Include custom navwalker
require_once('bs4navwalker.php');

// Register WordPress nav menu
register_nav_menu('top', 'Top menu');

// Create post type 'news' for lemons
function news() {
    $args = array(
        'labels' => array(
            'name' => 'News',
            'singular_name' => 'News Item',
        ),
        'public' => true,
        'has_archive' => true,
        'public' => true,
		'show_ui' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'news'),
		'query_var' => true,
        'menu-icon' => '',
        'support' => array('title', 'editor', 'thumbnail'),
    );
    register_post_type('news', $args);
}
add_action('init', 'news');

// Create the shortcode layout for the lemon news items
function news_items() {
    the_post();
    echo "<article>";
	echo "<div class='news-title'><h3>";
		the_title();
	echo "</h3></div>";
	echo "<div class='news-content'>";
		the_post_thumbnail();
		the_content();
    echo "</div>";
    echo "</article>";
}

// Function for the actual shortcode use
function news_shortcode(){
    add_shortcode('news_shortcode', 'news_items');
}

add_action('init', 'news_shortcode');

// Create tags for the different types of lemons
function post_tags() {
    $args = array(
        'labels' => array(
            'name' => 'Lemon Types',
            'singular_name' => 'Lemon Type',
        ),
        'public' => true,
        'hierarchical' => false,
    );
    register_taxonomy('lemonTypes', array('news'), $args);
}

add_action('init', 'post_tags');