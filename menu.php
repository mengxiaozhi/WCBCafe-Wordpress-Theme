<?php
 /*
 Template Name: menu
 */
 ?>

<!DOCTYPE html>
<html lang="zh-Hant-TW">
    <head>
        <meta charset="utf-8">
        <title>WCB Cafe - MENU</title>
        <meta name="description" content="提供綜合咖啡與健康有機食物的咖啡店">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
    </head>

    <body>
        <div id="menu" class="big-bg">
            <?php get_header(); ?> <!-- Wordpress header -->

            <div class="menu-content wrapper">
                <h2 class="page-title">Menu</h2>
                <p>
                    WCB CAFE提供有益健康的自然食物，主要的特色是菜單選用了無人工添加物的食材。
                    請用好喝的綜合咖啡與健康的有機食物由體內開始療癒身心。
                </p>
            </div><!-- /.menu-content -->
        </div><!-- /#menu -->

        <div class="wrapper grid">
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/menu1.jpg" alt="">
                <p>照片說明照片說明照片說明照片說明</p>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/menu2.jpg" alt="">
                <p>照片說明照片說明照片說明照片說明</p>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/menu3.jpg" alt="">
                <p>照片說明照片說明照片說明照片說明</p>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/menu4.jpg" alt="">
                <p>照片說明照片說明照片說明照片說明</p>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/menu5.jpg" alt="">
                <p>照片說明照片說明照片說明照片說明</p>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/menu6.jpg" alt="">
                <p>照片說明照片說明照片說明照片說明</p>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/menu7.jpg" alt="">
                <p>照片說明照片說明照片說明照片說明</p>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/menu8.jpg" alt="">
                <p>照片說明照片說明照片說明照片說明</p>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/menu9.jpg" alt="">
                <p>照片說明照片說明照片說明照片說明</p>
            </div>
        </div><!-- /.grid -->

        <?php get_footer(); ?> <!-- Wordpress footer -->
    </body>
</html>
