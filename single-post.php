<?php get_header(); ?>

    <main>

       <section>
           <header class="header_post">

                <h1><?= get_the_title() ?></h1>

           </header>
       </section>

       <section class="content_post container" style="background-color: #fff">
            <img class="img_post" src="<?= get_the_post_thumbnail_url(null, 'large'); ?>" alt="<?= get_image_alt(get_the_ID()) ?>">

            <div class="content_interno_post">

                <div class="content_post_left">

                    
                    <?= get_the_content(); ?>
                        

                    <?php
                        //caso o botão exibir receita esteja marcado 
                        if(get_post_meta( get_the_ID(), 'show_receita', true )):
                    ?>

                    <h2>Ingredientes:</h2>

                    <ul class="list_ingredientes">
                        <?php 
                        
                            $ingredientes = get_post_meta( get_the_ID(), 'ingredientes_list', true );

                            if(is_array($ingredientes)):

                                foreach($ingredientes as $item){

                                    echo "<li><i class='bi bi-check-lg'></i>".$item['ingrediente_item']."</li>";
    
                                }   

                            endif;

                           
                            
                        ?>

                       
                    </ul>

                    
                    <h2>Modo de Preparo:</h2>

                    <?php

                        $modo_preparo = get_post_meta( get_the_ID(), 'preparo_receita', true ); 
                        echo $modo_preparo;

                        endif;
                    ?>


                </div>

                <?php get_sidebar('home-two'); ?>
                <!-- 
                <aside class="sidebar_post">
                    <img src="assets/img/ads.jpg" alt="">
                    <img src="assets/img/ads2.jpg" alt="">
                </aside>
                -->
            </div>

            <section class="sec_separador container_full">
                <div class="separador_content container">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/logo-small.png" alt="">
                </div>
            </section>

            <section class="posts_relacionados">

                <?php
                        $cat_post = get_the_category()[0]->slug;


                        $args_cat_post = [
                            'post_type' => 'post',
                            'category_name' => $cat_post,
                            'post__not_in' => [''.get_the_ID().''],
                            'posts_per_page' => 3
                        ];
        
                        $results_cat_post = new WP_Query($args_cat_post);
                        
                        
                        if($results_cat_post->have_posts()):
                ?>  

                <header class="header_post_relacionados">
                    <h3>Receitas Relacionadas</h3>
                </header>

                <section class="content_posts_relacionados">

                          
                    
                    <?php while($results_cat_post->have_posts()): $results_cat_post->the_post(); ?>

                    <article class="card_last_post">
                        <a class="link_last_post" href="<?= get_the_permalink(); ?>">
                            <img src="<?= get_the_post_thumbnail_url(null, 'medium') ?>" alt="">
                            <h3><?= get_the_title() ?></h3>
                        </a>
                        <div class="bottom_card_last_post">
                        <p><?= get_the_category_list() ?> <time><?= get_the_date('d/m/Y'); ?></time></p>
                            
                            <a class="link_excerpt_last_post" href="<?= get_the_permalink(); ?>"><?= get_the_excerpt(); ?></a>
                            
                        </div>
                    </article>

                    <?php endwhile; ?>

                    
                    
                </section>

                <?php endif; wp_reset_query(); wp_reset_postdata(); ?>

            </section>

       </section>

    </main>


<?php get_footer() ?>