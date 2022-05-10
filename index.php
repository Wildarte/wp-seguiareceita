<?php get_header() ?>


<style>
    .default_page{
        padding: 40px 10px;
    }
    .default_page h1{
        margin-bottom: 20px;
        font-size: 2em;
        margin: 20px 0;
    }
    .default_page p{
        font-size: 1.2em;
        line-height: 1.5em;
        margin-bottom: 10px;
        text-align: justify;
    }
</style>
    <main class="main_default">

        <?php if(have_posts()): while(have_posts()): the_post() ?>

        <section class="container default_page">

            <h1><?= get_the_title(); ?></h1>

            <?= get_the_content(); ?>

        </section>


       <?php endwhile; endif; ?>

    </main>


<?php get_footer() ?>