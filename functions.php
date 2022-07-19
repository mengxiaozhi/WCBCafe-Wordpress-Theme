<?php
    add_theme_support( 'post-thumbnails' );
    //自定圖片

    function wpb_custom_new_menu() {
        register_nav_menu('custom-menu',__( 'Custom Menu' ));
      }
      add_action( 'init', 'wpb_custom_new_menu' );
      //自定菜單

      add_theme_support( 'custom-logo' );
      //自定義網站LOGO

      if (function_exists('register_sidebar')) {

        register_sidebar(array(
          'name' => '文章小工具区域',
          'id'   => 'widgetized-area',
          'description'   => '这里是小工具描述.'
        ));
      
      }
      //自定義小工具
?>
