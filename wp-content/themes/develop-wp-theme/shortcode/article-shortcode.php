<?php
function article_blockquote()
{
    return '<blockquote>&nbsp;
    <p class="text">با وجود کرونا برگزار شد. در بسیاری از مراکز پروتکل های بهداشتی به نحو احسن اجرا شد و در بعضی دیگر اصلا رعایت نشده بود. پس از کنکور اعلام شد که دانش آموزی خودکشی کرده و بسیاری از ماها که دیگر پا به سن گذاشته ایم غمگین شدیم که این همه جدال برای چه!!!</p>

<h5 class="name">- فرخ جوادی</h5>
</blockquote>';
}

add_shortcode('blockquote','article_blockquote');