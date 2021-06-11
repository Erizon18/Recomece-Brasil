<?php

function css_files() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/styles/main.css');
    wp_enqueue_style('header', get_template_directory_uri() . '/styles/header.css');
    wp_enqueue_style('home', get_template_directory_uri() . '/styles/home.css');
}

add_action('wp_enqueue_scripts', 'css_files');

function script_files(){
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js');
}

add_action('wp_enqueue_scripts', 'script_files')

?>