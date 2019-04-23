<?php
/**
 * Template name: Home_section_1
 */
?>
<?php $link = get_sub_field('link'); ?>
<?php $bg_image = get_sub_field('image'); ?>
<?php $size = get_sub_field('full'); ?>

<section class="home-section-1" style="background: url('<?php echo get_sub_field('image'); ?>') no-repeat;">
    <div class="section1-content">
      <h1>
          <?php the_sub_field('title'); ?>
      </h1>
      <p>
          <?php the_sub_field('description'); ?>
      </p>
      <a class="button" href="<?php echo $link['url'] ?>" target="<?php echo $link['target'] ?>"><?php echo $link['title'] ?></a>
    </div>
</section>