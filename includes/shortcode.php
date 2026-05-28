<?php

function bm_books_shortcode() {

    $paged = get_query_var('paged')
        ? get_query_var('paged')
        : 1;

    $args = array(
        'post_type' => 'books',
        'posts_per_page' => 5,
        'paged' => $paged
    );

    $query = new WP_Query($args);

    ob_start();

    if ($query->have_posts()) {

        while ($query->have_posts()) {

            $query->the_post();

            ?>

            <div class="book-item">

                <h2>

                    <a href="<?php the_permalink(); ?>">

                        <?php the_title(); ?>

                    </a>

                </h2>

                <p>

                    <strong>Author:</strong>

                    <?php
                    echo get_post_meta(
                        get_the_ID(),
                        '_bm_author',
                        true
                    );
                    ?>

                </p>

                <p>

                    <strong>Genre:</strong>

                    <?php
                    echo get_post_meta(
                        get_the_ID(),
                        '_bm_genre',
                        true
                    );
                    ?>

                </p>

            </div>

            <?php
        }

        echo paginate_links(array(
            'total' => $query->max_num_pages
        ));
    }

    wp_reset_postdata();

    return ob_get_clean();
}

add_shortcode(
    'books_list',
    'bm_books_shortcode'
);