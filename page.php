<?php get_header(); ?> <!-- Wordpress header -->

            <div class="menu-content wrapper">
                <h2 class="page-title"><?php the_title(); ?></h2>
            </div><!-- /.menu-content -->
        </div><!-- /#menu -->

        <div class="wrapper grid">
            <?php the_content(); ?>
        </div><!-- /.grid -->

        <?php get_footer(); ?> <!-- Wordpress footer -->