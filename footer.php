<footer class="footer container_full">
        <div class="footer_content container">

            <div class="footer_logo">
                <img src="assets/img/logo-small.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex nemo, cupiditate eveniet a autem qui alias numquam velit magni mollitia dolore ipsa, provident facilis. Corporis amet eius consequatur quos voluptatum.</p>
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
                        <li><a href="mailto:contato@dominio.com"><i class="bi bi-envelope"></i> contato@dominio.com</a></li>
                    </ul>
                </div>                
                
                <div class="footer_social">
                    <h4>Redes sociais</h4>

                    <ul>
                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                    </ul>
                </div>

                
            </div>
        </div>

        <div class="footer_bottom">
            <p><a href="#">seguieareceita.com</a></p>
        </div>
    </footer>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>

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