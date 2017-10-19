<?php if(get_field('show_alert_bar', 'options') === true && !is_page('events') && !is_singular('event') ) { ?>
  <section class="alert-bar container">
  	<div class="row" style="max-width:none;">
  		<div class="col-12 col-centered text-center">
  			<div class="alert-message">
          <?php the_field('alert_message', 'options')?>
          <a href="<?php the_field('alert_button_link', 'options')?>" class="button black" style="font-size:16px; background-color: #111"><?php the_field('alert_button_text', 'options')?></a>
        </div>
  		</div>
  	</div>
  </section>
<?php } ?>
