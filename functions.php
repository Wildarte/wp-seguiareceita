<?php

    //carregar scripts e folhas de estilo
    function load_scripts(){

        wp_enqueue_style('icons', get_template_directory_uri().'/assets/bootstrap-icons-1.8.1/bootstrap-icons.css', [], '1.8.1', 'all');
        wp_enqueue_style('owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', [], '1.0', 'all');
        wp_enqueue_style('owl-theme', get_template_directory_uri().'/assets/css/owl.theme.default.min.css', [], '1.0', 'all');
        wp_enqueue_style('m-carousel', get_template_directory_uri().'/assets/css/m-carousel.css', [], '1.0', 'all');
        wp_enqueue_style('reset', get_template_directory_uri().'/assets/css/reset.css', [], '1.0', 'all');
        wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css', [], '1.0', 'all');
        wp_enqueue_style('post', get_template_directory_uri().'/assets/css/post.css', [], '1.0', 'all');
        wp_enqueue_style('archive', get_template_directory_uri().'/assets/css/archive.css', [], '1.0', 'all');

        wp_enqueue_script('m-jquery', get_template_directory_uri().'/assets/js/jquery-3.6.0.min.js', [], '1.0', true);
        wp_enqueue_script('owl-carousel-js', get_template_directory_uri().'/assets/js/owl.carousel.min.js', ['jquery'], '1.0', true);
        wp_enqueue_script('script', get_template_directory_uri().'/assets/js/script.js', [], '1.0', true);

    }
    add_action('wp_enqueue_scripts', 'load_scripts');

    // gerenciamento de logo
    function ed_custom_logo() {
        add_theme_support('custom-logo'); 
    }
    add_action('after_setup_theme', 'ed_custom_logo'); // carrega parametros de suporte do tema


    function wp_my_sidebars(){

        register_sidebar([
            'name' => 'Home Page Sidebar One',
            'id' => 'sidebar-home-one',
            'description' => 'Sidebar superior da homepage',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        ]);

        register_sidebar([
            'name' => 'Home Page Sidebar Two',
            'id' => 'sidebar-home-two',
            'description' => 'Sidebar inferior da homepage',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        ]);

    }
    add_action('widgets_init', 'wp_my_sidebars');


    function wpmenus(){

        register_nav_menus([
            'main_menu' => 'Main Menu',
            'secondary_menu' => 'Menu Secundário'
        ]);

    }
    add_action('after_setup_theme', 'wpmenus');



    //================== adiciona a coluna com o ID na listagem de posts ========================================
    function add_column( $columns ){
        $columns['post_id_clmn'] = 'ID'; // $columns['Column ID'] = 'Column Title';
        return $columns;
    }
    add_filter('manage_posts_columns', 'add_column', 5);
    
    function column_content( $column, $id ){
        if( $column === 'post_id_clmn')
            echo $id;
    }
    add_action('manage_posts_custom_column', 'column_content', 5, 2);

    add_theme_support('post-thumbnails'); //adiciona a boxmeta para adicionar thumbnail no post

    add_image_size('thumb-destaque-top', '880', '390', 'center'); //adiciona um novo tipo de tamanho de thumbnail

    


    //função para pegar texto alternativo da imagem ========================================================
    function get_image_alt($id_page){

        $id_image = get_post_thumbnail_id($id_page);

        $alt_text = get_post_meta($id_image, '_wp_attachment_image_alt', true);

        return $alt_text;

    }
    //função para pegar texto alternativo da imagem ========================================================



    include('admin/control.php');


?>