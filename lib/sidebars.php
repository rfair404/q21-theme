<?php 

/*
* Registers the sidebars
* @package h5b
*/ 


register_sidebar(array(
    'name'=>'Header Sidebar',
    'id' => 'header-sidebar',
    'description' => 'This is the header widget area.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget'  => '</div>',
    'before_title'=>'<h2 class="widgettitle">','after_title'=>'</h2>'
));
register_sidebar(array(
    'name'=>'Global Sidebar',
    'id' => 'global-sidebar',
    'description' => 'This is the global widget area.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget'  => '</div>',
    'before_title'=>'<h2 class="widgettitle">','after_title'=>'</h2>'
));
register_sidebar(array(
    'name'=>'Home Sidebar',
    'id' => 'home-sidebar',
    'description' => 'This is the home page widget area.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget'  => '</div>',
    'before_title'=>'<h2 class="widgettitle">','after_title'=>'</h2>'
));
register_sidebar(array(
    'name'=>'Page Sidebar',
    'id' => 'page-sidebar',
    'description' => 'This is the page widget area.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget'  => '</div>',
    'before_title'=>'<h2 class="widgettitle">','after_title'=>'</h2>'
));
register_sidebar(array(
    'name'=>'Blog Sidebar',
    'id' => 'blog-sidebar',
    'description' => 'This is the blog widget area.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget'  => '</div>',
    'before_title'=>'<h2 class="widgettitle">','after_title'=>'</h2>'
));
