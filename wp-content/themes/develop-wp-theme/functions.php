<?php

include_once '_inc/theme-setup/theme_setup.php';
include '_inc/admin/vip-post-type.php';
include '_inc/admin/taxonomy-post-type.php';
include 'shortcode/article-shortcode.php';
include '_inc/admin/menus.php';
define('WL_PLUGIN_DIR',plugin_dir_path(__FILE__));
const WL_PLUGIN_INC = WL_PLUGIN_DIR.'_inc/';
add_theme_support('post-thumbnails');

if (is_admin()){
    include WL_PLUGIN_INC.'admin/widgets.php';
}

function remove_img_attr($html){
    return preg_replace('/(width|height)="\d+"\s/',replacement: "",subject: $html);
}
add_filter('post_thumbnail_html','remove_img_attr');