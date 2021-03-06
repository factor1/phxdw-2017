<?php get_header();

//Template Name: MM Conference Page

?>



<?php
//============ ** ============ //
// 			Page HERO
//============ ** ============ //?>

<section class="hero mmconf_hero container">
	<div class="row hero-content">
		<div class="col-10 col-centered text-center">
			<h1 class="">
				<img src="<?php bloginfo('template_url');?>/assets/images/mm_primary.gif" alt="mm_wide_logo" width="1433" height="188" />
			</h1>
			<h2 class="">
				October 28-­29, 2017
				<br>The Phoenix Convention Center
				<br>8am Check­-in • 9am Talks begin
			</h2>
			<a href="https://www.eventbrite.com/e/method-madness-conference-phxdw-2017-tickets-33597470940?aff=erelexpmlt" class="button">
				Claim Your Spot
			</a>
		</div>
	</div>
</section>

<?php
//============ ** ============ //
//  Second Row, info block
//============ ** ============ //
?>

<section class="container conf-content">
	<div class="row">
	<article class="col-11 col-centered">

		<?php if(have_posts()):
			while(have_posts()): the_post();
				the_content();
			endwhile;
		endif ?>

	</article>
	</div>
</section>

<section id="speakers" class="container speakerthumbgrid">

	<div class="row">
		<div class="col-11 col-centered">
		<?php
		$args = array(
	        'posts_per_page'            => -1,
	        'post_type'              		=> 'f1_staffgrid_cpt',
	        'f1_staffgrid_tax'        => 'main-stage', // Department Taxonomy (per site)
	        'meta_key'              		=> 'last_name',
	        'orderby'                   => 'meta_value',
	        'order'                     => 'ASC'
	  );

		// The Query
		$query = new WP_Query( $args );

		if( $query->have_posts() ):
		?>

			<div class="row row--justify-content-start">
				<h2 class="col-12  text-center">
					M+M Speakers
				</h2>
				<?php while( $query->have_posts() ): $query->the_post();?>
					<div class="col-4 speakerthumb">
						<a href="<?php the_permalink();?>">
							<div class="profilepic glitch--hover" style="background: url('<?php echo the_post_thumbnail_url('profile-picture', 'full'); ?>') center center/cover">
								<img src="<?php the_field('glitch_gif'); ?>" class="profile-glitch" />
							</div>
							<h4>
								<?php the_title();?>
							</h4>

							<p>
								<?php the_field('title');?>
							</p>
						</a>
					</div>
			<?php endwhile;?>

<!--
			<div class="col-4 speakerthumb">
				<img src="<?php bloginfo('template_url');?>/assets/img/andmore.png" alt="And many more!">
			</div>
-->

			</div>
		<?php endif; wp_reset_postdata();?>

		<div class="col-4 col-centered" style="display: none;">
			<a href="http://phxdw.com/mm-program/" class="button" style="display:block; width:100%; margin-top:20px;">
				<h3 class="" style="text-transform:capitalize; margin:15px">View the full program schedule <i class="fa fa-chevron-right" aria-hidden="true"></i></h3>
			</a>
		</div>

		</div>
	</div>
</section>

<section class="container breakoutthumbgrid">
	<div class="row">
		<div class="col-11 col-centered">
		<?php
		$args = array(
	        'posts_per_page'            => -1,
	        'post_type'              		=> 'f1_staffgrid_cpt',
	        'f1_staffgrid_tax'        => 'breakout', // Department Taxonomy (per site)
	        'meta_key'              		=> 'last_name',
	        'orderby'                   => 'meta_value',
	        'order'                     => 'ASC'
	  );

		// The Query
		$query = new WP_Query( $args );

		if( $query->have_posts() ):
		?>
			<div class="row row--justify-content-start">
				<h2 class="col-12  text-center">
					M+M Breakout Speakers
				</h2>
				<?php while( $query->have_posts() ): $query->the_post();?>
					<div class="col-2 speakerthumb">
						<a href="<?php the_permalink();?>">
							<div class="profilepic" style="background: url('<?php echo the_post_thumbnail_url('profile-picture', 'full'); ?>') center center/cover">
								<img src="<?php the_field('glitch_gif'); ?>" class="profile-glitch" />
							</div>
							<h4>
								<?php the_title();?>
							</h4>

							<p>
								<?php the_field('title');?>
							</p>
						</a>
					</div>
			<?php endwhile;?>


			</div>
		<?php endif; wp_reset_postdata();?>

		<div class="col-11 col-centered" style="display: none;">
			<a href="http://phxdw.com/mm-program/" class="button" style="display:block; width:100%; margin-top:20px;">
				<h3 class="" style="text-transform:capitalize; margin:15px">View the full program schedule <i class="fa fa-chevron-right" aria-hidden="true"></i></h3>
			</a>
		</div>

		</div>
	</div>
</section>




<?php
//============ ** ============ //
//  Third Row, Testimonial block
//============ ** ============ //
?>

<section class="container tesimonial">
	<div class="row">
		<div class="col-12 text-center">
			<blockquote>
				<h2>
					&ldquo;Method + Madness inspires me to create more,
					strive to make my work better, and try new things.
					It reminds me why I love design.&rdquo;
				</h2>
				<cite>Kristie Erkkila</cite>
			</blockquote>
		</div>
	</div>
</section>


<?php
//============ ** ============ //
//  Join us downtown  (Phase 2)
//============ ** ============ //
?>
<section class="container join-us">
	<div class="row">
		<div class="col-6 joincontent">
			<h2>Join us in downtown<br>Phoenix, AZ</h2>
			<p>
				M+M takes place in the heart of the city. The increasingly revitalized
				downtown area is full of plenty of dining options and nightlife hotspots,
				and by October we’ll be experiencing some of the best weather of the year.
			</p>
			<p>
				<strong>The Phoenix Convention Center</strong><br>
				West building, conference room 301a<br>
				100 N. 3rd Street<br>
				Phoenix, AZ 85004
			</p>

			<p>
				Main parking entrance is at 2nd and Monroe, southeast corner, enter on 2nd st</p>
			<a href="http://dtphx.org/things-to-do/" class="button">
				Learn About Downtown Phoenix
			</a>
		</div>


<?php
//============ ** ============ //
//  Compare | Convince your boss  (Phase 2)
//============ ** ============ //
?>


	<div class="col-6">
		<div class="leftyleft stretch">
			<div class="thecontent">

				<h2 class="">How does Method + Madness compare to other conferences?</h2>
				<p>Not all conferences are created equal. Here’s why you should definitely attend this one.</p>

				<a href="<?php echo home_url(); ?>/compare-conferences" class="button">SEE HOW M+M STACKS UP</a>

			</div>
		</div>

		<div class="rightyright stretch">
			<div class="thecontent">
				<h2 class="">
					Need help convincing your boss?
				</h2>
				<p>
					The Method + Madness Conference is a solid investment in your design career.
				</p>
				<a href="<?php echo home_url(); ?>/convince-your-boss/" class="button">WHY YOU SHOULD ATTEND</a>
			</div>
		</div>
	</div>
</section>




<?php
//============ ** ============ //
//  Pricing Grid
//============ ** ============ //
?>

<section class="container pricegrid">
	<div class="row">
		<div class="col-10 col-centered">
			<h2 class="text-center ">
				Get your Method + Madness tickets now!
			</h2>

			<p class=" text-center">
				All two-day tickets include entrance to the Method + Madness Conference, PHXDW 2017 Kickoff Party, Method + Madness Evening Reception, and the PHXDW 2017 Closing Party. One-day M+M conference passes, group and AIGA discount opportunities are also available at the tickets link.
			</p>

			<?php
				//============ ** ============ //
				// 	   Get Tickets
				//============ ** ============ //

				get_template_part('parts/tickets');


				?>


		</div>




	</div>
</section>



<?php
//============ ** ============ //
//  Students  (Phase 2)
//============ ** ============ //
?>

<section class="container halfsplit studentsplit">
<div class="row">
	<div class="col-6 leftyleft stretch">
		<div class="thecontent">
			<h2 class="">Are you a student on a shoestring?</h2>
			<p>Every year, we offer a limited number of student scholarships to attend the M+M Conference. </p>
			<a href="<?php echo home_url(); ?>/student-application/" class="button">LEARN MORE</a>

		</div>
	</div>

	<div class="col-6 rightyright stretch">
		<div class="thecontent">
			<h2 class="">Why students love M+M</h2>
			<p>Don’t consider yourself a professional yet? We don’t mind! Here's why you should attend.</p>
			<a href="<?php echo home_url(); ?>/why-students-should-attend/" class="button">GET THE DETAILS</a>

		</div>
	</div>
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
