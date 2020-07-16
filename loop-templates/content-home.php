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
					<!-- 2020<br>
					Qooler:<br>
					A design<br>
					competition<br>
					for a cooler<br>
					future | <span class="triangle-down"></span><br>
					VCU Qatar<br> -->
				</div>
				<div class="col-md-8" id="weather-block">
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
						<div class="top ugly"><h1>About<br>Qooler</h1>
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
				<img class="fluid map-tri" src="<?php echo get_template_directory_uri();?>/imgs/map_tri.svg" alt="A triangular map view of the Earth.">
			</div>
			<div class="col-md-8 map-text">
				<p>VCUarts Qatar presents a design competition for a cooler future.</p>
				<p>Qatar is the inspiration for this design competition.  A hot, humid climate where the temperatures can exceed 45 degrees C on a summer day.   But Qatar is not alone.  All over the world, climate change is a reality - global warming, sandstorms, overheating oceans, and drought are part of the increasingly worrying picture.</p>
				<h2 class="qooler">Qooler is about ideas</h2><p>Through participation in Qooler, we look for individuals to contribute to the global discourse on climate change and explore how experimentation, innovation, invention and design can make all the difference to the world.</p>
				<p>Through Qooler we seek solutions to the problems that climate change creates for humankind.</p>
				<h2>How to participate</h2><p>We want to encourage thinking beyond today’s limitations.  We want to see, hear and discuss concepts, prototypes, and pioneering designs intended to push the boundaries of what’s possible in the industry and excite the imagination.</p>
			</div>
		</div>
	</div>
</div>
<!--map zone end--> 
<!--conditions in the mid east start--> 
<!-- <div class="container-fluid me-zone">
	<div class="row orange-bg">
		<div class="col-md-6">
			<div class="callout">“Conditions in the Middle East could become so hot and humid by the end of the century that being outside for more than six hours would be intolerable.” [1]</div>
		</div>
		<div class="col-md-6 thermal-globe">			
		</div>
	</div>
</div> -->
<!--conditions in the mid east END--> 

<!--qatar stats start--> 
<!-- <div class="container-fluid qatar-zone">
	<div class="row gray-bg glasses center">
		<div class="col-md-8 offset-md-2">
			<div class="qatar-text">Qatar is home to nearly 3 million people. All residents need a way to live in an increasingly hotter country. We look to human ingenuity for solutions to make life in the desert peninsula more comfortable.</div>
		</div>
		<div class="col-md-6 thermal-globe">			
		</div>
	</div>
</div> -->
<!--qatar stats END--> 

<!--doha start--> 
<!-- <div class="container-fluid me-zone">
	<div class="row orange-bg flip">
		<div class="col-md-6">
			<div class="callout">“Qatar, most notably, is in danger because Doha is uniquely geographically positioned to receive hot dry air from the desert interior to the west and hot moist air from the Gulf.” [2]</div>
		</div>
		<div class="col-md-6 dunes">			
		</div>
	</div>
</div> -->
<!--doha END--> 
<!--you charge start--> 
<!-- <div class="container-fluid charge">
	<div class="row gray-bg glasses left">
		<div class="col-md-8 offset-md-2">
			<h2>This is where YOU and your design can make a difference</h2>
			<div class="qatar-text">The objective of <span class="qooler">Qooler</span> is to recognize, showcase and promote the best design ideas that embody the principles and aims of Qatar’s National Vision 2030[3] which has sustainability as a core feature of its four pillars.</div>
		</div>
		<div class="col-md-6 thermal-globe">			
		</div>
	</div>
</div> -->
<!--your charge END--> 

<!--three categories start--> 
<div class="container-fluid categories">
	<div class="row">
		<div class="col-md-3 cat-holder">
			<h2 class="ugly">Categories</h2>
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
				<div class="col-md-2">
					<a class="qooler submit" href="<?php echo esc_url( home_url( '/' ) ); ?>submit-an-entry/">Submit an entry</a>
				</div>
				<div class="col-md-8 offset-md-2" id="cat-detail-holder">
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
		<div class="col-md-12">
			<h2>Guidelines</h2>
		</div>
		<div class="col-md-8">						
			<div class="details-text">
				<h3>Eligibility</h3>
				<p>The competition is open to all applicants aged 18 and up. Competitors can enter alone or a team.</p>
 				<ul>
 					<li>The design must be your original work and idea.</li>
 					<li>You must have all rights to the work and idea and have not entered into commercial or licensing arrangements with any other entity at the time of entry.</li>
 					<li>You will have read and signed our terms and conditions of participation upon submission of your work.</li>
 				</ul>
			</div>
			<div class="details-text">
				<h3>Criteria</h3>
				<p>The competition wants designs that answer the call for bespoke and innovative solutions to support human adaptability to the outdoors, considering the heat, humidity, air quality problems posed by the ongoing climate crisis around the world. </p> 						
			</div>			
		</div>
		<div class="col-md-4">
			<img src="<?php echo get_template_directory_uri();?>/imgs/venn.png" class="fluid" alt="Venn diagram showing relationship between desireability, viability, and feasibility.">
		</div>
	</div>
	<div class="row white-bg">
		<div class="col-md-12">
			<div class="criteria-list">
					<div class="criteria-row">
						<div class="criteria-number ugly">
							1
						</div>
						<div class="criteria-text">
							<h4>Be desirable, viable, and feasible.</h4>
							<p>These three lenses are critical in all good design and are often referred to as “the trifecta of innovation.”</p>
							<p>Desirable: how can we create an experience that is truly human-centered and answers to the needs and aspirations of its intended audience?</p>
							<p>Feasible: what do we need to do in order to make the project happen? What are the variables we must take into account for the project to become a reality?</p>
							<p>Viable: how might you show that the solution is linked to a sustainable business model?</p>
						</div>
					</div>
					<div class="criteria-row">
						<div class="criteria-number ugly">
							2
						</div>
						<div class="criteria-text">
							<h4>Be innovative.</h4>
							<p>Creativity is key. We want to see new ideas with the potential for true impact.</p>
						</div>
					</div>
					<div class="criteria-row">
						<div class="criteria-number ugly">
							3
						</div>
						<div class="criteria-text">
							<h4>Show evidence of a rigorous research process informing the design solution proposed.</h4>
							<p>A well-researched submission clearly describes the problem, stakeholders, purpose, and proposes a solution that is contextually grounded and well informed.</p>
						</div>
					</div>
					<div class="criteria-row">
						<div class="criteria-number ugly">
							4
						</div>
						<div class="criteria-text">
							<h4>Have sustainable qualities and properties.</h4>
							<p>The design should consider the use of reusable or recycled materials, be biodegradable, and have an extended lifespan.</p>
						</div>
					</div>
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
		<div class="col-md-3">
			<div class="date-box plain">July 2020</div>
		<div class="timeline-detail">Competition registration starts<br>when the website launches.</div>	
		</div>
		<div class="col-md-3">
		<div class="date-box plain">Dec 2020</div>	
		<div class="timeline-detail">Design submission</div>
		</div>
		<div class="col-md-3">
		<div class="date-box plain">Jan-Feb 2021</div>	
		<div class="timeline-detail">Review of Design by Jury</div>	
		</div>
		<div class="col-md-3">
		<div class="date-box ugly">Mar 2021</div>	
		<div class="timeline-detail">Award date TBC</div>
		</div>			
	</div>
</div>
<!--timeline end-->

<!--judges slider start-->	
<div class="top-content">
    <div class="container-fluid judges-row">
        <div id="judges-slider" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner w-100 mx-auto" role="listbox">
                <?php echo qooler_judge_slider();?>
            </div>
            <a class="carousel-control-prev" href="#judges-slider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#judges-slider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<!--judges slider end-->

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
