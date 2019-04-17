<?php
/* Template name: Home_section_3
*/
?>
<?php $image = get_field('image'); ?>
<?php $size = 'large'; ?> // (thumbnail, medium, large, full or custom size)

<section class="home-section-3">
    <div class="container">
        <div>
            <?php if (!empty(get_sub_field('title'))): ?>
                <h1 class="text">
                    <?php the_field('title'); ?>
                </h1>
            <?php endif; ?>
        </div>
        <p>
            <?php the_field('description'); ?>
        </p>
        <?php

        if( $image ): { ?>
            <div>
            <?php  echo wp_get_attachment_image( $image, $size );?>
            </div>
        <?php
        }
        endif;
        ?>
    </div>
</section>
