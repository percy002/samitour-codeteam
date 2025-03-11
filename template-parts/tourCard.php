<?php 
    $portada = isset($args['portada']) ? $args['portada'] : ['url' => '', 'alt' => ''];
    $precio = isset($args['precio']) ? $args['precio'] : '0.00';
    $title = isset($args['title']) ? $args['title'] : '';
    $content = isset($args['content']) ? $args['content'] : '';
    $link = isset($args['link']) ? $args['link'] : '';

?>
<div class="tour-card">
    <?php if ($portada): ?>
        <img src="<?php echo esc_url($portada['url']); ?>" alt="<?php echo esc_attr($portada['alt']); ?>" />
    <?php endif; ?>
    <div class="tour-card__content">
        <h5><?= $title ?></h5>
        <p><?php $content ?></p>
        <div class="tour-card__details">
            <?php get_template_part('template-parts/stars') ?>
            <div class="tour-card__content__price">
                <p>Desde:</p>
                <p class="price">US$. <?= $precio ?></p>
            </div>
        </div>
        <a href="<?= $link; ?>" class="button-secondary">EXPLORAR TOUR</a>
    </div>
</div>