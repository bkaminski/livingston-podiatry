<div class="important-message">
	<div class="container">
		<p class="text-center text-white font-weight-bold pb-2">
			<?php echo the_field('important_message', 'option'); ?>
		</p>
	</div>
</div>
<nav class="navbar sticky-top navbar-expand-md navbar-light shadow" style="min-height:130px;background:#fff;">
	<figure>
		<a class="navbar-brand d-block d-md-none" href="<?php echo get_home_url(); ?>">
	 	<?php $uploads = wp_upload_dir(); echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/10/livingston-podiatry-associates.webp' ) . '" class="img-fluid nav--logo" alt="Livingston Podiatry Logo">';?>
	 		
	 	</a>
	 </figure>
	 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#livingstonNav" aria-controls="livingstonNav" aria-expanded="false" aria-label="Toggle navigation">
	 	<i class="fas fa-bars fa-2x"></i>
	 </button>
	 <div class="navbar-collapse collapse justify-content-md-center" id="livingstonNav">
	 	<ul class="nav navbar-nav">
	 		<li class="nav-item">
	 			<a class="nav-link text-uppercase main-nav" href="<?php echo get_home_url(); ?>/about-us">About</a>
	 		</li>
	 		<li class="nav-item">
	 			<a class="nav-link text-uppercase main-nav" href="<?php echo get_home_url(); ?>/contact-us">Contact</a>
	 		</li>
	 		<li class="nav-item dropdown">
	 			<a class="nav-link dropdown-toggle text-uppercase main-nav" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Common Conditions</a>
	 			<div class="dropdown-menu" aria-labelledby="servicesDropdown">
	 				<a class="dropdown-item" href="<?php echo get_home_url(); ?>/common-foot-conditions">Common Foot Conditions</a>
	 				<a class="dropdown-item" href="<?php echo get_home_url(); ?>/common-foot-condidions/achilles-tendinitis">Achilles Tendinitis</a>
	 				<a class="dropdown-item" href="<?php echo get_home_url(); ?>/common-foot-condidions/ankle-arthroscopy">Ankle Arthroscopy</a>
	 				<a class="dropdown-item" href="<?php echo get_home_url(); ?>/common-foot-conditions/ankle-dislocation">Ankle Dislocation</a>
	 				<a class="dropdown-item" href="<?php echo get_home_url(); ?>/common-foot-conditions/ankle-fractures">Ankle Fractures</a>
	 				<a class="dropdown-item" href="<?php echo get_home_url(); ?>/common-foot-conditions/ankle-sprains">Ankle Sprains</a>
	 				<a class="dropdown-item" href="<?php echo get_home_url(); ?>/common-foot-conditions/athletes-foot">Athletes Foot</a>
	 				<a class="dropdown-item" href="<?php echo get_home_url(); ?>/common-foot-conditions/bunion-deformity">Bunion Deformity</a>
	 				<a class="dropdown-item" href="<?php echo get_home_url(); ?>/common-foot-conditions/custom-made-foot-orthoses">Custom Made Foot Orthoses</a>
	 				<a class="dropdown-item" href="<?php echo get_home_url(); ?>/common-foot-conditions/diabetic-foot-care">Diabetic Foot Care</a>
	 				<a class="dropdown-item" href="<?php echo get_home_url(); ?>/common-foot-conditions/eswt">ESWT</a>
	 				<a class="dropdown-item" href="<?php echo get_home_url(); ?>/common-foot-conditions/flatfoot-deformity">Flatfoot Deformity</a>
	 				<a class="dropdown-item" href="<?php echo get_home_url(); ?>/common-foot-conditions/forefoot-surgery">Forefoot Surgery</a>
	 				<a class="dropdown-item" href="<?php echo get_home_url(); ?>/common-foot-conditions/hammertoes">Hammertoes</a>
	 				<a class="dropdown-item" href="<?php echo get_home_url(); ?>/common-foot-conditions/heel-pain">Heel Pain</a>
	 				<a class="dropdown-item" href="<?php echo get_home_url(); ?>/common-foot-conditions/ingrown-fungus-nails">Ingrown Fungus Nails</a>
	 				<a class="dropdown-item" href="<?php echo get_home_url(); ?>/common-foot-conditions/laser-therapy-for-nail-fungus">Laser Therapy for Nail Fungus</a>
	 				<a class="dropdown-item" href="<?php echo get_home_url(); ?>/common-foot-conditions/neuromas">Neuromas</a>
	 				<a class="dropdown-item" href="<?php echo get_home_url(); ?>/common-foot-conditions/plantar-fasciitis">Plantar Fasciitis</a>
	 				<a class="dropdown-item" href="<?php echo get_home_url(); ?>/common-foot-conditions/rearfoot-surgery">Rearfoot Surgery</a>
	 				<a class="dropdown-item" href="<?php echo get_home_url(); ?>/common-foot-conditions/warts">Warts</a>
	 			</div>
	 		</li>
	 		<li class="nav-item d-none d-md-block">
	 			<figure>
	 				<a href="<?php echo get_home_url(); ?>">
	 					<?php $uploads = wp_upload_dir(); echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/10/livingston-podiatry-associates.webp' ) . '" class="img-fluid nav--logo ml-3 mr-3" alt="Livingston Podiatry Logo">';?>
	                		
	                </a>
	            </figure>
	        </li>
	        <li class="nav-item">
	        	<a class="nav-link text-uppercase main-nav" href="<?php echo get_home_url(); ?>/patient-services">Patient Services</a>
	        </li>
	        <li class="nav-item">
	        	<a class="nav-link text-uppercase main-nav" href="<?php echo get_home_url(); ?>/our-specialists">Our Specialists</a>
	        </li>
	        <li class="nav-item">
	        	<a class="nav-link text-uppercase main-nav" href="<?php echo get_home_url(); ?>/frequently-asked-questions">Faq</a>
	        </li>
	    </ul>
	</div>
</nav>
