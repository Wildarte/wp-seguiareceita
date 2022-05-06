<?php

    function add_new_menu_itens(){

        add_menu_page(
            'Configuração do tema',
            'Configuração do tema',
            '',
            'theme-options',
            100
        );

        include('fields/controlBanners.php');
        include('fields/controlPosts.php');

    }
    add_action('admin_menu', 'add_new_menu_itens')

?>