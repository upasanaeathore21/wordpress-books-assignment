<?php

function bm_register_books_cpt() {

    $args = array(
        'label' => 'Books',
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-book',
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'books'),
        'show_in_rest' => true,
    );

    register_post_type('books', $args);
}

add_action('init', 'bm_register_books_cpt');