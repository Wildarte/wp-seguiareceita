<?php

add_submenu_page(
    'theme-options',
    'Posts',
    'Posts',
    'manage_options',
    'options_posts',
    'callback_posts'
);

function callback_posts(){
    ?>

        <div>

            <?php settings_errors(); ?>
            <h1>Posts</h1>
            <form action="options.php" method="post">
                <?php

                    settings_fields("posts_section");

                    do_settings_sections("options_posts");

                    submit_button();

                ?>
            </form>

        </div>

    <?php
}

function display_fields_posts(){

    add_settings_section('posts_section','','display_posts_options_content','options_posts');

    add_settings_field('show_posts_destaque_top', 'Post de destaque', 'display_posts_destaque_top', 'options_posts', 'posts_section');
    add_settings_field('show_posts_destaque_list', 'Post de destaque', 'display_posts_destaque_list', 'options_posts', 'posts_section');

    register_setting('posts_section','show_posts_destaque_top');
    register_setting('posts_section','show_posts_destaque_list');
    
}
add_action('admin_init', 'display_fields_posts');


function display_posts_options_content(){
    ?>
        <hr>
        <h1></h1>
    <?php
}

function display_posts_destaque_top(){
    ?>

        <input type="text" name="show_posts_destaque_top" id="show_posts_destaque_top" value="<?= get_option('show_posts_destaque_top') ?>"> Primeiro Post de Destaque

    <?php
}

function display_posts_destaque_list(){
    $posts_selected = get_option('show_posts_destaque_list')
    ?>

    <style>
        .selected_posts li{
            display: block;
            max-width: 500px;
        }
        .selected_posts li span{
            cursor: pointer;
            font-size: 1.5em;
            color:  red;
        }
        .selected_posts li input{
            width: 90%;
        }
    </style>

        <input type="text" name="" id="post_select" placeholder="coloque o ID do Post">

        <button id="btnAddPost">Add</button>

        <div>
            <br>
            <strong>
                Posts:
            </strong>

            <ul class="selected_posts">
                <?php

                    for($i = 0; $i < count($posts_selected); $i++){

                        echo '<li><input type="text" name="show_posts_destaque_list[]" id="show_posts_destaque_list" value="'.$posts_selected[$i].'" readonly> <span>X</span></li>';

                    }
                
                ?>
                
            </ul>

        </div>

        <script>
            const btnAddPost = document.getElementById('btnAddPost');
            const listPosts = document.querySelector('.selected_posts');

            const itensLista = document.querySelectorAll('.selected_posts li');

            btnAddPost.addEventListener('click', (e) => {

                e.preventDefault();

                let vl = document.getElementById('post_select').value;

                if(vl != ""){

                    let newLi = document.createElement('li');

                    newLi.innerHTML = '<input type="text" name="show_posts_destaque_list[]" value="'+vl+'" readonly> <span>X</span>';

                    listPosts.append(newLi);

                }else{
                    alert('preencha o campo com o ID do Post');
                }

                console.log(vl);

            });

            itensLista.forEach((item) => {

                item.addEventListener('click', function(){

                    item.parentNode.removeChild(this);

                })

            });
        </script>

    <?php
}


?>