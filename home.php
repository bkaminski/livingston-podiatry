<?php get_header(); ?>

<div class="container">
	<div class="row mt-5">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-md-12">
				<h1 class="page-title">News:</h1>
			</div>
			<div class="col-md-9 mb-4">
			<section>
				<h2>
					<a href="<?php the_permalink(); ?>">
						
						<?php the_title(); ?>
							
					</a>
				</h2>
				<small><em>Posted on: <?php echo get_the_date(); ?></em></small>
					<?php the_excerpt(); ?>
				
				<hr>
			</section>
		</div>
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		<div class="col-md-3 pt-3 pb-5">
			<?php echo get_template_part('parts/page', 'quick-links'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
