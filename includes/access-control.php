<?php

function bm_restrict_books() {

    if (
        (is_singular('books') || is_post_type_archive('books'))
        && !is_user_logged_in()
    ) {

        wp_die(
            'You must be logged in to view this content. Please log in or register.'
        );
    }
}

add_action('template_redirect', 'bm_restrict_books');