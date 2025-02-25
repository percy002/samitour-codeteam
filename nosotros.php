<?php
/*
Template Name: Nosotros
*/
?>

<?php get_header();
$imagen_url = get_field('portada');
$history = get_field('historia');
$imagen_historia = is_array(get_field('imagen_historia')) ? get_field('imagen_historia')['url'] : "";

$por_que_nosotros = get_field('por_que_nosotros');

$objetivos = get_field('objetivos');
$mision = get_field('mision');
$vision = get_field('vision');
?>
<?php get_template_part('template-parts/taxonomy-hero', null, [
    'title' => get_the_title(),
    'subtitle' => 'Ofrecemos experiencias inolvidables',
    'imagen_url' => $imagen_url['url']
]); ?>
<section class="section-container">
    <div class="about__history">
        <div class="about__history__content">
            <h1>SAMITOURS <span class="color-secondary">MACHUPICCHU</span> </h1>
            <p><?= $history ?></p>
        </div>
        <div class="">
            <img src="<?= $imagen_historia ?>" alt="">
        </div>
    </div>
</section>
<?php get_template_part('template-parts/separator-secondary', null, array('title' => "¿Alguna Duda o Consulta?")); ?>
<section class="section-container">
    <div class="">
        <?= $por_que_nosotros ?>
    </div>

</section>
<section>
    <div class="why">
        <div class="">
            <div class="">
                <img src="<?= get_template_directory_uri() ?>/assets/img/icons/plane.svg" alt="">
            </div>
            <p>Viajes a medida</p>
        </div>
        <div class="">
            <div class="">
                <img src="<?= get_template_directory_uri() ?>/assets/img/icons/hands.svg" alt="">
            </div>
            <p>Respeto por la comunidad</p>
        </div>
        <div class="">
            <div class="">
                <img src="<?= get_template_directory_uri() ?>/assets/img/icons/traveller.svg" alt="">

            </div>
            <p>Experiencia garantizada</p>
        </div>
        <div class="">
            <div class="">
                <img src="<?= get_template_directory_uri() ?>/assets/img/icons/photocheck.svg" alt="">

            </div>
            <p>Guías expertos</p>
        </div>
    </div>
</section>
<section>
    <div class="identidad">
        <div class="objetivo">
            <div class="">
                <img src="<?= get_template_directory_uri() ?>/assets/img/icons/medalla.svg" alt="">
            </div>
            <p><?= $objetivos ?></p>
        </div>
        <div class="mision">
            <div class="">
                <img src="<?= get_template_directory_uri() ?>/assets/img/icons/eye.svg" alt="">
            </div>
            <p><?= $mision ?></p>
        </div>
        <div class="vision">
            <div class="">
                <img src="<?= get_template_directory_uri() ?>/assets/img/icons/target.svg" alt="">
            </div>
            <p><?= $vision ?></p>
        </div>

    </div>
</section>
<section class="section-container">
    <h4>Destinos mas Populares</h4>
    <?php get_template_part('inc/tour-list'); ?>

    <div class="flex-center">
        <a href="" class="button-secondary">VER MAS TOURS EN CUSCO</a>
    </div>

</section>
<?php get_template_part('template-parts/contact'); ?>

<?php get_footer(); ?>