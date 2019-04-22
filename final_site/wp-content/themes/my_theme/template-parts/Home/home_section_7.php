<?php
/**
 * Template name: Home_section_7
 */
?>

<?php $link1 = get_sub_field('link1'); ?>
<?php $link2 = get_sub_field('link2'); ?>
<?php $image = get_sub_field('image'); ?>

<section class="home-section-7">
  <div class="container">
    <div class="section7-content">

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
        <h1>
            <?php the_sub_field('title'); ?>
        </h1>
        <p>
            <?php the_sub_field('description'); ?>
        </p>
      </div>
      <ul>
        <li><a class="button" href="<?php echo $link1['url'] ?>"> <?php echo $link1['title'] ?></a></li>
        <li><a class="button" href="<?php echo $link2['url'] ?>"> <?php echo $link2['title'] ?></a></li>
      </ul>
    </div>
  </div>
</section>
