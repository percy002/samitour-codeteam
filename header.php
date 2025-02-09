<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title() ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head() ?>
</head>

<body>
    <div class="top-nav">
        <div class="top-nav__contact">
            <p>info@samitoursmachupicchu.com</p>
            <p>+51 990 999 999</p>
        </div>
    </div>
    <nav class="nav-menu">
        <a href="<?php echo home_url() ?>">
            <img class="nav-menu__logo" src="<?php echo get_template_directory_uri() ?>/assets/img/logo_blanco.png" alt="Logo">
        </a>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary-menu',
            'container' => 'div',
            'container_class' => 'menu'
        ));
        ?>
        <button class="nav-menu__button">PREGUNTE AHORA</button>
        <div class="languages">
            <a href="#">EN</a>
            <a href="#">ES</a>
        </div>
    </nav>
