<?php

function theme_setup()
{
add_filter('show_admin_bar','__return_false');
//REGISTER MENU
    register_nav_menu('top nav','منوی اصلی بالای سایت');
    require_once get_template_directory().'/class/nav-walker/WpBootstrapNavWalker.php';
};
add_action('after_setup_theme','theme_setup');
