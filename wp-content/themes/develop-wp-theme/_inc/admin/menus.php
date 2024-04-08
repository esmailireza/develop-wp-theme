<?php
add_action('admin_menu','wl_register_menus');

function wl_register_menus()
{
    add_menu_page(
        'فیلتر منو',
        'فیلتر منو',
    'manage_options',
    'wl_home',
    'wl_home_handler',
    'dashicons-admin-page',
    '8');

add_submenu_page(
 'wl_home',
'تنظیمات',
'تنظیمات',
'manage_options',
'wl_setting',
'wl_setting_handler'
);
}
function wl_home_handler()
{
    echo '<h2>good job!!</h2>';
}

function wl_setting_handler()
{
    echo '<h2>good job firs item!</h2>';
}