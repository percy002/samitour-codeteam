<?php get_header(); ?>
<?php
$term = get_queried_object(); // Obtener el término de la taxonomía actual
$imagen_url = get_field('portada', 'term_' . $term->term_id); // Obtener el campo 'portada' para el término actual
?>

<?php get_template_part('template-parts/taxonomy-hero', null, [
    'title' => single_term_title('', false),
    'subtitle' => 'Ofrecemos experiencias inolvidables',
    'imagen_url' => $imagen_url['url']
]); ?>


<section class="section-container">

    <?php get_template_part('inc/tour-list'); ?>

    <div class="flex-center">
        <a href="" class="button-secondary">VER MAS TOURS EN CUSCO</a>
    </div>

</section>
<?php get_template_part('template-parts/separator-secondary', null, array('title' => "¿Alguna Duda o Consulta?")); ?>
<?php get_template_part('template-parts/contact'); ?>

<?php get_footer(); ?>