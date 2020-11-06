<?php get_header(); ?>

<header>
	<?php get_template_part( 'parts/home', 'hero' ); ?>

</header>
<main>
	<?php get_template_part( 'parts/home', 'about' ); ?>

</main>
<section>
	<?php get_template_part( 'parts/home', 'injured' ); ?>

</section>
<section>
	<?php get_template_part( 'parts/home', 'choice' ); ?>

</section>
<section>
	<?php get_template_part( 'parts/home', 'conditions' ); ?>

</section>
<section>
	<?php get_template_part( 'parts/home', 'office' ); ?>

</section>

<?php get_footer(); ?>
