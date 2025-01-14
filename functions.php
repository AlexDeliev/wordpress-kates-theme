<?php
/**
 * UnderStrap functions and definitions
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = 'inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/block-editor.php',                    // Load Block Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once get_theme_file_path( $understrap_inc_dir . $file );
}
// Add a shortcode to display the categories
function display_woocommerce_categories() {
    // Get product categories
    $args = array(
        'taxonomy' => 'product_cat',
        'orderby' => 'name',
        'order'   => 'ASC'
    );
    $product_categories = get_terms($args);

    if (!empty($product_categories) && !is_wp_error($product_categories)) {
        $categories = array();
        foreach ($product_categories as $category) {
            $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
            $image_url = wp_get_attachment_url($thumbnail_id);
            $categories[] = array(
                'name' => $category->name,
                'count' => $category->count,
                'image' => $image_url
            );
        }
        wp_localize_script('underscore-js', 'productCategories', $categories);
    }

    return '<div id="categories-container"></div>';
}
add_shortcode('woocommerce_categories', 'display_woocommerce_categories');

function enqueue_custom_styles() {
    wp_enqueue_style('custom-category-styles', get_template_directory_uri() . '/custom-category-styles.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

function enqueue_bootstrap() {
    wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), '4.0.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap');
