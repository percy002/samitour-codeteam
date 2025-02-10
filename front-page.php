<?php get_header(); ?>
<div class="hero">
    <div class="hero__content">
        <div class="hero__content__info">
            <h4 class="hero__title">DESCUBRE MACHU PICCHU</h4>
            <p class="hero__subtitle">Descubre la icónica maravilla de Perú con nuestro tour guiado todo incluido, donde la historia y la naturaleza convergen en una experiencia inolvidable.</p>
        </div>
        <button class="hero__button button-secondary">MÁS INFORMACIÓN</button>
    </div>
</div>
<section class="section-container">
    <div class="about">
        <h1>SAMITOURS MACHUPICCHU</h1>
        <p>Ofrecemos experiencias inolvidables, a través de nuestros tours, contando con tarifas accesibles y un servicio de calidad garantizado. Le invitamos a que se deje llevar a increíbles destinos como: Machu Picchu, El Camino Inca, Valle Sagrado, Valle Sur, entre otros icónicos lugares de la maravillosa ciudad imperial del Cusco.</p>
    </div>
    <div class="flex-center">
    <button class="button-secondary">LEER MAS</button>

    </div>
</section>
<div class="separator">
    <h2>TOURS <span class="color-secondary">CUSCO</span></h2>
</div>

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
            <p>Escoge un paquete especial para que viajes y disfrutes de todo lo que tenemos reservado para ti... Visitaremos</p>
            <a href="" class="button-primary">EXPLORAR TOURS</a>
        </div>
    </div>
</section>
<div class="separator">
    <h2>TOURS <span class="color-secondary">MACHU PICCHU</span></h2>
</div>
<section class="section-container">

    <?php get_template_part('inc/tour-list'); ?>

    <div class="flex-center">
        <a href="" class="button-secondary">VER MAS TOURS EN CUSCO</a>
    </div>
    
</section>
<?php get_footer(); ?>
