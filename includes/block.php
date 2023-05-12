<?php


    function cvd_custom_block(){
        if(function_exists('acf_register_block_type')){
            acf_register_block_type(
                array(
                    'name' => 'cvd-contact',
                    'title' => 'Cvd contact',
                    'render_template' => 'templates/blocks/block-page-contact.php',
                    'category'    => 'common',
                    'icon'      => 'admin-comments',
                    'mode'      => 'edit'
                ));
        }
    }

    add_action('acf/init', 'cvd_custom_block');