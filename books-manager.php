<?php
/**
 * Plugin Name: Books Manager
 * Description: WordPress Developer Assignment
 * Version: 1.0
 */

if (!defined('ABSPATH')) {
    exit;
}

require_once plugin_dir_path(__FILE__) . 'includes/cpt.php';
require_once plugin_dir_path(__FILE__) . 'includes/meta-fields.php';
require_once plugin_dir_path(__FILE__) . 'includes/access-control.php';
require_once plugin_dir_path(__FILE__) . 'includes/shortcode.php';

function bm_load_template($template) {

    if (is_singular('books')) {

        return plugin_dir_path(__FILE__) . 'templates/single-books.php';
    }

    return $template;
}

add_filter('template_include', 'bm_load_template');

function bm_enqueue_assets() {

    wp_enqueue_style(
        'bm-style',
        plugin_dir_url(__FILE__) . 'assets/css/style.css'
    );
}

add_action('wp_enqueue_scripts', 'bm_enqueue_assets');