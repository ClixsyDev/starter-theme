<?php

/****************************
      		ACF 
*****************************/

// 1. customize ACF path
add_filter('acf/settings/path', 'my_acf_settings_path');
 
function my_acf_settings_path( $path ) {
 
    // update path
    $path = get_stylesheet_directory() . '/_inc/acf-include/acf/';
    
    // return
    return $path;
    
}
 

// 2. customize ACF dir
add_filter('acf/settings/dir', 'my_acf_settings_dir');
 
function my_acf_settings_dir( $dir ) {
 
    // update path
    $dir = get_stylesheet_directory_uri() . '/_inc/acf-include/acf/';
    
    // return
    return $dir;
    
}
 

// 3. Hide ACF field group menu item
//add_filter('acf/settings/show_admin', '__return_false');


// 4. Include ACF
include_once( get_stylesheet_directory() . '/_inc/acf-include/acf/acf.php' );


/****************************
      	   ACF JSON
*****************************/
/* Load JSON */
function my_acf_json_load_point( $paths ) {  
    
    // append path
    $paths[] = get_stylesheet_directory() . '/_inc/acf-include/acf-json/';
    
    
    // return
    return $paths;
    
}
add_filter('acf/settings/load_json', 'my_acf_json_load_point');

/* Save JSON */
function my_acf_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/_inc/acf-include/acf-json/';
    
    
    // return
    return $path;
    
}
add_filter('acf/settings/save_json', 'my_acf_json_save_point');

/**
 * Function that will automatically update ACF field groups via JSON file update.
 * 
 * @link http://www.advancedcustomfields.com/resources/synchronized-json/
 */
function sync_acf_fields() {
	// vars
	$groups = acf_get_field_groups();
	$sync 	= array();
	// bail early if no field groups
	if( empty( $groups ) )
		return;
	// find JSON field groups which have not yet been imported
	foreach( $groups as $group ) {
		
		// vars
		$local 		= acf_maybe_get( $group, 'local', false );
		$modified 	= acf_maybe_get( $group, 'modified', 0 );
		$private 	= acf_maybe_get( $group, 'private', false );
		// ignore DB / PHP / private field groups
		if( $local !== 'json' || $private ) {
			
			// do nothing
			
		} elseif( ! $group[ 'ID' ] ) {
			
			$sync[ $group[ 'key' ] ] = $group;
			
		} elseif( $modified && $modified > get_post_modified_time( 'U', true, $group[ 'ID' ], true ) ) {
			
			$sync[ $group[ 'key' ] ]  = $group;
		}
	}
	// bail if no sync needed
	if( empty( $sync ) )
		return;
	if( ! empty( $sync ) ) { //if( ! empty( $keys ) ) {
		
		// vars
		$new_ids = array();
		
		foreach( $sync as $key => $v ) { //foreach( $keys as $key ) {
			
			// append fields
			if( acf_have_local_fields( $key ) ) {
				
				$sync[ $key ][ 'fields' ] = acf_get_local_fields( $key );
				
			}
			// import
			$field_group = acf_import_field_group( $sync[ $key ] );
		}
	}
}
add_action( 'admin_init', 'sync_acf_fields' );
