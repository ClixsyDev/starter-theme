<?php get_header(); ?>

<!-- Main Content -->
<main>

    <?php if (have_posts()) : ?>

        <!-- The Loop -->
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h2><?php the_title(); ?></h2>
            </article>
        <?php endwhile; ?>

    <?php else : ?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>

</main>

<?php get_footer(); ?>
