<!DOCTYPE html>
<html lang="zh-Hant-TW">
    <head>
        <meta charset="utf-8">
        <title>WCB Cafe - NEWS</title>
        <meta name="description" content="提供綜合咖啡與健康有機食物的咖啡店">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
    </head>

    <body>
        <div id="news" class="big-bg">
            <?php get_header(); ?> <!-- Wordpress header -->

            <div class="wrapper">
                <h2 class="page-title">News</h2>
            </div><!-- /.wrapper -->
        </div><!-- /#news -->

        <div class="news-contents wrapper">
            <article>
                <header class="post-info">
                    <h2 class="post-title">店內畫作全面更新</h2>
                    <p class="post-date">3/30 <span>2019</span></p>
                    <p class="post-cat">類別：店內介紹</p>
                </header>
                <img src="images/wall.jpg" alt="店內環境">
                <p>
                    WCB CAFE提供有益健康的自然食物，主要的特色是菜單選用了無人工添加物的食材。
                    請用好喝的綜合咖啡與健康的有機食物由體內開始療癒身心。
                    WCB CAFE提供有益健康的自然食物，主要的特色是菜單選用了無人工添加物的食材。
                    請用好喝的綜合咖啡與健康的有機食物由體內開始療癒身心。
                </p>
                <p>
                    WCB CAFE提供有益健康的自然食物，主要的特色是菜單選用了無人工添加物的食材。
                    請用好喝的綜合咖啡與健康的有機食物由體內開始療癒身心。
                    WCB CAFE提供有益健康的自然食物，主要的特色是菜單選用了無人工添加物的食材。
                    請用好喝的綜合咖啡與健康的有機食物由體內開始療癒身心。
                    WCB CAFE提供有益健康的自然食物，主要的特色是菜單選用了無人工添加物的食材。
                    請用好喝的綜合咖啡與健康的有機食物由體內開始療癒身心。
                </p>
                <p>WCB CAFE提供有益健康的自然食物。</p>
            </article>

            <aside>
                <h3 class="sub-title">類別</h3>
                <ul class="sub-menu">
                    <li><a href="#">店內介紹</a></li>
                    <li><a href="#">期間限定菜單</a></li>
                    <li><a href="#">優惠活動</a></li>
                    <li><a href="#">與顧客對話</a></li>
                </ul>

                <h3 class="sub-title">關於本店</h3>
                <p>
                    WCB CAFE提供有益健康的自然食物，主要的特色是菜單選用了無人工添加物的食材。
                    請用好喝的綜合咖啡與健康的有機食物由體內開始療癒身心。
                </p>
            </aside>
        </div><!-- /.news-contents -->

        <?php get_footer() ?> <!-- Wordpress footer -->
    </body>
</html>
