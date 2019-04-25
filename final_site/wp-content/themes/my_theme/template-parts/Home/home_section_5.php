<?php
/** Template name: Home_section_5 */
?>
<?php $image1 = get_sub_field('image1'); ?>
<?php $image2 = get_sub_field('image2'); ?>
<?php $image3 = get_sub_field('image3'); ?>
<?php $image4 = get_sub_field('image4'); ?>
<?php $image5 = get_sub_field('image5'); ?>
<?php $image6 = get_sub_field('image6'); ?>
<?php $image7 = get_sub_field('image7'); ?>

<section class="home-section-5">
  <div class="container">

    <h1 class="section5-title">
        <?php the_sub_field('title'); ?>
    </h1>

    <div class="carousel">
      <div class="slide">
        <img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt'] ?>"
             title="<?php echo $image1['title'] ?> "/>

        <h2>
            <?php echo get_sub_field('subtitle1'); ?>
        </h2>

        <p>
            <?php echo get_sub_field('description1'); ?>
        </p>
      </div>

      <div class="slide">
        <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt'] ?>"
             title="<?php echo $image2['title'] ?> "/>

        <h2>
            <?php echo get_sub_field('subtitle2'); ?>
        </h2>

        <p>
            <?php echo get_sub_field('description2'); ?>
        </p>
      </div>

      <div class="slide">
        <img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt'] ?>"
             title="<?php echo $image3['title'] ?> "/>

        <h2>
            <?php echo get_sub_field('subtitle3'); ?>
        </h2>

        <p>
            <?php echo get_sub_field('description3'); ?>
        </p>
      </div>

      <div class="slide">
        <img src="<?php echo $image4['url']; ?>" alt="<?php echo $image4['alt'] ?>"
             title="<?php echo $image4['title'] ?> "/>

        <h2>
            <?php echo get_sub_field('subtitle4'); ?>
        </h2>

        <p>
            <?php echo get_sub_field('description4'); ?>
        </p>
      </div>

      <div class="slide">
        <img src="<?php echo $image5['url']; ?>" alt="<?php echo $image5['alt'] ?>"
             title="<?php echo $image5['title'] ?> "/>

        <h2>
            <?php echo get_sub_field('subtitle5'); ?>
        </h2>

        <p>
            <?php echo get_sub_field('description5'); ?>
        </p>
      </div>

      <div class="slide">
        <img src="<?php echo $image6['url']; ?>" alt="<?php echo $image6['alt'] ?>"
             title="<?php echo $image6['title'] ?> "/>

        <h2>
            <?php echo get_sub_field('subtitle6'); ?>
        </h2>

        <p>
            <?php echo get_sub_field('description6'); ?>
        </p>
      </div>

    </div>

    </div>
</section>