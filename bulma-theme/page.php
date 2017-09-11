<?php get_header(); ?>

	<div class="container">
		<section class="section content">
			<?php 
				if (have_posts()) : while (have_posts()) : the_post();
					get_template_part( 'content', get_post_format() );
				endwhile; endif; 
			?>
		</section>
	</div>

<?php get_footer(); ?>