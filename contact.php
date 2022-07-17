<!DOCTYPE html>
<html lang="zh-Hant-TW">
    <head>
        <meta charset="utf-8">
        <title>WCB Cafe - CONTACT</title>
        <meta name="description" content="提供綜合咖啡與健康有機食物的咖啡店">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
    </head>

    <body>
        <div id="contact" class="big-bg">
            <?php get_header(); ?> <!-- Wordpress header -->

            <div class="wrapper">
                <h2 class="page-title">Contact</h2>
                <form action="#">
                    <div>
                        <label for="name">姓名</label>
                        <input type="text" id="name" name="your-name">
                    </div>

                    <div>
                        <label for="email">電子郵件</label>
                        <input type="email" id="email" name="your-email">
                    </div>

                    <div>
                        <label for="message">詢問內容</label>
                        <textarea id="message" name="your-message"></textarea>
                    </div>

                    <input type="submit" class="button" value="送出">
                </form>
            </div><!-- /.wrapper -->
        </div><!-- /#contact -->

        <section id="location">
            <div class="wrapper">
                <div class="location-info">
                    <h3 class="sub-title">Cafe 東站前店</h3>
                    <p>
                        地址： 東京都〇〇區<br>
                        〇〇〇〇〇〇〇 000-22-1<br>
                        〇〇〇〇<br>
                        電話： 03-1111-1111<br>
                        營業時間： 10:00〜20:00<br>
                        公休日：星期三
                    </p>
                </div><!-- /.location-info -->
                <div class="location-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.4466958110115!2d139.73464221478676!3d35.66600153841542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b835942e165%3A0xb4897f1f4264c771!2z44CSMTA2LTAwMzIg5p2x5Lqs6YO95riv5Yy65YWt5pys5pyo77yS5LiB55uu77yU4oiS77yV!5e0!3m2!1sja!2sjp!4v1543466837094" width="800" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div><!-- /.location-map -->
            </div><!-- /.wrapper -->
        </section><!-- /#location -->

        <section id="sns">
            <div class="wrapper">
                <div class="sns-box">
                    <h3 class="sub-title">Facebook</h3>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fwebcreatorbox.fb%2F&tabs=timeline&width=340&height=315&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=229812980409867" width="340" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>

                <div class="sns-box">
                    <h3 class="sub-title">Twitter</h3>
                    <a class="twitter-timeline" data-height="315" href="https://twitter.com/webcreatorbox?ref_src=twsrc%5Etfw">Tweets by webcreatorbox</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>

                <div class="sns-box">
                    <h3 class="sub-title">Youtube</h3>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/zbOX90Sr3mk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div><!-- /.wrapper -->
        </section><!-- /#sns -->

        <?php get_footer() ?> <!-- Wordpress footer -->
    </body>
</html>
