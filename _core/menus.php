<?php

function starter_menus()
{
    register_nav_menus([
        'starter_main_menu'     => 'Main Menu',
        'starter_footer_menu_1' => '1st Footer Menu',
        'starter_footer_menu_2' => '2nd Footer Menu',
        'starter_breadcrumbs'   => 'Breadcrumbs',
    ]);
}

add_action('init', 'starter_menus');
