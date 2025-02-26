<?php
// Consulta personalizada para obtener los Tours
$args = array(
    'post_type' => 'tour',
    'posts_per_page' => 3 // Número de tours a mostrar
);
$tours_query = new WP_Query($args);

if ($tours_query->have_posts()): ?>
    <div class="tours-list">
        <?php while ($tours_query->have_posts()):
            $tours_query->the_post();
            $portada = get_field('portada'); 
            $precio = get_field('informacion_general')['precio'] ?? '0.00';
            ?>
            <div class="tour-card">
                <?php if ($portada): ?>
                    <img src="<?php echo esc_url($portada['url']); ?>" alt="<?php echo esc_attr($portada['alt']); ?>" />
                <?php endif; ?>              
                <div class="tour-card__content">
                    <h5><?php the_title(); ?></h5>
                    <p><?php the_content() ?></p>
                    <div class="tour-card__details">
                        <?php get_template_part('template-parts/stars') ?>
                        <div class="tour-card__content__price">
                            <p>Desde:</p>
                            <p class="price">US$. <?= $precio ?></p>
                        </div>
                    </div>
                    <a href="<?= get_permalink(); ?>" class="button-secondary">EXPLORAR TOUR</a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>
<?php else: ?>
    <p>No se encontraron Tours.</p>
<?php endif; ?>