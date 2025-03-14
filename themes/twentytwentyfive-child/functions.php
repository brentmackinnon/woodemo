<?php
/**
 * Twenty Twenty-Five Child Theme functions and definitions
 */

/**
 * Enqueue parent and child theme styles
 */
function twentytwentyfive_child_styles() {
    // Enqueue parent theme styles
    wp_enqueue_style(
        'twentytwentyfive-style',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme()->get('Version')
    );

    // Enqueue child theme styles
    wp_enqueue_style(
        'twentytwentyfive-child-style',
        get_stylesheet_uri(),
        array('twentytwentyfive-style'),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'twentytwentyfive_child_styles');
add_action('enqueue_block_editor_assets', 'twentytwentyfive_child_styles'); 