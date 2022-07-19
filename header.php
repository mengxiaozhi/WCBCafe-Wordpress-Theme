<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo( 'name' ); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
        <?php wp_head(); ?>
    </head>

    <body>
        <div id="home" class="big-bg">
            <header class="page-header wrapper">
                <h1>
                    <a href="<?php echo home_url(); ?>">
                    <div class="logo">
                    <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                if ( has_custom_logo() ) {
                                    echo '<img src="'. esc_url( $logo[0] ) .'">';
                        } else {
                                echo '<h1>'. esc_attr( get_bloginfo( 'name' ) ) .'</h1>';
                        } ?>
                    </div>
                    </a>
                </h1>
                <nav>
                    <ul class="main-nav">
                        <?php wp_nav_menu(array('container' => false,'items_wrap' => '%3$s','theme_location' => 'custom-menu')); ?>
                    </ul>
                </nav>
            </header>