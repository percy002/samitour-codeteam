<?php
/*
Template Name: Nosotros
*/
?>

<?php get_header();
$imagen_url = get_field('portada');

?>
<?php get_template_part('template-parts/taxonomy-hero', null, [
    'title' => single_term_title('', false),
    'subtitle' => 'Ofrecemos experiencias inolvidables',
    'imagen_url' => $imagen_url['url']
]); ?>

<?php get_template_part('template-parts/separator-secondary', null, array('title' => "¿Alguna Duda o Consulta?")); ?>
<?php get_template_part('template-parts/contact'); ?>

<?php get_footer(); ?>