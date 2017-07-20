<?php
  /**
   * The default page template.
   *
   * Used when a default template individual page is queried.
   */
  get_header();
?>


    <?php
//============ ** ============ //
// 			Page HERO
//============ ** ============ //?>

<section class="hero mmconf_hero container">
	<div class="row hero-content">
		<div class="col-10 col-centered text-center">
			<h1><?php the_title(); ?></h1>
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


<?php
//============ ** ============ //
// 	   Sign up for email
//============ ** ============ //

get_template_part('parts/newsletter');


//============ ** ============ //
// 	   Include Sponsors
//============ ** ============ //

get_template_part('parts/sponsors');



  get_footer();
