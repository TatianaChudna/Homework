<?php
/**
 * Template name: Home_section_3
*/
?>
<?php $image = get_field('image'); ?>
<?php $size = 'large'; ?>

<section class="home-section-3">
    <div class="container">
      <h1>
          <?php the_sub_field('title'); ?>
      </h1>
      <p>
          <?php the_sub_field('description'); ?>
      </p>
        <?php

        if ($image): { ?>
          <div>
              <?php echo wp_get_attachment_image($image, $size); ?>
          </div>
            <?php
        }
        endif;
        ?>
    </div>
</section>
