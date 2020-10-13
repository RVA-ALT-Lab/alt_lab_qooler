<?php
/**
 * The template for displaying all single submissions.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper submission" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->

			<div class="col-md-8 offset-md-2 content-area" id="primary">

				<main class="site-main single-sub-main" id="main" role="main">
			<!-- <main class="site-main col-md-8 offset-md-2" id="main"> -->

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'single-submission' ); ?>

							<?php //understrap_post_nav(); ?>


					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary-->

		<!-- Do the right sidebar check -->

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
