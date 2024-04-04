<?php
function custom_post_type_vip() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'نوشته‌های ویژه', 'Post Type General Name', 'twentytwentyone' ),
        'singular_name'       => _x( 'vip posts', 'Post Type Singular Name', 'twentytwentyone' ),
        'menu_name'           => __( 'نوشته های ویژه', 'twentytwentyone' ),
        'parent_item_colon'   => __( 'نوشته والد', 'twentytwentyone' ),
        'all_items'           => __( 'همه نوشته های ویژه', 'twentytwentyone' ),
        'view_item'           => __( 'مشاهده نوشته', 'twentytwentyone' ),
        'add_new_item'        => __( 'ایجاد نوشته تازه', 'twentytwentyone' ),
        'add_new'             => __( 'اضافه کردن نوشته ویژه ', 'twentytwentyone' ),
        'edit_item'           => __( 'ویرایش نوشته vip', 'twentytwentyone' ),
        'update_item'         => __( 'بروزرسانی نوشته', 'twentytwentyone' ),
        'search_items'        => __( 'جستجوی نوسته ها', 'twentytwentyone' ),
        'not_found'           => __( 'نوشته ای پیدا نشد', 'twentytwentyone' ),
        'not_found_in_trash'  => __( 'نوشته ای در زباله دان نیست', 'twentytwentyone' ),
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => 'نوشته های ویژه',
        'description'         => __( '', 'twentytwentyone' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'genre' ),

        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type( 'vip posts', $args );

}

add_action( 'init', 'custom_post_type_vip');