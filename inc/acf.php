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
