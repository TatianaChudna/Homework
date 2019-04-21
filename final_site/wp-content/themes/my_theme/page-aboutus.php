
<?php
/**
 *Template name: page-aboutus
 */
?>

<?php get_header(); ?>

    <div class="main-page-wrap">
        <?php if (have_rows('page-aboutus')): ?>

            <?php while (have_rows('page-aboutus')) : the_row(); ?>
                <?php get_template_part('template-parts/AboutUs/' . get_row_layout());?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>


<?php get_footer(); ?>