<section class="section-container-footer">
    <div class="footer-line"></div>
</section>
<div class="whatsapp-button">
    <a href="https://wa.me/51972070311?text=Hola%20Samitours%20Machu%20Picchu,%20estoy%20interesado%20en%20obtener%20más%20información%20sobre%20sus%20tours." target="_blank">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
</div>
</body>
<footer>
    <div class="footer">
        <div class="footer__brand">
            <a href="<?php echo pll_home_url() ?>">
                <img class="nav-menu__logo" src="<?php echo get_template_directory_uri() ?>/assets/img/logo_blanco.png"
                    alt="Logo">
            </a>
            <p>Ofrecemos experiencias únicas en Cusco. Nuestro compromiso con la excelencia nos posiciona como referente
                en el sector, invitándote a descubrir la auténtica magia de Cusco con Machu Picchu Sacred</p>
        </div>
        <div class="footer__section">
            <h6>CONTÁCTENOS</h6>
            <ul>
                <li>Cusco Perú</li>
                <li>+51 972 070 311</li>
                <li>info@samitoursmachupicchu.com</li>
            </ul>
        </div>
        <div class="footer__section">
            <h6>IMPORTANTE</h6>
            <ul>
                <li><a href="<?php echo pll_home_url(); ?>">INICIO</a> </li>
                <li><a href="<?php echo esc_url(get_permalink(pll_get_post(get_page_by_path('nosotros')->ID))); ?>">NOSOTROS</a></li>
                <li><a href="">CONTACTO</a></li>
            </ul>
        </div>
        <div class="footer__section">
            <h6>TOURS</h6>
            <ul>
                <li><a href="https://samitoursmachupicchu.com/tipo_tour/tours_cusco/">TOURS CUSCO</a></li>
                <li><a href="https://samitoursmachupicchu.com/tipo_tour/machupicchu/">TOURS MACHUPICCHU</a></li>
                <li><a href="https://samitoursmachupicchu.com/tipo_tour/paquetes/">PAQUETES</a></li>
                <li><a href="">BLOG</a></li>
            </ul>
            <div class="footer__social">
                <h6>SÍGUENOS EN:</h6>
                <ul>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-tiktok"></i>

                </ul>
            </div>
        </div>

    </div>
    <div class="copyright">
        <p>COPYRIGHT © <?= date('Y') ?> - SAMITOURS MACHUPICCHU</p>
        <div class="copyright-separator"></div>
        <p>REALIZADO POR <a href="https://codeteam.pe/" target="__blank">CODETEAM</a></p>
    </div>
    <?php wp_footer() ?>
</footer>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</html>