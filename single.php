<?php get_header(); ?>
			
<?php if (have_posts()) : ?>
  <div id="post">	
	<?php while (have_posts()) : the_post(); ?>

		<h3><?php the_title(); ?></h3>
		<p>Posted <?php the_date(); ?> at <?php the_time('g:i a'); ?></p>
		
		<div class="post-content">
		<hr />
		<?php the_content(); ?>
		</div><!-- POST-CONTENT --> 

	<?php endwhile; ?>
  </div>	
<?php else : ?>

	<h2>If you see this, there are no posts in the blog.</h2>

<?php endif; ?>

<?php get_footer(); ?>