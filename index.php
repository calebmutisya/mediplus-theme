<?php get_header(); ?>

<main class="site-main">
    <div class="container">
        <?php
        // WordPress Loop – shows content from "Pages" or "Posts"
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>
