<?php

register_sidebar([
    'name'          => __( 'Blog', 'starter' ),
    'id'            => 'blog',
    'description'   => '',
    'before_widget' => '<aside id="%1$s" class="col-12 col-tl-4 col-pl-6 widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title"><span>',
    'after_title'   => '</span></h3>',
]);

register_sidebar([
    'name'          => __( 'Footer 1', 'starter' ),
    'id'            => 'footer_1',
    'description'   => '',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
]);

register_sidebar([
    'name'          => __( 'Footer 2', 'starter' ),
    'id'            => 'footer_2',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
]);

register_sidebar([
    'name'          => __( 'Footer 3', 'starter' ),
    'id'            => 'footer_3',
    'description'   => '',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
]);

register_sidebar([
    'name'          => __( 'Footer 4', 'starter' ),
    'id'            => 'footer_4',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
]);
