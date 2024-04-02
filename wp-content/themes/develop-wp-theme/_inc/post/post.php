<?php
//DEFAULT IMAGE FOR POSTS
function lt_default_post_thumbnail():string
{
    $thumb_logo = get_template_directory_uri().'/assets/image/thumb-logo.jpg';
return "<img class='img-fluid' 
src='$thumb_logo'
alt='image' />";
}