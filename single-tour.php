<?php get_header(); ?>
<?php
$portada = get_field('portada') ? get_field('portada')['url'] : '';
$title = get_the_title();
$price = get_field('informacion_general')['precio'] ?? '';
$tipo_tour = get_field('informacion_general')['tipo_tour'] ?? '';

$duracion = get_field('caracteristicas')['duracion'] ?? '';
$dificultad = get_field('caracteristicas')['nivel_dificultad'] ?? '';

$descripcion = get_field('descripcion_viaje') ?? '';
$detalle_recorrido = get_field('detalles_recorrido') ?? '';

$image1 = get_field('imagen1') ?? ['url'=>''];
$image2 = get_field('imagen2') ?? ['url'=>''];
$image3 = get_field('imagen3') ?? ['url'=>''];

$itinerario = get_field('itinerario') ?? '';

$incluye = get_field('incluye') ?? [];
$noIncluye = get_field('no_incluye') ?? [];
$recomendaciones = get_field('recomendaciones') ?? [];
?>

<?php get_template_part('template-parts/taxonomy-hero', null, [
    'title' => $title,
    'subtitle' => '',
    'imagen_url' => $portada
]); ?>


<section class="tour__content">
    <div class="tour__features">
        <div class="tour__features__price">
            <div class="">
                <?php get_template_part('template-parts/stars') ?>
            </div>
            <div class="">
                Desde: <span class="bold">$ <?= $price ?></span>
            </div>
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/mountain.svg"
                alt="icono de montaña" />
            <div class="tour__features__type">
                <span class="bold">Tipo de Tour</span>
                <?= $tipo_tour ?>
            </div>
        </div>
        <div class="tour__features__duration">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/clock.svg" alt="icono de reloj" />
            <div class="tour__features__type">
                <span class="bold">Duración</span>
                <?= $duracion ?>
            </div>
        </div>
        <div class="tour__features__level">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/level.svg" alt="icono de nivel" />
            <div class="tour__features__type">
                <span class="bold">Nivel de Dificultad</span>
                <?= $dificultad ?>
            </div>
        </div>
    </div>
    <div class="separator-tours">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/vectorlineasfooter.png'); ?>"
            alt="Vector Lineas">
    </div>
    <div class="tour-container">
        <div class="tour__sidebar">
            <div class="tour-menu">
                <ul>
                    <li><a href="#description">INTRODUCCIÓN</a></li>
                    <div class="separator-line"></div>
                    <li><a href="#gallery">GALERÍA FOTOGRÁFICA</a></li>
                    <div class="separator-line"></div>

                    <li><a href="#itinerary">ITINERARIO</a></li>
                    <div class="separator-line"></div>

                    <li><a href="#includes">INCLUYE</a></li>
                    <div class="separator-line"></div>

                    <li><a href="#related-tours">TOURS RELACIONADOS</a></li>
                    <div class="separator-line"></div>

                </ul>
                <div class="tour__sidebar__contact">
                    <p>¿Necesitas Ayuda?</p>
                    <a href="" class="button-secondary">Consulte Ahora</a>
                </div>
            </div>
        </div>
        <div class="tour__description" id="description">
            <h4>Descripción del Viaje</h4>
            <?= $descripcion ?>
            <div class="tour__detalle">
                <h4>Detalle del Recorrido</h4>
                <?= $detalle_recorrido ?>
            </div>
            <div class="tour__gallery" id="gallery">
                <h4>Galería Fotográfica</h4>

                <div class="galeria">
                    <a href="<?= $image1['url'] ?>" data-pswp-width="800" data-pswp-height="600">
                        <img src="<?= $image1['url'] ?>" alt="Imagen 1">
                    </a>
                    <a href="<?= $image2['url'] ?>" data-pswp-width="800" data-pswp-height="600">
                        <img src="<?= $image2['url'] ?>" alt="Imagen 2">
                    </a>
                    <a href="<?= $image3['url'] ?>" data-pswp-width="800" data-pswp-height="600">
                        <img src="<?= $image3['url'] ?>" alt="Imagen 3">
                    </a>
                </div>

                <!-- Contenedor del lightbox (requerido por PhotoSwipe) -->
                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="pswp__bg"></div>
                    <div class="pswp__scroll-wrap">
                        <div class="pswp__container">
                            <div class="pswp__item"></div>
                            <div class="pswp__item"></div>
                            <div class="pswp__item"></div>
                        </div>
                        <div class="pswp__ui pswp__ui--hidden">
                            <div class="pswp__top-bar">
                                <div class="pswp__counter"></div>
                                <button class="pswp__button pswp__button--close" title="Cerrar"></button>
                                <button class="pswp__button pswp__button--zoom" title="Zoom"></button>
                                <button class="pswp__button pswp__button--fs" title="Pantalla completa"></button>
                            </div>
                            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                <div class="pswp__share-tooltip"></div>
                            </div>
                            <button class="pswp__button pswp__button--arrow--left" title="Anterior"></button>
                            <button class="pswp__button pswp__button--arrow--right" title="Siguiente"></button>
                            <div class="pswp__caption">
                                <div class="pswp__caption__center"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Incluye los scripts de PhotoSwipe 5 -->
                <script src="https://cdn.jsdelivr.net/npm/photoswipe@5.3.7/dist/umd/photoswipe.umd.min.js"></script>
                <script
                    src="https://cdn.jsdelivr.net/npm/photoswipe@5.3.7/dist/umd/photoswipe-lightbox.umd.min.js"></script>
                <script>
                    // Inicializa PhotoSwipe Lightbox
                    document.addEventListener('DOMContentLoaded', function () {
                        const lightbox = new PhotoSwipeLightbox({
                            gallery: '.galeria', // Selector de la galería
                            children: 'a', // Selector de los elementos hijos (enlaces)
                            pswpModule: PhotoSwipe, // Módulo de PhotoSwipe
                        });

                        lightbox.init();
                    });
                </script>
            </div>
            <div class="tour__itinerary" id="itinerary">
                <h4>Itinerario</h4>
                <?= $itinerario ?>

            </div>
            <h4>El tour incluye</h4>
            <div class="tour__includes" id="includes">
                <h5>Incluye</h5>
                <?php if ($incluye): ?>
                    <ul>
                        <?php foreach ($incluye as $item): ?>
                            <li><?= $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="tour__includes">
                <h5>No incluye</h5>
                <?php if ($noIncluye): ?>
                    <ul>
                        <?php foreach ($noIncluye as $item): ?>
                            <li><?= $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="tour__includes">
                <h5>Recomendaciones</h5>
                <?php if ($recomendaciones): ?>
                    <ul>
                        <?php foreach ($recomendaciones as $item): ?>
                            <li><?= $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>
<?php get_template_part('template-parts/contact'); ?>

<section class="section-container" id="related-tours">
    <h4>Tours Relacionados</h4>

    <?php get_template_part('inc/tour-list'); ?>

    <div class="flex-center">
        <a href="" class="button-primary">VER MAS TOURS EN CUSCO</a>
    </div>

</section>

<?php get_footer(); ?>