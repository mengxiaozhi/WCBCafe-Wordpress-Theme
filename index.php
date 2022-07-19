            <?php get_header(); ?> <!-- Wordpress header -->

            <div class="home-content wrapper">
                <h2 class="page-title"><?php echo get_bloginfo( 'name' ); ?></h2>
                <a class="button" href="/menu/">菜單介紹</a>
            </div><!-- /.home-content -->
        </div><!-- /#home -->

        <div class="news-contents wrapper">
        <article>
            <?php 
                if( have_posts() ) {
                    while( have_posts() ){
                    
                        //獲取文章信息
                        the_post();
                        ?>
                            <header class="post-info">
                                <h2 class="post-title"><?php the_title(); ?></a></h2>
                                <p class="post-date"><?php the_time('m'); ?>/<?php the_time('d'); ?> <span><?php the_time('Y'); ?></span></p>
                                <p class="post-cat">類別：<?php get_post_type()?></p>
                            </header>
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            <?php the_content() ?>
                        <?php
                    }
                }else{
                    echo ' 還沒有東西喔\(//∇//)\ '; //被王復來偷走了
                }
             ?>
            </article>
            <?php get_sidebar(); ?>
        </div><!-- /.news-contents -->

        <?php get_footer(); ?> <!-- Wordpress footer -->
