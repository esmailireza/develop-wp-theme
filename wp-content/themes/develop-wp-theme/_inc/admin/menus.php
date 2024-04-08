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
    if (isset($_POST['btn-submit'])) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!get_option('_wl_word')) {
                add_option('_wl_word', $_POST['filter_word']);
            } else {
                update_option('_wl_word', $_POST['filter_word']);
            }
        }
    }
    echo '
    <h2>صفحه تنظیمات پلاگین:</h2>
    <div style="width: 100%; height: 100%; background-color: #fff; padding: 3px">
    <form action="" method="post">
    <textarea style="width: 100%" name="filter_word" id="" rows="10" placeholder="کلماتی که قصد دارید به لینک تبدیل شوند را وارد نمایید و آنها را با کاما جدا کنید"></textarea>
    <input type="submit" name="btn-submit" value="دخیره" style="margin-top: 20px;">
</form>
</div>
    ';
}