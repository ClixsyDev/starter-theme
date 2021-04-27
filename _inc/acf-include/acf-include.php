<?php

/****************************
            ACF
*****************************/

// Define path and URL to the ACF plugin.
define('MY_ACF_PATH', get_stylesheet_directory() . '/_inc/acf-include/acf/');
define('MY_ACF_URL', get_stylesheet_directory_uri() . '/_inc/acf-include/acf/');

// Include the ACF plugin.
include_once(MY_ACF_PATH . 'acf.php');

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url($url)
{
    return MY_ACF_URL;
}

// (Optional) Hide the ACF admin menu item.
add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
function my_acf_settings_show_admin($show_admin)
{
    return false;
}


/****************************
           ACF JSON
*****************************/

// Load JSON
add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point($paths)
{
    // append path
    $paths[] = get_stylesheet_directory() . '/_inc/acf-include/acf-json/';

    // return
    return $paths;
}

// Save JSON
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point($path)
{
    // update path
    $path = get_stylesheet_directory() . '/_inc/acf-include/acf-json/';

    // return
    return $path;
}
