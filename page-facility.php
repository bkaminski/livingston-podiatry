<?php 
/**
 * Template Name: Facility Page
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

					<div id="carouselExampleControls" class="carousel slide lazy" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/livingston-front.png" class="d-block w-100" alt="Outside view of Livingston Podiatry Associates">
							</div>
							<div class="carousel-item">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/livingston-side.png" class="d-block w-100" alt="Outside view of Livingston Podiatry Associates">
							</div>
							<div class="carousel-item">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/livingston-office.png" class="d-block w-100" alt="View of reception area at Livingston Podiatry Associates">
							</div>
							<div class="carousel-item">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/livingston-inner-room.png" class="d-block w-100" alt="Image of exam room at Livingston Podiatry Associates">
							</div>
							<div class="carousel-item">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/livingston-chair.png" class="d-block w-100" alt="Image of exam room at Livingston Podiatry Associates">
							</div>
							<div class="carousel-item">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/livingston-patient-room.png" class="d-block w-100" alt="Image of exam room at Livingston Podiatry Associates">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
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