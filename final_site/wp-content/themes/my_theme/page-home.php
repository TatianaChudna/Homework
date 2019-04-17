<?php
/**
*Template name: page-home

*/
?>

<?php get_header(); ?>
    <div class="main-page-wrap">
        <?php if (have_rows('home-page')): ?>

        <?php while (have_rows('home-page')) : the_row(); ?>
        <?php get_template_part('template-parts/Home/' . get_row_layout());?>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>


<?php get_footer(); ?>