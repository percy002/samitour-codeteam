<?php get_header(); ?>
<!-- <div class="hero"> -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="hero"
                style="background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.8) 100%), url(<?php echo get_template_directory_uri(); ?>/assets/img/mapi1.jpeg)">
                <div class="hero__content">
                    <div class="hero__content__info">
                        <h4 class="hero__title">DESCUBRE MACHU PICCHU</h4>
                        <p class="hero__subtitle">Descubre la icónica maravilla de Perú con nuestro tour guiado todo
                            incluido, donde
                            la historia y la naturaleza convergen en una experiencia inolvidable.</p>
                    </div>
                    <a href="https://samitoursmachupicchu.com/tour/machupicchu-tour-por-tren/" class="hero__button button-secondary">MÁS INFORMACIÓN</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="hero"
                style="background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.8) 100%), url(<?php echo get_template_directory_uri(); ?>/assets/img/humantay1.jpeg)">
                <div class="hero__content">
                    <div class="hero__content__info">
                        <h4 class="hero__title">DESCUBRE LA LAGUNA HUMANTAY</h4>
                        <p class="hero__subtitle">Vive una experiencia inolvidable entre montañas y nevados en la Laguna
                            Humantay</p>
                    </div>
                    <a href="https://samitoursmachupicchu.com/tour/laguna-humantay/" class="hero__button button-secondary">MÁS INFORMACIÓN</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="hero"
                style="background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.8) 100%), url(<?php echo get_template_directory_uri(); ?>/assets/img/vinicunca1.jpeg)">
                <div class="hero__content">
                    <div class="hero__content__info">
                        <h4 class="hero__title">DESCUBRE LA MONTAÑA DE COLORES</h4>
                        <p class="hero__subtitle">Conocida por su deslumbrante variedad de tonalidades, la montaña
                            Vinicunca ofrece una aventura extraordinaria en la sierra peruana.</p>
                    </div>
                    <a href="https://samitoursmachupicchu.com/tour/montana-de-colores-vinicunca/" class="hero__button button-secondary">MÁS INFORMACIÓN</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Paginación -->
    <div class="swiper-pagination"></div>
    <!-- Botones de navegación -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<section class="section-container">
    <div class="about">
        <h1>SAMITOURS MACHUPICCHU</h1>
        <p><?php the_content() ?></p>
    </div>
    <div class="flex-center">
    <a href="<?php echo esc_url(get_permalink(pll_get_post(get_page_by_path('nosotros')->ID))); ?>" class="button-secondary">LEER MÁS</a>
    </div>
</section>
<?php get_template_part('template-parts/separator', null, array('title' => "TOURS", 'highlight' => "CUSCO", 'color' => "secondary")); ?>

<section class="section-container">
    <h4>Destinos mas populares del Cusco</h4>
    <?php
    $primer_tour_popular = get_field('primer_tour_favorito');
    $segundo_tour_popular = get_field('segundo_tour_favorito');
    $tercer_tour_popular = get_field('tercer_tour_favorito');
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
        <a href="https://samitoursmachupicchu.com/tipo_tour/tours_cusco/" class="button-primary">VER MAS TOURS EN CUSCO</a>
    </div>

</section>

<section>
    <?php
    $image_slogan = get_field('slogan_imagen');
    $slogan = get_field('slogan');
    ?>
    <div class="slogan">
        <div class="">
            <img src="<?= $image_slogan['url'] ?>" alt="">
        </div>
        <div class="slogan__content">
            <?= $slogan ?>
            <a href="" class="button-primary">EXPLORAR TOURS</a>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/separator', null, array('title' => "NUESTROS PAQUETES TURISTICOS", 'highlight' => "", 'color' => "secondary")); ?>

<section class="section-container">

    <?php
    $primer_tour_cusco = get_field('primer_tour_cusco');
    $segundo_tour_cusco = get_field('segundo_tour_cusco');
    $tercer_tour_cusco = get_field('tercer_tour_cusco');
    ?>
    <div class="tours-list">
        <?php if ($primer_tour_cusco): ?>
            <?php get_template_part('template-parts/tourCard', null, [
                'portada' => get_field('portada', $primer_tour_cusco->ID),
                'precio' => get_field('precio', $primer_tour_cusco->ID),
                'title' => $primer_tour_cusco->post_title,
                'content' => $primer_tour_cusco->post_content,
                'link' => get_permalink($primer_tour_cusco->ID)
            ]); ?>

        <?php endif ?>
        <?php if ($segundo_tour_cusco): ?>
            <?php get_template_part('template-parts/tourCard', null, [
                'portada' => get_field('portada', $segundo_tour_cusco->ID),
                'precio' => get_field('precio', $segundo_tour_cusco->ID),
                'title' => $segundo_tour_cusco->post_title,
                'content' => $segundo_tour_cusco->post_content,
                'link' => get_permalink($segundo_tour_cusco->ID)
            ]); ?>

        <?php endif ?>
        <?php if ($tercer_tour_cusco): ?>
            <?php get_template_part('template-parts/tourCard', null, [
                'portada' => get_field('portada', $tercer_tour_cusco->ID),
                'precio' => get_field('precio', $tercer_tour_cusco->ID),
                'title' => $tercer_tour_cusco->post_title,
                'content' => $tercer_tour_cusco->post_content,
                'link' => get_permalink($tercer_tour_cusco->ID)
            ]); ?>

        <?php endif ?>

    </div>

</section>
<?php get_footer(); ?>