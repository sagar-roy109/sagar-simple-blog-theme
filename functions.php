<?php

function sagar_loader(){
    load_theme_textdomain("sagar");
    add_theme_support("title-tag");
    add_theme_support("post-thumbnailns");
    add_theme_support('custom-header', array(
        'default-text-color'     => "#dd3333",
        'header-text'           => true,
    ));

    add_theme_support("custom-logo", array(
        "width"     => 200,
        "height"    => 200,

    ));
    register_nav_menu('header', __("Header Menu","sagar"));
    register_nav_menu('footer',__("Footer Menu","sagar"));


}
add_action("after_setup_theme", "sagar_loader" );


/**
 * Theme Style files
 */

function sagar_theme_style(){

    wp_enqueue_style("bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
    wp_enqueue_style("sagar-style",get_stylesheet_uri(),"bootstrap", time()+1);
   
}

add_action("wp_enqueue_scripts","sagar_theme_style");


/**
 * Sidebar or widget registration
 */

function sagar_widgets(){

    register_sidebar( array(
        "name" => __("Single Post Sidebar","sagar"),
        "id" => "single_post_sidebar",
        "description" => __("This is single post side bar", "sagar")
    ) );


    register_sidebar( array(
        "name" => __("Footer left sidebar","sagar"),
        "id" => "footer_left",
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));

    register_sidebar( array(
        "name" => __("Footer right sidebar","sagar"),
        "id" => "footer_right",
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));
}

add_action("widgets_init","sagar_widgets");



include('dynamic-styles/dynamic-style.php');

