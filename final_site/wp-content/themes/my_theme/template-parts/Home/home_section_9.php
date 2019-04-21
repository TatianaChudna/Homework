<?php
/**
 * Template name: Home_section_9
 */
?>

<?php $image = get_sub_field('image'); ?>

<section class="home-section-9">
  <div class="container">
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
    <div>
      <h1>
          <?php the_sub_field('title'); ?>
      </h1>
      <p>
          <?php the_sub_field('description'); ?>
      </p>
    </div>
  </div>
</section>
