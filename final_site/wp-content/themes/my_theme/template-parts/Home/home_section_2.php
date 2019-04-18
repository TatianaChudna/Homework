<?php
/**
 * Template name: Home_section_2
*/
?>
<?php $link = get_sub_field('link'); ?>

<section class="home-section-2">
    <div class="container">

        <p>
            <?php the_sub_field('description'); ?>
        </p>

        <a href="<?php echo $link['url'] ?>" target="<?php echo $link['target'] ?>"><?php echo $link['title'] ?></a>

    </div>
</section>
