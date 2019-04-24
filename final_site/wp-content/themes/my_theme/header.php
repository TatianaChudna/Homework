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
<header class="header-container">
    <div class="header-logo">
      <a href="/">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/Logo.png' ?>" alt="logo">
      </a>
    </div>
    <div class="header-menu">
        <?php wp_nav_menu(array(
            'menu' => 'Primary Menu',
            'theme_location' => 'primary'
        )); ?>

    </div>
</header>
