<?php

    if(is_active_sidebar('sidebar-home-one')):
        ?>
        <aside class="sidebar_1">
        <?php
        dynamic_sidebar('sidebar-home-one');
        ?>
        </aside>
        <?php
    else:

        echo "ainda não tem widgets";

    endif;

?>