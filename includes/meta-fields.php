<?php

function bm_add_meta_boxes() {

    add_meta_box(
        'bm_book_details',
        'Book Details',
        'bm_meta_callback',
        'books'
    );
}

add_action('add_meta_boxes', 'bm_add_meta_boxes');

function bm_meta_callback($post) {

    $author = get_post_meta($post->ID, '_bm_author', true);
    $genre = get_post_meta($post->ID, '_bm_genre', true);
    $date = get_post_meta($post->ID, '_bm_date', true);

    ?>

    <p>
        <label>Author</label><br>
        <input type="text" name="bm_author" value="<?php echo esc_attr($author); ?>">
    </p>

    <p>
        <label>Genre</label><br>

        <select name="bm_genre">

            <option value="Fiction">Fiction</option>
            <option value="Non-Fiction">Non-Fiction</option>
            <option value="Sci-Fi">Sci-Fi</option>

        </select>
    </p>

    <p>
        <label>Published Date</label><br>
        <input type="date" name="bm_date" value="<?php echo esc_attr($date); ?>">
    </p>

<?php
}

function bm_save_meta($post_id) {

    if (isset($_POST['bm_author'])) {

        update_post_meta(
            $post_id,
            '_bm_author',
            sanitize_text_field($_POST['bm_author'])
        );
    }

    if (isset($_POST['bm_genre'])) {

        update_post_meta(
            $post_id,
            '_bm_genre',
            sanitize_text_field($_POST['bm_genre'])
        );
    }

    if (isset($_POST['bm_date'])) {

        update_post_meta(
            $post_id,
            '_bm_date',
            sanitize_text_field($_POST['bm_date'])
        );
    }
}

add_action('save_post', 'bm_save_meta');