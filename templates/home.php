<?php get_header();

//Template Name: Home Page

?>


<?php
//============ ** ============ //
// 			Home HERO
//============ ** ============ //?>

<section class="hero home_hero container">
	<div class="row hero-content text-center">
		<div class="col-12">
			GIF here of logo and glitch
		</div>
	</div>
</section>



<?php
//============ ** ============ //
//  Second Row, info block
//============ ** ============ //
?>


<section class="container home-intros halfsplit">
	<div class="row">
				<div class="col-12 thecontent">

					<?php if(have_posts()):
					while(have_posts()): the_post();
						the_content();
			     	endwhile;
			     	endif ?>
				</div><?php // end thecontent ?>
		</div><?php // end row ?>

		<div class="row">
			<div class="col-6">
				<div class="thecontent text-center">

				<h3 style="text-pink">Attend the Method + Madness Conference</h3>
		    	<p>Check out this year’s speakers and reserve your spot now!</p>
		    	<a href="<?php echo home_url(); ?>/method-and-madness-conference/" class="button">LEARN MORE ABOUT M+M</a>


				</div><?php // end thecontent ?>
			</div><?php // end col-6 ?>

			<div class="col-6">
				<div class="thecontent text-center">

				<h3 class="">See all Phoenix Design Week events</h3>
				<p class="">There are design events all week across the city.</p>
				<a href="<?php echo home_url(); ?>/events" class="button purple ">SEE THE EVENT SCHEDULE</a>

				</div><?php // end thecontent ?>
			</div><?php // end col-6 ?>
		</div><?php // end row ?>
	</div><?php // end row ?>
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
