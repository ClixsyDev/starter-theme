<?php
use App\Template;
?>

<?php get_header(); ?>

    <!-- Main Content -->
    <main class="content _single col-9 col-d-8 col-tl-12">

        <!-- Entry -->
        <?php while (have_posts()) : the_post(); ?>
            <?php include(Template::locate('_template-parts/single/entry.php')); ?>
        <?php endwhile; ?>

    </main>

<?php get_footer(); ?>
