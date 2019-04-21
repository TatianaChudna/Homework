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

            <ul class="gallery-images">

                <?php while (have_rows('gallery_images')): the_row();

                $image = get_sub_field('image');

                ?>

                <li class="slide">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"
                         title="<?php echo $image['title'] ?> "/>
                </li>
            </ul>
            <div>


        <div>
            <p>
                <?php the_sub_field('description'); ?>
            </p>
        </div>

    </div>
</section>
