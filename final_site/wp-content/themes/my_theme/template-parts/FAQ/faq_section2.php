<?php
/**
 * Template name: faq_section2
 */
?>
<section class="faq-section2">

      <?php if (have_rows('accordion')): ?>
        <ul class="accordion-container">
            <?php while (have_rows('accordion')): the_row(); ?>

              <li class="content-entry">
                <h3 class="article-title">

                    <?php echo get_sub_field('title'); ?>
                  <i></i>
                </h3>
                <p class="accordion-content">
                    <?php echo get_sub_field('description'); ?>
                </p>
              </li>

            <?php endwhile; ?>
        </ul>
      <?php endif; ?>

</section>
