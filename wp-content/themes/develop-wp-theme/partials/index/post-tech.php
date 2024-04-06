<!-- ========================== post tech Section =============================== -->
<section class="min-sec">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="sec-heading-flex">
                    <h2 class="pl-2">آخرین اخبار دنیای تکنولوژی</h2>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Single Article -->
            <?php
            $the_query = new WP_Query(['author'=> get_current_user_id()]);
            ?>
            <?php if ($the_query ->have_posts()): ?>
                <?php while ($the_query->have_posts()):$the_query->the_post(); ?>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="articles_grid_style">
                            <div class="articles_grid_thumb">
                                <?php
                                if (has_post_thumbnail()){
                                    the_post_thumbnail('full',['class' => 'img-fluid','alt'=> get_the_title()]);
                                }else{
                                    echo '<img src="http://localhost/wordpress.exp/wordpress/wp-content/uploads/2024/03/thumb-logo.jpg" class="img-fluid" alt="image" >';
                                }
                                ?>
                            </div>

                            <div class="articles_grid_caption">
                                <h4><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
                                <div class="articles_grid_author">
                                    <div class="articles_grid_author_img"><img src="<?php echo get_template_directory_uri().'/assets/image/user-1.jpg'?>" class="img-fluid" alt="" /></div>
                                    <h4>آدام ویلسون</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="alert alert-danger">هیج پستی یافت نشد!</div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- ========================== post tech Section =============================== -->