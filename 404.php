<?php get_header(); ?>

<main>
    <section class="container default_erro">
        <img src="<?= get_template_directory_uri() ?>/assets/img/cook404.png" alt="">
        <h3 style="width: 100%; text-align: center; margin: 50px auto; font-size: 2em">Página não encontrada... :(</h3>
        <form action="<?= get_home_url() ?>" class="form_error">
            <p>Você ainda pode pesquisar por mais conteúdo</p>
            <div class="form_group_error">
                <input type="search" name="s" id="" placeholder="buscar conteúdo...">
                <button type="submit"><i class="bi bi-search"></i></button>
            </div>
        </form>
    </section>
</main>

<?php get_footer(); ?>