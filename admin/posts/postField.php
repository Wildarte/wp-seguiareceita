<?php

function cmb2_posts(){

    $cmb_show_receita = new_cmb2_box([
        'id' => 'box_show_receitas',
        'title' => 'Exibir Receita',
        'object_types' => 'post'
    ]);

    $cmb_show_receita->add_field( array(
        'name' => 'Exibir receita na página',
        'desc' => '',
        'id'   => 'show_receita',
        'type' => 'checkbox',
        'attributes' => [
            'checked' => true
        ]
    ) );

    $cmb_posts = new_cmb2_box([
        'id' => 'box_receitas',
        'title' => 'Ingredientes',
        'object_types' => 'post'
    ]);

    $group_ingredientes = $cmb_posts->add_field([
        'name' => 'Aidicone os Ingredientes',
        'id' => 'ingredientes_list',
        'type' => 'group',
        'options'     => array(
            'group_title'       => __( 'ingrediente {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Ingrediente', 'cmb2' ),
            'remove_button'     => __( 'Remove Ingrediente', 'cmb2' ),
            'sortable'          => true,
            // 'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ]);

    $cmb_posts->add_group_field( $group_ingredientes, array(
        'name' => 'Ingrediente',
        'id'   => 'ingrediente_item',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );

    $cmb_preparo = new_cmb2_box([
        'id' => 'box_modo_preparo',
        'title' => 'Modo de preparo',
        'object_types' => 'post'
    ]);

    $cmb_preparo->add_field([
        'name' => 'Modo de preparo',
        'id' => 'preparo_receita',
        'type' => 'wysiwyg',
        'desc' => 'Descreva a forma de prepado da receita',
        'options' => array(
            'wpautop' => true, // use wpautop?
            'media_buttons' => false, // show insert/upload button(s)
            'textarea_rows' => get_option('default_post_edit_rows', 10), // rows="..."
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the `<style>` tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (needs specific css)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()
        ),
    ]);

}
add_action('cmb2_admin_init', 'cmb2_posts');


?>