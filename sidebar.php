<aside>
    <?php if(is_dynamic_sidebar()){ dynamic_sidebar();} else{ ?>
        <h3 class="sub-title">類別</h3>
        <ul class="sub-menu">
            <?php wp_list_cats(); ?>
        </ul>
    <?php } ?>
</aside>
<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('widgetized-area')) : else : ?>
<?php endif; ?>