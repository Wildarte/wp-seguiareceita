<?php

    if(is_active_sidebar('sidebar-home-two')):
        ?>
        <aside class="sidebar_2" style="<?= is_single() ? "margin-top: 20px" : ""; ?>">
        <?php
        dynamic_sidebar('sidebar-home-two');
        ?>
        </aside>
        <?php
    else:

        echo "ainda não tem widgets";

    endif;

?>