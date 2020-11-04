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