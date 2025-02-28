<?php get_header(); ?>

<!-- <div class="hero"> -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="hero"
                style="background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.8) 100%), url(<?php echo get_template_directory_uri(); ?>/assets/img/mapi1.jpeg) lightgray 0px -69.893px / 100% 137.143% no-repeat;">
                <div class="hero__content">
                    <div class="hero__content__info">
                        <h4 class="hero__title">DESCUBRE MACHU PICCHU</h4>
                        <p class="hero__subtitle">Descubre la icónica maravilla de Perú con nuestro tour guiado todo
                            incluido, donde
                            la historia y la naturaleza convergen en una experiencia inolvidable.</p>
                    </div>
                    <button class="hero__button button-secondary">MÁS INFORMACIÓN</button>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="hero"
                style="background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.8) 100%), url(<?php echo get_template_directory_uri(); ?>/assets/img/humantay1.jpeg) lightgray 0px -69.893px / 100% 137.143% no-repeat;">
                <div class="hero__content">
                    <div class="hero__content__info">
                        <h4 class="hero__title">DESCUBRE LA LAGUNA HUMANTAY</h4>
                        <p class="hero__subtitle">Vive una experiencia inolvidable entre montañas y nevados en la Laguna
                            Humantay</p>
                    </div>
                    <button class="hero__button button-secondary">MÁS INFORMACIÓN</button>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="hero"
                style="background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.8) 100%), url(<?php echo get_template_directory_uri(); ?>/assets/img/vinicunca1.jpeg) lightgray 0px -69.893px / 100% 137.143% no-repeat;">
                <div class="hero__content">
                    <div class="hero__content__info">
                        <h4 class="hero__title">DESCUBRE LA MONTAÑA DE COLORES</h4>
                        <p class="hero__subtitle">Conocida por su deslumbrante variedad de tonalidades, la montaña
                            Vinicunca ofrece una aventura extraordinaria en la sierra peruana.</p>
                    </div>
                    <button class="hero__button button-secondary">MÁS INFORMACIÓN</button>
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
        <button class="button-secondary">LEER MAS</button>

    </div>
</section>
<?php get_template_part('template-parts/separator', null, array('title' => "TOURS", 'highlight' => "CUSCO", 'color' => "secondary")); ?>

<section class="section-container">
    <h4>Destinos mas populares del cusco</h4>

    <?php get_template_part('inc/tour-list'); ?>

    <div class="flex-center">
        <a href="" class="button-primary">VER MAS TOURS EN CUSCO</a>
    </div>

</section>

<section>
    <?php
    $image_slogan = get_field('slogan_imagen');
    ?>
    <div class="slogan">
        <div class="">
            <img src="<?= $image_slogan['url'] ?>" alt="">
        </div>
        <div class="slogan__content">
            <h2>Cusco te esta esperando</h2>
            <p>Escoge un paquete especial para que viajes y disfrutes de todo lo que tenemos reservado para ti...
                Visitaremos</p>
            <a href="" class="button-primary">EXPLORAR TOURS</a>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/separator', null, array('title' => "TOURS", 'highlight' => "MACHU PICCHU", 'color' => "secondary")); ?>

<section class="section-container">

    <?php get_template_part('inc/tour-list'); ?>

    <div class="flex-center">
        <a href="" class="button-secondary">VER MAS TOURS EN CUSCO</a>
    </div>

</section>
<?php get_footer(); ?>