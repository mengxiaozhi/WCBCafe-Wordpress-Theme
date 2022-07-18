<?php
 /*
 Template Name: menu
 */
 ?>

            <?php get_header(); ?> <!-- Wordpress header -->

            <div class="menu-content wrapper">
                <h2 class="page-title"><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div><!-- /.menu-content -->
        </div><!-- /#menu -->

        <div class="wrapper grid">
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu1.jpg" alt="">
                <p>照片說明照片說明照片說明照片說明</p>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu2.jpg" alt="">
                <p>照片說明照片說明照片說明照片說明</p>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu3.jpg" alt="">
                <p>照片說明照片說明照片說明照片說明</p>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu4.jpg" alt="">
                <p>照片說明照片說明照片說明照片說明</p>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu5.jpg" alt="">
                <p>照片說明照片說明照片說明照片說明</p>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu6.jpg" alt="">
                <p>照片說明照片說明照片說明照片說明</p>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu7.jpg" alt="">
                <p>照片說明照片說明照片說明照片說明</p>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu8.jpg" alt="">
                <p>照片說明照片說明照片說明照片說明</p>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu9.jpg" alt="">
                <p>照片說明照片說明照片說明照片說明</p>
            </div>
        </div><!-- /.grid -->

        <?php get_footer(); ?> <!-- Wordpress footer -->
