<?php
add_action('admin_menu','wl_register_menus');

function wl_register_menus()
{
    add_menu_page(
        'فیلتر منو',
        'فیلتر منو',
    'manage_options',
    'wl_settings',
    'wl_settings_handler',
    'dashicons-admin-page',
    '8');
}
function wl_settings_handler()
{
    echo 'good job!!';
}