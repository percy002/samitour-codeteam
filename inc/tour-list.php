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
            $portada = get_field('portada'); // Obtener el campo personalizado 'portada'
            ?>
            <div class="tour-card">
                <?php if ($portada): ?>
                    <img src="<?php echo esc_url($portada['url']); ?>" alt="<?php echo esc_attr($portada['alt']); ?>" />
                <?php endif; ?>              
                <div class="tour-card__content">
                    <h5><?php the_title(); ?></h5>
                    <p><?php the_content() ?></p>
                    <a href="" class="button-secondary">EXPLORAR TOUR</a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>
<?php else: ?>
    <p>No se encontraron Tours.</p>
<?php endif; ?>