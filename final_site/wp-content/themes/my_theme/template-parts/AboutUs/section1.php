<?php
/**
 * Template name: section1
 */
?>

<section class="section1">
  <div class="container">
      <?php $image = get_sub_field('image'); ?>
      <?php $link = get_sub_field('link'); ?>

    <div>
      <h1>
          <?php the_sub_field('title'); ?>
      </h1>
    </div>
    <div>
      <p>
          <?php the_sub_field('subtitle'); ?>
      </p>
      <p>
          <?php the_sub_field('description'); ?>
      </p>
    </div>

    <div>
      <a href="<?php echo $link['url'] ?>" target="<?php echo $link['target'] ?>"><?php echo $link['title'] ?></a>
    </div>

      <?php

      if ($image): { ?>
        <div>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"
               title="<?php echo $image['title'] ?> "/>
        </div>
          <?php
      }
      endif;
      ?>
  </div>
</section>