<?php get_header();

//Template Name: Speaker Single

?>

<?php if(have_posts()):
			while(have_posts()): the_post();

			?>


<?php
//============ ** ============ //
// 			Page HERO
//============ ** ============ //?>

<section class="hero container">
	<div class="row hero-content">
		<div class="col-10 col-centered text-center">
			<h1 class="text-white">
				<?php the_title();?>
			</h1>
			
			<?php if(get_field('quote')):?>
			<div class="speakerquote">
				<blockquote><h3><?php the_field('quote');?></h3></blockquote>
			</div>
			<?php endif;?>
			
			
		</div>
	</div>
</section>




<?php if (has_term('main-stage','f1_staffgrid_tax')): ?>

<?php
//===================== ** ===================== //
//  Second Row, Main Stage Speaker details block
//===================== ** ==================== //
?>

<section class="container speaker-top">
	<div class="row">
		<div class="col-6 stretch nopadding">
			<?php if(has_post_thumbnail()) {
			the_post_thumbnail('large');
			} else {	}
			?>
		</div>

		<div class="col-6 stretch nopadding" 
			style="background: url(<?php the_field('portfolio');?>); background-size:cover; ">
			<?php if (get_field('portfolio')): ?>
				<img src="<?php //the_field('portfolio');?>">
			<?php endif;?>
		</div>
	</div>


	<div class="row">
		<div class="col-6 staffbio">
			<?php the_field('staff_bio');?>
		</div>

		<div class="col-6">
			
			<?php if(get_field('fun_questions')):?>
			<div class="fun_questions">
				<h3>About <?php the_title();?></h3>
				<?php the_field('fun_questions');?>
			</div>
			<?php endif;?>
			
			<?php if(get_field('talk_description')):?>
			<div class="fun_questions">
				<h3>Their Talk...</h3>
				<?php the_field('talk_description');?>
			</div>
			<?php endif;?>
			
		</div>
	</div>
	
	
	
	<div class="row">
		<div class="f1_mentor_details_social_container col-6 col-centered text-center">
			<h3 class="">Find <?php the_title();?> online</h3>
				<?php if(get_field( "twitter_url" )) : echo('<a href="'); the_field( "twitter_url" ); echo('"><i class="fa fa-twitter" aria-hidden="true"></i></a>');  endif; ?>
				<?php if(get_field( "facebook_url" )) : echo('<a href="'); the_field( "facebook_url" ); echo('"><i class="fa fa-facebook" aria-hidden="true"></i></a>');  endif; ?>
				<?php if(get_field( "instagram_url" )) : echo('<a href="'); the_field( "instagram_url" ); echo('"><i class="fa fa-instagram" aria-hidden="true"></i></a>');  endif; ?>
				<?php if(get_field( "url" )) : echo('<a href="'); the_field( "url" ); echo('"><i class="fa fa-globe" aria-hidden="true"></i></a>');  endif; ?>
			</div>
	</div>
	
	


</section>

<?php elseif (has_term('breakout','f1_staffgrid_tax')): ?>

<?php
//===================== ** ===================== //
//  Second Row, Breakout Speaker details block
//===================== ** ==================== //
?>

<section class="container speaker-top">
	<div class="row">
		<div class="col-6 stretch nopadding">
			<?php if(has_post_thumbnail()) {
			the_post_thumbnail('large');
			} else {	}
			?>
		</div>

		<div class="col-6 stretch nopadding">
			<div class="staffbio">
				<?php the_field('staff_bio');?>
			</div>
			
			<?php if(get_field('talk_description')):?>
			<div class="fun_questions">
				<hr>
				<h3>Their Talk...</h3>
				<?php the_field('talk_description');?>
			</div>
			<?php endif;?>

			<div class="f1_mentor_details_social_container">
			<h3 class="text-teal">Find them online</h3>
				<?php if(get_field( "twitter_url" )) : echo('<a href="'); the_field( "twitter_url" ); echo('"><i class="fa fa-twitter" aria-hidden="true"></i></a>');  endif; ?>
				<?php if(get_field( "facebook_url" )) : echo('<a href="'); the_field( "facebook_url" ); echo('"><i class="fa fa-facebook" aria-hidden="true"></i></a>');  endif; ?>
				<?php if(get_field( "instagram_url" )) : echo('<a href="'); the_field( "instagram_url" ); echo('"><i class="fa fa-instagram" aria-hidden="true"></i></a>');  endif; ?>
				<?php if(get_field( "url" )) : echo('<a href="'); the_field( "url" ); echo('"><i class="fa fa-globe" aria-hidden="true"></i></a>');  endif; ?>
			</div>

		</div>
	</div>


</section>



<?php endif; ?>






<section class="container pricegrid">
	<div class="row">
		<div class="col-10 col-centered">
			<hr>
			<h2 class="text-center text-white">
				Get your ticket to see <?php the_title();?> & many others!
			</h2>

			<p class="text-white text-center">
				All two-day tickets include entrance to the Method + Madness Conference, PHXDW 2017 Kickoff Party, Method + Madness Evening Reception, and the PHXDW 2017 Closing Party. One-day M+M conference passes, group and AIGA discount opportunities are also available at the tickets link. 			</p>

			<?php
				//============ ** ============ //
				// 	   Get Tickets
				//============ ** ============ //

				get_template_part('parts/tickets');


				?>


		</div>




	</div>
</section>


<?php endwhile;
		endif; ?>


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
