<?php

function wa_register_dashboard_widgets()
{
    wp_add_dashboard_widget(
        'wa_widget',
        'اطلاعات عمومی',
        'wa_get_some_data',
        '',
        '',
        '',
        ''
    );
}
function wa_get_some_data()
{
    echo "reza";
    $result = count_users();
    $count_posts = wp_count_posts();
    echo 'تعداد کاربران سایت: '.$result['total_users'].' نفر است';
    echo '<br>';
    echo 'تعداد پستهای سایت: '.$count_posts->publish.' تا میباشد.';
}
add_action('wp_dashboard_setup','wa_register_dashboard_widgets');