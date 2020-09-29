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
				<div class="col-md-8 heavy">					
				</div>
				<div class="col-md-4" id="weather-block">
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
				<p>VCUarts Qatar presents a design competition for a cooler future.</p>
				<p>Qatar is the inspiration for this design competition. A hot, humid climate where the temperatures can exceed 45 degrees C on a summer day. But Qatar is not alone. All over the world, climate change is a reality - global warming, sandstorms, overheating oceans, and drought are part of the increasingly worrying picture. </p>
				<h2 class="qooler">Qooler is about ideas</h2>
				<p><strong>Through participation in Qooler, we look for individuals to contribute to the global discourse on climate change and explore how experimentation, innovation, invention and design can make all the difference to the world.</strong></p>
				<p>Through Qooler we seek solutions to the problems that climate change creates for humankind.</p>
				<h2>How to participate</h2>
				<p>The objective of Qooler is to create an open forum where each entry becomes part of a global conversation on the contribution of design to global change.</p>
				<p>We want to encourage thinking beyond today’s limitations. We want to see, hear and discuss concepts, prototypes, and pioneering designs intended to push the boundaries of what’s possible in the industry and excite the imagination.</p>
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
				Qooler wants designs that answer the call for bespoke and innovative solutions to support human adaptability to the heat, humidity, air quality impacts of the climate crisis.  Each entry will be accompanied by a narrative that describes the experimental and speculative aspects of the entry and its conceptual framework.
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
		<div class="timeline-row">
			<div class="connect c-box">
				<div class="date-box plain">
					Registration Begins
					<div class="time">
						Oct 2020
					</div>
				</div>
			</div>
			<div class="rainbow-connection c-box"></div>
			<div class="connect c-box">
				<div class="date-box plain">
					Design submission	
					<div class="time">
						Nov 2020
					</div>
				</div>
			</div>
			<div class="rainbow-connection c-box"></div>
			<div class="connect c-box">
				<div class="date-box plain">
					Design<br>Review<br>by Jury
					<div class="time">
						Dec 2020
					</div>
				</div>	
			</div>
			<div class="rainbow-connection c-box"></div>
			<div class="c-box">
				<div class="date-box ugly">
					Award date (TBC)
				<div class="time">
						Jan 2021
				</div>
			</div>
		</div>			
	</div>
</div>
<!--timeline end-->
<!--awards start-->
<div class="container-fluid awards white-bg">
	<div class="row">
		<div class="col-md-12">
			<h2>Awards and Exhibitions</h2>
			<p>The winning submissions will be announced at an awards ceremony, via national and international media and exhibited in Qatar at Tasmeem Doha in the Spring of 2021.</p>
			<p>Tasmeem Doha is VCUarts Qatar’s biennial international conference focusing on contemporary themes in arts and design.</p>
			<h2>Award Ceremony</h2>
			<p>Prizes and certificates will be awarded to the selected designer(s) and presented during the competition’s award ceremony in conjunction with the Tasmeem 2021 Conference.</p>
			<p>Endorsed by the Qatar Foundation Research and Development and innovation (RDI) with jury members from academia and practice.</p>
			<div class="awards-list">
				<div class="award">1st Prize $ 5,000</div>
				<div class="award">2nd Prize $ 3,000</div>
				<div class="award">3rd Prize $ 2,000</div>
				<div class="award">Honorable Mention</div>
			</div>
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
	
		<?php //the_content(); ?>

		<?php
		// wp_link_pages( array(
		// 	'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
		// 	'after'  => '</div>',
		// ) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
