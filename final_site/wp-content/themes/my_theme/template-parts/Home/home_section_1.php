<?php
/**
 * Template name: Home_section_1
 */
?>
<?php $link = get_sub_field('link'); ?>
<?php $bg_image = get_sub_field('image'); ?>
<?php $size = get_sub_field('full'); ?>

<section >
  <div class="container">

      <?php
      if (!empty($bg_image)): { ?>
        <div class="bg_image">
            <?php echo wp_get_attachment_image($bg_image, $size); ?>
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
      <a href="<?php echo $link['url'] ?>" target="<?php echo $link['target'] ?>"><?php echo $link['title'] ?></a>
    </div>

  </div>
</section>

