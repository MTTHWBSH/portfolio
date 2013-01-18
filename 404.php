<?php get_header(); ?>
			
<section id="404">
<div class="error">

	<h1>404</h1>
	<h2>Oh no, we're stuck!</h2>
	
		<div class="meter orange">
			<span style="width: 60%"></span>
		</div>
	
	<p>loading… [never]</p>
	
	<h4>Sorry, it appears the content you're trying to access does not exist.</h4>
	<h4>Please check URL for errors, try a new search, or contact me with a detailed description of the error you've encountered:</h4>
	
	<section id="contant">
	<div class="contact">
	<form action="http://www.hostmonster.com/monstermail" enctype="multipart/form-data" method="POST">
			<input type="text" placeholder="name" name="Name" id="name">
			<input type="email" placeholder="email" name="mailfrom" id="email">
			<input type="text" placeholder="inquiry" name="inquiry" id="inquiry">
			<input type="hidden" name="sendtoemail" value="webmaster@mtthwbsh.com">
			<input class="submit" type="submit" value="submit">
	</form>
	</div><!-- CONTACT -->
	</section><!-- CONTACT -->

</div><!-- ERROR -->
</section><!-- 404 -->

<?php get_footer(); ?>