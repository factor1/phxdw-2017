<?php
  /**
   * The single post template.
   *
   * Used when a single post is queried.
   */
  get_header();
    

  
//============ ** ============ //
// 			Page HERO
//============ ** ============ //?>

<section class="hero events-hero container">
	<div class="row hero-content">
		<div class="col-10 col-centered text-center">
			<h1 class="text-white">
				<?php the_title();?>
			</h1>
			<p class="single--post-meta">
			<strong>
            	<?php the_time('F d, Y');?> | <?php echo $EM_Event->output('#_12HSTARTTIME');?>
			</strong>
        </p>
        <hr>
		</div>
	</div>
</section>




<?php if( have_posts() ): while( have_posts() ): the_post();?>
<section class="single--event container">
  <article>
    <div class="row">
      <div class="col-8 col-centered">
        <?php the_content();?>
      </div>
    </div>
  </article>
</section>
<?php endwhile; endif;?>

    
<?php
//=============== ** =============== //
// 	   Suggest an Event form
//=============== ** =============== //
?>

<section class="container" id="event_form">
	<div class="row">
		<div class="col-12">
		<h2 class="text-center text-white">Interested in putting together an event? Let us know!</h2>
		
		<?php gravity_form( 2, false, false, false, '', false ); ?>
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

