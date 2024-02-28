<?php get_header(name: '',args: '') ?>
<body>
<h2>front-page page</h2>
<?php get_template_part(slug: 'partials/index',name: 'comments') ?>
<?php get_template_part(slug: 'partials/index',name: 'content') ?>
<?php get_template_part(slug: 'partials/index',name: 'course') ?>
<?php get_template_part(slug: 'partials/index',name: 'slider') ?>
<?php get_template_part(slug: 'partials/index',name: 'vip') ?>

</body>
<?php get_footer(name: '',args: '') ?>