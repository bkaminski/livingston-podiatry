<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container pt-5">
	<h1 class="page-title"><?php the_title(); ?></h1>
		<div class="row">
				<div class="col-lg-9">
					<?php echo get_the_post_thumbnail($post_id, 'post_thumbnail', array( 'class' => 'img-fluid' )); ?>
					<br />
					<br />
					<?php the_content(); ?>
			
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