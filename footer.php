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
				<div class="col-md-4 offset-md-2 logo-bar left">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer - top left") ) : ?><?php endif;?>
				</div>
				<div class="col-md-4 logo-bar right">					
					<a href="https://qatar.vcu.edu/"><img src="<?php echo get_template_directory_uri() . '/imgs/dark_vcu_qatar.svg' ?>" class="fluid footer-q-logo" alt="VCU Arts Qatar."></a>
				</div>
				<div class="col-md-8 offset-md-2 logo-bar">		
					<div class="footer-bar"></div>	
				</div>
				<div class="col-md-4 offset-md-2 footer-widget left">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer - far left") ) : ?><?php endif;?>
				</div>						
				<div class="col-md-4 footer-widget right col-md-3">
					<div class="social">
						<a href="https://www.facebook.com/VCUQatar">Facebook</a>
						<a href="https://twitter.com/VCUQatar">Twitter</a>
						<a href="https://www.instagram.com/vcuqatar">Instagram</a>
					</div>
				</div>						
											
		</div><!-- row end -->


</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

