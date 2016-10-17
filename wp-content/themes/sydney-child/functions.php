<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // sydney theme

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


add_filter( 'wp_nav_menu_items', 'sydney_child_add_top_search_menu', 10, 2 );
function sydney_child_add_top_search_menu( $items, $args ) {
    if ($args->theme_location == 'primary') {
        $items .= '<li class="top-search-menu">'.get_search_form(false).'</li>';
    }
    return $items;
}
?>

