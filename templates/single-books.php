<?php get_header(); ?>

<div class="book-wrapper">

    <h1><?php the_title(); ?></h1>

    <p>
        <strong>Author:</strong>
        <?php echo get_post_meta(get_the_ID(), '_bm_author', true); ?>
    </p>

    <p>
        <strong>Genre:</strong>
        <?php echo get_post_meta(get_the_ID(), '_bm_genre', true); ?>
    </p>

    <p>
        <strong>Published Date:</strong>
        <?php echo get_post_meta(get_the_ID(), '_bm_date', true); ?>
    </p>

    <div>
        <?php the_content(); ?>
    </div>

</div>

<?php get_footer(); ?>