<?php
use App\Template;
?>

<?php get_header(); ?>

    <!-- Main Content -->
    <main>

        <!-- Entry -->
        <?php while (have_posts()) : the_post(); ?>
            <?php include(Template::locate('_template-parts/single/_entry.php')); ?>
        <?php endwhile; ?>

    </main>

<?php get_footer(); ?>
