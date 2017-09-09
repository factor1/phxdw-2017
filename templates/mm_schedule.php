<?php get_header();

//Template Name: MM Schedule Page

?>


<?php
//============ ** ============ //
// 			Page HERO
//============ ** ============ //?>

<section class="hero mmconf_hero container">
	<div class="row hero-content">
		<div class="col-10 col-centered text-center">
			<h1 class="">
				Method + Madness Program
			</h1>
			<h3 class="">
				October 28-­29, 2017
				<br>The Phoenix Convention Center
				<br>8am Check­in • 9am Talks begin
			</h3>
		</div>
	</div>
</section>

<?php
//================= ** ====================== //
//  Second Row, Daily content schedule blocks
//================= ** ====================== //
?>


<section class="container conf-program">
	<div class="row">
	<article class="col-11 col-centered">
	
	
	<?php if( have_rows('program_sat') ) : ?>
	<h2 class="text-center">Saturday</h2>
	<section id="cd-timeline" class="cd-container">
		
		<?php while( have_rows('program_sat') ): the_row(); ?>	
		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2 id="<?php the_sub_field('title'); ?>"><?php the_sub_field('title'); ?></h2>
				<span class="cd-date"><?php the_sub_field('time'); ?></span>
				<?php the_sub_field('detail'); ?>
				<!--<a href="#0" class="cd-read-more">Read more</a> -->
				
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
		<?php endwhile; ?>


	</section> <!-- cd-timeline -->
	 <?php else: ?>
       	 	<div class="col-6 col-centered">
	   	 		<p class="text-center">There aren't any events scheduled for this day.</p>
	   	 	</div>
       	
	   	<?php endif; ?>
	   	
	   	
	   	
	   	
	   	
	   	
	   	
	   	<?php if( have_rows('program_sun') ) : ?>
	   	<hr>
	<h2 class="text-center" id="sunday">Sunday</h2>
	<section id="cd-timeline" class="cd-container">
		
		<?php while( have_rows('program_sun') ): the_row(); ?>	
		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2 id="<?php the_sub_field('title'); ?>"><?php the_sub_field('title'); ?></h2>
				<span class="cd-date"><?php the_sub_field('time'); ?></span>
				<?php the_sub_field('detail'); ?>
				<!--<a href="#0" class="cd-read-more">Read more</a> -->
				
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
		<?php endwhile; ?>


	</section> <!-- cd-timeline -->
	 <?php else: ?>
       	 	<div class="col-6 col-centered">
	   	 		<p class="text-center">There aren't any events scheduled for this day.</p>
	   	 	</div>
       	
	   	<?php endif; ?>

	
	</article>
	</div>
	</section>	
	

	
	<?php
//============ ** ============ //
// 	   Sign up for email
//============ ** ============ //

get_template_part('parts/newsletter');


?>


<?php
//============ ** ============ //
// 	   Include Sponsors
//============ ** ============ //

get_template_part('parts/sponsors');

?>


<?php get_footer(); ?>
	
	
		