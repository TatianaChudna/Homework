<?php
/**
 * Template name: Home_section_3
*/
?>
<?php $image = get_sub_field('image'); ?>

<section class="home-section-3">
    <div class="container">
      <div class="d-flex">
        <div class="section3-content">
          <h1>
              <?php the_sub_field('title'); ?>
          </h1>
          <p>
              <?php the_sub_field('description'); ?>
          </p>
        </div>

          <?php

          if ($image): { ?>
            <div class="illustration">
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"
                   title="<?php echo $image['title'] ?> "/>
            </div>
              <?php
          }
          endif;
          ?>
      </div>

    </div>
</section>
