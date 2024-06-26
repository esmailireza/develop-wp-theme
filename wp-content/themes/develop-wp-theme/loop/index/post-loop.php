<?php
$args = [
   'post_type' => 'post',
   'posts_per_page' => 4
//    'post_type' => 'post',
//    'tax_query' => array(
//        array(
//            'taxonomy' => 'category',
//            'field' => 'slug',
//            'terms' => 'php'
//        )
//    )
];
$the_query = new WP_Query($args);
?>

<?php if ($the_query->have_posts()): ?>
    <?php while ($the_query->have_posts()):$the_query->the_post(); ?>
        <div class="singles_items ">
            <div class="edu_cat">
                <div class="pic">
                    <div class="topic_level bg-info text-white">سطح : متوسط</div>
                    <div class="topic_cat bg-warning text-white">جاوااسکریپت</div>
                    <a class="pic-main" href="<?php echo get_the_title() ?>">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('', ['class' => 'img-responsive', 'alt' => get_the_title()]);
                        } else {
                            $thumb_logo = get_template_directory_uri() . '/assets/image/thumb-logo.jpg';
                            echo "<img class='img-fluid' src='$thumb_logo' alt='image' />";
                        }
                        ?>
                    </a>
                </div>
                <div class="edu_data singles_items_border_bottom">
                    <h4 class="title"><a href="<?php echo get_the_title() ?>"><?php echo get_the_title() ?></a></h4>
                    <ul class="meta d-flex mt-4">
                        <li class="d-flex align-items-center"><?php echo get_the_author() ?></li>
                        <li class="video d-flex align-items-center"><i class="ti-video-clapper"></i>ویدئو</li>
                        <li class="video d-flex align-items-center"><i class="ti-eye"></i>321</li>
                        <li class="d-flex align-items-center"><i
                                    class="ti-calendar theme-cl"></i><?php echo get_the_date('j F Y') ?></li>
                    </ul>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else: ?>
    <div class="alert alert-danger">هیج پستی یافت نشد!</div>
<?php endif; ?>