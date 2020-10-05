<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom pagination for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';

/**
 * Load ACF functions.
 */
require get_template_directory() . '/inc/acf.php';


//ADD FONTS and VCU Brand Bar
add_action('wp_enqueue_scripts', 'alt_lab_scripts');
function alt_lab_scripts() {
	$query_args = array(
		'family' => 'DM+Sans:400,500,700',
		'subset' => 'latin,latin-ext',
	);
	wp_enqueue_style ( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );

	wp_enqueue_script( 'alt_lab_js', get_template_directory_uri() . '/js/alt-lab.js', array('jQuery'), '1.1.1', true );
    }
//@import url('https://fonts.googleapis.com/css2?family=DM+Sans&display=swap');

//add footer widget areas
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Footer - far left',
    'id' => 'footer-far-left',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Footer - top left',
    'id' => 'footer-top-left',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);


if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Footer - medium right',
    'id' => 'footer-med-right',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Footer - far right',
    'id' => 'footer-far-right',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

//set a path for IMGS

  if( !defined('THEME_IMG_PATH')){
   define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/imgs/' );
  }


function bannerMaker(){
	global $post;
	 if ( get_the_post_thumbnail_url( $post->ID ) ) {
      //$thumbnail_id = get_post_thumbnail_id( $post->ID );
      $thumb_url = get_the_post_thumbnail_url($post->ID);
      //$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

        return '<div class="jumbotron custom-header-img" style="background-image:url('. $thumb_url .')"></div>';

    } 
}

function qooler_judge_slider(){
      $html = '';
      // check if the repeater field has rows of data
      if( have_rows('judge', 33) ):
        // loop through the rows of data
          while ( have_rows('judge', 33) ) : the_row();

              // get a sub field value
              $name = get_sub_field('judge_name');
              $title = get_sub_field('judge_title');
              $bio = get_sub_field('judge_bio');
              $img = get_sub_field('judge_picture')["sizes"]["judge-slider"];
              $row = get_row_index();
              if ($row === 1){
                $active = 'active';
              } else {
                $active = '';
              }
  
              $html .= '<div class="carousel-item col-12 col-sm-6 col-md-4 judge-slide '. $active .'" id="judge_'.$row.'">';

              $html .= '<div class="judge-single">';
              $html .= '<img src="'.$img.'" height="500px" width="500px" class="img-fluid" alt="A bio picture for ' . $name . '">';
              $html .= '<a href="judges#judge_' . $row . '"><h2>'.$name.'</h2></a>';
              $html .= '</div>';
              //$html .= '<div class="magic-box" style="background-image:url('.$img.')"></div>';
              //$html .= '<div class="judge-title">'.$title.'</div><div class="judge-triangle"></div></div>';
              $html .= '</div>';

          endwhile;

      else :

          // no rows found

      endif;
    return $html;

}

function qooler_only_god_can_judge_me(){
   if( have_rows('judge', 33) ):
        // loop through the rows of data
    $html = '';
          while ( have_rows('judge', 33) ) : the_row();
               $name = get_sub_field('judge_name');
              $title = get_sub_field('judge_title');
              $bio = get_sub_field('judge_bio');
              $img = get_sub_field('judge_picture')["sizes"]["medium"];
              $row = get_row_index();
              $html .= '<div class="flip-container col-md-3 judge" id="judge_'.$row.'" onclick="jQuery(\'#judge_'.$row.'\').toggleClass(\'hover\')"><div class="flipper judge-front">';
              $html .= '<div class="front">';
              $html .= '<div class="judge-single" style="background-image:url('.$img.')"><h2>'.$name.'</h2></div></div>';

              $html .=  '<div class="judge-info"><div class="judge-title">'.$title.'</div>'.$bio.'</div>';
              $html .= '</div></div>';

          endwhile;

          else :

          // no rows found

    endif;
  
  return $html;

}


add_image_size( 'judge-slider', 500, 500, array( 'center', 'center' ) ); // Hard crop left top


//FORM SUBMISSION NINJITSU

add_action( 'gform_after_submission', 'qooler_submission_update', 10, 2 );
function qooler_submission_update( $entry, $form ) {
 
    //getting post
    $post_id = $entry['post_id'];
    $gf_entry_id = rgar( $entry, 'id' );  
    $link_to_form = add_post_meta($post_id, 'gf_entry_id', $gf_entry_id, true);
    write_log( $link_to_form);

     $my_post = array(
      'ID'           => $post_id,
      'post_type' => 'submission',
  );
 
// Update the post into the database
  wp_update_post( $my_post );
}


//SUBMISSION DISPLAY FUNCTIONS

function qooler_make_submission_slider($sub_imgs){
  global $post;
  $sub_imgs = json_decode($sub_imgs);
  $featured = get_the_post_thumbnail_url($post->ID,'large');

  array_unshift($sub_imgs, $featured);
  $html = '';
  foreach ($sub_imgs as $key => $value) {
    $active = '';
    if ($key === 0){
      $active = 'active';
    }
    $html .= '<div class="carousel-item '. $active . '">';
    $html .= '<img class="d-block w-100" src="' . $value . '" alt="First slide">';
    $html .= '</div>';
  }
  return $html;
}


add_filter( 'acf/settings/remove_wp_meta_box', '__return_false' );//SHOW CUSTOM FIELDS SO YOU CAN SEE THEM OBVIOUSLY


//LOGGER -- like frogger but more useful

if ( ! function_exists('write_log')) {
   function write_log ( $log )  {
      if ( is_array( $log ) || is_object( $log ) ) {
         error_log( print_r( $log, true ) );
      } else {
         error_log( $log );
      }
   }
}

  //print("<pre>".print_r($a,true)."</pre>");
