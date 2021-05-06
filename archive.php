<?php
use App\Template;
?>

<?php get_header(); ?>

    <!-- Main Content -->
    <main>

        <?php if (have_posts()) : ?>

            <!-- The Loop -->
            <?php while (have_posts()) : the_post(); ?>
                <?php include(Template::locate('_template-parts/archive/_entry.php')); ?>
            <?php endwhile; ?>

        <?php else : ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>

    </main>

<?php get_footer(); ?>
