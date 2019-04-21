<?php
/**
 * Template name: Home_section_2
 */
?>
<section class="home-section-2">
  <div class="container">
      <?php $link = get_sub_field('link'); ?>

    <div class="text-wrapper">
      <p>
          <?php the_sub_field('description'); ?>
      </p>
    </div>

    <div>
      <a href="<?php echo $link['url'] ?>" target="<?php echo $link['target'] ?>"><?php echo $link['title'] ?></a>
    </div>

  </div>
</section>
