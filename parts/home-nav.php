<div class="important-message">
	<div class="container">
		<p class="text-center text-white font-weight-bold">
			<?php echo the_field('important_message', 'option'); ?>
		</p>
	</div>
</div>
<nav class="navbar sticky-top navbar-expand-md navbar-light shadow" style="min-height:130px;background:#fff;">
	 <a class="navbar-brand d-block d-md-none" href="<?php echo get_home_url(); ?>">
	 	<?php $uploads = wp_upload_dir(); echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/09/Livingston_logocolor.jpg' ) . '" class="img-fluid nav--logo" alt="Livingston Podiatry Logo">';?>
	 </a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#livingstonNav" aria-controls="livingstonNav" aria-expanded="false" aria-label="Toggle navigation">
		<i class="fas fa-bars fa-2x"></i>
	</button>
		<div class="navbar-collapse collapse justify-content-md-center" id="livingstonNav">
	        <ul class="nav navbar-nav">
	            <li class="nav-item">
	                <a class="nav-link text-uppercase main-nav" href="<?php echo get_home_url(); ?>/about-us">About</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link text-uppercase main-nav" href="#">Our Specialists</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link text-uppercase main-nav" href="#">Patient Services</a>
	            </li>
	            <li class="nav-item d-none d-md-block">
	                <a href="<?php echo get_home_url(); ?>">
	                	<?php $uploads = wp_upload_dir(); echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/09/Livingston_logocolor.jpg' ) . '" class="img-fluid nav--logo ml-3 mr-3" alt="Livingston Podiatry Logo">';?>
	                		
	                </a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link text-uppercase main-nav" href="#">Contact</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link text-uppercase main-nav" href="#">Faq</a>
	            </li>
	            <li class="nav-item dropdown">
	                <a class="nav-link dropdown-toggle text-uppercase main-nav" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Common Conditions</a>
	                	<div class="dropdown-menu dropdown-menu-right" aria-labelledby="servicesDropdown">
	                		<a class="dropdown-item" href="<?php echo get_home_url(); ?>/common-foot-conditions">Common Foot Conditions</a>
          					<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Achilles Tendinitis</a>
          					<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Ankle Arthroscopy</a>
         	 			    <a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Ankle Dislocation</a>
         	 			    <a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Ankle Fractures</a>
          					<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Ankle Sprains</a>
         	 			    <a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Athletes Foot</a>
         	 			    <a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Bunion Deformity</a>
          					<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Custom Made Foot Orthoses</a>
         	 			    <a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Diabetic Foot Care</a>
         	 			    <a class="dropdown-item" href="<?php echo get_home_url(); ?>/">ESWT</a>
          					<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Flatfoot Deformity</a>
         	 			    <a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Forefoot Surgery</a>
         	 			    <a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Hammertoes</a>
          					<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Heel Pain</a>
         	 			    <a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Ingrown Fungus Nails</a>
         	 			    <a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Laser Therapy for Nail Fungus</a>
         	 			    <a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Neuromas</a>
          					<a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Plantar Fasciitis</a>
         	 			    <a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Rearfoot Surgery</a>
         	 			    <a class="dropdown-item" href="<?php echo get_home_url(); ?>/">Warts</a>
        				</div>
	            </li>
	        </ul>
	    </div>
</nav>
