<?php
/**
 * Template name: section2
 */
?>

<section class="section2">
  <div class="container">
    <div class="d-flex">
        <?php $image = get_sub_field('image'); ?>
        <?php

        if ($image): { ?>
          <div class="image-wrapper">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"
                 title="<?php echo $image['title'] ?> "/>
          </div>
            <?php
        }
        endif;
        ?>

      <div class="text-block">
        <h1>
            <?php the_sub_field('title'); ?>
        </h1>
        <p>
            <?php the_sub_field('description'); ?>
        </p>
      </div>
    </div>
  </div>
</section>