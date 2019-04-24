<?php
/**
 * Template name: section1
 */
?>

<section class="section1">
  <div class="container">
      <?php $image = get_sub_field('image'); ?>
      <?php $link = get_sub_field('link'); ?>

      <h1>
          <?php the_sub_field('title'); ?>
      </h1>

      <div class="d-flex">
      <div class="content">
        <h2>
            <?php the_sub_field('subtitle'); ?>
        </h2>
        <p>
            <?php the_sub_field('description'); ?>
        </p>
      </div>

      <div class="block">
        <div class=link-button>
          <a class="button" href="<?php echo $link['url'] ?>" target="<?php echo $link['target'] ?>"><?php echo $link['title'] ?>
          </a>
        </div>

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
        <p class="description2">
            <?php the_sub_field('description2'); ?>
        </p>
      </div>
    </div>
  </div>
</section>