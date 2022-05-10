<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segui a Receita</title>
    <!-- wp header -->
    <?php wp_head(); ?>
    <!-- wp header -->
</head>
<body style="background-color: <?= is_single() ? "#F0F0F0" : ""; ?>">

    <header class="header">
        <div class="header_content container_full">
            <div class="header_top">
                <div class="header_top_content container">
                    <div class="header_logo">
                        <?php
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        ?>
                        <a href="<?= get_home_url(); ?>">
                            <img src="<?= $logo[0] ?>" alt="logo seguiareceita">
                        </a>
                        <div class="header_social_response">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                    <div class="header_form">
                        <form action="<?= get_home_url() ?>">
                            <input type="search" name="s" id="" placeholder="buscar receitas...">
                            <button type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div>

                    <div class="header_social">
                        <a href="https://www.facebook.com/seguiareceita"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/seguiareceita.of/"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
                
            </div>
            <div class="opt_top">
                <div class="opt_top_content container">
                    <div class="btn_menu_one">
                        <i class="bi bi-list"></i>
                    </div>
                    <?php wp_nav_menu(['theme_location' => 'main_menu']) ?>
                </div>
                
            </div>
        </div>
    </header>