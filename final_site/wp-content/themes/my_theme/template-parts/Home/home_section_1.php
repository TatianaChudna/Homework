<?php
/**
 * Template name: Home_section_1
 * Template Post Type: page, post
 */
?>
<?php $link = get_sub_field('link'); ?>
<?php $bg_image = get_sub_field('image'); ?>

<section class="home-section-1">
  <div class="container">

      <?php
      $size = 'full';
      if (!empty($bg_image)): { ?>
        <div class="bg_image">
            <?php echo wp_get_attachment_image($bg_image, $size); ?>
        </div>
          <?php
      }
      endif;
      ?>

    <div>
        <?php if (!empty(get_sub_field('title'))): ?>
          <h1 class="text">
              <?php the_field('title'); ?>
          </h1>
        <?php endif; ?>
    </div>
    <p>
        <?php the_field('description'); ?>
    </p>
    <a href="<?php echo $link['url'] ?>" target="<?php echo $link['target'] ?>"><?php echo $link['title'] ?></a>
  </div>
</section>