<?php
/**
 * Template name: Home_section_4
 */
?>

<section class="home-section-4">
  <div class="container">

    <h1>
        <?php the_sub_field('title'); ?>
    </h1>

    <div>
        <?php if( have_rows('gallery_images') ): ?>

          <ul class="gallery-images">

              <?php while( have_rows('gallery_images') ): the_row();

                  // переменные
                  $image = get_sub_field('image');
                  $subtitle = get_sub_field('subtitle');
                  $description = get_sub_field('description');

                  ?>

                <li class="slide">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                </li>
                  <?php echo $subtitle; ?>
                  <?php echo $description; ?>

              <?php endwhile; ?>

          </ul>

        <?php endif; ?>

    </div>

</section>
