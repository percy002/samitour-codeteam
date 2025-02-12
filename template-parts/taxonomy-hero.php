<?php
$title = isset($args['title']) ? $args['title'] : '';
$subtitle = isset($args['subtitle']) ? $args['subtitle'] : '';
$imagen_url = isset($args['imagen_url']) ? $args['imagen_url'] : '';

?>
<div class="hero-taxonomy" style="
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.00) 0%, rgba(0, 0, 0, 0.80) 100%), url(<?= $imagen_url ?>);
    background-color: lightgray;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
">
    <div class="hero-taxonomy__content">
        <div class="hero-taxonomy__content__info">
            <h4 class="hero-taxonomy__title"><?= $title ?></h4>
            <p class="hero-taxonomy__subtitle"><?= $subtitle ?></p>
        </div>
    </div>
</div>