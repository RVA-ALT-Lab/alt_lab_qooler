<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php //get_sidebar( 'footerfull' ); ?>
 


		
		<div class="row" id="footer">
				<div class="col-md-8 offset-md-2 logo-bar">
					<img src="<?php echo get_template_directory_uri() . '/imgs/dark_vcu_qatar.svg' ?>" class="fluid footer-q-logo" alt="VCU Arts Qatar logo.">
				</div>			
				
				<div class="footer-widget col-md-3">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer - far left") ) : ?><?php endif;?>
				</div>
				<div class="footer-widget col-md-3">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer - medium left") ) : ?><?php endif;?>
				</div>
				<div class="footer-widget col-md-3">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer - medium right") ) : ?><?php endif;?>
				</div>
				<div class="footer-widget col-md-3">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer - far right") ) : ?><?php endif;?>
				</div>	
											


		</div><!-- row end -->


</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

