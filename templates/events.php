<?php get_header();

//Template Name: Events

?>


<?php
//============ ** ============ //
// 			Page HERO
//============ ** ============ //?>

<section class="hero events-hero container">
	<div class="row hero-content">
		<div class="col-10 col-centered text-center">
			<h1 class="text-white">
				Phoenix Design Week Events
			</h1>
			<?php the_content();?>
		</div>
	</div>
</section>




<?php
//================= ** ================= //
//  Second Row, Event repeaters block
//================= ** ================ //
?>





<section class="upcoming--list container">
	
<div class="row" style="display:none;">
	<div class="sm-col-8 md-col-5 col-centered">
		<?php
        $taxonomy     = 'event-categories';
        $orderby      = 'name';
        $show_count   = false;
        $pad_counts   = false;
        $hierarchical = true;
        $title        = '';
        $args = array(
          'taxonomy'     => $taxonomy,
          'orderby'      => $orderby,
          'show_count'   => $show_count,
          'pad_counts'   => $pad_counts,
          'hierarchical' => $hierarchical,
          'title_li'     => $title
        );
      ?>
      
      
     <select name="event-dropdown" onchange='document.location.href=this.options[this.selectedIndex].value;'> 
    <option value=""><?php echo esc_attr(__('Select Category')); ?></option> 

    <?php 
        $option = '<option value="' . get_option('home') . '/category/">All Categories</option>'; // change category to your custom page slug
        $categories = get_categories($args); 
        foreach ($categories as $category) {
            $option .= '<option value="'.get_option('home').'/category/'.$category->slug.'">';
            $option .= $category->cat_name;
            $option .= ' ('.$category->category_count.')';
            $option .= '</option>';
        }
        echo $option;
    ?>
	</select>

	</div>
</div>
	
	
	
  <div class="row">
  <div class="sm-block-grid-1 block-grid-3">
  <?php
  /**
   * Query All Events
   */
  $arrRecentEvents = array();
  $today = date('Y-m-d');
  $args = array(
      'post_type' => 'event',
      'posts_per_page' => -1,
      'orderby' => 'meta_value',
      'meta_key' => '_event_start_date',
      'order' => 'ASC',
      'meta_query' => array(
          array(
              'key' => '_event_start_date',
              'value' => $today,
              'compare' => '>=',

          )
      )
  );
  $query = new WP_Query($args);
  if ($query->have_posts()) {
      while($query->have_posts()) {
        $query->the_post();
        $post->category = wp_get_post_terms($post->ID.'event-categories');
        $arrRecentEvents[] = $post; // add post to recent posts array
      }
  }

  //If we have events
  if (!empty($arrRecentEvents)):

  global $post;
  foreach ($arrRecentEvents as $i => $post): $EM_Event = em_get_event($post->ID, 'post_id');
  ?>


    <div class="col stretch">
	    <div class="event-card">
		      <a href="<?php the_permalink();?>" >
		        <h3>
		          <?php the_title();?>
		        </h3>
		      </a>
      
		      <p>Date: <?php echo $EM_Event -> output('#_EVENTDATES');?></p>
		      
		      <?php echo $EM_Event -> output('#_EVENTCATEGORIES');?>
		      
		      <?php echo $EM_Event -> output('#_EVENTEXCERPT');?>
		        <a href="<?php the_permalink();?>" class="button dark-text">
		        	Learn More <i class="fa fa-arrow-right"></i>
				</a>
	    </div>
    </div>

<?php endforeach; endif; wp_reset_postdata();?>
  </div>
  </div>
</section>




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
