<?php get_header(); ?>

<main>

        <header class="header_category">
            <h3>Pesquisa: <strong><?= $_GET['s'] ?></strong> </h3>
        </header>

        <section class="section_last_post container_full">

            <div class="last_post_content container">

                <div class="last_post_left">

                    <?php

                        if(have_posts()):

                    ?>

                    <header class="header_last_post">
                        <h2>O que encontramos para você</h2>
                    </header>

                    <section class="posts_last_post">
                        <?php while(have_posts()): the_post() ?>

                        <article class="card_last_post">
                            <a class="link_last_post" href="<?= get_the_permalink() ?>">
                                <img src="<?= get_the_post_thumbnail_url(null, 'medium') ?>" alt="">
                                <h3><?= get_the_title(); ?></h3>
                            </a>
                            <div class="bottom_card_last_post">
                                <p><?= get_the_category_list() ?> <time><?= get_the_date('d/m/Y'); ?></time></p>
                                
                                <a class="link_excerpt_last_post" href="#"><?= get_the_excerpt(); ?></a>
                                
                            </div>
                        </article>

                        <?php 
                            
                            endwhile;

                        ?>

                    </section>

                    <?php else: ?>

                    <header class="header_last_post">
                        <h2 style="margin: 5px 0; color: var(--color-main)">Não encontramos o que você buscou</h2>
                        <h2 style="margin: 5px 0; color: var(--color-dark-main)">Mas talvez você goste desses resultados</h2>
                    </header>

                    <section class="posts_last_post">

                        <?php

                            $args = [
                                'post_type' => 'post',
                                'posts_per_page' => 8
                            ];

                            $results = new WP_Query($args);

                            if($results->have_posts()):
                        ?>

                        <?php while($results->have_posts()): $results->the_post() ?>

                        <article class="card_last_post">
                            <a class="link_last_post" href="<?= get_the_permalink() ?>">
                                <img src="<?= get_the_post_thumbnail_url(null, 'medium') ?>" alt="">
                                <h3><?= get_the_title(); ?></h3>
                            </a>
                            <div class="bottom_card_last_post">
                                <p><?= get_the_category_list() ?> <time><?= get_the_date('d/m/Y'); ?></time></p>
                                
                                <a class="link_excerpt_last_post" href="<?= get_the_permalink(); ?>"><?= get_the_excerpt(); ?></a>
                                
                            </div>
                        </article>

                        <?php 
                            
                            endwhile; endif; wp_reset_query(); wp_reset_postdata();

                        ?>

                        
                    </section>

                    <?php  endif; ?>

                    <div class="control_posts container">
                            <div class="control_prev">
                                <?php previous_posts_link('<i class="bi bi-arrow-left-circle"></i>') ?>
                            </div>
                            <div class="control_next">
                                <?php next_posts_link( '<i class="bi bi-arrow-right-circle"></i>' ) ?>
                            </div>
                        </div>

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

<?php get_footer(); ?>