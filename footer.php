<footer class="footer container_full">
        <div class="footer_content container">

            <div class="footer_logo">
                <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                ?>
                <img src="<?= $logo[0] ?>" alt="Segui a Receita">
                <p>Cozinhar, preparar aquela sobremesa e ver o sorrizo no rosto das pessoas que amamos, isso não tem preço.</p>
                <p>É sobre fazer o que amamos e nos da prazer, pois a vida deve ser vivida com momento mágicos</p>
            </div>

            <div class="footer_categories">
                <h4>Categorias</h4>
                <ul>
                    <li><a href="#">Bolos</a></li>
                    <li><a href="#">Doces</a></li>
                    <li><a href="#">Salgados</a></li>
                    <li><a href="#">Sobremesas</a></li>
                </ul>
            </div>

            <div class="footer_contato">
                <div class="footer_contato_email">
                    <h4>Contato</h4>

                    <ul>
                        <li><a href="mailto:contato@seguiareceita.com"><i class="bi bi-envelope"></i> contato@seguiareceita.com</a></li>
                    </ul>
                </div>                
                
                <div class="footer_social">
                    <h4>Redes sociais</h4>

                    <ul>
                        <li><a href="https://www.facebook.com/seguiareceita"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/seguiareceita.of/"><i class="bi bi-instagram"></i></a></li>
                    </ul>
                </div>

                
            </div>
        </div>

        <div class="footer_bottom">
            <p><a href="#">seguieareceita.com</a></p>
        </div>
    </footer>

    <!-- wp footer -->
    <?php wp_footer(); ?>
    <!-- wp footer -->

    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                autoplay:true,
                autoplayTimeout:2000,
                autoplayHoverPause:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            });
        });
    </script>

</body>
</html>