<?php
/**
 * Partial template for content in judge.php
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header blue-header blue-glasses left">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->
		<!--ACF JUDGES BLOCK LOOP-->
		<?php

			// check if the repeater field has rows of data
			if( have_rows('judge') ):
			    $html = '<div class="judge-holder row">';
			 	// loop through the rows of data
			    while ( have_rows('judge') ) : the_row();

			        // get a sub field value
			        $name = get_sub_field('judge_name');
			        $title = get_sub_field('judge_title');
			        $bio = get_sub_field('judge_bio');
			        $img = get_sub_field('judge_picture')["sizes"]["medium"];
			        $row = get_row_index();
			        $html .= '<div class="flip-container col-md-3 judge" id="judge_'.$row.'" onclick="jQuery(\'#judge_'.$row.'\').toggleClass(\'hover\')"><div class="flipper judge-front">';
					//         <a href="#vento_nadya">
					$html .=   '<div class="front"><h2>'.$name.'</h2>';
					$html .= '<div class="magic-box" style="background-image:url('.$img.')"></div>';
					$html .= '<div class="judge-title">'.$title.'</div><div class="judge-triangle"></div></div>';

					//         </a>
					$html .=  '</div><div class="judge-back">'.$bio.'</div>';
					//     </div>
					$html .= '</div>';

			    endwhile;

			else :

			    // no rows found

			endif;
			echo $html . '</div>';
			?>
		<!--no mas block loop-->		

	<div class="entry-content">
	
		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
