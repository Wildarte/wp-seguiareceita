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
            'id' => 'sidebar-1',
            'description' => 'Sidebar superior da homepage',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        ]);

    }
    add_action('widgets_init', 'wp_my_sidebars');
?>