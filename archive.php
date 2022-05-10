<?php get_header();  ?>

    <main>

        <header class="header_category">
            <h2><strong><?= the_archive_title() ?></strong> </h2>
        </header>

        <section class="section_last_post container_full">

            <div class="last_post_content container">

                <div class="last_post_left">
                    <header class="header_last_post">

                        <h2><?= get_the_archive_title() ?></h2>
                    </header>

                    <section class="posts_last_post">

                        <?php 
                                if(have_posts()):
                                    while(have_posts()):
                                        the_post();

                        ?>

                        

                        <article class="card_last_post">
                            <a class="link_last_post" href="<?= get_the_permalink(); ?>">
                                <img src="<?= get_the_post_thumbnail_url(null, 'medium') ?>" alt="">
                                <h3>churrasco com legumes</h3>
                            </a>
                            <div class="bottom_card_last_post">
                                <p><?= get_the_category_list() ?> <time><?= get_the_date('d/m/Y'); ?></time></p>
                                
                                <a class="link_excerpt_last_post" href="<?= get_the_permalink(); ?>"><?= get_the_excerpt() ?></a>
                                
                            </div>
                        </article>

                        <?php endwhile; ?>
                        
                        <div class="control_posts container">
                            <div class="control_prev">
                                <?php previous_posts_link('<i class="bi bi-arrow-left-circle"></i>') ?>
                            </div>
                            <div class="control_next">
                                <?php next_posts_link( '<i class="bi bi-arrow-right-circle"></i>' ) ?>
                            </div>
                        </div>
                        
                        <?php endif; ?>

                    </section>
                </div>
                
                <?php get_sidebar('home-two'); ?>

            </div>

        </section>
    </main>

<?php get_footer() ?>