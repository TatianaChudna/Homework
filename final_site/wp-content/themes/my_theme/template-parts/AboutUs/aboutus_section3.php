<?php
/**
 * Template name: section3
 */
?>

<section class="section3">
  <div class="container">

      <h1>
          <?php the_sub_field('title'); ?>
      </h1>

    <div class="">
        <?php if (have_rows('content')): ?>

      <ul class="calculator d-flex">

          <?php while (have_rows('content')): the_row();

              $title1 = get_sub_field('title1');
              $value = get_sub_field('value');
              $title2 = get_sub_field('title2');
              $description = get_sub_field('description');

              ?>

            <li class="content-block">
              <h2><?php echo $title1; ?></h2>
              <p class="value"><?php echo $value; ?></p>
              <h2 class="title2"><?php echo $title2; ?></h2>
              <p><?php echo $description; ?></p>
            </li>
          <?php endwhile; ?>
          <?php endif; ?>
      </ul>
      </div>
    </div>
</section>
