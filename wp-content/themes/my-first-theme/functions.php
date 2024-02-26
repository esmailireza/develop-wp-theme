<?php
echo "<br>";

var_dump("hello world!!");
function custom_js ()
{
    echo "<script>alert('hello');</script>";
}
add_action('wp_footer','custom_js');