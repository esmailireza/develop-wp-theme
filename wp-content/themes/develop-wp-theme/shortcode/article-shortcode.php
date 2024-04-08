<?php
function article_blockquote($content=null): string
{
    return '
<blockquote>
    <span class="icon"><i class="fas fa-quote-right"></i></span>
    <p class="text">'.implode('',$content).'</p>
<h5 class="name">- فرخ جوادی</h5>
</blockquote>';}

add_shortcode('blockquote','article_blockquote');

function test_shortcode($content=null): string
{
    return '<h2>'.implode($content).'</h2>';
}

add_shortcode('test','test_shortcode');