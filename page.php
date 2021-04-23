<?php
use App\Template;
?>

<?php get_header(); ?>
            
    <main>

        <!-- Title -->
        <h1>
            <?php the_title(); ?>
        </h1>

        <!-- Content -->
        <div>
            <?php the_content(); ?>
        </div>

    </main>

<?php get_footer(); ?>
