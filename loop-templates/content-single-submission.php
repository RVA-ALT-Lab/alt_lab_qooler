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
			// print("<pre>".print_r($entry,true)."</pre>");
			$sub_imgs = $entry['38'].$entry['39'].$entry['40'];
			$yt_url = $entry['44'];
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
		

		<!--VIDEOS-->
		<?php
			if ($entry['44'] != "") {
					if (strpos($yt_url, 'embed/') !== false) {
						$clean_url = str_replace('embed/', 'watch?v=', $yt_url);
					} 
					else {
						$clean_url = $yt_url;
					}
					echo '<div class="video-responsive">' .wp_oembed_get($clean_url). '</div>';
					// var_dump($clean_url);
			}
			
			else {
				// var_dump($entry['43']);
				echo '<div class="video-responsive"><iframe src="' .$entry['43']. '"></iframe></div>';
			}
		?>
		<!--END VIDEOS-->

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
