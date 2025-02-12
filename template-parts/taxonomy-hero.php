<?php
$title = isset($args['title']) ? $args['title'] : '';
$subtitle = isset($args['subtitle']) ? $args['subtitle'] : '';
$imagen_url = isset($args['imagen_url']) ? $args['imagen_url'] : '';

?>
<div class="hero-taxonomy" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.00) 0%, rgba(0, 0, 0, 0.80) 100%), url(<?=$imagen_url?>) lightgray 0px -191.502px / 100% 174.229% no-repeat;">
    <div class="hero-taxonomy__content">
        <div class="hero-taxonomy__content__info">
            <h4 class="hero-taxonomy__title"><?= $title  ?></h4>
            <p class="hero-taxonomy__subtitle"><?= $subtitle ?></p>
        </div>
    </div>
</div>