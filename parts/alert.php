<?php if(get_field('show_alert_bar', 'options') === true ) { ?>
  <section class="alert-bar">
  	<div class="row">
  		<div class="col-12 col-centered text-center">
  			<p>
          <?php the_field('alert_message', 'options')?>
          <a href="<?php the_field('alert_button_link', 'options')?>" class="button"><?php the_field('alert_button_text', 'options')?></a>
        </p>
  		</div>
  	</div>
  </section>
<?php } ?>
