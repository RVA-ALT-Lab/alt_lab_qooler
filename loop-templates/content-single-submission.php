<?php
/**
 * Single submission partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php the_content(); ?>
		<?php 
			$gform_entry_id = get_post_meta( $post->ID, 'gf_entry_id', true);//gets gform entry id
			$entry = GFAPI::get_entry($gform_entry_id);//gets all entry data
			print("<pre>".print_r($entry,true)."</pre>");
			$sub_imgs = $entry['39'];
			//qooler_make_submission_slider($sub_imgs);
		?>
		<!--SLIDER-->
		<div id="sub-slider" class="carousel slide" data-ride="sub-slider">
		  <div class="carousel-inner">
			    <?php echo qooler_make_submission_slider($sub_imgs);?>
		  </div>
		  <a class="carousel-control-prev" href="#sub-slider" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#sub-slider" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<!--End Slider-->

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
