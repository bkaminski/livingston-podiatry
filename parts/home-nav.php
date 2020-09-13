<div class="important-message">
	<div class="container">
		<p class="text-center text-white font-weight-bold">
			<?php echo the_field('important_message'); ?>
		</p>
	</div>
</div>
<nav class="navbar sticky-top navbar-expand-md" style="min-height: 140px;">
	<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
		<?php $uploads = wp_upload_dir(); 
		echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/09/Livingston_logocolor.jpg' ) . '" class="img-fluid" alt="Livingston Podiatry Logo" width="350">'; ?>
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#livingstonNav" aria-controls="livingstonNav" aria-expanded="false" aria-label="Toggle navigation">
		<i class="fas fa-bars fa-2x"></i>
	</button>
	<div class="collapse navbar-collapse" id="livingstonNav">
		<?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => '',
			'container_class'   => '',
			'container_id'      => '',
			'menu_class'        => 'mt-5 ml-5 navbar-nav text-uppercase',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		)); ?>
  </div>
</nav>
