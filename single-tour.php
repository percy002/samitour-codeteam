<?php get_header(); ?>
<?php
$portada = get_field('portada') ? get_field('portada')['url'] : '';
$title = get_the_title();
$price = get_field('informacion_general')['precio'];
$tipo_tour = get_field('informacion_general')['tipo_tour'];

$duracion = get_field('caracteristicas')['duracion'];
$dificultad = get_field('caracteristicas')['nivel_dificultad'];
?>

<?php get_template_part('template-parts/taxonomy-hero', null, [
    'title' => $title,
    'subtitle' => '',
    'imagen_url' => $portada
]); ?>


<section class="section-container">
    <div class="tour__features">
        <div class="tour__features__price">
            <span class="bold">Precio</span>
            desde $ <?= $price ?>
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
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/clock.svg"
                alt="icono de reloj" />
            <div class="tour__features__type">
                <span class="bold">Duración</span>
                <?= $duracion ?>
            </div>
        </div>
        <div class="tour__features__level">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/level.svg"
                alt="icono de nivel" />
            <div class="tour__features__type">
                <span class="bold">Nivel de Dificultad</span>
                <?= $dificultad ?>
            </div>
        </div>
    </div>

    <div class="separator-tours">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/vectorlineasfooter.png'); ?>" alt="Vector Lineas">
    </div>

</section>
<?php get_template_part('template-parts/separator-secondary', null, array('title' => "¿Alguna Duda o Consulta?")); ?>
<?php get_template_part('template-parts/contact'); ?>

<?php get_footer(); ?>