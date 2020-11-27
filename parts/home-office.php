<div class="office pt-5 pb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3 style="font-size:2rem;font-weight:bold;">Dr. Livingston Bellmore, NY</h3>
				<p>Your Neighborhood Foot Doctor Servicing:</p>
					<ul>
						<li>Bellmore</li>
						<li>Wantagh</li>
						<li>Merrick</li>
						<li>East Meadow</li>
					</ul>
				<br />
				<h3 style="font-size:2rem;font-weight:bold;">Podiatrist Office Hours</h3>
				<p><?php the_field('office_hours'); ?></p>
			</div>
			<div class="col-md-6">
				<div class="whats-new">
					<h3 class="text-center pb-5" style="font-size:2.5rem;font-weight:bold;color:#facd62;">What's New?</h3>
					<?php
					// the query
					$the_query = new WP_Query( array(
						'category_name' => 'news',
						'posts_per_page' => 1,
					)); ?>
					<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="row">
							<div class="col-md-12">
								<h3><?php the_title(); ?></h3>
								<small>
									<u>Posted on: <?php echo get_the_date(); ?></u>
								
								</small>
								<br />
								<a class="btn btn-blue mt-3" href="<?php the_permalink(); ?>">Read More</a>
							</div>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php else : ?>
						<p><?php __('No News'); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
