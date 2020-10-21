<?php
/**
 * Partial template for content in home page.php
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->
	<div class="weather-row row">
				<div class="col-md-7 heavy">					
				</div>
				<div class="col-md-5">
					<div id="weather-block"></div>
					<div id="conditions">Current conditions in Doha, Qatar</div>
					<div id="how-hot"></div>
				</div>
		</div>
	<div class="container-fluid the-bars">
		<!--ORANGE BAR START-->
		<div class="row">
			<div class="orange-bars col-md-9 offset-md-3">
				<div class="row">
					<div class="col-md-6">
						<div class="top" id="about-qooler">
							<h1 class="ugly">About<br>Qooler</h1>
						</div>
					</div>
					<div class="col-md-4">
						<div class="bar-big bar"></div>
					</div>
					<div class="col-md-2">
						<div class="bar-small bar"></div>
					</div>
				</div>
			</div>
		</div>
    <!--orange bar end-->
	</div>
<!--map zone start--> 
<div class="container-fluid map-zone">
    <div class="contain-it">
		<div class="row">
			<div class="col-md-4 weird-map">
				<img class="fluid map-tri img-fluid" src="<?php echo get_template_directory_uri();?>/imgs/dymaxion_expand.gif" alt="A triangular map projection of the Earth.">
			</div>
			<div class="col-md-8 map-text">
				<?php the_field('about_text');?>				
			</div>
		</div>
	</div>
</div>
<!--map zone end--> 

<!--three categories start--> 
<div class="container-fluid categories">
	<div class="row">
		<div class="col-md-4 cat-holder">
			<h2 class="ugly" id="categories">Categories</h2>
			<div class="cat-details">
				<?php the_field('categories_text');?>
			</div>
			<a class="qooler submit" href="<?php echo esc_url( home_url( '/' ) ); ?>submit-an-entry/">Submit an entry</a>

		</div>
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-4 tri-cat" id="product-button">
					<div class="cat-title-holder">
						<h3>Products/Artifacts/<br>Interventions</h3>
					</div>
					<div class="product-icon"></div>
				</div>
				<div class="col-md-4 tri-cat" id="wearable-button">
					<div class="cat-title-holder">					
						<h3><br>Wearables</h3><!--shameful but we're in a hurry-->
					</div>
					<div class="wearable-icon"></div>
				</div>
				<div class="col-md-4 tri-cat" id="spaces-button">
					<div class="cat-title-holder">					
						<h3>Spaces and<br>Environments</h3>
					</div>
					<div class="spaces-icon"></div>
				</div>
			</div>			
			<div class="row">
				<!-- <div class="col-md-2">
					<a class="qooler submit" href="<?php echo esc_url( home_url( '/' ) ); ?>submit-an-entry/">Submit an entry</a>
				</div> -->
				<div class="col-md-10 offset-md-1" id="cat-detail-holder">
					<div id="cat-details"></div>
				</div>
			</div>
		</div>		
	</div>
</div>
<!--three categories END--> 

<!--guidelines start-->
<div class="container-fluid details">
	<div class="row white-bg">
		<div class="col-md-4 kludge">
			<h2 class="ugly" id="guidelines">Guidelines</h2>
		</div>
		<div class="col-md-8">
		</div>
		<div class="col-md-8">	
			<div class="details-text">
				<h3>Eligibility</h3>
				<?php the_field('guidelines_text');?>					
				
			</div>
			<div class="details-text">
				<h3>Criteria</h3>
					<?php the_field('criteria_text');?>										
			</div>			
		</div>
		<div class="col-md-4">
			<img src="<?php echo get_template_directory_uri();?>/imgs/venn.png" class="fluid" alt="Venn diagram showing relationship between desireability, viability, and feasibility.">
		</div>
	</div>
	<div class="row white-bg">
		<div class="col-md-12">
			<div class="criteria-list">
						<?php get_template_part( 'loop-templates/content', 'criteria' ); ?>
				</div>	
		</div>
	</div>
</div>
<!--your charge END--> 
<!--guidelines end-->

<!--timeline start--> 
<div class="container-fluid">
	<div class="row timeline">
		<div class="col-md-12">
			<h2>Competition timeline</h2>
		</div>
		<div class="timeline-row">
			<?php get_template_part( 'loop-templates/content', 'timeline' );?>	
	</div>
</div>
<!--timeline end-->
<!--awards start-->
<div class="container-fluid awards white-bg">
	<div class="row">
		<div class="col-md-12">
			<?php the_field('awards_text');?>
			
		</div>
	</div>
</div>

<!--awards end-->
<!--judges slider start-->	
<div class="judges" id="judges">
    <div class="container-fluid judges-row">
    	<div class="col-md-4 kludge">
    		<h2 class="ugly">Judges</h2>
    	</div>
    	<div class="col-md-8">
    	</div>
        <?php echo qooler_only_god_can_judge_me();//qooler_judge_slider();?>
    </div>
</div>

<!--judges slider end-->

<!--submission display-->
	<?php echo qooler_show_subs_front();?>


	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
