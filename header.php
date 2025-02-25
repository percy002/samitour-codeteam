<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title() ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head() ?>
</head>

<body>
    <div class="top-nav">
        <div class="top-nav__contact">
            <p><i class="fa-solid fa-envelope"></i> info@samitoursmachupicchu.com</p>
            <p>|</p>
            <p><i class="fa-solid fa-mobile-screen"></i> +51 990 999 999</p>
            <p>|</p>
            <p>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-tiktok"></i>
            </p>
        </div>
    </div>
    <nav>
        <div class="nav-menu">
            <a href="<?php echo home_url() ?>">
                <img class="nav-menu__logo" src="<?php echo get_template_directory_uri() ?>/assets/img/logo_blanco.png"
                    alt="Logo">
            </a>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'container' => 'div',
                'container_class' => 'menu',
                'menu_class' => 'menu-items'
            ));
            ?>
            <button class="nav-menu__button">PREGUNTE AHORA</button>

            <ul class="languages">
                <li>
                    <?= pll_current_language('flag'); // Mostrar la bandera del idioma actual ?>
                </li>
            </ul>
        </div>

        <?php
        $submenu_items = getSubMenu();
        $menu = getMenu();
        ?>
        <div class="select-submenu">
            <?php foreach ($submenu_items as $submenu_item): ?>
                <div class="submenu section-container hidden" id="<?= $submenu_item['name'] ?>">
                    <div class="submenu__links ">
                        <h5 class="color-secondary"><?= esc_html($submenu_item['name']); ?></h5>
                        <ul>
                            <?php if (is_array($submenu_item['posts']) && !empty($submenu_item['posts'])): ?>
                                <?php foreach ($submenu_item['posts'] as $post): ?>
                                    <li><a href="<?= esc_url($post['permalink']) ?>"><?= esc_html($post['title']) ?></a></li>
                                    <div class="line-separator-horizontal"></div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <li><a href="<?= get_term_link($submenu_item['term_id']) ?>" class="color-secondary">ver
                                    todos</a>
                            </li>
                            <div class="line-separator-horizontal"></div>
                        </ul>
                    </div>
                    <div class="line-separator-vertical"></div>
                    <div class="submenu__description">
                        <h5><?= esc_html($submenu_item['name']); ?></h5>
                        <p><?= esc_html($submenu_item['description']); ?></p>
                    </div>
                    <div class="line-separator-vertical"></div>
                    <div class="submenu__image">
                        <?php if ($submenu_item['portada']): ?>
                            <img src="<?= esc_url($submenu_item['portada']) ?>" alt="">
                        <?php endif ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <?php get_template_part('template-parts/menu-mobile', null, ['menu' => $menu]) ?>

    </nav>