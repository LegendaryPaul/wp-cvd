<?php
function cvd_custom_post(){
    $cvd_label = array(
        'name'          => __('Cvd Post', 'textdomain'),
        'singular_name' => __('Cvd Post','textdomain'),
        'add_new'       => __('Add Cvd Post', 'textdomain'),
        'add_new_item'  => __('Add New Cvd Post', 'textdomain'),
        'edit_item'     => __('Edit Cvd Post', 'textdomain'),
        'all_items'     => __('Cvd Post', 'textdomain')
    );
    $cvd_args = array(
        'labels'             => $cvd_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('category', 'post_tag'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    
    register_post_type('cvdPost', $cvd_args);
}
add_action('init', 'cvd_custom_post');