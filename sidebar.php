<aside>
    <?php if(is_dynamic_sidebar()){ dynamic_sidebar();} else{ ?>
        <h3 class="sub-title">類別</h3>
        <ul class="sub-menu">
            <?php wp_list_cats(); ?>
        </ul>
    <?php } ?>

        <h3 class="sub-title">關於本店</h3>
        <p>
            WCB CAFE提供有益健康的自然食物，主要的特色是菜單選用了無人工添加物的食材。
            請用好喝的綜合咖啡與健康的有機食物由體內開始療癒身心。
        </p>
</aside>