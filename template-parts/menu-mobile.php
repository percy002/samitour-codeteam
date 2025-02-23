<?php
$menu = isset($args['menu']) ? $args['menu'] : array();
?>

<div class="menu-mobile">
    <div class="nav-menu-mobile">
        <a href="<?php echo home_url() ?>">
            <img class="nav-menu-mobile__logo"
                src="<?php echo get_template_directory_uri() ?>/assets/img/logo_blanco.png" alt="Logo">
        </a>
        <button class="nav-menu__button">PREGUNTE AHORA</button>
        <ul class="languages">
            <li>
                <?= pll_current_language('flag'); // Mostrar la bandera del idioma actual ?>
            </li>
        </ul>
        <button class="nav-menu-mobile__button" id="mobileMenuButton">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
    <div class="mobile-submenu section-container hidden" id="mobileSubmenu">
        <ul>
            <?php foreach ($menu as $menu_item): ?>
                <li>
                    <a href="<?= esc_url($menu_item['url']); ?>"><?= esc_html($menu_item['title']); ?> <i
                            class="fa-solid fa-chevron-down"></i></a>
                    <?php if ($menu_item['type'] == 'taxonomy' && !empty($menu_item['posts'])): ?>
                        <ul class="submenu-mobile hidden">
                            <?php foreach ($menu_item['posts'] as $child): ?>
                                <li><a href="<?= esc_url($child['permalink']); ?>"><?= esc_html($child['title']); ?></a></li>
                                <div class="line-separator-horizontal"></div>

                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <div class="line-separator-horizontal"></div>
                </li>
            <?php endforeach; ?>
            <div class="mobile-submenu__contact">
                <p><i class="fa-solid fa-phone"></i> 999 999 999</p>
                <?php get_template_part('template-parts/social'); ?>
            </div>
        </ul>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const mobileSubmenu = document.getElementById('mobileSubmenu');

        mobileMenuButton.addEventListener('click', function () {
            mobileSubmenu.classList.toggle('hidden');
        });

        const submenuItems = document.querySelectorAll('.mobile-submenu > ul > li > a');
        submenuItems.forEach(item => {
            item.addEventListener('click', function (event) {
                event.preventDefault();
                const submenu = this.nextElementSibling;
                if (submenu) {
                    submenu.classList.toggle('hidden');
                }
            });
        });
    });
</script>

<style>
    .hidden {
        display: none;
    }
</style>