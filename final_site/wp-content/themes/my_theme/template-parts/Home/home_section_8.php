<?php
/**
 * Template name: Home_section_8
*/
?>
<?php $image = get_sub_field('image'); ?>

<section class="home-section-8">
    <div class="container">

        <h1>
            <?php the_sub_field('title'); ?>
        </h1>
        <p>
            <?php the_sub_field('description'); ?>
        </p>

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

    </div>
</section>