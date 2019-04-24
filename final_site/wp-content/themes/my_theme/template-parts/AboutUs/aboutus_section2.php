<?php
/**
 * Template name: section2
 */
?>

<section class="section2">
    <div class="container">
        <?php $image = get_sub_field('image'); ?>
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
        </div>
        <div>
            <p>
                <?php the_sub_field('description'); ?>
            </p>
        </div>

    </div>
</section>