<?php
/**
 * Template Name: About Us Section
 *
 * @package WordPress
 * @subpackage Livingston Podiatry
 * 
 */
get_header(); ?>
<?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full' );?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container-fluid pg-feat-img" style="background-image:url('<?php echo $backgroundImg[0]; ?>');"></div>
	<div class="container pt-5">
	<h1 class="page-title"><?php the_title(); ?></h1>
		<div class="row">
				<div class="col-lg-9">
					<?php the_content(); ?>
					
					<br />
				</div>
				<div class="col-lg-3 pt-3 pb-5">
					<h4>Quick Links</h4>
					<div class="list-group rounded-0">
						<a href="<?php echo get_home_url(); ?>/about-us" class="list-group-item list-group-item-action about--us">About Us</a>
						<a href="<?php echo get_home_url(); ?>/board-certified" class="list-group-item list-group-item-action board--certified">Board Certified</a>
						<a href="<?php echo get_home_url(); ?>/hospital-affiliations" class="list-group-item list-group-item-action hospital--affiliations">Hospital Affiliations</a>
						<a href="<?php echo get_home_url(); ?>/surgical-specialist" class="list-group-item list-group-item-action surgical--specialist">Surgical Specialist</a>
						<a href="#" class="list-group-item list-group-item-action">Bunion Surgery</a>
						<a href="#" class="list-group-item list-group-item-action">Hammer Toe Surgery</a>
						<a href="#" class="list-group-item list-group-item-action">Reconstructive Foot Surgery</a>
					</div>
				</div>
			</div>
			<?php the_tags('<span class="badge badge-secondary"><i class="fas fa-tags"></i> Related:</span>  ', ', '); ?>
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		
	</div>
<?php get_footer(); ?>