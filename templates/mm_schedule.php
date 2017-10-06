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
				<br>8am Check­-in • 9am Talks begin
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
	<h2 class="text-center">SATURDAY, OCTOBER 28</h2>
	<section id="cd-timeline" class="cd-container">

		<?php while( have_rows('program_sat') ): the_row(); ?>
		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">

			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h3 id="<?php the_sub_field('title'); ?>"><?php the_sub_field('title'); ?></h3>

				<?php if(get_sub_field('speaker')) :
					echo '<h4>';
					the_sub_field('speaker');
					echo '</h4>';
				endif;?>
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
	<h2 class="text-center" id="sunday">SUNDAY, OCTOBER 29</h2>
	<section id="cd-timeline" class="cd-container">

		<?php while( have_rows('program_sun') ): the_row(); ?>
		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">

			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h3 id="<?php the_sub_field('title'); ?>"><?php the_sub_field('title'); ?></h3>

				<?php if(get_sub_field('speaker')) :
					echo '<h4>';
					the_sub_field('speaker');
					echo '</h4>';
				endif;?>
				<span class="cd-date"><?php the_sub_field('time'); ?></span>
				<?php the_sub_field('detail'); ?>

				<?php if( have_rows('breakouts') ) : while( have_rows('breakouts') ): the_row();?>
							<div class="breakout">

								<p class="tag"><?php the_sub_field('tag'); ?></p>
								<div class="details">
									<p class="room"><?php the_sub_field('room'); ?></p>
									<p class="speaker"><?php the_sub_field('speaker'); ?><span>&nbsp;
										<?php the_sub_field('company'); ?></span></p>
									<p class="title"><a href="#<?php the_sub_field('id'); ?>"><?php the_sub_field('talk_title'); ?></a></p>
									<div class="remodal" data-remodal-id="<?php the_sub_field('id'); ?>">
									  <button data-remodal-action="close" class="remodal-close"></button>
									  <h1>Remodal</h1>
									 	<?php the_sub_field('details'); ?>
									</div>
								</div>
							</div>
						<?php endwhile; endif; ?>
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
