<?php
/**
 * ACF Pieces
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

  
 //ACF JSON SAVER
  add_filter('acf/settings/save_json', 'qooler_json_save_point');
   
  function qooler_json_save_point( $path ) {
      
      // update path
      $path = get_stylesheet_directory() . '/acf-json';
      
      // return
      return $path;
      
  }

  //ACF JSON LOADER
  // add_filter('acf/settings/load_json', 'qooler_acf_json_load_point');

  // function qooler_acf_json_load_point( $paths ) {
      
  //     // remove original path (optional)
  //     unset($paths[0]);    
      
  //     // append path
  //     $path = get_stylesheet_directory() . '/acf-json';
      
  //     // return
  //     return $paths;
      
  // }


//submission custom post type

// Register Custom Post Type submission
// Post Type Key: submission

function create_submission_cpt() {

  $labels = array(
    'name' => __( 'Submissions', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Submission', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Submission', 'textdomain' ),
    'name_admin_bar' => __( 'Submission', 'textdomain' ),
    'archives' => __( 'Submission Archives', 'textdomain' ),
    'attributes' => __( 'Submission Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Submission:', 'textdomain' ),
    'all_items' => __( 'All Submissions', 'textdomain' ),
    'add_new_item' => __( 'Add New Submission', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Submission', 'textdomain' ),
    'edit_item' => __( 'Edit Submission', 'textdomain' ),
    'update_item' => __( 'Update Submission', 'textdomain' ),
    'view_item' => __( 'View Submission', 'textdomain' ),
    'view_items' => __( 'View Submissions', 'textdomain' ),
    'search_items' => __( 'Search Submissions', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into submission', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this submission', 'textdomain' ),
    'items_list' => __( 'Submission list', 'textdomain' ),
    'items_list_navigation' => __( 'Submission list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Submission list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'submission', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array('category'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-universal-access-alt',
  );
  register_post_type( 'submission', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_submission_cpt', 0 );