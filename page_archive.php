<?php
/*
Template Name: Archive
*/
?>

<?php get_header(); ?>

<div class="content">
<div id="post">
<section id="results">

<?php $paged = (get_query_var('page')) ? get_query_var('page') : 1;
$args=array('category_name'=>'blog','posts_per_page'=>10,'paged'=>$paged);
query_posts($args);
if (have_posts()) : while (have_posts()) : the_post(); ?>	
		
			<article class="search-result">
					
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
					
					<p>Posted <?php the_time('F jS, Y') ?></p>
					
						<a href="<?php the_permalink(); ?>">
							<?php
								if ( has_post_thumbnail() ) {
									the_post_thumbnail();
									}	
									?>	
						</a>
					
					<h4><?php $content = get_the_content();
						$content = strip_tags($content);
						echo substr($content, 0, 350);
						?>...<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">more</a></h4>
					
				<hr>					
				
			</article>

			
			<?php endwhile; ?>
			
			<div class="navigation">
				<h3><?php posts_nav_link('  &#9674;  ','&#171; Newer Posts','Older Posts &#187;'); ?></h3>
				</div><!-- PAGED-NAVIGATION -->
			<?php wp_reset_query(); ?> 
			
			<?php else: ?>
				
				<h1>Sorry, there are no results to display </h1>
				
							
			<?php endif; ?>
			
			<?php wp_reset_postdata(); ?>

</section>
</div><!-- POST -->
</div><!-- CONTENT -->			
			
<?php get_footer(); ?>			