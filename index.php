<!DOCTYPE html>
<html lang="zh-Hant-TW">
    <head>
        <meta charset="utf-8">
        <title>WCB Cafe</title>
        <meta name="description" content="提供綜合咖啡與健康有機食物的咖啡店">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
    </head>

    <body>
        <div id="home" class="big-bg">
            <?php get_header(); ?> <!-- Wordpress header -->

            <div class="home-content wrapper">
                <h2 class="page-title"><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <a class="button" href="menu.html">菜單介紹</a>
            </div><!-- /.home-content -->
        </div><!-- /#home -->
        <?php get_footer(); ?> <!-- Wordpress footer -->
    </body>
</html>
