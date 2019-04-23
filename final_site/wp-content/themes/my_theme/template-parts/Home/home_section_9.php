<?php
/**
 * Template name: Home_section_9
 */
?>

<?php $image = get_sub_field('image'); ?>

<section class="home-section-9">
  <div class="container">
    <div class="d-flex">
        <?php

        if ($image): { ?>
          <div class="image-wrapper">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"
                 title="<?php echo $image['title'] ?> "/>
          </div>
            <?php
        }
        endif;
        ?>
      <div class="section9-content">
        <h1>
            <?php the_sub_field('title'); ?>
        </h1>
        <p>
            <?php the_sub_field('description'); ?>
        </p>
      </div>
    </div>

  </div>
</section>
