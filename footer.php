<section class="section-container-footer">
    <div class="footer-line"></div>
</section>
</body>
<footer>
    <div class="footer">
        <div class="footer__brand">
            <a href="<?php echo home_url() ?>">
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
                <li>+51 99999999</li>
                <li>samitours@gmail.com</li>
            </ul>
        </div>
        <div class="footer__section">
            <h6>IMPORTANTE</h6>
            <ul>
                <li>INICIO</li>
                <li>NOSOTROS</li>
                <li>CONTACTO</li>
                <li>TÉRMINOS Y CONDICIONES</li>
                <li>PREGUNTAS FRECUENTES</li>
            </ul>
        </div>
        <div class="footer__section">
            <h6>TOURS</h6>
            <ul>
                <li>TOURS CUSCO</li>
                <li>TOURS MACHUPICCHU</li>
                <li>PAQUETES</li>
                <li>BLOG</li>
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

</html>