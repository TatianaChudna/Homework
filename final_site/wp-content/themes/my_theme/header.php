<?php
/**
 *The header for  my_theme
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>
<body>
<header class="header-section">
    <div class="header-logo">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/Logo.png' ?>" alt="logo">
    </div>
    <div class="header-menu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">FAQ</a></li>
        </ul>
    </div>
</header>
</body>