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
	  </div>
		  
		  
		  
		  
		  
	  </div><!-- Closes row -->
  <?php 
  get_footer();
