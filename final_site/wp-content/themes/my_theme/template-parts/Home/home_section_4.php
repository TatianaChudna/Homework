<?php
/**
 * Template name: Home_section_4
 */
?>

<section class="home-section-4">

    <h1 class="section4-title">
        <?php the_sub_field('title'); ?>
    </h1>

        <?php if (have_rows('gallery_images')): ?>

          <ul class="gallery-images">

            <?php while (have_rows('gallery_images')): the_row();

                $image = get_sub_field('image');

                ?>

            <li class="slide">
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"
                   title="<?php echo $image['title'] ?> "/>
              <div class="text-container">
                <h2 class="section4-subtitle">
                    <?php echo get_sub_field('subtitle'); ?>
                </h2>
                <p class="section4-content">
                    <?php echo get_sub_field('description'); ?>
                </p>
              </div>
            </li>

            <?php endwhile; ?>

        <?php endif; ?>
          </ul>

</section>
