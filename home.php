<?php get_header() ?>

    <main>

    <?php  if(!is_paged()): ?>

        <section class="sec_intro">
            <div class="sec_intro_content container">
                <img class="book_img" src="<?= get_template_directory_uri() ?>/assets/img/book.png" alt="">
                <img class="book_img_response" src="<?= get_template_directory_uri() ?>/assets/img/book-mobile.png" alt="">
                <img class="book_img_response2" src="<?= get_template_directory_uri() ?>/assets/img/book-mobile2.png" alt="">
                <div class="owl-carousel m_carousel">
                <?php 
                    
                    $post_ads = get_option('show_ads_images');

                    if(!empty($post_ads)):

                        for($i = 0; $i < count($post_ads); $i++):
                
                ?>
                    <div class="item_carousel">
                        <a href="<?= $post_ads[$i][1] ?>">
                            <img src="<?= $post_ads[$i][0] ?>" alt="">
                        </a>
                    </div>

                    <?php endfor; endif; ?>
                    
                </div>
            </div>
        </section>

        <section class="section_second_menu container_full">

            <div class="content_second_menu container">
                
            <?php wp_nav_menu(['theme_location' => 'secondary_menu', 'container_class' => 'second_menu']); ?><!-- 
                <ul class="second_menu">
                    <li><a href=""><img src="assets/img/icons/cake-icon.png" alt=""> Bolos</a></li>
                    <li><a href=""><img src="assets/img/icons/lanche-icon.png" alt=""> Lanches</a></li>
                    <li><a href=""><img src="assets/img/icons/massa-icon.png" alt=""> Massas</a></li>
                    <li><a href=""><img src="assets/img/icons/torta-icon.png" alt=""> Tortas</a></li>
                    <li><a href=""><img src="assets/img/icons/sobremesa-icon.png" alt=""> Sobremesas</a></li>
                    <li><a href=""><img src="assets/img/icons/mousse.png" alt=""> Mousses</a></li> 
                </ul>
                 -->
                 
            </div>

        </section>

        <section class="sec_content_one container_full">

            <div class="content_one_content container">

                <section class="content_one_left">

                    <header class="header_content_one">
                        <h2>Destaque</h2>
                    </header>

                    <section class="articles_content_one">

                        <?php 

                            $args_post_top = [
                                'post_type' => 'post',
                                'page_id' => get_option('show_posts_destaque_top')
                            ];

                            $result_post_top = new WP_Query($args_post_top);

                            if($result_post_top->have_posts()):
                                while($result_post_top->have_posts()):
                                    $result_post_top->the_post();

                        ?>

                        <article class="card_content_one post_destaque">
                            <div class="bord_icon_post">
                                <img class="img_icon_post" src="<?= get_template_directory_uri() ?>/assets/img/logo-small.png" alt="Segui a Receita">
                            </div>
                            
                            <a href="<?= get_the_permalink(); ?>">
                                <img src="<?= get_the_post_thumbnail_url(null, 'thumb-destaque-top') ?>" alt="<?= get_image_alt(get_the_ID()) ?>">
                            </a>
                            <h2><?= get_the_title() ?></h2>
                        </article>


                        <?php

                                endwhile; endif; wp_reset_query();

                                $post_selected_list = get_option('show_posts_destaque_list');

                                $args_post_list = [
                                    'post_type' => 'post',
                                    'post__in' => $post_selected_list
                                ];

                                $result_post_list = new WP_Query($args_post_list);

                                if($result_post_list->have_posts()):
                                    while($result_post_list->have_posts()):
                                        $result_post_list->the_post();

                        ?>

                        <article class="card_content_one">
                            <div class="bord_icon_post">
                                <img class="img_icon_post" src="<?= get_template_directory_uri() ?>/assets/img/logo-small.png" alt="">
                            </div>
                            <a href="<?= get_the_permalink(); ?>">
                                <img src="<?= get_the_post_thumbnail_url(null, 'medium') ?>" alt="<?= get_image_alt(get_the_ID()) ?>">
                            </a>
                            
                            <h2><?= get_the_title() ?></h2>
                        </article>

                       <?php endwhile; endif; wp_reset_query(); ?>

                    </section>

                </section>

                <?php get_sidebar('home-one') ?>

                <!-- 
                <aside class="sidebar_1">
                    <form action="">
                        <label for="Pesquisar">Pesquisar...</label>
                        <input type="text" name="s">
                    </form>

                    <hr>

                    <h3>Tags</h3>

                    #bolos, #tortas, #recheio, #sobremesa, #sorvete, #salgado

                    
                    
                </aside>
                 -->

            </div>

        </section>

        <section class="sec_separador container_full">
            <div class="separador_content container">
                <img src="<?= get_template_directory_uri() ?>/assets/img/logo-small.png" alt="Segui a Receita">
            </div>
        </section>

        <?php endif; ?>

        <section class="section_last_post container_full">

            <div class="last_post_content container">

                <div class="last_post_left">
                    <header class="header_last_post">
                        <h2>Últimas publicações</h2>
                    </header>

                    <section class="posts_last_post">

                        <?php

                            if(have_posts()): while(have_posts()): the_post();

                        ?>

                        <article class="card_last_post">
                            <a class="link_last_post" href="<?= get_the_permalink() ?>">
                                <img src="<?= get_the_post_thumbnail_url(null, 'medium') ?>" alt="">
                                <h3><?= get_the_title(); ?></h3>
                            </a>
                            <div class="bottom_card_last_post">
                                <?= get_categories() ?>
                                <a class="link_cat_last_post" href="#">comidas</a>
                                <time><?= get_the_date(); ?></time>
                                
                                <a class="link_excerpt_last_post" href="<?= get_the_permalink() ?>"><?= get_the_excerpt(); ?></a>
                                
                            </div>
                        </article>


                        <?php endwhile; endif; ?>

                        <div class="control_posts container">
                            <div class="control_prev">
                                <?php previous_posts_link('<i class="bi bi-arrow-left-circle"></i>') ?>
                            </div>
                            <div class="control_next">
                                <?php next_posts_link( '<i class="bi bi-arrow-right-circle"></i>' ) ?>
                            </div>
                        </div>

                    </section>
                </div>
                
                <?php get_sidebar('home-two'); ?>

                <!-- 
                <aside class="sidebar_2">
                    <a href="#">
                        <img src="assets/img/ads3.jpg" alt="">
                    </a>

                    <a href="#">
                        <img src="assets/img/ads4.jpg" alt="">
                    </a>

                    <a href="#">
                        <img src="assets/img/ads5.jpg" alt="">
                    </a>
                </aside>
                 -->

            </div>

        </section>

    </main>


<?php get_footer() ?>