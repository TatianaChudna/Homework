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
        <?php if (have_rows('gallery_images')): ?>

          <ul class="gallery-images">

            <?php while (have_rows('gallery_images')): the_row();

                $image = get_sub_field('image');

                ?>

            <li class="slide">
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"
                   title="<?php echo $image['title'] ?> "/>
            </li>
            </ul>
            <h2>
                <?php echo get_sub_field('subtitle'); ?>
            </h2>
            <p>
                <?php echo get_sub_field('description'); ?>
            </p>

            <?php endwhile; ?>

        <?php endif; ?>
    </div>
</section>
