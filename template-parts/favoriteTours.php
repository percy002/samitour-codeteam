<section class="section-container popular-tours">
    <h1 class="popular-tours__title">Destinos mas populares del Cusco</h1>
    <?php
    // Obtener el ID de la página de inicio en el idioma actual
    $front_page_id = pll_get_post(get_option('page_on_front'));

    // Obtener los campos personalizados de la página de inicio
    $primer_tour_popular = get_field('primer_tour_favorito', $front_page_id);
    $segundo_tour_popular = get_field('segundo_tour_favorito', $front_page_id);
    $tercer_tour_popular = get_field('tercer_tour_favorito', $front_page_id);
    ?>


    <div class="tours-list">
        <?php if ($primer_tour_popular): ?>
            <?php get_template_part('template-parts/tourCard', null, [
                'portada' => get_field('portada', $primer_tour_popular->ID),
                'precio' => get_field('informacion_general', $primer_tour_popular->ID)['precio'] ?? '0.00',
                'title' => $primer_tour_popular->post_title,
                'content' => $primer_tour_popular->post_content,
                'link' => get_permalink($primer_tour_popular->ID)
            ]); ?>

        <?php endif ?>
        <?php if ($segundo_tour_popular): ?>
            <?php get_template_part('template-parts/tourCard', null, [
                'portada' => get_field('portada', $segundo_tour_popular->ID),
                'precio' => get_field('informacion_general', $segundo_tour_popular->ID)['precio'] ?? '0.00',
                'title' => $segundo_tour_popular->post_title,
                'content' => $segundo_tour_popular->post_content,
                'link' => get_permalink($segundo_tour_popular->ID)
            ]); ?>

        <?php endif ?>
        <?php if ($tercer_tour_popular): ?>
            <?php get_template_part('template-parts/tourCard', null, [
                'portada' => get_field('portada', $tercer_tour_popular->ID),
                'precio' => get_field('informacion_general', $tercer_tour_popular->ID)['precio'] ?? '0.00',
                'title' => $tercer_tour_popular->post_title,
                'content' => $tercer_tour_popular->post_content,
                'link' => get_permalink($tercer_tour_popular->ID)
            ]); ?>

        <?php endif ?>

    </div>


    <div class="flex-center">
        <a href="" class="button-primary">VER MAS TOURS EN CUSCO</a>
    </div>

</section>
