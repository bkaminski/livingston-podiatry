<div class="important-message">
	<div class="container">
		<p class="text-center text-white font-weight-bold">
			<?php echo the_field('important_message'); ?>
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
	                <a class="nav-link text-uppercase main-nav" href="#">About</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link text-uppercase main-nav" href="#">Our Specialists</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link text-uppercase main-nav" href="#">Patient Service</a>
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
	            <li class="nav-item">
	                <a class="nav-link text-uppercase main-nav" href="#">Common Conditions</a>
	            </li>
	        </ul>
	    </div>
</nav>
