<?php
global $wpdb;
$table_name = $wpdb->prefix . 'cobol_types';

$cobol_types = $wpdb->get_results("SELECT * FROM $table_name");
foreach($cobol_types as $types){
	$labels = array(
    //'label' => $types->name,   
    'name' => _x($types->name, 'post type general name'),
    'singular_name' => _x($types->singularname, 'post type singular name'),
    'add_new' => _x($types->addnew, $types->singularname),
    'add_new_item' => __($types->addnewitem),
    'edit_item' => __($types->edititem),
    'new_item' => __($types->newitem),
    'all_items' => __($types->allitems),
    'view_item' => __($types->viewitem),
    'search_items' => __($types->searchitems),
    'not_found' =>  __($types->notfound),
    'not_found_in_trash' => __($types->notfoundintrash), 
    'parent_item_colon' => '',
    'menu_name' => __($types->menuname));

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => $types->publicqueryable,
    'query_var' => $types->queryvar,
    'capability_type' =>  $types->capability,
    'has_archive' => $types->hasarchive, 
    'hierarchical' => $types->hierarchical,
    'menu_position' => $types->menuposition,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    'rewrite' => array( 'slug' => true )
  ); 
    register_post_type( $types->name, $args );

}