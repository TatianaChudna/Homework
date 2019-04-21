<?php
/**
 * Template name: Home_section_6
 */
?>

<?php $link = get_sub_field('link'); ?>
<?php $image = get_sub_field('image'); ?>

<section class="home-section-6">
  <div class="container">

    <h1>
        <?php the_sub_field('title'); ?>
    </h1>
    <p>
        <?php the_sub_field('description'); ?>
    </p>
    <a href="<?php echo $link['url'] ?>"> <?php echo $link['title'] ?></a>

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
      <h2>
          <?php the_sub_field('subtitle'); ?>
      </h2>
      <p>
          <?php the_sub_field('description'); ?>
      </p>
    </div>
  </div>
</section>
