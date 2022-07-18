<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo( 'name' ); ?></title>
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
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
                <h1><a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="WCB CAFE 首頁"></a></h1>
                <nav>
                    <ul class="main-nav">
                        <?php wp_nav_menu( array(
                            'container' => false,
                            'items_wrap' => '%3$s'
                        )); 
                        ?>
                    </ul>
                </nav>
            </header>