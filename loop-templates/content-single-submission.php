<?php
/**
 * Single submission partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<?php //understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
	
	<!--Submission box-->

	<div class="row">
		<div class="col-md-4 kludge">
			<h1 class="ugly" id="submissions">Submission<br>gallery</h1>
		</div>
	</div>
	<!-- END Submission box-->
	<div class="col-md-12">
		<?php the_title( '<h2 class="submission-title">', '</h2>' ); ?>
	</div>
	<div class="entry-content submission-slider">

		<?php the_content(); ?>

		<?php 
			$gform_entry_id = get_post_meta( $post->ID, 'gf_entry_id', true);//gets gform entry id
			$entry = GFAPI::get_entry($gform_entry_id);//gets all entry data
			// print("<pre>".print_r($entry,true)."</pre>");
			$sub_imgs = $entry['38'].$entry['39'].$entry['40'];
			$yt_url = $entry['44'];
			$date_submitted = $entry['date_created'];
			$first_name = $entry['2.3'].$entry['12.3'];
			$last_name = $entry['2.6'].$entry['12.6'];
			$team_names = $entry['26'];
			$project_desc = $entry['33'].$entry['34'].$entry['35'];
		?>

		<!--SLIDER-->
		<div id="sub-slider" class="carousel slide submission-border-bot" data-ride="sub-slider">
		<ol class="carousel-indicators">
			<?php echo qooler_make_submission_indicators($sub_imgs);?>
		</ol>
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

		<!--TEAM & PROJECT DATA-->
		<div class="row buffer-bottom submission-border-bot">
			<div class="col-md-6"><h2>Project Team</h2><?php echo ''.$first_name. " " .$last_name.'' ?><?php echo qooler_display_team_members($team_names) ?></div><div class="col-md-6 right-justify"><h2>Submission Date</h2><?php echo $date_submitted ?></div>
		</div>
		<div class="row">
			<h2 class="col-md-12">Project Description</h2>
		</div>
		<div class="row">
			<div class="col-md-12 bottom-buffer"><?php echo $project_desc ?></div>
		</div>
		<!--END Team & Prject Data-->

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
				if ($entry['43'] != "") {
				// var_dump($entry['43']);
				echo '<div class="video-responsive"><iframe src="' .$entry['43']. '"></iframe></div>';
				}
			}
		?>
		<!--END Videos-->

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
