<?php get_header();

//Template Name: Home Page

?>


<?php
//============ ** ============ //
// 			Home HERO
//============ ** ============ //?>



<?php // Video Hero // ?>
<section class="home--video" style="background: url() center center no-repeat;">
    <video autoplay  poster="<?php the_field('home_hero_video_poster_image');?>" id="bgvid" loop muted>
      <source src="<?php bloginfo('template_url');?>/assets/images/glitch1080.mp4" type="video/mp4">
    </video>
  </section>


<?php
//============ ** ============ //
//  Second Row, info block
//============ ** ============ //
?>


<section class="container home--intros">
	<div class="row">
				<div class="col-7 thecontent">

					<?php if(have_posts()):
					while(have_posts()): the_post();
						the_content();
			     	endwhile;
			     	endif ?>
				</div><?php // end col-7 ?>
				
				<div class="col-4">
					<h3>Attend the Method + Madness Conference</h3>
					<p>Check out this year’s speakers and reserve your spot now!</p>
					<a href="<?php echo home_url(); ?>/method-and-madness-conference/" class="button" id="">LEARN MORE ABOUT M+M</a>
			</div><?php // end col-4 ?>



		</div><?php // end row ?>


</section>


<?php
//=============== ** =============== //
// 	   See the events CTA row
//=============== ** =============== //
?>


<section class="container home--event-cta">
	<div class="row">
		<div class="col-8 col-centered">
			<h3>See all Phoenix Design Week events</h3>
			<p>There are design events all week across the city.</p>
			<a href="<?php echo home_url(); ?>/events" class="button">SEE THE EVENT SCHEDULE</a>
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
