<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
<div class="article_detail_wrapss single_article_wrap format-standard">
        <div class="article_body_wrap">

            <div class="article_featured_image">
                <?php
                if (has_post_thumbnail()){
                    the_post_thumbnail('full',['class' => 'img-fluid','alt'=> get_the_title()]);
                }else{
                    echo '<img src="http://localhost/wordpress.exp/wordpress/wp-content/uploads/2024/03/thumb-logo.jpg" class="img-fluid" alt="image" >';
                }
                ?>
            </div>

            <div class="article_top_info">
                <ul class="article_middle_info">
                    <li><a href="#"><span class="icons"><i class="ti-user"></i></span>توسط <?php echo get_the_author()?></a></li>
<li><a href="#"><span class="icons"><i class="ti-comment-alt"></i></span>45 نظر ثبت شده</a></li>
</ul>
</div>
<?php echo the_content(); ?>
<div class="article_bottom_info">
    <div class="post-tags">
        <h4 class="pbm-title">تگ های پربازدید</h4>
        <ul class="list">
            <li><a href="#">کنکور</a></li>
            <li><a href="#">موفقیت</a></li>
            <li><a href="#">تدریس</a></li>
        </ul>
    </div>
    <div class="post-share">
        <h4 class="pbm-title">شبکه های اجتماعی</h4>
        <ul class="list">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="#"><i class="fab fa-vk"></i></a></li>
            <li><a href="#"><i class="fab fa-tumblr"></i></a></li>
        </ul>
    </div>
</div>
<?php get_template_part('partials/single/pagination','pagination') ?>
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
