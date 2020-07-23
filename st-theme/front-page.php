<!-- Template for the home page -->

<?php get_header();?>

<!-- HOME -->
<section id="home">
	<div class="container mx-auto">
		<div class="row">
			<div class="col-12 col-lg-5 d-flex align-items-center">
				<div>
					<h1 class="d-inline">Saving Takeouts</h1>
					<br><br>
					<h3>Free business consultation <br> for small restaurants</h3> <br>
					<a id="apply-now" href="index.php#how-does-it-work"
						class="font-weight-bold btn btn-warning btn-lg mt-4">Apply
						Now</a>
				</div>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-12 col-lg-6">
				<img id="home-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/landing.png"
					alt="Landing">
			</div>
		</div>
	</div>
</section>

<section id="banner">
	<h3></h3>
</section>

<!-- OUR MISSION SECTION -->
<section id="mission">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-8 col-xl-6 order-xl-3 mb-5 mb-xl-0" style="display:flex; align-items: center;">
				<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mission.png" alt="Mission"> -->
				<div class="videowrapper" style="--aspect-ratio:16/9; ">
					<video id="promo-video" controls src="<?php echo get_template_directory_uri(); ?>/assets/videos/promo.mp4">
					This browser doesn't support this video file.
					</video>
				</div>
			</div>
			<div class="col-0 col-xl-1 order-xl-2"></div>
			<!-- <div class="col-2 col-xl-1 order-4 order-xl-1"></div> -->
			<div class="col-8 col-xl-5 order-xl-1 d-flex align-items-center">
				<div>
					<h2>Our Mission</h2>
					<p class="mt-4">
						Our non-profit organization was founded by a group of Asian American college
						students with diverse business backgrounds that want to bring about positive change to the
						small
						business community. SavingTakeouts acknowledge that the restaurant industry has been
						affected
						drastically by the impacts of the COVID-19 pandemic and much work will need to be done to
						restore their livelihoods.
						<br> <br>
						SavingTakeouts’s mission is to provide small businesses a platform to tell their stories
						beyond
						their block. Immigrant owned businesses have always found it hard to compete with modern
						businesses with technological resources. Restaurants that have been in business for decades
						are
						rapidly being displaced by gentrification. We believe storytelling and building genuine
						connections between businesses and consumers through effective marketing will ultimately
						bring
						small business brands to new heights.
					</p>
				</div>
			</div>
			<!-- <div class="col-2 col-xl-1 order-3 order-xl-4"></div> -->
		</div>
	</div>
</section>
<hr>

<div id="how-does-it-work">
	<p id="for-volunteers"></p>
	<!-- BUSINESSES SECTION -->
	<section class="text-center" id="for-businesses">
		<div class="for-user">
			<h2>Business Owners</h2> <br><br>
			<h4 class="heading-gray">We love your food too! Here's how we can help.</h4> <br>
			<div class="container">
				<div class="row mt-5">
					<div class="col-12 col-lg-4">
						<img class="mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/checklist.png"
							alt="Checklist"> <br>
						<h5>1) Tell us how we can help</h5>
						<p class="mt-2">
							Our representatives will be here to help you with what you need.
						</p>
					</div>
					<div class="col-12 col-lg-4">
						<img class="mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/deal.png"
							alt="Deal"> <br>
						<h5>2) We'll match you with a specialist</h5>
						<p class="mt-2">
							Our team is dedicated to being there for you every step of the way.
						</p>
					</div>
					<div class="col-12 col-lg-4">
						<img class="mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/startup.png"
							alt="Startup"> <br>
						<h5>3) Get back to your business</h5>
						<p class="mt-2">
							We’ll take care of the marketing so you can focus on taking care of the customers coming
							through your door.
						</p>
					</div>
				</div>
			</div>
			<a href="https://forms.gle/2i6nYGw2gkc7bQeo8" target="_blank"
				class="font-weight-bold btn btn-warning btn-lg mt-5">
				Apply Now
			</a>
		</div>
	</section>

	<!-- VOLUNTEERS SECTION -->
	<section class="text-center" id="for-volunteers-section">
		<div class="for-user">
			<h2>Interns</h2> <br><br>
			<h4 class="heading-gray">Whether you're a student or professional, we need your help! </h4>
			<div class="container">
				<div class="row mt-5">
					<div class="col-12 col-lg-4">
						<img class="mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/hr.png"
							alt="HR"> <br>
						<h5>1) Tell us about your expertise</h5>
						<p class="mt-4">
							We want to know more about you and what you can bring to the table.
						</p>
					</div>
					<div class="col-12 col-lg-4">
						<img class="mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/deal.png"
							alt="Deal"> <br>
						<h5>2) We'll match you with a team</h5>
						<p class="mt-4">
							You’ll be working on real client work and helping to satisfy their business needs.
						</p>
					</div>
					<div class="col-12 col-lg-4">
						<img class="mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/idea.png"
							alt="Idea"> <br>
						<h5>3) Gain valuable experience</h5>
						<p class="mt-4">
							Add and develop important skills to your professional career while being a part of a
							startup
							team culture.
						</p>
					</div>
				</div>
			</div>
			<a href="<?php echo get_site_url(); ?>/open-applications/"
				class="font-weight-bold btn btn-warning btn-lg mt-5">
				Apply Now
			</a>
		</div>
	</section>
</div>
<hr>

<!-- SERVICES SECTION -->
<section class="text-center" id="services">
	<h2>Services</h2>
	<div class="container mt-5">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-4 mb-5">
				<div class="services-item">
					<i class="fa fa-server"></i>
					<h4>Website Design & Hosting</h4>
					<p>Modern website design to showcase your restaurant.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mb-5">
				<div class="services-item">
					<i class="fas fa-copyright"></i>
					<h4>Branding</h4>
					<p>Building an image that best fits your business personality.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mb-5">
				<div class="services-item">
					<i class="fab fa-facebook-f"></i>
					<h4>Social Media Management</h4>
					<p>Fostering a genuine relationship with the customers through community engagement.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mb-5">
				<div class="services-item">
					<i class="fas fa-photo-video"></i>
					<h4>Content Creation</h4>
					<p>Generating compelling and vivid media.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mb-5">
				<div class="services-item">
					<i class="fas fa-chart-line"></i>
					<h4>Creative Strategy</h4>
					<p>Optimizing marketing solutions that best align with your story.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mb-5">
				<div class="services-item">
					<i class="fa fa-pencil-ruler"></i>
					<h4>Graphic Design</h4>
					<p>Providing beautiful design work to complement your brand.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>