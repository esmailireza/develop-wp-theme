<?php

function theme_setup()
{
add_filter('show_admin_bar','__return_false');
};
add_action('after_setup_theme','theme_setup');
