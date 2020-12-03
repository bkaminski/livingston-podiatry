<?php get_header(); ?>
<div class="container">
	<div class="alert alert-light mt-5">
		<h4 class="text-uppercase text-center pt-2">
			<?php printf( __( 'Content Tagged With: %s', 'livingston-podiatry' ), '<span>' . get_search_query() . '</span>' ); ?>
			<em>&ldquo;<?php single_tag_title(); ?>&rdquo;</em>
		</h4>
	</div>
	<div class="row mt-5">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="col-md-12 mb-4">
			<main>
				<h1 class="tag-link text-uppercase">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_title(); ?>
							
					</a>
				</h1>
					<?php the_excerpt(); ?>
				
				<hr>
			</main>
		</div>
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		<div class="col">
			<?php echo livingston_pagination(); ?>
				
		</div>
	</div>
</div>
<?php get_footer(); ?>
