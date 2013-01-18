<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
			
<div class="content">

<section id="work">
<div id="work_container">
  <h1>WORK</h1>
  <hr />
	<?php $paged = (get_query_var('page')) ? get_query_var('page') : 1;
$args=array('category_name'=>'portfolio','posts_per_page'=>4,'paged'=>$paged);
query_posts($args);
if (have_posts()) : while (have_posts()) : the_post(); ?>	
		
		<div class="blog-post">
		<div class="thumbnail">
		
		<a href="<?php the_permalink(); ?>">
		<?php
			if ( has_post_thumbnail() ) {
			the_post_thumbnail();
			}	
		?>	
		</a>
		
		<a class="details" href="<?php the_permalink(); ?>">
		<h6><?php echo get_the_excerpt(); ?></h6>
		</a><!-- DETAILS -->
		</div><!-- THUMBNAIL -->		
		
		<div class="aside">
		
		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		
		</div><!-- ASIDE -->
		</div><!-- BLOG - POST -->

	<?php endwhile; ?>
	
	<div id="navigation">
	<h2><?php posts_nav_link('  &#9674;  ','&#171; Newer Posts','Older Posts &#187;'); ?></h2>
	</div><!-- PAGED-NAVIGATION -->
	<?php wp_reset_query(); ?>

	<?php else : ?>
		<h2>Sorry, there are no posts to display</h2>
	<?php endif; ?>  

</div><!-- WORK_CONTAINER -->
</section><!-- WORK -->

<section id="resume">
<div id="resume_container">
  
  <h1>RESUME <span>(</span><a href="<?php bloginfo('template_url'); ?>/img/docs/resume.pdf" target="_blank"><img src="<?php 
  bloginfo('template_url'); ?>/img/pdf.png" alt="PDF icon" />PDF</a><span>)</span></h1>
  <hr />
  
  	<h2>EXPERIENCE</h2>
  	<h3>Web Team Manager <span>at The State News</span><span class="pull-right"> September 2012 - Present</span></h3>
  	<h3>Web Developer<span class="pull-right">May 2012 - September 2012</span></h3>
  	<ul>
  		<li>Plan and design information architecture, wireframes, design documents</li>
  		<li>Develop websites/web-apps HTML5, LESS, JavaScript, Twig</li>
  		<li>Manage projects for State News web development initiatives as well as several other universities</li>
  		<li>Oversee student web team</li>
  	</ul>
  	
  	<h3>User Experience Designer <span>at MSU College of Arts and Letters</span><span class="pull-right"> May 2012 - 
  	Present</span></h3>
  	<ul>
  		<li>Plan, design, and develop university web applications</li>
  		<li>Make analytics driven user interaction decisions on current web applications</li>
  		<li>Work closely with designers, developers, and content creators to produce a seamless user experience</li>
  	</ul>
  	
  	<h3>Lead UX Analyst <span>at RHS Marketing Communications</span><span class="pull-right"> May 2011 - 
  	May 2012</span></h3>
  	<ul>
  		<li>Develop, test, and report heuristic evaluations for user experience on websites for specific user bases</li>
  		<li>Measure and report on web analytics for user/brand specific websites</li>
  		<li>Generate and manage web content for user-based web applications</li>
  	</ul>
  	
  	<h3>Vice President <span>at Spartan Web Authoring Team</span><span class="pull-right"> May 2012 - 
  	Present</span></h3>
  	<h3>Treasurer <span>at Spartan Web Authoring Team</span><span class="pull-right"> January 2010 - 
  	May 2012</span></h3>  	
  	<ul>
  		<li>Manage web development projects for non-profits and student organizations</li>
  		<li>Work closely with president and other board members to develop meetings/workshops/etc.</li>
  	</ul>
  	
  	<h2>EDUCATION</h2>
  	<h3>Bachelor of Arts in Digital &amp Technical Writing &bull; Design Specialization</h3>
  	<h3>Michigan State University &bull; 2013</h3>
  		<ul>
  			<li>Dean's List Fall 2010 - Fall 2012</li>
  			<li>Cognates in design and telecommunications</li>
  		</ul>
  	
  	<h2>TECHNICAL SKILLS</h2>
  		<ul>
  			<li>UI/UX ( User Research/Testing | Wireframing | Prototyping | Information Architecture | Data Analysis )</li>
  			<li>Web Development ( HTML5 | CSS3 | LESS | JavaScript | jQuery | PHP | Twig | SQL )</li>
  			<li>Content Management ( WordPress | Gryphon | Drupal )</li>
  			<li>Graphic Design ( Photoshop | Illustrator | InDesign | Photo/Video Capturing and Editing )</li>
  			<li>Expert knowledge of web standards and browser compatibility</li>
  			<li>Good knowledge of Object-Oriented Design and MVC Architecture</li>
  			<li>Familiar with ActionScript and Flash development</li>
  			<li class="star">Willing and able to learn new concepts and technologies, I stay adaptive and evolve with 
  			the web</li>
  		</ul>	  	
  	
  	
</div><!-- RESUME_CONTAINER
</section><!-- RESUME -->

<section id="blog">
<div id="blog_container">
  <h1>BLOG</h1>
  <hr />
<?php
$args=array('category_name'=>'blog','posts_per_page'=>4);
query_posts($args);
if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div class="blog-post">
		<div class="thumbnail">
		
		<a href="<?php the_permalink(); ?>">
		<?php
			if ( has_post_thumbnail() ) {
			the_post_thumbnail();
			}	
		?>	
		</a>
		
		<a class="details" href="<?php the_permalink(); ?>">
		<h6><?php echo get_the_excerpt(); ?></h6>
		</a><!-- DETAILS -->
		</div><!-- THUMBNAIL -->		
		
		<div class="aside">
		
		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		
		</div><!-- ASIDE -->
		</div><!-- BLOG - POST -->
		

	<?php endwhile; ?>
	
	<div class="archive-btn">
	<a href="http://mtthwbsh.com/archive" class="a-btn">
    <span class="a-btn-text">Blog Archive</span> 
    <span class="a-btn-icon-right"><span></span></span>
    </a>
	</div><!-- ARCHIVE BUTTON -->

	<?php wp_reset_query(); ?>

	<?php else : ?>
		<h2>Sorry, there are no posts to display</h2>
	<?php endif; ?>
	
</div><!-- BLOG_CONTAINER -->	
</section><!-- BLOG -->

<section id="contact">
<div id="contact_container">
  <h1>CONTACT</h1>
  <hr />
  
  	<div class="contact">
		<form action="http://www.hostmonster.com/monstermail" enctype="multipart/form-data" method="POST">
			<input type="text" placeholder="name" name="Name" id="name">
			<input type="email" placeholder="email" name="mailfrom" id="email">
			<input type="text" placeholder="inquiry" name="inquiry" id="inquiry">
			<input type="hidden" name="sendtoemail" value="webmaster@mtthwbsh.com">
			<input class="submit" type="submit" value="submit">
		</form>
	</div><!-- CONTACT -->
</div><!-- CONTACT_CONTAINER -->
</section><!-- CONTACT -->

</div><!-- CONTENT -->

<?php get_footer(); ?>