<?php get_header(); ?>

<div class="container">
	<section class="section">
		<div class="columns">
			<div class="column content">
				<?php 
				if (have_posts()) : while (have_posts()) : the_post();
					get_template_part('content', get_post_format());
				endwhile; endif; 
				?>
			</div>
			<div class="column is-one-quarter">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>