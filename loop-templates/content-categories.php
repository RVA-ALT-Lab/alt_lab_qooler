<?php
/**
 * Partial template for content categories page template
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
			if( have_rows('category') ):
			    $html = '<div class="category-holder row">';
			 	// loop through the rows of data
			    while ( have_rows('category') ) : the_row();

			        // get a sub field value
			        $name = get_sub_field('category_title');
			        $description = get_sub_field('category_description');
			        $class = get_sub_field('category_class');
			        $html .= '<div class="col-md-10 cat-box"><div class="row">';
			         $html .= '<div class="col-md-3 order-sm-12 cat-box-icons ' . $class .  '"></div>';
			        $html .= '<div class="col-md-9 order-sm-1"><h2>' . $name . '</h2>';
			        $html .= '<div class="cat-desc">' . $description . '<a class="btn btn-cat-sub" href="">Submit an entry</a></div></div>';
			        $html .= '</div></div>';

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
