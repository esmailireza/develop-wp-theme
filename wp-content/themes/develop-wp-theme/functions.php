<?php

include_once '_inc/theme-setup/theme_setup.php';
include '_inc/admin/vip-post-type.php';
include '_inc/admin/taxonomy-post-type.php';
add_theme_support('post-thumbnails');

function remove_img_attr($html){
    return preg_replace('/(width|height)="\d+"\s/',replacement: "",subject: $html);
}
add_filter('post_thumbnail_html','remove_img_attr');