<?php
/* Template Name: Front Page */
get_header(); ?>

<main class="site-main">
    <div class="container">

        <?php
        // Start the Loop for the homepage Page
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_content(); // content from WP editor
            endwhile;
        endif;
        ?>
        <!-- Example static custom sections -->
        <section id="about">
            <h2>About Us</h2>
            <p>Some info about your company...</p>
        </section>

        <section id="services">
            <h2>Services</h2>
            <p>Details about services...</p>
        </section>

        <section id="contact">
            <h2>Contact</h2>
            <p>Email: info@example.com</p>
        </section>
    </div>
</main>

<?php get_footer(); ?>
