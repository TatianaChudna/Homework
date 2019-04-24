
<?php
/**
 *Template name: page-faq
 */
?>

<?php get_header(); ?>

    <div class="main-page-wrap">
        <?php if (have_rows('page-faq')): ?>

            <?php while (have_rows('page-faq')) : the_row(); ?>
                <?php get_template_part('template-parts/FAQ/' . get_row_layout());?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>


<?php get_footer(); ?>