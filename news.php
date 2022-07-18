<?php
 /*
 Template Name: news
 */
 ?>

            <?php get_header(); ?> <!-- Wordpress header -->

            <div class="wrapper">
                <h2 class="page-title"><?php the_title(); ?></h2>
            </div><!-- /.wrapper -->
        </div><!-- /#news -->

        <div class="news-contents wrapper">
            <?php 
            global $post;
            if( have_posts() ) {
                while( have_posts() ){
                 
                    //獲取文章信息
                    the_post();
                    ?>
                    <article>
                        <header class="post-info">
                            <h2 class="post-title"><?php the_title(); ?></a></h2>
                            <p class="post-date"><?php the_time('F j'); ?> <span><?php the_time('Y'); ?></span></p>
                            <p class="post-cat">類別：<?php get_post_type()?></p>
                        </header>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <?php the_content() ?>
                    </article>
                    <?php
                }
            }else{
                echo ' 還沒有東西喔\(//∇//)\ ';
            }
             ?>

            <?php get_sidebar(); ?>
        </div><!-- /.news-contents -->

        <?php get_footer(); ?> <!-- Wordpress footer -->
