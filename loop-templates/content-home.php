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
				<div class="col-md-4 heavy">
					2020<br>
					Qooler:<br>
					A design<br>
					competition<br>
					for a cooler<br>
					future | <span class="triangle-down"></span><br>
					VCU Qatar<br>
				</div>
				<div class="col-md-8" id="weather-block">
					<div id="how-hot"></div>
				</div>
		</div>
	<div class="container-fluid the-bars">
		<!--ORANGE BAR START-->
		<div class="row">
			<div class="orange-bars col-md-9 offset-md-3">
				<div class="row">
					<div class="col-md-6">
						<h2 class="bar-highlight top">Behind the Idea: Qatar is
						<br>getting hotter</h2>
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
    <div class="container">
		<div class="row">
			<div class="col-md-4 weird-map">
				<img class="fluid map-tri" src="<?php echo get_template_directory_uri();?>/imgs/map_tri.svg" alt="A triangular map view of the Earth.">
			</div>
			<div class="offset-md-2 col-md-6 map-text">
				<p>This competition seeks to find solutions to the problems for humans that climate change creates in a desert/marine climate like Qatar.</p>
				<p>Being outside – whether working or playing – needs to be a part of life. But heat and humidity are uncomfortable, but in some cases, it can be dangerous.</p>
				<p><span class="qooler">Qooler</span> is a design competition that seeks solutions that enable a comfortable and enjoyable life outdoors despite increasing heat</p>
			</div>
		</div>
	</div>
</div>
<!--map zone end--> 
<!--conditions in the mid east start--> 
<div class="container-fluid me-zone">
	<div class="row orange-bg">
		<div class="col-md-6">
			<div class="callout">“Conditions in the Middle East could become so hot and humid by the end of the century that being outside for more than six hours would be intolerable.” [1]</div>
		</div>
		<div class="col-md-6 thermal-globe">			
		</div>
	</div>
</div>
<!--conditions in the mid east END--> 

<!--qatar stats start--> 
<div class="container-fluid qatar-zone">
	<div class="row gray-bg glasses center">
		<div class="col-md-8 offset-md-2">
			<div class="qatar-text">Qatar is home to nearly 3 million people. All residents need a way to live in an increasingly hotter country. We look to human ingenuity for solutions to make life in the desert peninsula more comfortable.</div>
		</div>
		<div class="col-md-6 thermal-globe">			
		</div>
	</div>
</div>
<!--qatar stats END--> 

<!--doha start--> 
<div class="container-fluid me-zone">
	<div class="row orange-bg flip">
		<div class="col-md-6">
			<div class="callout">“Qatar, most notably, is in danger because Doha is uniquely geographically positioned to receive hot dry air from the desert interior to the west and hot moist air from the Gulf.” [2]</div>
		</div>
		<div class="col-md-6 dunes">			
		</div>
	</div>
</div>
<!--doha END--> 
<!--you charge start--> 
<div class="container-fluid charge">
	<div class="row gray-bg glasses left">
		<div class="col-md-8 offset-md-2">
			<h2>This is where YOU and your design can make a difference</h2>
			<div class="qatar-text">The objective of <span class="qooler">Qooler</span> is to recognize, showcase and promote the best design ideas that embody the principles and aims of Qatar’s National Vision 2030[3] which has sustainability as a core feature of its four pillars.</div>
		</div>
		<div class="col-md-6 thermal-globe">			
		</div>
	</div>
</div>
<!--your charge END--> 

<!--three categories start--> 
<div class="container-fluid categories">
	<div class="row">
		<div class="col-md-3">
			<h2>The 3 categories for submission</h2>
			<div class="cat-details">
				Qooler wants designs that answer the call for bespoke and innovative solutions to support human adaptability to the heat, humidity, air quality impacts of the climate crisis specifically as it applies to Qatar.
			</div>
		</div>
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-4 tri-cat" id="product-button">
					<div class="cat-title-holder">
						<h3>Products/Artifacts/<br>Interventions</h3>
					</div>
					<div class="product-icon"></div>
				</div>
				<div class="col-md-4 tri-cat" id="wearble-button">
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
				<div class="col-md-4 offset-md-2">
					<a class="btn btn-learn" href="learn-more">Learn more</a>
				</div>
				<div class="col-md-6">
					<a class="btn btn-submit" href="submit">Submit an entry</a>
				</div>
			</div>
		</div>		
	</div>
</div>
<!--three categories END--> 

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
