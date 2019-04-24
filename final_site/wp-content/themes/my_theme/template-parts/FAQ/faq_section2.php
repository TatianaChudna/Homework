<?php
/**
 * Template name: faq_section2
 */
?>
<section class="faq-section2">
    <div class="accordion-container">

        <?php if (have_rows('accordion')): ?>

            <?php while (have_rows('accordion')): the_row();

                ?>

                        <h3 class="accordion">
                            <?php echo get_sub_field('title'); ?>
                        </h3>
                        <p>
                            <?php echo get_sub_field('description'); ?>
                        </p>

            <?php endwhile; ?>

            <?php endif; ?>

    </div>
</section>
