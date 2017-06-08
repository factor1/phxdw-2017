<?php
  /**
   * The default blog / index template.
   */
  get_header();?>


	  <div class="row row--full-width">
		  
	
		<div class="col-4 col-no-pad">  
			<?php get_template_part('parts/fixedleft');?> 
		</div> 
	  
	  
	  
	  
	  <div id="panels" class="col-8 col-no-pad">
		  <?php get_template_part('parts/intro');?> 
		  <?php get_template_part('parts/tickets');?> 
		  <?php get_template_part('parts/email');?> 
		  <?php get_template_part('parts/speakers');?> 
		  <?php get_template_part('parts/sponsor');?> 
		  <?php get_template_part('parts/contact');?> 
	  </div>
		  
		  
		  
		  
		  
	  </div><!-- Closes row -->
  <?php 
  get_footer();
