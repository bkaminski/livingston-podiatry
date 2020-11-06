<?php
/**
 * Template Name: Conditions Pages
 *
 * @package WordPress
 * @subpackage Livingston Podiatry
 * 
 */
get_header(); ?>
<?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full' );?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container-fluid pg-feat-img" style="background-image:url('<?php echo $backgroundImg[0]; ?>');">
		<h2 class="text-center text-uppercase font-weight-bold display-4 common-conditions">Common Conditions</h2>
	</div>
	<div class="container pt-5">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<div class="row">
			<div class="col-lg-9">
				<?php the_content(); ?>
					
				<br />
				<div class="border border-warning p-3">
					<h4 class="text-center pb-2">Other Common Conditions</h4>
					<div class="row">
						<div class="col-md-3">
							<ul class="list-unstyled">
								<li><a href="<?php echo get_home_url(); ?>/common-foot-condidions/achilles-tendinitis">Achilles Tendinitis</a></li>
								<li><a href="<?php echo get_home_url(); ?>/common-foot-condidions/ankle-arthroscopy">Ankle Arthroscopy</a></li>
								<li><a href="<?php echo get_home_url(); ?>/common-foot-conditions/ankle-dislocation">Ankle Dislocation</a></li>
								<li><a href="<?php echo get_home_url(); ?>/common-foot-conditions/ankle-fractures">Ankle Fractures</a></li>
								<li><a href="<?php echo get_home_url(); ?>/common-foot-conditions/ankle-sprains">Ankle Sprains</a></li>		
							</ul>
						</div>
						<div class="col-md-3">
							<ul class="list-unstyled">
								<li><a href="<?php echo get_home_url(); ?>/common-foot-conditions/athletes-foot">Athletes Foot</a></li>
								<li><a href="<?php echo get_home_url(); ?>/common-foot-conditions/bunion-deformity">Bunion Deformity</a></li>
								<li><a href="<?php echo get_home_url(); ?>/common-foot-conditions/custom-made-foot-orthoses">Custom Made Foot Orthoses</a></li>
								<li><a href="<?php echo get_home_url(); ?>/common-foot-conditions/diabetic-foot-care">Diabetic Foot Care</a></li>
								<li><a href="<?php echo get_home_url(); ?>/common-foot-conditions/eswt">ESWT</a></li>	
							</ul>
						</div>
						<div class="col-md-3">
							<ul class="list-unstyled">
								<li><a href="<?php echo get_home_url(); ?>/common-foot-conditions/flatfoot-deformity">Flatfoot Deformity</a></li>
								<li><a href="<?php echo get_home_url(); ?>/common-foot-conditions/forefoot-surgery">Forefoot Surgery</a></li>
								<li><a href="<?php echo get_home_url(); ?>/common-foot-conditions/hammertoes">Hammertoes</a></li>
								<li><a href="<?php echo get_home_url(); ?>/common-foot-conditions/heel-pain">Heel Pain</a></li>
								<li><a href="<?php echo get_home_url(); ?>/common-foot-conditions/ingrown-fungus-nails">Ingrown Fungus Nails</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<ul class="list-unstyled">
								<li><a href="<?php echo get_home_url(); ?>/common-foot-conditions/laser-therapy-for-nail-fungus">Laser Therapy for Nail Fungus</a></li>
								<li><a href="<?php echo get_home_url(); ?>/common-foot-conditions/neuromas">Neuromas</a></li>
								<li><a href="<?php echo get_home_url(); ?>/common-foot-conditions/plantar-fasciitis">Plantar Fasciitis</a></li>
								<li><a href="<?php echo get_home_url(); ?>/common-foot-conditions/rearfoot-surgery">Rearfoot Surgery</a></li>
								<li><a href="<?php echo get_home_url(); ?>/common-foot-conditions/warts">Warts</a></li>
							</ul>
						</div>
					</div>
				</div>
				<br />
				<br />
			</div>
			<div class="col-lg-3 pt-3 pb-5">
				<?php echo get_template_part('parts/page', 'quick-links'); ?>
					
			</div>
				
		</div>
		<?php the_tags('<span class="badge badge-secondary"><i class="fas fa-tags"></i> Related:</span>  ', ', '); ?>
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		
	</div>
<?php get_footer(); ?>