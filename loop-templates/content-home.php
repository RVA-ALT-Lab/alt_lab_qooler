<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->
	<div class="weather-row row">
				<div class="col-md-4 heavy">
					2020<br>
					Qooler<br>
					design<br>
					competition<br>
					for a cooler<br>
					future | <span class="triangle-down"></span><br>
					VCU Qatar<br>
				</div>
				<div class="col-md-8" id="weather-block">
					<div id="how-hot"></div>
				</div>
		</div>
		<!--ACF BLOCK LOOP-->
		<?php

			// check if the repeater field has rows of data
			if( have_rows('block_row') ):

			 	// loop through the rows of data
			    while ( have_rows('block_row') ) : the_row();

			        // display a sub field value
			        echo the_sub_field('block_item');

			    endwhile;

			else :

			    // no rows found

			endif;

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
