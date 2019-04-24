<?php
/**
 * Template name: section3
 */
?>

<section class="section3">
  <div class="container">

    <div>
      <h1>
          <?php the_sub_field('title'); ?>
      </h1>
    </div>

    <div>
        <?php if (have_rows('content')): ?>

      <ul class="calculator">

          <?php while (have_rows('content')): the_row();

              $image = get_sub_field('image');
              $title1 = get_sub_field('title1');
              $title2 = get_sub_field('title2');
              $description = get_sub_field('description');

              ?>

            <li class="">
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"
                   title="<?php echo $image['title'] ?> "/>
              <h2><?php echo $description; ?></h2>
            </li>
          <?php endwhile; ?>
          <?php endif; ?>
      </ul>
      <div>

      </div>
</section>
