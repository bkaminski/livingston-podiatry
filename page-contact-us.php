<?php 
/**
 * Template Name: Page With Map
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
				<div class="col-lg-12">
					<?php the_content(); ?>

					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="<?php echo the_field('geo_map_url', 'option'); ?>"></iframe>
					</div>
					
					<br />
				</div>
			</div>
			<?php the_tags('<span class="badge badge-secondary"><i class="fas fa-tags"></i> Related:</span>  ', ', '); ?>
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		
	</div>
<?php get_footer(); ?>
