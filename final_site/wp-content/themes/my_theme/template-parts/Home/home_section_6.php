<?php
/**
 * Template name: Home_section_6
 */
?>

<?php $image1 = get_sub_field('image1'); ?>
<?php $image2 = get_sub_field('image2'); ?>
<?php $image3 = get_sub_field('image3'); ?>
<?php $image4 = get_sub_field('image4'); ?>
<?php $link = get_sub_field('link'); ?>

<section class="home-section-6">
  <div class="container">

      <div class="content-block">
        <h1>
            <?php the_sub_field('title'); ?>
        </h1>
        <p>
            <?php the_sub_field('description'); ?>
        </p>
      </div>

      <div class="d-flex">
      <div class="left-button-field">

           <button><?php the_sub_field('title1'); ?></button>

            <button><?php the_sub_field('title2'); ?></button>

      </div>

      <div class="content-field">
        <div id="questionnare">
          <div class="cart-img">
              <?php

              if ($image1): { ?>
                  <img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt'] ?>"
                       title="<?php echo $image1['title'] ?> "/>
                  <?php
              }
              endif; ?>
          </div>
          <div class="cart-content">
              <?php the_sub_field('description1'); ?>
          </div>
        </div>
        <div id="dashboard">
            <?php

            if ($image2): { ?>

                <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt'] ?>"
                     title="<?php echo $image2['title'] ?> "/>

                <?php
            }
            endif;
            ?>
        </div>
        <div class="cart-content">
            <?php the_sub_field('description2'); ?>
        </div>
        <div id="reporting">
            <?php

            if ($image3): { ?>

                <img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt'] ?>"
                     title="<?php echo $image3['title'] ?> "/>

                <?php
            }
            endif;
            ?>
        </div>
        <div class="cart-content">
            <?php the_sub_field('description3'); ?>
        </div>

        <div id="future">
            <?php

            if ($image4): { ?>

                <img src="<?php echo $image4['url']; ?>" alt="<?php echo $image4['alt'] ?>"
                     title="<?php echo $image4['title'] ?> "/>
                <?php
            }
            endif;
            ?>
        </div>
        <div class="cart-content">
            <?php the_sub_field('description4'); ?>
        </div>
      </div>

      <div class="right-button-field">

            <button><?php the_sub_field('title3'); ?></button>

            <button><?php the_sub_field('title4'); ?></button>

      </div>
    </div>
    <div class="link-button">
      <a class="button" href="<?php echo $link['url'] ?>"> <?php echo $link['title'] ?></a>
    </div>
  </div>
</section>
