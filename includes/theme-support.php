<?php

function physionic__support(){

    register_nav_menus(array(
        'header_menu' => __('header Menu', 'text_domain')
    ));

    add_theme_support('menus');
    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'physionic__support');