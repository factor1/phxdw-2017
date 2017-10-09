<?php if(get_field('show_alert_bar', 'options') === true ) { ?>
  <section class="alert-bar container">
  	<div class="row" style="max-width:none;">
  		<div class="col-12 col-centered text-center">
  			<div class="alert-message">
          <?php the_field('alert_message', 'options')?>
          <a href="<?php the_field('alert_button_link', 'options')?>" class="button" style="font-size:16px;"><?php the_field('alert_button_text', 'options')?></a>
        </div>
  		</div>
  	</div>
  </section>
<?php } ?>