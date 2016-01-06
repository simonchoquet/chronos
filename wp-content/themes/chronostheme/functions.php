<?php

add_theme_support('post_thumbnails');

/*********   Hooks   *********/

add_filter("wp_login", "redirigeHome");
add_filter("wp_logout", "redirigeHome");

function redirigeHome(){
    wp_redirect(home_url());
    exit;
}

function admin_css() {

    $admin_handle = 'admin_css';
    $admin_stylesheet = get_template_directory_uri() . '/css/admin.css';

    wp_enqueue_style( $admin_handle, $admin_stylesheet );
}
add_action('admin_print_styles', 'admin_css', 11 );