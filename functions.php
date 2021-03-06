<?php

add_theme_support( 'post-thumbnails' );

function css_files() {
    wp_enqueue_style('carousel', get_template_directory_uri() . '/styles/owl.carousel.min.css');
    wp_enqueue_style('carousel-theme', get_template_directory_uri() . '/styles/owl.theme.default.min.css');
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/styles/main.css');
    wp_enqueue_style('header', get_template_directory_uri() . '/styles/header.css');
    wp_enqueue_style('home', get_template_directory_uri() . '/styles/home.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/styles/footer.css');
    wp_enqueue_style('quem-somos', get_template_directory_uri() . '/styles/page-quem.css');
    wp_enqueue_style('servicos', get_template_directory_uri() . '/styles/page-servicos.css');
    wp_enqueue_style('contato', get_template_directory_uri() . '/styles/page-contato.css');
    wp_enqueue_style('blog', get_template_directory_uri() . '/styles/page-blog.css');
    wp_enqueue_style('fac', get_template_directory_uri() . '/styles/page-fac.css');
    wp_enqueue_style('singular', get_template_directory_uri() . '/styles/singular.css');
}

add_action('wp_enqueue_scripts', 'css_files');

function script_files(){
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js');
    wp_register_script( 'carrossel', get_template_directory_uri() . '/js/carrossel.js');
    wp_register_script( 'menu', get_template_directory_uri() . '/js/menu.js');
    wp_enqueue_script('jquery'); 
    wp_register_script('jquery_min', get_template_directory_uri() . '/js/jquery.min.js');
    wp_register_script('carousel', get_template_directory_uri() . '/js/owl.carousel.min.js');
    wp_register_script('main', get_template_directory_uri() . '/js/main.js');
}

add_action('wp_enqueue_scripts', 'script_files');
?>